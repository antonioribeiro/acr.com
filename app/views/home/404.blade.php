@extends('home.layout')

@section('content')

    <!-- 404 -->
    <section id="home" class="box">
        <div class="container">
            <div class="panel">
                <div class="row-fluid">
                    <div class="span12">
                        <hgroup id="intro" style="display: none">
                            <h2>>> {{'Error 404'}} <<</h2>
                            <h3><a href="/">{{g("Sorry, but this page doesn't exist")}}</a></h3>
                            <h3><a href="/"><i class="fa fa-home"></i></a></h3>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
