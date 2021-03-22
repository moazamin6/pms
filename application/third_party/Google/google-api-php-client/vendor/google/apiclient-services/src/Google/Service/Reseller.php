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
 * Service definition for Reseller (v1).
 *
 * <p>
 * Creates and manages your customers and their subscriptions.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/google-apps/reseller/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Reseller extends Google_Service
{
	/** Manage users on your domain. */
	const APPS_ORDER =
		"https://www.googleapis.com/auth/apps.order";
	/** Manage users on your domain. */
	const APPS_ORDER_READONLY =
		"https://www.googleapis.com/auth/apps.order.readonly";

	public $customers;
	public $resellernotify;
	public $subscriptions;

	/**
	 * Constructs the internal representation of the Reseller service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'apps/reseller/v1/';
		$this->version = 'v1';
		$this->serviceName = 'reseller';

		$this->customers = new Google_Service_Reseller_Resource_Customers(
			$this,
			$this->serviceName,
			'customers',
			[
				'methods' => [
					'get'       => [
						'path'       => 'customers/{customerId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'customers',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerAuthToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch'  => [
						'path'       => 'customers/{customerId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'update' => [
						'path'       => 'customers/{customerId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'customerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->resellernotify = new Google_Service_Reseller_Resource_Resellernotify(
			$this,
			$this->serviceName,
			'resellernotify',
			[
				'methods' => [
					'getwatchdetails' => [
						'path'       => 'resellernotify/getwatchdetails',
						'httpMethod' => 'GET',
						'parameters' => [],
					], 'register'     => [
						'path'       => 'resellernotify/register',
						'httpMethod' => 'POST',
						'parameters' => [
							'serviceAccountEmailAddress' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'unregister'   => [
						'path'       => 'resellernotify/unregister',
						'httpMethod' => 'POST',
						'parameters' => [
							'serviceAccountEmailAddress' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->subscriptions = new Google_Service_Reseller_Resource_Subscriptions(
			$this,
			$this->serviceName,
			'subscriptions',
			[
				'methods' => [
					'activate'                 => [
						'path'       => 'customers/{customerId}/subscriptions/{subscriptionId}/activate',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'changePlan'            => [
						'path'       => 'customers/{customerId}/subscriptions/{subscriptionId}/changePlan',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'changeRenewalSettings' => [
						'path'       => 'customers/{customerId}/subscriptions/{subscriptionId}/changeRenewalSettings',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'changeSeats'           => [
						'path'       => 'customers/{customerId}/subscriptions/{subscriptionId}/changeSeats',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'                => [
						'path'       => 'customers/{customerId}/subscriptions/{subscriptionId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'customerId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'deletionType'   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                   => [
						'path'       => 'customers/{customerId}/subscriptions/{subscriptionId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'                => [
						'path'       => 'customers/{customerId}/subscriptions',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'customerAuthToken' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'                  => [
						'path'       => 'subscriptions',
						'httpMethod' => 'GET',
						'parameters' => [
							'customerAuthToken'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customerId'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'customerNamePrefix' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'         => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'          => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'startPaidService'      => [
						'path'       => 'customers/{customerId}/subscriptions/{subscriptionId}/startPaidService',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'suspend'               => [
						'path'       => 'customers/{customerId}/subscriptions/{subscriptionId}/suspend',
						'httpMethod' => 'POST',
						'parameters' => [
							'customerId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'subscriptionId' => [
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
