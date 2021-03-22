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
 * Service definition for AndroidEnterprise (v1).
 *
 * <p>
 * Manages the deployment of apps to Android for Work users.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/android/work/play/emm-api" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_AndroidEnterprise extends Google_Service
{
	/** Manage corporate Android devices. */
	const ANDROIDENTERPRISE =
		"https://www.googleapis.com/auth/androidenterprise";
	
	public $devices;
	public $enterprises;
	public $entitlements;
	public $grouplicenses;
	public $grouplicenseusers;
	public $installs;
	public $managedconfigurationsfordevice;
	public $managedconfigurationsforuser;
	public $managedconfigurationssettings;
	public $permissions;
	public $products;
	public $serviceaccountkeys;
	public $storelayoutclusters;
	public $storelayoutpages;
	public $users;
	
	/**
	 * Constructs the internal representation of the AndroidEnterprise service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'androidenterprise/v1/';
		$this->version = 'v1';
		$this->serviceName = 'androidenterprise';
		
		$this->devices = new Google_Service_AndroidEnterprise_Resource_Devices(
			$this,
			$this->serviceName,
			'devices',
			[
				'methods' => [
					'get'         => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getState' => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/state',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'     => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'    => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'setState' => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/state',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'   => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
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
		$this->enterprises = new Google_Service_AndroidEnterprise_Resource_Enterprises(
			$this,
			$this->serviceName,
			'enterprises',
			[
				'methods' => [
					'acknowledgeNotificationSet'      => [
						'path'       => 'enterprises/acknowledgeNotificationSet',
						'httpMethod' => 'POST',
						'parameters' => [
							'notificationSetId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'completeSignup'               => [
						'path'       => 'enterprises/completeSignup',
						'httpMethod' => 'POST',
						'parameters' => [
							'completionToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'enterpriseToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'createWebToken'               => [
						'path'       => 'enterprises/{enterpriseId}/createWebToken',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'                       => [
						'path'       => 'enterprises/{enterpriseId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'enroll'                       => [
						'path'       => 'enterprises/enroll',
						'httpMethod' => 'POST',
						'parameters' => [
							'token' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'generateSignupUrl'            => [
						'path'       => 'enterprises/signupUrl',
						'httpMethod' => 'POST',
						'parameters' => [
							'callbackUrl' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                          => [
						'path'       => 'enterprises/{enterpriseId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getAndroidDevicePolicyConfig' => [
						'path'       => 'enterprises/{enterpriseId}/androidDevicePolicyConfig',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getServiceAccount'            => [
						'path'       => 'enterprises/{enterpriseId}/serviceAccount',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'keyType'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'getStoreLayout'               => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'                       => [
						'path'       => 'enterprises',
						'httpMethod' => 'POST',
						'parameters' => [
							'token' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                         => [
						'path'       => 'enterprises',
						'httpMethod' => 'GET',
						'parameters' => [
							'domain' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'pullNotificationSet'          => [
						'path'       => 'enterprises/pullNotificationSet',
						'httpMethod' => 'POST',
						'parameters' => [
							'requestMode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'sendTestPushNotification'     => [
						'path'       => 'enterprises/{enterpriseId}/sendTestPushNotification',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setAccount'                   => [
						'path'       => 'enterprises/{enterpriseId}/account',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setAndroidDevicePolicyConfig' => [
						'path'       => 'enterprises/{enterpriseId}/androidDevicePolicyConfig',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setStoreLayout'               => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'unenroll'                     => [
						'path'       => 'enterprises/{enterpriseId}/unenroll',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->entitlements = new Google_Service_AndroidEnterprise_Resource_Entitlements(
			$this,
			$this->serviceName,
			'entitlements',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'entitlementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'entitlementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/entitlements',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'enterpriseId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'entitlementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'install'       => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'update' => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/entitlements/{entitlementId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'entitlementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'install'       => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->grouplicenses = new Google_Service_AndroidEnterprise_Resource_Grouplicenses(
			$this,
			$this->serviceName,
			'grouplicenses',
			[
				'methods' => [
					'get'     => [
						'path'       => 'enterprises/{enterpriseId}/groupLicenses/{groupLicenseId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'groupLicenseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'enterprises/{enterpriseId}/groupLicenses',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->grouplicenseusers = new Google_Service_AndroidEnterprise_Resource_Grouplicenseusers(
			$this,
			$this->serviceName,
			'grouplicenseusers',
			[
				'methods' => [
					'list' => [
						'path'       => 'enterprises/{enterpriseId}/groupLicenses/{groupLicenseId}/users',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'groupLicenseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->installs = new Google_Service_AndroidEnterprise_Resource_Installs(
			$this,
			$this->serviceName,
			'installs',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'installId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'installId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'installId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/installs/{installId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'installId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->managedconfigurationsfordevice = new Google_Service_AndroidEnterprise_Resource_Managedconfigurationsfordevice(
			$this,
			$this->serviceName,
			'managedconfigurationsfordevice',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/managedConfigurationsForDevice/{managedConfigurationForDeviceId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId'                    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'                          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedConfigurationForDeviceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/managedConfigurationsForDevice/{managedConfigurationForDeviceId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId'                    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'                          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedConfigurationForDeviceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/managedConfigurationsForDevice',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/managedConfigurationsForDevice/{managedConfigurationForDeviceId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'enterpriseId'                    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'                          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedConfigurationForDeviceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/devices/{deviceId}/managedConfigurationsForDevice/{managedConfigurationForDeviceId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId'                    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'                          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deviceId'                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedConfigurationForDeviceId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->managedconfigurationsforuser = new Google_Service_AndroidEnterprise_Resource_Managedconfigurationsforuser(
			$this,
			$this->serviceName,
			'managedconfigurationsforuser',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/managedConfigurationsForUser/{managedConfigurationForUserId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId'                  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedConfigurationForUserId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/managedConfigurationsForUser/{managedConfigurationForUserId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId'                  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedConfigurationForUserId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/managedConfigurationsForUser',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/managedConfigurationsForUser/{managedConfigurationForUserId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'enterpriseId'                  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedConfigurationForUserId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/managedConfigurationsForUser/{managedConfigurationForUserId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId'                  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'managedConfigurationForUserId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->managedconfigurationssettings = new Google_Service_AndroidEnterprise_Resource_Managedconfigurationssettings(
			$this,
			$this->serviceName,
			'managedconfigurationssettings',
			[
				'methods' => [
					'list' => [
						'path'       => 'enterprises/{enterpriseId}/products/{productId}/managedConfigurationsSettings',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->permissions = new Google_Service_AndroidEnterprise_Resource_Permissions(
			$this,
			$this->serviceName,
			'permissions',
			[
				'methods' => [
					'get' => [
						'path'       => 'permissions/{permissionId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'permissionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->products = new Google_Service_AndroidEnterprise_Resource_Products(
			$this,
			$this->serviceName,
			'products',
			[
				'methods' => [
					'approve'                     => [
						'path'       => 'enterprises/{enterpriseId}/products/{productId}/approve',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'generateApprovalUrl'      => [
						'path'       => 'enterprises/{enterpriseId}/products/{productId}/generateApprovalUrl',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'languageCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                      => [
						'path'       => 'enterprises/{enterpriseId}/products/{productId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'getAppRestrictionsSchema' => [
						'path'       => 'enterprises/{enterpriseId}/products/{productId}/appRestrictionsSchema',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'getPermissions'           => [
						'path'       => 'enterprises/{enterpriseId}/products/{productId}/permissions',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                     => [
						'path'       => 'enterprises/{enterpriseId}/products',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'approved'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'language'     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'query'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'token'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'unapprove'                => [
						'path'       => 'enterprises/{enterpriseId}/products/{productId}/unapprove',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->serviceaccountkeys = new Google_Service_AndroidEnterprise_Resource_Serviceaccountkeys(
			$this,
			$this->serviceName,
			'serviceaccountkeys',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'enterprises/{enterpriseId}/serviceAccountKeys/{keyId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'keyId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'enterprises/{enterpriseId}/serviceAccountKeys',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'enterprises/{enterpriseId}/serviceAccountKeys',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->storelayoutclusters = new Google_Service_AndroidEnterprise_Resource_Storelayoutclusters(
			$this,
			$this->serviceName,
			'storelayoutclusters',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters/{clusterId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clusterId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters/{clusterId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clusterId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters/{clusterId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clusterId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}/clusters/{clusterId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'clusterId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->storelayoutpages = new Google_Service_AndroidEnterprise_Resource_Storelayoutpages(
			$this,
			$this->serviceName,
			'storelayoutpages',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'enterprises/{enterpriseId}/storeLayout/pages/{pageId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->users = new Google_Service_AndroidEnterprise_Resource_Users(
			$this,
			$this->serviceName,
			'users',
			[
				'methods' => [
					'delete'                         => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'generateAuthenticationToken' => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/authenticationToken',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'generateToken'               => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/token',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                         => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getAvailableProductSet'      => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/availableProductSet',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'                      => [
						'path'       => 'enterprises/{enterpriseId}/users',
						'httpMethod' => 'POST',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                        => [
						'path'       => 'enterprises/{enterpriseId}/users',
						'httpMethod' => 'GET',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'email'        => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'                       => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'revokeDeviceAccess'          => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/deviceAccess',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'revokeToken'                 => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/token',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setAvailableProductSet'      => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}/availableProductSet',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update'                      => [
						'path'       => 'enterprises/{enterpriseId}/users/{userId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'enterpriseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
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
