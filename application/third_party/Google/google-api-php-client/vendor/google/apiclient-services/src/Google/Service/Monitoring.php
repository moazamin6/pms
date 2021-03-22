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
 * Service definition for Monitoring (v3).
 *
 * <p>
 * Manages your Stackdriver Monitoring data and configurations. Most projects
 * must be associated with a Stackdriver account, with a few exceptions as noted
 * on the individual method pages.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/monitoring/api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Monitoring extends Google_Service
{
	/** View and manage your data across Google Cloud Platform services. */
	const CLOUD_PLATFORM =
		"https://www.googleapis.com/auth/cloud-platform";
	/** View and write monitoring data for all of your Google and third-party Cloud and API projects. */
	const MONITORING =
		"https://www.googleapis.com/auth/monitoring";
	/** View monitoring data for all of your Google Cloud and third-party projects. */
	const MONITORING_READ =
		"https://www.googleapis.com/auth/monitoring.read";
	/** Publish metric data to your Google Cloud projects. */
	const MONITORING_WRITE =
		"https://www.googleapis.com/auth/monitoring.write";
	
	public $projects_alertPolicies;
	public $projects_collectdTimeSeries;
	public $projects_groups;
	public $projects_groups_members;
	public $projects_metricDescriptors;
	public $projects_monitoredResourceDescriptors;
	public $projects_notificationChannelDescriptors;
	public $projects_notificationChannels;
	public $projects_timeSeries;
	public $projects_uptimeCheckConfigs;
	public $uptimeCheckIps;
	
	/**
	 * Constructs the internal representation of the Monitoring service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://monitoring.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v3';
		$this->serviceName = 'monitoring';
		
		$this->projects_alertPolicies = new Google_Service_Monitoring_Resource_ProjectsAlertPolicies(
			$this,
			$this->serviceName,
			'alertPolicies',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v3/{+name}/alertPolicies',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v3/{+name}/alertPolicies',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'orderBy'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'v3/{+name}',
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
					],
				],
			]
		);
		$this->projects_collectdTimeSeries = new Google_Service_Monitoring_Resource_ProjectsCollectdTimeSeries(
			$this,
			$this->serviceName,
			'collectdTimeSeries',
			[
				'methods' => [
					'create' => [
						'path'       => 'v3/{+name}/collectdTimeSeries',
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
		$this->projects_groups = new Google_Service_Monitoring_Resource_ProjectsGroups(
			$this,
			$this->serviceName,
			'groups',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v3/{+name}/groups',
						'httpMethod' => 'POST',
						'parameters' => [
							'name'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'validateOnly' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete' => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v3/{+name}/groups',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'           => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'ancestorsOfGroup'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'childrenOfGroup'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'descendantsOfGroup' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'name'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'validateOnly' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->projects_groups_members = new Google_Service_Monitoring_Resource_ProjectsGroupsMembers(
			$this,
			$this->serviceName,
			'members',
			[
				'methods' => [
					'list' => [
						'path'       => 'v3/{+name}/members',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'               => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageToken'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'interval.startTime' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'           => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'interval.endTime'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filter'             => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_metricDescriptors = new Google_Service_Monitoring_Resource_ProjectsMetricDescriptors(
			$this,
			$this->serviceName,
			'metricDescriptors',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v3/{+name}/metricDescriptors',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v3/{+name}/metricDescriptors',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_monitoredResourceDescriptors = new Google_Service_Monitoring_Resource_ProjectsMonitoredResourceDescriptors(
			$this,
			$this->serviceName,
			'monitoredResourceDescriptors',
			[
				'methods' => [
					'get'     => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v3/{+name}/monitoredResourceDescriptors',
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
							'filter'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_notificationChannelDescriptors = new Google_Service_Monitoring_Resource_ProjectsNotificationChannelDescriptors(
			$this,
			$this->serviceName,
			'notificationChannelDescriptors',
			[
				'methods' => [
					'get'     => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v3/{+name}/notificationChannelDescriptors',
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
					],
				],
			]
		);
		$this->projects_notificationChannels = new Google_Service_Monitoring_Resource_ProjectsNotificationChannels(
			$this,
			$this->serviceName,
			'notificationChannels',
			[
				'methods' => [
					'create'                  => [
						'path'       => 'v3/{+name}/notificationChannels',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'               => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'force' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'                  => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getVerificationCode'  => [
						'path'       => 'v3/{+name}:getVerificationCode',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                 => [
						'path'       => 'v3/{+name}/notificationChannels',
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
							'orderBy'   => [
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
					], 'patch'                => [
						'path'       => 'v3/{+name}',
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
					], 'sendVerificationCode' => [
						'path'       => 'v3/{+name}:sendVerificationCode',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'verify'               => [
						'path'       => 'v3/{+name}:verify',
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
		$this->projects_timeSeries = new Google_Service_Monitoring_Resource_ProjectsTimeSeries(
			$this,
			$this->serviceName,
			'timeSeries',
			[
				'methods' => [
					'create'  => [
						'path'       => 'v3/{+name}/timeSeries',
						'httpMethod' => 'POST',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v3/{+name}/timeSeries',
						'httpMethod' => 'GET',
						'parameters' => [
							'name'                           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'aggregation.perSeriesAligner'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'interval.startTime'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'view'                           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'aggregation.groupByFields'      => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'interval.endTime'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'aggregation.alignmentPeriod'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'                       => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'aggregation.crossSeriesReducer' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'filter'                         => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->projects_uptimeCheckConfigs = new Google_Service_Monitoring_Resource_ProjectsUptimeCheckConfigs(
			$this,
			$this->serviceName,
			'uptimeCheckConfigs',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v3/{+parent}/uptimeCheckConfigs',
						'httpMethod' => 'POST',
						'parameters' => [
							'parent' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v3/{+name}',
						'httpMethod' => 'GET',
						'parameters' => [
							'name' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v3/{+parent}/uptimeCheckConfigs',
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
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					], 'patch'  => [
						'path'       => 'v3/{+name}',
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
					],
				],
			]
		);
		$this->uptimeCheckIps = new Google_Service_Monitoring_Resource_UptimeCheckIps(
			$this,
			$this->serviceName,
			'uptimeCheckIps',
			[
				'methods' => [
					'list' => [
						'path'       => 'v3/uptimeCheckIps',
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
						],
					],
				],
			]
		);
	}
}
