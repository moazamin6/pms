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
 * Service definition for Firestore (v1beta1).
 *
 * <p>
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/firestore" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Firestore extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View and manage your Google Cloud Datastore data. */
	const DATASTORE =
		"https://www.googleapis.com/auth/datastore";
	
	public $projects_databases_documents;
	public $projects_databases_indexes;
	
	/**
	 * Constructs the internal representation of the Firestore service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://firestore.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1beta1';
		$this->serviceName = 'firestore';
		
		$this->projects_databases_documents = new Google_Service_Firestore_Resource_ProjectsDatabasesDocuments(
			$this,
			$this->serviceName,
			'documents',
			[
				'methods' => [
					'batchGet'             => [
						'path'       => 'v1beta1/{+database}/documents:batchGet',
						'httpMethod' => 'POST',
						'parameters' => [
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'beginTransaction'  => [
						'path'       => 'v1beta1/{+database}/documents:beginTransaction',
						'httpMethod' => 'POST',
						'parameters' => [
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'commit'            => [
						'path'       => 'v1beta1/{+database}/documents:commit',
						'httpMethod' => 'POST',
						'parameters' => [
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'createDocument'    => [
						'path'       => 'v1beta1/{+parent}/{collectionId}',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'collectionId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'documentId'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'mask.fieldPaths' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'delete'            => [
						'path'       => 'v1beta1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name'                       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'currentDocument.updateTime' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'currentDocument.exists'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'               => [
						'path'       => 'v1beta1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'            => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'transaction'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'mask.fieldPaths' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'readTime'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'              => [
						'path'       => 'v1beta1/{+parent}/{collectionId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'collectionId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderBy'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'readTime'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'showMissing'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'mask.fieldPaths' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'pageSize'        => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'transaction'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'listCollectionIds' => [
						'path'       => 'v1beta1/{+parent}:listCollectionIds',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'listen'            => [
						'path'       => 'v1beta1/{+database}/documents:listen',
						'httpMethod' => 'POST',
						'parameters' => [
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'             => [
						'path'       => 'v1beta1/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name'                       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'currentDocument.exists'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updateMask.fieldPaths'      => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'mask.fieldPaths'            => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'currentDocument.updateTime' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'rollback'          => [
						'path'       => 'v1beta1/{+database}/documents:rollback',
						'httpMethod' => 'POST',
						'parameters' => [
							'database' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'runQuery'          => [
						'path'       => 'v1beta1/{+parent}:runQuery',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'write'             => [
						'path'       => 'v1beta1/{+database}/documents:write',
						'httpMethod' => 'POST',
						'parameters' => [
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
		$this->projects_databases_indexes = new Google_Service_Firestore_Resource_ProjectsDatabasesIndexes(
			$this,
			$this->serviceName,
			'indexes',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1beta1/{+parent}/indexes',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1beta1/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1beta1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1beta1/{+parent}/indexes',
						'httpMethod' => 'GET',
						'parameters' => [
							'parent'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'filter'    => [
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
						],
					],
				],
			]
		);
	}
}
