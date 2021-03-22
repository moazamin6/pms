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
 * Service definition for Dataproc (v1).
 *
 * <p>
 * Manages Hadoop-based clusters and jobs on Google Cloud Platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/dataproc/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Dataproc extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";

	public $projects_regions_clusters;
	public $projects_regions_jobs;
	public $projects_regions_operations;

	/**
	 * Constructs the internal representation of the Dataproc service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://dataproc.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'dataproc';

		$this->projects_regions_clusters = new Google_Service_Dataproc_Resource_ProjectsRegionsClusters(
			$this,
			$this->serviceName,
			'clusters',
			[
				'methods' => [
					'create'      => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/clusters',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'   => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/clusters/{clusterName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clusterName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clusterUuid' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'diagnose' => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/clusters/{clusterName}:diagnose',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clusterName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'      => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/clusters/{clusterName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clusterName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'     => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/clusters',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
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
					], 'patch'    => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/clusters/{clusterName}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'projectId'                   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'                      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clusterName'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'gracefulDecommissionTimeout' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestId'                   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'updateMask'                  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_regions_jobs = new Google_Service_Dataproc_Resource_ProjectsRegionsJobs(
			$this,
			$this->serviceName,
			'jobs',
			[
				'methods' => [
					'cancel'    => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/jobs/{jobId}:cancel',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/jobs/{jobId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/jobs/{jobId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/jobs',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'        => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'clusterName'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filter'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'jobStateMatcher' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/jobs/{jobId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'projectId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'submit' => [
						'path'       => 'v1/projects/{projectId}/regions/{region}/jobs:submit',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_regions_operations = new Google_Service_Dataproc_Resource_ProjectsRegionsOperations(
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
