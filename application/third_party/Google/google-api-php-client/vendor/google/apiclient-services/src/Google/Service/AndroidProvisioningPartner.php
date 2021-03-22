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
 * Service definition for AndroidProvisioningPartner (v1).
 *
 * <p>
 * Automates Android zero-touch enrollment for device resellers, customers, and
 * EMMs.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/zero-touch/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_AndroidProvisioningPartner extends Google_Service
{
	
	
	public $customers;
	public $customers_configurations;
	public $customers_devices;
	public $customers_dpcs;
	public $operations;
	public $partners_customers;
	public $partners_devices;
	
	/**
	 * Constructs the internal representation of the AndroidProvisioningPartner
	 * service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://androiddeviceprovisioning.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'androiddeviceprovisioning';
		
		$this->customers = new Google_Service_AndroidProvisioningPartner_Resource_Customers(
			$this,
			$this->serviceName,
			'customers',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/customers',
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
						],
					],
				],
			]
		);
		$this->customers_configurations = new Google_Service_AndroidProvisioningPartner_Resource_CustomersConfigurations(
			$this,
			$this->serviceName,
			'configurations',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/{+parent}/configurations',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
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
						'path'       => 'v1/{+parent}/configurations',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
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
		$this->customers_devices = new Google_Service_AndroidProvisioningPartner_Resource_CustomersDevices(
			$this,
			$this->serviceName,
			'devices',
			[
				'methods' => [
					'applyConfiguration'     => [
						'path'       => 'v1/{+parent}/devices:applyConfiguration',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                 => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                => [
						'path'       => 'v1/{+parent}/devices',
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
								'type'     => 'string',
							],
						],
					], 'removeConfiguration' => [
						'path'       => 'v1/{+parent}/devices:removeConfiguration',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'unclaim'             => [
						'path'       => 'v1/{+parent}/devices:unclaim',
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
		$this->customers_dpcs = new Google_Service_AndroidProvisioningPartner_Resource_CustomersDpcs(
			$this,
			$this->serviceName,
			'dpcs',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+parent}/dpcs',
						'httpMethod' => 'GET',
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
		$this->operations = new Google_Service_AndroidProvisioningPartner_Resource_Operations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'get' => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
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
		$this->partners_customers = new Google_Service_AndroidProvisioningPartner_Resource_PartnersCustomers(
			$this,
			$this->serviceName,
			'customers',
			[
				'methods' => [
					'create'  => [
						'path'       => 'v1/{+parent}/customers',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v1/partners/{+partnerId}/customers',
						'httpMethod' => 'GET',
						'parameters' => [
							'partnerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->partners_devices = new Google_Service_AndroidProvisioningPartner_Resource_PartnersDevices(
			$this,
			$this->serviceName,
			'devices',
			[
				'methods' => [
					'claim'                  => [
						'path'       => 'v1/partners/{+partnerId}/devices:claim',
						'httpMethod' => 'POST',
						'parameters' => [
							'partnerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'claimAsync'          => [
						'path'       => 'v1/partners/{+partnerId}/devices:claimAsync',
						'httpMethod' => 'POST',
						'parameters' => [
							'partnerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'findByIdentifier'    => [
						'path'       => 'v1/partners/{+partnerId}/devices:findByIdentifier',
						'httpMethod' => 'POST',
						'parameters' => [
							'partnerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'findByOwner'         => [
						'path'       => 'v1/partners/{+partnerId}/devices:findByOwner',
						'httpMethod' => 'POST',
						'parameters' => [
							'partnerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                 => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'metadata'            => [
						'path'       => 'v1/partners/{+metadataOwnerId}/devices/{+deviceId}/metadata',
						'httpMethod' => 'POST',
						'parameters' => [
							'metadataOwnerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'unclaim'             => [
						'path'       => 'v1/partners/{+partnerId}/devices:unclaim',
						'httpMethod' => 'POST',
						'parameters' => [
							'partnerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'unclaimAsync'        => [
						'path'       => 'v1/partners/{+partnerId}/devices:unclaimAsync',
						'httpMethod' => 'POST',
						'parameters' => [
							'partnerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updateMetadataAsync' => [
						'path'       => 'v1/partners/{+partnerId}/devices:updateMetadataAsync',
						'httpMethod' => 'POST',
						'parameters' => [
							'partnerId' => [
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
