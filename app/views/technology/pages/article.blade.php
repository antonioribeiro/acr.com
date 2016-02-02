@extends('technology.layout')

@section('content')
	<article>
		<a href="#">
			<img src="{{ asset('/assets/custom/img/blog/'.$photo['file']) }}" class="img-responsive" alt="image" data-original="{{ asset('/assets/layouts/photography/img/photos/'.$photo['file_original']) }}">
		</a>
		<small>{{$photo['title_'.strtolower(Glottos::getLocaleAsText())]}}</small>

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
