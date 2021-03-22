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
 * Service definition for Coordinate (v1).
 *
 * <p>
 * Lets you view and manage jobs in a Coordinate team.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/coordinate/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Coordinate extends Google_Service
{
	/** View and manage your Google Maps Coordinate jobs. */
	const COORDINATE =
		"https://www.googleapis.com/auth/coordinate";
	/** View your Google Coordinate jobs. */
	const COORDINATE_READONLY =
		"https://www.googleapis.com/auth/coordinate.readonly";

	public $customFieldDef;
	public $jobs;
	public $location;
	public $schedule;
	public $team;
	public $worker;

	/**
	 * Constructs the internal representation of the Coordinate service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'coordinate/v1/';
		$this->version = 'v1';
		$this->serviceName = 'coordinate';

		$this->customFieldDef = new Google_Service_Coordinate_Resource_CustomFieldDef(
			$this,
			$this->serviceName,
			'customFieldDef',
			[
				'methods' => [
					'list' => [
						'path'       => 'teams/{teamId}/custom_fields',
						'httpMethod' => 'GET',
						'parameters' => [
							'teamId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->jobs = new Google_Service_Coordinate_Resource_Jobs(
			$this,
			$this->serviceName,
			'jobs',
			[
				'methods' => [
					'get'       => [
						'path'       => 'teams/{teamId}/jobs/{jobId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'teamId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'teams/{teamId}/jobs',
						'httpMethod' => 'POST',
						'parameters' => [
							'teamId'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'address'             => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'lat'                 => [
								'location' => 'query',
								'type'     => 'number',
								'required' => true,
							],
							'lng'                 => [
								'location' => 'query',
								'type'     => 'number',
								'required' => true,
							],
							'title'               => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'assignee'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customField'         => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'customerName'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customerPhoneNumber' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'note'                => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'teams/{teamId}/jobs',
						'httpMethod' => 'GET',
						'parameters' => [
							'teamId'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults'             => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'minModifiedTimestampMs' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'omitJobChanges'         => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'              => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'teams/{teamId}/jobs/{jobId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'teamId'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'address'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'assignee'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customField'         => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'customerName'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customerPhoneNumber' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'lat'                 => [
								'location' => 'query',
								'type'     => 'number',
							],
							'lng'                 => [
								'location' => 'query',
								'type'     => 'number',
							],
							'note'                => [
								'location' => 'query',
								'type'     => 'string',
							],
							'progress'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'title'               => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'teams/{teamId}/jobs/{jobId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'teamId'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'address'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'assignee'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customField'         => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'customerName'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customerPhoneNumber' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'lat'                 => [
								'location' => 'query',
								'type'     => 'number',
							],
							'lng'                 => [
								'location' => 'query',
								'type'     => 'number',
							],
							'note'                => [
								'location' => 'query',
								'type'     => 'string',
							],
							'progress'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'title'               => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->location = new Google_Service_Coordinate_Resource_Location(
			$this,
			$this->serviceName,
			'location',
			[
				'methods' => [
					'list' => [
						'path'       => 'teams/{teamId}/workers/{workerEmail}/locations',
						'httpMethod' => 'GET',
						'parameters' => [
							'teamId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'workerEmail'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'startTimestampMs' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults'       => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->schedule = new Google_Service_Coordinate_Resource_Schedule(
			$this,
			$this->serviceName,
			'schedule',
			[
				'methods' => [
					'get'       => [
						'path'       => 'teams/{teamId}/jobs/{jobId}/schedule',
						'httpMethod' => 'GET',
						'parameters' => [
							'teamId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'teams/{teamId}/jobs/{jobId}/schedule',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'teamId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'allDay'    => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'duration'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'endTime'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startTime' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'teams/{teamId}/jobs/{jobId}/schedule',
						'httpMethod' => 'PUT',
						'parameters' => [
							'teamId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'jobId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'allDay'    => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'duration'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'endTime'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startTime' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->team = new Google_Service_Coordinate_Resource_Team(
			$this,
			$this->serviceName,
			'team',
			[
				'methods' => [
					'list' => [
						'path'       => 'teams',
						'httpMethod' => 'GET',
						'parameters' => [
							'admin'      => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'dispatcher' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'worker'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->worker = new Google_Service_Coordinate_Resource_Worker(
			$this,
			$this->serviceName,
			'worker',
			[
				'methods' => [
					'list' => [
						'path'       => 'teams/{teamId}/workers',
						'httpMethod' => 'GET',
						'parameters' => [
							'teamId' => [
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
