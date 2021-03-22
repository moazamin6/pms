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
 * Service definition for Games (v1).
 *
 * <p>
 * The API for Google Play Game Services.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/games/services/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Games extends Google_Service
{
	/** View and manage its own configuration data in your Google Drive. */
	const DRIVE_APPDATA =
		"https://www.googleapis.com/auth/drive.appdata";
	/** Share your Google+ profile information and view and manage your game activity. */
	const GAMES =
		"https://www.googleapis.com/auth/games";
	/** Know the list of people in your circles, your age range, and language. */
	const PLUS_LOGIN =
		"https://www.googleapis.com/auth/plus.login";

	public $achievementDefinitions;
	public $achievements;
	public $applications;
	public $events;
	public $leaderboards;
	public $metagame;
	public $players;
	public $pushtokens;
	public $questMilestones;
	public $quests;
	public $revisions;
	public $rooms;
	public $scores;
	public $snapshots;
	public $turnBasedMatches;

	/**
	 * Constructs the internal representation of the Games service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'games/v1/';
		$this->version = 'v1';
		$this->serviceName = 'games';

		$this->achievementDefinitions = new Google_Service_Games_Resource_AchievementDefinitions(
			$this,
			$this->serviceName,
			'achievementDefinitions',
			[
				'methods' => [
					'list' => [
						'path'       => 'achievements',
						'httpMethod' => 'GET',
						'parameters' => [
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
					],
				],
			]
		);
		$this->achievements = new Google_Service_Games_Resource_Achievements(
			$this,
			$this->serviceName,
			'achievements',
			[
				'methods' => [
					'increment'          => [
						'path'       => 'achievements/{achievementId}/increment',
						'httpMethod' => 'POST',
						'parameters' => [
							'achievementId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'stepsToIncrement' => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'requestId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'            => [
						'path'       => 'players/{playerId}/achievements',
						'httpMethod' => 'GET',
						'parameters' => [
							'playerId'   => [
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
							'state'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'reveal'          => [
						'path'       => 'achievements/{achievementId}/reveal',
						'httpMethod' => 'POST',
						'parameters' => [
							'achievementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setStepsAtLeast' => [
						'path'       => 'achievements/{achievementId}/setStepsAtLeast',
						'httpMethod' => 'POST',
						'parameters' => [
							'achievementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'steps'         => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
						],
					], 'unlock'          => [
						'path'       => 'achievements/{achievementId}/unlock',
						'httpMethod' => 'POST',
						'parameters' => [
							'achievementId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'updateMultiple'  => [
						'path'       => 'achievements/updateMultiple',
						'httpMethod' => 'POST',
						'parameters' => [],
					],
				],
			]
		);
		$this->applications = new Google_Service_Games_Resource_Applications(
			$this,
			$this->serviceName,
			'applications',
			[
				'methods' => [
					'get'       => [
						'path'       => 'applications/{applicationId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'applicationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'platformType'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'played' => [
						'path'       => 'applications/played',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'verify' => [
						'path'       => 'applications/{applicationId}/verify',
						'httpMethod' => 'GET',
						'parameters' => [
							'applicationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->events = new Google_Service_Games_Resource_Events(
			$this,
			$this->serviceName,
			'events',
			[
				'methods' => [
					'listByPlayer'       => [
						'path'       => 'events',
						'httpMethod' => 'GET',
						'parameters' => [
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
					], 'listDefinitions' => [
						'path'       => 'eventDefinitions',
						'httpMethod' => 'GET',
						'parameters' => [
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
					], 'record'          => [
						'path'       => 'events',
						'httpMethod' => 'POST',
						'parameters' => [
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->leaderboards = new Google_Service_Games_Resource_Leaderboards(
			$this,
			$this->serviceName,
			'leaderboards',
			[
				'methods' => [
					'get'     => [
						'path'       => 'leaderboards/{leaderboardId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'leaderboardId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list' => [
						'path'       => 'leaderboards',
						'httpMethod' => 'GET',
						'parameters' => [
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
					],
				],
			]
		);
		$this->metagame = new Google_Service_Games_Resource_Metagame(
			$this,
			$this->serviceName,
			'metagame',
			[
				'methods' => [
					'getMetagameConfig'         => [
						'path'       => 'metagameConfig',
						'httpMethod' => 'GET',
						'parameters' => [],
					], 'listCategoriesByPlayer' => [
						'path'       => 'players/{playerId}/categories/{collection}',
						'httpMethod' => 'GET',
						'parameters' => [
							'playerId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'collection' => [
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
					],
				],
			]
		);
		$this->players = new Google_Service_Games_Resource_Players(
			$this,
			$this->serviceName,
			'players',
			[
				'methods' => [
					'get'     => [
						'path'       => 'players/{playerId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'playerId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list' => [
						'path'       => 'players/me/players/{collection}',
						'httpMethod' => 'GET',
						'parameters' => [
							'collection' => [
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
					],
				],
			]
		);
		$this->pushtokens = new Google_Service_Games_Resource_Pushtokens(
			$this,
			$this->serviceName,
			'pushtokens',
			[
				'methods' => [
					'remove'    => [
						'path'       => 'pushtokens/remove',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'update' => [
						'path'       => 'pushtokens',
						'httpMethod' => 'PUT',
						'parameters' => [],
					],
				],
			]
		);
		$this->questMilestones = new Google_Service_Games_Resource_QuestMilestones(
			$this,
			$this->serviceName,
			'questMilestones',
			[
				'methods' => [
					'claim' => [
						'path'       => 'quests/{questId}/milestones/{milestoneId}/claim',
						'httpMethod' => 'PUT',
						'parameters' => [
							'questId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'milestoneId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'requestId'   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->quests = new Google_Service_Games_Resource_Quests(
			$this,
			$this->serviceName,
			'quests',
			[
				'methods' => [
					'accept'  => [
						'path'       => 'quests/{questId}/accept',
						'httpMethod' => 'POST',
						'parameters' => [
							'questId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list' => [
						'path'       => 'players/{playerId}/quests',
						'httpMethod' => 'GET',
						'parameters' => [
							'playerId'   => [
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
					],
				],
			]
		);
		$this->revisions = new Google_Service_Games_Resource_Revisions(
			$this,
			$this->serviceName,
			'revisions',
			[
				'methods' => [
					'check' => [
						'path'       => 'revisions/check',
						'httpMethod' => 'GET',
						'parameters' => [
							'clientRevision' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->rooms = new Google_Service_Games_Resource_Rooms(
			$this,
			$this->serviceName,
			'rooms',
			[
				'methods' => [
					'create'          => [
						'path'       => 'rooms/create',
						'httpMethod' => 'POST',
						'parameters' => [
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'decline'      => [
						'path'       => 'rooms/{roomId}/decline',
						'httpMethod' => 'POST',
						'parameters' => [
							'roomId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'dismiss'      => [
						'path'       => 'rooms/{roomId}/dismiss',
						'httpMethod' => 'POST',
						'parameters' => [
							'roomId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'          => [
						'path'       => 'rooms/{roomId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'roomId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'join'         => [
						'path'       => 'rooms/{roomId}/join',
						'httpMethod' => 'POST',
						'parameters' => [
							'roomId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'leave'        => [
						'path'       => 'rooms/{roomId}/leave',
						'httpMethod' => 'POST',
						'parameters' => [
							'roomId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'         => [
						'path'       => 'rooms',
						'httpMethod' => 'GET',
						'parameters' => [
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
					], 'reportStatus' => [
						'path'       => 'rooms/{roomId}/reportstatus',
						'httpMethod' => 'POST',
						'parameters' => [
							'roomId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->scores = new Google_Service_Games_Resource_Scores(
			$this,
			$this->serviceName,
			'scores',
			[
				'methods' => [
					'get'               => [
						'path'       => 'players/{playerId}/leaderboards/{leaderboardId}/scores/{timeSpan}',
						'httpMethod' => 'GET',
						'parameters' => [
							'playerId'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'leaderboardId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'timeSpan'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'includeRankType' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'language'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'       => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'           => [
						'path'       => 'leaderboards/{leaderboardId}/scores/{collection}',
						'httpMethod' => 'GET',
						'parameters' => [
							'leaderboardId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'collection'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'timeSpan'      => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'language'      => [
								'location' => 'query',
								'type'     => 'string',
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
					], 'listWindow'     => [
						'path'       => 'leaderboards/{leaderboardId}/window/{collection}',
						'httpMethod' => 'GET',
						'parameters' => [
							'leaderboardId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'collection'        => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'timeSpan'          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'language'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'        => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'resultsAbove'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'returnTopIfAbsent' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'submit'         => [
						'path'       => 'leaderboards/{leaderboardId}/scores',
						'httpMethod' => 'POST',
						'parameters' => [
							'leaderboardId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'score'         => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'language'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'scoreTag'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'submitMultiple' => [
						'path'       => 'leaderboards/scores',
						'httpMethod' => 'POST',
						'parameters' => [
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->snapshots = new Google_Service_Games_Resource_Snapshots(
			$this,
			$this->serviceName,
			'snapshots',
			[
				'methods' => [
					'get'     => [
						'path'       => 'snapshots/{snapshotId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'snapshotId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list' => [
						'path'       => 'players/{playerId}/snapshots',
						'httpMethod' => 'GET',
						'parameters' => [
							'playerId'   => [
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
					],
				],
			]
		);
		$this->turnBasedMatches = new Google_Service_Games_Resource_TurnBasedMatches(
			$this,
			$this->serviceName,
			'turnBasedMatches',
			[
				'methods' => [
					'cancel'       => [
						'path'       => 'turnbasedmatches/{matchId}/cancel',
						'httpMethod' => 'PUT',
						'parameters' => [
							'matchId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create'    => [
						'path'       => 'turnbasedmatches/create',
						'httpMethod' => 'POST',
						'parameters' => [
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'decline'   => [
						'path'       => 'turnbasedmatches/{matchId}/decline',
						'httpMethod' => 'PUT',
						'parameters' => [
							'matchId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'dismiss'   => [
						'path'       => 'turnbasedmatches/{matchId}/dismiss',
						'httpMethod' => 'PUT',
						'parameters' => [
							'matchId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'finish'    => [
						'path'       => 'turnbasedmatches/{matchId}/finish',
						'httpMethod' => 'PUT',
						'parameters' => [
							'matchId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'get'       => [
						'path'       => 'turnbasedmatches/{matchId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'matchId'          => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'includeMatchData' => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'language'         => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'join'      => [
						'path'       => 'turnbasedmatches/{matchId}/join',
						'httpMethod' => 'PUT',
						'parameters' => [
							'matchId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'leave'     => [
						'path'       => 'turnbasedmatches/{matchId}/leave',
						'httpMethod' => 'PUT',
						'parameters' => [
							'matchId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'leaveTurn' => [
						'path'       => 'turnbasedmatches/{matchId}/leaveTurn',
						'httpMethod' => 'PUT',
						'parameters' => [
							'matchId'              => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'matchVersion'         => [
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							],
							'language'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pendingParticipantId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'      => [
						'path'       => 'turnbasedmatches',
						'httpMethod' => 'GET',
						'parameters' => [
							'includeMatchData'    => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'language'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxCompletedMatches' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'maxResults'          => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'rematch'   => [
						'path'       => 'turnbasedmatches/{matchId}/rematch',
						'httpMethod' => 'POST',
						'parameters' => [
							'matchId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'requestId' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'sync'      => [
						'path'       => 'turnbasedmatches/sync',
						'httpMethod' => 'GET',
						'parameters' => [
							'includeMatchData'    => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'language'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxCompletedMatches' => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'maxResults'          => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'takeTurn'  => [
						'path'       => 'turnbasedmatches/{matchId}/turn',
						'httpMethod' => 'PUT',
						'parameters' => [
							'matchId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'language' => [
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
