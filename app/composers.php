<?php

View::composer('*', function($view)
{
	$lang = Session::get('glottos.lang');

	if (is_null($lang) || $lang === 'en')
	{
		$title = 'português';
		$hint = 'ver em português';
		$url = URL::route('language.select', ['pt-br']);
		$flag = 'brazil';
	}
	else
	{
		$title = 'english';
		$hint = 'view in english';
		$url = URL::route('language.select', ['en']);
		$flag = 'england';
	}

    $view->with('switchLanguageTitle', $title);
 	$view->with('switchLanguageUrl', $url);
	$view->with('switchLanguageHint', $hint);
	$view->with('switchLanguageFlag', $flag);
});

View::composer('technology.*', function($view)
{
	$view->with('pages', ACR\Models\Page::getForRendering());
});

View::composer('*', function($view)
{
	$article = new ACR\Models\Article;

    $view->with('postsMonths', $article->getMonthsList());
});

View::composer('admin.layout', function($view)
{
	if(Session::has('success'))
	{
		$view->with('success', Session::get('success'));
	}

	if(Session::has('info'))
	{
		$view->with('info', Session::get('info'));
	}

	if(Session::has('warning'))
	{
		$view->with('warning', Session::get('warning'));
	}

	if(Session::has('danger'))
	{
		$view->with('danger', Session::get('danger'));
	}
});

