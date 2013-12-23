<?php namespace ACR\Services;

use \Michelf\MarkdownExtra;

class Markdown {

	public static function transform($text)
	{
		$markdown = str_replace(
							'<pre><code>', 
							'<pre class="prettyprint"><code >', 
							MarkdownExtra::defaultTransform($text)
						);

		$markdown = str_replace(
							'<code>', 
							'<code class="spancode">', 
							$markdown
						);

		return $markdown;
	}

}
