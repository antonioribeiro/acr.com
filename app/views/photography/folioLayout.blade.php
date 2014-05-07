<html>
	<head>
		<meta charset="UTF-8">
		<title>Masonry - layoutComplete - CodePen</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/layouts/photography/mansonry/css/style.css') }}" />
		<script href="{{ asset('assets/layouts/photography/mansonry/js/initialization.js') }}"></script>

		@foreach($photos as $key => $photo)
			<?php
				$sizes['size'.$photo['width'].'X'.$photo['height']] = ['w' => $photo['width'], 'h' => $photo['height']];
			?>
		@endforeach

		<style type="text/css">
			@foreach($sizes as $key => $size)
				.{{$key}} {
					width: {{$size['w']}}px;
					height: {{$size['h']}}px;
				}
			@endforeach
		</style>

	</head>

	<body>
		<h1>Masonry - layoutComplete</h1>
		<p>Resize browser or click item to toggle size</p>
		<div class="masonry" style="position: relative; height: 260px;">
			@foreach($photos as $key => $photo)
				<div class="item size{{$photo['width']}}X{{$photo['height']}}" style="">
					<img src="{{$photo['thumbnail']}}">
				</div>
			@endforeach
		</div>

		<div id="notification" style="transition: opacity 1s; -webkit-transition: opacity 1s; display: block; opacity: 0;">Masonry layout completed on 19 items at 21:56:01</div>
		<script src="http://masonry.desandro.com/masonry.pkgd.js"></script><script src="https://rawgithub.com/desandro/classie/master/classie.js"></script>
		<script href="{{ asset('assets/layouts/photography/mansonry/js/main.js') }}"></script>

		<script>
			// http://masonry.desandro.com/masonry.pkgd.js added as external resource
			// https://rawgithub.com/desandro/classie/master/classie.js added

			var notifElem;

			docReady( function() {

				var container = document.querySelector('.masonry');
				notifElem = document.querySelector('#notification');
				var msnry = new Masonry( container, {
					columnWidth: 60
				});

				msnry.on( 'layoutComplete', function( msnryInstance, laidOutItems ) {
					notify( 'Masonry layout completed on ' + laidOutItems.length + ' items' );
				});

				eventie.bind( container, 'click', function( event ) {
					// don't proceed if item was not clicked on
					if ( !classie.has( event.target, 'item' ) ) {
						return;
					}
					// change size of item via class
					classie.toggle( event.target, 'gigante' );
					// trigger layout
					msnry.layout();
				});

			});

			// -------------------------- timestamp -------------------------- //

			function timeStamp() {
				var now = new Date();
				var min = now.getMinutes();
				min = min < 10 ? '0' + min : min;
				var seconds = now.getSeconds();
				seconds = seconds < 10 ? '0' + seconds : seconds;
				return [ now.getHours(), min, seconds ].join(':');
			}

			// ----- text helper ----- //

			var docElem = document.documentElement;
			var textSetter = docElem.textContent !== undefined ? 'textContent' : 'innerText';

			function setText( elem, value ) {
				elem[ textSetter ] = value;
			}

			// -------------------------- notify -------------------------- //

			var transitionProp = getStyleProperty('transition');

			var notifyTimeout;
			var hideTime = transitionProp ? 1000 : 1500;

			function notify( message ) {
				message += ' at ' + timeStamp();
				setText( notifElem, message );

				if ( transitionProp ) {
					notifElem.style[ transitionProp ] = 'none';
				}
				notifElem.style.display = 'block';
				notifElem.style.opacity = '1';

				// hide the notification after a second
				if ( notifyTimeout ) {
					clearTimeout( notifyTimeout );
				}

				notifyTimeout = setTimeout( hideNotify, hideTime );
			};

			function hideNotify() {
				if ( transitionProp ) {
					notifElem.style[ transitionProp ] = 'opacity 1.0s';
					notifElem.style.opacity = '0';
				} else {
					notifElem.style.display = 'none';
				}
			};
			//@ sourceURL=pen.js
		</script>



	</body>
</html>