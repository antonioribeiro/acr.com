<?php

return array(

	'enabled' => true,

	'stats_panel_enabled' => true,

	'stats_route_before_filter' => 'auth',

	'log_enabled' => true,

	'log_sql_queries' => false,

	'log_sql_queries_bindings' => true,

	'connection' => 'tracker',

	'do_not_log_sql_queries_connections' => array(
		'tracker'
	),

	'do_not_track_ips' => array(
		'127.0.0.1' /// range 127.0.0.1 - 127.0.0.255
	),

	'do_not_track_environments' => array(

	),

	'do_not_log_events' => array(
		'eloquent.*',
		'illuminate.log',
		'router.*',
		'composing: *',
		'creating: *',
	),

	'log_events' => true,

	'user_model' => 'User',

	'log_geoip' => true,
	'log_user_agents' => true,
	'log_users' => true,
	'log_devices' => true,
	'log_referers' => true,
	'log_paths' => true,
	'log_queries' => true,
	'log_routes' => true,

);
