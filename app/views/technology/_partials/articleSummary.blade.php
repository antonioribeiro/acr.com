<article class="article" itemscope itemtype="http://schema.org/BlogPosting">
	<h1 class="article_title h3" itemprop="name">
		<a href="{{$article->link}}" rel="bookmark" itemprop="url">
			@include('technology._partials.articleTitle')
		</a>
	</h1>

	<div class="article_date">
		@include('technology._partials.articleDate')
	</div>

	<p class="article_body">
		<a href="{{$article->link}}" rel="bookmark" itemprop="url" class="article_body">
			@include('technology._partials.articleBody')
		</a>
	</p>
</article>