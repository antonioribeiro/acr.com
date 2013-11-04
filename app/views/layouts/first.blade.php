
<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Antonio Carlos Ribeiro</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Page description" />
        <meta name="author" content="Superthe.me" />
        <meta charset="utf-8" />

        <link href="{{ asset('assets/layouts/first/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
        <link href="{{ asset('assets/layouts/first/css/font-awesome.min.css') }}" rel="stylesheet" media="screen" />
        <link href="{{ asset('assets/layouts/first/css/flexslider.css') }}" rel="stylesheet" media="screen" />
        <link href="{{ asset('assets/layouts/first/css/jquery.vegas.css') }}" rel="stylesheet" media="screen" />
        <link href="{{ asset('assets/layouts/first/css/style.min.css') }}" rel="stylesheet" media="screen" />

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
                                <a href="{{ URL::to('/') }}/language/eng">
                                    <i  class="fa fa-eye"></i> english
                                </a>
                            </div>

                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right" id="navigation">
                                    <li><a data-nav="scroll" href="{{ URL::to('/') }}/#/tech">TECNOLOGIA</a></li>
                                    <li><a data-nav="scroll" href="{{ URL::to('/') }}/#/photo">FOTOGRAFIA</a></li>
                                    <li><a data-nav="scroll" href="{{ URL::to('/') }}/#/contact">CONTATO</a></li>
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
                            <h3>Tecnologia &amp; Fotografia</h3>
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
                            <h2>Tecnologia</h2>
                            <h3></h3>
                        </hgroup>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 content">
                        <div class="row-fluid">
                            <p class="quote"><a href="{{ URL::to('/') }}/#/contact">Soluções em Tecnologia da Informação, Arquitetura de Sistemas e Web e Servidores Linux. Clique para entrar em contato.</a></p>
                            <br>
                            <br>
                            <p class="quote"><a href="{{ URL::to('/') }}/blog">Eu também escrevo sobre TI, desenvolvimento, soluções, PHP e Laravel. Clique para ir ao Blog.</a></p>
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
                            <h2>Fotografia</h2>
                            <h3></h3>
                        </hgroup>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 content">
                        <div class="row-fluid">
                            <p class="quote"><a href="http://antoniocarlosribeiro.smugmug.com">As fotografias estão no Smugmug, clique para vê-las.</a></p>
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
                            <h2>Contato</h2>
                            <h3></h3>
                        </hgroup>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 content">

                        <div class="row-fluid">
                            <div class="span6">
                                <h2 class="big-h2-heading"><i  class="fa fa-map-marker"></i> Me Encontre</h2>
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
                                <h2 class="big-h2-heading"><i  class="fa fa-comment"></i> Me Envie Uma Mensagem</h2>
                                <form>
                                    <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                                <input class="span12" name="name" type="text" placeholder="Seu Nome Completo">
                                            </div>
                                            <div class="controls">
                                                <input class="span12" name="email" type="text" placeholder="Seu Email">
                                            </div>          
                                            <div class="controls">
                                                <input class="span12" name="telephone" type="text" placeholder="Seu Telefone">
                                            </div>          
                                            <div class="controls">
                                                <input class="span12" name="subject" type="text" placeholder="Assunto">
                                            </div>
                                            <div class="controls">
                                                <textarea class="span12" name="message" id="textarea" rows="9" placeholder="Mensagem"></textarea>
                                            </div>
                                            <button class="btn btn-default">Enviar Mensagem</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ligthbox -->
    <div style="display: none;" id="lightbox"><img id="bigimg" src="" /></div>

    <!-- scripts -->
    <script type="text/javascript" src="{{ asset('assets/layouts/first/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/first/js/signals.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/first/js/crossroads.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/first/js/hasher.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/first/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/first/js/jquery.vegas.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/first/js/jquery.flexslider-min.js') }}"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/first/js/googlemaps.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/layouts/first/js/theme.js') }}"></script>

</body>

</html>