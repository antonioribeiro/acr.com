<a href="{{$article->link}}" rel="bookmark" itemprop="url" class="article_body">
	@icon(fa fa-link)
</a>

{{ $article->created_at->format('d') }}&nbsp;
{{ g($article->created_at->format('F')) }}&nbsp;
{{ $article->created_at->format('Y') }}