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
 * Service definition for YouTubeReporting (v1).
 *
 * <p>
 * Schedules reporting jobs containing your YouTube Analytics data and downloads
 * the resulting bulk data reports in the form of CSV files.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/youtube/reporting/v1/reports/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_YouTubeReporting extends Google_Service
{
	/** View monetary and non-monetary YouTube Analytics reports for your YouTube content. */
	const YT_ANALYTICS_MONETARY_READONLY =
		"https://www.googleapis.com/auth/yt-analytics-monetary.readonly";
	/** View YouTube Analytics reports for your YouTube content. */
	const YT_ANALYTICS_READONLY =
		"https://www.googleapis.com/auth/yt-analytics.readonly";

	public $jobs;
	public $jobs_reports;
	public $media;
	public $reportTypes;

	/**
	 * Constructs the internal representation of the YouTubeReporting service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://youtubereporting.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'youtubereporting';

		$this->jobs = new Google_Service_YouTubeReporting_Resource_Jobs(
			$this,
			$this->serviceName,
			'jobs',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/jobs',
						'httpMethod' => 'POST',
						'parameters' => [
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete' => [
						'path'       => 'v1/jobs/{jobId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'jobId'                  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'    => [
						'path'       => 'v1/jobs/{jobId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'jobId'                  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'v1/jobs',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageSize'               => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'includeSystemManaged'   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->jobs_reports = new Google_Service_YouTubeReporting_Resource_JobsReports(
			$this,
			$this->serviceName,
			'reports',
			[
				'methods' => [
					'get'     => [
						'path'       => 'v1/jobs/{jobId}/reports/{reportId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'jobId'                  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'reportId'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list' => [
						'path'       => 'v1/jobs/{jobId}/reports',
						'httpMethod' => 'GET',
						'parameters' => [
							'jobId'                  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startTimeBefore'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'createdAfter'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startTimeAtOrAfter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'               => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
		$this->media = new Google_Service_YouTubeReporting_Resource_Media(
			$this,
			$this->serviceName,
			'media',
			[
				'methods' => [
					'download' => [
						'path'       => 'v1/media/{+resourceName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'resourceName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->reportTypes = new Google_Service_YouTubeReporting_Resource_ReportTypes(
			$this,
			$this->serviceName,
			'reportTypes',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/reportTypes',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageToken'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'includeSystemManaged'   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageSize'               => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'onBehalfOfContentOwner' => [
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
