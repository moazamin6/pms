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
 * Service definition for ServiceRegistry (alpha).
 *
 * <p>
 * Manages service endpoints in Service Registry and provides integration with
 * DNS for service discovery and name resolution.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/service-registry/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_ServiceRegistry extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";
	/** View and manage your Google Cloud Platform management resources and deployment status information. */
	const NDEV_CLOUDMAN =
		"https://www.googleapis.com/auth/ndev.cloudman";
	/** View your Google Cloud Platform management resources and deployment status information. */
	const NDEV_CLOUDMAN_READONLY =
		"https://www.googleapis.com/auth/ndev.cloudman.readonly";

	public $endpoints;
	public $operations;

	/**
	 * Constructs the internal representation of the ServiceRegistry service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'serviceregistry/alpha/projects/';
		$this->version = 'alpha';
		$this->serviceName = 'serviceregistry';

		$this->endpoints = new Google_Service_ServiceRegistry_Resource_Endpoints(
			$this,
			$this->serviceName,
			'endpoints',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{project}/global/endpoints/{endpoint}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'endpoint' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{project}/global/endpoints/{endpoint}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'endpoint' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{project}/global/endpoints',
						'httpMethod' => 'POST',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{project}/global/endpoints',
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
						'path'       => '{project}/global/endpoints/{endpoint}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'endpoint' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => '{project}/global/endpoints/{endpoint}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'endpoint' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->operations = new Google_Service_ServiceRegistry_Resource_Operations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'get'     => [
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
					], 'list' => [
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
	}
}
