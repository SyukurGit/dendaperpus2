<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\KeycloakController;

Route::view('/', 'welcome');

Route::get('/auth/redirect', function () {
    return Socialite::driver('keycloak')->redirect();
})->name('kc.redirect');

Route::get('/auth/callback', [KeycloakController::class, 'callback'])
     ->name('kc.callback');

Route::middleware('auth')->get('/dashboard', fn() => view('dashboard'))->name('dashboard');
