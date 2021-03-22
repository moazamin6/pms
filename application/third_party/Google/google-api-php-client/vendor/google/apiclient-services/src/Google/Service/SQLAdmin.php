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
 * Service definition for SQLAdmin (v1beta4).
 *
 * <p>
 * Creates and configures Cloud SQL instances, which provide fully-managed MySQL
 * databases.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/sql/docs/reference/latest" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_SQLAdmin extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** Manage your Google SQL Service instances. */
	const SQLSERVICE_ADMIN =
		"https://www.googleapis.com/auth/sqlservice.admin";
	
	public $backupRuns;
	public $databases;
	public $flags;
	public $instances;
	public $operations;
	public $sslCerts;
	public $tiers;
	public $users;
	
	/**
	 * Constructs the internal representation of the SQLAdmin service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'sql/v1beta4/';
		$this->version = 'v1beta4';
		$this->serviceName = 'sqladmin';
		
		$this->backupRuns = new Google_Service_SQLAdmin_Resource_BackupRuns(
			$this,
			$this->serviceName,
			'backupRuns',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'projects/{project}/instances/{instance}/backupRuns/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'projects/{project}/instances/{instance}/backupRuns/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'projects/{project}/instances/{instance}/backupRuns',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'projects/{project}/instances/{instance}/backupRuns',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'   => [
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
		$this->databases = new Google_Service_SQLAdmin_Resource_Databases(
			$this,
			$this->serviceName,
			'databases',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'projects/{project}/instances/{instance}/databases/{database}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'projects/{project}/instances/{instance}/databases/{database}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'projects/{project}/instances/{instance}/databases',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'projects/{project}/instances/{instance}/databases',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'projects/{project}/instances/{instance}/databases/{database}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'projects/{project}/instances/{instance}/databases/{database}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->flags = new Google_Service_SQLAdmin_Resource_Flags(
			$this,
			$this->serviceName,
			'flags',
			[
				'methods' => [
					'list' => [
						'path'       => 'flags',
						'httpMethod' => 'GET',
						'parameters' => [
							'databaseVersion' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->instances = new Google_Service_SQLAdmin_Resource_Instances(
			$this,
			$this->serviceName,
			'instances',
			[
				'methods' => [
					'addServerCa'       => [
						'path'       => 'projects/{project}/instances/{instance}/addServerCa',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'clone'          => [
						'path'       => 'projects/{project}/instances/{instance}/clone',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'         => [
						'path'       => 'projects/{project}/instances/{instance}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'demoteMaster'   => [
						'path'       => 'projects/{project}/instances/{instance}/demoteMaster',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'export'         => [
						'path'       => 'projects/{project}/instances/{instance}/export',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'failover'       => [
						'path'       => 'projects/{project}/instances/{instance}/failover',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'            => [
						'path'       => 'projects/{project}/instances/{instance}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'import'         => [
						'path'       => 'projects/{project}/instances/{instance}/import',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'         => [
						'path'       => 'projects/{project}/instances',
						'httpMethod' => 'POST',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'           => [
						'path'       => 'projects/{project}/instances',
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
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listServerCas'  => [
						'path'       => 'projects/{project}/instances/{instance}/listServerCas',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'          => [
						'path'       => 'projects/{project}/instances/{instance}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'promoteReplica' => [
						'path'       => 'projects/{project}/instances/{instance}/promoteReplica',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resetSslConfig' => [
						'path'       => 'projects/{project}/instances/{instance}/resetSslConfig',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'restart'        => [
						'path'       => 'projects/{project}/instances/{instance}/restart',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'restoreBackup'  => [
						'path'       => 'projects/{project}/instances/{instance}/restoreBackup',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'rotateServerCa' => [
						'path'       => 'projects/{project}/instances/{instance}/rotateServerCa',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'startReplica'   => [
						'path'       => 'projects/{project}/instances/{instance}/startReplica',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'stopReplica'    => [
						'path'       => 'projects/{project}/instances/{instance}/stopReplica',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'truncateLog'    => [
						'path'       => 'projects/{project}/instances/{instance}/truncateLog',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'         => [
						'path'       => 'projects/{project}/instances/{instance}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->operations = new Google_Service_SQLAdmin_Resource_Operations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'get'     => [
						'path'       => 'projects/{project}/operations/{operation}',
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
						'path'       => 'projects/{project}/operations',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'   => [
								'location' => 'query',
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
		$this->sslCerts = new Google_Service_SQLAdmin_Resource_SslCerts(
			$this,
			$this->serviceName,
			'sslCerts',
			[
				'methods' => [
					'createEphemeral' => [
						'path'       => 'projects/{project}/instances/{instance}/createEphemeral',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'       => [
						'path'       => 'projects/{project}/instances/{instance}/sslCerts/{sha1Fingerprint}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sha1Fingerprint' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'          => [
						'path'       => 'projects/{project}/instances/{instance}/sslCerts/{sha1Fingerprint}',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sha1Fingerprint' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'       => [
						'path'       => 'projects/{project}/instances/{instance}/sslCerts',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'         => [
						'path'       => 'projects/{project}/instances/{instance}/sslCerts',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->tiers = new Google_Service_SQLAdmin_Resource_Tiers(
			$this,
			$this->serviceName,
			'tiers',
			[
				'methods' => [
					'list' => [
						'path'       => 'projects/{project}/tiers',
						'httpMethod' => 'GET',
						'parameters' => [
							'project' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users = new Google_Service_SQLAdmin_Resource_Users(
			$this,
			$this->serviceName,
			'users',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'projects/{project}/instances/{instance}/users',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'host'     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'name'     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'projects/{project}/instances/{instance}/users',
						'httpMethod' => 'POST',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'projects/{project}/instances/{instance}/users',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'projects/{project}/instances/{instance}/users',
						'httpMethod' => 'PUT',
						'parameters' => [
							'project'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'instance' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'host'     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'name'     => [
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
