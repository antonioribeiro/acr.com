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

Route::get('test', function() 
{

    Deeployer::run();
    
});

Route::post('deploy', function() 
{
    Log::info("1");
    Log::info(Input::all());
    Log::info("2");
    Log::info("3");
    Log::info("4");

    return Deeployer::run();
});

Route::get('deploy', function() 
{
    Log::info("1");
    Log::info(Input::all());
    Log::info("2");
    Log::info("3");
    Log::info("7");

    return Deeployer::run();
});

// phone=123123123&description=&name=test&email=test@test.com

Route::post('post', function() 
{
        $user = new User;
        $name = Input::get('name');
        $user->login_name = implode('.', explode(' ', strtolower($name)));
        $user->name = $name;
        $user->email = Input::get('email');
        $user->password = Hash::make('1');

        return Response::json([
                'error' => false,
                'user' => $user->toArray()
                ], 200);
});


Route::get('/', array('as' => 'home', 'uses' => 'ACR\Controllers\HomeController@index'));

Route::get('api/{version}/markdown', array('as' => 'api.markdown', 'uses' => 'ACR\Controllers\ApiController@markdown'));
Route::post('api/{version}/markdown', array('as' => 'api.markdown', 'uses' => 'ACR\Controllers\ApiController@markdown'));

Route::group(array('prefix' => 'blog'), function()
{
    Route::get('/', array('as' => 'blog', 'uses' => 'ACR\Controllers\BlogController@index'));

    Route::get('articles/{slug}/{lang?}', array('as' => 'blog.articles.show', 'uses' => 'ACR\Controllers\BlogController@show'));
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

});