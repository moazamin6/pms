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
 * Service definition for Storagetransfer (v1).
 *
 * <p>
 * Transfers data from external data sources to a Google Cloud Storage bucket or
 * between Google Cloud Storage buckets.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/storage/transfer" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Storagetransfer extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	
	public $googleServiceAccounts;
	public $transferJobs;
	public $transferOperations;
	
	/**
	 * Constructs the internal representation of the Storagetransfer service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://storagetransfer.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'storagetransfer';
		
		$this->googleServiceAccounts = new Google_Service_Storagetransfer_Resource_GoogleServiceAccounts(
			$this,
			$this->serviceName,
			'googleServiceAccounts',
			[
				'methods' => [
					'get' => [
						'path'       => 'v1/googleServiceAccounts/{projectId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->transferJobs = new Google_Service_Storagetransfer_Resource_TransferJobs(
			$this,
			$this->serviceName,
			'transferJobs',
			[
				'methods' => [
					'create'   => [
						'path'       => 'v1/transferJobs',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'   => [
						'path'       => 'v1/{+jobName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'jobName'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'projectId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'  => [
						'path'       => 'v1/transferJobs',
						'httpMethod' => 'GET',
						'parameters' => [
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
					], 'patch' => [
						'path'       => 'v1/{+jobName}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'jobName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->transferOperations = new Google_Service_Storagetransfer_Resource_TransferOperations(
			$this,
			$this->serviceName,
			'transferOperations',
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
					], 'pause'  => [
						'path'       => 'v1/{+name}:pause',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resume' => [
						'path'       => 'v1/{+name}:resume',
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
