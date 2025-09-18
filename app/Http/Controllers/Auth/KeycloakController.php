<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class KeycloakController extends Controller
{
    public function callback()
    {
        $kcUser = Socialite::driver('keycloak')->user();

        $user = User::firstOrCreate(
            ['email' => $kcUser->getEmail()],
            [
                'name' => $kcUser->getName() ?? $kcUser->getNickname() ?? $kcUser->getEmail(),
                'password' => bcrypt(Str::random(32)),
            ]
        );

        Auth::login($user, remember: true);
        return redirect()->intended('/dashboard');
    }
}
