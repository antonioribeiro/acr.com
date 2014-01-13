<?php namespace ACR\Controllers;

use View;
use ACR\Models\Article;
use Glottos;

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
				->with('postsMonths', $this->article->getMonthsList());
	}

	public function show($slug, $language = null)
	{
		if ($language)
		{
			Glottos::setLocale($language);
		}

		if ($article = Article::findBySlug($slug))
		{
			return View::make('blog.pages.article')
					->with('article', $article);
		}

		return Redirect::route('blog');
	}
}
