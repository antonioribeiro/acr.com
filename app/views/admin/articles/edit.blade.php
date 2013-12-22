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
					{{ FormField::article(['type' => 'textarea', 'id'=>'article']) }}
	
					<button type="submit" class="btn btn-danger btn-xs">save</button>
				{{ Form::close() }}

				<br><br><br>
				<h3>Preview</h3>
				<article id="preview">

				</article>
			</div>
		</div>
	</div>

@stop

@section('inline-javascript')

	var timer = null;

	$('#article').keydown(function(){
       clearTimeout(timer); 
       timer = setTimeout(formatText, 1000)
	});

	function formatText() {
	    var str = $( "#article" ).val();

		var jqxhr = $.post( "", function() {
		  console.log()
		});

		$.post( "{{ URL::route('api.markdown', ['version' => '1.0']) }}", { text: str })
			  .done(function( data ) {
			    $( "#preview" ).html( data.markdown );
			  });		

	}

@stop