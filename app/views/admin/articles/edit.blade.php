@extends('admin.layout')

@section('pageHeader')
	<div class="row">
		<div class="col-lg-12">
		<h1>Articles - Edit</h1>
		</div>
	</div>
@stop

@section('content')

	<div class="row">
		<div class="col-lg-10 col-md-offset-1">
			<div class="table-responsive">

				{{ Form::model($article, ['method' => $method, 'url' => $url]) }}
					{{ FormField::title() }}
					{{ FormField::article(['type' => 'textarea']) }}
	
					<button type="submit" class="btn btn-danger btn-xs">save</button>
				{{ Form::close() }}
			</div>
		</div>
	</div>

@stop