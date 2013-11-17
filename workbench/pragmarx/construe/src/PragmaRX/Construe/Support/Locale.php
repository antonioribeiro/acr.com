<?php namespace PragmaRX\Construe\Support;
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

class Locale
{
	private $language;
	private $country;

	/**
	 * Create a new locale instance
	 * 
	 * @param string $language
	 * @param string $country
	 */
	public function __construct($language = null, $country = null) 
	{
		$this->setLanguage($language);

		$this->setCountry($country);
	}

	/**
	 * Language getter
	 * 
	 * @return string
	 */
	public function getLanguage()
	{
		return $this->language;
	}

	/**
	 * Language setter
	 * 
	 * @param string $language
	 */
	public function setLanguage($language)
	{
		if ($language == null)
		{
			$language = $this->language ?: 'en'; // if everything else fails, english is the last resort
		}

		$this->language = strtolower($language);
	}

	/**
	 * Country getter
	 * 
	 * @return string
	 */
	public function getCountry()
	{
		return $this->country;
	}

	/**
	 * Country setter
	 * 
	 * @param string $country
	 */
	public function setCountry($country)
	{
		if ($country == null)
		{
			$country = $this->country ?: 'us'; // if everything else fails, US is the last resort
		}

		$this->country = strtolower($country);
	}

}