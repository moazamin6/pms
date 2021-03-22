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
 * Service definition for Dns (v1).
 *
 * <p>
 * Configures and serves authoritative DNS records.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/cloud-dns" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Dns extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";
	/** View your DNS records hosted by Google Cloud DNS. */
	const NDEV_CLOUDDNS_READONLY =
		"https://www.googleapis.com/auth/ndev.clouddns.readonly";
	/** View and manage your DNS records hosted by Google Cloud DNS. */
	const NDEV_CLOUDDNS_READWRITE =
		"https://www.googleapis.com/auth/ndev.clouddns.readwrite";

	public $changes;
	public $dnsKeys;
	public $managedZoneOperations;
	public $managedZones;
	public $projects;
	public $resourceRecordSets;

	/**
	 * Constructs the internal representation of the Dns service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'dns/v1/projects/';
		$this->version = 'v1';
		$this->serviceName = 'dns';

		$this->changes = new Google_Service_Dns_Resource_Changes(
			$this,
			$this->serviceName,
			'changes',
			[
				'methods' => [
					'create'  => [
						'path'       => '{project}/managedZones/{managedZone}/changes',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientOperationId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'  => [
						'path'       => '{project}/managedZones/{managedZone}/changes/{changeId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'changeId'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientOperationId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list' => [
						'path'       => '{project}/managedZones/{managedZone}/changes',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sortBy'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sortOrder'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->dnsKeys = new Google_Service_Dns_Resource_DnsKeys(
			$this,
			$this->serviceName,
			'dnsKeys',
			[
				'methods' => [
					'get'     => [
						'path'       => '{project}/managedZones/{managedZone}/dnsKeys/{dnsKeyId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dnsKeyId'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientOperationId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'digestType'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list' => [
						'path'       => '{project}/managedZones/{managedZone}/dnsKeys',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'digestType'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->managedZoneOperations = new Google_Service_Dns_Resource_ManagedZoneOperations(
			$this,
			$this->serviceName,
			'managedZoneOperations',
			[
				'methods' => [
					'get'     => [
						'path'       => '{project}/managedZones/{managedZone}/operations/{operation}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'operation'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientOperationId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list' => [
						'path'       => '{project}/managedZones/{managedZone}/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sortBy'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->managedZones = new Google_Service_Dns_Resource_ManagedZones(
			$this,
			$this->serviceName,
			'managedZones',
			[
				'methods' => [
					'create'    => [
						'path'       => '{project}/managedZones',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientOperationId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete' => [
						'path'       => '{project}/managedZones/{managedZone}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientOperationId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => '{project}/managedZones/{managedZone}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientOperationId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{project}/managedZones',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dnsName'    => [
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
						'path'       => '{project}/managedZones/{managedZone}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientOperationId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{project}/managedZones/{managedZone}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientOperationId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects = new Google_Service_Dns_Resource_Projects(
			$this,
			$this->serviceName,
			'projects',
			[
				'methods' => [
					'get' => [
						'path'       => '{project}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientOperationId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->resourceRecordSets = new Google_Service_Dns_Resource_ResourceRecordSets(
			$this,
			$this->serviceName,
			'resourceRecordSets',
			[
				'methods' => [
					'list' => [
						'path'       => '{project}/managedZones/{managedZone}/rrsets',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedZone' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'name'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'type'        => [
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
