<article class="article" itemscope itemtype="http://schema.org/BlogPosting">
	<h1 class="article_title h3" itemprop="name">
		<a href="{{$article->link}}" rel="bookmark" itemprop="url">
			@include('blog._partials.articleTitle')
		</a>
	</h1>

	<div class="article_date">
		@include('blog._partials.articleDate')
	</div>

	<p class="article_body">
		<a href="{{$article->link}}" rel="bookmark" itemprop="url" class="article_body">
			@include('blog._partials.articleBody')
		</a>
	</p>
</article>