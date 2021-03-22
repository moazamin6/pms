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
 * Service definition for Resourceviews (v1beta2).
 *
 * <p>
 * The Resource View API allows users to create and manage logical sets of
 * Google Compute Engine instances.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/compute/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Resourceviews extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";
	/** View and manage your Google Compute Engine resources. */
	const COMPUTE =
		"https://www.googleapis.com/auth/compute";
	/** View your Google Compute Engine resources. */
	const COMPUTE_READONLY =
		"https://www.googleapis.com/auth/compute.readonly";
	/** View and manage your Google Cloud Platform management resources and deployment status information. */
	const NDEV_CLOUDMAN =
		"https://www.googleapis.com/auth/ndev.cloudman";
	/** View your Google Cloud Platform management resources and deployment status information. */
	const NDEV_CLOUDMAN_READONLY =
		"https://www.googleapis.com/auth/ndev.cloudman.readonly";

	public $zoneOperations;
	public $zoneViews;

	/**
	 * Constructs the internal representation of the Resourceviews service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'resourceviews/v1beta2/projects/';
		$this->version = 'v1beta2';
		$this->serviceName = 'resourceviews';

		$this->zoneOperations = new Google_Service_Resourceviews_Resource_ZoneOperations(
			$this,
			$this->serviceName,
			'zoneOperations',
			[
				'methods' => [
					'get'     => [
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
		$this->zoneViews = new Google_Service_Resourceviews_Resource_ZoneViews(
			$this,
			$this->serviceName,
			'zoneViews',
			[
				'methods' => [
					'addResources'       => [
						'path'       => '{project}/zones/{zone}/resourceViews/{resourceView}/addResources',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceView' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'          => [
						'path'       => '{project}/zones/{zone}/resourceViews/{resourceView}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceView' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'             => [
						'path'       => '{project}/zones/{zone}/resourceViews/{resourceView}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceView' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getService'      => [
						'path'       => '{project}/zones/{zone}/resourceViews/{resourceView}/getService',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceView' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceName' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert'          => [
						'path'       => '{project}/zones/{zone}/resourceViews',
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
					], 'list'            => [
						'path'       => '{project}/zones/{zone}/resourceViews',
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
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listResources'   => [
						'path'       => '{project}/zones/{zone}/resourceViews/{resourceView}/resources',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceView' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'format'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'listState'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'serviceName'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'removeResources' => [
						'path'       => '{project}/zones/{zone}/resourceViews/{resourceView}/removeResources',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceView' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setService'      => [
						'path'       => '{project}/zones/{zone}/resourceViews/{resourceView}/setService',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceView' => [
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
