<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Gmail (v1).
 *
 * <p>
 * Access Gmail mailboxes including sending user email.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/gmail/api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Gmail extends Google_Service
{
	/** Read, send, delete, and manage your email. */
	const MAIL_GOOGLE_COM =
		"https://mail.google.com/";
	/** Manage drafts and send emails. */
	const GMAIL_COMPOSE =
		"https://www.googleapis.com/auth/gmail.compose";
	/** Insert mail into your mailbox. */
	const GMAIL_INSERT =
		"https://www.googleapis.com/auth/gmail.insert";
	/** Manage mailbox labels. */
	const GMAIL_LABELS =
		"https://www.googleapis.com/auth/gmail.labels";
	/** View your email message metadata such as labels and headers, but not the email body. */
	const GMAIL_METADATA =
		"https://www.googleapis.com/auth/gmail.metadata";
	/** View and modify but not delete your email. */
	const GMAIL_MODIFY =
		"https://www.googleapis.com/auth/gmail.modify";
	/** View your email messages and settings. */
	const GMAIL_READONLY =
		"https://www.googleapis.com/auth/gmail.readonly";
	/** Send email on your behalf. */
	const GMAIL_SEND =
		"https://www.googleapis.com/auth/gmail.send";
	/** Manage your basic mail settings. */
	const GMAIL_SETTINGS_BASIC =
		"https://www.googleapis.com/auth/gmail.settings.basic";
	/** Manage your sensitive mail settings, including who can manage your mail. */
	const GMAIL_SETTINGS_SHARING =
		"https://www.googleapis.com/auth/gmail.settings.sharing";

	public $users;
	public $users_drafts;
	public $users_history;
	public $users_labels;
	public $users_messages;
	public $users_messages_attachments;
	public $users_settings;
	public $users_settings_filters;
	public $users_settings_forwardingAddresses;
	public $users_settings_sendAs;
	public $users_settings_sendAs_smimeInfo;
	public $users_threads;

	/**
	 * Constructs the internal representation of the Gmail service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'gmail/v1/users/';
		$this->version = 'v1';
		$this->serviceName = 'gmail';

		$this->users = new Google_Service_Gmail_Resource_Users(
			$this,
			$this->serviceName,
			'users',
			[
				'methods' => [
					'getProfile' => [
						'path'       => '{userId}/profile',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'stop'    => [
						'path'       => '{userId}/stop',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'watch'   => [
						'path'       => '{userId}/watch',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_drafts = new Google_Service_Gmail_Resource_UsersDrafts(
			$this,
			$this->serviceName,
			'drafts',
			[
				'methods' => [
					'create'    => [
						'path'       => '{userId}/drafts',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{userId}/drafts/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{userId}/drafts/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'format' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{userId}/drafts',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'includeSpamTrash' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'maxResults'       => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'q'                => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'send'   => [
						'path'       => '{userId}/drafts/send',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => '{userId}/drafts/{id}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_history = new Google_Service_Gmail_Resource_UsersHistory(
			$this,
			$this->serviceName,
			'history',
			[
				'methods' => [
					'list' => [
						'path'       => '{userId}/history',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyTypes'   => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'labelId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startHistoryId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->users_labels = new Google_Service_Gmail_Resource_UsersLabels(
			$this,
			$this->serviceName,
			'labels',
			[
				'methods' => [
					'create'    => [
						'path'       => '{userId}/labels',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{userId}/labels/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{userId}/labels/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{userId}/labels',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => '{userId}/labels/{id}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => '{userId}/labels/{id}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_messages = new Google_Service_Gmail_Resource_UsersMessages(
			$this,
			$this->serviceName,
			'messages',
			[
				'methods' => [
					'batchDelete'    => [
						'path'       => '{userId}/messages/batchDelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'batchModify' => [
						'path'       => '{userId}/messages/batchModify',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'      => [
						'path'       => '{userId}/messages/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'         => [
						'path'       => '{userId}/messages/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'format'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'metadataHeaders' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'import'      => [
						'path'       => '{userId}/messages/import',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deleted'            => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'internalDateSource' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'neverMarkSpam'      => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'processForCalendar' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'insert'      => [
						'path'       => '{userId}/messages',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deleted'            => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'internalDateSource' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => '{userId}/messages',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'includeSpamTrash' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'labelIds'         => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'maxResults'       => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'q'                => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'modify'      => [
						'path'       => '{userId}/messages/{id}/modify',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'send'        => [
						'path'       => '{userId}/messages/send',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'trash'       => [
						'path'       => '{userId}/messages/{id}/trash',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'untrash'     => [
						'path'       => '{userId}/messages/{id}/untrash',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_messages_attachments = new Google_Service_Gmail_Resource_UsersMessagesAttachments(
			$this,
			$this->serviceName,
			'attachments',
			[
				'methods' => [
					'get' => [
						'path'       => '{userId}/messages/{messageId}/attachments/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'messageId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_settings = new Google_Service_Gmail_Resource_UsersSettings(
			$this,
			$this->serviceName,
			'settings',
			[
				'methods' => [
					'getAutoForwarding'       => [
						'path'       => '{userId}/settings/autoForwarding',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getImap'              => [
						'path'       => '{userId}/settings/imap',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getPop'               => [
						'path'       => '{userId}/settings/pop',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getVacation'          => [
						'path'       => '{userId}/settings/vacation',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updateAutoForwarding' => [
						'path'       => '{userId}/settings/autoForwarding',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updateImap'           => [
						'path'       => '{userId}/settings/imap',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updatePop'            => [
						'path'       => '{userId}/settings/pop',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updateVacation'       => [
						'path'       => '{userId}/settings/vacation',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_settings_filters = new Google_Service_Gmail_Resource_UsersSettingsFilters(
			$this,
			$this->serviceName,
			'filters',
			[
				'methods' => [
					'create'    => [
						'path'       => '{userId}/settings/filters',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{userId}/settings/filters/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{userId}/settings/filters/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{userId}/settings/filters',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_settings_forwardingAddresses = new Google_Service_Gmail_Resource_UsersSettingsForwardingAddresses(
			$this,
			$this->serviceName,
			'forwardingAddresses',
			[
				'methods' => [
					'create'    => [
						'path'       => '{userId}/settings/forwardingAddresses',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{userId}/settings/forwardingAddresses/{forwardingEmail}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'forwardingEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{userId}/settings/forwardingAddresses/{forwardingEmail}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'forwardingEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{userId}/settings/forwardingAddresses',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_settings_sendAs = new Google_Service_Gmail_Resource_UsersSettingsSendAs(
			$this,
			$this->serviceName,
			'sendAs',
			[
				'methods' => [
					'create'    => [
						'path'       => '{userId}/settings/sendAs',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{userId}/settings/sendAs/{sendAsEmail}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sendAsEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{userId}/settings/sendAs/{sendAsEmail}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sendAsEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{userId}/settings/sendAs',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => '{userId}/settings/sendAs/{sendAsEmail}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sendAsEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => '{userId}/settings/sendAs/{sendAsEmail}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sendAsEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'verify' => [
						'path'       => '{userId}/settings/sendAs/{sendAsEmail}/verify',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sendAsEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_settings_sendAs_smimeInfo = new Google_Service_Gmail_Resource_UsersSettingsSendAsSmimeInfo(
			$this,
			$this->serviceName,
			'smimeInfo',
			[
				'methods' => [
					'delete'        => [
						'path'       => '{userId}/settings/sendAs/{sendAsEmail}/smimeInfo/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sendAsEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'        => [
						'path'       => '{userId}/settings/sendAs/{sendAsEmail}/smimeInfo/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sendAsEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'     => [
						'path'       => '{userId}/settings/sendAs/{sendAsEmail}/smimeInfo',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sendAsEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'       => [
						'path'       => '{userId}/settings/sendAs/{sendAsEmail}/smimeInfo',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sendAsEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setDefault' => [
						'path'       => '{userId}/settings/sendAs/{sendAsEmail}/smimeInfo/{id}/setDefault',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sendAsEmail' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_threads = new Google_Service_Gmail_Resource_UsersThreads(
			$this,
			$this->serviceName,
			'threads',
			[
				'methods' => [
					'delete'     => [
						'path'       => '{userId}/threads/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'     => [
						'path'       => '{userId}/threads/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'format'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'metadataHeaders' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'list'    => [
						'path'       => '{userId}/threads',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'includeSpamTrash' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'labelIds'         => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'maxResults'       => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'q'                => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'modify'  => [
						'path'       => '{userId}/threads/{id}/modify',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'trash'   => [
						'path'       => '{userId}/threads/{id}/trash',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'untrash' => [
						'path'       => '{userId}/threads/{id}/untrash',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
	}
}
