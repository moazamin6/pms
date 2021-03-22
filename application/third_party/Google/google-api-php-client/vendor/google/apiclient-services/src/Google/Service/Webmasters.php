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
 * Service definition for Webmasters (v3).
 *
 * <p>
 * View Google Search Console data for your verified sites.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/webmaster-tools/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Webmasters extends Google_Service
{
	/** View and manage Search Console data for your verified sites. */
	const WEBMASTERS =
		"https://www.googleapis.com/auth/webmasters";
	/** View Search Console data for your verified sites. */
	const WEBMASTERS_READONLY =
		"https://www.googleapis.com/auth/webmasters.readonly";
	
	public $searchanalytics;
	public $sitemaps;
	public $sites;
	public $urlcrawlerrorscounts;
	public $urlcrawlerrorssamples;
	
	/**
	 * Constructs the internal representation of the Webmasters service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'webmasters/v3/';
		$this->version = 'v3';
		$this->serviceName = 'webmasters';
		
		$this->searchanalytics = new Google_Service_Webmasters_Resource_Searchanalytics(
			$this,
			$this->serviceName,
			'searchanalytics',
			[
				'methods' => [
					'query' => [
						'path'       => 'sites/{siteUrl}/searchAnalytics/query',
						'httpMethod' => 'POST',
						'parameters' => [
							'siteUrl' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->sitemaps = new Google_Service_Webmasters_Resource_Sitemaps(
			$this,
			$this->serviceName,
			'sitemaps',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'sites/{siteUrl}/sitemaps/{feedpath}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'siteUrl'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'feedpath' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'sites/{siteUrl}/sitemaps/{feedpath}',
						'httpMethod' => 'GET',
						'parameters' => [
							'siteUrl'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'feedpath' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'sites/{siteUrl}/sitemaps',
						'httpMethod' => 'GET',
						'parameters' => [
							'siteUrl'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sitemapIndex' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'submit' => [
						'path'       => 'sites/{siteUrl}/sitemaps/{feedpath}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'siteUrl'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'feedpath' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->sites = new Google_Service_Webmasters_Resource_Sites(
			$this,
			$this->serviceName,
			'sites',
			[
				'methods' => [
					'add'       => [
						'path'       => 'sites/{siteUrl}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'siteUrl' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'sites/{siteUrl}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'siteUrl' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'sites/{siteUrl}',
						'httpMethod' => 'GET',
						'parameters' => [
							'siteUrl' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'sites',
						'httpMethod' => 'GET',
						'parameters' => [],
					],
				],
			]
		);
		$this->urlcrawlerrorscounts = new Google_Service_Webmasters_Resource_Urlcrawlerrorscounts(
			$this,
			$this->serviceName,
			'urlcrawlerrorscounts',
			[
				'methods' => [
					'query' => [
						'path'       => 'sites/{siteUrl}/urlCrawlErrorsCounts/query',
						'httpMethod' => 'GET',
						'parameters' => [
							'siteUrl'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'category'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'latestCountsOnly' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'platform'         => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->urlcrawlerrorssamples = new Google_Service_Webmasters_Resource_Urlcrawlerrorssamples(
			$this,
			$this->serviceName,
			'urlcrawlerrorssamples',
			[
				'methods' => [
					'get'            => [
						'path'       => 'sites/{siteUrl}/urlCrawlErrorsSamples/{url}',
						'httpMethod' => 'GET',
						'parameters' => [
							'siteUrl'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'url'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'category' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'platform' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'        => [
						'path'       => 'sites/{siteUrl}/urlCrawlErrorsSamples',
						'httpMethod' => 'GET',
						'parameters' => [
							'siteUrl'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'category' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'platform' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'markAsFixed' => [
						'path'       => 'sites/{siteUrl}/urlCrawlErrorsSamples/{url}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'siteUrl'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'url'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'category' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'platform' => [
								'location' => 'query',
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
