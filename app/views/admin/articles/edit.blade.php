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
					{{ FormField::title_en() }}
					{{ FormField::title_pt_br() }}

					<div class="row">
						<div class="col-lg-6">
							{{ FormField::article_en(['type' => 'textarea']) }}
						</div>
						<div class="col-lg-6">
							{{ FormField::article_pt_br(['type' => 'textarea']) }}
						</div>
					</div>

					<button type="submit" class="btn btn-danger btn-xs">save</button>
				{{ Form::close() }}

				<br><br><br>
				<h3>Preview</h3>
				<hr/>
				<div class="row">
					<div class="col-lg-6">
						<article id="preview_en">
					
						</article>
					</div>
					<div class="col-lg-6">
						<article id="preview_pt_br">
					
						</article>
					</div>
				</div>				
			</div>
		</div>
	</div>

@stop

@section('inline-javascript')

	var timer = null;
	var language = null;

	$('#article_en').keydown(function(){
		configureTimeout('en');
	});

	$('#article_pt_br').keydown(function(){
		configureTimeout('pt_br');
	});

	function configureTimeout(id) {
       clearTimeout(timer); 
       timer = setTimeout(formatText, 1000)
       language = id;
	};

	function formatText() {
	    var str = $( '#article_' + language ).val();

		var jqxhr = $.post( "", function() {
		  console.log()
		});

		$.post( "{{ URL::route('api.markdown', ['version' => '1.0']) }}", { text: str })
			  .done(function( data ) {
			    $( "#preview_" + language ).html( data.markdown );
			  });		

	}

@stop