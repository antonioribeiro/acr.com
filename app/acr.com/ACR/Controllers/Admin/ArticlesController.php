<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\BaseController;
use ACR\Models\Article;
use Redirect;
use View;
use Input;
use URL;

class ArticlesController extends BaseController {

	public function index()
	{
		return View::make('admin.articles.index')
				->with('articles', Article::all());
	}

	public function edit($id)
	{
		return View::make('admin.articles.edit')
				->with('article', Article::find($id))
				->with('url', URL::route('admin.articles.update', $id))
				->with('method', 'PATCH');
	}

	public function update($id)
	{
		return $this->saveInput(Article::find($id));
	}

	public function create()
	{
		return View::make('admin.articles.edit')
				->with('article', new Article)
				->with('url', URL::route('admin.articles.store'))
				->with('method', 'POST');
	}

	public function store()
	{
		return $this->saveInput(new Article);
	}

	public function saveInput($article)
	{
		$article->title = Input::get('title');
		$article->article = Input::get('article');

		$article->save();

		return Redirect::route('admin.articles.index');
	}
}