<?php namespace PragmaRX\Support;

use Countable;

class SentenceBag implements Countable {

	/**
	 * All of the registered sentences.
	 *
	 * @var array
	 */
	protected $sentences = array();

	/**
	 * Paragraph prefix
	 * 
	 * @var string
	 */
	protected $prefix;

	/**
	 * Paragraph suffix
	 * 
	 * @var string
	 */
	protected $suffix;

	protected $prefixSuffixDelimiters = array( 
												"!"=>1,"\\"=>1,"\""=>1,"#"=>1,"\$"=>1,"%"=>1,"&"=>1,"'"=>1,"("=>1,")"=>1,"*"=>1,"+"=>1,","=>1,"-"=>1,"."=>1,"/"=>1,":"=>1,";"=>1,"<"=>1,"="=>1,">"=>1,"?"=>1,"@"=>1,"["=>1,"]"=>1,"^"=>1,"_"=>1,"`"=>1,"{"=>1,"|"=>1," "=>1,"}"=>1 
											);


	/**
	 * Create a new sentence bag instance.
	 *
	 * @param  array  $sentences
	 * @return void
	 */
	public function __construct($paragraph, $delimiter = '.')
	{
		$this->delimiter = $delimiter;

		$this->parse($paragraph);
	}

	/**
	 * Parse a string or array to get our sentences
	 * 
	 * @param  string/array $sentences
	 * @return void
	 */
	public function parse($sentences)
	{
		if(is_string($sentences))
		{
			$sentences = $this->removePrefixAndSuffix($sentences);

			$sentences = explode($this->delimiter, $sentences);
		}

		$this->clear();

		foreach($sentences as $key => $sentence)
		{
			$this->add( $this->parseSentence($sentence) );
		}
	}

	/**
	 * Parse a sentence by removing prefixes and suffixes from it
	 * 
	 * @param  string $sentence
	 * @return array
	 */
	private function parseSentence($sentence) 
	{
		$prefix = '';
		$suffix = '';

		/// This is old and should be done using Regex now, anyone apply? :)

		$i = 0;
		while ($i < strlen($sentence) and isset($this->prefixSuffixDelimiters[$sentence[$i]])) {
			$prefix .= $sentence[$i];
			$i++;
		}

		$i = strlen($sentence)-1;
		while ($i > -1 and isset($this->prefixSuffixDelimiters[$sentence[$i]])) {
			$suffix = $sentence[$i] . $suffix;
			$i--;
		}

		if ($prefix != $this->variableDelimiterPrefix) {
			$sentence = substr($sentence,strlen($prefix));	
		} else {
			$prefix = '';
		}
		
		if ($suffix != $this->variableDelimiterSuffix) {
			$sentence = substr($sentence,0,strlen($sentence)-strlen($suffix));
		} else {
			$suffix = '';
		}

		return array(
						'prefix' => $prefix, 
						'sentence' => $sentence, 
						'suffix' => $suffix
					);
	}

	/**
	 * Clear the sentences bag
	 * 
	 * @return void
	 */
	public function clear()
	{
		$this->sentences = array();
	}

	/**
	 * Add a sentence to the bag
	 *
	 * @param  string  $sentence
	 * @return string
	 */
	public function add($sentence)
	{
		return $this->sentences[] = $string;
	}

	/**
	 * Get a particular sentence from the bag
	 *
	 * @param  string  $key
	 * @return string
	 */
	public function get($key)
	{
		if (array_key_exists($key, $this->sentences))
		{
			return $this->sentences[$key];
		}

		return '';
	}

	/**
	 * Replace a particular sentence
	 *
	 * @param  string  $key
	 * @return string
	 */
	public function put($key, $string)
	{
		if (array_key_exists($key, $this->sentences))
		{
			$this->sentences[$key] = $string;
		}
	}

	/**
	 * Get all of the sentences from the bag.
	 *
	 * @param  string  $format
	 * @return array
	 */
	public function all($format = null)
	{
		return $this->sentences;
	}

	/**
	 * Get the raw sentences in the container.
	 *
	 * @return array
	 */
	public function getSentences()
	{
		return $this->sentences;
	}

	/**
	 * Get the sentences for the instance.
	 *
	 * @return \PragmaRX\Support\SentenceBag
	 */
	public function getSentenceBag()
	{
		return $this;
	}

	/**
	 * Get the default sentence delimiter.
	 *
	 * @return string
	 */
	public function getDelimiter()
	{
		return $this->format;
	}

	/**
	 * Set the default sentence delimiter.
	 *
	 * @param  string  $delimiter
	 * @return \PragmaRX\Support\SentenceBag
	 */
	public function setDelimiter($delimiter)
	{
		$this->delimiter = $delimiter;

		return $this;
	}

	/**
	 * Determine if the sentence bag has any sentences.
	 *
	 * @return bool
	 */
	public function isEmpty()
	{
		return ! $this->any();
	}

	/**
	 * Determine if the sentence bag has any sentences.
	 *
	 * @return bool
	 */
	public function any()
	{
		return $this->count() > 0;
	}

	/**
	 * Get the number of sentences in the container.
	 *
	 * @return int
	 */
	public function count()
	{
		return count($this->sentences);
	}

	/**
	 * Join the sentences back in its paragraph form
	 * 
	 * @return string
	 */
	public function getParagraph()	
	{
		$sentences = $this->joinSentences();

		return $this->prefix . $sentences . $this->suffix;
	}

	/**
	 * Join the array of sentences into a string of sentences
	 * 
	 * @return string
	 */
	public function joinSentences()
	{
		$sentences = '';

		foreach($this->sentences as $key => $sentence)
		{
			$sentences .= $sentence['prefix'] . $sentence['sentence'] . $sentence['suffix'];
		}

		return $sentences;
	}
}
