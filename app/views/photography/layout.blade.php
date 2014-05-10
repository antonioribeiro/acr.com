<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="The Official Website of Antonio Carlos Ribeiro" />

		<title>Antonio Carlos Ribeiro - Photography</title>

		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/layouts/photography/css/style2.css') }}" />

		<script type='text/javascript' src='{{ asset('assets/layouts/photography/js/jquery.min.js') }}'></script>
		<script type="text/javascript" src="http://vnjs.net/www/project/freewall/freewall.js"></script>
	</head>

	<body>
		<div id="freewall" class="free-wall" data-min-width="1840" data-total-col="9" data-total-row="6" data-wall-width="1873" data-wall-height="1244" style="position: relative; height: 1244px;">

		@foreach($photos as $key => $photo)
			<div class="cell category-all category-{{$photo['type']}}" style="width: 194.78px; height: 194.78px; background-image: url({{$photo['thumbnail']}}); position: absolute; opacity: 1;" id="1-2" data-delay="1" data-height="200" data-width="200" data-state="start"></div>
		@endforeach
	</body>
</html>
