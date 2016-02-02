<?php

return array(

	'mandrill' => array(
		'secret' => getenv('MANDRILL.API.KEY'),
	),

	'rollbar' => array(
		'access_token' => getenv('ROLLBAR.ACCESS.TOKEN'),
	),

);
