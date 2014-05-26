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

Route::get('/', array('as' => 'home', 'uses' => 'ACR\Controllers\HomeController@index'));

Route::get('api/{version}/markdown', array('as' => 'api.markdown', 'uses' => 'ACR\Controllers\ApiController@markdown'));
Route::post('api/{version}/markdown', array('as' => 'api.markdown', 'uses' => 'ACR\Controllers\ApiController@markdown'));

Route::get('contact', array('as' => 'contact', 'uses' => 'ACR\Controllers\ContactController@show'));

Route::post('contact/send', array('as' => 'contact.send', 'uses' => 'ACR\Controllers\ContactController@send'));

Route::group(array('prefix' => 'technology'), function()
{
    Route::get('/', array('as' => 'blog', 'uses' => 'ACR\Controllers\BlogController@index'));

    Route::get('months/{month}/{year}', array('as' => 'blog.months', 'uses' => 'ACR\Controllers\BlogController@months'));

    Route::get('articles/{slug}/{lang?}', array('as' => 'blog.articles.show', 'uses' => 'ACR\Controllers\BlogController@show'));

    Route::get('{page}', array('as' => 'bio', 'uses' => 'ACR\Controllers\StaticPagesController@show'));
});

Route::group(array('prefix' => 'photography'), function()
{
	Route::get('/', array('as' => 'photography', 'uses' => 'ACR\Controllers\Photography@index'));
});

Route::get('language/{lang}', array('as' => 'language.select', 'uses' => 'ACR\Controllers\LanguageController@select'));

Route::get('login', array('as' => 'login.form', 'uses' => 'ACR\Controllers\LogonController@form'));

Route::post('login', array('as' => 'login.do', 'uses' => 'ACR\Controllers\LogonController@login'));

Route::get('logout', array('as' => 'logout.do', 'uses' => 'ACR\Controllers\LogonController@logout'));

Route::group(array('before' => 'auth'), function()
{

    Route::group(array('prefix' => 'admin'), function()
    {
        Route::get('/', array('as' => 'admin', 'uses' => 'ACR\Controllers\Admin\AdminController@index'));

        Route::get('articles', array('as' => 'admin.articles.index', 'uses' => 'ACR\Controllers\Admin\ArticlesController@index'));

        Route::get('articles/{id}/edit', array('as' => 'admin.articles.edit', 'uses' => 'ACR\Controllers\Admin\ArticlesController@edit'));

        Route::patch('articles/{id}', array('as' => 'admin.articles.update', 'uses' => 'ACR\Controllers\Admin\ArticlesController@update'));

        Route::get('articles/create', array('as' => 'admin.articles.create', 'uses' => 'ACR\Controllers\Admin\ArticlesController@create'));

        Route::post('articles/store', array('as' => 'admin.articles.store', 'uses' => 'ACR\Controllers\Admin\ArticlesController@store'));

        Route::get('articles/{id}/publish', array('as' => 'admin.articles.publish', 'uses' => 'ACR\Controllers\Admin\ArticlesController@publish'));

        Route::get('articles/{id}/unpublish', array('as' => 'admin.articles.unpublish', 'uses' => 'ACR\Controllers\Admin\ArticlesController@unpublish'));
    });

    Route::get('languages/stats', array('as' => 'admin.languages.stats', 'uses' => 'ACR\Controllers\Admin\LanguagesController@stats'));

    Route::get('languages/translate', array('as' => 'admin.languages.translate', 'uses' => 'ACR\Controllers\Admin\LanguagesController@translate'));

    Route::get('languages/translation/next/{primaryLanguage}/{secondaryLanguage}', array('as' => 'admin.translation.next', 'uses' => 'ACR\Controllers\Admin\LanguagesController@next'));

    Route::get('languages/translation/edit/{message}/{primaryLanguage}/{secondaryLanguage}', array('as' => 'admin.translation.edit', 'uses' => 'ACR\Controllers\Admin\LanguagesController@edit'));

    Route::post('languages/translation/store/{message}/{primaryLanguage}/{secondaryLanguage}', array('as' => 'admin.translation.store', 'uses' => 'ACR\Controllers\Admin\LanguagesController@store'));

    Route::get('languages/show/{primary}/{secondary?}', array('as' => 'admin.languages.show', 'uses' => 'ACR\Controllers\Admin\LanguagesController@show'));

    Route::get('languages/{filter?}', array('as' => 'admin.languages.index', 'uses' => 'ACR\Controllers\Admin\LanguagesController@index'));

    Route::get('languages/{id}/enable', array('as' => 'admin.languages.enable', 'uses' => 'ACR\Controllers\Admin\LanguagesController@enableLanguage'));

    Route::get('languages/{id}/disable', array('as' => 'admin.languages.disable', 'uses' => 'ACR\Controllers\Admin\LanguagesController@disableLanguage'));

	Route::get('languages/messages/{messageId}/delete', array('as' => 'admin.languages.messages.delete', 'uses' => 'ACR\Controllers\Admin\LanguagesController@deleteMessage'));
});