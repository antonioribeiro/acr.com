@extends('technology.layout')

@section('content')
	<article>
		<h1>
			@include('technology._partials.articleTitle')
		</h1>

		<div class="article_date">
			@include('technology._partials.articleDate')
		</div>

		<p class="article_body">
			@include('technology._partials.articleBody')
		</p>
	</article>

	@include('technology._partials.disqus', ['slug' => $article->slug])
@stop