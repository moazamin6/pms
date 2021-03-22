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
 * Service definition for FirebaseRules (v1).
 *
 * <p>
 * Creates and manages rules that determine when a Firebase Rules-enabled
 * service should permit a request.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://firebase.google.com/docs/storage/security" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_FirebaseRules extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View and administer all your Firebase data and settings. */
	const FIREBASE =
		"https://www.googleapis.com/auth/firebase";
	/** View all your Firebase data and settings. */
	const FIREBASE_READONLY =
		"https://www.googleapis.com/auth/firebase.readonly";

	public $projects;
	public $projects_releases;
	public $projects_rulesets;

	/**
	 * Constructs the internal representation of the FirebaseRules service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://firebaserules.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'firebaserules';

		$this->projects = new Google_Service_FirebaseRules_Resource_Projects(
			$this,
			$this->serviceName,
			'projects',
			[
				'methods' => [
					'test' => [
						'path'       => 'v1/{+name}:test',
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
		$this->projects_releases = new Google_Service_FirebaseRules_Resource_ProjectsReleases(
			$this,
			$this->serviceName,
			'releases',
			[
				'methods' => [
					'create'           => [
						'path'       => 'v1/{+name}/releases',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'        => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'           => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getExecutable' => [
						'path'       => 'v1/{+name}:getExecutable',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executableVersion' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'          => [
						'path'       => 'v1/{+name}/releases',
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
					], 'patch'         => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PATCH',
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
		$this->projects_rulesets = new Google_Service_FirebaseRules_Resource_ProjectsRulesets(
			$this,
			$this->serviceName,
			'rulesets',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/{+name}/rulesets',
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
						'path'       => 'v1/{+name}/rulesets',
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
	}
}
