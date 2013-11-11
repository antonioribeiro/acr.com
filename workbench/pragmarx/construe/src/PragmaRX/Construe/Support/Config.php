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

use Illuminate\Filesystem\Filesystem;

class Config {

	protected $config;

	public function __construct(Filesystem $files)
	{
		$this->files = $files;

		$this->loadConfig();
	}

	public function get($key, $default = null)
	{
		if( ! isset($this->config[$key]))
		{
			return $default;
		}

		return $this->config[$key];
	}

	public function put($key, $value)
	{
		return $this->config[$key] = $value;
	}

	public function loadConfig()
	{
		if(isset($app) && isset($app['config']))
		{
			$this->config = $app->config['package::pragmarx/construe'];
		}
		else
		{
			$this->config = $this->files->getRequire(__DIR__.'/../../../config/config.php');
		}
	}
}