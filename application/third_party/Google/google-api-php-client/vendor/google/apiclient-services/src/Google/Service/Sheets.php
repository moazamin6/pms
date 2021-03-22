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
 * Service definition for Sheets (v4).
 *
 * <p>
 * Reads and writes Google Sheets.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/sheets/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Sheets extends Google_Service
{
	/** View and manage the files in your Google Drive. */
	const DRIVE =
		"https://www.googleapis.com/auth/drive";
	/** View and manage Google Drive files and folders that you have opened or created with this app. */
	const DRIVE_FILE =
		"https://www.googleapis.com/auth/drive.file";
	/** View the files in your Google Drive. */
	const DRIVE_READONLY =
		"https://www.googleapis.com/auth/drive.readonly";
	/** View and manage your spreadsheets in Google Drive. */
	const SPREADSHEETS =
		"https://www.googleapis.com/auth/spreadsheets";
	/** View your Google Spreadsheets. */
	const SPREADSHEETS_READONLY =
		"https://www.googleapis.com/auth/spreadsheets.readonly";

	public $spreadsheets;
	public $spreadsheets_developerMetadata;
	public $spreadsheets_sheets;
	public $spreadsheets_values;

	/**
	 * Constructs the internal representation of the Sheets service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://sheets.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v4';
		$this->serviceName = 'sheets';

		$this->spreadsheets = new Google_Service_Sheets_Resource_Spreadsheets(
			$this,
			$this->serviceName,
			'spreadsheets',
			[
				'methods' => [
					'batchUpdate'        => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}:batchUpdate',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'          => [
						'path'       => 'v4/spreadsheets',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'get'             => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'spreadsheetId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'ranges'          => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'includeGridData' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'getByDataFilter' => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}:getByDataFilter',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->spreadsheets_developerMetadata = new Google_Service_Sheets_Resource_SpreadsheetsDeveloperMetadata(
			$this,
			$this->serviceName,
			'developerMetadata',
			[
				'methods' => [
					'get'       => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/developerMetadata/{metadataId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'metadataId'    => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'search' => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/developerMetadata:search',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->spreadsheets_sheets = new Google_Service_Sheets_Resource_SpreadsheetsSheets(
			$this,
			$this->serviceName,
			'sheets',
			[
				'methods' => [
					'copyTo' => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/sheets/{sheetId}:copyTo',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'sheetId'       => [
								'location' => 'path',
								'type'     => 'integer',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->spreadsheets_values = new Google_Service_Sheets_Resource_SpreadsheetsValues(
			$this,
			$this->serviceName,
			'values',
			[
				'methods' => [
					'append'                     => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/values/{range}:append',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId'                => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'range'                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'includeValuesInResponse'      => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'responseValueRenderOption'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'insertDataOption'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'valueInputOption'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'responseDateTimeRenderOption' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'batchClear'              => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/values:batchClear',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'batchClearByDataFilter'  => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/values:batchClearByDataFilter',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'batchGet'                => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/values:batchGet',
						'httpMethod' => 'GET',
						'parameters' => [
							'spreadsheetId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'ranges'               => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'majorDimension'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'valueRenderOption'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'dateTimeRenderOption' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'batchGetByDataFilter'    => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/values:batchGetByDataFilter',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'batchUpdate'             => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/values:batchUpdate',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'batchUpdateByDataFilter' => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/values:batchUpdateByDataFilter',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'clear'                   => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/values/{range}:clear',
						'httpMethod' => 'POST',
						'parameters' => [
							'spreadsheetId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'range'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'                     => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/values/{range}',
						'httpMethod' => 'GET',
						'parameters' => [
							'spreadsheetId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'range'                => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'majorDimension'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'valueRenderOption'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'dateTimeRenderOption' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'                  => [
						'path'       => 'v4/spreadsheets/{spreadsheetId}/values/{range}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'spreadsheetId'                => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'range'                        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'responseValueRenderOption'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'valueInputOption'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'responseDateTimeRenderOption' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'includeValuesInResponse'      => [
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
