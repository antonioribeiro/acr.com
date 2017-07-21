@if(isset($summary))
	{{App\Services\Markdown::transform($article->makeSummary($article->currentArticle))}}
@else
	{{App\Services\Markdown::transform($article->currentArticle)}}
@endif
