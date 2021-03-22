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
 * Service definition for Licensing (v1).
 *
 * <p>
 * Views and manages licenses for your domain.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/google-apps/licensing/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Licensing extends Google_Service
{
	/** View and manage G Suite licenses for your domain. */
	const APPS_LICENSING =
		"https://www.googleapis.com/auth/apps.licensing";

	public $licenseAssignments;

	/**
	 * Constructs the internal representation of the Licensing service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'apps/licensing/v1/product/';
		$this->version = 'v1';
		$this->serviceName = 'licensing';

		$this->licenseAssignments = new Google_Service_Licensing_Resource_LicenseAssignments(
			$this,
			$this->serviceName,
			'licenseAssignments',
			[
				'methods' => [
					'delete'                  => [
						'path'       => '{productId}/sku/{skuId}/user/{userId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'productId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'skuId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                  => [
						'path'       => '{productId}/sku/{skuId}/user/{userId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'productId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'skuId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'               => [
						'path'       => '{productId}/sku/{skuId}/user',
						'httpMethod' => 'POST',
						'parameters' => [
							'productId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'skuId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'listForProduct'       => [
						'path'       => '{productId}/users',
						'httpMethod' => 'GET',
						'parameters' => [
							'productId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'customerId' => [
								'location' => 'query',
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
					], 'listForProductAndSku' => [
						'path'       => '{productId}/sku/{skuId}/users',
						'httpMethod' => 'GET',
						'parameters' => [
							'productId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'skuId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'customerId' => [
								'location' => 'query',
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
					], 'patch'                => [
						'path'       => '{productId}/sku/{skuId}/user/{userId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'productId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'skuId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'               => [
						'path'       => '{productId}/sku/{skuId}/user/{userId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'productId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'skuId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'    => [
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
