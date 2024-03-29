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
 * Service definition for AdExchangeSeller (v2.0).
 *
 * <p>
 * Accesses the inventory of Ad Exchange seller users and generates reports.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/ad-exchange/seller-rest/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_AdExchangeSeller extends Google_Service
{
	/** View and manage your Ad Exchange data. */
	const ADEXCHANGE_SELLER =
		"https://www.googleapis.com/auth/adexchange.seller";
	/** View your Ad Exchange data. */
	const ADEXCHANGE_SELLER_READONLY =
		"https://www.googleapis.com/auth/adexchange.seller.readonly";

	public $accounts;
	public $accounts_adclients;
	public $accounts_alerts;
	public $accounts_customchannels;
	public $accounts_metadata_dimensions;
	public $accounts_metadata_metrics;
	public $accounts_preferreddeals;
	public $accounts_reports;
	public $accounts_reports_saved;
	public $accounts_urlchannels;

	/**
	 * Constructs the internal representation of the AdExchangeSeller service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'adexchangeseller/v2.0/';
		$this->version = 'v2.0';
		$this->serviceName = 'adexchangeseller';

		$this->accounts = new Google_Service_AdExchangeSeller_Resource_Accounts(
			$this,
			$this->serviceName,
			'accounts',
			[
				'methods' => [
					'get'     => [
						'path'       => 'accounts/{accountId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'accounts',
						'httpMethod' => 'GET',
						'parameters' => [
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_adclients = new Google_Service_AdExchangeSeller_Resource_AccountsAdclients(
			$this,
			$this->serviceName,
			'adclients',
			[
				'methods' => [
					'list' => [
						'path'       => 'accounts/{accountId}/adclients',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId'  => [
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
					],
				],
			]
		);
		$this->accounts_alerts = new Google_Service_AdExchangeSeller_Resource_AccountsAlerts(
			$this,
			$this->serviceName,
			'alerts',
			[
				'methods' => [
					'list' => [
						'path'       => 'accounts/{accountId}/alerts',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'locale'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_customchannels = new Google_Service_AdExchangeSeller_Resource_AccountsCustomchannels(
			$this,
			$this->serviceName,
			'customchannels',
			[
				'methods' => [
					'get'     => [
						'path'       => 'accounts/{accountId}/adclients/{adClientId}/customchannels/{customChannelId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'adClientId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'customChannelId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'accounts/{accountId}/adclients/{adClientId}/customchannels',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'adClientId' => [
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
					],
				],
			]
		);
		$this->accounts_metadata_dimensions = new Google_Service_AdExchangeSeller_Resource_AccountsMetadataDimensions(
			$this,
			$this->serviceName,
			'dimensions',
			[
				'methods' => [
					'list' => [
						'path'       => 'accounts/{accountId}/metadata/dimensions',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->accounts_metadata_metrics = new Google_Service_AdExchangeSeller_Resource_AccountsMetadataMetrics(
			$this,
			$this->serviceName,
			'metrics',
			[
				'methods' => [
					'list' => [
						'path'       => 'accounts/{accountId}/metadata/metrics',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->accounts_preferreddeals = new Google_Service_AdExchangeSeller_Resource_AccountsPreferreddeals(
			$this,
			$this->serviceName,
			'preferreddeals',
			[
				'methods' => [
					'get'     => [
						'path'       => 'accounts/{accountId}/preferreddeals/{dealId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dealId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'accounts/{accountId}/preferreddeals',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->accounts_reports = new Google_Service_AdExchangeSeller_Resource_AccountsReports(
			$this,
			$this->serviceName,
			'reports',
			[
				'methods' => [
					'generate' => [
						'path'       => 'accounts/{accountId}/reports',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'startDate'  => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'endDate'    => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'dimension'  => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'locale'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'metric'     => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'sort'       => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'startIndex' => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
		$this->accounts_reports_saved = new Google_Service_AdExchangeSeller_Resource_AccountsReportsSaved(
			$this,
			$this->serviceName,
			'saved',
			[
				'methods' => [
					'generate' => [
						'path'       => 'accounts/{accountId}/reports/{savedReportId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'savedReportId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'locale'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'startIndex'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'list'  => [
						'path'       => 'accounts/{accountId}/reports/saved',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId'  => [
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
					],
				],
			]
		);
		$this->accounts_urlchannels = new Google_Service_AdExchangeSeller_Resource_AccountsUrlchannels(
			$this,
			$this->serviceName,
			'urlchannels',
			[
				'methods' => [
					'list' => [
						'path'       => 'accounts/{accountId}/adclients/{adClientId}/urlchannels',
						'httpMethod' => 'GET',
						'parameters' => [
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'adClientId' => [
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
					],
				],
			]
		);
	}
}
