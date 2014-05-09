<?php namespace ACR\Controllers;

use View;
use Redirect;
use ACR\Services\Photoreader;

class Photography extends BaseController {

	public function __construct(Photoreader $reader)
	{
		$this->reader = $reader;
	}

	public function index()
	{
		return View::make('photography.index')
					->with('photos', $this->reader->getPhotos())
					->with('types', $this->reader->getTypes());
	}

}
