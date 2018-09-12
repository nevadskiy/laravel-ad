<?php

return [

    /*
    |--------------------------------------------------------------------------
    | SMS Driver
    |--------------------------------------------------------------------------
    | Supported: 'nexmo', 'array'
    |
    */
    'driver' => env('SMS_DRIVER', 'nexmo'),

    /*
    |--------------------------------------------------------------------------
    | SMS Services
    |--------------------------------------------------------------------------
    */
    'drivers' => [
        'nexmo' => [
            'app_key' => env('SMS_APP_KEY'),
            'app_secret' => env('SMS_APP_SECRET'),
        ]
    ]
];
