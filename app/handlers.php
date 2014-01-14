<?php

App::missing(function($exception)
{
    return Response::view('home.404', array(), 404);
});