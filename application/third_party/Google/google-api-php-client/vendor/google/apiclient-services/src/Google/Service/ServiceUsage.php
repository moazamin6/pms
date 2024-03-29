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
 * Service definition for ServiceUsage (v1beta1).
 *
 * <p>
 * Enables services that service consumers want to use on Google Cloud Platform,
 * lists the available or enabled services, or disables services that service
 * consumers no longer use.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/service-usage/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_ServiceUsage extends Google_Service
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

	public $operations;
	public $services;

	/**
	 * Constructs the internal representation of the ServiceUsage service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://serviceusage.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1beta1';
		$this->serviceName = 'serviceusage';

		$this->operations = new Google_Service_ServiceUsage_Resource_Operations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'get'     => [
						'path'       => 'v1beta1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v1beta1/operations',
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
		$this->services = new Google_Service_ServiceUsage_Resource_Services(
			$this,
			$this->serviceName,
			'services',
			[
				'methods' => [
					'batchEnable' => [
						'path'       => 'v1beta1/{+parent}/services:batchEnable',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'disable'  => [
						'path'       => 'v1beta1/{+name}:disable',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'enable'   => [
						'path'       => 'v1beta1/{+name}:enable',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'      => [
						'path'       => 'v1beta1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'     => [
						'path'       => 'v1beta1/{+parent}/services',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'    => [
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
						],
					],
				],
			]
		);
	}
}
