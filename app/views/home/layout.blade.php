<!DOCTYPE html>
<html lang="en">

    <head>

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

        <!--[if IE 7]>
        <link href="css/font-awesome-ie7.css" rel="stylesheet">
        <![endif]-->

        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
        <!--[if gte IE 9]>
        <style type="text/css">
        </style>
        <![endif]-->

    </head>

<body>

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
                                    <li title="Blog"><a data-nav="scroll" href="{{ URL::to('/') }}/blog"><i class="fa fa-file-text-o"></i></a></li>
                                    <li title="Github"><a data-nav="scroll" href="http://github.com/antonioribeiro"><i class="fa fa-github"></i></a></li>
                                    
                                    <li title="Twitter">
                                        @if(Glottos::getLocaleAsText() == 'pt_BR')
                                            <a data-nav="scroll" href="http://twitter.com/iantoniocarlos">
                                        @else
                                            <a data-nav="scroll" href="http://twitter.com/iantonioribeiro">
                                        @endif
                                        <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>

                                    <li title="Stack Overflow"><a data-nav="scroll" href="http://stackoverflow.com/users/1959747/antonio-carlos-ribeiro"><i class="fa fa-stack-overflow"></i></a></li>
                                    <li title="Tecnology"><a data-nav="scroll" href="{{ URL::to('/') }}/#/tech"><i class="fa fa-laptop"></i></a></li>
                                    <li title="Photography"><a data-nav="scroll" href="{{ URL::to('/') }}/#/photo"><i class="fa fa-camera"></i></a></li>
                                    <li title="Contact"><a data-nav="scroll" href="{{ URL::to('/') }}/#/contact"><i class="fa fa-envelope"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- home -->
    <section id="home" class="box">
        <div class="container">
            <div class="panel">
                <div class="row-fluid">
                    <div class="span12">
                        <hgroup id="intro" style="display: none">
                            <h2>Antonio Carlos Ribeiro</h2>
                            <h3>{{'Tecnology'}} &amp; {{'Photography'}}</h3>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- tech -->
    <section id="tech" class="box">
        <div class="container">
            <div class="panel">
                <div class="row-fluid">
                    <div class="span12 header">
                        <hgroup>
                            <h2>{{'Tecnology'}}</h2>
                            <h3></h3>
                        </hgroup>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 content">
                        <div class="row-fluid">
                            <p class="quote"><a href="{{ URL::to('/') }}/#/contact">{{'IT Solutions, Systems Architecture, Web Solutions and Linux Servers. Click here to contact me.'}}</a></p>
                            <br>
                            <br>
                            <p class="quote"><a href="{{ URL::to('/') }}/blog">{{'I also write some articles about IT, development, solutions, PHP and Laravel. Click to access the Blog.'}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- photo -->
    <section id="photo" class="box">
        <div class="container">
            <div class="panel">
                <div class="row-fluid">
                    <div class="span12 header">
                        <hgroup>
                            <h2>{{'Photography'}}</h2>
                            <h3></h3>
                        </hgroup>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 content">
                        <div class="row-fluid">
                            <p class="quote"><a href="http://antoniocarlosribeiro.smugmug.com">{{'My photos are hosted by Smugmug, click to see them.'}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact -->
    <section id="contact" class="box">
        <div class="container">
            <div class="panel">
                <div class="row-fluid">
                    <div class="span12 header">
                        <hgroup>
                            <h2>{{'Contact'}}</h2>
                            <h3></h3>
                        </hgroup>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 content">

                        <div class="row-fluid">
                            <div class="span6">
                                <h2 class="big-h2-heading"><i  class="fa fa-map-marker"></i> {{'Find Me'}}</h2>
                                <ul>
                                    <li><i  class="fa fa-building"></i> Rua Professor Quintino do Vale, 26 / 205</li>
                                    <li><i  class="fa-road"></i> Rio de Janeiro - Brasil - 20.250-030</li>
                                </ul>                               
                                <p><i  class="fa fa-phone"></i> +55-21-9-8088-2233</p>                                
                                <p class="email"><i  class="fa fa-envelope"></i> <a href="mailto:&#097;&#099;&#114;&#064;&#097;&#110;&#116;&#111;&#110;&#105;&#111;&#099;&#097;&#114;&#108;&#111;&#115;&#114;&#105;&#098;&#101;&#105;&#114;&#111;&#046;&#099;&#111;&#109;">&#097;&#099;&#114;&#064;&#097;&#110;&#116;&#111;&#110;&#105;&#111;&#099;&#097;&#114;&#108;&#111;&#115;&#114;&#105;&#098;&#101;&#105;&#114;&#111;&#046;&#099;&#111;&#109;</a></p>
                                <!-- googlemaps -->
                                <div id="map_canvas"></div>
                            </div>
                            <div class="span6">
                                <h2 class="big-h2-heading"><i  class="fa fa-comment"></i> {{'Send Me a Message'}}</h2>
                                <form>
                                    <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                                <input class="span12" name="name" type="text" placeholder="{{'Your Name'}}">
                                            </div>
                                            <div class="controls">
                                                <input class="span12" name="email" type="text" placeholder="{{'Your E-mail'}}">
                                            </div>          
                                            <div class="controls">
                                                <input class="span12" name="telephone" type="text" placeholder="{{'Your Telephone'}}">
                                            </div>          
                                            <div class="controls">
                                                <input class="span12" name="subject" type="text" placeholder="{{'The Subject'}}">
                                            </div>
                                            <div class="controls">
                                                <textarea class="span12" name="message" id="textarea" rows="9" placeholder="{{'Your Message'}}"></textarea>
                                            </div>
                                            <button class="btn btn-default">{{'Send Message'}}</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <br><br>
                        <div class="row-fluid black">
                            <h1 class="big-h2-heading text-center">
                                <a data-nav="scroll" title="Blog" href="{{ URL::to('/') }}/blog"><i class="fa fa-file-text-o"></i></a>
                                &nbsp;&nbsp;&nbsp;

                                <a data-nav="scroll" title="Github" href="http://github.com/antonioribeiro"><i class="fa fa-github"></i></a>

                                &nbsp;&nbsp;&nbsp;
                                
                                @if(Glottos::getLocaleAsText() == 'pt_BR')
                                    <a data-nav="scroll" title="Twitter" href="http://twitter.com/iantoniocarlos">
                                @else
                                    <a data-nav="scroll" title="Twitter" href="http://twitter.com/iantonioribeiro">
                                @endif
                                <i class="fa fa-twitter"></i>
                                </a>

                                &nbsp;&nbsp;&nbsp;

                                <a data-nav="scroll" title="Stack Overflow" href="http://stackoverflow.com/users/1959747/antonio-carlos-ribeiro"><i class="fa fa-stack-overflow"></i>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ligthbox -->
    <div style="display: none;" id="lightbox"><img id="bigimg" src="" /></div>

    <!-- scripts -->
    <script type="text/javascript" src="{{ asset('assets/layouts/home/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/home/js/signals.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/home/js/crossroads.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/home/js/hasher.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/home/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/home/js/jquery.vegas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/home/js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/home/js/googlemaps.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/home/js/theme.js') }}"></script>

    @include('global._partials.google-analytics')
</body>

</html>