<?php namespace PragmaRX\Glottos\Cookies\Laravel;
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


use Illuminate\Container\Container;
use Illuminate\Cookie\CookieJar;
use Symfony\Component\HttpFoundation\Cookie;

class IlluminateCookie implements CookieInterface {

	/**
	 * The key used in the Cookie.
	 *
	 * @var string
	 */
	protected $key = 'pragmarx_glottos';

	/**
	 * The cookie object.
	 *
	 * @var \Illuminate\Cookie\CookieJar
	 */
	protected $jar;

	/**
	 * The cookie to be stored.
	 *
	 * @var \Symfony\Component\HttpFoundation\Cookie
	 */
	protected $cookie;

	/**
	 * Creates a new cookie instance.
	 *
	 * @param  \Illuminate\Cookie\CookieJar  $jar
	 * @param  string  $key
	 * @return void
	 */
	public function __construct(CookieJar $jar, $key = null)
	{
		$this->jar = $jar;

		if (isset($key))
		{
			$this->key = $key;
		}
	}

	/**
	 * Returns the cookie key.
	 *
	 * @return string
	 */
	public function getKey()
	{
		return $this->key;
	}

	/**
	 * Put a value in the Sentry cookie.
	 *
	 * @param  mixed  $value
	 * @param  int    $minutes
	 * @return void
	 */
	public function put($value, $minutes)
	{
		$this->cookie = $this->jar->make($this->getKey(), $value, $minutes);
	}

	/**
	 * Put a value in the Sentry cookie forever.
	 *
	 * @param  mixed  $value
	 * @return void
	 */
	public function forever($value)
	{
		$this->cookie = $this->jar->forever($this->getKey(), $value);
	}

	/**
	 * Get the Sentry cookie value.
	 *
	 * @return mixed
	 */
	public function get()
	{
		return $this->jar->get($this->getKey());
	}

	/**
	 * Remove the Sentry cookie.
	 *
	 * @return void
	 */
	public function forget()
	{
		$this->cookie = $this->jar->forget($this->getKey());
	}

	/**
	 * Returns the Symfony cookie object associated
	 * with the Illuminate cookie.
	 *
	 * @return \Symfony\Component\HttpFoundation\Cookie
	 */
	public function getCookie()
	{
		return $this->cookie;
	}

}
