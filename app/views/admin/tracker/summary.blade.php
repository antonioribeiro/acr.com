@extends('admin.layout')

@section('pageHeader')
	<div class="row">
		<div class="col-lg-12">
		<h1>Tracker</h1>
		</div>
	</div>
@stop

@section('content')
	<div class="row">
		<div class="col-lg-10 col-md-offset-1">

			{{ Form::open(['route' => 'admin.tracker.index']) }}
				{{ Form::label('Hours') }}
				{{ Form::text('hours', Input::get('hours') ?: 24) }}
			{{ Form::close() }}

			@include('admin.tracker._partials.menu')

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Page hits</h3>
						</div>
						<div class="panel-body">
							<div class="flot-chart">
								<div id="stats-container" style="height: 250px;"></div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
		</div>
	</div>

@stop

@section('inline-javascript')
	$(function()
    {
		// Create a function that will handle AJAX requests
		function requestData(days, chart){
			$.ajax({
				type: "GET",
				url: "{{url('admin/tracker/api/pageviews')}}", // This is the URL to the API
				data: { days: days }
			})
			.done(function( data ) {
				// When the response to the AJAX request comes back render the chart with new data
				chart.setData(JSON.parse(data));
			})
			.fail(function() {
				// If there is no communication between the server, show an error
				alert( "error occured" );
			});
		}

		var chart = Morris.Bar({
			// ID of the element in which to draw the chart.
			element: 'stats-container',
			// Set initial data (ideally you would provide an array of default data)
			data: [0,0],
			xkey: 'date',
			ykeys: ['total'],
			labels: ['Hits']
		});

		// Request initial data for the past 7 days:
		requestData(7, chart);

		$('ul.ranges a').click(function(e){
			e.preventDefault();

			// Get the number of days from the data attribute
			var el = $(this);
			days = el.attr('data-range');

			// Request the data and render the chart using our handy function
			requestData(days, chart);

			// Make things pretty to show which button/tab the user clicked
			el.parent().addClass('active');
			el.parent().siblings().removeClass('active');
		})
	});
@stop

