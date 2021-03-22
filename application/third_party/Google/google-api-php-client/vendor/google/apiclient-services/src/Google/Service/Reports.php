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
 * Service definition for Reports (reports_v1).
 *
 * <p>
 * Fetches reports for the administrators of G Suite customers about the usage,
 * collaboration, security, and risk for their users.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/admin-sdk/reports/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Reports extends Google_Service
{
	/** View audit reports for your G Suite domain. */
	const ADMIN_REPORTS_AUDIT_READONLY =
		"https://www.googleapis.com/auth/admin.reports.audit.readonly";
	/** View usage reports for your G Suite domain. */
	const ADMIN_REPORTS_USAGE_READONLY =
		"https://www.googleapis.com/auth/admin.reports.usage.readonly";

	public $activities;
	public $channels;
	public $customerUsageReports;
	public $entityUsageReports;
	public $userUsageReport;

	/**
	 * Constructs the internal representation of the Reports service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'admin/reports/v1/';
		$this->version = 'reports_v1';
		$this->serviceName = 'admin';

		$this->activities = new Google_Service_Reports_Resource_Activities(
			$this,
			$this->serviceName,
			'activities',
			[
				'methods' => [
					'list'     => [
						'path'       => 'activity/users/{userKey}/applications/{applicationName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userKey'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'applicationName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'actorIpAddress'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customerId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'endTime'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'eventName'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filters'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startTime'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'watch' => [
						'path'       => 'activity/users/{userKey}/applications/{applicationName}/watch',
						'httpMethod' => 'POST',
						'parameters' => [
							'userKey'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'applicationName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'actorIpAddress'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customerId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'endTime'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'eventName'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filters'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'startTime'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->channels = new Google_Service_Reports_Resource_Channels(
			$this,
			$this->serviceName,
			'channels',
			[
				'methods' => [
					'stop' => [
						'path'       => '/admin/reports_v1/channels/stop',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->customerUsageReports = new Google_Service_Reports_Resource_CustomerUsageReports(
			$this,
			$this->serviceName,
			'customerUsageReports',
			[
				'methods' => [
					'get' => [
						'path'       => 'usage/dates/{date}',
						'httpMethod' => 'GET',
						'parameters' => [
							'date'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'customerId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'parameters' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->entityUsageReports = new Google_Service_Reports_Resource_EntityUsageReports(
			$this,
			$this->serviceName,
			'entityUsageReports',
			[
				'methods' => [
					'get' => [
						'path'       => 'usage/{entityType}/{entityKey}/dates/{date}',
						'httpMethod' => 'GET',
						'parameters' => [
							'entityType' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'entityKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'date'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'customerId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filters'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'parameters' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->userUsageReport = new Google_Service_Reports_Resource_UserUsageReport(
			$this,
			$this->serviceName,
			'userUsageReport',
			[
				'methods' => [
					'get' => [
						'path'       => 'usage/users/{userKey}/dates/{date}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userKey'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'date'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'customerId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filters'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'parameters' => [
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
