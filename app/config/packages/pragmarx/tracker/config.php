<?php

return array(

	'enabled' => false,

	'log_enabled' => true,

	'log_sql_queries' => true,

	'log_sql_queries_bindings' => true,

	'do_not_log_sql_queries_connections' => array(
		'tracker'
	),

	'do_not_track_ips' => array(
		'127.0.0.1' /// range 127.0.0.1 - 127.0.0.255
	),

	'do_not_track_environments' => array(

	),

	'do_not_log_events' => array(
		'eloquent.*'
	),

	'log_events' => true,

	'connection' => 'tracker',

	'user_model' => 'User',

);
