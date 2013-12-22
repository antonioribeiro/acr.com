
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>
            Antonio Carlos Ribeiro, Front-End Developer
        </title>
        <link rel="alternate" href="/atom.xml" title="Antonio Carlos Ribeiro, Front-End Developer" type="application/atom+xml"/>
        <link rel="canonical" href="http://antoniocarlosribeiro.com"/>

        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto Condensed">

        </script>
        <script>
            try{
                Typekit.load()}
            catch(e){
            };
        </script>
        <link rel="stylesheet" href="{{URL::to('/')}}/assets/blog/css/acr.css"/>
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
    <body>
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
                            <a href="/articles.html">
                                {{'Articles'}}
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/iantonioribeiro">
                                {{'Twitter'}}
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/antonioribeiro">
                                {{'GitHub'}}
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <section id="site-main">
            	@yield('content')
            </section>
            <footer id="site-footer" role="contentinfo">
                <p class="text-center milli">
                    &copy; 2013 Antonio Carlos Ribeiro. 

                    Sewed up with 
                    <a href="http://laravel.com/">
                        Laravel
                    </a> and 

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
    </body>
</html>