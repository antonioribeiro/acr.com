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

Route::get('/test', function()
{
	// Glottos::addTranslation('Home', 'Principal', 'pt-br');
	// Glottos::addTranslation('key::photography', 'Photography');
	// Glottos::addTranslation('key::technology', 'Technology');

	var_dump( Glottos::translate('IT Solutions, Systems Architecture, Web Solutions and Linux Servers. Click here to contact me.') );
	// var_dump( Glottos::translate('Home', 'pt-br') );
	// var_dump( Glottos::translate('key::photography') );

	// // Stopwatch::start('Glottos::translate(my:message)');

	// // for ($i=0; $i < 1000; $i++) { 
	// // 	Glottos::translate('my:message');
	// // }

	// // Stopwatch::stop('Glottos::translate(my:message)');

	// var_dump( Glottos::translate('my:message') );
	// var_dump( Glottos::translate('my:message', 'pt') );
	// var_dump( Glottos::translate('my:message', 'pt-br') );
	// var_dump( Glottos::translate('my:message', 'pt-pt') );
	// var_dump( Glottos::translate('my:message', 'pt-br', 2) );

	// Glottos::setModule(2);
	// var_dump( Glottos::translate('my:message', 'pt-br') );

	// Glottos::setLocale('pt-br');
	// var_dump( Glottos::translate('my:message') );

	// Glottos::setLocale('en-us');
	// var_dump( Glottos::translate('my:message') );

	// var_dump( g('my:message') );

	// Glottos::addTranslation('my:message', 'This is My Message');
	// Glottos::addTranslation('my:message', 'Esta é a minha mensagem', 'pt-br');
	// Glottos::addTranslation('my:message', 'Esta é a minha mensagem', 'pt');
	// Glottos::addTranslation('my:message', 'Esta é a minha mensagem do Módulo 2', 'pt-br', 2);
});

Route::get('/', function()
{
	return View::make('home.layout');
});

Route::get('language/{lang}', array('as' => 'language.select', 'uses' => 'LanguageController@select'));

Route::get('login', array('as' => 'login.form', 'uses' => 'LogonController@form'));

Route::post('login', array('as' => 'login.do', 'uses' => 'LogonController@login'));

Route::get('admin', array('as' => 'language.select', 'before' => 'auth', 'uses' => 'AdminController@index'));
