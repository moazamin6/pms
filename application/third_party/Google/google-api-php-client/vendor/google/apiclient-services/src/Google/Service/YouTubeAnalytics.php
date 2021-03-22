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
 * Service definition for YouTubeAnalytics (v2).
 *
 * <p>
 * Retrieves your YouTube Analytics data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/youtube/analytics" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_YouTubeAnalytics extends Google_Service
{
	/** Manage your YouTube account. */
	const YOUTUBE =
		"https://www.googleapis.com/auth/youtube";
	/** View your YouTube account. */
	const YOUTUBE_READONLY =
		"https://www.googleapis.com/auth/youtube.readonly";
	/** View and manage your assets and associated content on YouTube. */
	const YOUTUBEPARTNER =
		"https://www.googleapis.com/auth/youtubepartner";
	/** View monetary and non-monetary YouTube Analytics reports for your YouTube content. */
	const YT_ANALYTICS_MONETARY_READONLY =
		"https://www.googleapis.com/auth/yt-analytics-monetary.readonly";
	/** View YouTube Analytics reports for your YouTube content. */
	const YT_ANALYTICS_READONLY =
		"https://www.googleapis.com/auth/yt-analytics.readonly";

	public $groupItems;
	public $groups;
	public $reports;

	/**
	 * Constructs the internal representation of the YouTubeAnalytics service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://youtubeanalytics.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v2';
		$this->serviceName = 'youtubeAnalytics';

		$this->groupItems = new Google_Service_YouTubeAnalytics_Resource_GroupItems(
			$this,
			$this->serviceName,
			'groupItems',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'v2/groupItems',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert' => [
						'path'       => 'v2/groupItems',
						'httpMethod' => 'POST',
						'parameters' => [
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'v2/groupItems',
						'httpMethod' => 'GET',
						'parameters' => [
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'groupId'                => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->groups = new Google_Service_YouTubeAnalytics_Resource_Groups(
			$this,
			$this->serviceName,
			'groups',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'v2/groups',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert' => [
						'path'       => 'v2/groups',
						'httpMethod' => 'POST',
						'parameters' => [
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'v2/groups',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageToken'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'mine'                   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'update' => [
						'path'       => 'v2/groups',
						'httpMethod' => 'PUT',
						'parameters' => [
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->reports = new Google_Service_YouTubeAnalytics_Resource_Reports(
			$this,
			$this->serviceName,
			'reports',
			[
				'methods' => [
					'query' => [
						'path'       => 'v2/reports',
						'httpMethod' => 'GET',
						'parameters' => [
							'includeHistoricalChannelData' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'ids'                          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'currency'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startIndex'                   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'dimensions'                   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'endDate'                      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'                   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'filters'                      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sort'                         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startDate'                    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'metrics'                      => [
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
