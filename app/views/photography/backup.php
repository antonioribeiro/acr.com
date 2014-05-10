			<section id="content">
				<div id="portfolio-album" class="masonry-container calc-hover">
					<div class="categories-block">
						<div class="padding-wrap">
							<a href="javascript:void(0);" class="switch-categories-block">Show navigation bar &darr;</a>
							<ul>
								<li data-id="all" class="selected">All</li>

								@foreach($types as $type)
									<li data-id="{{$type}}">{{ucwords($type)}}</li>
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


// ------------------------------------------------------------------ Whole code

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="The Official Website of Antonio Carlos Ribeiro" />

		<title>Antonio Carlos Ribeiro - Photography</title>
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/layouts/photography/css/style.css') }}" />
		<link rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/layouts/photography/css/fancybox.css') }}" />
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/js/jquery.min.js') }}'></script>
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/js/jquery.flexslider-min.js') }}'></script>
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/js/libs.min.js') }}'></script>
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/js/main.js') }}'></script>
		<script type='text/javascript'>
			/* <![CDATA[ */
				var flotheme = {"template_dir":"","ajax_load_url":"","ajax_comments":"1","ajax_posts":"1","ajax_open_single":"1","is_mobile":"0"};
			/* ]]> */
		</script>
		<script type='text/javascript' src='{{ asset('assets/layouts/photography/js/screen.min.js') }}'></script>

		<script type="text/javascript" src="http://vnjs.net/www/project/freewall/freewall.js"></script>

		<style type="text/css">

			.free-wall {
				height: 102%;
				margin: 15px;
			}

			@keyframes start {
				from {
					transform: scale(0);
				}
				to {
					transform: scale(1);
				}
			}

			
			@-webkit-keyframes start {
				from {
					-webkit-transform: scale(0);
				}
				to {
					-webkit-transform: scale(1);
				}
			}

			.free-wall .cell[data-state="init"] {
				display: none;
			}

			.free-wall .cell[data-state="start"]  {
				display: block;
				animation: start 0.5s;
				-webkit-animation: start 0.5s;
			}

			.free-wall .cell[data-state="move"]  {
				transition: top 0.5s, left 0.5s, width 0.5s, height 0.5s;
				-webkit-transition: top 0.5s, left 0.5s, width 0.5s, height 0.5s;
			}
			
		</style>		
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

<div id="freewall" class="free-wall" data-min-width="1840" data-total-col="9" data-total-row="6" data-wall-width="1873" data-wall-height="1244" style="position: relative; height: 1244px;"><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/1.jpg); position: absolute; opacity: 1; top: 0px; left: 0px;" id="1-2" data-delay="1" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/2.jpg); position: absolute; opacity: 1; top: 0px; left: 209.78px;" id="2-2" data-delay="2" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/3.jpg); position: absolute; opacity: 1; top: 0px; left: 419.56px;" id="3-2" data-delay="3" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/4.jpg); position: absolute; opacity: 1; top: 0px; left: 629.33px;" id="4-2" data-delay="4" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/5.jpg); position: absolute; opacity: 1; top: 0px; left: 839.11px;" id="5-2" data-delay="5" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/6.jpg); position: absolute; opacity: 1; top: 0px; left: 1048.89px;" id="6-2" data-delay="6" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/7.jpg); position: absolute; opacity: 1; top: 0px; left: 1258.67px;" id="7-2" data-delay="7" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/8.jpg); position: absolute; opacity: 1; top: 0px; left: 1468.44px;" id="8-2" data-delay="8" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/9.jpg); position: absolute; opacity: 1; top: 0px; left: 1678.22px;" id="9-2" data-delay="9" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/10.jpg); position: absolute; opacity: 1; top: 209.78px; left: 0px;" id="10-2" data-delay="10" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/11.jpg); position: absolute; opacity: 1; top: 209.78px; left: 209.78px;" id="11-2" data-delay="11" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/12.jpg); position: absolute; opacity: 1; top: 209.78px; left: 419.56px;" id="12-2" data-delay="12" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/13.jpg); position: absolute; opacity: 1; top: 209.78px; left: 629.33px;" id="13-2" data-delay="13" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/14.jpg); position: absolute; opacity: 1; top: 209.78px; left: 839.11px;" id="14-2" data-delay="14" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/15.jpg); position: absolute; opacity: 1; top: 209.78px; left: 1048.89px;" id="15-2" data-delay="15" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/16.jpg); position: absolute; opacity: 1; top: 209.78px; left: 1258.67px;" id="16-2" data-delay="16" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/17.jpg); position: absolute; opacity: 1; top: 209.78px; left: 1468.44px;" id="17-2" data-delay="17" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/18.jpg); position: absolute; opacity: 1; top: 209.78px; left: 1678.22px;" id="18-2" data-delay="18" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/19.jpg); position: absolute; opacity: 1; top: 419.56px; left: 0px;" id="19-2" data-delay="19" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/20.jpg); position: absolute; opacity: 1; top: 419.56px; left: 209.78px;" id="20-2" data-delay="20" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/21.jpg); position: absolute; opacity: 1; top: 419.56px; left: 419.56px;" id="21-2" data-delay="21" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/22.jpg); position: absolute; opacity: 1; top: 419.56px; left: 629.33px;" id="22-2" data-delay="22" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/23.jpg); position: absolute; opacity: 1; top: 419.56px; left: 839.11px;" id="23-2" data-delay="23" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/24.jpg); position: absolute; opacity: 1; top: 419.56px; left: 1048.89px;" id="24-2" data-delay="24" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/25.jpg); position: absolute; opacity: 1; top: 419.56px; left: 1258.67px;" id="25-2" data-delay="25" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/26.jpg); position: absolute; opacity: 1; top: 419.56px; left: 1468.44px;" id="26-2" data-delay="26" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/27.jpg); position: absolute; opacity: 1; top: 419.56px; left: 1678.22px;" id="27-2" data-delay="27" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/28.jpg); position: absolute; opacity: 1; top: 629.33px; left: 0px;" id="28-2" data-delay="28" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/29.jpg); position: absolute; opacity: 1; top: 629.33px; left: 209.78px;" id="29-2" data-delay="29" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/30.jpg); position: absolute; opacity: 1; top: 629.33px; left: 419.56px;" id="30-2" data-delay="30" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/31.jpg); position: absolute; opacity: 1; top: 629.33px; left: 629.33px;" id="31-2" data-delay="31" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/32.jpg); position: absolute; opacity: 1; top: 629.33px; left: 839.11px;" id="32-2" data-delay="32" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/33.jpg); position: absolute; opacity: 1; top: 629.33px; left: 1048.89px;" id="33-2" data-delay="33" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/34.jpg); position: absolute; opacity: 1; top: 629.33px; left: 1258.67px;" id="34-2" data-delay="34" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/35.jpg); position: absolute; opacity: 1; top: 629.33px; left: 1468.44px;" id="35-2" data-delay="35" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/36.jpg); position: absolute; opacity: 1; top: 629.33px; left: 1678.22px;" id="36-2" data-delay="36" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/37.jpg); position: absolute; opacity: 1; top: 839.11px; left: 0px;" id="37-2" data-delay="37" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/38.jpg); position: absolute; opacity: 1; top: 839.11px; left: 209.78px;" id="38-2" data-delay="38" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/39.jpg); position: absolute; opacity: 1; top: 839.11px; left: 419.56px;" id="39-2" data-delay="39" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/40.jpg); position: absolute; opacity: 1; top: 839.11px; left: 629.33px;" id="40-2" data-delay="40" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/41.jpg); position: absolute; opacity: 1; top: 839.11px; left: 839.11px;" id="41-2" data-delay="41" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/42.jpg); position: absolute; opacity: 1; top: 839.11px; left: 1048.89px;" id="42-2" data-delay="42" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/43.jpg); position: absolute; opacity: 1; top: 839.11px; left: 1258.67px;" id="43-2" data-delay="43" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/44.jpg); position: absolute; opacity: 1; top: 839.11px; left: 1468.44px;" id="44-2" data-delay="44" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/45.jpg); position: absolute; opacity: 1; top: 839.11px; left: 1678.22px;" id="45-2" data-delay="45" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/46.jpg); position: absolute; opacity: 1; top: 1048.89px; left: 0px;" id="46-2" data-delay="46" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/47.jpg); position: absolute; opacity: 1; top: 1048.89px; left: 209.78px;" id="47-2" data-delay="47" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/48.jpg); position: absolute; opacity: 1; top: 1048.89px; left: 419.56px;" id="48-2" data-delay="48" data-height="200" data-width="200" data-state="start"></div><div class="cell" style="width: 194.78px; height: 194.78px; background-image: url(http://vnjs.net/www/project/freewall/example/i/photo/49.jpg); position: absolute; opacity: 1; top: 1048.89px; left: 629.33px;" id="49-2" data-delay="49" data-height="200" data-width="200" data-state="start"></div></div>
				</div>
			</header>

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
