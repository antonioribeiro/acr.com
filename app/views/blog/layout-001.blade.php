<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>
            Antonio Carlos Ribeiro - Web Log
        </title>
        <link rel="alternate" href="/atom.xml" title="Antonio Carlos Ribeiro, Front-End Developer" type="application/atom+xml"/>
        <link rel="canonical" href="http://antoniocarlosribeiro.com"/>

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Source Sans Pro">
        <link rel="stylesheet" type="text/css" href="{{ URL::to('/').'/assets/vendor/bower/google-code-prettify/src/prettify.css' }}">
        <link href="{{ asset('assets/layouts/home/css/font-awesome.min.css') }}" rel="stylesheet" media="screen" />

        <link rel="stylesheet" href="{{URL::to('/')}}/assets/blog/css/acr.css"/>
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/blog/css/prettify-desert.css"/>

        <script src="http://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

        </script>
        <script>
            try{
                Typekit.load()}
            catch(e){
            };
        </script>
        <script>
            (function(){
                if(!window.addEventListener||!document.querySelector||!Array.prototype.forEach){
                    return}
                window.addEventListener("DOMContentLoaded",function(){
                    Array.prototype.forEach.call(document.querySelectorAll(".js-svg"),function(img){
                        img.src=img.src.replace(".png",".svg")}
                                                                            )}
                                                                ,false)}
            )();
        </script>
    </head>
    <body onload="prettyPrint()">
        <div class="container">
            <div id="site-header">
                <header role="banner">
                    	
	                            <a href="{{URL::to('blog')}}">
                                    <img src="{{URL::to('/')}}/assets/blog/img/camera.svg" width="60" height="60" />
                                </a>
	                    
                        <p class="languages">
                            <div class="languages">
                                <a href="{{ $switchLanguageUrl }}">
                                    {{ ($switchLanguageTitle == 'english' ? 'in ' : 'em ') . $switchLanguageTitle }} &#8594;
                                </a>
                            </div>
                        </p>
                </header>
                <nav role="navigation">
                    <ul class="site-navigation">
                        <li>
                            <a href="{{ URL::to('blog') }}">
                                {{'Blog'}}
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::to('/') }}">
                                <i class="fa fa-home"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <section id="site-main">
            	@yield('content')
            </section>
            <footer id="site-footer" role="contentinfo">
                <div style="text-align: center">
                    <a data-nav="scroll" href="http://github.com/antonioribeiro"><i class="fa fa-github"></i></a>&nbsp;&nbsp;&nbsp;
                    
                    @if(Glottos::getLocaleAsText() == 'pt_BR')
                        <a data-nav="scroll" href="http://twitter.com/iantoniocarlos">
                    @else
                        <a data-nav="scroll" href="http://twitter.com/iantonioribeiro">
                    @endif
                    <i class="fa fa-twitter"></i>
                    </a>&nbsp;&nbsp;&nbsp;

                    <a data-nav="scroll" href="http://stackoverflow.com/users/1959747/antonio-carlos-ribeiro"><i class="fa fa-stack-overflow"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="{{ URL::to('/') }}"><i class="fa fa-home"></i></a>
                </div>

                <br>
                <p class="text-center milli">
                    &copy; 2013 Antonio Carlos Ribeiro. 

                    {{'Cewr up with'}}
                    <a href="http://laravel.com/">
                        Laravel
                    </a> {{'and'}} 

                    <a href="https://github.com/antonioribeiro/glottos">
                        Glottos.
                    </a>
                </p>
            </footer>
        </div>
        <script>
            var _gaq=[["_setAccount","UA-2508361-5"],["_trackPageview"]];
            (function(d,t){
                var g=d.createElement(t);
                var s=d.getElementsByTagName(t)[0];
                g.src="//www.google-analytics.com/ga.js";s.parentNode.insertBefore(g,s)}(document,"script"));
        </script>

        <script src="{{ URL::to('/').'/assets/vendor/bower/google-code-prettify/src/prettify.js' }}"></script>

        @include('global._partials.google-analytics')
    </body>
</html>