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
 * Service definition for Fusiontables (v2).
 *
 * <p>
 * API for working with Fusion Tables data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/fusiontables" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Fusiontables extends Google_Service
{
	/** Manage your Fusion Tables. */
	const FUSIONTABLES =
		"https://www.googleapis.com/auth/fusiontables";
	/** View your Fusion Tables. */
	const FUSIONTABLES_READONLY =
		"https://www.googleapis.com/auth/fusiontables.readonly";
	
	public $column;
	public $query;
	public $style;
	public $table;
	public $task;
	public $template;
	
	/**
	 * Constructs the internal representation of the Fusiontables service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'fusiontables/v2/';
		$this->version = 'v2';
		$this->serviceName = 'fusiontables';
		
		$this->column = new Google_Service_Fusiontables_Resource_Column(
			$this,
			$this->serviceName,
			'column',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'tables/{tableId}/columns/{columnId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'tableId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'columnId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'tables/{tableId}/columns/{columnId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'tableId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'columnId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'tables/{tableId}/columns',
						'httpMethod' => 'POST',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'tables/{tableId}/columns',
						'httpMethod' => 'GET',
						'parameters' => [
							'tableId'    => [
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
					], 'patch'  => [
						'path'       => 'tables/{tableId}/columns/{columnId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'tableId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'columnId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'tables/{tableId}/columns/{columnId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'tableId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'columnId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->query = new Google_Service_Fusiontables_Resource_Query(
			$this,
			$this->serviceName,
			'query',
			[
				'methods' => [
					'sql'       => [
						'path'       => 'query',
						'httpMethod' => 'POST',
						'parameters' => [
							'sql'   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'hdrs'  => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'typed' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'sqlGet' => [
						'path'       => 'query',
						'httpMethod' => 'GET',
						'parameters' => [
							'sql'   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'hdrs'  => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'typed' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->style = new Google_Service_Fusiontables_Resource_Style(
			$this,
			$this->serviceName,
			'style',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'tables/{tableId}/styles/{styleId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'styleId' => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'tables/{tableId}/styles/{styleId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'styleId' => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'tables/{tableId}/styles',
						'httpMethod' => 'POST',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'tables/{tableId}/styles',
						'httpMethod' => 'GET',
						'parameters' => [
							'tableId'    => [
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
					], 'patch'  => [
						'path'       => 'tables/{tableId}/styles/{styleId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'styleId' => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'tables/{tableId}/styles/{styleId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'styleId' => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->table = new Google_Service_Fusiontables_Resource_Table(
			$this,
			$this->serviceName,
			'table',
			[
				'methods' => [
					'copy'            => [
						'path'       => 'tables/{tableId}/copy',
						'httpMethod' => 'POST',
						'parameters' => [
							'tableId'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'copyPresentation' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete'       => [
						'path'       => 'tables/{tableId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'          => [
						'path'       => 'tables/{tableId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'importRows'   => [
						'path'       => 'tables/{tableId}/import',
						'httpMethod' => 'POST',
						'parameters' => [
							'tableId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'delimiter' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'encoding'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'endLine'   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'isStrict'  => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'startLine' => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'importTable'  => [
						'path'       => 'tables/import',
						'httpMethod' => 'POST',
						'parameters' => [
							'name'      => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'delimiter' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'encoding'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert'       => [
						'path'       => 'tables',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'         => [
						'path'       => 'tables',
						'httpMethod' => 'GET',
						'parameters' => [
							'maxResults' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'        => [
						'path'       => 'tables/{tableId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'tableId'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'replaceViewDefinition' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'refetchSheet' => [
						'path'       => 'tables/{tableId}/refetch',
						'httpMethod' => 'POST',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'replaceRows'  => [
						'path'       => 'tables/{tableId}/replace',
						'httpMethod' => 'POST',
						'parameters' => [
							'tableId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'delimiter' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'encoding'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'endLine'   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'isStrict'  => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'startLine' => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'update'       => [
						'path'       => 'tables/{tableId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'tableId'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'replaceViewDefinition' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->task = new Google_Service_Fusiontables_Resource_Task(
			$this,
			$this->serviceName,
			'task',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'tables/{tableId}/tasks/{taskId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'taskId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => 'tables/{tableId}/tasks/{taskId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'taskId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'tables/{tableId}/tasks',
						'httpMethod' => 'GET',
						'parameters' => [
							'tableId'    => [
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
							'startIndex' => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
		$this->template = new Google_Service_Fusiontables_Resource_Template(
			$this,
			$this->serviceName,
			'template',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'tables/{tableId}/templates/{templateId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'tableId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'templateId' => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'tables/{tableId}/templates/{templateId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'tableId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'templateId' => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'tables/{tableId}/templates',
						'httpMethod' => 'POST',
						'parameters' => [
							'tableId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'tables/{tableId}/templates',
						'httpMethod' => 'GET',
						'parameters' => [
							'tableId'    => [
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
					], 'patch'  => [
						'path'       => 'tables/{tableId}/templates/{templateId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'tableId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'templateId' => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'tables/{tableId}/templates/{templateId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'tableId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'templateId' => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					],
				],
			]
		);
	}
}
