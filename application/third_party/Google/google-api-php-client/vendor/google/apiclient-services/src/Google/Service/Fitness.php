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
 * Service definition for Fitness (v1).
 *
 * <p>
 * Stores and accesses user data in the fitness store from apps on any platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/fit/rest/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Fitness extends Google_Service
{
	/** View your activity information in Google Fit. */
	const FITNESS_ACTIVITY_READ =
		"https://www.googleapis.com/auth/fitness.activity.read";
	/** View and store your activity information in Google Fit. */
	const FITNESS_ACTIVITY_WRITE =
		"https://www.googleapis.com/auth/fitness.activity.write";
	/** View blood glucose data in Google Fit. */
	const FITNESS_BLOOD_GLUCOSE_READ =
		"https://www.googleapis.com/auth/fitness.blood_glucose.read";
	/** View and store blood glucose data in Google Fit. */
	const FITNESS_BLOOD_GLUCOSE_WRITE =
		"https://www.googleapis.com/auth/fitness.blood_glucose.write";
	/** View blood pressure data in Google Fit. */
	const FITNESS_BLOOD_PRESSURE_READ =
		"https://www.googleapis.com/auth/fitness.blood_pressure.read";
	/** View and store blood pressure data in Google Fit. */
	const FITNESS_BLOOD_PRESSURE_WRITE =
		"https://www.googleapis.com/auth/fitness.blood_pressure.write";
	/** View body sensor information in Google Fit. */
	const FITNESS_BODY_READ =
		"https://www.googleapis.com/auth/fitness.body.read";
	/** View and store body sensor data in Google Fit. */
	const FITNESS_BODY_WRITE =
		"https://www.googleapis.com/auth/fitness.body.write";
	/** View body temperature data in Google Fit. */
	const FITNESS_BODY_TEMPERATURE_READ =
		"https://www.googleapis.com/auth/fitness.body_temperature.read";
	/** View and store body temperature data in Google Fit. */
	const FITNESS_BODY_TEMPERATURE_WRITE =
		"https://www.googleapis.com/auth/fitness.body_temperature.write";
	/** View your stored location data in Google Fit. */
	const FITNESS_LOCATION_READ =
		"https://www.googleapis.com/auth/fitness.location.read";
	/** View and store your location data in Google Fit. */
	const FITNESS_LOCATION_WRITE =
		"https://www.googleapis.com/auth/fitness.location.write";
	/** View nutrition information in Google Fit. */
	const FITNESS_NUTRITION_READ =
		"https://www.googleapis.com/auth/fitness.nutrition.read";
	/** View and store nutrition information in Google Fit. */
	const FITNESS_NUTRITION_WRITE =
		"https://www.googleapis.com/auth/fitness.nutrition.write";
	/** View oxygen saturation data in Google Fit. */
	const FITNESS_OXYGEN_SATURATION_READ =
		"https://www.googleapis.com/auth/fitness.oxygen_saturation.read";
	/** View and store oxygen saturation data in Google Fit. */
	const FITNESS_OXYGEN_SATURATION_WRITE =
		"https://www.googleapis.com/auth/fitness.oxygen_saturation.write";
	/** View reproductive health data in Google Fit. */
	const FITNESS_REPRODUCTIVE_HEALTH_READ =
		"https://www.googleapis.com/auth/fitness.reproductive_health.read";
	/** View and store reproductive health data in Google Fit. */
	const FITNESS_REPRODUCTIVE_HEALTH_WRITE =
		"https://www.googleapis.com/auth/fitness.reproductive_health.write";

	public $users_dataSources;
	public $users_dataSources_dataPointChanges;
	public $users_dataSources_datasets;
	public $users_dataset;
	public $users_sessions;

	/**
	 * Constructs the internal representation of the Fitness service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'fitness/v1/users/';
		$this->version = 'v1';
		$this->serviceName = 'fitness';

		$this->users_dataSources = new Google_Service_Fitness_Resource_UsersDataSources(
			$this,
			$this->serviceName,
			'dataSources',
			[
				'methods' => [
					'create'    => [
						'path'       => '{userId}/dataSources',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{userId}/dataSources/{dataSourceId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dataSourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{userId}/dataSources/{dataSourceId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dataSourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{userId}/dataSources',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dataTypeName' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'patch'  => [
						'path'       => '{userId}/dataSources/{dataSourceId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dataSourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => '{userId}/dataSources/{dataSourceId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dataSourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_dataSources_dataPointChanges = new Google_Service_Fitness_Resource_UsersDataSourcesDataPointChanges(
			$this,
			$this->serviceName,
			'dataPointChanges',
			[
				'methods' => [
					'list' => [
						'path'       => '{userId}/dataSources/{dataSourceId}/dataPointChanges',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dataSourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'limit'        => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->users_dataSources_datasets = new Google_Service_Fitness_Resource_UsersDataSourcesDatasets(
			$this,
			$this->serviceName,
			'datasets',
			[
				'methods' => [
					'delete'   => [
						'path'       => '{userId}/dataSources/{dataSourceId}/datasets/{datasetId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId'             => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dataSourceId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'currentTimeMillis'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'modifiedTimeMillis' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'   => [
						'path'       => '{userId}/dataSources/{dataSourceId}/datasets/{datasetId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dataSourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'limit'        => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch' => [
						'path'       => '{userId}/dataSources/{dataSourceId}/datasets/{datasetId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'userId'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dataSourceId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datasetId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'currentTimeMillis' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->users_dataset = new Google_Service_Fitness_Resource_UsersDataset(
			$this,
			$this->serviceName,
			'dataset',
			[
				'methods' => [
					'aggregate' => [
						'path'       => '{userId}/dataset:aggregate',
						'httpMethod' => 'POST',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users_sessions = new Google_Service_Fitness_Resource_UsersSessions(
			$this,
			$this->serviceName,
			'sessions',
			[
				'methods' => [
					'delete'    => [
						'path'       => '{userId}/sessions/{sessionId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sessionId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'currentTimeMillis' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => '{userId}/sessions',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'endTime'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'includeDeleted' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startTime'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{userId}/sessions/{sessionId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sessionId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'currentTimeMillis' => [
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
