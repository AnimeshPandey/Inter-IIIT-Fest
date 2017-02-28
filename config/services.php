<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'google' => [
    'client_id' => '540939042419-vobsd3q95b1lvvipkvj9h2f4dqa80gg1.apps.googleusercontent.com',
    'client_secret' => 'ZHeobq2gTkz118Y4TC9sAPvU',
    'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'facebook' => [
    'client_id' => '410373255977919',
    'client_secret' => 'eca01e788cd6d6a5ae42e2cff2defd50',
    'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],

];