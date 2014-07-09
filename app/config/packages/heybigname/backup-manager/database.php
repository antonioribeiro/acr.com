<?php

return [
	'postgresql' => [
        'type' => 'postgresql',
        'host' => 'localhost',
        'port' => '5432',
        'user' => getenv('MAIN.DATABASE_USER'),
        'pass' => getenv('MAIN.DATABASE_PASSWORD'),
        'database' => getenv('MAIN.DATABASE_NAME'),
    ],

    'tracker' => [
        'type' => 'postgresql',
        'host' => 'localhost',
        'port' => '5432',
        'user' => getenv('TRACKER.DATABASE_USER'),
        'pass' => getenv('TRACKER.DATABASE_PASSWORD'),
        'database' => getenv('TRACKER.DATABASE_NAME'),
    ],
];
