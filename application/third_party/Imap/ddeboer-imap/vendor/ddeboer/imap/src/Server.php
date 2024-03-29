<?php

declare(strict_types=1);

namespace Ddeboer\Imap;

use Ddeboer\Imap\Exception\AuthenticationFailedException;

/**
 * An IMAP server.
 */
final class Server implements ServerInterface
{
	/**
	 * @var string Internet domain name or bracketed IP address of server
	 */
	private $hostname;

	/**
	 * @var string TCP port number
	 */
	private $port;

	/**
	 * @var string Optional flags
	 */
	private $flags;

	/**
	 * @var array
	 */
	private $parameters;

	/**
	 * @var int Connection options
	 */
	private $options;

	/**
	 * @var int Retries number
	 */
	private $retries;

	/**
	 * Constructor.
	 *
	 * @param string $hostname Internet domain name or bracketed IP address
	 *                           of server
	 * @param string $port TCP port number
	 * @param string $flags Optional flags
	 * @param array $parameters Connection parameters
	 * @param int $options Connection options
	 * @param int $retries Retries number
	 */
	public function __construct(
		string $hostname,
		string $port = '993',
		string $flags = '/imap/ssl/validate-cert',
		array $parameters = [],
		int $options = 0,
		int $retries = 1
	)
	{
		if(!\function_exists('imap_open'))
		{
			throw new \RuntimeException('IMAP extension must be enabled');
		}

		$this->hostname = $hostname;
		$this->port = $port;
		$this->flags = $flags ? '/' . \ltrim($flags, '/') : '';
		$this->parameters = $parameters;
		$this->options = $options;
		$this->retries = $retries;
	}

	/**
	 * Authenticate connection.
	 *
	 * @param string $username Username
	 * @param string $password Password
	 *
	 * @return ConnectionInterface
	 * @throws AuthenticationFailedException
	 *
	 */
	public function authenticate(string $username, string $password): ConnectionInterface
	{
		$errorMessage = NULL;
		$errorNumber = 0;
		\set_error_handler(function($nr, $message) use (&$errorMessage, &$errorNumber)
		{
			$errorMessage = $message;
			$errorNumber = $nr;
		});

		$resource = \imap_open(
			$this->getServerString(),
			$username,
			$password,
			$this->options,
			$this->retries,
			$this->parameters
		);

		\restore_error_handler();

		if(false === $resource || NULL !== $errorMessage)
		{
			throw new AuthenticationFailedException(\sprintf(
				'Authentication failed for user "%s"%s',
				$username,
				NULL !== $errorMessage ? ': ' . $errorMessage : ''
			), $errorNumber);
		}

		$check = \imap_check($resource);
		$mailbox = $check->Mailbox;
		$connection = \substr($mailbox, 0, \strpos($mailbox, '}') + 1);

		// These are necessary to get rid of PHP throwing IMAP errors
		\imap_errors();
		\imap_alerts();

		return new Connection(new ImapResource($resource), $connection);
	}

	/**
	 * Glues hostname, port and flags and returns result.
	 *
	 * @return string
	 */
	private function getServerString(): string
	{
		return \sprintf(
			'{%s%s%s}',
			$this->hostname,
			'' !== $this->port ? ':' . $this->port : '',
			$this->flags
		);
	}
}
