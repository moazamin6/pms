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
 * Service definition for CloudResourceManager (v2).
 *
 * <p>
 * The Google Cloud Resource Manager API provides methods for creating, reading,
 * and updating project metadata.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/resource-manager" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CloudResourceManager extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";

	public $folders;

	/**
	 * Constructs the internal representation of the CloudResourceManager service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://cloudresourcemanager.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v2';
		$this->serviceName = 'cloudresourcemanager';

		$this->folders = new Google_Service_CloudResourceManager_Resource_Folders(
			$this,
			$this->serviceName,
			'folders',
			[
				'methods' => [
					'create'                => [
						'path'       => 'v2/folders',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'             => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => 'v2/{+resource}:getIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => 'v2/folders',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageSize'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'parent'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'showDeleted' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'move'               => [
						'path'       => 'v2/{+name}:move',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'              => [
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
					], 'search'             => [
						'path'       => 'v2/folders:search',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'setIamPolicy'       => [
						'path'       => 'v2/{+resource}:setIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'testIamPermissions' => [
						'path'       => 'v2/{+resource}:testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'undelete'           => [
						'path'       => 'v2/{+name}:undelete',
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
