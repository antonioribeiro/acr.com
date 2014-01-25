@extends('blog.layout')

@section('content')
	<div class="archive">
	    {{ ACR\Services\Markdown::transform(g('key::'.$page)) }}
	</div>
@stop