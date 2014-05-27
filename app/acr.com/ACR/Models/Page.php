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

}