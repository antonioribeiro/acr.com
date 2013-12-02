<?php namespace PragmaRX\Glottos\Support\Laravel;
/**
 * Part of the Glottos package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Glottos
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

use PragmaRX\Glottos\Glottos;
use Symfony\Component\Translation\TranslatorInterface;

class Lang implements TranslatorInterface {

	public function __construct(Glottos $glottos)
	{
		$this->glottos = $glottos;
	}

    /**
     * Translates the given message.
     *
     * @param string      $id         The message, the message key or an object that can be cast to string
     * @param array       $parameters An array of parameters for the message
     * @param string|null $domain     The domain for the message
     * @param string|null $locale     The locale or null to use the default
     *
     * @return string The translated string
     *
     * @api
     */
    public function trans($id, array $parameters = null, $domain = 'messages', $locale = null)
    {
    	return $this->glottos->translate($id, $domain, $locale, $parameters);
    }

    /**
     * Translates the given choice message by choosing a translation according to a number.
     *
     * @param string      $id         The message id (may also be an object that can be cast to string)
     * @param integer     $number     The number to use to find the indice of the message
     * @param array       $parameters An array of parameters for the message
     * @param string|null $domain     The domain for the message or null to use the default
     * @param string|null $locale     The locale or null to use the default
     *
     * @return string The translated string
     *
     * @api
     */
    public function transChoice($id, $number, array $parameters = array(), $domain = null, $locale = null)
    {
    	return $this->choice($id, $number, $parameters, $domain, $locale);
    }

    /**
     * Sets the current locale.
     *
     * @param string $locale The locale
     *
     * @api
     */
    public function setLocale($locale)
    {
    	$this->glottos->setLocale($locale);
    }

    /**
     * Returns the current locale.
     *
     * @return string The locale
     *
     * @api
     */
    public function getLocale()
    {
    	return $this->glottos->getLocale();
    }

	/**
	 * Load the specified language group.
	 *
	 * @param  string  $namespace
	 * @param  string  $group
	 * @param  string  $locale
	 * @return void
	 */
	public function load($namespace, $group, $locale)
	{
		/// It's already loaded :)
	}


	/**
	 * Get the translation for the given key.
	 *
	 * @param  string  $key
	 * @param  array   $replace
	 * @param  string  $locale
	 * @return string
	 */
	public function get($key, array $replace = array(), $locale = null)
	{
		return $this->glottos->get($key, $replace, $locale);
	}

	/**
	 * Determine if a translation exists.
	 *
	 * @param  string  $key
	 * @param  string  $locale
	 * @return bool
	 */
	public function has($key, $locale = null)
	{
		return $this->glottos->has($key, $locale);
	}

	/**
	 * Get a translation according to an integer value.
	 *
	 * @param  string  $key
	 * @param  int     $number
	 * @param  array   $replace
	 * @param  string  $locale
	 * @return string
	 */
	public function choice($key, $number, array $replace = array(), $locale = null)
	{
		return $this->glottos->choice($key, $number, $replace, null, $locale);
	}	
}
