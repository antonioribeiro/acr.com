<?php namespace ACR\Models;

use Eloquent;
use Markdown;
use URL;

use dflydev\markdown\MarkdownParser;
use \Michelf\MarkdownExtra;

class Article extends Eloquent {

	protected $table = 'articles';

	public function getSummaryAttribute()
	{
		return $this->article;
	}

	public function getMarkdownSummaryAttribute()
	{
		return MarkdownExtra::defaultTransform($this->summary);
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

}