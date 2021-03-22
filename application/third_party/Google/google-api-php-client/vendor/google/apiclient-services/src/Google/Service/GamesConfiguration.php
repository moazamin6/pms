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
 * Service definition for GamesConfiguration (v1configuration).
 *
 * <p>
 * The Publishing API for Google Play Game Services.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/games/services" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_GamesConfiguration extends Google_Service
{
	/** View and manage your Google Play Developer account. */
	const ANDROIDPUBLISHER =
		"https://www.googleapis.com/auth/androidpublisher";

	public $achievementConfigurations;
	public $imageConfigurations;
	public $leaderboardConfigurations;

	/**
	 * Constructs the internal representation of the GamesConfiguration service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'games/v1configuration/';
		$this->version = 'v1configuration';
		$this->serviceName = 'gamesConfiguration';

		$this->achievementConfigurations = new Google_Service_GamesConfiguration_Resource_AchievementConfigurations(
			$this,
			$this->serviceName,
			'achievementConfigurations',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'achievements/{achievementId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'achievementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'achievements/{achievementId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'achievementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'applications/{applicationId}/achievements',
						'httpMethod' => 'POST',
						'parameters' => [
							'applicationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'applications/{applicationId}/achievements',
						'httpMethod' => 'GET',
						'parameters' => [
							'applicationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
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
					], 'patch'  => [
						'path'       => 'achievements/{achievementId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'achievementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'achievements/{achievementId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'achievementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->imageConfigurations = new Google_Service_GamesConfiguration_Resource_ImageConfigurations(
			$this,
			$this->serviceName,
			'imageConfigurations',
			[
				'methods' => [
					'upload' => [
						'path'       => 'images/{resourceId}/imageType/{imageType}',
						'httpMethod' => 'POST',
						'parameters' => [
							'resourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'imageType'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->leaderboardConfigurations = new Google_Service_GamesConfiguration_Resource_LeaderboardConfigurations(
			$this,
			$this->serviceName,
			'leaderboardConfigurations',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'leaderboards/{leaderboardId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'leaderboardId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'leaderboards/{leaderboardId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'leaderboardId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'applications/{applicationId}/leaderboards',
						'httpMethod' => 'POST',
						'parameters' => [
							'applicationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'applications/{applicationId}/leaderboards',
						'httpMethod' => 'GET',
						'parameters' => [
							'applicationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
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
					], 'patch'  => [
						'path'       => 'leaderboards/{leaderboardId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'leaderboardId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'leaderboards/{leaderboardId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'leaderboardId' => [
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
