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
 * Service definition for JobService (v2).
 *
 * <p>
 * Cloud Job Discovery provides the capability to create, read, update, and
 * delete job postings, as well as search jobs based on keywords and filters.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/job-discovery/docs" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_JobService extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** Manage job postings. */
	const JOBS =
		"https://www.googleapis.com/auth/jobs";

	public $companies;
	public $companies_jobs;
	public $jobs;
	public $v2;

	/**
	 * Constructs the internal representation of the JobService service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://jobs.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v2';
		$this->serviceName = 'jobs';

		$this->companies = new Google_Service_JobService_Resource_Companies(
			$this,
			$this->serviceName,
			'companies',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/companies',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete' => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v2/companies',
						'httpMethod' => 'GET',
						'parameters' => [
							'mustHaveOpenJobs' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'         => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'patch'  => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name'                => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateCompanyFields' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->companies_jobs = new Google_Service_JobService_Resource_CompaniesJobs(
			$this,
			$this->serviceName,
			'jobs',
			[
				'methods' => [
					'list' => [
						'path'       => 'v2/{+companyName}/jobs',
						'httpMethod' => 'GET',
						'parameters' => [
							'companyName'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'includeJobsCount' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'idsOnly'          => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageSize'         => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'jobRequisitionId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->jobs = new Google_Service_JobService_Resource_Jobs(
			$this,
			$this->serviceName,
			'jobs',
			[
				'methods' => [
					'batchDelete'       => [
						'path'       => 'v2/jobs:batchDelete',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'create'         => [
						'path'       => 'v2/jobs',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete'         => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'disableFastProcess' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'deleteByFilter' => [
						'path'       => 'v2/jobs:deleteByFilter',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'            => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'histogram'      => [
						'path'       => 'v2/jobs:histogram',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'           => [
						'path'       => 'v2/jobs',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'idsOnly'   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'          => [
						'path'       => 'v2/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'search'         => [
						'path'       => 'v2/jobs:search',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'searchForAlert' => [
						'path'       => 'v2/jobs:searchForAlert',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->v2 = new Google_Service_JobService_Resource_V2(
			$this,
			$this->serviceName,
			'v2',
			[
				'methods' => [
					'complete' => [
						'path'       => 'v2:complete',
						'httpMethod' => 'GET',
						'parameters' => [
							'companyName'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'scope'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'query'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'type'         => [
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
