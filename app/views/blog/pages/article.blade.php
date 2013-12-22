@extends('blog.layout')

@section('content')
	<h1>
		{{$article->title}}
	</h1>

	<div class="archived__meta">
		<time class="archived__date" datetime="2013-12-16" itemprop="datePublished">
			{{$article->created_at->format('d F Y')}}
		</time>
	</div>

	<p class="archived__excerpt">
		{{$article->markdownSummary}}
	</p>

	@include('blog._partials.disqus', ['slug' => $article->slug])
@stop