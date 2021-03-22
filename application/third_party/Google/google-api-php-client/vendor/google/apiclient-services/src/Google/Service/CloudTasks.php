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
 * Service definition for CloudTasks (v2beta2).
 *
 * <p>
 * Manages the execution of large numbers of distributed requests. Cloud Tasks
 * is in Alpha.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/cloud-tasks/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CloudTasks extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";

	public $projects_locations;
	public $projects_locations_queues;
	public $projects_locations_queues_tasks;

	/**
	 * Constructs the internal representation of the CloudTasks service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://cloudtasks.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v2beta2';
		$this->serviceName = 'cloudtasks';

		$this->projects_locations = new Google_Service_CloudTasks_Resource_ProjectsLocations(
			$this,
			$this->serviceName,
			'locations',
			[
				'methods' => [
					'get'     => [
						'path'       => 'v2beta2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v2beta2/{+name}/locations',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
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
					],
				],
			]
		);
		$this->projects_locations_queues = new Google_Service_CloudTasks_Resource_ProjectsLocationsQueues(
			$this,
			$this->serviceName,
			'queues',
			[
				'methods' => [
					'create'                => [
						'path'       => 'v2beta2/{+parent}/queues',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'             => [
						'path'       => 'v2beta2/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => 'v2beta2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => 'v2beta2/{+resource}:getIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => 'v2beta2/{+parent}/queues',
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
						'path'       => 'v2beta2/{+name}',
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
					], 'pause'              => [
						'path'       => 'v2beta2/{+name}:pause',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'purge'              => [
						'path'       => 'v2beta2/{+name}:purge',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resume'             => [
						'path'       => 'v2beta2/{+name}:resume',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setIamPolicy'       => [
						'path'       => 'v2beta2/{+resource}:setIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'testIamPermissions' => [
						'path'       => 'v2beta2/{+resource}:testIamPermissions',
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
		$this->projects_locations_queues_tasks = new Google_Service_CloudTasks_Resource_ProjectsLocationsQueuesTasks(
			$this,
			$this->serviceName,
			'tasks',
			[
				'methods' => [
					'acknowledge'    => [
						'path'       => 'v2beta2/{+name}:acknowledge',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'cancelLease' => [
						'path'       => 'v2beta2/{+name}:cancelLease',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'      => [
						'path'       => 'v2beta2/{+parent}/tasks',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'      => [
						'path'       => 'v2beta2/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'         => [
						'path'       => 'v2beta2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'responseView' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'lease'       => [
						'path'       => 'v2beta2/{+parent}/tasks:lease',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'        => [
						'path'       => 'v2beta2/{+parent}/tasks',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'responseView' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'orderBy'      => [
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
					], 'renewLease'  => [
						'path'       => 'v2beta2/{+name}:renewLease',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'run'         => [
						'path'       => 'v2beta2/{+name}:run',
						'httpMethod' => 'POST',
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
