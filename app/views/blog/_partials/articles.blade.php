@foreach($articles as $article)
	@include('blog._partials.articleSummary', ['article' => $article])
@endforeach