<?php namespace ACR\Models;

use Eloquent;
use Markdown;

class Article extends Eloquent {

	protected $table = 'articles';

	public function getSummaryAttribute()
	{
		return $this->article;
	}

	public function getMarkdownSummaryAttribute()
	{
		return Markdown::string($this->summary);
	}

}