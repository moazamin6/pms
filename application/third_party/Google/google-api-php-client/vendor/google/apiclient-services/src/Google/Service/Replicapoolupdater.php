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
 * Service definition for Replicapoolupdater (v1beta1).
 *
 * <p>
 * [Deprecated. Please use compute.instanceGroupManagers.update method.
 * replicapoolupdater API will be disabled after December 30th, 2016] Updates
 * groups of Compute Engine instances.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/compute/docs/instance-groups/manager/#applying_rolling_updates_using_the_updater_service" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Replicapoolupdater extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";
	/** View and manage replica pools. */
	const REPLICAPOOL =
		"https://www.googleapis.com/auth/replicapool";
	/** View replica pools. */
	const REPLICAPOOL_READONLY =
		"https://www.googleapis.com/auth/replicapool.readonly";

	public $rollingUpdates;
	public $zoneOperations;

	/**
	 * Constructs the internal representation of the Replicapoolupdater service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'replicapoolupdater/v1beta1/projects/';
		$this->version = 'v1beta1';
		$this->serviceName = 'replicapoolupdater';

		$this->rollingUpdates = new Google_Service_Replicapoolupdater_Resource_RollingUpdates(
			$this,
			$this->serviceName,
			'rollingUpdates',
			[
				'methods' => [
					'cancel'                 => [
						'path'       => '{project}/zones/{zone}/rollingUpdates/{rollingUpdate}/cancel',
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
							'rollingUpdate' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                 => [
						'path'       => '{project}/zones/{zone}/rollingUpdates/{rollingUpdate}',
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
							'rollingUpdate' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'              => [
						'path'       => '{project}/zones/{zone}/rollingUpdates',
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
					], 'list'                => [
						'path'       => '{project}/zones/{zone}/rollingUpdates',
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
					], 'listInstanceUpdates' => [
						'path'       => '{project}/zones/{zone}/rollingUpdates/{rollingUpdate}/instanceUpdates',
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
							'rollingUpdate' => [
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
							'pageToken'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'pause'               => [
						'path'       => '{project}/zones/{zone}/rollingUpdates/{rollingUpdate}/pause',
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
							'rollingUpdate' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resume'              => [
						'path'       => '{project}/zones/{zone}/rollingUpdates/{rollingUpdate}/resume',
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
							'rollingUpdate' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'rollback'            => [
						'path'       => '{project}/zones/{zone}/rollingUpdates/{rollingUpdate}/rollback',
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
							'rollingUpdate' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->zoneOperations = new Google_Service_Replicapoolupdater_Resource_ZoneOperations(
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
	}
}
