@extends('photography.layout')

@section('content')

	<div class="clearfix">

		<ul class="filter-nav">
			<li class="active"><a data-id="all" href="">All</a></li>
			@foreach($types as $type)
				<li><a data-id="{{$type}}" href="">{{ucwords($type)}}</a></li>
			@endforeach
		</ul>

	</div>

	<ul class="thumbnails" id="thumbnails">

		@foreach($photos as $key => $photo)
			<li class="span3" data-id="{{$key}}" data-type="{{$photo['type']}}">
				<a href="{{$photo['photography']}}" class="thumbnail">
					<img src="{{$photo['thumbnail']}}" alt="" />
					<span class="caption"><i class="icon-plus-sign"></i></span>
				</a>
			</li>
		@endforeach

	</ul>
    
@stop

