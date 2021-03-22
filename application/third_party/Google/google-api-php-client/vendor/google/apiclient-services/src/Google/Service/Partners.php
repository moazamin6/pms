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
 * Service definition for Partners (v2).
 *
 * <p>
 * Searches certified companies and creates contact leads with them, and also
 * audits the usage of clients.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/partners/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Partners extends Google_Service
{


	public $analytics;
	public $clientMessages;
	public $companies;
	public $companies_leads;
	public $leads;
	public $offers;
	public $offers_history;
	public $userEvents;
	public $userStates;
	public $users;
	public $v2;

	/**
	 * Constructs the internal representation of the Partners service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://partners.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v2';
		$this->serviceName = 'partners';

		$this->analytics = new Google_Service_Partners_Resource_Analytics(
			$this,
			$this->serviceName,
			'analytics',
			[
				'methods' => [
					'list' => [
						'path'       => 'v2/analytics',
						'httpMethod' => 'GET',
						'parameters' => [
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'                                      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->clientMessages = new Google_Service_Partners_Resource_ClientMessages(
			$this,
			$this->serviceName,
			'clientMessages',
			[
				'methods' => [
					'log' => [
						'path'       => 'v2/clientMessages:log',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->companies = new Google_Service_Partners_Resource_Companies(
			$this,
			$this->serviceName,
			'companies',
			[
				'methods' => [
					'get'     => [
						'path'       => 'v2/companies/{companyId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'companyId'                                     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'view'                                          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'address'                                       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'currencyCode'                                  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'orderBy'                                       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list' => [
						'path'       => 'v2/companies',
						'httpMethod' => 'GET',
						'parameters' => [
							'industries'                                    => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'websiteUrl'                                    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'gpsMotivations'                                => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'languageCodes'                                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'pageSize'                                      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'orderBy'                                       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'specializations'                               => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'maxMonthlyBudget.currencyCode'                 => [
								'location' => 'query',
								'type'     => 'string',
							],
							'minMonthlyBudget.currencyCode'                 => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'view'                                          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'address'                                       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'minMonthlyBudget.units'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxMonthlyBudget.nanos'                        => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'services'                                      => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxMonthlyBudget.units'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'minMonthlyBudget.nanos'                        => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'companyName'                                   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                                     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->companies_leads = new Google_Service_Partners_Resource_CompaniesLeads(
			$this,
			$this->serviceName,
			'leads',
			[
				'methods' => [
					'create' => [
						'path'       => 'v2/companies/{companyId}/leads',
						'httpMethod' => 'POST',
						'parameters' => [
							'companyId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->leads = new Google_Service_Partners_Resource_Leads(
			$this,
			$this->serviceName,
			'leads',
			[
				'methods' => [
					'list' => [
						'path'       => 'v2/leads',
						'httpMethod' => 'GET',
						'parameters' => [
							'pageSize'                                      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'orderBy'                                       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                                     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->offers = new Google_Service_Partners_Resource_Offers(
			$this,
			$this->serviceName,
			'offers',
			[
				'methods' => [
					'list' => [
						'path'       => 'v2/offers',
						'httpMethod' => 'GET',
						'parameters' => [
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->offers_history = new Google_Service_Partners_Resource_OffersHistory(
			$this,
			$this->serviceName,
			'history',
			[
				'methods' => [
					'list' => [
						'path'       => 'v2/offers/history',
						'httpMethod' => 'GET',
						'parameters' => [
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'                                      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'entireCompany'                                 => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'orderBy'                                       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->userEvents = new Google_Service_Partners_Resource_UserEvents(
			$this,
			$this->serviceName,
			'userEvents',
			[
				'methods' => [
					'log' => [
						'path'       => 'v2/userEvents:log',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->userStates = new Google_Service_Partners_Resource_UserStates(
			$this,
			$this->serviceName,
			'userStates',
			[
				'methods' => [
					'list' => [
						'path'       => 'v2/userStates',
						'httpMethod' => 'GET',
						'parameters' => [
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->users = new Google_Service_Partners_Resource_Users(
			$this,
			$this->serviceName,
			'users',
			[
				'methods' => [
					'createCompanyRelation'    => [
						'path'       => 'v2/users/{userId}/companyRelation',
						'httpMethod' => 'PUT',
						'parameters' => [
							'userId'                                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'deleteCompanyRelation' => [
						'path'       => 'v2/users/{userId}/companyRelation',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'userId'                                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'                   => [
						'path'       => 'v2/users/{userId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'                                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'userView'                                      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'updateProfile'         => [
						'path'       => 'v2/users/profile',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->v2 = new Google_Service_Partners_Resource_V2(
			$this,
			$this->serviceName,
			'v2',
			[
				'methods' => [
					'getPartnersstatus'  => [
						'path'       => 'v2/partnersstatus',
						'httpMethod' => 'GET',
						'parameters' => [
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'updateCompanies' => [
						'path'       => 'v2/companies',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'updateMask'                                    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'updateLeads'     => [
						'path'       => 'v2/leads',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'updateMask'                                    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.experimentIds'                 => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'requestMetadata.trafficSource.trafficSubId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.partnersSessionId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.userId'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.trafficSource.trafficSourceId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.locale'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestMetadata.userOverrides.ipAddress'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
	}
}
