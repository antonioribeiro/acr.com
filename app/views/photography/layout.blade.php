<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>Photographer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Styles -->
	<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css" rel="stylesheet">
	<link href="{{ asset('assets/layouts/photography/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/layouts/photography/css/photography.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/layouts/photography/css/shadowbox.css') }}">

	<!-- HTML5 shim -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

<div class="masthead clearfix">

	<div class="container">

		<div class="logo pull-left">Antonio Carlos Ribeiro</div>

		<div class="socials pull-right">
			<a href=""><i class="icon-twitter"></i></a> <!-- your twitter link -->
			<a href=""><i class="icon-facebook"></i></a> <!-- your facebook link -->
			<a href=""><i class="icon-linkedin"></i></a> <!-- your linkedin link -->
			<a href=""><i class="icon-pinterest"></i></a> <!-- your pinterest link -->
			<a href=""><i class="icon-envelope"></i></a> <!-- your email address -->
		</div>

	</div>

</div>

<div class="container">

	@yield('content')

</div>

<!-- Javascript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('assets/layouts/photography/js/shadowbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/layouts/photography/js/jquery.easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/layouts/photography/js/jquery.quicksand.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/layouts/photography/js/photographer.js') }}"></script>
</body>
</html>