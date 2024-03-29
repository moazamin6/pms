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
 * Service definition for CloudSpeechAPI (v1beta1).
 *
 * <p>
 * Google Cloud Speech API.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/speech/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CloudSpeechAPI extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";

	public $operations;
	public $speech;

	/**
	 * Constructs the internal representation of the CloudSpeechAPI service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://speech.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1beta1';
		$this->serviceName = 'speech';

		$this->operations = new Google_Service_CloudSpeechAPI_Resource_Operations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'cancel'    => [
						'path'       => 'v1beta1/operations/{+name}:cancel',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1beta1/operations/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1beta1/operations/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1beta1/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'name'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->speech = new Google_Service_CloudSpeechAPI_Resource_Speech(
			$this,
			$this->serviceName,
			'speech',
			[
				'methods' => [
					'asyncrecognize'   => [
						'path'       => 'v1beta1/speech:asyncrecognize',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'syncrecognize' => [
						'path'       => 'v1beta1/speech:syncrecognize',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
	}
}
