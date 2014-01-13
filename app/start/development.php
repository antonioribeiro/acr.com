<?php

function start($name, $title = '')
{
	Clockwork::startEvent($name, $title);
}

function stop($name)
{
	Clockwork::endEvent($name);
}

function l($var)
{
	Clockwork::info($var);
}