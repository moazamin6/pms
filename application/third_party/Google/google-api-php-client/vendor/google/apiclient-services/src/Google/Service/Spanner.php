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
 * Service definition for Spanner (v1).
 *
 * <p>
 * Cloud Spanner is a managed, mission-critical, globally consistent and
 * scalable relational database service.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/spanner/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Spanner extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** Administer your Spanner databases. */
	const SPANNER_ADMIN =
		"https://www.googleapis.com/auth/spanner.admin";
	/** View and manage the contents of your Spanner databases. */
	const SPANNER_DATA =
		"https://www.googleapis.com/auth/spanner.data";

	public $projects_instanceConfigs;
	public $projects_instances;
	public $projects_instances_databases;
	public $projects_instances_databases_operations;
	public $projects_instances_databases_sessions;
	public $projects_instances_operations;

	/**
	 * Constructs the internal representation of the Spanner service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://spanner.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'spanner';

		$this->projects_instanceConfigs = new Google_Service_Spanner_Resource_ProjectsInstanceConfigs(
			$this,
			$this->serviceName,
			'instanceConfigs',
			[
				'methods' => [
					'get'     => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v1/{+parent}/instanceConfigs',
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
					],
				],
			]
		);
		$this->projects_instances = new Google_Service_Spanner_Resource_ProjectsInstances(
			$this,
			$this->serviceName,
			'instances',
			[
				'methods' => [
					'create'                => [
						'path'       => 'v1/{+parent}/instances',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'             => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => 'v1/{+resource}:getIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => 'v1/{+parent}/instances',
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
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'              => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setIamPolicy'       => [
						'path'       => 'v1/{+resource}:setIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'testIamPermissions' => [
						'path'       => 'v1/{+resource}:testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_instances_databases = new Google_Service_Spanner_Resource_ProjectsInstancesDatabases(
			$this,
			$this->serviceName,
			'databases',
			[
				'methods' => [
					'create'                => [
						'path'       => 'v1/{+parent}/databases',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'dropDatabase'       => [
						'path'       => 'v1/{+database}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getDdl'             => [
						'path'       => 'v1/{+database}/ddl',
						'httpMethod' => 'GET',
						'parameters' => [
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => 'v1/{+resource}:getIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => 'v1/{+parent}/databases',
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
					], 'setIamPolicy'       => [
						'path'       => 'v1/{+resource}:setIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'testIamPermissions' => [
						'path'       => 'v1/{+resource}:testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updateDdl'          => [
						'path'       => 'v1/{+database}/ddl',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_instances_databases_operations = new Google_Service_Spanner_Resource_ProjectsInstancesDatabasesOperations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'cancel'    => [
						'path'       => 'v1/{+name}:cancel',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
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
					],
				],
			]
		);
		$this->projects_instances_databases_sessions = new Google_Service_Spanner_Resource_ProjectsInstancesDatabasesSessions(
			$this,
			$this->serviceName,
			'sessions',
			[
				'methods' => [
					'beginTransaction'       => [
						'path'       => 'v1/{+session}:beginTransaction',
						'httpMethod' => 'POST',
						'parameters' => [
							'session' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'commit'              => [
						'path'       => 'v1/{+session}:commit',
						'httpMethod' => 'POST',
						'parameters' => [
							'session' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'              => [
						'path'       => 'v1/{+database}/sessions',
						'httpMethod' => 'POST',
						'parameters' => [
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'              => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'executeSql'          => [
						'path'       => 'v1/{+session}:executeSql',
						'httpMethod' => 'POST',
						'parameters' => [
							'session' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'executeStreamingSql' => [
						'path'       => 'v1/{+session}:executeStreamingSql',
						'httpMethod' => 'POST',
						'parameters' => [
							'session' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                 => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                => [
						'path'       => 'v1/{+database}/sessions',
						'httpMethod' => 'GET',
						'parameters' => [
							'database'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'partitionQuery'      => [
						'path'       => 'v1/{+session}:partitionQuery',
						'httpMethod' => 'POST',
						'parameters' => [
							'session' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'partitionRead'       => [
						'path'       => 'v1/{+session}:partitionRead',
						'httpMethod' => 'POST',
						'parameters' => [
							'session' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'read'                => [
						'path'       => 'v1/{+session}:read',
						'httpMethod' => 'POST',
						'parameters' => [
							'session' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'rollback'            => [
						'path'       => 'v1/{+session}:rollback',
						'httpMethod' => 'POST',
						'parameters' => [
							'session' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'streamingRead'       => [
						'path'       => 'v1/{+session}:streamingRead',
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
		$this->projects_instances_operations = new Google_Service_Spanner_Resource_ProjectsInstancesOperations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'cancel'    => [
						'path'       => 'v1/{+name}:cancel',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
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
					],
				],
			]
		);
	}
}
