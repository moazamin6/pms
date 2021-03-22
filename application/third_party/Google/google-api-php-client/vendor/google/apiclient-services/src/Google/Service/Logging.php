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
 * Service definition for Logging (v2).
 *
 * <p>
 * Writes log entries and manages your Stackdriver Logging configuration.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/logging/docs/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Logging extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";
	/** Administrate log data for your projects. */
	const LOGGING_ADMIN =
		"https://www.googleapis.com/auth/logging.admin";
	/** View log data for your projects. */
	const LOGGING_READ =
		"https://www.googleapis.com/auth/logging.read";
	/** Submit log data for your projects. */
	const LOGGING_WRITE =
		"https://www.googleapis.com/auth/logging.write";

	public $billingAccounts_exclusions;
	public $billingAccounts_logs;
	public $billingAccounts_sinks;
	public $entries;
	public $exclusions;
	public $folders_exclusions;
	public $folders_logs;
	public $folders_sinks;
	public $logs;
	public $monitoredResourceDescriptors;
	public $organizations_exclusions;
	public $organizations_logs;
	public $organizations_sinks;
	public $projects_exclusions;
	public $projects_logs;
	public $projects_metrics;
	public $projects_sinks;
	public $sinks;

	/**
	 * Constructs the internal representation of the Logging service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://logging.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v2';
		$this->serviceName = 'logging';

		$this->billingAccounts_exclusions = new Google_Service_Logging_Resource_BillingAccountsExclusions(
			$this,
			$this->serviceName,
			'exclusions',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/exclusions',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
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
						'path'       => 'v2/{+parent}/exclusions',
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
					], 'patch'  => [
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
					],
				],
			]
		);
		$this->billingAccounts_logs = new Google_Service_Logging_Resource_BillingAccountsLogs(
			$this,
			$this->serviceName,
			'logs',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'v2/{+logName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'logName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v2/{+parent}/logs',
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
		$this->billingAccounts_sinks = new Google_Service_Logging_Resource_BillingAccountsSinks(
			$this,
			$this->serviceName,
			'sinks',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/sinks',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete' => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'sinkName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'sinkName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v2/{+parent}/sinks',
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
					], 'patch'  => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'sinkName'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updateMask'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'sinkName'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updateMask'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->entries = new Google_Service_Logging_Resource_Entries(
			$this,
			$this->serviceName,
			'entries',
			[
				'methods' => [
					'list'     => [
						'path'       => 'v2/entries:list',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'write' => [
						'path'       => 'v2/entries:write',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->exclusions = new Google_Service_Logging_Resource_Exclusions(
			$this,
			$this->serviceName,
			'exclusions',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/exclusions',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
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
						'path'       => 'v2/{+parent}/exclusions',
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
					], 'patch'  => [
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
					],
				],
			]
		);
		$this->folders_exclusions = new Google_Service_Logging_Resource_FoldersExclusions(
			$this,
			$this->serviceName,
			'exclusions',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/exclusions',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
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
						'path'       => 'v2/{+parent}/exclusions',
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
					], 'patch'  => [
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
					],
				],
			]
		);
		$this->folders_logs = new Google_Service_Logging_Resource_FoldersLogs(
			$this,
			$this->serviceName,
			'logs',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'v2/{+logName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'logName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v2/{+parent}/logs',
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
		$this->folders_sinks = new Google_Service_Logging_Resource_FoldersSinks(
			$this,
			$this->serviceName,
			'sinks',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/sinks',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete' => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'sinkName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'sinkName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v2/{+parent}/sinks',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
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
					], 'patch'  => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'sinkName'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updateMask'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'sinkName'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updateMask'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->logs = new Google_Service_Logging_Resource_Logs(
			$this,
			$this->serviceName,
			'logs',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'v2/{+logName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'logName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v2/{+parent}/logs',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
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
					],
				],
			]
		);
		$this->monitoredResourceDescriptors = new Google_Service_Logging_Resource_MonitoredResourceDescriptors(
			$this,
			$this->serviceName,
			'monitoredResourceDescriptors',
			[
				'methods' => [
					'list' => [
						'path'       => 'v2/monitoredResourceDescriptors',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
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
		$this->organizations_exclusions = new Google_Service_Logging_Resource_OrganizationsExclusions(
			$this,
			$this->serviceName,
			'exclusions',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/exclusions',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
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
						'path'       => 'v2/{+parent}/exclusions',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
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
					], 'patch'  => [
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
					],
				],
			]
		);
		$this->organizations_logs = new Google_Service_Logging_Resource_OrganizationsLogs(
			$this,
			$this->serviceName,
			'logs',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'v2/{+logName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'logName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v2/{+parent}/logs',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
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
					],
				],
			]
		);
		$this->organizations_sinks = new Google_Service_Logging_Resource_OrganizationsSinks(
			$this,
			$this->serviceName,
			'sinks',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/sinks',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete' => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'sinkName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'sinkName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v2/{+parent}/sinks',
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
					], 'patch'  => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'sinkName'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updateMask'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'sinkName'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updateMask'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_exclusions = new Google_Service_Logging_Resource_ProjectsExclusions(
			$this,
			$this->serviceName,
			'exclusions',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/exclusions',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
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
						'path'       => 'v2/{+parent}/exclusions',
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
					], 'patch'  => [
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
					],
				],
			]
		);
		$this->projects_logs = new Google_Service_Logging_Resource_ProjectsLogs(
			$this,
			$this->serviceName,
			'logs',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'v2/{+logName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'logName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v2/{+parent}/logs',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
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
					],
				],
			]
		);
		$this->projects_metrics = new Google_Service_Logging_Resource_ProjectsMetrics(
			$this,
			$this->serviceName,
			'metrics',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/metrics',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v2/{+metricName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'metricName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v2/{+metricName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'metricName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v2/{+parent}/metrics',
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
					], 'update' => [
						'path'       => 'v2/{+metricName}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'metricName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_sinks = new Google_Service_Logging_Resource_ProjectsSinks(
			$this,
			$this->serviceName,
			'sinks',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/sinks',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete' => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'sinkName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'sinkName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v2/{+parent}/sinks',
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
					], 'patch'  => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'sinkName'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updateMask'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'sinkName'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updateMask'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->sinks = new Google_Service_Logging_Resource_Sinks(
			$this,
			$this->serviceName,
			'sinks',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/sinks',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete' => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'sinkName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'sinkName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v2/{+parent}/sinks',
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
					], 'update' => [
						'path'       => 'v2/{+sinkName}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'sinkName'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'uniqueWriterIdentity' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updateMask'           => [
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
