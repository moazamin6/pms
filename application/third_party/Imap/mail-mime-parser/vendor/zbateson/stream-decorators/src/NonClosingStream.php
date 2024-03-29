<?php
/**
 * This file is part of the ZBateson\StreamDecorators project.
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 */

namespace ZBateson\StreamDecorators;

use Psr\Http\Message\StreamInterface;
use GuzzleHttp\Psr7\StreamDecoratorTrait;

/**
 * Doesn't close the underlying stream when 'close' is called on it.  Instead,
 * calling close simply removes any reference to the underlying stream.  Note
 * that GuzzleHttp\Psr7\Stream calls close in __destruct, so a reference to the
 * Stream needs to be kept.  For example:
 *
 * ```
 * $f = fopen('php://temp', 'r+');
 * $test = new NonClosingStream(Psr7\stream_for('test'));
 * // work
 * $test->close();
 * rewind($f);      // error, $f is a closed resource
 * ```
 *
 * Instead, this would work:
 *
 * ```
 * $stream = Psr7\stream_for(fopen('php://temp', 'r+'));
 * $test = new NonClosingStream($stream);
 * // work
 * $test->close();
 * $stream->rewind();  // works
 * ```
 *
 * @author Zaahid Bateson
 */
class NonClosingStream implements StreamInterface
{
	use StreamDecoratorTrait;

	/**
	 * Overridden to detach the underlying stream without closing it.
	 */
	public function close()
	{
		$this->stream = NULL;
	}

	/**
	 * Overridden to detach the underlying stream without closing it.
	 */
	public function detach()
	{
		$this->stream = NULL;
	}
}
