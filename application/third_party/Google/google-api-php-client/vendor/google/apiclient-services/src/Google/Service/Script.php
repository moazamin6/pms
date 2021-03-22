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
 * Service definition for Script (v1).
 *
 * <p>
 * An API for managing and executing Google Apps Script projects. Note: In order
 * to use this API in your apps, you must  enable it for use. To allow other
 * apps to manage your scripts, you must  grant them access.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/apps-script/api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Script extends Google_Service
{
	/** Read, send, delete, and manage your email. */
	const MAIL_GOOGLE_COM =
		"https://mail.google.com/";
	/** Manage your calendars. */
	const WWW_GOOGLE_COM_CALENDAR_FEEDS =
		"https://www.google.com/calendar/feeds";
	/** Manage your contacts. */
	const WWW_GOOGLE_COM_M8_FEEDS =
		"https://www.google.com/m8/feeds";
	/** View and manage the provisioning of groups on your domain. */
	const ADMIN_DIRECTORY_GROUP =
		"https://www.googleapis.com/auth/admin.directory.group";
	/** View and manage the provisioning of users on your domain. */
	const ADMIN_DIRECTORY_USER =
		"https://www.googleapis.com/auth/admin.directory.user";
	/** View and manage your Google Docs documents. */
	const DOCUMENTS =
		"https://www.googleapis.com/auth/documents";
	/** View and manage the files in your Google Drive. */
	const DRIVE =
		"https://www.googleapis.com/auth/drive";
	/** View and manage your forms in Google Drive. */
	const FORMS =
		"https://www.googleapis.com/auth/forms";
	/** View and manage forms that this application has been installed in. */
	const FORMS_CURRENTONLY =
		"https://www.googleapis.com/auth/forms.currentonly";
	/** View and manage your Google Groups. */
	const GROUPS =
		"https://www.googleapis.com/auth/groups";
	/** View and manage your spreadsheets in Google Drive. */
	const SPREADSHEETS =
		"https://www.googleapis.com/auth/spreadsheets";
	/** View your email address. */
	const USERINFO_EMAIL =
		"https://www.googleapis.com/auth/userinfo.email";

	public $processes;
	public $projects;
	public $projects_deployments;
	public $projects_versions;
	public $scripts;

	/**
	 * Constructs the internal representation of the Script service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://script.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'script';

		$this->processes = new Google_Service_Script_Resource_Processes(
			$this,
			$this->serviceName,
			'processes',
			[
				'methods' => [
					'list'                   => [
						'path'       => 'v1/processes',
						'httpMethod' => 'GET',
						'parameters' => [
							'userProcessFilter.startTime'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'userProcessFilter.projectName'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'userProcessFilter.userAccessLevels' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'userProcessFilter.functionName'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'userProcessFilter.scriptId'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'userProcessFilter.types'            => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'userProcessFilter.statuses'         => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'userProcessFilter.deploymentId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'userProcessFilter.endTime'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'                           => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'listScriptProcesses' => [
						'path'       => 'v1/processes:listScriptProcesses',
						'httpMethod' => 'GET',
						'parameters' => [
							'scriptProcessFilter.endTime'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'scriptProcessFilter.userAccessLevels' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'scriptProcessFilter.statuses'         => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'scriptProcessFilter.startTime'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'scriptProcessFilter.functionName'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'scriptProcessFilter.deploymentId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'scriptId'                             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'scriptProcessFilter.types'            => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'pageToken'                            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'                             => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
		$this->projects = new Google_Service_Script_Resource_Projects(
			$this,
			$this->serviceName,
			'projects',
			[
				'methods' => [
					'create'           => [
						'path'       => 'v1/projects',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'           => [
						'path'       => 'v1/projects/{scriptId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'scriptId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getContent'    => [
						'path'       => 'v1/projects/{scriptId}/content',
						'httpMethod' => 'GET',
						'parameters' => [
							'scriptId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'versionNumber' => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'getMetrics'    => [
						'path'       => 'v1/projects/{scriptId}/metrics',
						'httpMethod' => 'GET',
						'parameters' => [
							'scriptId'                   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'metricsGranularity'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'metricsFilter.deploymentId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'updateContent' => [
						'path'       => 'v1/projects/{scriptId}/content',
						'httpMethod' => 'PUT',
						'parameters' => [
							'scriptId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_deployments = new Google_Service_Script_Resource_ProjectsDeployments(
			$this,
			$this->serviceName,
			'deployments',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/projects/{scriptId}/deployments',
						'httpMethod' => 'POST',
						'parameters' => [
							'scriptId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/projects/{scriptId}/deployments/{deploymentId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'scriptId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deploymentId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/projects/{scriptId}/deployments/{deploymentId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'scriptId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deploymentId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/projects/{scriptId}/deployments',
						'httpMethod' => 'GET',
						'parameters' => [
							'scriptId'  => [
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
					], 'update' => [
						'path'       => 'v1/projects/{scriptId}/deployments/{deploymentId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'scriptId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deploymentId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_versions = new Google_Service_Script_Resource_ProjectsVersions(
			$this,
			$this->serviceName,
			'versions',
			[
				'methods' => [
					'create'  => [
						'path'       => 'v1/projects/{scriptId}/versions',
						'httpMethod' => 'POST',
						'parameters' => [
							'scriptId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => 'v1/projects/{scriptId}/versions/{versionNumber}',
						'httpMethod' => 'GET',
						'parameters' => [
							'scriptId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'versionNumber' => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v1/projects/{scriptId}/versions',
						'httpMethod' => 'GET',
						'parameters' => [
							'scriptId'  => [
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
		$this->scripts = new Google_Service_Script_Resource_Scripts(
			$this,
			$this->serviceName,
			'scripts',
			[
				'methods' => [
					'run' => [
						'path'       => 'v1/scripts/{scriptId}:run',
						'httpMethod' => 'POST',
						'parameters' => [
							'scriptId' => [
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
