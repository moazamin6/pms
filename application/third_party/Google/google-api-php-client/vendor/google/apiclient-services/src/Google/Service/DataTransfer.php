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
 * Service definition for DataTransfer (datatransfer_v1).
 *
 * <p>
 * Transfers user data from one user to another.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/admin-sdk/data-transfer/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_DataTransfer extends Google_Service
{
	/** View and manage data transfers between users in your organization. */
	const ADMIN_DATATRANSFER =
		"https://www.googleapis.com/auth/admin.datatransfer";
	/** View data transfers between users in your organization. */
	const ADMIN_DATATRANSFER_READONLY =
		"https://www.googleapis.com/auth/admin.datatransfer.readonly";

	public $applications;
	public $transfers;

	/**
	 * Constructs the internal representation of the DataTransfer service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'admin/datatransfer/v1/';
		$this->version = 'datatransfer_v1';
		$this->serviceName = 'admin';

		$this->applications = new Google_Service_DataTransfer_Resource_Applications(
			$this,
			$this->serviceName,
			'applications',
			[
				'methods' => [
					'get'     => [
						'path'       => 'applications/{applicationId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'applicationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'applications',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId' => [
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
						],
					],
				],
			]
		);
		$this->transfers = new Google_Service_DataTransfer_Resource_Transfers(
			$this,
			$this->serviceName,
			'transfers',
			[
				'methods' => [
					'get'       => [
						'path'       => 'transfers/{dataTransferId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'dataTransferId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'transfers',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'   => [
						'path'       => 'transfers',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'newOwnerUserId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'oldOwnerUserId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'status'         => [
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
