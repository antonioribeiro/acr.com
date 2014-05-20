<p><a href="{{ URL::route('blog') }}/bio">{{g('Bio')}}</a></p>

<p><a href="{{ URL::route('blog') }}/php">{{g('PHP & Laravel')}}</a></p>

<p><a href="{{ URL::route('blog') }}/projects">{{g('Projects')}}</a></p>

<hr>

<p><a href="{{ URL::route('blog') }}">{{g('Recent Articles')}}</a></p>

@include('blog._partials.postsMonths')
