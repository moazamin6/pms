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
 * Service definition for Compute (v1).
 *
 * <p>
 * Creates and runs virtual machines on Google Cloud Platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/compute/docs/reference/latest/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Compute extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View and manage your Google Compute Engine resources. */
	const COMPUTE =
		"https://www.googleapis.com/auth/compute";
	/** View your Google Compute Engine resources. */
	const COMPUTE_READONLY =
		"https://www.googleapis.com/auth/compute.readonly";
	/** Manage your data and permissions in Google Cloud Storage. */
	const DEVSTORAGE_FULL_CONTROL =
		"https://www.googleapis.com/auth/devstorage.full_control";
	/** View your data in Google Cloud Storage. */
	const DEVSTORAGE_READ_ONLY =
		"https://www.googleapis.com/auth/devstorage.read_only";
	/** Manage your data in Google Cloud Storage. */
	const DEVSTORAGE_READ_WRITE =
		"https://www.googleapis.com/auth/devstorage.read_write";

	public $acceleratorTypes;
	public $addresses;
	public $autoscalers;
	public $backendBuckets;
	public $backendServices;
	public $diskTypes;
	public $disks;
	public $firewalls;
	public $forwardingRules;
	public $globalAddresses;
	public $globalForwardingRules;
	public $globalOperations;
	public $healthChecks;
	public $httpHealthChecks;
	public $httpsHealthChecks;
	public $images;
	public $instanceGroupManagers;
	public $instanceGroups;
	public $instanceTemplates;
	public $instances;
	public $interconnectAttachments;
	public $interconnectLocations;
	public $interconnects;
	public $licenseCodes;
	public $licenses;
	public $machineTypes;
	public $networks;
	public $projects;
	public $regionAutoscalers;
	public $regionBackendServices;
	public $regionCommitments;
	public $regionDiskTypes;
	public $regionDisks;
	public $regionInstanceGroupManagers;
	public $regionInstanceGroups;
	public $regionOperations;
	public $regions;
	public $routers;
	public $routes;
	public $snapshots;
	public $sslCertificates;
	public $sslPolicies;
	public $subnetworks;
	public $targetHttpProxies;
	public $targetHttpsProxies;
	public $targetInstances;
	public $targetPools;
	public $targetSslProxies;
	public $targetTcpProxies;
	public $targetVpnGateways;
	public $urlMaps;
	public $vpnTunnels;
	public $zoneOperations;
	public $zones;

	/**
	 * Constructs the internal representation of the Compute service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'compute/v1/projects/';
		$this->version = 'v1';
		$this->serviceName = 'compute';

		$this->acceleratorTypes = new Google_Service_Compute_Resource_AcceleratorTypes(
			$this,
			$this->serviceName,
			'acceleratorTypes',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/acceleratorTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/zones/{zone}/acceleratorTypes/{acceleratorType}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'acceleratorType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'        => [
						'path'       => '{project}/zones/{zone}/acceleratorTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->addresses = new Google_Service_Compute_Resource_Addresses(
			$this,
			$this->serviceName,
			'addresses',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/addresses',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => '{project}/regions/{region}/addresses/{address}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'address'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/regions/{region}/addresses/{address}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'address' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'      => [
						'path'       => '{project}/regions/{region}/addresses',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => '{project}/regions/{region}/addresses',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->autoscalers = new Google_Service_Compute_Resource_Autoscalers(
			$this,
			$this->serviceName,
			'autoscalers',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/autoscalers',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => '{project}/zones/{zone}/autoscalers/{autoscaler}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoscaler' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/zones/{zone}/autoscalers/{autoscaler}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoscaler' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'      => [
						'path'       => '{project}/zones/{zone}/autoscalers',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => '{project}/zones/{zone}/autoscalers',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'       => [
						'path'       => '{project}/zones/{zone}/autoscalers',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoscaler' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'      => [
						'path'       => '{project}/zones/{zone}/autoscalers',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoscaler' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->backendBuckets = new Google_Service_Compute_Resource_BackendBuckets(
			$this,
			$this->serviceName,
			'backendBuckets',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/backendBuckets/{backendBucket}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendBucket' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/backendBuckets/{backendBucket}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendBucket' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/backendBuckets',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/backendBuckets',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => '{project}/global/backendBuckets/{backendBucket}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendBucket' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{project}/global/backendBuckets/{backendBucket}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendBucket' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->backendServices = new Google_Service_Compute_Resource_BackendServices(
			$this,
			$this->serviceName,
			'backendServices',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/backendServices',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => '{project}/global/backendServices/{backendService}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendService' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/global/backendServices/{backendService}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendService' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getHealth'   => [
						'path'       => '{project}/global/backendServices/{backendService}/getHealth',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendService' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'      => [
						'path'       => '{project}/global/backendServices',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => '{project}/global/backendServices',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'       => [
						'path'       => '{project}/global/backendServices/{backendService}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendService' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'      => [
						'path'       => '{project}/global/backendServices/{backendService}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendService' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->diskTypes = new Google_Service_Compute_Resource_DiskTypes(
			$this,
			$this->serviceName,
			'diskTypes',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/diskTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/zones/{zone}/diskTypes/{diskType}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'diskType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'        => [
						'path'       => '{project}/zones/{zone}/diskTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->disks = new Google_Service_Compute_Resource_Disks(
			$this,
			$this->serviceName,
			'disks',
			[
				'methods' => [
					'aggregatedList'    => [
						'path'       => '{project}/aggregated/disks',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'createSnapshot' => [
						'path'       => '{project}/zones/{zone}/disks/{disk}/createSnapshot',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'disk'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'guestFlush' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'         => [
						'path'       => '{project}/zones/{zone}/disks/{disk}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'disk'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'            => [
						'path'       => '{project}/zones/{zone}/disks/{disk}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'disk'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'         => [
						'path'       => '{project}/zones/{zone}/disks',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sourceImage' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'           => [
						'path'       => '{project}/zones/{zone}/disks',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'resize'         => [
						'path'       => '{project}/zones/{zone}/disks/{disk}/resize',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'disk'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setLabels'      => [
						'path'       => '{project}/zones/{zone}/disks/{resource}/setLabels',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resource'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->firewalls = new Google_Service_Compute_Resource_Firewalls(
			$this,
			$this->serviceName,
			'firewalls',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/firewalls/{firewall}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'firewall'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/firewalls/{firewall}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'firewall' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/firewalls',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/firewalls',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => '{project}/global/firewalls/{firewall}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'firewall'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{project}/global/firewalls/{firewall}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'firewall'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->forwardingRules = new Google_Service_Compute_Resource_ForwardingRules(
			$this,
			$this->serviceName,
			'forwardingRules',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/forwardingRules',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => '{project}/regions/{region}/forwardingRules/{forwardingRule}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'forwardingRule' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/regions/{region}/forwardingRules/{forwardingRule}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'forwardingRule' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'      => [
						'path'       => '{project}/regions/{region}/forwardingRules',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => '{project}/regions/{region}/forwardingRules',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setTarget'   => [
						'path'       => '{project}/regions/{region}/forwardingRules/{forwardingRule}/setTarget',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'forwardingRule' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->globalAddresses = new Google_Service_Compute_Resource_GlobalAddresses(
			$this,
			$this->serviceName,
			'globalAddresses',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/addresses/{address}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'address'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/addresses/{address}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'address' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/addresses',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/addresses',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->globalForwardingRules = new Google_Service_Compute_Resource_GlobalForwardingRules(
			$this,
			$this->serviceName,
			'globalForwardingRules',
			[
				'methods' => [
					'delete'       => [
						'path'       => '{project}/global/forwardingRules/{forwardingRule}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'forwardingRule' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'       => [
						'path'       => '{project}/global/forwardingRules/{forwardingRule}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'forwardingRule' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'    => [
						'path'       => '{project}/global/forwardingRules',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'      => [
						'path'       => '{project}/global/forwardingRules',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setTarget' => [
						'path'       => '{project}/global/forwardingRules/{forwardingRule}/setTarget',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'forwardingRule' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->globalOperations = new Google_Service_Compute_Resource_GlobalOperations(
			$this,
			$this->serviceName,
			'globalOperations',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => '{project}/global/operations/{operation}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'operation' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'         => [
						'path'       => '{project}/global/operations/{operation}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'operation' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'        => [
						'path'       => '{project}/global/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->healthChecks = new Google_Service_Compute_Resource_HealthChecks(
			$this,
			$this->serviceName,
			'healthChecks',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/healthChecks/{healthCheck}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'healthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/healthChecks/{healthCheck}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'healthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/healthChecks',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/healthChecks',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => '{project}/global/healthChecks/{healthCheck}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'healthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{project}/global/healthChecks/{healthCheck}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'healthCheck' => [
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
		$this->httpHealthChecks = new Google_Service_Compute_Resource_HttpHealthChecks(
			$this,
			$this->serviceName,
			'httpHealthChecks',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/httpHealthChecks/{httpHealthCheck}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'httpHealthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/httpHealthChecks/{httpHealthCheck}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'httpHealthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/httpHealthChecks',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/httpHealthChecks',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => '{project}/global/httpHealthChecks/{httpHealthCheck}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'httpHealthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{project}/global/httpHealthChecks/{httpHealthCheck}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'httpHealthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->httpsHealthChecks = new Google_Service_Compute_Resource_HttpsHealthChecks(
			$this,
			$this->serviceName,
			'httpsHealthChecks',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/httpsHealthChecks/{httpsHealthCheck}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'httpsHealthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/httpsHealthChecks/{httpsHealthCheck}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'httpsHealthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/httpsHealthChecks',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/httpsHealthChecks',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => '{project}/global/httpsHealthChecks/{httpsHealthCheck}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'httpsHealthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{project}/global/httpsHealthChecks/{httpsHealthCheck}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'httpsHealthCheck' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->images = new Google_Service_Compute_Resource_Images(
			$this,
			$this->serviceName,
			'images',
			[
				'methods' => [
					'delete'           => [
						'path'       => '{project}/global/images/{image}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'image'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'deprecate'     => [
						'path'       => '{project}/global/images/{image}/deprecate',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'image'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'           => [
						'path'       => '{project}/global/images/{image}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'image'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getFromFamily' => [
						'path'       => '{project}/global/images/family/{family}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'family'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'        => [
						'path'       => '{project}/global/images',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'forceCreate' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'          => [
						'path'       => '{project}/global/images',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setLabels'     => [
						'path'       => '{project}/global/images/{resource}/setLabels',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
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
		$this->instanceGroupManagers = new Google_Service_Compute_Resource_InstanceGroupManagers(
			$this,
			$this->serviceName,
			'instanceGroupManagers',
			[
				'methods' => [
					'abandonInstances'        => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/abandonInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'aggregatedList'       => [
						'path'       => '{project}/aggregated/instanceGroupManagers',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'               => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'deleteInstances'      => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/deleteInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                  => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'               => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'                 => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listManagedInstances' => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/listManagedInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'           => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'order_by'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'recreateInstances'    => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/recreateInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'resize'               => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/resize',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'size'                 => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setInstanceTemplate'  => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/setInstanceTemplate',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setTargetPools'       => [
						'path'       => '{project}/zones/{zone}/instanceGroupManagers/{instanceGroupManager}/setTargetPools',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->instanceGroups = new Google_Service_Compute_Resource_InstanceGroups(
			$this,
			$this->serviceName,
			'instanceGroups',
			[
				'methods' => [
					'addInstances'       => [
						'path'       => '{project}/zones/{zone}/instanceGroups/{instanceGroup}/addInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroup' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'aggregatedList'  => [
						'path'       => '{project}/aggregated/instanceGroups',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'          => [
						'path'       => '{project}/zones/{zone}/instanceGroups/{instanceGroup}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroup' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'             => [
						'path'       => '{project}/zones/{zone}/instanceGroups/{instanceGroup}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroup' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'          => [
						'path'       => '{project}/zones/{zone}/instanceGroups',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'            => [
						'path'       => '{project}/zones/{zone}/instanceGroups',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listInstances'   => [
						'path'       => '{project}/zones/{zone}/instanceGroups/{instanceGroup}/listInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroup' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'removeInstances' => [
						'path'       => '{project}/zones/{zone}/instanceGroups/{instanceGroup}/removeInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroup' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setNamedPorts'   => [
						'path'       => '{project}/zones/{zone}/instanceGroups/{instanceGroup}/setNamedPorts',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroup' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->instanceTemplates = new Google_Service_Compute_Resource_InstanceTemplates(
			$this,
			$this->serviceName,
			'instanceTemplates',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/instanceTemplates/{instanceTemplate}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceTemplate' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/instanceTemplates/{instanceTemplate}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceTemplate' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/instanceTemplates',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/instanceTemplates',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->instances = new Google_Service_Compute_Resource_Instances(
			$this,
			$this->serviceName,
			'instances',
			[
				'methods' => [
					'addAccessConfig'           => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/addAccessConfig',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'networkInterface' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'aggregatedList'         => [
						'path'       => '{project}/aggregated/instances',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'attachDisk'             => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/attachDisk',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'forceAttach' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'                 => [
						'path'       => '{project}/zones/{zone}/instances/{instance}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'deleteAccessConfig'     => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/deleteAccessConfig',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accessConfig'     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'networkInterface' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'detachDisk'             => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/detachDisk',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceName' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                    => [
						'path'       => '{project}/zones/{zone}/instances/{instance}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getSerialPortOutput'    => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/serialPort',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'port'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'start'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert'                 => [
						'path'       => '{project}/zones/{zone}/instances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'                => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'                   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sourceInstanceTemplate' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'                   => [
						'path'       => '{project}/zones/{zone}/instances',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listReferrers'          => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/referrers',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'reset'                  => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/reset',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setDeletionProtection'  => [
						'path'       => '{project}/zones/{zone}/instances/{resource}/setDeletionProtection',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resource'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deletionProtection' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'requestId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setDiskAutoDelete'      => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/setDiskAutoDelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoDelete' => [
								'location' => 'query',
								'type'     => 'boolean',
								'required' => true,
							],
							'deviceName' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setLabels'              => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/setLabels',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setMachineResources'    => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/setMachineResources',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setMachineType'         => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/setMachineType',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setMetadata'            => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/setMetadata',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setMinCpuPlatform'      => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/setMinCpuPlatform',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setScheduling'          => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/setScheduling',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setServiceAccount'      => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/setServiceAccount',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setTags'                => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/setTags',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'start'                  => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/start',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'startWithEncryptionKey' => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/startWithEncryptionKey',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'stop'                   => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/stop',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'updateAccessConfig'     => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/updateAccessConfig',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'networkInterface' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'updateNetworkInterface' => [
						'path'       => '{project}/zones/{zone}/instances/{instance}/updateNetworkInterface',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'networkInterface' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->interconnectAttachments = new Google_Service_Compute_Resource_InterconnectAttachments(
			$this,
			$this->serviceName,
			'interconnectAttachments',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/interconnectAttachments',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => '{project}/regions/{region}/interconnectAttachments/{interconnectAttachment}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'                => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'interconnectAttachment' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'              => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/regions/{region}/interconnectAttachments/{interconnectAttachment}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'                => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'interconnectAttachment' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'      => [
						'path'       => '{project}/regions/{region}/interconnectAttachments',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => '{project}/regions/{region}/interconnectAttachments',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'       => [
						'path'       => '{project}/regions/{region}/interconnectAttachments/{interconnectAttachment}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'                => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'interconnectAttachment' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'              => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->interconnectLocations = new Google_Service_Compute_Resource_InterconnectLocations(
			$this,
			$this->serviceName,
			'interconnectLocations',
			[
				'methods' => [
					'get'     => [
						'path'       => '{project}/global/interconnectLocations/{interconnectLocation}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'interconnectLocation' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{project}/global/interconnectLocations',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->interconnects = new Google_Service_Compute_Resource_Interconnects(
			$this,
			$this->serviceName,
			'interconnects',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/interconnects/{interconnect}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'interconnect' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/interconnects/{interconnect}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'interconnect' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/interconnects',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/interconnects',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => '{project}/global/interconnects/{interconnect}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'interconnect' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->licenseCodes = new Google_Service_Compute_Resource_LicenseCodes(
			$this,
			$this->serviceName,
			'licenseCodes',
			[
				'methods' => [
					'get'                   => [
						'path'       => '{project}/global/licenseCodes/{licenseCode}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'licenseCode' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'testIamPermissions' => [
						'path'       => '{project}/global/licenseCodes/{resource}/testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
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
		$this->licenses = new Google_Service_Compute_Resource_Licenses(
			$this,
			$this->serviceName,
			'licenses',
			[
				'methods' => [
					'delete'                => [
						'path'       => '{project}/global/licenses/{license}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'license'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                => [
						'path'       => '{project}/global/licenses/{license}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'license' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'             => [
						'path'       => '{project}/global/licenses',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'               => [
						'path'       => '{project}/global/licenses',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'testIamPermissions' => [
						'path'       => '{project}/global/licenses/{resource}/testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
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
		$this->machineTypes = new Google_Service_Compute_Resource_MachineTypes(
			$this,
			$this->serviceName,
			'machineTypes',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/machineTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/zones/{zone}/machineTypes/{machineType}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'machineType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'        => [
						'path'       => '{project}/zones/{zone}/machineTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->networks = new Google_Service_Compute_Resource_Networks(
			$this,
			$this->serviceName,
			'networks',
			[
				'methods' => [
					'addPeering'            => [
						'path'       => '{project}/global/networks/{network}/addPeering',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'network'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'             => [
						'path'       => '{project}/global/networks/{network}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'network'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                => [
						'path'       => '{project}/global/networks/{network}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'network' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'             => [
						'path'       => '{project}/global/networks',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'               => [
						'path'       => '{project}/global/networks',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'              => [
						'path'       => '{project}/global/networks/{network}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'network'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'removePeering'      => [
						'path'       => '{project}/global/networks/{network}/removePeering',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'network'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'switchToCustomMode' => [
						'path'       => '{project}/global/networks/{network}/switchToCustomMode',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'network'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects = new Google_Service_Compute_Resource_Projects(
			$this,
			$this->serviceName,
			'projects',
			[
				'methods' => [
					'disableXpnHost'               => [
						'path'       => '{project}/disableXpnHost',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'disableXpnResource'        => [
						'path'       => '{project}/disableXpnResource',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'enableXpnHost'             => [
						'path'       => '{project}/enableXpnHost',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'enableXpnResource'         => [
						'path'       => '{project}/enableXpnResource',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                       => [
						'path'       => '{project}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getXpnHost'                => [
						'path'       => '{project}/getXpnHost',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getXpnResources'           => [
						'path'       => '{project}/getXpnResources',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'order_by'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listXpnHosts'              => [
						'path'       => '{project}/listXpnHosts',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'order_by'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'moveDisk'                  => [
						'path'       => '{project}/moveDisk',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'moveInstance'              => [
						'path'       => '{project}/moveInstance',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setCommonInstanceMetadata' => [
						'path'       => '{project}/setCommonInstanceMetadata',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setUsageExportBucket'      => [
						'path'       => '{project}/setUsageExportBucket',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->regionAutoscalers = new Google_Service_Compute_Resource_RegionAutoscalers(
			$this,
			$this->serviceName,
			'regionAutoscalers',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/regions/{region}/autoscalers/{autoscaler}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoscaler' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/regions/{region}/autoscalers/{autoscaler}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoscaler' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/regions/{region}/autoscalers',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/regions/{region}/autoscalers',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => '{project}/regions/{region}/autoscalers',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoscaler' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{project}/regions/{region}/autoscalers',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoscaler' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->regionBackendServices = new Google_Service_Compute_Resource_RegionBackendServices(
			$this,
			$this->serviceName,
			'regionBackendServices',
			[
				'methods' => [
					'delete'       => [
						'path'       => '{project}/regions/{region}/backendServices/{backendService}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendService' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'       => [
						'path'       => '{project}/regions/{region}/backendServices/{backendService}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendService' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getHealth' => [
						'path'       => '{project}/regions/{region}/backendServices/{backendService}/getHealth',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendService' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'    => [
						'path'       => '{project}/regions/{region}/backendServices',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'      => [
						'path'       => '{project}/regions/{region}/backendServices',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'     => [
						'path'       => '{project}/regions/{region}/backendServices/{backendService}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendService' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'    => [
						'path'       => '{project}/regions/{region}/backendServices/{backendService}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'backendService' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->regionCommitments = new Google_Service_Compute_Resource_RegionCommitments(
			$this,
			$this->serviceName,
			'regionCommitments',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/commitments',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/regions/{region}/commitments/{commitment}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'commitment' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'      => [
						'path'       => '{project}/regions/{region}/commitments',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => '{project}/regions/{region}/commitments',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->regionDiskTypes = new Google_Service_Compute_Resource_RegionDiskTypes(
			$this,
			$this->serviceName,
			'regionDiskTypes',
			[
				'methods' => [
					'get'     => [
						'path'       => '{project}/regions/{region}/diskTypes/{diskType}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'diskType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{project}/regions/{region}/diskTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->regionDisks = new Google_Service_Compute_Resource_RegionDisks(
			$this,
			$this->serviceName,
			'regionDisks',
			[
				'methods' => [
					'createSnapshot'        => [
						'path'       => '{project}/regions/{region}/disks/{disk}/createSnapshot',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'disk'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'             => [
						'path'       => '{project}/regions/{region}/disks/{disk}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'disk'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                => [
						'path'       => '{project}/regions/{region}/disks/{disk}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'disk'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'             => [
						'path'       => '{project}/regions/{region}/disks',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sourceImage' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'               => [
						'path'       => '{project}/regions/{region}/disks',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'resize'             => [
						'path'       => '{project}/regions/{region}/disks/{disk}/resize',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'disk'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setLabels'          => [
						'path'       => '{project}/regions/{region}/disks/{resource}/setLabels',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resource'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'testIamPermissions' => [
						'path'       => '{project}/regions/{region}/disks/{resource}/testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
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
		$this->regionInstanceGroupManagers = new Google_Service_Compute_Resource_RegionInstanceGroupManagers(
			$this,
			$this->serviceName,
			'regionInstanceGroupManagers',
			[
				'methods' => [
					'abandonInstances'        => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers/{instanceGroupManager}/abandonInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'               => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers/{instanceGroupManager}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'deleteInstances'      => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers/{instanceGroupManager}/deleteInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                  => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers/{instanceGroupManager}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'               => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'                 => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listManagedInstances' => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers/{instanceGroupManager}/listManagedInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'           => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'order_by'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'recreateInstances'    => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers/{instanceGroupManager}/recreateInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'resize'               => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers/{instanceGroupManager}/resize',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'size'                 => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setInstanceTemplate'  => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers/{instanceGroupManager}/setInstanceTemplate',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setTargetPools'       => [
						'path'       => '{project}/regions/{region}/instanceGroupManagers/{instanceGroupManager}/setTargetPools',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroupManager' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->regionInstanceGroups = new Google_Service_Compute_Resource_RegionInstanceGroups(
			$this,
			$this->serviceName,
			'regionInstanceGroups',
			[
				'methods' => [
					'get'              => [
						'path'       => '{project}/regions/{region}/instanceGroups/{instanceGroup}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroup' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'          => [
						'path'       => '{project}/regions/{region}/instanceGroups',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listInstances' => [
						'path'       => '{project}/regions/{region}/instanceGroups/{instanceGroup}/listInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroup' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setNamedPorts' => [
						'path'       => '{project}/regions/{region}/instanceGroups/{instanceGroup}/setNamedPorts',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instanceGroup' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->regionOperations = new Google_Service_Compute_Resource_RegionOperations(
			$this,
			$this->serviceName,
			'regionOperations',
			[
				'methods' => [
					'delete'  => [
						'path'       => '{project}/regions/{region}/operations/{operation}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'operation' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => '{project}/regions/{region}/operations/{operation}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'operation' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{project}/regions/{region}/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->regions = new Google_Service_Compute_Resource_Regions(
			$this,
			$this->serviceName,
			'regions',
			[
				'methods' => [
					'get'     => [
						'path'       => '{project}/regions/{region}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{project}/regions',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->routers = new Google_Service_Compute_Resource_Routers(
			$this,
			$this->serviceName,
			'routers',
			[
				'methods' => [
					'aggregatedList'     => [
						'path'       => '{project}/aggregated/routers',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'          => [
						'path'       => '{project}/regions/{region}/routers/{router}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'router'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'             => [
						'path'       => '{project}/regions/{region}/routers/{router}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'router'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getRouterStatus' => [
						'path'       => '{project}/regions/{region}/routers/{router}/getRouterStatus',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'router'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'          => [
						'path'       => '{project}/regions/{region}/routers',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'            => [
						'path'       => '{project}/regions/{region}/routers',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'           => [
						'path'       => '{project}/regions/{region}/routers/{router}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'router'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'preview'         => [
						'path'       => '{project}/regions/{region}/routers/{router}/preview',
						'httpMethod' => 'POST',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'router'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'          => [
						'path'       => '{project}/regions/{region}/routers/{router}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'router'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->routes = new Google_Service_Compute_Resource_Routes(
			$this,
			$this->serviceName,
			'routes',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/routes/{route}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'route'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/routes/{route}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'route'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/routes',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/routes',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->snapshots = new Google_Service_Compute_Resource_Snapshots(
			$this,
			$this->serviceName,
			'snapshots',
			[
				'methods' => [
					'delete'       => [
						'path'       => '{project}/global/snapshots/{snapshot}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'snapshot'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'       => [
						'path'       => '{project}/global/snapshots/{snapshot}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'snapshot' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'      => [
						'path'       => '{project}/global/snapshots',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setLabels' => [
						'path'       => '{project}/global/snapshots/{resource}/setLabels',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
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
		$this->sslCertificates = new Google_Service_Compute_Resource_SslCertificates(
			$this,
			$this->serviceName,
			'sslCertificates',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/sslCertificates/{sslCertificate}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sslCertificate' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/sslCertificates/{sslCertificate}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sslCertificate' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/sslCertificates',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/sslCertificates',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->sslPolicies = new Google_Service_Compute_Resource_SslPolicies(
			$this,
			$this->serviceName,
			'sslPolicies',
			[
				'methods' => [
					'delete'                   => [
						'path'       => '{project}/global/sslPolicies/{sslPolicy}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sslPolicy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                   => [
						'path'       => '{project}/global/sslPolicies/{sslPolicy}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sslPolicy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'                => [
						'path'       => '{project}/global/sslPolicies',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'                  => [
						'path'       => '{project}/global/sslPolicies',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listAvailableFeatures' => [
						'path'       => '{project}/global/sslPolicies/listAvailableFeatures',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'                 => [
						'path'       => '{project}/global/sslPolicies/{sslPolicy}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sslPolicy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->subnetworks = new Google_Service_Compute_Resource_Subnetworks(
			$this,
			$this->serviceName,
			'subnetworks',
			[
				'methods' => [
					'aggregatedList'              => [
						'path'       => '{project}/aggregated/subnetworks',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'                   => [
						'path'       => '{project}/regions/{region}/subnetworks/{subnetwork}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subnetwork' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'expandIpCidrRange'        => [
						'path'       => '{project}/regions/{region}/subnetworks/{subnetwork}/expandIpCidrRange',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subnetwork' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                      => [
						'path'       => '{project}/regions/{region}/subnetworks/{subnetwork}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subnetwork' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'                   => [
						'path'       => '{project}/regions/{region}/subnetworks',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'                     => [
						'path'       => '{project}/regions/{region}/subnetworks',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'                    => [
						'path'       => '{project}/regions/{region}/subnetworks/{subnetwork}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subnetwork' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setPrivateIpGoogleAccess' => [
						'path'       => '{project}/regions/{region}/subnetworks/{subnetwork}/setPrivateIpGoogleAccess',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subnetwork' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->targetHttpProxies = new Google_Service_Compute_Resource_TargetHttpProxies(
			$this,
			$this->serviceName,
			'targetHttpProxies',
			[
				'methods' => [
					'delete'       => [
						'path'       => '{project}/global/targetHttpProxies/{targetHttpProxy}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetHttpProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'       => [
						'path'       => '{project}/global/targetHttpProxies/{targetHttpProxy}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetHttpProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'    => [
						'path'       => '{project}/global/targetHttpProxies',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'      => [
						'path'       => '{project}/global/targetHttpProxies',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setUrlMap' => [
						'path'       => '{project}/targetHttpProxies/{targetHttpProxy}/setUrlMap',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetHttpProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->targetHttpsProxies = new Google_Service_Compute_Resource_TargetHttpsProxies(
			$this,
			$this->serviceName,
			'targetHttpsProxies',
			[
				'methods' => [
					'delete'                => [
						'path'       => '{project}/global/targetHttpsProxies/{targetHttpsProxy}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetHttpsProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                => [
						'path'       => '{project}/global/targetHttpsProxies/{targetHttpsProxy}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetHttpsProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'             => [
						'path'       => '{project}/global/targetHttpsProxies',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'               => [
						'path'       => '{project}/global/targetHttpsProxies',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setQuicOverride'    => [
						'path'       => '{project}/global/targetHttpsProxies/{targetHttpsProxy}/setQuicOverride',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetHttpsProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setSslCertificates' => [
						'path'       => '{project}/targetHttpsProxies/{targetHttpsProxy}/setSslCertificates',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetHttpsProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setSslPolicy'       => [
						'path'       => '{project}/global/targetHttpsProxies/{targetHttpsProxy}/setSslPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetHttpsProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setUrlMap'          => [
						'path'       => '{project}/targetHttpsProxies/{targetHttpsProxy}/setUrlMap',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetHttpsProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->targetInstances = new Google_Service_Compute_Resource_TargetInstances(
			$this,
			$this->serviceName,
			'targetInstances',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/targetInstances',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => '{project}/zones/{zone}/targetInstances/{targetInstance}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetInstance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/zones/{zone}/targetInstances/{targetInstance}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetInstance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'      => [
						'path'       => '{project}/zones/{zone}/targetInstances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => '{project}/zones/{zone}/targetInstances',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->targetPools = new Google_Service_Compute_Resource_TargetPools(
			$this,
			$this->serviceName,
			'targetPools',
			[
				'methods' => [
					'addHealthCheck'       => [
						'path'       => '{project}/regions/{region}/targetPools/{targetPool}/addHealthCheck',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetPool' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'addInstance'       => [
						'path'       => '{project}/regions/{region}/targetPools/{targetPool}/addInstance',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetPool' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'aggregatedList'    => [
						'path'       => '{project}/aggregated/targetPools',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'            => [
						'path'       => '{project}/regions/{region}/targetPools/{targetPool}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetPool' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'               => [
						'path'       => '{project}/regions/{region}/targetPools/{targetPool}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetPool' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getHealth'         => [
						'path'       => '{project}/regions/{region}/targetPools/{targetPool}/getHealth',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetPool' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'            => [
						'path'       => '{project}/regions/{region}/targetPools',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'              => [
						'path'       => '{project}/regions/{region}/targetPools',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'removeHealthCheck' => [
						'path'       => '{project}/regions/{region}/targetPools/{targetPool}/removeHealthCheck',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetPool' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'removeInstance'    => [
						'path'       => '{project}/regions/{region}/targetPools/{targetPool}/removeInstance',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetPool' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setBackup'         => [
						'path'       => '{project}/regions/{region}/targetPools/{targetPool}/setBackup',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetPool'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'failoverRatio' => [
								'location' => 'query',
								'type'     => 'number',
							],
							'requestId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->targetSslProxies = new Google_Service_Compute_Resource_TargetSslProxies(
			$this,
			$this->serviceName,
			'targetSslProxies',
			[
				'methods' => [
					'delete'                => [
						'path'       => '{project}/global/targetSslProxies/{targetSslProxy}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetSslProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                => [
						'path'       => '{project}/global/targetSslProxies/{targetSslProxy}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetSslProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'             => [
						'path'       => '{project}/global/targetSslProxies',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'               => [
						'path'       => '{project}/global/targetSslProxies',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setBackendService'  => [
						'path'       => '{project}/global/targetSslProxies/{targetSslProxy}/setBackendService',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetSslProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setProxyHeader'     => [
						'path'       => '{project}/global/targetSslProxies/{targetSslProxy}/setProxyHeader',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetSslProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setSslCertificates' => [
						'path'       => '{project}/global/targetSslProxies/{targetSslProxy}/setSslCertificates',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetSslProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setSslPolicy'       => [
						'path'       => '{project}/global/targetSslProxies/{targetSslProxy}/setSslPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetSslProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->targetTcpProxies = new Google_Service_Compute_Resource_TargetTcpProxies(
			$this,
			$this->serviceName,
			'targetTcpProxies',
			[
				'methods' => [
					'delete'               => [
						'path'       => '{project}/global/targetTcpProxies/{targetTcpProxy}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetTcpProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'               => [
						'path'       => '{project}/global/targetTcpProxies/{targetTcpProxy}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetTcpProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'            => [
						'path'       => '{project}/global/targetTcpProxies',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'              => [
						'path'       => '{project}/global/targetTcpProxies',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setBackendService' => [
						'path'       => '{project}/global/targetTcpProxies/{targetTcpProxy}/setBackendService',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetTcpProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setProxyHeader'    => [
						'path'       => '{project}/global/targetTcpProxies/{targetTcpProxy}/setProxyHeader',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetTcpProxy' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->targetVpnGateways = new Google_Service_Compute_Resource_TargetVpnGateways(
			$this,
			$this->serviceName,
			'targetVpnGateways',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/targetVpnGateways',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => '{project}/regions/{region}/targetVpnGateways/{targetVpnGateway}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetVpnGateway' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/regions/{region}/targetVpnGateways/{targetVpnGateway}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetVpnGateway' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'      => [
						'path'       => '{project}/regions/{region}/targetVpnGateways',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => '{project}/regions/{region}/targetVpnGateways',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->urlMaps = new Google_Service_Compute_Resource_UrlMaps(
			$this,
			$this->serviceName,
			'urlMaps',
			[
				'methods' => [
					'delete'             => [
						'path'       => '{project}/global/urlMaps/{urlMap}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'urlMap'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'             => [
						'path'       => '{project}/global/urlMaps/{urlMap}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'urlMap'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'          => [
						'path'       => '{project}/global/urlMaps',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'invalidateCache' => [
						'path'       => '{project}/global/urlMaps/{urlMap}/invalidateCache',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'urlMap'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'            => [
						'path'       => '{project}/global/urlMaps',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'           => [
						'path'       => '{project}/global/urlMaps/{urlMap}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'urlMap'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'          => [
						'path'       => '{project}/global/urlMaps/{urlMap}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'urlMap'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'validate'        => [
						'path'       => '{project}/global/urlMaps/{urlMap}/validate',
						'httpMethod' => 'POST',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'urlMap'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->vpnTunnels = new Google_Service_Compute_Resource_VpnTunnels(
			$this,
			$this->serviceName,
			'vpnTunnels',
			[
				'methods' => [
					'aggregatedList' => [
						'path'       => '{project}/aggregated/vpnTunnels',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'      => [
						'path'       => '{project}/regions/{region}/vpnTunnels/{vpnTunnel}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'vpnTunnel' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'         => [
						'path'       => '{project}/regions/{region}/vpnTunnels/{vpnTunnel}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'vpnTunnel' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'      => [
						'path'       => '{project}/regions/{region}/vpnTunnels',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'        => [
						'path'       => '{project}/regions/{region}/vpnTunnels',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'region'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->zoneOperations = new Google_Service_Compute_Resource_ZoneOperations(
			$this,
			$this->serviceName,
			'zoneOperations',
			[
				'methods' => [
					'delete'  => [
						'path'       => '{project}/zones/{zone}/operations/{operation}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'operation' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => '{project}/zones/{zone}/operations/{operation}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'operation' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{project}/zones/{zone}/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->zones = new Google_Service_Compute_Resource_Zones(
			$this,
			$this->serviceName,
			'zones',
			[
				'methods' => [
					'get'     => [
						'path'       => '{project}/zones/{zone}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{project}/zones',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
	}
}
