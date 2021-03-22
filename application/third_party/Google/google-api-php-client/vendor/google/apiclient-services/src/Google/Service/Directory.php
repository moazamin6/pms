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
 * Service definition for Directory (directory_v1).
 *
 * <p>
 * Manages enterprise resources such as users and groups, administrative
 * notifications, security features, and more.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/admin-sdk/directory/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Directory extends Google_Service
{
	/** View and manage customer related information. */
	const ADMIN_DIRECTORY_CUSTOMER =
		"https://www.googleapis.com/auth/admin.directory.customer";
	/** View customer related information. */
	const ADMIN_DIRECTORY_CUSTOMER_READONLY =
		"https://www.googleapis.com/auth/admin.directory.customer.readonly";
	/** View and manage your Chrome OS devices' metadata. */
	const ADMIN_DIRECTORY_DEVICE_CHROMEOS =
		"https://www.googleapis.com/auth/admin.directory.device.chromeos";
	/** View your Chrome OS devices' metadata. */
	const ADMIN_DIRECTORY_DEVICE_CHROMEOS_READONLY =
		"https://www.googleapis.com/auth/admin.directory.device.chromeos.readonly";
	/** View and manage your mobile devices' metadata. */
	const ADMIN_DIRECTORY_DEVICE_MOBILE =
		"https://www.googleapis.com/auth/admin.directory.device.mobile";
	/** Manage your mobile devices by performing administrative tasks. */
	const ADMIN_DIRECTORY_DEVICE_MOBILE_ACTION =
		"https://www.googleapis.com/auth/admin.directory.device.mobile.action";
	/** View your mobile devices' metadata. */
	const ADMIN_DIRECTORY_DEVICE_MOBILE_READONLY =
		"https://www.googleapis.com/auth/admin.directory.device.mobile.readonly";
	/** View and manage the provisioning of domains for your customers. */
	const ADMIN_DIRECTORY_DOMAIN =
		"https://www.googleapis.com/auth/admin.directory.domain";
	/** View domains related to your customers. */
	const ADMIN_DIRECTORY_DOMAIN_READONLY =
		"https://www.googleapis.com/auth/admin.directory.domain.readonly";
	/** View and manage the provisioning of groups on your domain. */
	const ADMIN_DIRECTORY_GROUP =
		"https://www.googleapis.com/auth/admin.directory.group";
	/** View and manage group subscriptions on your domain. */
	const ADMIN_DIRECTORY_GROUP_MEMBER =
		"https://www.googleapis.com/auth/admin.directory.group.member";
	/** View group subscriptions on your domain. */
	const ADMIN_DIRECTORY_GROUP_MEMBER_READONLY =
		"https://www.googleapis.com/auth/admin.directory.group.member.readonly";
	/** View groups on your domain. */
	const ADMIN_DIRECTORY_GROUP_READONLY =
		"https://www.googleapis.com/auth/admin.directory.group.readonly";
	/** View and manage notifications received on your domain. */
	const ADMIN_DIRECTORY_NOTIFICATIONS =
		"https://www.googleapis.com/auth/admin.directory.notifications";
	/** View and manage organization units on your domain. */
	const ADMIN_DIRECTORY_ORGUNIT =
		"https://www.googleapis.com/auth/admin.directory.orgunit";
	/** View organization units on your domain. */
	const ADMIN_DIRECTORY_ORGUNIT_READONLY =
		"https://www.googleapis.com/auth/admin.directory.orgunit.readonly";
	/** View and manage the provisioning of calendar resources on your domain. */
	const ADMIN_DIRECTORY_RESOURCE_CALENDAR =
		"https://www.googleapis.com/auth/admin.directory.resource.calendar";
	/** View calendar resources on your domain. */
	const ADMIN_DIRECTORY_RESOURCE_CALENDAR_READONLY =
		"https://www.googleapis.com/auth/admin.directory.resource.calendar.readonly";
	/** Manage delegated admin roles for your domain. */
	const ADMIN_DIRECTORY_ROLEMANAGEMENT =
		"https://www.googleapis.com/auth/admin.directory.rolemanagement";
	/** View delegated admin roles for your domain. */
	const ADMIN_DIRECTORY_ROLEMANAGEMENT_READONLY =
		"https://www.googleapis.com/auth/admin.directory.rolemanagement.readonly";
	/** View and manage the provisioning of users on your domain. */
	const ADMIN_DIRECTORY_USER =
		"https://www.googleapis.com/auth/admin.directory.user";
	/** View and manage user aliases on your domain. */
	const ADMIN_DIRECTORY_USER_ALIAS =
		"https://www.googleapis.com/auth/admin.directory.user.alias";
	/** View user aliases on your domain. */
	const ADMIN_DIRECTORY_USER_ALIAS_READONLY =
		"https://www.googleapis.com/auth/admin.directory.user.alias.readonly";
	/** View users on your domain. */
	const ADMIN_DIRECTORY_USER_READONLY =
		"https://www.googleapis.com/auth/admin.directory.user.readonly";
	/** Manage data access permissions for users on your domain. */
	const ADMIN_DIRECTORY_USER_SECURITY =
		"https://www.googleapis.com/auth/admin.directory.user.security";
	/** View and manage the provisioning of user schemas on your domain. */
	const ADMIN_DIRECTORY_USERSCHEMA =
		"https://www.googleapis.com/auth/admin.directory.userschema";
	/** View user schemas on your domain. */
	const ADMIN_DIRECTORY_USERSCHEMA_READONLY =
		"https://www.googleapis.com/auth/admin.directory.userschema.readonly";
	
	public $asps;
	public $channels;
	public $chromeosdevices;
	public $customers;
	public $domainAliases;
	public $domains;
	public $groups;
	public $groups_aliases;
	public $members;
	public $mobiledevices;
	public $notifications;
	public $orgunits;
	public $privileges;
	public $resolvedAppAccessSettings;
	public $resources_buildings;
	public $resources_calendars;
	public $resources_features;
	public $roleAssignments;
	public $roles;
	public $schemas;
	public $tokens;
	public $users;
	public $users_aliases;
	public $users_photos;
	public $verificationCodes;
	
	/**
	 * Constructs the internal representation of the Directory service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'admin/directory/v1/';
		$this->version = 'directory_v1';
		$this->serviceName = 'admin';
		
		$this->asps = new Google_Service_Directory_Resource_Asps(
			$this,
			$this->serviceName,
			'asps',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'users/{userKey}/asps/{codeId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'codeId'  => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => 'users/{userKey}/asps/{codeId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'codeId'  => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'users/{userKey}/asps',
						'httpMethod' => 'GET',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->channels = new Google_Service_Directory_Resource_Channels(
			$this,
			$this->serviceName,
			'channels',
			[
				'methods' => [
					'stop' => [
						'path'       => '/admin/directory_v1/channels/stop',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->chromeosdevices = new Google_Service_Directory_Resource_Chromeosdevices(
			$this,
			$this->serviceName,
			'chromeosdevices',
			[
				'methods' => [
					'action'             => [
						'path'       => 'customer/{customerId}/devices/chromeos/{resourceId}/action',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'             => [
						'path'       => 'customer/{customerId}/devices/chromeos/{deviceId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'projection' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'            => [
						'path'       => 'customer/{customerId}/devices/chromeos',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults'  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'orgUnitPath' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'projection'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'query'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sortOrder'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'moveDevicesToOu' => [
						'path'       => 'customer/{customerId}/devices/chromeos/moveDevicesToOu',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orgUnitPath' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'           => [
						'path'       => 'customer/{customerId}/devices/chromeos/{deviceId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'projection' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'          => [
						'path'       => 'customer/{customerId}/devices/chromeos/{deviceId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'projection' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->customers = new Google_Service_Directory_Resource_Customers(
			$this,
			$this->serviceName,
			'customers',
			[
				'methods' => [
					'get'       => [
						'path'       => 'customers/{customerKey}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'customers/{customerKey}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'customerKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'customers/{customerKey}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customerKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->domainAliases = new Google_Service_Directory_Resource_DomainAliases(
			$this,
			$this->serviceName,
			'domainAliases',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'customer/{customer}/domainaliases/{domainAliasName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customer'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'domainAliasName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customer}/domainaliases/{domainAliasName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'domainAliasName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'customer/{customer}/domainaliases',
						'httpMethod' => 'POST',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customer}/domainaliases',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'parentDomainName' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->domains = new Google_Service_Directory_Resource_Domains(
			$this,
			$this->serviceName,
			'domains',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'customer/{customer}/domains/{domainName}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'domainName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customer}/domains/{domainName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'domainName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'customer/{customer}/domains',
						'httpMethod' => 'POST',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customer}/domains',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->groups = new Google_Service_Directory_Resource_Groups(
			$this,
			$this->serviceName,
			'groups',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'groups/{groupKey}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'groupKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'groups/{groupKey}',
						'httpMethod' => 'GET',
						'parameters' => [
							'groupKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'groups',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'   => [
						'path'       => 'groups',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'domain'     => [
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
							'query'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sortOrder'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'userKey'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'groups/{groupKey}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'groupKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'groups/{groupKey}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'groupKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->groups_aliases = new Google_Service_Directory_Resource_GroupsAliases(
			$this,
			$this->serviceName,
			'aliases',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'groups/{groupKey}/aliases/{alias}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'groupKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'alias'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'groups/{groupKey}/aliases',
						'httpMethod' => 'POST',
						'parameters' => [
							'groupKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'groups/{groupKey}/aliases',
						'httpMethod' => 'GET',
						'parameters' => [
							'groupKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->members = new Google_Service_Directory_Resource_Members(
			$this,
			$this->serviceName,
			'members',
			[
				'methods' => [
					'delete'       => [
						'path'       => 'groups/{groupKey}/members/{memberKey}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'groupKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'memberKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'       => [
						'path'       => 'groups/{groupKey}/members/{memberKey}',
						'httpMethod' => 'GET',
						'parameters' => [
							'groupKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'memberKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'hasMember' => [
						'path'       => 'groups/{groupKey}/hasMember/{memberKey}',
						'httpMethod' => 'GET',
						'parameters' => [
							'groupKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'memberKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'    => [
						'path'       => 'groups/{groupKey}/members',
						'httpMethod' => 'POST',
						'parameters' => [
							'groupKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'      => [
						'path'       => 'groups/{groupKey}/members',
						'httpMethod' => 'GET',
						'parameters' => [
							'groupKey'                 => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'includeDerivedMembership' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'maxResults'               => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'                => [
								'location' => 'query',
								'type'     => 'string',
							],
							'roles'                    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'     => [
						'path'       => 'groups/{groupKey}/members/{memberKey}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'groupKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'memberKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'    => [
						'path'       => 'groups/{groupKey}/members/{memberKey}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'groupKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'memberKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->mobiledevices = new Google_Service_Directory_Resource_Mobiledevices(
			$this,
			$this->serviceName,
			'mobiledevices',
			[
				'methods' => [
					'action'    => [
						'path'       => 'customer/{customerId}/devices/mobile/{resourceId}/action',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'customer/{customerId}/devices/mobile/{resourceId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customerId}/devices/mobile/{resourceId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'resourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'projection' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customerId}/devices/mobile',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
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
							'projection' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'query'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sortOrder'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->notifications = new Google_Service_Directory_Resource_Notifications(
			$this,
			$this->serviceName,
			'notifications',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'customer/{customer}/notifications/{notificationId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customer'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'notificationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customer}/notifications/{notificationId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'notificationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customer}/notifications',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'   => [
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
					], 'patch'  => [
						'path'       => 'customer/{customer}/notifications/{notificationId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'customer'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'notificationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'customer/{customer}/notifications/{notificationId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customer'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'notificationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->orgunits = new Google_Service_Directory_Resource_Orgunits(
			$this,
			$this->serviceName,
			'orgunits',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'customer/{customerId}/orgunits{/orgUnitPath*}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customerId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orgUnitPath' => [
								'location' => 'path',
								'type'     => 'string',
								'repeated' => true,
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customerId}/orgunits{/orgUnitPath*}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orgUnitPath' => [
								'location' => 'path',
								'type'     => 'string',
								'repeated' => true,
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'customer/{customerId}/orgunits',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customerId}/orgunits',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orgUnitPath' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'type'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'customer/{customerId}/orgunits{/orgUnitPath*}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'customerId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orgUnitPath' => [
								'location' => 'path',
								'type'     => 'string',
								'repeated' => true,
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'customer/{customerId}/orgunits{/orgUnitPath*}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customerId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orgUnitPath' => [
								'location' => 'path',
								'type'     => 'string',
								'repeated' => true,
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->privileges = new Google_Service_Directory_Resource_Privileges(
			$this,
			$this->serviceName,
			'privileges',
			[
				'methods' => [
					'list' => [
						'path'       => 'customer/{customer}/roles/ALL/privileges',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->resolvedAppAccessSettings = new Google_Service_Directory_Resource_ResolvedAppAccessSettings(
			$this,
			$this->serviceName,
			'resolvedAppAccessSettings',
			[
				'methods' => [
					'GetSettings'        => [
						'path'       => 'resolvedappaccesssettings',
						'httpMethod' => 'GET',
						'parameters' => [],
					], 'ListTrustedApps' => [
						'path'       => 'trustedapps',
						'httpMethod' => 'GET',
						'parameters' => [],
					],
				],
			]
		);
		$this->resources_buildings = new Google_Service_Directory_Resource_ResourcesBuildings(
			$this,
			$this->serviceName,
			'buildings',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'customer/{customer}/resources/buildings/{buildingId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'buildingId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customer}/resources/buildings/{buildingId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'buildingId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'customer/{customer}/resources/buildings',
						'httpMethod' => 'POST',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customer}/resources/buildings',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'   => [
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
						'path'       => 'customer/{customer}/resources/buildings/{buildingId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'buildingId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'customer/{customer}/resources/buildings/{buildingId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'buildingId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->resources_calendars = new Google_Service_Directory_Resource_ResourcesCalendars(
			$this,
			$this->serviceName,
			'calendars',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'customer/{customer}/resources/calendars/{calendarResourceId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customer'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'calendarResourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customer}/resources/calendars/{calendarResourceId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'calendarResourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'customer/{customer}/resources/calendars',
						'httpMethod' => 'POST',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customer}/resources/calendars',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
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
							'query'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'customer/{customer}/resources/calendars/{calendarResourceId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'customer'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'calendarResourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'customer/{customer}/resources/calendars/{calendarResourceId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customer'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'calendarResourceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->resources_features = new Google_Service_Directory_Resource_ResourcesFeatures(
			$this,
			$this->serviceName,
			'features',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'customer/{customer}/resources/features/{featureKey}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'featureKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customer}/resources/features/{featureKey}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'featureKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'customer/{customer}/resources/features',
						'httpMethod' => 'POST',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customer}/resources/features',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'   => [
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
						'path'       => 'customer/{customer}/resources/features/{featureKey}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'featureKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'rename' => [
						'path'       => 'customer/{customer}/resources/features/{oldName}/rename',
						'httpMethod' => 'POST',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'oldName'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'customer/{customer}/resources/features/{featureKey}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customer'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'featureKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->roleAssignments = new Google_Service_Directory_Resource_RoleAssignments(
			$this,
			$this->serviceName,
			'roleAssignments',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'customer/{customer}/roleassignments/{roleAssignmentId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customer'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'roleAssignmentId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customer}/roleassignments/{roleAssignmentId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'roleAssignmentId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'customer/{customer}/roleassignments',
						'httpMethod' => 'POST',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customer}/roleassignments',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'   => [
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
							'roleId'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'userKey'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->roles = new Google_Service_Directory_Resource_Roles(
			$this,
			$this->serviceName,
			'roles',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'customer/{customer}/roles/{roleId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'roleId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customer}/roles/{roleId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'roleId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'customer/{customer}/roles',
						'httpMethod' => 'POST',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customer}/roles',
						'httpMethod' => 'GET',
						'parameters' => [
							'customer'   => [
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
						'path'       => 'customer/{customer}/roles/{roleId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'roleId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'customer/{customer}/roles/{roleId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customer' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'roleId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->schemas = new Google_Service_Directory_Resource_Schemas(
			$this,
			$this->serviceName,
			'schemas',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'customer/{customerId}/schemas/{schemaKey}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'schemaKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'customer/{customerId}/schemas/{schemaKey}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'schemaKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'customer/{customerId}/schemas',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'customer/{customerId}/schemas',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'customer/{customerId}/schemas/{schemaKey}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'schemaKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'customer/{customerId}/schemas/{schemaKey}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'schemaKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->tokens = new Google_Service_Directory_Resource_Tokens(
			$this,
			$this->serviceName,
			'tokens',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'users/{userKey}/tokens/{clientId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => 'users/{userKey}/tokens/{clientId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userKey'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clientId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'users/{userKey}/tokens',
						'httpMethod' => 'GET',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users = new Google_Service_Directory_Resource_Users(
			$this,
			$this->serviceName,
			'users',
			[
				'methods' => [
					'delete'       => [
						'path'       => 'users/{userKey}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'       => [
						'path'       => 'users/{userKey}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userKey'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'customFieldMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'projection'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'viewType'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert'    => [
						'path'       => 'users',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'list'      => [
						'path'       => 'users',
						'httpMethod' => 'GET',
						'parameters' => [
							'customFieldMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customer'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'domain'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'event'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'projection'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'query'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'showDeleted'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sortOrder'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'viewType'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'makeAdmin' => [
						'path'       => 'users/{userKey}/makeAdmin',
						'httpMethod' => 'POST',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'     => [
						'path'       => 'users/{userKey}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'undelete'  => [
						'path'       => 'users/{userKey}/undelete',
						'httpMethod' => 'POST',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'    => [
						'path'       => 'users/{userKey}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'watch'     => [
						'path'       => 'users/watch',
						'httpMethod' => 'POST',
						'parameters' => [
							'customFieldMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customer'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'domain'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'event'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'orderBy'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'projection'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'query'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'showDeleted'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sortOrder'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'viewType'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->users_aliases = new Google_Service_Directory_Resource_UsersAliases(
			$this,
			$this->serviceName,
			'aliases',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'users/{userKey}/aliases/{alias}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'alias'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'users/{userKey}/aliases',
						'httpMethod' => 'POST',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'users/{userKey}/aliases',
						'httpMethod' => 'GET',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'event'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'watch'  => [
						'path'       => 'users/{userKey}/aliases/watch',
						'httpMethod' => 'POST',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'event'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->users_photos = new Google_Service_Directory_Resource_UsersPhotos(
			$this,
			$this->serviceName,
			'photos',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'users/{userKey}/photos/thumbnail',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'users/{userKey}/photos/thumbnail',
						'httpMethod' => 'GET',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'users/{userKey}/photos/thumbnail',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'users/{userKey}/photos/thumbnail',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->verificationCodes = new Google_Service_Directory_Resource_VerificationCodes(
			$this,
			$this->serviceName,
			'verificationCodes',
			[
				'methods' => [
					'generate'      => [
						'path'       => 'users/{userKey}/verificationCodes/generate',
						'httpMethod' => 'POST',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'invalidate' => [
						'path'       => 'users/{userKey}/verificationCodes/invalidate',
						'httpMethod' => 'POST',
						'parameters' => [
							'userKey' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'       => [
						'path'       => 'users/{userKey}/verificationCodes',
						'httpMethod' => 'GET',
						'parameters' => [
							'userKey' => [
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
