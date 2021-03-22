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
 * Service definition for AndroidPublisher (v3).
 *
 * <p>
 * Lets Android application developers access their Google Play accounts.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/android-publisher" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_AndroidPublisher extends Google_Service
{
	/** View and manage your Google Play Developer account. */
	const ANDROIDPUBLISHER =
		"https://www.googleapis.com/auth/androidpublisher";
	
	public $edits;
	public $edits_apks;
	public $edits_bundles;
	public $edits_deobfuscationfiles;
	public $edits_details;
	public $edits_expansionfiles;
	public $edits_images;
	public $edits_listings;
	public $edits_testers;
	public $edits_tracks;
	public $inappproducts;
	public $orders;
	public $purchases_products;
	public $purchases_subscriptions;
	public $purchases_voidedpurchases;
	public $reviews;
	
	/**
	 * Constructs the internal representation of the AndroidPublisher service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'androidpublisher/v3/applications/';
		$this->version = 'v3';
		$this->serviceName = 'androidpublisher';
		
		$this->edits = new Google_Service_AndroidPublisher_Resource_Edits(
			$this,
			$this->serviceName,
			'edits',
			[
				'methods' => [
					'commit'      => [
						'path'       => '{packageName}/edits/{editId}:commit',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'   => [
						'path'       => '{packageName}/edits/{editId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'      => [
						'path'       => '{packageName}/edits/{editId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'   => [
						'path'       => '{packageName}/edits',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'validate' => [
						'path'       => '{packageName}/edits/{editId}:validate',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->edits_apks = new Google_Service_AndroidPublisher_Resource_EditsApks(
			$this,
			$this->serviceName,
			'apks',
			[
				'methods' => [
					'addexternallyhosted' => [
						'path'       => '{packageName}/edits/{editId}/apks/externallyHosted',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'             => [
						'path'       => '{packageName}/edits/{editId}/apks',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'upload'           => [
						'path'       => '{packageName}/edits/{editId}/apks',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->edits_bundles = new Google_Service_AndroidPublisher_Resource_EditsBundles(
			$this,
			$this->serviceName,
			'bundles',
			[
				'methods' => [
					'list'      => [
						'path'       => '{packageName}/edits/{editId}/bundles',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'upload' => [
						'path'       => '{packageName}/edits/{editId}/bundles',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->edits_deobfuscationfiles = new Google_Service_AndroidPublisher_Resource_EditsDeobfuscationfiles(
			$this,
			$this->serviceName,
			'deobfuscationfiles',
			[
				'methods' => [
					'upload' => [
						'path'       => '{packageName}/edits/{editId}/apks/{apkVersionCode}/deobfuscationFiles/{deobfuscationFileType}',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'                => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'apkVersionCode'        => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
							'deobfuscationFileType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->edits_details = new Google_Service_AndroidPublisher_Resource_EditsDetails(
			$this,
			$this->serviceName,
			'details',
			[
				'methods' => [
					'get'       => [
						'path'       => '{packageName}/edits/{editId}/details',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => '{packageName}/edits/{editId}/details',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => '{packageName}/edits/{editId}/details',
						'httpMethod' => 'PUT',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->edits_expansionfiles = new Google_Service_AndroidPublisher_Resource_EditsExpansionfiles(
			$this,
			$this->serviceName,
			'expansionfiles',
			[
				'methods' => [
					'get'       => [
						'path'       => '{packageName}/edits/{editId}/apks/{apkVersionCode}/expansionFiles/{expansionFileType}',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'apkVersionCode'    => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
							'expansionFileType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => '{packageName}/edits/{editId}/apks/{apkVersionCode}/expansionFiles/{expansionFileType}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'packageName'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'apkVersionCode'    => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
							'expansionFileType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => '{packageName}/edits/{editId}/apks/{apkVersionCode}/expansionFiles/{expansionFileType}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'packageName'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'apkVersionCode'    => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
							'expansionFileType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'upload' => [
						'path'       => '{packageName}/edits/{editId}/apks/{apkVersionCode}/expansionFiles/{expansionFileType}',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'apkVersionCode'    => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
							'expansionFileType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->edits_images = new Google_Service_AndroidPublisher_Resource_EditsImages(
			$this,
			$this->serviceName,
			'images',
			[
				'methods' => [
					'delete'       => [
						'path'       => '{packageName}/edits/{editId}/listings/{language}/{imageType}/{imageId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'imageType'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'imageId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'deleteall' => [
						'path'       => '{packageName}/edits/{editId}/listings/{language}/{imageType}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'imageType'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'      => [
						'path'       => '{packageName}/edits/{editId}/listings/{language}/{imageType}',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'imageType'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'upload'    => [
						'path'       => '{packageName}/edits/{editId}/listings/{language}/{imageType}',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'imageType'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->edits_listings = new Google_Service_AndroidPublisher_Resource_EditsListings(
			$this,
			$this->serviceName,
			'listings',
			[
				'methods' => [
					'delete'       => [
						'path'       => '{packageName}/edits/{editId}/listings/{language}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'deleteall' => [
						'path'       => '{packageName}/edits/{editId}/listings',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'       => [
						'path'       => '{packageName}/edits/{editId}/listings/{language}',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'      => [
						'path'       => '{packageName}/edits/{editId}/listings',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'     => [
						'path'       => '{packageName}/edits/{editId}/listings/{language}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'    => [
						'path'       => '{packageName}/edits/{editId}/listings/{language}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->edits_testers = new Google_Service_AndroidPublisher_Resource_EditsTesters(
			$this,
			$this->serviceName,
			'testers',
			[
				'methods' => [
					'get'       => [
						'path'       => '{packageName}/edits/{editId}/testers/{track}',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'track'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => '{packageName}/edits/{editId}/testers/{track}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'track'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => '{packageName}/edits/{editId}/testers/{track}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'track'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->edits_tracks = new Google_Service_AndroidPublisher_Resource_EditsTracks(
			$this,
			$this->serviceName,
			'tracks',
			[
				'methods' => [
					'get'       => [
						'path'       => '{packageName}/edits/{editId}/tracks/{track}',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'track'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{packageName}/edits/{editId}/tracks',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => '{packageName}/edits/{editId}/tracks/{track}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'track'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => '{packageName}/edits/{editId}/tracks/{track}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'editId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'track'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->inappproducts = new Google_Service_AndroidPublisher_Resource_Inappproducts(
			$this,
			$this->serviceName,
			'inappproducts',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{packageName}/inappproducts/{sku}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sku'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{packageName}/inappproducts/{sku}',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sku'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => '{packageName}/inappproducts',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoConvertMissingPrices' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'list'   => [
						'path'       => '{packageName}/inappproducts',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'startIndex'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'token'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => '{packageName}/inappproducts/{sku}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'packageName'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sku'                      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoConvertMissingPrices' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'update' => [
						'path'       => '{packageName}/inappproducts/{sku}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'packageName'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sku'                      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'autoConvertMissingPrices' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->orders = new Google_Service_AndroidPublisher_Resource_Orders(
			$this,
			$this->serviceName,
			'orders',
			[
				'methods' => [
					'refund' => [
						'path'       => '{packageName}/orders/{orderId}:refund',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'revoke'      => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->purchases_products = new Google_Service_AndroidPublisher_Resource_PurchasesProducts(
			$this,
			$this->serviceName,
			'products',
			[
				'methods' => [
					'get' => [
						'path'       => '{packageName}/purchases/products/{productId}/tokens/{token}',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'token'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->purchases_subscriptions = new Google_Service_AndroidPublisher_Resource_PurchasesSubscriptions(
			$this,
			$this->serviceName,
			'subscriptions',
			[
				'methods' => [
					'cancel'    => [
						'path'       => '{packageName}/purchases/subscriptions/{subscriptionId}/tokens/{token}:cancel',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'token'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'defer'  => [
						'path'       => '{packageName}/purchases/subscriptions/{subscriptionId}/tokens/{token}:defer',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'token'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{packageName}/purchases/subscriptions/{subscriptionId}/tokens/{token}',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'token'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'refund' => [
						'path'       => '{packageName}/purchases/subscriptions/{subscriptionId}/tokens/{token}:refund',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'token'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'revoke' => [
						'path'       => '{packageName}/purchases/subscriptions/{subscriptionId}/tokens/{token}:revoke',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'token'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->purchases_voidedpurchases = new Google_Service_AndroidPublisher_Resource_PurchasesVoidedpurchases(
			$this,
			$this->serviceName,
			'voidedpurchases',
			[
				'methods' => [
					'list' => [
						'path'       => '{packageName}/purchases/voidedpurchases',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'endTime'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'startIndex'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'startTime'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'token'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->reviews = new Google_Service_AndroidPublisher_Resource_Reviews(
			$this,
			$this->serviceName,
			'reviews',
			[
				'methods' => [
					'get'      => [
						'path'       => '{packageName}/reviews/{reviewId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'reviewId'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'translationLanguage' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'  => [
						'path'       => '{packageName}/reviews',
						'httpMethod' => 'GET',
						'parameters' => [
							'packageName'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults'          => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'startIndex'          => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'token'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'translationLanguage' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'reply' => [
						'path'       => '{packageName}/reviews/{reviewId}:reply',
						'httpMethod' => 'POST',
						'parameters' => [
							'packageName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'reviewId'    => [
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
