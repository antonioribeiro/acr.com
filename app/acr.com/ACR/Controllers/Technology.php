<?php namespace ACR\Controllers;

use View;
use ACR\Models\Article;
use ACR\Models\Page;
use Glottos;
use Redirect;

class Technology extends Base {

	protected $article;

	public function __construct(Article $article)
	{
		$this->article = $article;
	}

	public function index()
	{

		return View::make('technology.pages.index')
				->with('pages', Page::getForRendering())
				->with('articles', Article::published()->orderBy('created_at', 'desc')->get())
				->with('pageTitle', g('Recent Articles'))
				->with('summary', true);
	}

	public function show($slug, $language = null)
	{
		if ($language)
		{
			Glottos::setLocale($language);

			return Redirect::route('technology.articles.show', $slug);
		}

		if ($article = Article::findBySlug($slug))
		{
			return View::make('technology.pages.article')
					->with('article', $article);
		}

		return Redirect::route('technology');
	}

	public function months($month, $year)
	{
		return View::make('technology.pages.index')
				->with('articles', Article::fromMonth($month, $year)->published()->orderBy('created_at', 'desc')->get())
				->with('pageTitle', g('Articles from ') . g(date("F", mktime(0, 0, 0, $month, 10))) . ' ' . $year )
				->with('summary', true);
	}

}
