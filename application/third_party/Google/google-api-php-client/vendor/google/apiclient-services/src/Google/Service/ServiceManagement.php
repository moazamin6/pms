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
 * Service definition for ServiceManagement (v1).
 *
 * <p>
 * Google Service Management allows service producers to publish their services
 * on Google Cloud Platform so that they can be discovered and used by service
 * consumers.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/service-management/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_ServiceManagement extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";
	/** Manage your Google API service configuration. */
	const SERVICE_MANAGEMENT =
		"https://www.googleapis.com/auth/service.management";
	/** View your Google API service configuration. */
	const SERVICE_MANAGEMENT_READONLY =
		"https://www.googleapis.com/auth/service.management.readonly";

	public $operations;
	public $services;
	public $services_configs;
	public $services_consumers;
	public $services_rollouts;

	/**
	 * Constructs the internal representation of the ServiceManagement service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://servicemanagement.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'servicemanagement';

		$this->operations = new Google_Service_ServiceManagement_Resource_Operations(
			$this,
			$this->serviceName,
			'operations',
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
						'path'       => 'v1/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
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
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->services = new Google_Service_ServiceManagement_Resource_Services(
			$this,
			$this->serviceName,
			'services',
			[
				'methods' => [
					'create'                  => [
						'path'       => 'v1/services',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete'               => [
						'path'       => 'v1/services/{serviceName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'disable'              => [
						'path'       => 'v1/services/{serviceName}:disable',
						'httpMethod' => 'POST',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'enable'               => [
						'path'       => 'v1/services/{serviceName}:enable',
						'httpMethod' => 'POST',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'generateConfigReport' => [
						'path'       => 'v1/services:generateConfigReport',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'                  => [
						'path'       => 'v1/services/{serviceName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getConfig'            => [
						'path'       => 'v1/services/{serviceName}/config',
						'httpMethod' => 'GET',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'configId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'view'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'getIamPolicy'         => [
						'path'       => 'v1/{+resource}:getIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                 => [
						'path'       => 'v1/services',
						'httpMethod' => 'GET',
						'parameters' => [
							'consumerId'        => [
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
							'producerProjectId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setIamPolicy'         => [
						'path'       => 'v1/{+resource}:setIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'testIamPermissions'   => [
						'path'       => 'v1/{+resource}:testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'undelete'             => [
						'path'       => 'v1/services/{serviceName}:undelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->services_configs = new Google_Service_ServiceManagement_Resource_ServicesConfigs(
			$this,
			$this->serviceName,
			'configs',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/services/{serviceName}/configs',
						'httpMethod' => 'POST',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/services/{serviceName}/configs/{configId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'configId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'view'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'v1/services/{serviceName}/configs',
						'httpMethod' => 'GET',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'submit' => [
						'path'       => 'v1/services/{serviceName}/configs:submit',
						'httpMethod' => 'POST',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->services_consumers = new Google_Service_ServiceManagement_Resource_ServicesConsumers(
			$this,
			$this->serviceName,
			'consumers',
			[
				'methods' => [
					'getIamPolicy'          => [
						'path'       => 'v1/{+resource}:getIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setIamPolicy'       => [
						'path'       => 'v1/{+resource}:setIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'testIamPermissions' => [
						'path'       => 'v1/{+resource}:testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->services_rollouts = new Google_Service_ServiceManagement_Resource_ServicesRollouts(
			$this,
			$this->serviceName,
			'rollouts',
			[
				'methods' => [
					'create'  => [
						'path'       => 'v1/services/{serviceName}/rollouts',
						'httpMethod' => 'POST',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => 'v1/services/{serviceName}/rollouts/{rolloutId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'rolloutId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v1/services/{serviceName}/rollouts',
						'httpMethod' => 'GET',
						'parameters' => [
							'serviceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'    => [
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
