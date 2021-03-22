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
 * Service definition for GamesManagement (v1management).
 *
 * <p>
 * The Management API for Google Play Game Services.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/games/services" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_GamesManagement extends Google_Service
{
	/** Share your Google+ profile information and view and manage your game activity. */
	const GAMES =
		"https://www.googleapis.com/auth/games";
	/** Know the list of people in your circles, your age range, and language. */
	const PLUS_LOGIN =
		"https://www.googleapis.com/auth/plus.login";

	public $achievements;
	public $applications;
	public $events;
	public $players;
	public $quests;
	public $rooms;
	public $scores;
	public $turnBasedMatches;

	/**
	 * Constructs the internal representation of the GamesManagement service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'games/v1management/';
		$this->version = 'v1management';
		$this->serviceName = 'gamesManagement';

		$this->achievements = new Google_Service_GamesManagement_Resource_Achievements(
			$this,
			$this->serviceName,
			'achievements',
			[
				'methods' => [
					'reset'                         => [
						'path'       => 'achievements/{achievementId}/reset',
						'httpMethod' => 'POST',
						'parameters' => [
							'achievementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resetAll'                   => [
						'path'       => 'achievements/reset',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'resetAllForAllPlayers'      => [
						'path'       => 'achievements/resetAllForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'resetForAllPlayers'         => [
						'path'       => 'achievements/{achievementId}/resetForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [
							'achievementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resetMultipleForAllPlayers' => [
						'path'       => 'achievements/resetMultipleForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->applications = new Google_Service_GamesManagement_Resource_Applications(
			$this,
			$this->serviceName,
			'applications',
			[
				'methods' => [
					'listHidden' => [
						'path'       => 'applications/{applicationId}/players/hidden',
						'httpMethod' => 'GET',
						'parameters' => [
							'applicationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'maxResults'    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->events = new Google_Service_GamesManagement_Resource_Events(
			$this,
			$this->serviceName,
			'events',
			[
				'methods' => [
					'reset'                         => [
						'path'       => 'events/{eventId}/reset',
						'httpMethod' => 'POST',
						'parameters' => [
							'eventId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resetAll'                   => [
						'path'       => 'events/reset',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'resetAllForAllPlayers'      => [
						'path'       => 'events/resetAllForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'resetForAllPlayers'         => [
						'path'       => 'events/{eventId}/resetForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [
							'eventId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resetMultipleForAllPlayers' => [
						'path'       => 'events/resetMultipleForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->players = new Google_Service_GamesManagement_Resource_Players(
			$this,
			$this->serviceName,
			'players',
			[
				'methods' => [
					'hide'      => [
						'path'       => 'applications/{applicationId}/players/hidden/{playerId}',
						'httpMethod' => 'POST',
						'parameters' => [
							'applicationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'playerId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'unhide' => [
						'path'       => 'applications/{applicationId}/players/hidden/{playerId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'applicationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'playerId'      => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->quests = new Google_Service_GamesManagement_Resource_Quests(
			$this,
			$this->serviceName,
			'quests',
			[
				'methods' => [
					'reset'                         => [
						'path'       => 'quests/{questId}/reset',
						'httpMethod' => 'POST',
						'parameters' => [
							'questId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resetAll'                   => [
						'path'       => 'quests/reset',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'resetAllForAllPlayers'      => [
						'path'       => 'quests/resetAllForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'resetForAllPlayers'         => [
						'path'       => 'quests/{questId}/resetForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [
							'questId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resetMultipleForAllPlayers' => [
						'path'       => 'quests/resetMultipleForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->rooms = new Google_Service_GamesManagement_Resource_Rooms(
			$this,
			$this->serviceName,
			'rooms',
			[
				'methods' => [
					'reset'                 => [
						'path'       => 'rooms/reset',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'resetForAllPlayers' => [
						'path'       => 'rooms/resetForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->scores = new Google_Service_GamesManagement_Resource_Scores(
			$this,
			$this->serviceName,
			'scores',
			[
				'methods' => [
					'reset'                         => [
						'path'       => 'leaderboards/{leaderboardId}/scores/reset',
						'httpMethod' => 'POST',
						'parameters' => [
							'leaderboardId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resetAll'                   => [
						'path'       => 'scores/reset',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'resetAllForAllPlayers'      => [
						'path'       => 'scores/resetAllForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'resetForAllPlayers'         => [
						'path'       => 'leaderboards/{leaderboardId}/scores/resetForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [
							'leaderboardId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'resetMultipleForAllPlayers' => [
						'path'       => 'scores/resetMultipleForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->turnBasedMatches = new Google_Service_GamesManagement_Resource_TurnBasedMatches(
			$this,
			$this->serviceName,
			'turnBasedMatches',
			[
				'methods' => [
					'reset'                 => [
						'path'       => 'turnbasedmatches/reset',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'resetForAllPlayers' => [
						'path'       => 'turnbasedmatches/resetForAllPlayers',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
	}
}
