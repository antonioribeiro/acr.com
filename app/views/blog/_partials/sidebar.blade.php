<p><a href="{{ URL::route('blog') }}/bio">{{'Bio'}}</a></p>

<p><a href="{{ URL::route('blog') }}/php">{{'PHP & Laravel'}}</a></p>

<hr>

<p><a href="{{ URL::route('blog') }}">{{'Recent Articles'}}</a></p>

@include('blog._partials.postsMonths')
