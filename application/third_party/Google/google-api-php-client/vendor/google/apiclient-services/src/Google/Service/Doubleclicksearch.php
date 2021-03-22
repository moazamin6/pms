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
 * Service definition for Doubleclicksearch (v2).
 *
 * <p>
 * Reports and modifies your advertising data in DoubleClick Search (for
 * example, campaigns, ad groups, keywords, and conversions).</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/doubleclick-search/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Doubleclicksearch extends Google_Service
{
	/** View and manage your advertising data in DoubleClick Search. */
	const DOUBLECLICKSEARCH =
		"https://www.googleapis.com/auth/doubleclicksearch";

	public $conversion;
	public $reports;
	public $savedColumns;

	/**
	 * Constructs the internal representation of the Doubleclicksearch service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'doubleclicksearch/v2/';
		$this->version = 'v2';
		$this->serviceName = 'doubleclicksearch';

		$this->conversion = new Google_Service_Doubleclicksearch_Resource_Conversion(
			$this,
			$this->serviceName,
			'conversion',
			[
				'methods' => [
					'get'                   => [
						'path'       => 'agency/{agencyId}/advertiser/{advertiserId}/engine/{engineAccountId}/conversion',
						'httpMethod' => 'GET',
						'parameters' => [
							'agencyId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'advertiserId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'engineAccountId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'endDate'         => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'rowCount'        => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'startDate'       => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'startRow'        => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'adGroupId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'adId'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'campaignId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'criterionId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert'             => [
						'path'       => 'conversion',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'patch'              => [
						'path'       => 'conversion',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'advertiserId'    => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'agencyId'        => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'endDate'         => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'engineAccountId' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'rowCount'        => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'startDate'       => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'startRow'        => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'update'             => [
						'path'       => 'conversion',
						'httpMethod' => 'PUT',
						'parameters' => [],
					], 'updateAvailability' => [
						'path'       => 'conversion/updateAvailability',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->reports = new Google_Service_Doubleclicksearch_Resource_Reports(
			$this,
			$this->serviceName,
			'reports',
			[
				'methods' => [
					'generate'   => [
						'path'       => 'reports/generate',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'     => [
						'path'       => 'reports/{reportId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'reportId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getFile' => [
						'path'       => 'reports/{reportId}/files/{reportFragment}',
						'httpMethod' => 'GET',
						'parameters' => [
							'reportId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'reportFragment' => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'request' => [
						'path'       => 'reports',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->savedColumns = new Google_Service_Doubleclicksearch_Resource_SavedColumns(
			$this,
			$this->serviceName,
			'savedColumns',
			[
				'methods' => [
					'list' => [
						'path'       => 'agency/{agencyId}/advertiser/{advertiserId}/savedcolumns',
						'httpMethod' => 'GET',
						'parameters' => [
							'agencyId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'advertiserId' => [
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
