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
 * Service definition for Dialogflow (v2).
 *
 * <p>
 * An end-to-end development suite for conversational interfaces (e.g.,
 * chatbots, voice-powered apps and devices).</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/dialogflow-enterprise/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Dialogflow extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";

	public $projects;
	public $projects_agent;
	public $projects_agent_entityTypes;
	public $projects_agent_entityTypes_entities;
	public $projects_agent_intents;
	public $projects_agent_sessions;
	public $projects_agent_sessions_contexts;
	public $projects_agent_sessions_entityTypes;
	public $projects_operations;

	/**
	 * Constructs the internal representation of the Dialogflow service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://dialogflow.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v2';
		$this->serviceName = 'dialogflow';

		$this->projects = new Google_Service_Dialogflow_Resource_Projects(
			$this,
			$this->serviceName,
			'projects',
			[
				'methods' => [
					'getAgent' => [
						'path'       => 'v2/{+parent}/agent',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_agent = new Google_Service_Dialogflow_Resource_ProjectsAgent(
			$this,
			$this->serviceName,
			'agent',
			[
				'methods' => [
					'export'     => [
						'path'       => 'v2/{+parent}/agent:export',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'import'  => [
						'path'       => 'v2/{+parent}/agent:import',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'restore' => [
						'path'       => 'v2/{+parent}/agent:restore',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'search'  => [
						'path'       => 'v2/{+parent}/agent:search',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'train'   => [
						'path'       => 'v2/{+parent}/agent:train',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_agent_entityTypes = new Google_Service_Dialogflow_Resource_ProjectsAgentEntityTypes(
			$this,
			$this->serviceName,
			'entityTypes',
			[
				'methods' => [
					'batchDelete'    => [
						'path'       => 'v2/{+parent}/entityTypes:batchDelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'batchUpdate' => [
						'path'       => 'v2/{+parent}/entityTypes:batchUpdate',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'      => [
						'path'       => 'v2/{+parent}/entityTypes',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'         => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => 'v2/{+parent}/entityTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'patch'       => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'updateMask'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_agent_entityTypes_entities = new Google_Service_Dialogflow_Resource_ProjectsAgentEntityTypesEntities(
			$this,
			$this->serviceName,
			'entities',
			[
				'methods' => [
					'batchCreate'    => [
						'path'       => 'v2/{+parent}/entities:batchCreate',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'batchDelete' => [
						'path'       => 'v2/{+parent}/entities:batchDelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'batchUpdate' => [
						'path'       => 'v2/{+parent}/entities:batchUpdate',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_agent_intents = new Google_Service_Dialogflow_Resource_ProjectsAgentIntents(
			$this,
			$this->serviceName,
			'intents',
			[
				'methods' => [
					'batchDelete'    => [
						'path'       => 'v2/{+parent}/intents:batchDelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'batchUpdate' => [
						'path'       => 'v2/{+parent}/intents:batchUpdate',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'      => [
						'path'       => 'v2/{+parent}/intents',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'intentView'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'         => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'intentView'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => 'v2/{+parent}/intents',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'intentView'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'       => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'intentView'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'updateMask'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_agent_sessions = new Google_Service_Dialogflow_Resource_ProjectsAgentSessions(
			$this,
			$this->serviceName,
			'sessions',
			[
				'methods' => [
					'deleteContexts'  => [
						'path'       => 'v2/{+parent}/contexts',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'detectIntent' => [
						'path'       => 'v2/{+session}:detectIntent',
						'httpMethod' => 'POST',
						'parameters' => [
							'session' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_agent_sessions_contexts = new Google_Service_Dialogflow_Resource_ProjectsAgentSessionsContexts(
			$this,
			$this->serviceName,
			'contexts',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/contexts',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v2/{+parent}/contexts',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'patch'  => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_agent_sessions_entityTypes = new Google_Service_Dialogflow_Resource_ProjectsAgentSessionsEntityTypes(
			$this,
			$this->serviceName,
			'entityTypes',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/entityTypes',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v2/{+parent}/entityTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'patch'  => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_operations = new Google_Service_Dialogflow_Resource_ProjectsOperations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'get' => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
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
