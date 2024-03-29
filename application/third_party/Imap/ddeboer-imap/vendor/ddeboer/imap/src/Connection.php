<?php

declare(strict_types=1);

namespace Ddeboer\Imap;

use Ddeboer\Imap\Exception\CreateMailboxException;
use Ddeboer\Imap\Exception\DeleteMailboxException;
use Ddeboer\Imap\Exception\ImapGetmailboxesException;
use Ddeboer\Imap\Exception\InvalidResourceException;
use Ddeboer\Imap\Exception\MailboxDoesNotExistException;

/**
 * A connection to an IMAP server that is authenticated for a user.
 */
final class Connection implements ConnectionInterface
{
	/**
	 * @var ImapResourceInterface
	 */
	private $resource;

	/**
	 * @var string
	 */
	private $server;

	/**
	 * @var null|array
	 */
	private $mailboxes;

	/**
	 * @var null|array
	 */
	private $mailboxNames;

	/**
	 * Constructor.
	 *
	 * @param ImapResourceInterface $resource
	 * @param string $server
	 *
	 * @throws \InvalidArgumentException
	 */
	public function __construct(ImapResourceInterface $resource, string $server)
	{
		$this->resource = $resource;
		$this->server = $server;
	}

	/**
	 * Get IMAP resource.
	 *
	 * @return ImapResourceInterface
	 */
	public function getResource(): ImapResourceInterface
	{
		return $this->resource;
	}

	/**
	 * Delete all messages marked for deletion.
	 *
	 * @return bool
	 */
	public function expunge(): bool
	{
		return \imap_expunge($this->resource->getStream());
	}

	/**
	 * Close connection.
	 *
	 * @param int $flag
	 *
	 * @return bool
	 */
	public function close(int $flag = 0): bool
	{
		return \imap_close($this->resource->getStream(), $flag);
	}

	/**
	 * Get a list of mailboxes (also known as folders).
	 *
	 * @return MailboxInterface[]
	 */
	public function getMailboxes(): array
	{
		$this->initMailboxNames();

		if(NULL === $this->mailboxes)
		{
			$this->mailboxes = [];
			foreach($this->mailboxNames as $mailboxName => $mailboxInfo)
			{
				$this->mailboxes[(string)$mailboxName] = $this->getMailbox((string)$mailboxName);
			}
		}

		return $this->mailboxes;
	}

	/**
	 * Check that a mailbox with the given name exists.
	 *
	 * @param string $name Mailbox name
	 *
	 * @return bool
	 */
	public function hasMailbox(string $name): bool
	{
		$this->initMailboxNames();

		return isset($this->mailboxNames[$name]);
	}

	/**
	 * Get a mailbox by its name.
	 *
	 * @param string $name Mailbox name
	 *
	 * @return MailboxInterface
	 * @throws MailboxDoesNotExistException If mailbox does not exist
	 *
	 */
	public function getMailbox(string $name): MailboxInterface
	{
		if(false === $this->hasMailbox($name))
		{
			throw new MailboxDoesNotExistException(\sprintf('Mailbox name "%s" does not exist', $name));
		}

		return new Mailbox($this->resource, $name, $this->mailboxNames[$name]);
	}

	/**
	 * Count number of messages not in any mailbox.
	 *
	 * @return int
	 */
	public function count()
	{
		return \imap_num_msg($this->resource->getStream());
	}

	/**
	 * Check if the connection is still active.
	 *
	 * @return bool
	 * @throws InvalidResourceException If connection was closed
	 *
	 */
	public function ping(): bool
	{
		return \imap_ping($this->resource->getStream());
	}

	/**
	 * Create mailbox.
	 *
	 * @param string $name
	 *
	 * @return MailboxInterface
	 * @throws CreateMailboxException
	 *
	 */
	public function createMailbox(string $name): MailboxInterface
	{
		if(false === \imap_createmailbox($this->resource->getStream(), $this->server . \mb_convert_encoding($name, 'UTF7-IMAP', 'UTF-8')))
		{
			throw new CreateMailboxException(\sprintf('Can not create "%s" mailbox at "%s"', $name, $this->server));
		}

		$this->mailboxNames = $this->mailboxes = NULL;
		$this->resource->clearLastMailboxUsedCache();

		return $this->getMailbox($name);
	}

	/**
	 * Create mailbox.
	 *
	 * @param MailboxInterface $mailbox
	 *
	 * @throws DeleteMailboxException
	 */
	public function deleteMailbox(MailboxInterface $mailbox): void
	{
		if(false === \imap_deletemailbox($this->resource->getStream(), $mailbox->getFullEncodedName()))
		{
			throw new DeleteMailboxException(\sprintf('Mailbox "%s" could not be deleted', $mailbox->getName()));
		}

		$this->mailboxes = $this->mailboxNames = NULL;
		$this->resource->clearLastMailboxUsedCache();
	}

	/**
	 * Get mailbox names.
	 */
	private function initMailboxNames(): void
	{
		if(NULL !== $this->mailboxNames)
		{
			return;
		}

		$this->mailboxNames = [];
		$mailboxesInfo = \imap_getmailboxes($this->resource->getStream(), $this->server, '*');
		if(!\is_array($mailboxesInfo))
		{
			throw new ImapGetmailboxesException('imap_getmailboxes failed');
		}

		foreach($mailboxesInfo as $mailboxInfo)
		{
			$name = \mb_convert_encoding(\str_replace($this->server, '', $mailboxInfo->name), 'UTF-8', 'UTF7-IMAP');
			$this->mailboxNames[$name] = $mailboxInfo;
		}
	}
}
