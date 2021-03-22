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
 * Service definition for Dataflow (v1b3).
 *
 * <p>
 * Manages Google Cloud Dataflow projects on Google Cloud Platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/dataflow" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Dataflow extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View and manage your Google Compute Engine resources. */
	const COMPUTE =
		"https://www.googleapis.com/auth/compute";
	/** View your Google Compute Engine resources. */
	const COMPUTE_READONLY =
		"https://www.googleapis.com/auth/compute.readonly";
	/** View your email address. */
	const USERINFO_EMAIL =
		"https://www.googleapis.com/auth/userinfo.email";

	public $projects;
	public $projects_jobs;
	public $projects_jobs_debug;
	public $projects_jobs_messages;
	public $projects_jobs_workItems;
	public $projects_locations;
	public $projects_locations_jobs;
	public $projects_locations_jobs_debug;
	public $projects_locations_jobs_messages;
	public $projects_locations_jobs_workItems;
	public $projects_locations_templates;
	public $projects_templates;

	/**
	 * Constructs the internal representation of the Dataflow service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://dataflow.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1b3';
		$this->serviceName = 'dataflow';

		$this->projects = new Google_Service_Dataflow_Resource_Projects(
			$this,
			$this->serviceName,
			'projects',
			[
				'methods' => [
					'workerMessages' => [
						'path'       => 'v1b3/projects/{projectId}/WorkerMessages',
						'httpMethod' => 'POST',
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
		$this->projects_jobs = new Google_Service_Dataflow_Resource_ProjectsJobs(
			$this,
			$this->serviceName,
			'jobs',
			[
				'methods' => [
					'aggregated'    => [
						'path'       => 'v1b3/projects/{projectId}/jobs:aggregated',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'location'  => [
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
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'create'     => [
						'path'       => 'v1b3/projects/{projectId}/jobs',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'view'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'location'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'replaceJobId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'        => [
						'path'       => 'v1b3/projects/{projectId}/jobs/{jobId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'location'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'getMetrics' => [
						'path'       => 'v1b3/projects/{projectId}/jobs/{jobId}/metrics',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startTime' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'       => [
						'path'       => 'v1b3/projects/{projectId}/jobs',
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
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'location'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'     => [
						'path'       => 'v1b3/projects/{projectId}/jobs/{jobId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_jobs_debug = new Google_Service_Dataflow_Resource_ProjectsJobsDebug(
			$this,
			$this->serviceName,
			'debug',
			[
				'methods' => [
					'getConfig'      => [
						'path'       => 'v1b3/projects/{projectId}/jobs/{jobId}/debug/getConfig',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
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
					], 'sendCapture' => [
						'path'       => 'v1b3/projects/{projectId}/jobs/{jobId}/debug/sendCapture',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
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
					],
				],
			]
		);
		$this->projects_jobs_messages = new Google_Service_Dataflow_Resource_ProjectsJobsMessages(
			$this,
			$this->serviceName,
			'messages',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1b3/projects/{projectId}/jobs/{jobId}/messages',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'endTime'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startTime'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'          => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'minimumImportance' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_jobs_workItems = new Google_Service_Dataflow_Resource_ProjectsJobsWorkItems(
			$this,
			$this->serviceName,
			'workItems',
			[
				'methods' => [
					'lease'           => [
						'path'       => 'v1b3/projects/{projectId}/jobs/{jobId}/workItems:lease',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
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
					], 'reportStatus' => [
						'path'       => 'v1b3/projects/{projectId}/jobs/{jobId}/workItems:reportStatus',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
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
					],
				],
			]
		);
		$this->projects_locations = new Google_Service_Dataflow_Resource_ProjectsLocations(
			$this,
			$this->serviceName,
			'locations',
			[
				'methods' => [
					'workerMessages' => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/WorkerMessages',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_locations_jobs = new Google_Service_Dataflow_Resource_ProjectsLocationsJobs(
			$this,
			$this->serviceName,
			'jobs',
			[
				'methods' => [
					'create'        => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/jobs',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'replaceJobId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'view'         => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'        => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/jobs/{jobId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'getMetrics' => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/jobs/{jobId}/metrics',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'startTime' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'       => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/jobs',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
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
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'     => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/jobs/{jobId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
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
					],
				],
			]
		);
		$this->projects_locations_jobs_debug = new Google_Service_Dataflow_Resource_ProjectsLocationsJobsDebug(
			$this,
			$this->serviceName,
			'debug',
			[
				'methods' => [
					'getConfig'      => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/jobs/{jobId}/debug/getConfig',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
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
					], 'sendCapture' => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/jobs/{jobId}/debug/sendCapture',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
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
					],
				],
			]
		);
		$this->projects_locations_jobs_messages = new Google_Service_Dataflow_Resource_ProjectsLocationsJobsMessages(
			$this,
			$this->serviceName,
			'messages',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/jobs/{jobId}/messages',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'endTime'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startTime'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'          => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'minimumImportance' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_locations_jobs_workItems = new Google_Service_Dataflow_Resource_ProjectsLocationsJobsWorkItems(
			$this,
			$this->serviceName,
			'workItems',
			[
				'methods' => [
					'lease'           => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/jobs/{jobId}/workItems:lease',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
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
					], 'reportStatus' => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/jobs/{jobId}/workItems:reportStatus',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
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
					],
				],
			]
		);
		$this->projects_locations_templates = new Google_Service_Dataflow_Resource_ProjectsLocationsTemplates(
			$this,
			$this->serviceName,
			'templates',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/templates',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/templates:get',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'gcsPath'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'launch' => [
						'path'       => 'v1b3/projects/{projectId}/locations/{location}/templates:launch',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'gcsPath'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'validateOnly' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->projects_templates = new Google_Service_Dataflow_Resource_ProjectsTemplates(
			$this,
			$this->serviceName,
			'templates',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1b3/projects/{projectId}/templates',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1b3/projects/{projectId}/templates:get',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'gcsPath'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'launch' => [
						'path'       => 'v1b3/projects/{projectId}/templates:launch',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'validateOnly' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'gcsPath'      => [
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
