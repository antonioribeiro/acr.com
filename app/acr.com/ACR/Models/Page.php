<?php namespace ACR\Models;

use ACR\Services\Markdown;
use Eloquent;
use Glottos;
use URL;
use DB;

class Page extends Eloquent {

	protected $table = 'pages';

	public static $rules = array();

	public function getMdTextEnAttribute()
	{
		return Markdown::transform($this->text_en);
	}

	public function getMdTextPtBrAttribute()
	{
		return Markdown::transform($this->text_pt_br);
	}

	public static function getForRendering()
	{
		return [

			[
				'name' => 'summary',
				'title' => Page::where('name', 'summary')->first()->getAttribute('title_'.strtolower(Glottos::getLocaleAsText()))
			],

			[
				'name' => 'projects',
				'title' => Page::where('name', 'projects')->first()->getAttribute('title_'.strtolower(Glottos::getLocaleAsText()))
			],

		];
	}
}
