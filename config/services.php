<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],


 'keycloak' => [
    'client_id'       => env('KEYCLOAK_CLIENT_ID'),
    'client_secret'   => env('KEYCLOAK_CLIENT_SECRET'), // boleh kosong jika client PUBLIC
    'redirect'        => env('KEYCLOAK_REDIRECT_URI'),
    // beberapa package membaca salah satu dari tiga key di bawah—kita isi semua biar aman
    'base_url'        => rtrim(env('KEYCLOAK_BASE_URL'), '/'), // contoh: https://iam.ar-raniry.ac.id
    'auth_server_url' => rtrim(env('KEYCLOAK_BASE_URL'), '/'),
    'host'            => rtrim(env('KEYCLOAK_BASE_URL'), '/'),
    'realm'           => env('KEYCLOAK_REALM'), // uinar
],


    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
