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
 * Service definition for BigQueryDataTransfer (v1).
 *
 * <p>
 * Transfers data from partner SaaS applications to Google BigQuery on a
 * scheduled, managed basis.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/bigquery/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_BigQueryDataTransfer extends Google_Service
{
	/** View and manage your data in Google BigQuery. */
	const BIGQUERY =
		"https://www.googleapis.com/auth/bigquery";
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";
	
	public $projects_dataSources;
	public $projects_locations;
	public $projects_locations_dataSources;
	public $projects_locations_transferConfigs;
	public $projects_locations_transferConfigs_runs;
	public $projects_locations_transferConfigs_runs_transferLogs;
	public $projects_transferConfigs;
	public $projects_transferConfigs_runs;
	public $projects_transferConfigs_runs_transferLogs;
	
	/**
	 * Constructs the internal representation of the BigQueryDataTransfer service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://bigquerydatatransfer.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'bigquerydatatransfer';
		
		$this->projects_dataSources = new Google_Service_BigQueryDataTransfer_Resource_ProjectsDataSources(
			$this,
			$this->serviceName,
			'dataSources',
			[
				'methods' => [
					'checkValidCreds' => [
						'path'       => 'v1/{+name}:checkValidCreds',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'          => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'         => [
						'path'       => 'v1/{+parent}/dataSources',
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
		$this->projects_locations = new Google_Service_BigQueryDataTransfer_Resource_ProjectsLocations(
			$this,
			$this->serviceName,
			'locations',
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
						'path'       => 'v1/{+name}/locations',
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
		$this->projects_locations_dataSources = new Google_Service_BigQueryDataTransfer_Resource_ProjectsLocationsDataSources(
			$this,
			$this->serviceName,
			'dataSources',
			[
				'methods' => [
					'checkValidCreds' => [
						'path'       => 'v1/{+name}:checkValidCreds',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'          => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'         => [
						'path'       => 'v1/{+parent}/dataSources',
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
		$this->projects_locations_transferConfigs = new Google_Service_BigQueryDataTransfer_Resource_ProjectsLocationsTransferConfigs(
			$this,
			$this->serviceName,
			'transferConfigs',
			[
				'methods' => [
					'create'          => [
						'path'       => 'v1/{+parent}/transferConfigs',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'authorizationCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'       => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'          => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'         => [
						'path'       => 'v1/{+parent}/transferConfigs',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'dataSourceIds' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'patch'        => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'authorizationCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'scheduleRuns' => [
						'path'       => 'v1/{+parent}:scheduleRuns',
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
		$this->projects_locations_transferConfigs_runs = new Google_Service_BigQueryDataTransfer_Resource_ProjectsLocationsTransferConfigsRuns(
			$this,
			$this->serviceName,
			'runs',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
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
						'path'       => 'v1/{+parent}/runs',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'states'     => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'pageSize'   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'runAttempt' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_locations_transferConfigs_runs_transferLogs = new Google_Service_BigQueryDataTransfer_Resource_ProjectsLocationsTransferConfigsRunsTransferLogs(
			$this,
			$this->serviceName,
			'transferLogs',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+parent}/transferLogs',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'messageTypes' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_transferConfigs = new Google_Service_BigQueryDataTransfer_Resource_ProjectsTransferConfigs(
			$this,
			$this->serviceName,
			'transferConfigs',
			[
				'methods' => [
					'create'          => [
						'path'       => 'v1/{+parent}/transferConfigs',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'authorizationCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'       => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'          => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'         => [
						'path'       => 'v1/{+parent}/transferConfigs',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'dataSourceIds' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'pageToken'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'        => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'authorizationCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'updateMask'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'scheduleRuns' => [
						'path'       => 'v1/{+parent}:scheduleRuns',
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
		$this->projects_transferConfigs_runs = new Google_Service_BigQueryDataTransfer_Resource_ProjectsTransferConfigsRuns(
			$this,
			$this->serviceName,
			'runs',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
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
						'path'       => 'v1/{+parent}/runs',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'states'     => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'pageSize'   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'runAttempt' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_transferConfigs_runs_transferLogs = new Google_Service_BigQueryDataTransfer_Resource_ProjectsTransferConfigsRunsTransferLogs(
			$this,
			$this->serviceName,
			'transferLogs',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+parent}/transferLogs',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'messageTypes' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					],
				],
			]
		);
	}
}
