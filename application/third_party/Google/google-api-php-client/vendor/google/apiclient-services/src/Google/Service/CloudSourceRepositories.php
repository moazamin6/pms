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
 * Service definition for CloudSourceRepositories (v1).
 *
 * <p>
 * Access source code repositories hosted by Google.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/source-repositories/docs/apis" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CloudSourceRepositories extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** Manage your source code repositories. */
	const SOURCE_FULL_CONTROL =
		"https://www.googleapis.com/auth/source.full_control";
	/** View the contents of your source code repositories. */
	const SOURCE_READ_ONLY =
		"https://www.googleapis.com/auth/source.read_only";
	/** Manage the contents of your source code repositories. */
	const SOURCE_READ_WRITE =
		"https://www.googleapis.com/auth/source.read_write";

	public $projects;
	public $projects_repos;

	/**
	 * Constructs the internal representation of the CloudSourceRepositories
	 * service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://sourcerepo.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'sourcerepo';

		$this->projects = new Google_Service_CloudSourceRepositories_Resource_Projects(
			$this,
			$this->serviceName,
			'projects',
			[
				'methods' => [
					'getConfig'       => [
						'path'       => 'v1/{+name}/config',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updateConfig' => [
						'path'       => 'v1/{+name}/config',
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
		$this->projects_repos = new Google_Service_CloudSourceRepositories_Resource_ProjectsRepos(
			$this,
			$this->serviceName,
			'repos',
			[
				'methods' => [
					'create'                => [
						'path'       => 'v1/{+parent}/repos',
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
						'httpMethod' => 'GET',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => 'v1/{+name}/repos',
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
							'pageToken' => [
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
	}
}
