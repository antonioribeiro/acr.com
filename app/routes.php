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

Route::any('test', function()
{

    dd( Route::current() );

});

Route::any('deploy', function()
{
    return Deeployer::run();
});

Route::group(['namespace' => 'ACR\Controllers'], function()
{
	Route::get('/', array('as' => 'home', 'uses' => 'Home@index'));

	Route::get('api/{version}/markdown', array('as' => 'api.markdown', 'uses' => 'Api@markdown'));
	Route::post('api/{version}/markdown', array('as' => 'api.markdown', 'uses' => 'Api@markdown'));

	Route::get('contact', array('as' => 'contact', 'uses' => 'Contact@show'));

	Route::post('contact/send', array('as' => 'contact.send', 'uses' => 'Contact@send'));

	Route::group(array('prefix' => 'technology'), function()
	{
	    Route::get('/', array('as' => 'technology', 'uses' => 'Technology@index'));

	    Route::get('months/{month}/{year}', array('as' => 'technology.months', 'uses' => 'Technology@months'));

	    Route::get('articles/{slug}/{lang?}', array('as' => 'technology.articles.show', 'uses' => 'Technology@show'));

	    Route::get('{page}', array('as' => 'bio', 'uses' => 'StaticPages@show'));
	});

	Route::group(array('prefix' => 'photography'), function()
	{
		Route::get('/', array('as' => 'photography', 'uses' => 'Photography@index'));
	});

	Route::get('language/{lang}', array('as' => 'language.select', 'uses' => 'Language@select'));

	Route::get('login', array('as' => 'login.form', 'uses' => 'Logon@form'));

	Route::post('login', array('as' => 'login.do', 'uses' => 'Logon@login'));

	Route::get('logout', array('as' => 'logout.do', 'uses' => 'Logon@logout'));

	Route::group(array('before' => 'auth'), function()
	{
	    Route::group(array('prefix' => 'admin'), function()
	    {
		    Route::get('/', array('as' => 'admin', 'uses' => 'Admin\Admin@index'));

		    Route::group(array('prefix' => 'articles'), function()
		    {
			    Route::get('/', array('as' => 'admin.articles.index', 'uses' => 'Admin\Articles@index'));

			    Route::get('{id}/edit', array('as' => 'admin.articles.edit', 'uses' => 'Admin\Articles@edit'));

			    Route::patch('{id}', array('as' => 'admin.articles.update', 'uses' => 'Admin\Articles@update'));

			    Route::get('create', array('as' => 'admin.articles.create', 'uses' => 'Admin\Articles@create'));

			    Route::post('store', array('as' => 'admin.articles.store', 'uses' => 'Admin\Articles@store'));

			    Route::get('{id}/publish', array('as' => 'admin.articles.publish', 'uses' => 'Admin\Articles@publish'));

			    Route::get('{id}/unpublish', array('as' => 'admin.articles.unpublish', 'uses' => 'Admin\Articles@unpublish'));
		    });

		    Route::group(array('prefix' => 'pages'), function()
		    {
			    Route::get('/', array('as' => 'admin.pages.index', 'uses' => 'Admin\Pages@index'));

			    Route::get('{id}/edit', array('as' => 'admin.pages.edit', 'uses' => 'Admin\Pages@edit'));

			    Route::patch('{id}', array('as' => 'admin.pages.update', 'uses' => 'Admin\Pages@update'));

			    Route::get('create', array('as' => 'admin.pages.create', 'uses' => 'Admin\Pages@create'));

			    Route::post('store', array('as' => 'admin.pages.store', 'uses' => 'Admin\Pages@store'));
		    });

		    Route::group(array('prefix' => 'languages'), function()
		    {
			    Route::get('/', array('as' => 'admin.languages.index', 'uses' => 'Admin\Languages@index'));

			    Route::get('stats', array('as' => 'admin.languages.stats', 'uses' => 'Admin\Languages@stats'));

			    Route::get('translate', array('as' => 'admin.languages.translate', 'uses' => 'Admin\Languages@translate'));

			    Route::get('translation/next/{primaryLanguage}/{secondaryLanguage}', array('as' => 'admin.translation.next', 'uses' => 'Admin\Languages@next'));

			    Route::get('translation/edit/{message}/{primaryLanguage}/{secondaryLanguage}', array('as' => 'admin.translation.edit', 'uses' => 'Admin\Languages@edit'));

			    Route::post('translation/store/{message}/{primaryLanguage}/{secondaryLanguage}', array('as' => 'admin.translation.store', 'uses' => 'Admin\Languages@store'));

			    Route::get('show/{primary}/{secondary?}', array('as' => 'admin.languages.show', 'uses' => 'Admin\Languages@show'));

			    Route::get('{filter?}', array('as' => 'admin.languages.index', 'uses' => 'Admin\Languages@index'));

			    Route::get('{id}/enable', array('as' => 'admin.languages.enable', 'uses' => 'Admin\Languages@enableLanguage'));

			    Route::get('{id}/disable', array('as' => 'admin.languages.disable', 'uses' => 'Admin\Languages@disableLanguage'));

			    Route::get('messages/{messageId}/delete', array('as' => 'admin.languages.messages.delete', 'uses' => 'Admin\Languages@deleteMessage'));
		    });
	    });
	});
});