<?php namespace PragmaRX\Construe\Repositories\Messages;
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

use PragmaRX\Construe\Support\Sentence;

class Message extends MessageBase implements MessageInterface {
	
	public function find(Sentence $sentence)
	{
		$model = $this->model->find($sentence->getId());

		if ( ! $model)
		{
			$model = $this->model->create(['hash' => $sentence->getHash()]);
		}

		$sentence->setId($model->id);

		return $sentence;
	}

}