<?php namespace ACR\Controllers;

use ACR\Services\Markdown;
use Input;

class ApiController extends BaseController {

	public function markdown()
	{
		$text = Input::get('text');

		return ['markdown' => Markdown::transform($text)];
	}

}