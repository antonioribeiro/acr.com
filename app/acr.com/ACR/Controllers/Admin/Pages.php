<?php namespace ACR\Controllers\Admin;

use ACR\Controllers\Base;
use ACR\Models\Page;
use Redirect;
use View;
use URL;
use Input;

class Pages extends Base {

	public function index()
	{
		return View::make('admin.pages.index')
					->with('pages', Page::all());
	}

	public function create()
	{
		return View::make('admin.pages.edit')
			->with('page', new Page)
			->with('url', URL::route('admin.pages.store'))
			->with('method', 'POST');
	}

	public function store()
	{
		return $this->saveInput(new Page);
	}

	public function saveInput($page)
	{
		$page->name_en = Input::get('name_en');
		$page->name_pt_br = Input::get('name_pt_br');
		$page->text_en = Input::get('text_en');
		$page->text_pt_br = Input::get('text_pt_br');

		$page->save();

		return Redirect::route('admin.pages.index');
	}

	public function edit($id)
	{
		return View::make('admin.pages.edit')
			->with('page', Page::find($id))
			->with('url', URL::route('admin.pages.update', $id))
			->with('method', 'PATCH');
	}

	public function update($id)
	{
		return $this->saveInput(Page::find($id));
	}
}