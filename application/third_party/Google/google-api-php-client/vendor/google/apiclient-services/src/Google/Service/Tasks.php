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
 * Service definition for Tasks (v1).
 *
 * <p>
 * Lets you manage your tasks and task lists.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/google-apps/tasks/firstapp" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Tasks extends Google_Service
{
	/** Manage your tasks. */
	const TASKS =
		"https://www.googleapis.com/auth/tasks";
	/** View your tasks. */
	const TASKS_READONLY =
		"https://www.googleapis.com/auth/tasks.readonly";

	public $tasklists;
	public $tasks;

	/**
	 * Constructs the internal representation of the Tasks service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'tasks/v1/';
		$this->version = 'v1';
		$this->serviceName = 'tasks';

		$this->tasklists = new Google_Service_Tasks_Resource_Tasklists(
			$this,
			$this->serviceName,
			'tasklists',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'users/@me/lists/{tasklist}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'users/@me/lists/{tasklist}',
						'httpMethod' => 'GET',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'users/@me/lists',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'   => [
						'path'       => 'users/@me/lists',
						'httpMethod' => 'GET',
						'parameters' => [
							'maxResults' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'users/@me/lists/{tasklist}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'users/@me/lists/{tasklist}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->tasks = new Google_Service_Tasks_Resource_Tasks(
			$this,
			$this->serviceName,
			'tasks',
			[
				'methods' => [
					'clear'     => [
						'path'       => 'lists/{tasklist}/clear',
						'httpMethod' => 'POST',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'lists/{tasklist}/tasks/{task}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'task'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'lists/{tasklist}/tasks/{task}',
						'httpMethod' => 'GET',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'task'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'lists/{tasklist}/tasks',
						'httpMethod' => 'POST',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'parent'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'previous' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'lists/{tasklist}/tasks',
						'httpMethod' => 'GET',
						'parameters' => [
							'tasklist'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'completedMax'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'completedMin'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'dueMax'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'dueMin'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'showCompleted' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'showDeleted'   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'showHidden'    => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'updatedMin'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'move'   => [
						'path'       => 'lists/{tasklist}/tasks/{task}/move',
						'httpMethod' => 'POST',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'task'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'parent'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'previous' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'lists/{tasklist}/tasks/{task}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'task'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'lists/{tasklist}/tasks/{task}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'tasklist' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'task'     => [
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
