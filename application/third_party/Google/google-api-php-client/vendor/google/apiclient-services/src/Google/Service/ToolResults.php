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
 * Service definition for ToolResults (v1beta3).
 *
 * <p>
 * Reads and publishes results from Firebase Test Lab.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://firebase.google.com/docs/test-lab/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_ToolResults extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	
	public $projects;
	public $projects_histories;
	public $projects_histories_executions;
	public $projects_histories_executions_clusters;
	public $projects_histories_executions_steps;
	public $projects_histories_executions_steps_perfMetricsSummary;
	public $projects_histories_executions_steps_perfSampleSeries;
	public $projects_histories_executions_steps_perfSampleSeries_samples;
	public $projects_histories_executions_steps_thumbnails;
	
	/**
	 * Constructs the internal representation of the ToolResults service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'toolresults/v1beta3/projects/';
		$this->version = 'v1beta3';
		$this->serviceName = 'toolresults';
		
		$this->projects = new Google_Service_ToolResults_Resource_Projects(
			$this,
			$this->serviceName,
			'projects',
			[
				'methods' => [
					'getSettings'           => [
						'path'       => '{projectId}/settings',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'initializeSettings' => [
						'path'       => '{projectId}:initializeSettings',
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
		$this->projects_histories = new Google_Service_ToolResults_Resource_ProjectsHistories(
			$this,
			$this->serviceName,
			'histories',
			[
				'methods' => [
					'create'  => [
						'path'       => '{projectId}/histories',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'  => [
						'path'       => '{projectId}/histories/{historyId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{projectId}/histories',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filterByName' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'     => [
								'location' => 'query',
								'type'     => 'integer',
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
		$this->projects_histories_executions = new Google_Service_ToolResults_Resource_ProjectsHistoriesExecutions(
			$this,
			$this->serviceName,
			'executions',
			[
				'methods' => [
					'create'   => [
						'path'       => '{projectId}/histories/{historyId}/executions',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'   => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'  => [
						'path'       => '{projectId}/histories/{historyId}/executions',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId' => [
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
					], 'patch' => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_histories_executions_clusters = new Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsClusters(
			$this,
			$this->serviceName,
			'clusters',
			[
				'methods' => [
					'get'     => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/clusters/{clusterId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clusterId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/clusters',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_histories_executions_steps = new Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsSteps(
			$this,
			$this->serviceName,
			'steps',
			[
				'methods' => [
					'create'                   => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                   => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getPerfMetricsSummary' => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}/perfMetricsSummary',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                  => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'                 => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'publishXunitXmlFiles'  => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}:publishXunitXmlFiles',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_histories_executions_steps_perfMetricsSummary = new Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsStepsPerfMetricsSummary(
			$this,
			$this->serviceName,
			'perfMetricsSummary',
			[
				'methods' => [
					'create' => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}/perfMetricsSummary',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_histories_executions_steps_perfSampleSeries = new Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsStepsPerfSampleSeries(
			$this,
			$this->serviceName,
			'perfSampleSeries',
			[
				'methods' => [
					'create'  => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}/perfSampleSeries',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}/perfSampleSeries/{sampleSeriesId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sampleSeriesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}/perfSampleSeries',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'      => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_histories_executions_steps_perfSampleSeries_samples = new Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsStepsPerfSampleSeriesSamples(
			$this,
			$this->serviceName,
			'samples',
			[
				'methods' => [
					'batchCreate' => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}/perfSampleSeries/{sampleSeriesId}/samples:batchCreate',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sampleSeriesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'     => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}/perfSampleSeries/{sampleSeriesId}/samples',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sampleSeriesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'       => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_histories_executions_steps_thumbnails = new Google_Service_ToolResults_Resource_ProjectsHistoriesExecutionsStepsThumbnails(
			$this,
			$this->serviceName,
			'thumbnails',
			[
				'methods' => [
					'list' => [
						'path'       => '{projectId}/histories/{historyId}/executions/{executionId}/steps/{stepId}/thumbnails',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'historyId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'executionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'   => [
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
