<?php namespace PragmaRX\Construe\Repositories\Data;
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
use PragmaRX\Construe\Support\Locale;
use PragmaRX\Construe\Repositories\Messages\MessageInterface;

class DataRepository implements DataRepositoryInterface {

	private $message;

	private $translation;

	public function __construct(MessageInterface $message, MessageInterface $translation)
	{
		$this->message = $message;

		$this->translation = $translation;
	}

	public function findSentence(Sentence $sentence)
	{
		if (! $sentence->getId())
		{
			$sentence = $this->message->find($sentence);
		}

		return $sentence;
	}

	public function findTranslation(Sentence $sentence, Locale $locale)
	{
		return $this->translation->find($this->findSentence($sentence), $locale);
	}

	public function addTranslation(Sentence $sentence, Locale $locale)
	{
		return $this->translation->add($this->findSentence($sentence), $locale);
	}

}