@foreach($postsMonths as $month)

	<p>
		<a href="{{ URL::route('technology.months', [$month['month'], $month['year']]) }}">
			{{ $month['year'] }} - {{ g(date("F", mktime(0, 0, 0, $month['month'], 10))) }}
		</a>
	</p>

@endforeach