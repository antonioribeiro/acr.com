@foreach($articles as $article)
	@include('technology._partials.articleSummary', ['article' => $article])
@endforeach