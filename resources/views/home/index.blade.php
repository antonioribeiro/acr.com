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
                            <h3>{{g('Technology')}} &amp; {{g('Photography')}}</h3>
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
                            <h2>{{g('Technology')}}</h2>
                            <h3></h3>
                        </hgroup>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 content">
                        <div class="row-fluid">
                            <p class="quote"><a href="{{ URL::route('technology') }}" title="{{g("Click to see the articles and more")}}">{{g('IT Solutions, Systems Architecture, Web Solutions and Linux Servers.')}}</a></p>
                            <br>
                            <br>
                            <p class="quote"><a href="{{ URL::route('technology') }}" title="{{g("Click to see the articles and more")}}"><i class="fa fa-laptop" style="font-size: 30"></i></a></p>
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
                            <h2>{{g('Photography')}}</h2>
                            <h3></h3>
                        </hgroup>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 content">
                        <div class="row-fluid">
                            <p class="quote"><a href="{{ URL::to('/') }}/photography" title="{{g("Click to see some shots")}}">{{g("Concert, landscape and portrait photographer.")}}</a></p>
	                        <br>
	                        <br>
	                        <p class="quote"><a href="{{ URL::to('/') }}/photography" title="{{g("Click to see some shots")}}"><i class="fa fa-camera"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services -->
    <section id="services" class="box">
        <div class="container">
            <div class="panel">
                <div class="row-fluid">
                    <div class="span12 header">
                        <hgroup>
                            <h2>{{g('Services')}}</h2>
                            <h3></h3>
                        </hgroup>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12 content">
                        <div class="row-fluid">
                            <p class="quote"><a href="{{ URL::to('/') }}/#contact/" title="">{{g("key::services-text")}}</a></p>
                            <br>
                            <br>
                            <p class="quote">
                                <a href="{{ URL::to('/') }}/#contact/" class="btn btn-danger btn-large" style="color:white;">{{g("key::hire-me")}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('home.contactForm')
@stop

@section('inline-javascript')

@stop
