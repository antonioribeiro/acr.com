@extends('blog.layout')

@section('content')
	<article>
		<h1>
			@include('blog._partials.articleTitle')
		</h1>

		<div class="archived__date">
			@include('blog._partials.articleDate')
		</div>

		<p class="archived__excerpt">
			{{ACR\Services\Markdown::transform(Glottos::translate('key::blog-article-'.$article->slug))}}
		</p>
	</article>
	@include('blog._partials.disqus', ['slug' => $article->slug])
@stop