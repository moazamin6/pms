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
 * Service definition for Devprojects (v1).
 *
 * <p>
 * This API enables programmatic access to various capabilities exposed in the
 * Google APIs Console (aka DevConsole), including project, team, and auth
 * management.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="http://goto.google.com/devconsoleapi/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Devprojects extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View and manage your Google Compute Engine resources. */
	const COMPUTE =
		"https://www.googleapis.com/auth/compute";
	
	public $activationLinks;
	public $apiconsumers;
	public $apis;
	public $controlwidgets;
	public $domains;
	public $projects;
	public $toses;
	public $users;
	
	/**
	 * Constructs the internal representation of the Devprojects service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'devprojects/v1/';
		$this->version = 'v1';
		$this->serviceName = 'devprojects';
		
		$this->activationLinks = new Google_Service_Devprojects_Resource_ActivationLinks(
			$this,
			$this->serviceName,
			'activationLinks',
			[
				'methods' => [
					'insert'      => [
						'path'       => 'activationLinks',
						'httpMethod' => 'POST',
						'parameters' => [
							'user'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'validate' => [
						'path'       => 'activationLinks/validate',
						'httpMethod' => 'POST',
						'parameters' => [
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->apiconsumers = new Google_Service_Devprojects_Resource_Apiconsumers(
			$this,
			$this->serviceName,
			'apiconsumers',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'apiconsumers',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'apiIdToken'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'consumerProjectId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'producerProjectId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert' => [
						'path'       => 'apiconsumers',
						'httpMethod' => 'POST',
						'parameters' => [
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'apiconsumers',
						'httpMethod' => 'GET',
						'parameters' => [
							'apiIdToken'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'locale'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'producerProjectId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'apiconsumers',
						'httpMethod' => 'PUT',
						'parameters' => [
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->apis = new Google_Service_Devprojects_Resource_Apis(
			$this,
			$this->serviceName,
			'apis',
			[
				'methods' => [
					'get'             => [
						'path'       => 'apis/{apisId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'apisId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'locale'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'projectId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'         => [
						'path'       => 'apis',
						'httpMethod' => 'GET',
						'parameters' => [
							'locale'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'projectId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listconsumed' => [
						'path'       => 'apis/consumed',
						'httpMethod' => 'GET',
						'parameters' => [
							'consumerProjectId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'locale'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listproduced' => [
						'path'       => 'apis/produced',
						'httpMethod' => 'GET',
						'parameters' => [
							'locale'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'producerProjectId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->controlwidgets = new Google_Service_Devprojects_Resource_Controlwidgets(
			$this,
			$this->serviceName,
			'controlwidgets',
			[
				'methods' => [
					'embed' => [
						'path'       => 'controlwidgets/{projectId}/{widgetId}/embed',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'widgetId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'kv'          => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->domains = new Google_Service_Devprojects_Resource_Domains(
			$this,
			$this->serviceName,
			'domains',
			[
				'methods' => [
					'get'       => [
						'path'       => 'domains/{domainsId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'domainsId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert' => [
						'path'       => 'domains',
						'httpMethod' => 'POST',
						'parameters' => [
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'domains/{domainsId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'domainsId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'domains/{domainsId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'domainsId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects = new Google_Service_Devprojects_Resource_Projects(
			$this,
			$this->serviceName,
			'projects',
			[
				'methods' => [
					'delete'                       => [
						'path'       => 'projects/{projectId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'projectId'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'disableAuthorizationCheck' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'whitelistId'               => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'developerkeytoprojectid'   => [
						'path'       => 'projects/developerkey/{developerKey}/toprojectid',
						'httpMethod' => 'GET',
						'parameters' => [
							'developerKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'whitelistId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                       => [
						'path'       => 'projects/{projectId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'locale'                  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'retrieveCurrentUserRole' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'section'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'whitelistId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'getprojectclientstructure' => [
						'path'       => 'projects/getprojectclientstructure',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'insert'                    => [
						'path'       => 'projects',
						'httpMethod' => 'POST',
						'parameters' => [
							'initialOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'retryRequest' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'section'      => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'whitelistId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'                      => [
						'path'       => 'projects',
						'httpMethod' => 'GET',
						'parameters' => [
							'fillSection'             => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'includeNonActive'        => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'includedShard'           => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requiredApiId'           => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requiredSection'         => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'retrieveCurrentUserRole' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'user'                    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'notifyowners'              => [
						'path'       => 'projects/{projectsId}/notifyowners',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectsId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'                     => [
						'path'       => 'projects/{projectId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'section'     => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'user'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'stringidtonumericid'       => [
						'path'       => 'projects/stringid/{project}/tonumericid',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'undelete'                  => [
						'path'       => 'projects/{projectId}/undelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'                    => [
						'path'       => 'projects/{projectId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'section'     => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'user'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->toses = new Google_Service_Devprojects_Resource_Toses(
			$this,
			$this->serviceName,
			'toses',
			[
				'methods' => [
					'accept'   => [
						'path'       => 'toses/accept',
						'httpMethod' => 'POST',
						'parameters' => [
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'check' => [
						'path'       => 'toses/check',
						'httpMethod' => 'POST',
						'parameters' => [
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'   => [
						'path'       => 'toses/{tosId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'tosId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'  => [
						'path'       => 'toses',
						'httpMethod' => 'GET',
						'parameters' => [
							'apiKey'      => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'projectId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'user'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->users = new Google_Service_Devprojects_Resource_Users(
			$this,
			$this->serviceName,
			'users',
			[
				'methods' => [
					'get'       => [
						'path'       => 'users/{userId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'section'     => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'users/{userId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'section'     => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'whitelistId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'users/{userId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'section'     => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'whitelistId' => [
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
