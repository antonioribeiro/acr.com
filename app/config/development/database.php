<?php

return [

	'connections' => [

		'mysql' => [
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'database',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		],

		'postgresql' => [
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => getenv('POSTGRESQL.DATABASE_NAME'),
			'username' => getenv('POSTGRESQL.DATABASE_USER'),
			'password' => getenv('POSTGRESQL.DATABASE_PASSWORD'),
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		],

	],

];
