<?php

return array(

	'create_tracker_alias' => true,

	'tracker_alias' => 'Tracker',

	'enabled' => true,

	'log_enabled' => true,

	'store_cookie_tracker' => true,

	'connection' => null,

	'tracker_session_name' => 'tracker_session',

	'tracker_cookie_name' => 'please_change_this_cookie_name',

	'user_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\User',

	'session_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Session',

	'log_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Log',

	'path_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Path',

	'query_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Query',

	'query_argument_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\QueryArgument',

	'agent_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Agent',

	'device_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Device',

	'cookie_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Cookie',

	'domain_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Domain',

	'referer_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Referer',

	'route_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Route',

	'route_path_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\RoutePath',

	'route_path_parameter_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\RoutePathParameter',

	'error_model' => 'PragmaRX\Tracker\Vendor\Laravel\Models\Error',

	'authentication_ioc_binding' => 'auth',

	'authenticated_check_method' => 'check',

	'authenticated_user_method' => 'user',

	'authenticated_user_id_column' => 'id',

);
