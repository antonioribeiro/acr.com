<?php

View::composer('layouts.first', function($view)
{
	$lang = Session::get('glottos.lang');

	if (is_null($lang) || $lang === 'en-us')
	{
		$title = 'português';
		$url = URL::route('language.select', ['pt-br']);
	}
	else
	{
		$title = 'english';
		$url = URL::route('language.select', ['en-us']);
	}

    $view->with('switchLanguageTitle', $title);
 	$view->with('switchLanguageUrl', $url);
});