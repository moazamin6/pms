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
 * Service definition for Pagespeedonline (v4).
 *
 * <p>
 * Analyzes the performance of a web page and provides tailored suggestions to
 * make that page faster.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/speed/docs/insights/v4/getting-started" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Pagespeedonline extends Google_Service
{


	public $pagespeedapi;

	/**
	 * Constructs the internal representation of the Pagespeedonline service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'pagespeedonline/v4/';
		$this->version = 'v4';
		$this->serviceName = 'pagespeedonline';

		$this->pagespeedapi = new Google_Service_Pagespeedonline_Resource_Pagespeedapi(
			$this,
			$this->serviceName,
			'pagespeedapi',
			[
				'methods' => [
					'runpagespeed' => [
						'path'       => 'runPagespeed',
						'httpMethod' => 'GET',
						'parameters' => [
							'url'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'filter_third_party_resources' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'locale'                       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'rule'                         => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'screenshot'                   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'snapshots'                    => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'strategy'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'utm_campaign'                 => [
								'location' => 'query',
								'type'     => 'string',
							],
							'utm_source'                   => [
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
