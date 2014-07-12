<?php

return [
    'local' => [
        'type' => 'Local',

        'root' => getenv('BACKUP.PATH') . '/' .
	                getenv('DOMAIN') . '/' .
	                gethostname() . '.' .
	                getenv('LARAVEL_ENV') . '.' .
                    app()->make('db')->connection()->getDatabaseName() . '.' .
	                app()->make('db')->connection()->getDriverName() . '.' .
	                \Carbon\Carbon::now()->format('Y-m-d+H\hi\ms\s') . '.'

    ],
];

