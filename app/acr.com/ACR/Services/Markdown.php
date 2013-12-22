<?php namespace ACR\Services;

use \Michelf\MarkdownExtra;

class Markdown {

	public static function transform($text)
	{
		return str_replace(
							'<pre>', 
							'<pre class="prettyprint">', 
							MarkdownExtra::defaultTransform($text)
						);
	}

}
