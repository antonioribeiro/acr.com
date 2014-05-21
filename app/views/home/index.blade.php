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
                            <p class="quote"><a href="{{ URL::to('/') }}/#/contact">{{g('IT Solutions, Systems Architecture, Web Solutions and Linux Servers. Click here to contact me.')}}</a></p>
                            <br>
                            <br>
                            <p class="quote"><a href="{{ URL::to('/') }}/blog">{{g('I also write some articles about IT, development, solutions, PHP and Laravel. Click to access the Blog.')}}</a></p>
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
                            <p class="quote"><a href="{{ URL::to('/') }}/photography">{{g("I'm also a concert, landscape and portrait photographer, click to see some of my shots and contact me.")}}</a></p>
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