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
 * Service definition for CloudBuild (v1).
 *
 * <p>
 * Builds container images in the cloud.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/container-builder/docs/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CloudBuild extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";

	public $operations;
	public $projects_builds;
	public $projects_triggers;

	/**
	 * Constructs the internal representation of the CloudBuild service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://cloudbuild.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'cloudbuild';

		$this->operations = new Google_Service_CloudBuild_Resource_Operations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'cancel'  => [
						'path'       => 'v1/{+name}:cancel',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
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
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
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
					],
				],
			]
		);
		$this->projects_builds = new Google_Service_CloudBuild_Resource_ProjectsBuilds(
			$this,
			$this->serviceName,
			'builds',
			[
				'methods' => [
					'cancel'    => [
						'path'       => 'v1/projects/{projectId}/builds/{id}:cancel',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
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
					], 'create' => [
						'path'       => 'v1/projects/{projectId}/builds',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/projects/{projectId}/builds/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
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
					], 'list'   => [
						'path'       => 'v1/projects/{projectId}/builds',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
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
					], 'retry'  => [
						'path'       => 'v1/projects/{projectId}/builds/{id}:retry',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
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
		$this->projects_triggers = new Google_Service_CloudBuild_Resource_ProjectsTriggers(
			$this,
			$this->serviceName,
			'triggers',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/projects/{projectId}/triggers',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/projects/{projectId}/triggers/{triggerId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'triggerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/projects/{projectId}/triggers/{triggerId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'triggerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/projects/{projectId}/triggers',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'v1/projects/{projectId}/triggers/{triggerId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'triggerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'run'    => [
						'path'       => 'v1/projects/{projectId}/triggers/{triggerId}:run',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'triggerId' => [
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
