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
 * Service definition for PhotosLibrary (v1).
 *
 * <p>
 * Manage photos, videos, and albums in Google Photos</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/photos/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_PhotosLibrary extends Google_Service
{
	/** View the photos, videos and albums in your Google Photos. */
	const DRIVE_PHOTOS_READONLY =
		"https://www.googleapis.com/auth/drive.photos.readonly";
	/** View and manage your Google Photos library. */
	const PHOTOSLIBRARY =
		"https://www.googleapis.com/auth/photoslibrary";
	/** Add to your Google Photos library. */
	const PHOTOSLIBRARY_APPENDONLY =
		"https://www.googleapis.com/auth/photoslibrary.appendonly";
	/** View your Google Photos library. */
	const PHOTOSLIBRARY_READONLY =
		"https://www.googleapis.com/auth/photoslibrary.readonly";
	/** Manage photos added by this app. */
	const PHOTOSLIBRARY_READONLY_APPCREATEDDATA =
		"https://www.googleapis.com/auth/photoslibrary.readonly.appcreateddata";
	/** Manage and add to shared albums on your behalf. */
	const PHOTOSLIBRARY_SHARING =
		"https://www.googleapis.com/auth/photoslibrary.sharing";

	public $albums;
	public $mediaItems;
	public $sharedAlbums;

	/**
	 * Constructs the internal representation of the PhotosLibrary service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://photoslibrary.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'photoslibrary';

		$this->albums = new Google_Service_PhotosLibrary_Resource_Albums(
			$this,
			$this->serviceName,
			'albums',
			[
				'methods' => [
					'addEnrichment' => [
						'path'       => 'v1/albums/{+albumId}:addEnrichment',
						'httpMethod' => 'POST',
						'parameters' => [
							'albumId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'     => [
						'path'       => 'v1/albums',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'        => [
						'path'       => 'v1/albums/{+albumId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'albumId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'       => [
						'path'       => 'v1/albums',
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
						],
					], 'share'      => [
						'path'       => 'v1/albums/{+albumId}:share',
						'httpMethod' => 'POST',
						'parameters' => [
							'albumId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->mediaItems = new Google_Service_PhotosLibrary_Resource_MediaItems(
			$this,
			$this->serviceName,
			'mediaItems',
			[
				'methods' => [
					'batchCreate' => [
						'path'       => 'v1/mediaItems:batchCreate',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'      => [
						'path'       => 'v1/mediaItems/{+mediaItemId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'mediaItemId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'search'   => [
						'path'       => 'v1/mediaItems:search',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->sharedAlbums = new Google_Service_PhotosLibrary_Resource_SharedAlbums(
			$this,
			$this->serviceName,
			'sharedAlbums',
			[
				'methods' => [
					'join'    => [
						'path'       => 'v1/sharedAlbums:join',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list' => [
						'path'       => 'v1/sharedAlbums',
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
						],
					],
				],
			]
		);
	}
}
