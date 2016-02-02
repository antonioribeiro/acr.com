@extends('technology.layout')

@section('content')
	<div class="archive">
	    <h1>
	        {{$pageTitle}}
	    </h1>

	    @include('technology._partials.articles', ['articles' => $articles])
	</div>
@stop