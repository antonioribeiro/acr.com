<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	// $response = new \Symfony\Component\HttpFoundation\Response;
	// $response->setStatusCode(399);
	// return $response->send();
	// return $response;

	return View::make('layouts.first');
});
