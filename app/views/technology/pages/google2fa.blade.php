@extends('technology.html')

@section('html.head')
    <style>
    		@import url(//fonts.googleapis.com/css?family=Lato:700);

    		body {
    			margin:0;
    			font-family:'Lato', sans-serif;
    			text-align:center;
    			color: #999;
    		}

    		.welcome {
    			width: 300px;
    			height: 100px;
    			position: absolute;
    			left: 50%;
    			top: 50%;
    			margin-left: -150px;
    			margin-top: -200px;
    		}

    		a, a:visited {
    			text-decoration:none;
    		}

    		h1 {
    			font-size: 32px;
    			margin: 16px 0 0 0;
    		}
    </style>
@stop

@section('html.body')
    <div class="welcome">
    	<a href="http://laravel.com" title="Laravel PHP Framework"><img src="{{ $url }}" alt="Laravel PHP Framework"></a>
    	<h1>You have arrived.</h1>
        <br><br><br>
        <span id="secret" style="font-size: 80px; color: #1f1bff">282153</span>
    </div>
@stop

@section('html.footer')
    <script src="{{ URL::to('/') }}/assets/vendor/bower/jquery/jquery.js"></script>

    <script>
        var newTimeout = function()
        {
            setTimeout(function()
            {
                showSecret();
            }, 3000);
        };

        var showSecret = function()
        {
            jQuery.post( "{{ route('google2fa') }}", function( data )
            {
                jQuery('#secret').html(data);
            });

            newTimeout();
        };

        newTimeout();
    </script>
@stop
