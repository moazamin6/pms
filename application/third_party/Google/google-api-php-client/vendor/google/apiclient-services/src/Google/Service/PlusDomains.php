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
 * Service definition for PlusDomains (v1).
 *
 * <p>
 * Builds on top of the Google+ platform for Google Apps Domains.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/+/domains/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_PlusDomains extends Google_Service
{
	/** View your circles and the people and pages in them. */
	const PLUS_CIRCLES_READ =
		"https://www.googleapis.com/auth/plus.circles.read";
	/** Manage your circles and add people and pages. People and pages you add to your circles will be notified. Others may see this information publicly. People you add to circles can use Hangouts with you.. */
	const PLUS_CIRCLES_WRITE =
		"https://www.googleapis.com/auth/plus.circles.write";
	/** Know the list of people in your circles, your age range, and language. */
	const PLUS_LOGIN =
		"https://www.googleapis.com/auth/plus.login";
	/** Know who you are on Google. */
	const PLUS_ME =
		"https://www.googleapis.com/auth/plus.me";
	/** Send your photos and videos to Google+. */
	const PLUS_MEDIA_UPLOAD =
		"https://www.googleapis.com/auth/plus.media.upload";
	/** View your own Google+ profile and profiles visible to you. */
	const PLUS_PROFILES_READ =
		"https://www.googleapis.com/auth/plus.profiles.read";
	/** View your Google+ posts, comments, and stream. */
	const PLUS_STREAM_READ =
		"https://www.googleapis.com/auth/plus.stream.read";
	/** Manage your Google+ posts, comments, and stream. */
	const PLUS_STREAM_WRITE =
		"https://www.googleapis.com/auth/plus.stream.write";
	/** View your email address. */
	const USERINFO_EMAIL =
		"https://www.googleapis.com/auth/userinfo.email";
	/** View your basic profile info. */
	const USERINFO_PROFILE =
		"https://www.googleapis.com/auth/userinfo.profile";

	public $activities;
	public $audiences;
	public $circles;
	public $comments;
	public $media;
	public $people;

	/**
	 * Constructs the internal representation of the PlusDomains service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'plusDomains/v1/';
		$this->version = 'v1';
		$this->serviceName = 'plusDomains';

		$this->activities = new Google_Service_PlusDomains_Resource_Activities(
			$this,
			$this->serviceName,
			'activities',
			[
				'methods' => [
					'get'       => [
						'path'       => 'activities/{activityId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'activityId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'people/{userId}/activities',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'preview' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'list'   => [
						'path'       => 'people/{userId}/activities/{collection}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'collection' => [
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
					],
				],
			]
		);
		$this->audiences = new Google_Service_PlusDomains_Resource_Audiences(
			$this,
			$this->serviceName,
			'audiences',
			[
				'methods' => [
					'list' => [
						'path'       => 'people/{userId}/audiences',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'     => [
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
					],
				],
			]
		);
		$this->circles = new Google_Service_PlusDomains_Resource_Circles(
			$this,
			$this->serviceName,
			'circles',
			[
				'methods' => [
					'addPeople'       => [
						'path'       => 'circles/{circleId}/people',
						'httpMethod' => 'PUT',
						'parameters' => [
							'circleId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'email'    => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'userId'   => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'get'          => [
						'path'       => 'circles/{circleId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'circleId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'       => [
						'path'       => 'people/{userId}/circles',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'         => [
						'path'       => 'people/{userId}/circles',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'     => [
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
					], 'patch'        => [
						'path'       => 'circles/{circleId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'circleId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'remove'       => [
						'path'       => 'circles/{circleId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'circleId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'removePeople' => [
						'path'       => 'circles/{circleId}/people',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'circleId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'email'    => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'userId'   => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'update'       => [
						'path'       => 'circles/{circleId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'circleId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->comments = new Google_Service_PlusDomains_Resource_Comments(
			$this,
			$this->serviceName,
			'comments',
			[
				'methods' => [
					'get'       => [
						'path'       => 'comments/{commentId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'commentId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'activities/{activityId}/comments',
						'httpMethod' => 'POST',
						'parameters' => [
							'activityId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'activities/{activityId}/comments',
						'httpMethod' => 'GET',
						'parameters' => [
							'activityId' => [
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
							'sortOrder'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->media = new Google_Service_PlusDomains_Resource_Media(
			$this,
			$this->serviceName,
			'media',
			[
				'methods' => [
					'insert' => [
						'path'       => 'people/{userId}/media/{collection}',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'collection' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->people = new Google_Service_PlusDomains_Resource_People(
			$this,
			$this->serviceName,
			'people',
			[
				'methods' => [
					'get'               => [
						'path'       => 'people/{userId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'           => [
						'path'       => 'people/{userId}/people/{collection}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'collection' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
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
					], 'listByActivity' => [
						'path'       => 'activities/{activityId}/people/{collection}',
						'httpMethod' => 'GET',
						'parameters' => [
							'activityId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'collection' => [
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
					], 'listByCircle'   => [
						'path'       => 'circles/{circleId}/people',
						'httpMethod' => 'GET',
						'parameters' => [
							'circleId'   => [
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
					],
				],
			]
		);
	}
}
