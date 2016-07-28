<?php

return [

    'fetch' => PDO::FETCH_CLASS,

    'default' => env('DB_CONNECTION', 'mysql'),

    'connections' => [

        'mysql' => [
            'driver'    => 'mysql',
            'read' => [
                'host'      => env('DB_HOST_TO_READ', 'localhost'),
            ],
            'write' => [
                'host'      => env('DB_HOST_TO_WRITE', 'localhost'),
            ],
            'port'      => env('DB_PORT', 3306),
            'database'  => env('DB_DATABASE', 'forge'),
            'username'  => env('DB_USERNAME', 'forge'),
            'password'  => env('DB_PASSWORD', ''),
            'charset'   => env('DB_CHARSET', 'utf8'),
            'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
            'prefix'    => env('DB_PREFIX', ''),
            'timezone'  => env('DB_TIMEZONE', '+00:00'),
            'strict'    => env('DB_STRICT_MODE', false),
        ],

        'auth' => [
            'driver'    => 'mysql',
            'read' => [
                'host'      => env('AUTH_DB_HOST_TO_READ', 'localhost'),
            ],
            'write' => [
                'host'      => env('AUTH_DB_HOST_TO_WRITE', 'localhost'),
            ],
            'port'      => env('DB_PORT', 3306),
            'database'  => env('DB_DATABASE', 'forge'),
            'username'  => env('DB_USERNAME', 'forge'),
            'password'  => env('DB_PASSWORD', ''),
            'charset'   => env('DB_CHARSET', 'utf8'),
            'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
            'prefix'    => env('DB_PREFIX', ''),
            'timezone'  => env('DB_TIMEZONE', '+00:00'),
            'strict'    => env('DB_STRICT_MODE', false),
        ],
    ],

    'migrations' => 'migrations',

    'redis' => [

        'cluster' => env('REDIS_CLUSTER', false),

        'default' => [
            'host'     => env('REDIS_HOST', '127.0.0.1'),
            'port'     => env('REDIS_PORT', 6379),
            'database' => env('REDIS_DATABASE', 0),
            'password' => env('REDIS_PASSWORD', null),
        ],

    ],

];
