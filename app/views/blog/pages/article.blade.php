@extends('blog.layout')

@section('content')
	<article>
		<h1>
			{{$article->title}}
		</h1>

		<time class="archived__date" datetime="2013-12-16" itemprop="datePublished">
			{{$article->created_at->format('d F Y')}}
		</time>

		<p class="archived__excerpt">
			{{$article->markdownSummary}}
		</p>
	</article>
	@include('blog._partials.disqus', ['slug' => $article->slug])
@stop