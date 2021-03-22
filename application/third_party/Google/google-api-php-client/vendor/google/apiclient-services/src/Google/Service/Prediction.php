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
 * Service definition for Prediction (v1.6).
 *
 * <p>
 * Lets you access a cloud hosted machine learning service that makes it easy to
 * build smart apps</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/prediction/docs/developer-guide" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Prediction extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** Manage your data and permissions in Google Cloud Storage. */
	const DEVSTORAGE_FULL_CONTROL =
		"https://www.googleapis.com/auth/devstorage.full_control";
	/** View your data in Google Cloud Storage. */
	const DEVSTORAGE_READ_ONLY =
		"https://www.googleapis.com/auth/devstorage.read_only";
	/** Manage your data in Google Cloud Storage. */
	const DEVSTORAGE_READ_WRITE =
		"https://www.googleapis.com/auth/devstorage.read_write";
	/** Manage your data in the Google Prediction API. */
	const PREDICTION =
		"https://www.googleapis.com/auth/prediction";

	public $hostedmodels;
	public $trainedmodels;

	/**
	 * Constructs the internal representation of the Prediction service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'prediction/v1.6/projects/';
		$this->version = 'v1.6';
		$this->serviceName = 'prediction';

		$this->hostedmodels = new Google_Service_Prediction_Resource_Hostedmodels(
			$this,
			$this->serviceName,
			'hostedmodels',
			[
				'methods' => [
					'predict' => [
						'path'       => '{project}/hostedmodels/{hostedModelName}/predict',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'hostedModelName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->trainedmodels = new Google_Service_Prediction_Resource_Trainedmodels(
			$this,
			$this->serviceName,
			'trainedmodels',
			[
				'methods' => [
					'analyze'    => [
						'path'       => '{project}/trainedmodels/{id}/analyze',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'  => [
						'path'       => '{project}/trainedmodels/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'     => [
						'path'       => '{project}/trainedmodels/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'  => [
						'path'       => '{project}/trainedmodels',
						'httpMethod' => 'POST',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'    => [
						'path'       => '{project}/trainedmodels/list',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
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
					], 'predict' => [
						'path'       => '{project}/trainedmodels/{id}/predict',
						'httpMethod' => 'POST',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'  => [
						'path'       => '{project}/trainedmodels/{id}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'      => [
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
