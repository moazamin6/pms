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
 * Service definition for CloudIot (v1).
 *
 * <p>
 * Registers and manages IoT (Internet of Things) devices that connect to the
 * Google Cloud Platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/iot" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CloudIot extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** Register and manage devices in the Google Cloud IoT service. */
	const CLOUDIOT =
		"https://www.googleapis.com/auth/cloudiot";

	public $projects_locations_registries;
	public $projects_locations_registries_devices;
	public $projects_locations_registries_devices_configVersions;
	public $projects_locations_registries_devices_states;
	public $projects_locations_registries_groups;
	public $projects_locations_registries_groups_devices;
	public $projects_locations_registries_groups_devices_configVersions;
	public $projects_locations_registries_groups_devices_states;

	/**
	 * Constructs the internal representation of the CloudIot service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://cloudiot.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'cloudiot';

		$this->projects_locations_registries = new Google_Service_CloudIot_Resource_ProjectsLocationsRegistries(
			$this,
			$this->serviceName,
			'registries',
			[
				'methods' => [
					'create'                => [
						'path'       => 'v1/{+parent}/registries',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'             => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => 'v1/{+resource}:getIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => 'v1/{+parent}/registries',
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
					], 'patch'              => [
						'path'       => 'v1/{+name}',
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
		$this->projects_locations_registries_devices = new Google_Service_CloudIot_Resource_ProjectsLocationsRegistriesDevices(
			$this,
			$this->serviceName,
			'devices',
			[
				'methods' => [
					'create'                       => [
						'path'       => 'v1/{+parent}/devices',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'                    => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                       => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fieldMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'                      => [
						'path'       => 'v1/{+parent}/devices',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceNumIds' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'fieldMask'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'deviceIds'    => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'modifyCloudToDeviceConfig' => [
						'path'       => 'v1/{+name}:modifyCloudToDeviceConfig',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'                     => [
						'path'       => 'v1/{+name}',
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
		$this->projects_locations_registries_devices_configVersions = new Google_Service_CloudIot_Resource_ProjectsLocationsRegistriesDevicesConfigVersions(
			$this,
			$this->serviceName,
			'configVersions',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+name}/configVersions',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'numVersions' => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
		$this->projects_locations_registries_devices_states = new Google_Service_CloudIot_Resource_ProjectsLocationsRegistriesDevicesStates(
			$this,
			$this->serviceName,
			'states',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+name}/states',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'numStates' => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
		$this->projects_locations_registries_groups = new Google_Service_CloudIot_Resource_ProjectsLocationsRegistriesGroups(
			$this,
			$this->serviceName,
			'groups',
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
		$this->projects_locations_registries_groups_devices = new Google_Service_CloudIot_Resource_ProjectsLocationsRegistriesGroupsDevices(
			$this,
			$this->serviceName,
			'devices',
			[
				'methods' => [
					'delete'                       => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                       => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fieldMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'modifyCloudToDeviceConfig' => [
						'path'       => 'v1/{+name}:modifyCloudToDeviceConfig',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'                     => [
						'path'       => 'v1/{+name}',
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
		$this->projects_locations_registries_groups_devices_configVersions = new Google_Service_CloudIot_Resource_ProjectsLocationsRegistriesGroupsDevicesConfigVersions(
			$this,
			$this->serviceName,
			'configVersions',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+name}/configVersions',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'numVersions' => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
		$this->projects_locations_registries_groups_devices_states = new Google_Service_CloudIot_Resource_ProjectsLocationsRegistriesGroupsDevicesStates(
			$this,
			$this->serviceName,
			'states',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+name}/states',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'numStates' => [
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
