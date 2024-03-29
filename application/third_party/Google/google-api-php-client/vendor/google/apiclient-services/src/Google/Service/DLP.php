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
 * Service definition for DLP (v2).
 *
 * <p>
 * Provides methods for detection, risk analysis, and de-identification of
 * privacy-sensitive fragments in text, images, and Google Cloud Platform
 * storage repositories.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/dlp/docs/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_DLP extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";

	public $infoTypes;
	public $organizations_deidentifyTemplates;
	public $organizations_inspectTemplates;
	public $projects_content;
	public $projects_deidentifyTemplates;
	public $projects_dlpJobs;
	public $projects_image;
	public $projects_inspectTemplates;
	public $projects_jobTriggers;

	/**
	 * Constructs the internal representation of the DLP service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://dlp.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v2';
		$this->serviceName = 'dlp';

		$this->infoTypes = new Google_Service_DLP_Resource_InfoTypes(
			$this,
			$this->serviceName,
			'infoTypes',
			[
				'methods' => [
					'list' => [
						'path'       => 'v2/infoTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filter'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->organizations_deidentifyTemplates = new Google_Service_DLP_Resource_OrganizationsDeidentifyTemplates(
			$this,
			$this->serviceName,
			'deidentifyTemplates',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/deidentifyTemplates',
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
						'path'       => 'v2/{+parent}/deidentifyTemplates',
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
		$this->organizations_inspectTemplates = new Google_Service_DLP_Resource_OrganizationsInspectTemplates(
			$this,
			$this->serviceName,
			'inspectTemplates',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/inspectTemplates',
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
						'path'       => 'v2/{+parent}/inspectTemplates',
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
		$this->projects_content = new Google_Service_DLP_Resource_ProjectsContent(
			$this,
			$this->serviceName,
			'content',
			[
				'methods' => [
					'deidentify'    => [
						'path'       => 'v2/{+parent}/content:deidentify',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'inspect'    => [
						'path'       => 'v2/{+parent}/content:inspect',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'reidentify' => [
						'path'       => 'v2/{+parent}/content:reidentify',
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
		$this->projects_deidentifyTemplates = new Google_Service_DLP_Resource_ProjectsDeidentifyTemplates(
			$this,
			$this->serviceName,
			'deidentifyTemplates',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/deidentifyTemplates',
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
						'path'       => 'v2/{+parent}/deidentifyTemplates',
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
		$this->projects_dlpJobs = new Google_Service_DLP_Resource_ProjectsDlpJobs(
			$this,
			$this->serviceName,
			'dlpJobs',
			[
				'methods' => [
					'cancel'    => [
						'path'       => 'v2/{+name}:cancel',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create' => [
						'path'       => 'v2/{+parent}/dlpJobs',
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
						'path'       => 'v2/{+parent}/dlpJobs',
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
							'type'      => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->projects_image = new Google_Service_DLP_Resource_ProjectsImage(
			$this,
			$this->serviceName,
			'image',
			[
				'methods' => [
					'redact' => [
						'path'       => 'v2/{+parent}/image:redact',
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
		$this->projects_inspectTemplates = new Google_Service_DLP_Resource_ProjectsInspectTemplates(
			$this,
			$this->serviceName,
			'inspectTemplates',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/inspectTemplates',
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
						'path'       => 'v2/{+parent}/inspectTemplates',
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
		$this->projects_jobTriggers = new Google_Service_DLP_Resource_ProjectsJobTriggers(
			$this,
			$this->serviceName,
			'jobTriggers',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v2/{+parent}/jobTriggers',
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
						'path'       => 'v2/{+parent}/jobTriggers',
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
							'orderBy'   => [
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
