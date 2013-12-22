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

	$pdf = new TCPDF();
	$pdf->SetPrintHeader(false);
	$pdf->SetPrintFooter(false);
	$pdf->AddPage();
	$pdf->Text(90, 140, 'This is a test');
	$filename = storage_path() . '/test.pdf';
	$pdf->output($filename, 'F');

	return Response::download($filename);

    Glottos::translate('PHOTOGRAPHY');

    k( Lang::trans('PHOTOGRAPHY', array(), null, 'en') );
    k( Lang::trans('PHOTOGRAPHY', array(), null, 'pt-br') );

    k( Lang::trans('PHOTOGRAPHY', array(), 'main', 'en') );
    k( Lang::trans('PHOTOGRAPHY', array(), 'main', 'pt-br') );

    k('choice');
    k( Lang::choice('PHOTOGRAPHY|PHOTOGRAPHIES', 100, array(), 'pt_BR') );
    kk( 'end' );

    // Log::info('test');
    
    // Lang::has('reminders.password');

    Lang::load('*', 'reminders', 'en');
    Lang::load('*', 'pagination', 'en');

    // var_dump( Glottos::translate('TECHNOLOGY', 'pt-br') );

    // Glottos::translate('key::photography');

    // Glottos::addTranslation('Home', 'Principal', 'pt-br');
    // Glottos::addTranslation('key::photography', 'Photography');
    // Glottos::addTranslation('key::technology', 'Technology');

    // var_dump( Glottos::translate('IT Solutions, Systems Architecture, Web Solutions and Linux Servers. Click here to contact me.') );
    // var_dump( Glottos::translate('Home', 'pt-br') );
    // var_dump( Glottos::translate('key::photography') );

    // // Stopwatch::start('Glottos::translate(my:message)');

    // // for ($i=0; $i < 1000; $i++) { 
    // //   Glottos::translate('my:message');
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

Route::get('/', array('as' => 'home', 'uses' => 'ACR\Controllers\HomeController@index'));

Route::group(array('prefix' => 'blog'), function()
{
    Route::get('/', array('as' => 'blog', 'uses' => 'ACR\Controllers\BlogController@index'));

    Route::get('articles/{slug}', array('as' => 'blog.articles.show', 'uses' => 'ACR\Controllers\BlogController@show'));
});

Route::get('language/{lang}', array('as' => 'language.select', 'uses' => 'ACR\Controllers\LanguageController@select'));

Route::get('login', array('as' => 'login.form', 'uses' => 'ACR\Controllers\LogonController@form'));

Route::post('login', array('as' => 'login.do', 'uses' => 'ACR\Controllers\LogonController@login'));

Route::get('logout', array('as' => 'logout.do', 'uses' => 'ACR\Controllers\LogonController@logout'));

Route::group(array('before' => 'auth'), function()
{

    Route::group(array('before' => 'auth'), function()
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