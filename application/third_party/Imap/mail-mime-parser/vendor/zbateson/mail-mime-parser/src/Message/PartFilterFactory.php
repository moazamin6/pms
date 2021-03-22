<?php
/**
 * This file is part of the ZBateson\MailMimeParser project.
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */

namespace ZBateson\MailMimeParser\Message;

/**
 * Injectable factory class used by MimePart to construct PartFilter instances
 * in a testable way.
 *
 * Users are expected to use the static PartFilter methods directly -- this
 * class simply encapsulates them in an object:
 *  o PartFilter::fromContentType
 *  o PartFilter::fromInlineContentType
 *  o PartFilter::fromDisposition
 *
 * @see PartFilter
 * @author Zaahid Bateson
 */
class PartFilterFactory
{
	/**
	 * Creates a filter for the passed mime content-type.
	 *
	 * This method just calls PartFilter::fromContentType.
	 *
	 * @param string $mimeType
	 * @return PartFilter
	 * @see PartFilter::fromContentType
	 */
	public function newFilterFromContentType($mimeType)
	{
		return PartFilter::fromContentType($mimeType);
	}

	/**
	 * Creates an 'inline' filter for the passed mime content-type.
	 *
	 * This method just calls PartFilter::fromInlineContentType.
	 *
	 * @param string $mimeType
	 * @return PartFilter
	 * @see PartFilter::fromInlineContentType
	 */
	public function newFilterFromInlineContentType($mimeType)
	{
		return PartFilter::fromInlineContentType($mimeType);
	}

	/**
	 * Creates a filter for the passed disposition and optional multipart
	 * filter.
	 *
	 * This method just calls PartFilter::newFilterFromDisposition.
	 *
	 * @param string $disposition
	 * @param int $multipart one of PartFilter::FILTER_OFF,
	 *      PartFilter::FILTER_INCLUDE or PartFilter::FILTER_EXCLUDE
	 * @return PartFilter
	 * @see PartFilter::fromDisposition
	 */
	public function newFilterFromDisposition($disposition, $multipart = PartFilter::FILTER_OFF)
	{
		return PartFilter::fromDisposition($disposition, $multipart);
	}

	/**
	 * Constructs a PartFilter from the passed array of options and returns it.
	 *
	 * @param array $init
	 * @return PartFilter
	 * @see PartFilter::__construct
	 */
	public function newFilterFromArray(array $init)
	{
		return new PartFilter($init);
	}
}
