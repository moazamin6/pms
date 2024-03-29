<?php
/**
 * This file is part of the ZBateson\MailMimeParser project.
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */

namespace ZBateson\MailMimeParser\Header\Part;

use ZBateson\MbWrapper\MbWrapper;

/**
 * Abstract base class representing a single part of a parsed header.
 *
 * @author Zaahid Bateson
 */
abstract class HeaderPart
{
	/**
	 * @var string the value of the part
	 */
	protected $value;
	
	/**
	 * @var MbWrapper $charsetConverter the charset converter used for
	 *      converting strings in HeaderPart::convertEncoding
	 */
	protected $charsetConverter;
	
	/**
	 * Sets up dependencies.
	 *
	 * @param MbWrapper $charsetConverter
	 */
	public function __construct(MbWrapper $charsetConverter)
	{
		$this->charsetConverter = $charsetConverter;
	}
	
	/**
	 * Returns the part's value.
	 *
	 * @return string the value of the part
	 */
	public function getValue()
	{
		return $this->value;
	}
	
	/**
	 * Returns the value of the part (which is a string).
	 *
	 * @return string the value
	 */
	public function __toString()
	{
		return $this->value;
	}
	
	/**
	 * Returns true if spaces before this part should be ignored.  True is only
	 * returned for MimeLiterals if the part begins with a mime-encoded string,
	 * Tokens if the Token's value is a single space, and for CommentParts.
	 *
	 * @return bool
	 */
	public function ignoreSpacesBefore()
	{
		return false;
	}
	
	/**
	 * Returns true if spaces after this part should be ignored.  True is only
	 * returned for MimeLiterals if the part ends with a mime-encoded string
	 * Tokens if the Token's value is a single space, and for CommentParts.
	 *
	 * @return bool
	 */
	public function ignoreSpacesAfter()
	{
		return false;
	}
	
	/**
	 * Ensures the encoding of the passed string is set to UTF-8.
	 *
	 * The method does nothing if the passed $from charset is UTF-8 already, or
	 * if $force is set to false and mb_check_encoding for $str returns true
	 * for 'UTF-8'.
	 *
	 * @param string $str
	 * @param string $from
	 * @param boolean $force
	 * @return string utf-8 string
	 */
	protected function convertEncoding($str, $from = 'ISO-8859-1', $force = false)
	{
		if($from !== 'UTF-8')
		{
			// mime header part decoding will force it.  This is necessary for
			// UTF-7 because mb_check_encoding will return true
			if($force || !($this->charsetConverter->checkEncoding($str, 'UTF-8')))
			{
				return $this->charsetConverter->convert($str, $from, 'UTF-8');
			}
		}
		return $str;
	}
}
