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
 * Service definition for Appengine (v1).
 *
 * <p>
 * The App Engine Admin API enables developers to provision and manage their App
 * Engine applications.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/appengine/docs/admin-api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Appengine extends Google_Service
{
	/** View and manage your applications deployed on Google App Engine. */
	const APPENGINE_ADMIN =
		"https://www.googleapis.com/auth/appengine.admin";
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";
	
	public $apps;
	public $apps_authorizedCertificates;
	public $apps_authorizedDomains;
	public $apps_domainMappings;
	public $apps_firewall_ingressRules;
	public $apps_locations;
	public $apps_operations;
	public $apps_services;
	public $apps_services_versions;
	public $apps_services_versions_instances;
	
	/**
	 * Constructs the internal representation of the Appengine service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://appengine.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'appengine';
		
		$this->apps = new Google_Service_Appengine_Resource_Apps(
			$this,
			$this->serviceName,
			'apps',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/apps',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'    => [
						'path'       => 'v1/apps/{appsId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'v1/apps/{appsId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'appsId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'repair' => [
						'path'       => 'v1/apps/{appsId}:repair',
						'httpMethod' => 'POST',
						'parameters' => [
							'appsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->apps_authorizedCertificates = new Google_Service_Appengine_Resource_AppsAuthorizedCertificates(
			$this,
			$this->serviceName,
			'authorizedCertificates',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/apps/{appsId}/authorizedCertificates',
						'httpMethod' => 'POST',
						'parameters' => [
							'appsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/apps/{appsId}/authorizedCertificates/{authorizedCertificatesId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'appsId'                   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'authorizedCertificatesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/apps/{appsId}/authorizedCertificates/{authorizedCertificatesId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'                   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'authorizedCertificatesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'view'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'v1/apps/{appsId}/authorizedCertificates',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'v1/apps/{appsId}/authorizedCertificates/{authorizedCertificatesId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'appsId'                   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'authorizedCertificatesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'               => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->apps_authorizedDomains = new Google_Service_Appengine_Resource_AppsAuthorizedDomains(
			$this,
			$this->serviceName,
			'authorizedDomains',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/apps/{appsId}/authorizedDomains',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'    => [
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
		$this->apps_domainMappings = new Google_Service_Appengine_Resource_AppsDomainMappings(
			$this,
			$this->serviceName,
			'domainMappings',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/apps/{appsId}/domainMappings',
						'httpMethod' => 'POST',
						'parameters' => [
							'appsId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'overrideStrategy' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete' => [
						'path'       => 'v1/apps/{appsId}/domainMappings/{domainMappingsId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'appsId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'domainMappingsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/apps/{appsId}/domainMappings/{domainMappingsId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'domainMappingsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/apps/{appsId}/domainMappings',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'    => [
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
						'path'       => 'v1/apps/{appsId}/domainMappings/{domainMappingsId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'appsId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'domainMappingsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->apps_firewall_ingressRules = new Google_Service_Appengine_Resource_AppsFirewallIngressRules(
			$this,
			$this->serviceName,
			'ingressRules',
			[
				'methods' => [
					'batchUpdate' => [
						'path'       => 'v1/apps/{appsId}/firewall/ingressRules:batchUpdate',
						'httpMethod' => 'POST',
						'parameters' => [
							'appsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'   => [
						'path'       => 'v1/apps/{appsId}/firewall/ingressRules',
						'httpMethod' => 'POST',
						'parameters' => [
							'appsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'   => [
						'path'       => 'v1/apps/{appsId}/firewall/ingressRules/{ingressRulesId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'appsId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'ingressRulesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'      => [
						'path'       => 'v1/apps/{appsId}/firewall/ingressRules/{ingressRulesId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'ingressRulesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'     => [
						'path'       => 'v1/apps/{appsId}/firewall/ingressRules',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'matchingAddress' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'        => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'patch'    => [
						'path'       => 'v1/apps/{appsId}/firewall/ingressRules/{ingressRulesId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'appsId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'ingressRulesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->apps_locations = new Google_Service_Appengine_Resource_AppsLocations(
			$this,
			$this->serviceName,
			'locations',
			[
				'methods' => [
					'get'     => [
						'path'       => 'v1/apps/{appsId}/locations/{locationsId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'locationsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v1/apps/{appsId}/locations',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'    => [
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
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->apps_operations = new Google_Service_Appengine_Resource_AppsOperations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'get'     => [
						'path'       => 'v1/apps/{appsId}/operations/{operationsId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'operationsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v1/apps/{appsId}/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'    => [
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
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->apps_services = new Google_Service_Appengine_Resource_AppsServices(
			$this,
			$this->serviceName,
			'services',
			[
				'methods' => [
					'delete'   => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'appsId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'   => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'  => [
						'path'       => 'v1/apps/{appsId}/services',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'    => [
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
					], 'patch' => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'appsId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'migrateTraffic' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->apps_services_versions = new Google_Service_Appengine_Resource_AppsServicesVersions(
			$this,
			$this->serviceName,
			'versions',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}/versions',
						'httpMethod' => 'POST',
						'parameters' => [
							'appsId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}/versions/{versionsId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'appsId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'versionsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}/versions/{versionsId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'versionsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'view'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}/versions',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'view'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}/versions/{versionsId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'appsId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'versionsId' => [
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
		$this->apps_services_versions_instances = new Google_Service_Appengine_Resource_AppsServicesVersionsInstances(
			$this,
			$this->serviceName,
			'instances',
			[
				'methods' => [
					'debug'     => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}/versions/{versionsId}/instances/{instancesId}:debug',
						'httpMethod' => 'POST',
						'parameters' => [
							'appsId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'versionsId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instancesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}/versions/{versionsId}/instances/{instancesId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'appsId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'versionsId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instancesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}/versions/{versionsId}/instances/{instancesId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'versionsId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instancesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/apps/{appsId}/services/{servicesId}/versions/{versionsId}/instances',
						'httpMethod' => 'GET',
						'parameters' => [
							'appsId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'servicesId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'versionsId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'   => [
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
