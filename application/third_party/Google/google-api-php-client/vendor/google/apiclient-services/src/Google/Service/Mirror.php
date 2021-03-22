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
 * Service definition for Mirror (v1).
 *
 * <p>
 * Interacts with Glass users via the timeline.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/glass" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Mirror extends Google_Service
{
	/** View your location. */
	const GLASS_LOCATION =
		"https://www.googleapis.com/auth/glass.location";
	/** View and manage your Glass timeline. */
	const GLASS_TIMELINE =
		"https://www.googleapis.com/auth/glass.timeline";

	public $accounts;
	public $contacts;
	public $locations;
	public $settings;
	public $subscriptions;
	public $timeline;
	public $timeline_attachments;

	/**
	 * Constructs the internal representation of the Mirror service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'mirror/v1/';
		$this->version = 'v1';
		$this->serviceName = 'mirror';

		$this->accounts = new Google_Service_Mirror_Resource_Accounts(
			$this,
			$this->serviceName,
			'accounts',
			[
				'methods' => [
					'insert' => [
						'path'       => 'accounts/{userToken}/{accountType}/{accountName}',
						'httpMethod' => 'POST',
						'parameters' => [
							'userToken'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->contacts = new Google_Service_Mirror_Resource_Contacts(
			$this,
			$this->serviceName,
			'contacts',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'contacts/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'contacts/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'contacts',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'   => [
						'path'       => 'contacts',
						'httpMethod' => 'GET',
						'parameters' => [],
					], 'patch'  => [
						'path'       => 'contacts/{id}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'contacts/{id}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->locations = new Google_Service_Mirror_Resource_Locations(
			$this,
			$this->serviceName,
			'locations',
			[
				'methods' => [
					'get'     => [
						'path'       => 'locations/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'locations',
						'httpMethod' => 'GET',
						'parameters' => [],
					],
				],
			]
		);
		$this->settings = new Google_Service_Mirror_Resource_Settings(
			$this,
			$this->serviceName,
			'settings',
			[
				'methods' => [
					'get' => [
						'path'       => 'settings/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->subscriptions = new Google_Service_Mirror_Resource_Subscriptions(
			$this,
			$this->serviceName,
			'subscriptions',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'subscriptions/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'subscriptions',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'   => [
						'path'       => 'subscriptions',
						'httpMethod' => 'GET',
						'parameters' => [],
					], 'update' => [
						'path'       => 'subscriptions/{id}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->timeline = new Google_Service_Mirror_Resource_Timeline(
			$this,
			$this->serviceName,
			'timeline',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'timeline/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'timeline/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'timeline',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'   => [
						'path'       => 'timeline',
						'httpMethod' => 'GET',
						'parameters' => [
							'bundleId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'includeDeleted' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'maxResults'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pinnedOnly'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'sourceItemId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'timeline/{id}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'timeline/{id}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->timeline_attachments = new Google_Service_Mirror_Resource_TimelineAttachments(
			$this,
			$this->serviceName,
			'attachments',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'timeline/{itemId}/attachments/{attachmentId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'itemId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'attachmentId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'timeline/{itemId}/attachments/{attachmentId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'itemId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'attachmentId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'timeline/{itemId}/attachments',
						'httpMethod' => 'POST',
						'parameters' => [
							'itemId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'timeline/{itemId}/attachments',
						'httpMethod' => 'GET',
						'parameters' => [
							'itemId' => [
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
