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
 * Service definition for Bigquery (v2).
 *
 * <p>
 * A data platform for customers to create, manage, share and query data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/bigquery/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Bigquery extends Google_Service
{
	/** View and manage your data in Google BigQuery. */
	const BIGQUERY =
		"https://www.googleapis.com/auth/bigquery";
	/** Insert data into Google BigQuery. */
	const BIGQUERY_INSERTDATA =
		"https://www.googleapis.com/auth/bigquery.insertdata";
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";
	/** Manage your data and permissions in Google Cloud Storage. */
	const DEVSTORAGE_FULL_CONTROL =
		"https://www.googleapis.com/auth/devstorage.full_control";
	/** View your data in Google Cloud Storage. */
	const DEVSTORAGE_READ_ONLY =
		"https://www.googleapis.com/auth/devstorage.read_only";
	/** Manage your data in Google Cloud Storage. */
	const DEVSTORAGE_READ_WRITE =
		"https://www.googleapis.com/auth/devstorage.read_write";

	public $datasets;
	public $jobs;
	public $projects;
	public $tabledata;
	public $tables;

	/**
	 * Constructs the internal representation of the Bigquery service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'bigquery/v2/';
		$this->version = 'v2';
		$this->serviceName = 'bigquery';

		$this->datasets = new Google_Service_Bigquery_Resource_Datasets(
			$this,
			$this->serviceName,
			'datasets',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'projectId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deleteContents' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'    => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'projects/{projectId}/datasets',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'projects/{projectId}/datasets',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'all'        => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->jobs = new Google_Service_Bigquery_Resource_Jobs(
			$this,
			$this->serviceName,
			'jobs',
			[
				'methods' => [
					'cancel'             => [
						'path'       => 'projects/{projectId}/jobs/{jobId}/cancel',
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
							'location'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'             => [
						'path'       => 'projects/{projectId}/jobs/{jobId}',
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
						],
					], 'getQueryResults' => [
						'path'       => 'projects/{projectId}/queries/{jobId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'location'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startIndex' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'timeoutMs'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'insert'          => [
						'path'       => 'projects/{projectId}/jobs',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'            => [
						'path'       => 'projects/{projectId}/jobs',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'allUsers'        => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'maxCreationTime' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'minCreationTime' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'projection'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'stateFilter'     => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'query'           => [
						'path'       => 'projects/{projectId}/queries',
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
		$this->projects = new Google_Service_Bigquery_Resource_Projects(
			$this,
			$this->serviceName,
			'projects',
			[
				'methods' => [
					'getServiceAccount' => [
						'path'       => 'projects/{projectId}/serviceAccount',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'           => [
						'path'       => 'projects',
						'httpMethod' => 'GET',
						'parameters' => [
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
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
		$this->tabledata = new Google_Service_Bigquery_Resource_Tabledata(
			$this,
			$this->serviceName,
			'tabledata',
			[
				'methods' => [
					'insertAll' => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}/insertAll',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'tableId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}/data',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'tableId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'selectedFields' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startIndex'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->tables = new Google_Service_Bigquery_Resource_Tables(
			$this,
			$this->serviceName,
			'tables',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'tableId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'tableId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'selectedFields' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert' => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}/tables',
						'httpMethod' => 'POST',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}/tables',
						'httpMethod' => 'GET',
						'parameters' => [
							'projectId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'tableId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'projects/{projectId}/datasets/{datasetId}/tables/{tableId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'projectId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'tableId'   => [
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
