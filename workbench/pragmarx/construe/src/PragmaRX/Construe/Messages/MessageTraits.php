<?php namespace PragmaRX\Construe\Messages;
/**
 * Part of the Construe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Construe
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

use PragmaRX\Construe\Support\Locale;
use PragmaRX\Construe\Support\Sentence;

trait MessageTraits {

	protected $messageId;

	public function findById(Sentence $sentence, Locale $locale, $module)
	{
		$message = parent::find(
								parent::buildMessageId($sentence, $locale, $module)
							);

		if($message)
		{
			$sentence->translated = $message->message;
		}

		return $sentence;
	}

	/**
	 * Create a unique hash for a message by message, locale and module
	 * 
	 * @param  Sentence $sentence
	 * @param  Locale $locale
	 * @param  int $module
	 * @return string
	 */
	public function buildMessageId(Sentence $sentence, Locale $locale, $module) {

		$language = $locale->getLanguage();

		$country = $locale->getCountry();

		$string = $sentence->sentence;

		return SHA1("$string, $language, $country, $module");
	}
}
