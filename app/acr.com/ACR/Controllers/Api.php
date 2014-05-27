<?php namespace ACR\Controllers;

use ACR\Services\Markdown;
use Input;

class Api extends Base {

	public function markdown()
	{
		$text = Input::get('text');

		return ['markdown' => Markdown::transform($text)];
	}

}