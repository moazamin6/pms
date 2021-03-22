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
 * Service definition for Surveys (v2).
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
class Google_Service_Surveys extends Google_Service
{
	/** View and manage your surveys and results. */
	const SURVEYS =
		"https://www.googleapis.com/auth/surveys";
	/** View your surveys and survey results. */
	const SURVEYS_READONLY =
		"https://www.googleapis.com/auth/surveys.readonly";
	/** View your email address. */
	const USERINFO_EMAIL =
		"https://www.googleapis.com/auth/userinfo.email";

	public $results;
	public $surveys;

	/**
	 * Constructs the internal representation of the Surveys service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'surveys/v2/';
		$this->version = 'v2';
		$this->serviceName = 'surveys';

		$this->results = new Google_Service_Surveys_Resource_Results(
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
		$this->surveys = new Google_Service_Surveys_Resource_Surveys(
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
