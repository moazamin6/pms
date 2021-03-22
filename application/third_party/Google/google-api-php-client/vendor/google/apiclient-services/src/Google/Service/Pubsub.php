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
 * Service definition for Pubsub (v1).
 *
 * <p>
 * Provides reliable, many-to-many, asynchronous messaging between applications.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/pubsub/docs" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Pubsub extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View and manage Pub/Sub topics and subscriptions. */
	const PUBSUB =
		"https://www.googleapis.com/auth/pubsub";

	public $projects_snapshots;
	public $projects_subscriptions;
	public $projects_topics;
	public $projects_topics_snapshots;
	public $projects_topics_subscriptions;

	/**
	 * Constructs the internal representation of the Pubsub service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://pubsub.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'pubsub';

		$this->projects_snapshots = new Google_Service_Pubsub_Resource_ProjectsSnapshots(
			$this,
			$this->serviceName,
			'snapshots',
			[
				'methods' => [
					'create'                => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'             => [
						'path'       => 'v1/{+snapshot}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'snapshot' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => 'v1/{+snapshot}',
						'httpMethod' => 'GET',
						'parameters' => [
							'snapshot' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => 'v1/{+resource}:getIamPolicy',
						'httpMethod' => 'GET',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => 'v1/{+project}/snapshots',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'   => [
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
					], 'patch'              => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
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
					],
				],
			]
		);
		$this->projects_subscriptions = new Google_Service_Pubsub_Resource_ProjectsSubscriptions(
			$this,
			$this->serviceName,
			'subscriptions',
			[
				'methods' => [
					'acknowledge'           => [
						'path'       => 'v1/{+subscription}:acknowledge',
						'httpMethod' => 'POST',
						'parameters' => [
							'subscription' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'             => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'             => [
						'path'       => 'v1/{+subscription}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'subscription' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => 'v1/{+subscription}',
						'httpMethod' => 'GET',
						'parameters' => [
							'subscription' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => 'v1/{+resource}:getIamPolicy',
						'httpMethod' => 'GET',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => 'v1/{+project}/subscriptions',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'   => [
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
					], 'modifyAckDeadline'  => [
						'path'       => 'v1/{+subscription}:modifyAckDeadline',
						'httpMethod' => 'POST',
						'parameters' => [
							'subscription' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'modifyPushConfig'   => [
						'path'       => 'v1/{+subscription}:modifyPushConfig',
						'httpMethod' => 'POST',
						'parameters' => [
							'subscription' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'              => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'pull'               => [
						'path'       => 'v1/{+subscription}:pull',
						'httpMethod' => 'POST',
						'parameters' => [
							'subscription' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'seek'               => [
						'path'       => 'v1/{+subscription}:seek',
						'httpMethod' => 'POST',
						'parameters' => [
							'subscription' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
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
					],
				],
			]
		);
		$this->projects_topics = new Google_Service_Pubsub_Resource_ProjectsTopics(
			$this,
			$this->serviceName,
			'topics',
			[
				'methods' => [
					'create'                => [
						'path'       => 'v1/{+name}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'             => [
						'path'       => 'v1/{+topic}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'topic' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                => [
						'path'       => 'v1/{+topic}',
						'httpMethod' => 'GET',
						'parameters' => [
							'topic' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getIamPolicy'       => [
						'path'       => 'v1/{+resource}:getIamPolicy',
						'httpMethod' => 'GET',
						'parameters' => [
							'resource' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'               => [
						'path'       => 'v1/{+project}/topics',
						'httpMethod' => 'GET',
						'parameters' => [
							'project'   => [
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
					], 'publish'            => [
						'path'       => 'v1/{+topic}:publish',
						'httpMethod' => 'POST',
						'parameters' => [
							'topic' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
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
					],
				],
			]
		);
		$this->projects_topics_snapshots = new Google_Service_Pubsub_Resource_ProjectsTopicsSnapshots(
			$this,
			$this->serviceName,
			'snapshots',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+topic}/snapshots',
						'httpMethod' => 'GET',
						'parameters' => [
							'topic'     => [
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
					],
				],
			]
		);
		$this->projects_topics_subscriptions = new Google_Service_Pubsub_Resource_ProjectsTopicsSubscriptions(
			$this,
			$this->serviceName,
			'subscriptions',
			[
				'methods' => [
					'list' => [
						'path'       => 'v1/{+topic}/subscriptions',
						'httpMethod' => 'GET',
						'parameters' => [
							'topic'     => [
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
					],
				],
			]
		);
	}
}
