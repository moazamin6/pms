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
 * Service definition for Chromewebstore (v1.1).
 *
 * <p>
 * Lets you access to data about apps and extensions, as well as manage them.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Chromewebstore extends Google_Service
{
	/** View your Chrome Web Store apps and extensions. */
	const CHROMEWEBSTORE_READONLY =
		"https://www.googleapis.com/auth/chromewebstore.readonly";

	public $inAppProducts;
	public $items;
	public $licenses;
	public $payments;

	/**
	 * Constructs the internal representation of the Chromewebstore service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'chromewebstore/v1.1/';
		$this->version = 'v1.1';
		$this->serviceName = 'chromewebstore';

		$this->inAppProducts = new Google_Service_Chromewebstore_Resource_InAppProducts(
			$this,
			$this->serviceName,
			'inAppProducts',
			[
				'methods' => [
					'get'     => [
						'path'       => 'items/{itemId}/skus/{sku}',
						'httpMethod' => 'GET',
						'parameters' => [
							'itemId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sku'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'gl'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'hl'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'projection' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list' => [
						'path'       => 'items/{itemId}/skus',
						'httpMethod' => 'GET',
						'parameters' => [
							'itemId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'gl'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'hl'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'projection' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->items = new Google_Service_Chromewebstore_Resource_Items(
			$this,
			$this->serviceName,
			'items',
			[
				'methods' => [
					'get'        => [
						'path'       => 'items/{itemId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'itemId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'projection' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert'  => [
						'path'       => 'items',
						'httpMethod' => 'POST',
						'parameters' => [
							'publisherEmail' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'   => [
						'path'       => 'items/{itemId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'itemId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'publish' => [
						'path'       => 'items/{itemId}/publish',
						'httpMethod' => 'POST',
						'parameters' => [
							'itemId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deployPercentage' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'publishTarget'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'  => [
						'path'       => 'items/{itemId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'itemId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->licenses = new Google_Service_Chromewebstore_Resource_Licenses(
			$this,
			$this->serviceName,
			'licenses',
			[
				'methods' => [
					'get'               => [
						'path'       => 'licenses/{appId}/{userId}',
						'httpMethod' => 'GET',
						'parameters' => [],
					], 'getUserLicense' => [
						'path'       => 'userlicenses/{appId}',
						'httpMethod' => 'GET',
						'parameters' => [],
					],
				],
			]
		);
		$this->payments = new Google_Service_Chromewebstore_Resource_Payments(
			$this,
			$this->serviceName,
			'payments',
			[
				'methods' => [
					'buy'       => [
						'path'       => 'payments/buy',
						'httpMethod' => 'POST',
						'parameters' => [
							'projection' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete' => [
						'path'       => 'items/{itemId}/skus/{sku}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'itemId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sku'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'items/{itemId}/payments',
						'httpMethod' => 'GET',
						'parameters' => [
							'projection' => [
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
