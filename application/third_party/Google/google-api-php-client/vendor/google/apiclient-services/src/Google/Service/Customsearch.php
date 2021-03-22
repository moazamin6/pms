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
 * Service definition for Customsearch (v1).
 *
 * <p>
 * Searches over a website or collection of websites</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/custom-search/v1/using_rest" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Customsearch extends Google_Service
{
	
	
	public $cse;
	public $cse_siterestrict;
	
	/**
	 * Constructs the internal representation of the Customsearch service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'customsearch/';
		$this->version = 'v1';
		$this->serviceName = 'customsearch';
		
		$this->cse = new Google_Service_Customsearch_Resource_Cse(
			$this,
			$this->serviceName,
			'cse',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1',
						'httpMethod' => 'GET',
						'parameters' => [
							'q'                => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'c2coff'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'cr'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'cx'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'dateRestrict'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'exactTerms'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'excludeTerms'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'fileType'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filter'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'gl'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'googlehost'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'highRange'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'hl'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'hq'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'imgColorType'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'imgDominantColor' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'imgSize'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'imgType'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'linkSite'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'lowRange'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'lr'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'num'              => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orTerms'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'relatedSite'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'rights'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'safe'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'searchType'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'siteSearch'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'siteSearchFilter' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sort'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'start'            => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
		$this->cse_siterestrict = new Google_Service_Customsearch_Resource_CseSiterestrict(
			$this,
			$this->serviceName,
			'siterestrict',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/siterestrict',
						'httpMethod' => 'GET',
						'parameters' => [
							'q'                => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'c2coff'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'cr'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'cx'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'dateRestrict'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'exactTerms'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'excludeTerms'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'fileType'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filter'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'gl'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'googlehost'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'highRange'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'hl'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'hq'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'imgColorType'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'imgDominantColor' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'imgSize'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'imgType'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'linkSite'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'lowRange'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'lr'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'num'              => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orTerms'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'relatedSite'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'rights'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'safe'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'searchType'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'siteSearch'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'siteSearchFilter' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sort'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'start'            => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
	}
}
