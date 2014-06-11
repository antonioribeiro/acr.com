@extends('html')

@section('html-head')
	<title>Antonio Carlos Ribeiro.com</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Page description" />
	<meta name="author" content="Antonio Carlos Ribeiro" />
	<meta charset="utf-8" />

	<link href="{{ asset('assets/layouts/home/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
	<link href="{{ asset('assets/layouts/home/css/font-awesome.min.css') }}" rel="stylesheet" media="screen" />
	<link href="{{ asset('assets/layouts/home/css/flexslider.css') }}" rel="stylesheet" media="screen" />
	<link href="{{ asset('assets/layouts/home/css/jquery.vegas.css') }}" rel="stylesheet" media="screen" />
	<link href="{{ asset('assets/layouts/home/css/style.min.css') }}" rel="stylesheet" media="screen" />

	<style type="text/css">
		@yield('inline-css')
	</style>

	<!--[if IE 7]>
	<link href="css/font-awesome-ie7.css" rel="stylesheet">
	<![endif]-->


	<!--[if gte IE 9]>
	<style type="text/css">
	</style>
	<![endif]-->
@stop

@section('html-body')
	<a id="back-top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

	<!-- header -->
	<header id="header">
		<div class="container">
			<div class="row-fluid">
				<div class="span12">
					<div class="navbar">
						<div class="navbar-inner">
							<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
								<span class="fa fa-bar"></span>
								<span class="fa fa-bar"></span>
								<span class="fa fa-bar"></span>
							</a>

							<div class="brand">
								<a href="{{ URL::to('/') }}/#/home">
									<h1 id="logo">ACR</h1>
								</a>
							</div>
							<div class="language">
								<a href="{{ $switchLanguageUrl }}">
									<i  class="fa fa-eye"></i> {{ $switchLanguageTitle }}
								</a>
							</div>

							<div class="nav-collapse collapse">
								<ul class="nav pull-right" id="navigation">
									<li title="Technology"><a data-nav="scroll" href="{{ URL::to('/') }}/#/tech"><i class="fa fa-laptop"></i></a></li>
									<li title="Photography"><a data-nav="scroll" href="{{ URL::to('/') }}/photography"><i class="fa fa-camera"></i></a></li>
									<li title="Github"><a data-nav="scroll" href="https://github.com/antonioribeiro"><i class="fa fa-github"></i></a></li>

									<li title="Twitter">
										@if(Glottos::getLocaleAsText() == 'pt_BR')
											<a data-nav="scroll" href="https://twitter.com/iantoniocarlos">
										@else
											<a data-nav="scroll" href="https://twitter.com/iantonioribeiro">
										@endif
										<i class="fa fa-twitter"></i>
										</a>
									</li>

									<li title="Stack Overflow"><a data-nav="scroll" href="https://stackoverflow.com/users/1959747/antonio-carlos-ribeiro"><i class="fa fa-stack-overflow"></i></a></li>
									<li title="Contact"><a data-nav="scroll" href="{{ URL::to('/') }}/#/contact"><i class="fa fa-envelope"></i></a></li>
								</ul>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header>

	@yield('content')

	<footer>
		<div class="container">
			<div class="panel">
				<div class="row-fluid">
					<div class="span12 header center footer">
						<p>{{g('Sewed by')}} <a href="{{ URL::to('/') }}">Antonio Carlos Ribeiro</a></p>
						<p>{{g('Using')}} <a href="https://laravel.com">Laravel</a> &amp; <a href="https://github.com/antonioribeiro/glottos">Glottos</a></p>
						<p>{{g('Powered by')}} <a href="https://forge.laravel.com">Forge</a> & <a href="https://digitalocean.com">Digital Ocean</a></p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- ligthbox -->
	<div style="display: none;" id="lightbox"><img id="bigimg" src="" /></div>

	<!-- scripts -->
	<script type="text/javascript" src="{{ asset('assets/vendor/bower/jquery/jquery.min.js') }}"></script>

	<script type="text/javascript" src="{{ asset('assets/layouts/home/js/signals.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/layouts/home/js/crossroads.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/layouts/home/js/hasher.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/layouts/home/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/layouts/home/js/jquery.vegas.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/layouts/home/js/jquery.flexslider-min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/layouts/home/js/googlemaps.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/layouts/home/js/theme.js') }}"></script>

	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>

	<script type="text/javascript">
		@yield('inline-javascript')
	</script>

	<script type="text/javascript">
	    /**
	     * Vegas background image slider
	     */
	    $.vegas('slideshow',
	    {
	        delay: 10000,
	        backgrounds: [
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20101114-1000-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20101114-1014-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20100804-1309-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/i-nrqfsgn.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/i-7H4GBVp.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20100604-00005-98-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20100606-00006-230-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20101110-0392-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/i-csxC54c.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20100424-01030-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20101001-8519-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20131212-1893.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20100126-01050-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-NY--20091225-00120-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/i-BPFHxJQ.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20100220-01166-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20100120-01058-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20100301-01430-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/i-ZTdCpzN.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20101002-8665-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/ACR-20100327-01209-X3.jpg', fade: 2000 },
	            { src: '{{ asset('assets/layouts/home/img/photos') }}/i-wz2Q7xc.jpg', fade: 2000 }
	        ]
	    })('overlay');		</script>

	@include('global._partials.google-analytics')
@stop
