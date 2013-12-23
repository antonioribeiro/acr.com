<?php namespace ACR\Models;

use ACR\Services\Markdown;
use Eloquent;
use URL;

class Article extends Eloquent {

	protected $table = 'articles';

	public function getSummaryAttribute()
	{
		return $this->makeSummary($this->article);
	}

	public function getMarkdownSummaryAttribute()
	{
		return Markdown::transform($this->summary);
	}

	public function getMarkdownArticleAttribute()
	{
		return Markdown::transform($this->article);
	}

	public function getLinkAttribute()
	{
		return URL::route('blog.articles.show', $this->slug);
	}

	public static function findBySlug($slug)
	{
		return Article::where('slug', $slug)->first();
	}

	public function scopePublished($query)
	{
		return $query->whereNotNull('published_at');
	}

	public function scopeOrdered($query)
	{
		return $query->orderBy('created_at', 'desc');
	}

	public function	makeSummary($string)
	{
		$pos = strpos($string, "\r\n") ?: strlen($string);

		return substr($string, 0, $pos);
	}

}