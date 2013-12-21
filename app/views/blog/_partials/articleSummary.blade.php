<article class="archived" itemscope itemtype="http://schema.org/BlogPosting">
	<h1 class="archived__title h3" itemprop="name">
		<a href="{{$article->slug}}" rel="bookmark" itemprop="url">
			{{ $article->title }}
		</a>
	</h1>
	<div class="archived__meta">
		<time class="archived__date" datetime="2013-12-16" itemprop="datePublished">
			{{$article->created_at->format('d F Y')}}
		</time>
	</div>
	<p class="archived__excerpt">
		{{$article->markdownSummary}}
	</p>
</article>