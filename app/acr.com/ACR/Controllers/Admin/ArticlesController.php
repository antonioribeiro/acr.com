<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\BaseController;
use ACR\Models\Article;
use Redirect;
use View;
use Input;
use URL;
use Str;

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
		$article->title_en = Input::get('title_en');
		$article->title_pt_br = Input::get('title_pt_br');
		$article->article_en = Input::get('article_en');
		$article->article_pt_br = Input::get('article_pt_br');
		$article->slug = Str::slug(Input::get('title_en'));
		$article->author_id = 1;

		$article->save();

		return Redirect::route('admin.articles.index');
	}

	public function publish($article_id)
	{
		return $this->setPublish($article_id, new \Carbon\Carbon);
	}

	public function unpublish($article_id)
	{
		return $this->setPublish($article_id, null);
	}	

	public function setPublish($article_id, $value)
	{
		$article = Article::find($article_id);
		$article->published_at = $value;
		$article->save();

		return Redirect::back();
	}
	
}