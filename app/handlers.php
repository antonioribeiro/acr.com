<?php

App::missing(function($exception)
{
	Tracker::handleException($exception, 404);

    return Response::view('home.404', array(), 404);
});