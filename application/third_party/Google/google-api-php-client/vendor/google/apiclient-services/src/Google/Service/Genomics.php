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
 * Service definition for Genomics (v1).
 *
 * <p>
 * Upload, process, query, and search Genomics data in the cloud.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/genomics" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Genomics extends Google_Service
{
	/** View and manage your data in Google BigQuery. */
	const BIGQUERY =
		"https://www.googleapis.com/auth/bigquery";
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** Manage your data in Google Cloud Storage. */
	const DEVSTORAGE_READ_WRITE =
		"https://www.googleapis.com/auth/devstorage.read_write";
	/** View and manage Genomics data. */
	const GENOMICS =
		"https://www.googleapis.com/auth/genomics";
	/** View Genomics data. */
	const GENOMICS_READONLY =
		"https://www.googleapis.com/auth/genomics.readonly";

	public $annotations;
	public $annotationsets;
	public $callsets;
	public $datasets;
	public $operations;
	public $readgroupsets;
	public $readgroupsets_coveragebuckets;
	public $reads;
	public $references;
	public $references_bases;
	public $referencesets;
	public $variants;
	public $variantsets;

	/**
	 * Constructs the internal representation of the Genomics service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://genomics.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'genomics';

		$this->annotations = new Google_Service_Genomics_Resource_Annotations(
			$this,
			$this->serviceName,
			'annotations',
			[
				'methods' => [
					'batchCreate' => [
						'path'       => 'v1/annotations:batchCreate',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'create'   => [
						'path'       => 'v1/annotations',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete'   => [
						'path'       => 'v1/annotations/{annotationId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'annotationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'      => [
						'path'       => 'v1/annotations/{annotationId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'annotationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'search'   => [
						'path'       => 'v1/annotations/search',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'update'   => [
						'path'       => 'v1/annotations/{annotationId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'annotationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->annotationsets = new Google_Service_Genomics_Resource_Annotationsets(
			$this,
			$this->serviceName,
			'annotationsets',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/annotationsets',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete' => [
						'path'       => 'v1/annotationsets/{annotationSetId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'annotationSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/annotationsets/{annotationSetId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'annotationSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'search' => [
						'path'       => 'v1/annotationsets/search',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'update' => [
						'path'       => 'v1/annotationsets/{annotationSetId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'annotationSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->callsets = new Google_Service_Genomics_Resource_Callsets(
			$this,
			$this->serviceName,
			'callsets',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/callsets',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete' => [
						'path'       => 'v1/callsets/{callSetId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'callSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/callsets/{callSetId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'callSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'v1/callsets/{callSetId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'callSetId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'search' => [
						'path'       => 'v1/callsets/search',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->datasets = new Google_Service_Genomics_Resource_Datasets(
			$this,
			$this->serviceName,
			'datasets',
			[
				'methods' => [
					'create'                => [
						'path'       => 'v1/datasets',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete'             => [
						'path'       => 'v1/datasets/{datasetId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'datasetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => 'v1/datasets/{datasetId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'datasetId' => [
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
						'path'       => 'v1/datasets',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'projectId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'              => [
						'path'       => 'v1/datasets/{datasetId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'datasetId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
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
					], 'undelete'           => [
						'path'       => 'v1/datasets/{datasetId}:undelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'datasetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->operations = new Google_Service_Genomics_Resource_Operations(
			$this,
			$this->serviceName,
			'operations',
			[
				'methods' => [
					'cancel'  => [
						'path'       => 'v1/{+name}:cancel',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
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
		$this->readgroupsets = new Google_Service_Genomics_Resource_Readgroupsets(
			$this,
			$this->serviceName,
			'readgroupsets',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'v1/readgroupsets/{readGroupSetId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'readGroupSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'export' => [
						'path'       => 'v1/readgroupsets/{readGroupSetId}:export',
						'httpMethod' => 'POST',
						'parameters' => [
							'readGroupSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/readgroupsets/{readGroupSetId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'readGroupSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'import' => [
						'path'       => 'v1/readgroupsets:import',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'patch'  => [
						'path'       => 'v1/readgroupsets/{readGroupSetId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'readGroupSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'search' => [
						'path'       => 'v1/readgroupsets/search',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->readgroupsets_coveragebuckets = new Google_Service_Genomics_Resource_ReadgroupsetsCoveragebuckets(
			$this,
			$this->serviceName,
			'coveragebuckets',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/readgroupsets/{readGroupSetId}/coveragebuckets',
						'httpMethod' => 'GET',
						'parameters' => [
							'readGroupSetId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'referenceName'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'end'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'          => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'start'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'targetBucketWidth' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->reads = new Google_Service_Genomics_Resource_Reads(
			$this,
			$this->serviceName,
			'reads',
			[
				'methods' => [
					'search' => [
						'path'       => 'v1/reads/search',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->references = new Google_Service_Genomics_Resource_References(
			$this,
			$this->serviceName,
			'references',
			[
				'methods' => [
					'get'       => [
						'path'       => 'v1/references/{referenceId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'referenceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'search' => [
						'path'       => 'v1/references/search',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->references_bases = new Google_Service_Genomics_Resource_ReferencesBases(
			$this,
			$this->serviceName,
			'bases',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/references/{referenceId}/bases',
						'httpMethod' => 'GET',
						'parameters' => [
							'referenceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'start'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'end'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
		$this->referencesets = new Google_Service_Genomics_Resource_Referencesets(
			$this,
			$this->serviceName,
			'referencesets',
			[
				'methods' => [
					'get'       => [
						'path'       => 'v1/referencesets/{referenceSetId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'referenceSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'search' => [
						'path'       => 'v1/referencesets/search',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->variants = new Google_Service_Genomics_Resource_Variants(
			$this,
			$this->serviceName,
			'variants',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/variants',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete' => [
						'path'       => 'v1/variants/{variantId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'variantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/variants/{variantId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'variantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'import' => [
						'path'       => 'v1/variants:import',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'merge'  => [
						'path'       => 'v1/variants:merge',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'patch'  => [
						'path'       => 'v1/variants/{variantId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'variantId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'search' => [
						'path'       => 'v1/variants/search',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->variantsets = new Google_Service_Genomics_Resource_Variantsets(
			$this,
			$this->serviceName,
			'variantsets',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/variantsets',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete' => [
						'path'       => 'v1/variantsets/{variantSetId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'variantSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'export' => [
						'path'       => 'v1/variantsets/{variantSetId}:export',
						'httpMethod' => 'POST',
						'parameters' => [
							'variantSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/variantsets/{variantSetId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'variantSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'v1/variantsets/{variantSetId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'variantSetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'search' => [
						'path'       => 'v1/variantsets/search',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
	}
}
