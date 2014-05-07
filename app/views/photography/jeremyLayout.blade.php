<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="The Official Website of Antonio Carlos Ribeiro" />

		<title>Antonio Carlos Ribeiro - Photography</title>
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/layouts/photography/jeremy/css/style.css') }}" />
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/jeremy/js/jquery.min.js') }}'></script>
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/jeremy/js/jquery.flexslider-min.js') }}'></script>
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/jeremy/js/libs.min.js') }}'></script>
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/jeremy/js/main.js') }}'></script>
		<script type='text/javascript'>
			/* <![CDATA[ */
				var flotheme = {"template_dir":"","ajax_load_url":"","ajax_comments":"1","ajax_posts":"1","ajax_open_single":"1","is_mobile":"0"};
			/* ]]> */
		</script>
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/jeremy/js/screen.min.js') }}'></script>
	</head>

	<body>
		<div id="wrapper" class="floating">
			<a name="top" id="top" style=""></a>
			<header class="bottom-margin">
				<div class="padding-container">
					<h1><a href="http://jeremycowart.com/">Antonio Carlos Ribeiro</a></h1>
					<nav>
						<ul>
							<li id="dropdown">
								<a href="http://jeremycowart.com" >Main</a>
							</li>

							<li class="separator">/</li>

							<li>
								<a href="http://jeremycowart.com/portfolio/featured/" class="active">Portfolio</a>
							</li>

							<li class="separator">/</li>

							<li>
								<a href="http://jeremycowart.com/blog/" >Blog</a>
							</li>

							<li class="separator">/</li>

							<li>
								<a href="http://jeremycowart.com/video/" >Videos</a>
							</li>

							<li class="separator">/</li>

							<li>
								<a href="http://store.jeremycowart.com/">Shop</a>
							</li>

							<li class="separator">/</li>

							<li>
								<a href="http://jeremycowart.com/gear/" >Gear</a></li>
							</li>

							<li class="separator">/</li><li>
								<a href="http://jeremycowart.com/about/" >About</a>
							</li>
						</ul>
					</nav>			

					<div class="links-pane">
						<ul class="social-icons">
							<li class="okdothis"><a href="http://okdoth.is/u/jeremy" rel="external">Okdothis</a></li>
							<li class="twitter"><a href="http://jcopho.to/tw" rel="external">Twitter</a></li>
							<li class="facebook"><a href="http://jcopho.to/f" rel="external">Facebook</a></li>
							<li class="google-plus"><a href="http://jcopho.to/gplus" rel="external">Google-plus</a></li>
							<li class="pinterest"><a href="http://jcopho.to/pin" rel="external">Pinterest</a></li>
							<!-- <li class="feed"><a href="http://jeremycowart.com/feed/">Feed</a></li> -->
						</ul>
					</div>
					
					<div class="clear">&nbsp;</div>

				</div>
			</header>

			<section id="content">
				<div id="portfolio-album" class="masonry-container calc-hover">
					<div class="categories-block">
						<div class="padding-wrap">
							<a href="javascript:void(0);" class="switch-categories-block">Show navigation bar &darr;</a>
							<ul>
								<li><a href="#" data-id="all" onclick="return false;">All</a></li>

								@foreach($types as $type)
									<li><a data-id="{{$type}}" href="#" onclick="return false;">{{ucwords($type)}}</a></li>
								@endforeach
							</ul>		
						</div>
					</div>

					<section class="masonry nolookbook" id="visible_items">
						@foreach($photos as $key => $photo)
							<article class="{{$photo['size'] == 'N' ? 'narrow-1col' : 'wide-2col'}} category-all category-{{$photo['type']}}" id="image-5084">
								<a class="toggle fancybox" rel="album" title="Sara Watkins" href="{{$photo['photography']}}">
									<img src="{{$photo['thumbnail']}}"/>
								</a>
							</article>
						@endforeach
					</section>

					<div class="hidden" id="hidden_items">

					</div>
				</div>
			</section><!-- #content -->
		</div><!-- #wrapper -->

		<footer id="footer">
			<div class="bottom-footer">
				<span class="developed">
					Sewed by 
					<a href="http://antoniocarlosribeiro.com" rel="external">Antonio Carlos Ribeiro</a>
					using
					<a href="http://laravel.com" rel="external">Laravel</a>
				</span>
			</div>
		</footer>

	</body>
</html>
