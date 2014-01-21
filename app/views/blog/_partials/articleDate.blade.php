<a href="{{$article->link}}" rel="bookmark" itemprop="url" class="article_body">
	<i class="fa fa-link"></i>
</a>

{{ $article->created_at->format('d') }}&nbsp;
{{ g($article->created_at->format('F')) }}&nbsp;
{{ $article->created_at->format('Y') }}