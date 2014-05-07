
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Automatic Image Montage with jQuery</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Automatic Image Montage with jQuery" />
        <meta name="keywords" content="jquery, images, montage, fullscreen, floating, grid, automatic" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
	    <link rel="stylesheet" type="text/css" href="{{ asset('assets/layouts/photography/montage/demo.css') }}" />
	    <link rel="stylesheet" type="text/css" href="{{ asset('assets/layouts/photography/montage/style.css') }}" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css' />
<script type="text/javascript">
//PLEASE DON'T ADD THIS TO YOUR SITE! PLEASE DOWNLOAD THE ZIP AND DON'T COPY THIS PAGE! THIS IS THE GOOGLE ANALYTICS TRACKING FOR CODROPS
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7243260-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </head>
    <body style="background:#000;">
		<div class="container">
			<div class="header">
				<a href="http://tympanus.net/Development/ImageZoomTour/"><span>&laquo; Previous Demo: </span>Image Zoom Tour</a>
				<span class="right_ab">
					<a href="http://www.behance.net/AndrewLili" title="Behance Profile of Andrey Yakovlev & Lili Aleeva" target="_blank">Images by Andrey & Lili</a>
					<a href="http://creativecommons.org/licenses/by-nc/3.0/" target="_blank" title="Images licensed under CC BY-NC 3.0">CC BY-NC 3.0</a>
					<a href="http://tympanus.net/codrops/2011/08/30/automatic-image-montage/"><strong>back to the Codrops post</strong></a>
				</span>
			</div>
			<div id="overlay" class="content">
				<div class="inner">
					<h1>Automatic Image Montage <span>with jQuery</span></h1>
					<h2>Minimum width of images with alternating heights of rows and large margin, last image will fill the last row. Click "load more" (end of page) in order to see how more images can be added.</h2>
					<div class="snippet">
						<span id="showcode" class="down">View the options for this example</span>
						<pre>
minw : 100,
alternateHeight : true,
alternateHeightRange : {
	min	: 50,
	max	: 350
},
margin : 8,
fillLastRow : true
						</pre>
					</div>
					<div class="more">
						<ul>
							<li>More examples:</li>
							<li><a href="index.html">Example 1</a></li>
							<li><a href="index2.html">Example 2</a></li>
							<li><a href="index3.html">Example 3</a></li>
							<li><a href="index4.html">Example 4</a></li>
							<li><a href="index5.html">Example 5</a></li>
							<li class="selected"><a href="index6.html">Example 6</a></li>
							<li><a href="index7.html">Example 7</a></li>
							<li><a href="index8.html">Example 8</a></li>
						</ul>
					</div>
					<div class="clr"></div>
					<div id="panel" class="panel hide"></div>
				</div>
			</div>
			<div class="am-container" id="am-container">
				@foreach($photos as $key => $photo)
					<a href="#"><img src="{{$photo['thumbnail']}}"></img></a>
				@endforeach

				<div id="loadmore" class="loadmore" style="width:100%;">load more...</div>
			</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="{{ asset('assets/layouts/photography/montage/jquery.montage.min.js') }}"></script>
		<script type="text/javascript">
			$(function() {
				/* 
				 * just for this demo:
				 */
				$('#showcode').toggle(
					function() {
						$(this).addClass('up').removeClass('down').next().slideDown();
					},
					function() {
						$(this).addClass('down').removeClass('up').next().slideUp();
					}
				);
				$('#panel').toggle(
					function() {
						$(this).addClass('show').removeClass('hide');
						$('#overlay').stop().animate( { left : - $('#overlay').width() + 20 + 'px' }, 300 );
					},
					function() {
						$(this).addClass('hide').removeClass('show');
						$('#overlay').stop().animate( { left : '0px' }, 300 );
					}
				);
				
				var $container 	= $('#am-container'),
					$imgs		= $container.children('img').hide(),
					totalImgs	= $imgs.length,
					cnt			= 0;
				
				var $container 	= $('#am-container'),
					$imgs		= $container.find('img').hide(),
					totalImgs	= $imgs.length,
					cnt			= 0;
				
				$imgs.each(function(i) {
					var $img	= $(this);
					$('<img/>').load(function() {
						++cnt;
						if( cnt === totalImgs ) {
							$imgs.show();
							$container.montage({
								minw : 100,
								alternateHeight : true,
								alternateHeightRange : {
									min	: 50,
									max	: 350
								},
								margin : 8,
								fillLastRow : true
							});
							
							/* 
							 * just for this demo:
							 */
							$('#overlay').fadeIn(500);
							var imgarr	= new Array();
							for( var i = 1; i <= 73; ++i ) {
								imgarr.push( i );
							}
							$('#loadmore').show().bind('click', function() {
								var len = imgarr.length;
								for( var i = 0, newimgs = ''; i < 15; ++i ) {
									var pos = Math.floor( Math.random() * len ),
										src	= imgarr[pos];
									newimgs	+= '<a href="#"><img src="images/' + src + '.jpg"/></a>';
								}
								
								var $newimages = $( newimgs );
								$newimages.imagesLoaded( function(){
									$container.append( $newimages ).montage( 'add', $newimages );
								});
							});
						}
					}).attr('src',$img.attr('src'));
				});	
				
			});
		</script>
    </body>
</html>