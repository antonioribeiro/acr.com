<?php

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

use PragmaRX\Construe\Construe;
use Mockery as m;

class ConstrueLoaderTest extends PHPUnit_Framework_TestCase {

	/**
	 * Setup resources and dependencies.
	 *
	 * @return void
	 */
	public function setUp()
	{
		$this->construe = new Construe(
			$this->locale = m::mock('PragmaRX\Construe\Locale')
		);
	}

	/**
	 * Close mockery.
	 *
	 * @return void
	 */
	public function tearDown()
	{
		m::close();
	}

	public function testTranslation()
	{
		// $this->requireLanguage();

		// $t = $this->construe->translate('home');

		// $this->assertEquals($t, 'casa');
	}

	public function requireLanguage()
	{
		$this->locale->shouldReceive('getLanguage')->once()->andReturn('en');

		$this->locale->shouldReceive('getCountry')->once()->andReturn('us');
	}

}