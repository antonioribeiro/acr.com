@extends('home.layout')

@section('content')

    <!-- Message -->
    <section id="home" class="box">
        <div class="container">
            <div class="panel">
                <div class="row-fluid">
                    <div class="span12">
                        <hgroup id="intro" style="display: none">
                            <h2>>> {{ g($title) }} <<</h2>
                            <h3><a href="/">{{ g($message) }}</a></h3>
                            <h3><a href="/"><i class="fa fa-home"></i></a></h3>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
