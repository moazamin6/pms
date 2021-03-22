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
 * Service definition for ShoppingContent (v2).
 *
 * <p>
 * Manages product items, inventory, and Merchant Center accounts for Google
 * Shopping.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/shopping-content" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_ShoppingContent extends Google_Service
{
	/** Manage your product listings and accounts for Google Shopping. */
	const CONTENT =
		"https://www.googleapis.com/auth/content";
	
	public $accounts;
	public $accountstatuses;
	public $accounttax;
	public $datafeeds;
	public $datafeedstatuses;
	public $inventory;
	public $liasettings;
	public $orderinvoices;
	public $orderpayments;
	public $orders;
	public $pos;
	public $products;
	public $productstatuses;
	public $shippingsettings;
	
	/**
	 * Constructs the internal representation of the ShoppingContent service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'content/v2/';
		$this->version = 'v2';
		$this->serviceName = 'content';
		
		$this->accounts = new Google_Service_ShoppingContent_Resource_Accounts(
			$this,
			$this->serviceName,
			'accounts',
			[
				'methods' => [
					'authinfo'        => [
						'path'       => 'accounts/authinfo',
						'httpMethod' => 'GET',
						'parameters' => [],
					], 'claimwebsite' => [
						'path'       => '{merchantId}/accounts/{accountId}/claimwebsite',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'overwrite'  => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'custombatch'  => [
						'path'       => 'accounts/batch',
						'httpMethod' => 'POST',
						'parameters' => [
							'dryRun' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete'       => [
						'path'       => '{merchantId}/accounts/{accountId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'force'      => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'          => [
						'path'       => '{merchantId}/accounts/{accountId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'       => [
						'path'       => '{merchantId}/accounts',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'list'         => [
						'path'       => '{merchantId}/accounts',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
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
					], 'patch'        => [
						'path'       => '{merchantId}/accounts/{accountId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'update'       => [
						'path'       => '{merchantId}/accounts/{accountId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->accountstatuses = new Google_Service_ShoppingContent_Resource_Accountstatuses(
			$this,
			$this->serviceName,
			'accountstatuses',
			[
				'methods' => [
					'custombatch' => [
						'path'       => 'accountstatuses/batch',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'      => [
						'path'       => '{merchantId}/accountstatuses/{accountId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'destinations' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'list'     => [
						'path'       => '{merchantId}/accountstatuses',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'destinations' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'maxResults'   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->accounttax = new Google_Service_ShoppingContent_Resource_Accounttax(
			$this,
			$this->serviceName,
			'accounttax',
			[
				'methods' => [
					'custombatch' => [
						'path'       => 'accounttax/batch',
						'httpMethod' => 'POST',
						'parameters' => [
							'dryRun' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'      => [
						'path'       => '{merchantId}/accounttax/{accountId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'     => [
						'path'       => '{merchantId}/accounttax',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
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
					], 'patch'    => [
						'path'       => '{merchantId}/accounttax/{accountId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'update'   => [
						'path'       => '{merchantId}/accounttax/{accountId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->datafeeds = new Google_Service_ShoppingContent_Resource_Datafeeds(
			$this,
			$this->serviceName,
			'datafeeds',
			[
				'methods' => [
					'custombatch' => [
						'path'       => 'datafeeds/batch',
						'httpMethod' => 'POST',
						'parameters' => [
							'dryRun' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete'   => [
						'path'       => '{merchantId}/datafeeds/{datafeedId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datafeedId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'fetchnow' => [
						'path'       => '{merchantId}/datafeeds/{datafeedId}/fetchNow',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datafeedId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'      => [
						'path'       => '{merchantId}/datafeeds/{datafeedId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datafeedId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'   => [
						'path'       => '{merchantId}/datafeeds',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'list'     => [
						'path'       => '{merchantId}/datafeeds',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
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
					], 'patch'    => [
						'path'       => '{merchantId}/datafeeds/{datafeedId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datafeedId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'update'   => [
						'path'       => '{merchantId}/datafeeds/{datafeedId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datafeedId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->datafeedstatuses = new Google_Service_ShoppingContent_Resource_Datafeedstatuses(
			$this,
			$this->serviceName,
			'datafeedstatuses',
			[
				'methods' => [
					'custombatch' => [
						'path'       => 'datafeedstatuses/batch',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'      => [
						'path'       => '{merchantId}/datafeedstatuses/{datafeedId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'datafeedId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'country'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'language'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'     => [
						'path'       => '{merchantId}/datafeedstatuses',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
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
					],
				],
			]
		);
		$this->inventory = new Google_Service_ShoppingContent_Resource_Inventory(
			$this,
			$this->serviceName,
			'inventory',
			[
				'methods' => [
					'custombatch' => [
						'path'       => 'inventory/batch',
						'httpMethod' => 'POST',
						'parameters' => [
							'dryRun' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'set'      => [
						'path'       => '{merchantId}/inventory/{storeCode}/products/{productId}',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'storeCode'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->liasettings = new Google_Service_ShoppingContent_Resource_Liasettings(
			$this,
			$this->serviceName,
			'liasettings',
			[
				'methods' => [
					'custombatch'                        => [
						'path'       => 'liasettings/batch',
						'httpMethod' => 'POST',
						'parameters' => [
							'dryRun' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'                             => [
						'path'       => '{merchantId}/liasettings/{accountId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getaccessiblegmbaccounts'        => [
						'path'       => '{merchantId}/liasettings/{accountId}/accessiblegmbaccounts',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                            => [
						'path'       => '{merchantId}/liasettings',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
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
					], 'patch'                           => [
						'path'       => '{merchantId}/liasettings/{accountId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'requestgmbaccess'                => [
						'path'       => '{merchantId}/liasettings/{accountId}/requestgmbaccess',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'gmbEmail'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'requestinventoryverification'    => [
						'path'       => '{merchantId}/liasettings/{accountId}/requestinventoryverification/{country}',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'country'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setinventoryverificationcontact' => [
						'path'       => '{merchantId}/liasettings/{accountId}/setinventoryverificationcontact',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'contactEmail' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'contactName'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'country'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'language'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'                          => [
						'path'       => '{merchantId}/liasettings/{accountId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->orderinvoices = new Google_Service_ShoppingContent_Resource_Orderinvoices(
			$this,
			$this->serviceName,
			'orderinvoices',
			[
				'methods' => [
					'createchargeinvoice'    => [
						'path'       => '{merchantId}/orderinvoices/{orderId}/createChargeInvoice',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'createrefundinvoice' => [
						'path'       => '{merchantId}/orderinvoices/{orderId}/createRefundInvoice',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->orderpayments = new Google_Service_ShoppingContent_Resource_Orderpayments(
			$this,
			$this->serviceName,
			'orderpayments',
			[
				'methods' => [
					'notifyauthapproved'    => [
						'path'       => '{merchantId}/orderpayments/{orderId}/notifyAuthApproved',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'notifyauthdeclined' => [
						'path'       => '{merchantId}/orderpayments/{orderId}/notifyAuthDeclined',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'notifycharge'       => [
						'path'       => '{merchantId}/orderpayments/{orderId}/notifyCharge',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'notifyrefund'       => [
						'path'       => '{merchantId}/orderpayments/{orderId}/notifyRefund',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->orders = new Google_Service_ShoppingContent_Resource_Orders(
			$this,
			$this->serviceName,
			'orders',
			[
				'methods' => [
					'acknowledge'                      => [
						'path'       => '{merchantId}/orders/{orderId}/acknowledge',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'advancetestorder'              => [
						'path'       => '{merchantId}/testorders/{orderId}/advance',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'cancel'                        => [
						'path'       => '{merchantId}/orders/{orderId}/cancel',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'cancellineitem'                => [
						'path'       => '{merchantId}/orders/{orderId}/cancelLineItem',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'createtestorder'               => [
						'path'       => '{merchantId}/testorders',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'custombatch'                   => [
						'path'       => 'orders/batch',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'                           => [
						'path'       => '{merchantId}/orders/{orderId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getbymerchantorderid'          => [
						'path'       => '{merchantId}/ordersbymerchantid/{merchantOrderId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'merchantOrderId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'gettestordertemplate'          => [
						'path'       => '{merchantId}/testordertemplates/{templateName}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'templateName' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'instorerefundlineitem'         => [
						'path'       => '{merchantId}/orders/{orderId}/inStoreRefundLineItem',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                          => [
						'path'       => '{merchantId}/orders',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'acknowledged'    => [
								'location' => 'query',
								'type'     => 'boolean',
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
							'placedDateEnd'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'placedDateStart' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'statuses'        => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'refund'                        => [
						'path'       => '{merchantId}/orders/{orderId}/refund',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'rejectreturnlineitem'          => [
						'path'       => '{merchantId}/orders/{orderId}/rejectReturnLineItem',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'returnlineitem'                => [
						'path'       => '{merchantId}/orders/{orderId}/returnLineItem',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'returnrefundlineitem'          => [
						'path'       => '{merchantId}/orders/{orderId}/returnRefundLineItem',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setlineitemmetadata'           => [
						'path'       => '{merchantId}/orders/{orderId}/setLineItemMetadata',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'shiplineitems'                 => [
						'path'       => '{merchantId}/orders/{orderId}/shipLineItems',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updatelineitemshippingdetails' => [
						'path'       => '{merchantId}/orders/{orderId}/updateLineItemShippingDetails',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updatemerchantorderid'         => [
						'path'       => '{merchantId}/orders/{orderId}/updateMerchantOrderId',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updateshipment'                => [
						'path'       => '{merchantId}/orders/{orderId}/updateShipment',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->pos = new Google_Service_ShoppingContent_Resource_Pos(
			$this,
			$this->serviceName,
			'pos',
			[
				'methods' => [
					'custombatch'  => [
						'path'       => 'pos/batch',
						'httpMethod' => 'POST',
						'parameters' => [
							'dryRun' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete'    => [
						'path'       => '{merchantId}/pos/{targetMerchantId}/store/{storeCode}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'merchantId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetMerchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'storeCode'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'           => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'       => [
						'path'       => '{merchantId}/pos/{targetMerchantId}/store/{storeCode}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetMerchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'storeCode'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'    => [
						'path'       => '{merchantId}/pos/{targetMerchantId}/store',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetMerchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'           => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'inventory' => [
						'path'       => '{merchantId}/pos/{targetMerchantId}/inventory',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetMerchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'           => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'list'      => [
						'path'       => '{merchantId}/pos/{targetMerchantId}/store',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetMerchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'sale'      => [
						'path'       => '{merchantId}/pos/{targetMerchantId}/sale',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'targetMerchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'           => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->products = new Google_Service_ShoppingContent_Resource_Products(
			$this,
			$this->serviceName,
			'products',
			[
				'methods' => [
					'custombatch' => [
						'path'       => 'products/batch',
						'httpMethod' => 'POST',
						'parameters' => [
							'dryRun' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'delete'   => [
						'path'       => '{merchantId}/products/{productId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'      => [
						'path'       => '{merchantId}/products/{productId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'   => [
						'path'       => '{merchantId}/products',
						'httpMethod' => 'POST',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'list'     => [
						'path'       => '{merchantId}/products',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId'                  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'includeInvalidInsertedItems' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'maxResults'                  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'                   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->productstatuses = new Google_Service_ShoppingContent_Resource_Productstatuses(
			$this,
			$this->serviceName,
			'productstatuses',
			[
				'methods' => [
					'custombatch' => [
						'path'       => 'productstatuses/batch',
						'httpMethod' => 'POST',
						'parameters' => [
							'includeAttributes' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'      => [
						'path'       => '{merchantId}/productstatuses/{productId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'productId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'destinations'      => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'includeAttributes' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'list'     => [
						'path'       => '{merchantId}/productstatuses',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId'                  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'destinations'                => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'includeAttributes'           => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'includeInvalidInsertedItems' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'maxResults'                  => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'                   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->shippingsettings = new Google_Service_ShoppingContent_Resource_Shippingsettings(
			$this,
			$this->serviceName,
			'shippingsettings',
			[
				'methods' => [
					'custombatch'             => [
						'path'       => 'shippingsettings/batch',
						'httpMethod' => 'POST',
						'parameters' => [
							'dryRun' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'get'                  => [
						'path'       => '{merchantId}/shippingsettings/{accountId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getsupportedcarriers' => [
						'path'       => '{merchantId}/supportedCarriers',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'getsupportedholidays' => [
						'path'       => '{merchantId}/supportedHolidays',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                 => [
						'path'       => '{merchantId}/shippingsettings',
						'httpMethod' => 'GET',
						'parameters' => [
							'merchantId' => [
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
					], 'patch'                => [
						'path'       => '{merchantId}/shippingsettings/{accountId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'update'               => [
						'path'       => '{merchantId}/shippingsettings/{accountId}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'merchantId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'accountId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'dryRun'     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
	}
}
