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
 * Service definition for Cih (v3).
 *
 * <p>
 * Retrieving customer interactions API.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://sites.google.com/a/google.com/cih/engineering/eng-documents" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Cih extends Google_Service
{


	public $associatedEmails;
	public $userInteractions;

	/**
	 * Constructs the internal representation of the Cih service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'cih/v3/';
		$this->version = 'v3';
		$this->serviceName = 'cih';

		$this->associatedEmails = new Google_Service_Cih_Resource_AssociatedEmails(
			$this,
			$this->serviceName,
			'associatedEmails',
			[
				'methods' => [
					'create'    => [
						'path'       => 'associatedEmails/insert/{customerId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'associatedEmails/delete/{customerId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customerId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'emailAddress' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'operator'     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->userInteractions = new Google_Service_Cih_Resource_UserInteractions(
			$this,
			$this->serviceName,
			'userInteractions',
			[
				'methods' => [
					'get'       => [
						'path'       => 'userInteractions/{entityType}/{entityId}/{timestamp}/{interactionType}',
						'httpMethod' => 'GET',
						'parameters' => [
							'entityType'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'entityId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'timestamp'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'interactionType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'userInteractions/insert',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'   => [
						'path'       => 'userInteractions',
						'httpMethod' => 'GET',
						'parameters' => [
							'entity'                         => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
								'required' => true,
							],
							'entityFilter'                   => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'excludePassedInteractionOrigin' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'excludePassedInteractionType'   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'includeRelatedInteractions'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'interactionOrigin'              => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'interactionType'                => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'lookup_participant_info'        => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'maxInteractionsPerPage'         => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'maxResults'                     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'metaTypeFilter'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'minMainEntityInteractions'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'                      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'phoneMatcher'                   => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'timestampEnd'                   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'timestampStart'                 => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
	}
}
