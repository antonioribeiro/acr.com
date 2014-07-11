<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Antonio Carlos Ribeiro">

        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>
            Antonio Carlos Ribeiro - Technology
        </title>

        <!-- Bootstrap core CSS -->
        <link href="{{ URL::to('/') }}/assets/vendor/bower/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <link href="{{ URL::to('/') }}/assets/custom/css/sticky-footer-navbar.css" rel="stylesheet">

        <link href="{{ URL::to('/') }}/assets/custom/css/blog.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ URL::to('/') }}/assets/vendor/bower/font-awesome/css/font-awesome.min.css" />

        <link href='https://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" type="text/css" href="{{ URL::to('/').'/assets/vendor/bower/google-code-prettify/src/prettify.css' }}">

        <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/assets/blog/css/prettify-desert.css"/>

	    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/shadowbox/3.0.3/shadowbox.css" />

        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

    <body onload="prettyPrint()">
        <!-- Wrap all page content here -->
        <div id="wrap">
            <!-- Fixed navbar -->
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <a class="brand" href="{{ URL::route('technology') }}">Antonio Carlos Ribeiro - {{ g('Technology') }}</a>
                    </div>
                    <div class="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <h2>
                                    <a href="{{ URL::to('/') }}">
                                        <i class="fa fa-home"></i>
                                    </a>

	                                &nbsp;

	                                <a target="_blank" href="https://br.linkedin.com/in/iantonioribeiro/" title="Linkedin">
		                                <i class="fa fa-linkedin"></i>
	                                </a>

	                                &nbsp;

                                    <a target="_blank" href="http://github.com/antonioribeiro" title="Github">
                                        <i class="fa fa-github"></i>
                                    </a>

                                    &nbsp;

                                    <a target="_blank" href="http://twitter.com/iantonioribeiro" title="Twitter">
	                                    <i class="fa fa-twitter"></i>
                                    </a>

                                    &nbsp;

                                    <a target="_blank" href="http://stackoverflow.com/users/1959747/antonio-carlos-ribeiro"><i class="fa fa-stack-overflow" title="StackOverflow"></i></a>

	                                &nbsp;

	                                <a href="{{ route('home') }}/#/contact" title="Contact" id="contact">
		                                <i class="fa fa-envelope icon"></i>
	                                </a>
                                </h2>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>

            <!-- Begin page content -->
            <div class="container">
                <div class="row">
                    <p>
                        <div class="languages text-right">
                            <a href="{{ $switchLanguageUrl }}">
                                ({{ ($switchLanguageTitle == 'english' ? 'read in ' : 'ler em ') . $switchLanguageTitle }})
                            </a>
                        </div>
                    </p>
                </div>

                <div class="row">
                    <div class="col-md-10">
                        @yield('content')
                    </div>

                    <div class="col-md-2 text-right right-panel">
                        <p>&nbsp;</p>

                        @include('technology._partials.sidebar')
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="footer-text text-muted text-center">
                &copy; 2013 Antonio Carlos Ribeiro.

                {{g('Sewed up with')}}
                <a href="http://laravel.com/">
                    Laravel
                </a> {{g('and')}}

                <a href="https://github.com/antonioribeiro/glottos">
                    Glottos.
                </a>
            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="{{ URL::to('/') }}/assets/vendor/bower/jquery/jquery.js"></script>
        <script src="{{ URL::to('/') }}/assets/vendor/bower/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/shadowbox/3.0.3/shadowbox.js"></script>
        <script src="{{ URL::to('/').'/assets/vendor/bower/google-code-prettify/src/prettify.js' }}"></script>

        <script type="text/javascript">
	        Shadowbox.init({
		        skipSetup: true,
		        players: ["img", "html"]
	        });

	        jQuery(document).ready(function()
	        {
		        jQuery('img.img-responsive').on('click touchend', function()
		        {
			        Shadowbox.open({
				        content: jQuery(this).attr('data-original'),
				        player: 'img'
			        });

			        console.log('show!');
		        });
	        });

	        jQuery(function() {
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

		        jQuery(".filter-label").click(function() {
			        jQuery(".filter-label").removeClass("active");
			        var filter = jQuery(this).addClass('active').data('filter');
			        if (filter) {
				        wall.filter(filter);
			        } else {
				        wall.unFilter();
			        }
		        });

		        wall.fitWidth();
	        });
        </script>

        @include('global._partials.google-analytics')
    </body>
</html>
