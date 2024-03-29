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
 * Service definition for CloudFunctions (v1).
 *
 * <p>
 * Manages lightweight user-provided functions executed in response to events.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/functions" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CloudFunctions extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";

	public $operations;
	public $projects_locations;
	public $projects_locations_functions;

	/**
	 * Constructs the internal representation of the CloudFunctions service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://cloudfunctions.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'cloudfunctions';

		$this->operations = new Google_Service_CloudFunctions_Resource_Operations(
			$this,
			$this->serviceName,
			'operations',
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
						'path'       => 'v1/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'name'      => [
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
		$this->projects_locations = new Google_Service_CloudFunctions_Resource_ProjectsLocations(
			$this,
			$this->serviceName,
			'locations',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+name}/locations',
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
		$this->projects_locations_functions = new Google_Service_CloudFunctions_Resource_ProjectsLocationsFunctions(
			$this,
			$this->serviceName,
			'functions',
			[
				'methods' => [
					'call'                   => [
						'path'       => 'v1/{+name}:call',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'              => [
						'path'       => 'v1/{+location}/functions',
						'httpMethod' => 'POST',
						'parameters' => [
							'location' => [
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
					], 'generateDownloadUrl' => [
						'path'       => 'v1/{+name}:generateDownloadUrl',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'generateUploadUrl'   => [
						'path'       => 'v1/{+parent}/functions:generateUploadUrl',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
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
						'path'       => 'v1/{+parent}/functions',
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
					], 'patch'               => [
						'path'       => 'v1/{+name}',
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
	}
}
