<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Page description" />
		<meta name="author" content="Antonio Carlos Ribeiro" />
		<meta charset="utf-8" />

		<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/layouts/img/favicons/apple-touch-icon-57x57.png') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/layouts/img/favicons/apple-touch-icon-114x114.png') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/layouts/img/favicons/apple-touch-icon-72x72.png') }}">
		<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/layouts/img/favicons/apple-touch-icon-144x144.png') }}">
		<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/layouts/img/favicons/apple-touch-icon-60x60.png') }}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/layouts/img/favicons/apple-touch-icon-120x120.png') }}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/layouts/img/favicons/apple-touch-icon-76x76.png') }}">
		<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/layouts/img/favicons/apple-touch-icon-152x152.png') }}">
		<link rel="icon" type="image/png" sizes="196x196" href="{{ asset('assets/layouts/img/favicons/favicon-196x196.png') }}">
		<link rel="icon" type="image/png" sizes="160x160" href="{{ asset('assets/layouts/img/favicons/favicon-160x160.png') }}">
		<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/layouts/img/favicons/favicon-96x96.png') }}">
		<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/layouts/img/favicons/favicon-16x16.png') }}">
		<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/layouts/img/favicons/favicon-32x32.png') }}">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">

		@yield('html-head')
	</head>

	<body>
		@yield('html-body')

		@include('global._partials.google-analytics')
	</body>
</html>
