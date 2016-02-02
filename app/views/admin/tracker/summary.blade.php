@extends('admin.tracker.layout')

@section('tracker.main.content')
	<div id="pageViews" style="height: 250px;"></div>
@stop

@section('secondary.content')
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-sun-o"></i> Page Views by Country</h3>
				</div>
				<div class="panel-body">
					<div id="pageViewsByCountry" style="height: 450px;"></div>
				</div>
			</div>
		</div>
	</div><!-- /.row -->
@stop

@section('inline-javascript')
	$(function()
    {
		var pageViews = Morris.Bar({
			element: 'pageViews',
			grid: false,
			data: [0,0],
			xkey: 'date',
			ykeys: ['total'],
			labels: ['Page Views']
		});

		$.ajax({
			type: "GET",
			url: "{{url('admin/tracker/api/pageviews')}}", // This is the URL to the API
			data: { }
		})
		.done(function( data ) {
			pageViews.setData(formatDates(data));
		})

		$.ajax({
			type: "GET",
			url: "{{url('admin/tracker/api/pageviewsbycountry')}}", // This is the URL to the API
			data: { }
		})
		.done(function( data ) {
			jQuery.plot('#pageViewsByCountry', convertToPlottableData(data), {
				series: {
					pie: {
						show: true
					}
				},
				grid: {
					hoverable: true,
					clickable: true
				}
			});
		})

		var convertToPlottableData = function(data)
		{
			plottable = [];

			jsondata = JSON.parse(data);

            for(key in jsondata)
            {
                plottable[key] = {
					label: jsondata[key].label,
					data: jsondata[key].value
				}
            }

			return plottable;
        }

		var formatDates = function(data)
        {
			data = JSON.parse(data);

            for(key in data)
            {
                if (data[key].date !== 'undefined')
                {
					data[key].date = moment(data[key].date, "YYYY-MM-DD").format('dddd[,] MMM Do');
				}
            }

			console.log(data);

			return data;
		}

	});
@stop

