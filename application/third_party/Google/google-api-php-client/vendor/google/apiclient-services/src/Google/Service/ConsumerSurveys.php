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
 * Service definition for ConsumerSurveys (v2).
 *
 * <p>
 * Creates and conducts surveys, lists the surveys that an authenticated user
 * owns, and retrieves survey results and information about specified surveys.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_ConsumerSurveys extends Google_Service
{
	/** View and edit your surveys and results. */
	const CONSUMERSURVEYS =
		"https://www.googleapis.com/auth/consumersurveys";
	/** View the results for your surveys. */
	const CONSUMERSURVEYS_READONLY =
		"https://www.googleapis.com/auth/consumersurveys.readonly";
	/** View your email address. */
	const USERINFO_EMAIL =
		"https://www.googleapis.com/auth/userinfo.email";

	public $mobileapppanels;
	public $results;
	public $surveys;

	/**
	 * Constructs the internal representation of the ConsumerSurveys service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'consumersurveys/v2/';
		$this->version = 'v2';
		$this->serviceName = 'consumersurveys';

		$this->mobileapppanels = new Google_Service_ConsumerSurveys_Resource_Mobileapppanels(
			$this,
			$this->serviceName,
			'mobileapppanels',
			[
				'methods' => [
					'get'       => [
						'path'       => 'mobileAppPanels/{panelId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'panelId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'mobileAppPanels',
						'httpMethod' => 'GET',
						'parameters' => [
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'startIndex' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'token'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'mobileAppPanels/{panelId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'panelId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->results = new Google_Service_ConsumerSurveys_Resource_Results(
			$this,
			$this->serviceName,
			'results',
			[
				'methods' => [
					'get' => [
						'path'       => 'surveys/{surveyUrlId}/results',
						'httpMethod' => 'GET',
						'parameters' => [
							'surveyUrlId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->surveys = new Google_Service_ConsumerSurveys_Resource_Surveys(
			$this,
			$this->serviceName,
			'surveys',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'surveys/{surveyUrlId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'surveyUrlId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'surveys/{surveyUrlId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'surveyUrlId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'surveys',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'   => [
						'path'       => 'surveys',
						'httpMethod' => 'GET',
						'parameters' => [
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'startIndex' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'token'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'start'  => [
						'path'       => 'surveys/{resourceId}/start',
						'httpMethod' => 'POST',
						'parameters' => [
							'resourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'stop'   => [
						'path'       => 'surveys/{resourceId}/stop',
						'httpMethod' => 'POST',
						'parameters' => [
							'resourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'surveys/{surveyUrlId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'surveyUrlId' => [
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
