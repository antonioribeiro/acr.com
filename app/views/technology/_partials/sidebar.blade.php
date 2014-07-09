@foreach($pages as $page)
	<p><a href="{{ URL::route('technology') }}/{{$page['name']}}">{{$page['title']}}</a></p>
@endforeach

<hr>

<p><a href="{{ URL::route('technology') }}">{{g('Recent Articles')}}</a></p>

@include('technology._partials.postsMonths')
