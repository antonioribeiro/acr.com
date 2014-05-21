<?php namespace ACR\Models;

use ACR\Services\Markdown;
use Eloquent;
use Glottos;
use URL;
use DB;

class Article extends Eloquent {

	protected $table = 'articles';

	public static $rules = array();

	public function getCurrentTitleAttribute()
	{	
		$var = 'title_'.strtolower(Glottos::getLocaleAsText());

		return $this->$var; 
	}

	public function getCurrentArticleAttribute()
	{	
		$var = 'article_'.strtolower(Glottos::getLocaleAsText());

		return $this->$var; 
	}

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
		return URL::route('blog.articles.show', [$this->slug, Glottos::getLocaleAsText()]);
	}

	public static function findBySlug($slug)
	{
		return Article::where('slug', $slug)->first();
	}

	public function scopePublished($query)
	{
		return $query->whereNotNull('published_at');
	}

	public function scopeFromMonth($query, $month, $year)
	{
		return $query->where(DB::raw('EXTRACT(MONTH FROM created_at)'), '=', $month)
						->where(DB::raw('EXTRACT(YEAR FROM created_at)'), '=', $year);
	}

	public function scopeOrdered($query)
	{
		return $query->orderBy('created_at', 'desc');
	}

	public function	makeSummary($string)
	{
		$lines = explode("\n", $string);

		$i = 0;

		$result = '';

		while (true)
		{
			$result .= $lines[$i];

			if (strlen($line = $lines[$i]) > 70 && !$this->isImage($lines[$i]))
			{
				break;
			}

			$i++;
		}

		return $result;
	}

	public function getMonthsList()
	{
		$rows = Article::ordered()->published()->get(['created_at']);

		$result = [];

		foreach($rows as $row)
		{
			$key = $row->created_at->month.'|'.$row->created_at->year;

			$result[$key] = [
								'month' => $row->created_at->month, 
								'year' => $row->created_at->year
							];
		}

		return $result;
	}

	private function isImage($string)
	{
		return strpos($string, '<img') !== false;
	}
}