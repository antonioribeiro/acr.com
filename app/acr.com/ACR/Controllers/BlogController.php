<?php namespace ACR\Controllers;

use View;
use ACR\Models\Article;
use Glottos;
use Redirect;

class BlogController extends BaseController {

	protected $article;

	public function __construct(Article $article)
	{
		$this->article = $article;
	}

	public function index()
	{
		return View::make('blog.pages.index')
				->with('articles', Article::published()->get())
				->with('pageTitle', g('Recent Articles'))
				->with('summary', true);
	}

	public function show($slug, $language = null)
	{
		if ($language)
		{
			Glottos::setLocale($language);

			return Redirect::route('blog.articles.show', $slug);
		}

		if ($article = Article::findBySlug($slug))
		{
			return View::make('blog.pages.article')
					->with('article', $article);
		}

		return Redirect::route('blog');
	}

	public function months($month, $year)
	{
		return View::make('blog.pages.index')
				->with('articles', Article::fromMonth($month, $year)->published()->get())
				->with('pageTitle', g('Articles from ') . g(date("F", mktime(0, 0, 0, $month, 10))) . ' ' . $year )
				->with('summary', true);
	}

}
