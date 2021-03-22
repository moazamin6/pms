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
 * Service definition for TagManager (v2).
 *
 * <p>
 * Accesses Tag Manager accounts and containers.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/tag-manager/api/v2/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_TagManager extends Google_Service
{
	/** Delete your Google Tag Manager containers. */
	const TAGMANAGER_DELETE_CONTAINERS =
		"https://www.googleapis.com/auth/tagmanager.delete.containers";
	/** Manage your Google Tag Manager container and its subcomponents, excluding versioning and publishing. */
	const TAGMANAGER_EDIT_CONTAINERS =
		"https://www.googleapis.com/auth/tagmanager.edit.containers";
	/** Manage your Google Tag Manager container versions. */
	const TAGMANAGER_EDIT_CONTAINERVERSIONS =
		"https://www.googleapis.com/auth/tagmanager.edit.containerversions";
	/** View and manage your Google Tag Manager accounts. */
	const TAGMANAGER_MANAGE_ACCOUNTS =
		"https://www.googleapis.com/auth/tagmanager.manage.accounts";
	/** Manage user permissions of your Google Tag Manager account and container. */
	const TAGMANAGER_MANAGE_USERS =
		"https://www.googleapis.com/auth/tagmanager.manage.users";
	/** Publish your Google Tag Manager container versions. */
	const TAGMANAGER_PUBLISH =
		"https://www.googleapis.com/auth/tagmanager.publish";
	/** View your Google Tag Manager container and its subcomponents. */
	const TAGMANAGER_READONLY =
		"https://www.googleapis.com/auth/tagmanager.readonly";
	
	public $accounts;
	public $accounts_containers;
	public $accounts_containers_environments;
	public $accounts_containers_version_headers;
	public $accounts_containers_versions;
	public $accounts_containers_workspaces;
	public $accounts_containers_workspaces_built_in_variables;
	public $accounts_containers_workspaces_folders;
	public $accounts_containers_workspaces_proposal;
	public $accounts_containers_workspaces_tags;
	public $accounts_containers_workspaces_triggers;
	public $accounts_containers_workspaces_variables;
	public $accounts_user_permissions;
	
	/**
	 * Constructs the internal representation of the TagManager service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'tagmanager/v2/';
		$this->version = 'v2';
		$this->serviceName = 'tagmanager';
		
		$this->accounts = new Google_Service_TagManager_Resource_Accounts(
			$this,
			$this->serviceName,
			'accounts',
			[
				'methods' => [
					'get'       => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'accounts',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_containers = new Google_Service_TagManager_Resource_AccountsContainers(
			$this,
			$this->serviceName,
			'containers',
			[
				'methods' => [
					'create'    => [
						'path'       => '{+parent}/containers',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{+parent}/containers',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_containers_environments = new Google_Service_TagManager_Resource_AccountsContainersEnvironments(
			$this,
			$this->serviceName,
			'environments',
			[
				'methods' => [
					'create'         => [
						'path'       => '{+parent}/environments',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'      => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'         => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'        => [
						'path'       => '{+parent}/environments',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'       => [
						'path'       => '{+path}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'reauthorize' => [
						'path'       => '{+path}:reauthorize',
						'httpMethod' => 'POST',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'      => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_containers_version_headers = new Google_Service_TagManager_Resource_AccountsContainersVersionHeaders(
			$this,
			$this->serviceName,
			'version_headers',
			[
				'methods' => [
					'latest'  => [
						'path'       => '{+parent}/version_headers:latest',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => '{+parent}/version_headers',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'includeDeleted' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_containers_versions = new Google_Service_TagManager_Resource_AccountsContainersVersions(
			$this,
			$this->serviceName,
			'versions',
			[
				'methods' => [
					'delete'        => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'        => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'containerVersionId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'live'       => [
						'path'       => '{+parent}/versions:live',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'publish'    => [
						'path'       => '{+path}:publish',
						'httpMethod' => 'POST',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'set_latest' => [
						'path'       => '{+path}:set_latest',
						'httpMethod' => 'POST',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'undelete'   => [
						'path'       => '{+path}:undelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'     => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_containers_workspaces = new Google_Service_TagManager_Resource_AccountsContainersWorkspaces(
			$this,
			$this->serviceName,
			'workspaces',
			[
				'methods' => [
					'create'              => [
						'path'       => '{+parent}/workspaces',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create_version'   => [
						'path'       => '{+path}:create_version',
						'httpMethod' => 'POST',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'           => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'              => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getProposal'      => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getStatus'        => [
						'path'       => '{+path}/status',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'             => [
						'path'       => '{+parent}/workspaces',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'quick_preview'    => [
						'path'       => '{+path}:quick_preview',
						'httpMethod' => 'POST',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resolve_conflict' => [
						'path'       => '{+path}:resolve_conflict',
						'httpMethod' => 'POST',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'sync'             => [
						'path'       => '{+path}:sync',
						'httpMethod' => 'POST',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'           => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'updateProposal'   => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->accounts_containers_workspaces_built_in_variables = new Google_Service_TagManager_Resource_AccountsContainersWorkspacesBuiltInVariables(
			$this,
			$this->serviceName,
			'built_in_variables',
			[
				'methods' => [
					'create'    => [
						'path'       => '{+parent}/built_in_variables',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'type'   => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'delete' => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'type' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'list'   => [
						'path'       => '{+parent}/built_in_variables',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'revert' => [
						'path'       => '{+path}/built_in_variables:revert',
						'httpMethod' => 'POST',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'type' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_containers_workspaces_folders = new Google_Service_TagManager_Resource_AccountsContainersWorkspacesFolders(
			$this,
			$this->serviceName,
			'folders',
			[
				'methods' => [
					'create'                     => [
						'path'       => '{+parent}/folders',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'                  => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'entities'                => [
						'path'       => '{+path}:entities',
						'httpMethod' => 'POST',
						'parameters' => [
							'path'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                     => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                    => [
						'path'       => '{+parent}/folders',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'move_entities_to_folder' => [
						'path'       => '{+path}:move_entities_to_folder',
						'httpMethod' => 'POST',
						'parameters' => [
							'path'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'tagId'      => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'triggerId'  => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'variableId' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'revert'                  => [
						'path'       => '{+path}:revert',
						'httpMethod' => 'POST',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'                  => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_containers_workspaces_proposal = new Google_Service_TagManager_Resource_AccountsContainersWorkspacesProposal(
			$this,
			$this->serviceName,
			'proposal',
			[
				'methods' => [
					'create'    => [
						'path'       => '{+parent}/proposal',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->accounts_containers_workspaces_tags = new Google_Service_TagManager_Resource_AccountsContainersWorkspacesTags(
			$this,
			$this->serviceName,
			'tags',
			[
				'methods' => [
					'create'    => [
						'path'       => '{+parent}/tags',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{+parent}/tags',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'revert' => [
						'path'       => '{+path}:revert',
						'httpMethod' => 'POST',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_containers_workspaces_triggers = new Google_Service_TagManager_Resource_AccountsContainersWorkspacesTriggers(
			$this,
			$this->serviceName,
			'triggers',
			[
				'methods' => [
					'create'    => [
						'path'       => '{+parent}/triggers',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{+parent}/triggers',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'revert' => [
						'path'       => '{+path}:revert',
						'httpMethod' => 'POST',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_containers_workspaces_variables = new Google_Service_TagManager_Resource_AccountsContainersWorkspacesVariables(
			$this,
			$this->serviceName,
			'variables',
			[
				'methods' => [
					'create'    => [
						'path'       => '{+parent}/variables',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{+parent}/variables',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'revert' => [
						'path'       => '{+path}:revert',
						'httpMethod' => 'POST',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'fingerprint' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounts_user_permissions = new Google_Service_TagManager_Resource_AccountsUserPermissions(
			$this,
			$this->serviceName,
			'user_permissions',
			[
				'methods' => [
					'create'    => [
						'path'       => '{+parent}/user_permissions',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => '{+path}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => '{+path}',
						'httpMethod' => 'GET',
						'parameters' => [
							'path' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => '{+parent}/user_permissions',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => '{+path}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'path' => [
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
