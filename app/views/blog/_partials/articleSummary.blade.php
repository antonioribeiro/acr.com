<article class="archived" itemscope itemtype="http://schema.org/BlogPosting">
	<h1 class="archived__title h3" itemprop="name">
		<a href="{{$article->link}}" rel="bookmark" itemprop="url">
			@include('blog._partials.articleTitle')
		</a>
	</h1>
	<div class="archived__meta">
		<time class="archived__date" datetime="2013-12-16" itemprop="datePublished">
			@include('blog._partials.articleDate')
		</time>
	</div>
	<p class="archived__excerpt">
		{{ACR\Services\Markdown::transform($article->makeSummary(Glottos::translate('key::blog-article-'.$article->slug)))}}
	</p>
</article>