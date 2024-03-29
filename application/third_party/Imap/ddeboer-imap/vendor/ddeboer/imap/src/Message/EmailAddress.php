<?php

declare(strict_types=1);

namespace Ddeboer\Imap\Message;

/**
 * An e-mail address.
 */
final class EmailAddress
{
	/**
	 * @var string
	 */
	private $mailbox;

	/**
	 * @var null|string
	 */
	private $hostname;

	/**
	 * @var null|string
	 */
	private $name;

	/**
	 * @var null|string
	 */
	private $address;

	/**
	 * @param string $mailbox
	 * @param null|string $hostname
	 * @param null|string $name
	 */
	public function __construct(string $mailbox, string $hostname = NULL, string $name = NULL)
	{
		$this->mailbox = $mailbox;
		$this->hostname = $hostname;
		$this->name = $name;

		if(NULL !== $hostname)
		{
			$this->address = $mailbox . '@' . $hostname;
		}
	}

	/**
	 * @return null|string
	 */
	public function getAddress()
	{
		return $this->address;
	}

	/**
	 * Returns address with person name.
	 *
	 * @return string
	 */
	public function getFullAddress(): string
	{
		$address = \sprintf('%s@%s', $this->mailbox, $this->hostname);
		if(NULL !== $this->name)
		{
			$address = \sprintf('"%s" <%s>', \addcslashes($this->name, '"'), $address);
		}

		return $address;
	}

	/**
	 * @return string
	 */
	public function getMailbox(): string
	{
		return $this->mailbox;
	}

	/**
	 * @return null|string
	 */
	public function getHostname()
	{
		return $this->hostname;
	}

	/**
	 * @return null|string
	 */
	public function getName()
	{
		return $this->name;
	}
}
