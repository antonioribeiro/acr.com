@extends('blog.layout')

@section('content')
	<article>
		<h1>
			@include('blog._partials.articleTitle')
		</h1>

		<div class="article_date">
			@include('blog._partials.articleDate')
		</div>

		<p class="article_body">
			{{ACR\Services\Markdown::transform(Glottos::translate('key::blog-article-'.$article->slug))}}
		</p>
	</article>

	@include('blog._partials.disqus', ['slug' => $article->slug])
@stop