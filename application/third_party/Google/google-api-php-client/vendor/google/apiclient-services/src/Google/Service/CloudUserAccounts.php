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
 * Service definition for CloudUserAccounts (vm_alpha).
 *
 * <p>
 * Creates and manages users and groups for accessing Google Compute Engine
 * virtual machines.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/compute/docs/access/user-accounts/api/latest/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_CloudUserAccounts extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM_READ_ONLY =
		"https://www.googleapis.com/auth/cloud-platform.read-only";
	/** Manage your Google Cloud User Accounts. */
	const CLOUD_USERACCOUNTS =
		"https://www.googleapis.com/auth/cloud.useraccounts";
	/** View your Google Cloud User Accounts. */
	const CLOUD_USERACCOUNTS_READONLY =
		"https://www.googleapis.com/auth/cloud.useraccounts.readonly";

	public $globalAccountsOperations;
	public $groups;
	public $linux;
	public $users;

	/**
	 * Constructs the internal representation of the CloudUserAccounts service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'clouduseraccounts/vm_alpha/projects/';
		$this->version = 'vm_alpha';
		$this->serviceName = 'clouduseraccounts';

		$this->globalAccountsOperations = new Google_Service_CloudUserAccounts_Resource_GlobalAccountsOperations(
			$this,
			$this->serviceName,
			'globalAccountsOperations',
			[
				'methods' => [
					'delete'  => [
						'path'       => '{project}/global/operations/{operation}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'operation' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => '{project}/global/operations/{operation}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'operation' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{project}/global/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->groups = new Google_Service_CloudUserAccounts_Resource_Groups(
			$this,
			$this->serviceName,
			'groups',
			[
				'methods' => [
					'addMember'             => [
						'path'       => '{project}/global/groups/{groupName}/addMember',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'groupName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'             => [
						'path'       => '{project}/global/groups/{groupName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'groupName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => '{project}/global/groups/{groupName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'groupName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => '{project}/global/groups/{resource}/getIamPolicy',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'             => [
						'path'       => '{project}/global/groups',
						'httpMethod' => 'POST',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => '{project}/global/groups',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'removeMember'       => [
						'path'       => '{project}/global/groups/{groupName}/removeMember',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'groupName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setIamPolicy'       => [
						'path'       => '{project}/global/groups/{resource}/setIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'testIamPermissions' => [
						'path'       => '{project}/global/groups/{resource}/testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->linux = new Google_Service_CloudUserAccounts_Resource_Linux(
			$this,
			$this->serviceName,
			'linux',
			[
				'methods' => [
					'getAuthorizedKeysView'   => [
						'path'       => '{project}/zones/{zone}/authorizedKeysView/{user}',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'user'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'login'    => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'getLinuxAccountViews' => [
						'path'       => '{project}/zones/{zone}/linuxAccountViews',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'zone'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
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
		$this->users = new Google_Service_CloudUserAccounts_Resource_Users(
			$this,
			$this->serviceName,
			'users',
			[
				'methods' => [
					'addPublicKey'          => [
						'path'       => '{project}/global/users/{user}/addPublicKey',
						'httpMethod' => 'POST',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'user'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'             => [
						'path'       => '{project}/global/users/{user}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'user'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => '{project}/global/users/{user}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'user'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => '{project}/global/users/{resource}/getIamPolicy',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'             => [
						'path'       => '{project}/global/users',
						'httpMethod' => 'POST',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => '{project}/global/users',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'removePublicKey'    => [
						'path'       => '{project}/global/users/{user}/removePublicKey',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'user'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setIamPolicy'       => [
						'path'       => '{project}/global/users/{resource}/setIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'testIamPermissions' => [
						'path'       => '{project}/global/users/{resource}/testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resource' => [
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
