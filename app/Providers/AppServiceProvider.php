<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use SocialiteProviders\Manager\SocialiteWasCalled;
use SocialiteProviders\Keycloak\Provider as KeycloakProvider; // <-- ini yang benar

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        Event::listen(SocialiteWasCalled::class, function (SocialiteWasCalled $event) {
            // Jangan pakai KeycloakExtendSocialite!
            $event->extendSocialite('keycloak', KeycloakProvider::class);
        });
    }
}
