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
 * Service definition for Autoscaler (v1beta2).
 *
 * <p>
 * The Google Compute Engine Autoscaler API provides autoscaling for groups of
 * Cloud VMs.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="http://developers.google.com/compute/docs/autoscaler" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Autoscaler extends Google_Service
{
	/** View and manage your Google Compute Engine resources. */
	const COMPUTE =
		"https://www.googleapis.com/auth/compute";
	/** View your Google Compute Engine resources. */
	const COMPUTE_READONLY =
		"https://www.googleapis.com/auth/compute.readonly";

	public $autoscalers;
	public $zoneOperations;
	public $zones;

	/**
	 * Constructs the internal representation of the Autoscaler service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'autoscaler/v1beta2/';
		$this->version = 'v1beta2';
		$this->serviceName = 'autoscaler';

		$this->autoscalers = new Google_Service_Autoscaler_Resource_Autoscalers(
			$this,
			$this->serviceName,
			'autoscalers',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'projects/{project}/zones/{zone}/autoscalers/{autoscaler}',
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
						],
					], 'get'    => [
						'path'       => 'projects/{project}/zones/{zone}/autoscalers/{autoscaler}',
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
					], 'insert' => [
						'path'       => 'projects/{project}/zones/{zone}/autoscalers',
						'httpMethod' => 'POST',
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
					], 'list'   => [
						'path'       => 'projects/{project}/zones/{zone}/autoscalers',
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
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'projects/{project}/zones/{zone}/autoscalers/{autoscaler}',
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
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'projects/{project}/zones/{zone}/autoscalers/{autoscaler}',
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
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->zoneOperations = new Google_Service_Autoscaler_Resource_ZoneOperations(
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
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->zones = new Google_Service_Autoscaler_Resource_Zones(
			$this,
			$this->serviceName,
			'zones',
			[
				'methods' => [
					'list' => [
						'path'       => 'zones',
						'httpMethod' => 'GET',
						'parameters' => [
							'filter'     => [
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
							'project'    => [
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
