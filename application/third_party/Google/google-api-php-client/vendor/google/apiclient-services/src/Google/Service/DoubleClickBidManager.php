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
 * Service definition for DoubleClickBidManager (v1).
 *
 * <p>
 * API for viewing and managing your reports in DoubleClick Bid Manager.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/bid-manager/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_DoubleClickBidManager extends Google_Service
{
	/** View and manage your reports in DoubleClick Bid Manager. */
	const DOUBLECLICKBIDMANAGER =
		"https://www.googleapis.com/auth/doubleclickbidmanager";

	public $lineitems;
	public $queries;
	public $reports;
	public $sdf;

	/**
	 * Constructs the internal representation of the DoubleClickBidManager
	 * service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'doubleclickbidmanager/v1/';
		$this->version = 'v1';
		$this->serviceName = 'doubleclickbidmanager';

		$this->lineitems = new Google_Service_DoubleClickBidManager_Resource_Lineitems(
			$this,
			$this->serviceName,
			'lineitems',
			[
				'methods' => [
					'downloadlineitems'  => [
						'path'       => 'lineitems/downloadlineitems',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'uploadlineitems' => [
						'path'       => 'lineitems/uploadlineitems',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->queries = new Google_Service_DoubleClickBidManager_Resource_Queries(
			$this,
			$this->serviceName,
			'queries',
			[
				'methods' => [
					'createquery'    => [
						'path'       => 'query',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'deletequery' => [
						'path'       => 'query/{queryId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'queryId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getquery'    => [
						'path'       => 'query/{queryId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'queryId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'listqueries' => [
						'path'       => 'queries',
						'httpMethod' => 'GET',
						'parameters' => [],
					], 'runquery'    => [
						'path'       => 'query/{queryId}',
						'httpMethod' => 'POST',
						'parameters' => [
							'queryId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->reports = new Google_Service_DoubleClickBidManager_Resource_Reports(
			$this,
			$this->serviceName,
			'reports',
			[
				'methods' => [
					'listreports' => [
						'path'       => 'queries/{queryId}/reports',
						'httpMethod' => 'GET',
						'parameters' => [
							'queryId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->sdf = new Google_Service_DoubleClickBidManager_Resource_Sdf(
			$this,
			$this->serviceName,
			'sdf',
			[
				'methods' => [
					'download' => [
						'path'       => 'sdf/download',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
	}
}
