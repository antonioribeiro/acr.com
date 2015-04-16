@if(isset($summary))
	{{ACR\Services\Markdown::transform($article->makeSummary($article->currentArticle))}}
@else
	{{ACR\Services\Markdown::transform($article->currentArticle)}}
@endif