@extends('admin.tracker.layout')

@section('tracker.main.content')
	<div id="pageViews" style="height: 250px;"></div>
@stop

@section('tracker.secondary.content')
	<div id="pageViewsByCountry" style="height: 250px;"></div>
@stop

@section('inline-javascript')
	$(function()
    {
		var pageViews = Morris.Bar({
			element: 'pageViews',
			data: [0,0],
			xkey: 'date',
			ykeys: ['total'],
			labels: ['Hits']
		});

		var pageViewsByCountry = Morris.Bar({
			element: 'pageViewsByCountry',
			data: [0,0],
			xkey: 'country_name',
			ykeys: ['total'],
			labels: ['Hits']
		});

		$.ajax({
			type: "GET",
			url: "{{url('admin/tracker/api/pageviews')}}", // This is the URL to the API
			data: { }
		})
		.done(function( data ) {
			pageViews.setData(JSON.parse(data));
		})

		$.ajax({
			type: "GET",
			url: "{{url('admin/tracker/api/pageviewsbycountry')}}", // This is the URL to the API
			data: { }
		})
		.done(function( data ) {
			pageViewsByCountry.setData(JSON.parse(data));
		})

	});
@stop

