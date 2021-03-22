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
 * Service definition for StreetViewPublish (v1).
 *
 * <p>
 * Publishes 360 photos to Google Maps, along with position, orientation, and
 * connectivity metadata. Apps can offer an interface for positioning,
 * connecting, and uploading user-generated Street View images.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/streetview/publish/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_StreetViewPublish extends Google_Service
{
	/** Publish and manage your 360 photos on Google Street View. */
	const STREETVIEWPUBLISH =
		"https://www.googleapis.com/auth/streetviewpublish";

	public $photo;
	public $photos;

	/**
	 * Constructs the internal representation of the StreetViewPublish service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://streetviewpublish.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'streetviewpublish';

		$this->photo = new Google_Service_StreetViewPublish_Resource_Photo(
			$this,
			$this->serviceName,
			'photo',
			[
				'methods' => [
					'create'         => [
						'path'       => 'v1/photo',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete'      => [
						'path'       => 'v1/photo/{photoId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'photoId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'         => [
						'path'       => 'v1/photo/{photoId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'photoId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'view'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'startUpload' => [
						'path'       => 'v1/photo:startUpload',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'update'      => [
						'path'       => 'v1/photo/{id}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'id'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->photos = new Google_Service_StreetViewPublish_Resource_Photos(
			$this,
			$this->serviceName,
			'photos',
			[
				'methods' => [
					'batchDelete'    => [
						'path'       => 'v1/photos:batchDelete',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'batchGet'    => [
						'path'       => 'v1/photos:batchGet',
						'httpMethod' => 'GET',
						'parameters' => [
							'view'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'photoIds' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'batchUpdate' => [
						'path'       => 'v1/photos:batchUpdate',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'        => [
						'path'       => 'v1/photos',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
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
	}
}
