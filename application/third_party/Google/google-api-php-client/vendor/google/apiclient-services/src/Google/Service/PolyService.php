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
 * Service definition for PolyService (v1).
 *
 * <p>
 * The Poly API provides read-only access to assets hosted on poly.google.com.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/poly/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_PolyService extends Google_Service
{


	public $assets;
	public $users_assets;
	public $users_likedassets;

	/**
	 * Constructs the internal representation of the PolyService service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://poly.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'poly';

		$this->assets = new Google_Service_PolyService_Resource_Assets(
			$this,
			$this->serviceName,
			'assets',
			[
				'methods' => [
					'get'     => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v1/assets',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageToken'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxComplexity' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'keywords'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'orderBy'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'format'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'curated'       => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'category'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->users_assets = new Google_Service_PolyService_Resource_UsersAssets(
			$this,
			$this->serviceName,
			'assets',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+name}/assets',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'format'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'visibility' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->users_likedassets = new Google_Service_PolyService_Resource_UsersLikedassets(
			$this,
			$this->serviceName,
			'likedassets',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+name}/likedassets',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderBy'   => [
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
							'format'    => [
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
