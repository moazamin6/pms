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
 * Service definition for Vault (v1).
 *
 * <p>
 * Archiving and eDiscovery for G Suite.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/vault" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Vault extends Google_Service
{
	/** Manage your eDiscovery data. */
	const EDISCOVERY =
		"https://www.googleapis.com/auth/ediscovery";
	/** View your eDiscovery data. */
	const EDISCOVERY_READONLY =
		"https://www.googleapis.com/auth/ediscovery.readonly";

	public $matters;
	public $matters_holds;
	public $matters_holds_accounts;

	/**
	 * Constructs the internal representation of the Vault service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://vault.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'vault';

		$this->matters = new Google_Service_Vault_Resource_Matters(
			$this,
			$this->serviceName,
			'matters',
			[
				'methods' => [
					'addPermissions'       => [
						'path'       => 'v1/matters/{matterId}:addPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'close'             => [
						'path'       => 'v1/matters/{matterId}:close',
						'httpMethod' => 'POST',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'            => [
						'path'       => 'v1/matters',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete'            => [
						'path'       => 'v1/matters/{matterId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'               => [
						'path'       => 'v1/matters/{matterId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'view'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'              => [
						'path'       => 'v1/matters',
						'httpMethod' => 'GET',
						'parameters' => [
							'state'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'removePermissions' => [
						'path'       => 'v1/matters/{matterId}:removePermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'reopen'            => [
						'path'       => 'v1/matters/{matterId}:reopen',
						'httpMethod' => 'POST',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'undelete'          => [
						'path'       => 'v1/matters/{matterId}:undelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'            => [
						'path'       => 'v1/matters/{matterId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->matters_holds = new Google_Service_Vault_Resource_MattersHolds(
			$this,
			$this->serviceName,
			'holds',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/matters/{matterId}/holds',
						'httpMethod' => 'POST',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/matters/{matterId}/holds/{holdId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'holdId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/matters/{matterId}/holds/{holdId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'holdId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'view'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'v1/matters/{matterId}/holds',
						'httpMethod' => 'GET',
						'parameters' => [
							'matterId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'view'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'v1/matters/{matterId}/holds/{holdId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'holdId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->matters_holds_accounts = new Google_Service_Vault_Resource_MattersHoldsAccounts(
			$this,
			$this->serviceName,
			'accounts',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/matters/{matterId}/holds/{holdId}/accounts',
						'httpMethod' => 'POST',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'holdId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/matters/{matterId}/holds/{holdId}/accounts/{accountId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'matterId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'holdId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/matters/{matterId}/holds/{holdId}/accounts',
						'httpMethod' => 'GET',
						'parameters' => [
							'matterId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'holdId'   => [
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
