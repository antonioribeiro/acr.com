@extends('blog.layout')

@section('content')
	<div class="archive">
	    <h1>
	        {{$pageTitle}}
	    </h1>

	    @include('blog._partials.articles', ['articles' => $articles])
	</div>
@stop