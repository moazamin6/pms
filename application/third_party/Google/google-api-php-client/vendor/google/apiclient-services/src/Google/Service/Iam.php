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
 * Service definition for Iam (v1).
 *
 * <p>
 * Manages identity and access control for Google Cloud Platform resources,
 * including the creation of service accounts, which you can use to authenticate
 * to Google and make API calls.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/iam/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Iam extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";

	public $iamPolicies;
	public $organizations_roles;
	public $permissions;
	public $projects_roles;
	public $projects_serviceAccounts;
	public $projects_serviceAccounts_keys;
	public $roles;

	/**
	 * Constructs the internal representation of the Iam service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://iam.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'iam';

		$this->iamPolicies = new Google_Service_Iam_Resource_IamPolicies(
			$this,
			$this->serviceName,
			'iamPolicies',
			[
				'methods' => [
					'queryAuditableServices' => [
						'path'       => 'v1/iamPolicies:queryAuditableServices',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->organizations_roles = new Google_Service_Iam_Resource_OrganizationsRoles(
			$this,
			$this->serviceName,
			'roles',
			[
				'methods' => [
					'create'      => [
						'path'       => 'v1/{+parent}/roles',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'   => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'etag' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'      => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'     => [
						'path'       => 'v1/{+parent}/roles',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'showDeleted' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'view'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'    => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'undelete' => [
						'path'       => 'v1/{+name}:undelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->permissions = new Google_Service_Iam_Resource_Permissions(
			$this,
			$this->serviceName,
			'permissions',
			[
				'methods' => [
					'queryTestablePermissions' => [
						'path'       => 'v1/permissions:queryTestablePermissions',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->projects_roles = new Google_Service_Iam_Resource_ProjectsRoles(
			$this,
			$this->serviceName,
			'roles',
			[
				'methods' => [
					'create'      => [
						'path'       => 'v1/{+parent}/roles',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'   => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'etag' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'      => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'     => [
						'path'       => 'v1/{+parent}/roles',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'showDeleted' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'view'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'    => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'undelete' => [
						'path'       => 'v1/{+name}:undelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_serviceAccounts = new Google_Service_Iam_Resource_ProjectsServiceAccounts(
			$this,
			$this->serviceName,
			'serviceAccounts',
			[
				'methods' => [
					'create'                => [
						'path'       => 'v1/{+name}/serviceAccounts',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'             => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => 'v1/{+resource}:getIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => 'v1/{+name}/serviceAccounts',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
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
						],
					], 'setIamPolicy'       => [
						'path'       => 'v1/{+resource}:setIamPolicy',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'signBlob'           => [
						'path'       => 'v1/{+name}:signBlob',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'signJwt'            => [
						'path'       => 'v1/{+name}:signJwt',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'testIamPermissions' => [
						'path'       => 'v1/{+resource}:testIamPermissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'             => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->projects_serviceAccounts_keys = new Google_Service_Iam_Resource_ProjectsServiceAccountsKeys(
			$this,
			$this->serviceName,
			'keys',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/{+name}/keys',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'publicKeyType' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'v1/{+name}/keys',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'keyTypes' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					],
				],
			]
		);
		$this->roles = new Google_Service_Iam_Resource_Roles(
			$this,
			$this->serviceName,
			'roles',
			[
				'methods' => [
					'get'                    => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                => [
						'path'       => 'v1/roles',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageSize'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'view'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'parent'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'showDeleted' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'queryGrantableRoles' => [
						'path'       => 'v1/roles:queryGrantableRoles',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
	}
}
