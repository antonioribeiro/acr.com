<?php

if ( ! function_exists('g'))
{
	/**
	 * Translator helper.
	 *
	 * @param  string  $name
	 * @param  string  $parameters
	 * @return string
	 */
	function g($string, $locale = null, $module = null)
	{
		return Glottos::translate($string, $locale, $module);
	}
}
