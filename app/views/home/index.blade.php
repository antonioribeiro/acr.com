@extends('home.layout')

@section('content')

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
                                {{ Form::open(['url' => URL::route('contact.send')]) }}
                                    <span>Field is required : </span>
                                    <input value="" class="validate[required] text-input" type="text" name="req" id="req" />

                                    <div class="form-group has-success">
                                        <div class="controls">
                                            <input class="validate[required] span12" id="name" name="name" type="text" placeholder="{{'Your Name'}}">
                                        </div>
                                        <div class="controls">
                                            <input class="validate[required,custom[email]] span12" id="email" name="email" type="text" placeholder="{{'Your E-mail'}}">
                                        </div>          
                                        <div class="controls">
                                            <input class="validate[required]" id="telephone" name="telephone" type="text" placeholder="{{'Your Telephone'}}">
                                        </div>          
                                        <div class="controls">
                                            <input class="validate[required] span12" id="subject" name="subject" type="text" placeholder="{{'The Subject'}}">
                                        </div>
                                        <div class="controls">
                                            <textarea class="validate[required] span12" id="message" name="message" id="textarea" rows="9" placeholder="{{'Your Message'}}"></textarea>
                                        </div>
                                        <button class="btn btn-default">{{'Send Message'}}</button>
                                    </div>
                                {{ Form::close() }}
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

@stop

@section('inline-javascript')

@stop