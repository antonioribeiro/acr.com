<!DOCTYPE html>
<html>
	<head>
		<title>Antonio Carlos Ribeiro - {{g('Photography')}}</title>

		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/layouts/photography/css/style2.css') }}" />
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/js/jquery.min.js') }}'></script>
		<script type="text/javascript" src="{{ asset('assets/vendor/bower/freewall/freewall.js') }}"></script>
		<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

		<script type="text/javascript" src="{{ asset('assets/layouts/photography/js/jquery.lightbox.min.js') }}"></script>
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/layouts/photography/css/jquery.lightbox.css') }}" />
	</head>

	<body>
		<div class="header">
			<div class="header menu">
				<h1><a href="{{ URL::to('/') }}">Antonio Carlos Ribeiro</a></h1>

				<ul class="filter-items alignLeft">
					<li class="filter-label active">{{g('All Photos')}}</li>

					@foreach($types as $type)
						<li>•</li><li class="filter-label" data-filter=".category-{{$type}}">{{g(ucwords($type))}}</li>
					@endforeach
				</ul>
			</div>
		</div>

		<div class="layout">
			<div id="freewall" class="free-wall">
				@foreach($photos as $key => $photo)
					<div class="brick size{{$photo['size']}} category-all category-{{$photo['type']}}" style="border: 1px solid white;">
						<img class="photo" src="{{$photo['thumbnail']}}" data-original="{{$photo['photography']}}"/>
						<div class="imageOverlay"><i class="fa fa-camera camera"></i></div>
					</div>
				@endforeach
			</div>
		</div>

		<script type="text/javascript">
			$("img.photo").click(function() {
				$.lightbox(jQuery(this).attr('data-original'));
			});

			$(function() {
				var wall = new freewall("#freewall");

				wall.reset({
					selector: '.brick',
					animate: true,
					cellW: 163,
					cellH: 160,
					fixSize: 0,
					onResize: function() {
						wall.refresh();
					}
				});

				$(".filter-label").click(function() {
					$(".filter-label").removeClass("active");
					var filter = $(this).addClass('active').data('filter');
					if (filter) {
						wall.filter(filter);
					} else {
						wall.unFilter();
					}
				});

				wall.fitWidth();
			});
		</script>
	</body>
</html>
