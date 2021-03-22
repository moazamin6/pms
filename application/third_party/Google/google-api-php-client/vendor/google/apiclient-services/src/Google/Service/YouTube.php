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
 * Service definition for YouTube (v3).
 *
 * <p>
 * Supports core YouTube features, such as uploading videos, creating and
 * managing playlists, searching for content, and much more.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/youtube/v3" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_YouTube extends Google_Service
{
	/** Manage your YouTube account. */
	const YOUTUBE =
		"https://www.googleapis.com/auth/youtube";
	/** Manage your YouTube account. */
	const YOUTUBE_FORCE_SSL =
		"https://www.googleapis.com/auth/youtube.force-ssl";
	/** View your YouTube account. */
	const YOUTUBE_READONLY =
		"https://www.googleapis.com/auth/youtube.readonly";
	/** Manage your YouTube videos. */
	const YOUTUBE_UPLOAD =
		"https://www.googleapis.com/auth/youtube.upload";
	/** View and manage your assets and associated content on YouTube. */
	const YOUTUBEPARTNER =
		"https://www.googleapis.com/auth/youtubepartner";
	/** View private information of your YouTube channel relevant during the audit process with a YouTube partner. */
	const YOUTUBEPARTNER_CHANNEL_AUDIT =
		"https://www.googleapis.com/auth/youtubepartner-channel-audit";

	public $activities;
	public $captions;
	public $channelBanners;
	public $channelSections;
	public $channels;
	public $commentThreads;
	public $comments;
	public $guideCategories;
	public $i18nLanguages;
	public $i18nRegions;
	public $liveBroadcasts;
	public $liveChatBans;
	public $liveChatMessages;
	public $liveChatModerators;
	public $liveStreams;
	public $playlistItems;
	public $playlists;
	public $search;
	public $sponsors;
	public $subscriptions;
	public $superChatEvents;
	public $thumbnails;
	public $videoAbuseReportReasons;
	public $videoCategories;
	public $videos;
	public $watermarks;

	/**
	 * Constructs the internal representation of the YouTube service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://www.googleapis.com/';
		$this->servicePath = 'youtube/v3/';
		$this->version = 'v3';
		$this->serviceName = 'youtube';

		$this->activities = new Google_Service_YouTube_Resource_Activities(
			$this,
			$this->serviceName,
			'activities',
			[
				'methods' => [
					'insert'  => [
						'path'       => 'activities',
						'httpMethod' => 'POST',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'activities',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'            => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'channelId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'home'            => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'maxResults'      => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'mine'            => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'pageToken'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'publishedAfter'  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'publishedBefore' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'regionCode'      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->captions = new Google_Service_YouTube_Resource_Captions(
			$this,
			$this->serviceName,
			'captions',
			[
				'methods' => [
					'delete'      => [
						'path'       => 'captions',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOf'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'download' => [
						'path'       => 'captions/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'id'                     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOf'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'tfmt'                   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'tlang'                  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert'   => [
						'path'       => 'captions',
						'httpMethod' => 'POST',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOf'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sync'                   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'list'     => [
						'path'       => 'captions',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'videoId'                => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOf'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'   => [
						'path'       => 'captions',
						'httpMethod' => 'PUT',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOf'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'sync'                   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					],
				],
			]
		);
		$this->channelBanners = new Google_Service_YouTube_Resource_ChannelBanners(
			$this,
			$this->serviceName,
			'channelBanners',
			[
				'methods' => [
					'insert' => [
						'path'       => 'channelBanners/insert',
						'httpMethod' => 'POST',
						'parameters' => [
							'channelId'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->channelSections = new Google_Service_YouTube_Resource_ChannelSections(
			$this,
			$this->serviceName,
			'channelSections',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'channelSections',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert' => [
						'path'       => 'channelSections',
						'httpMethod' => 'POST',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'channelSections',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'channelId'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'hl'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'mine'                   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'channelSections',
						'httpMethod' => 'PUT',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->channels = new Google_Service_YouTube_Resource_Channels(
			$this,
			$this->serviceName,
			'channels',
			[
				'methods' => [
					'list'      => [
						'path'       => 'channels',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'categoryId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'forUsername'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'hl'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'managedByMe'            => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'maxResults'             => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'mine'                   => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'mySubscribers'          => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'              => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'channels',
						'httpMethod' => 'PUT',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->commentThreads = new Google_Service_YouTube_Resource_CommentThreads(
			$this,
			$this->serviceName,
			'commentThreads',
			[
				'methods' => [
					'insert'    => [
						'path'       => 'commentThreads',
						'httpMethod' => 'POST',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'commentThreads',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                         => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'allThreadsRelatedToChannelId' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'channelId'                    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'                           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'                   => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'moderationStatus'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'order'                        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'searchTerms'                  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'textFormat'                   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoId'                      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'commentThreads',
						'httpMethod' => 'PUT',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->comments = new Google_Service_YouTube_Resource_Comments(
			$this,
			$this->serviceName,
			'comments',
			[
				'methods' => [
					'delete'                 => [
						'path'       => 'comments',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert'              => [
						'path'       => 'comments',
						'httpMethod' => 'POST',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'                => [
						'path'       => 'comments',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'       => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'id'         => [
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
							'parentId'   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'textFormat' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'markAsSpam'          => [
						'path'       => 'comments/markAsSpam',
						'httpMethod' => 'POST',
						'parameters' => [
							'id' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'setModerationStatus' => [
						'path'       => 'comments/setModerationStatus',
						'httpMethod' => 'POST',
						'parameters' => [
							'id'               => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'moderationStatus' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'banAuthor'        => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'update'              => [
						'path'       => 'comments',
						'httpMethod' => 'PUT',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->guideCategories = new Google_Service_YouTube_Resource_GuideCategories(
			$this,
			$this->serviceName,
			'guideCategories',
			[
				'methods' => [
					'list' => [
						'path'       => 'guideCategories',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'       => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'hl'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'regionCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->i18nLanguages = new Google_Service_YouTube_Resource_I18nLanguages(
			$this,
			$this->serviceName,
			'i18nLanguages',
			[
				'methods' => [
					'list' => [
						'path'       => 'i18nLanguages',
						'httpMethod' => 'GET',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'hl'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->i18nRegions = new Google_Service_YouTube_Resource_I18nRegions(
			$this,
			$this->serviceName,
			'i18nRegions',
			[
				'methods' => [
					'list' => [
						'path'       => 'i18nRegions',
						'httpMethod' => 'GET',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'hl'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->liveBroadcasts = new Google_Service_YouTube_Resource_LiveBroadcasts(
			$this,
			$this->serviceName,
			'liveBroadcasts',
			[
				'methods' => [
					'bind'          => [
						'path'       => 'liveBroadcasts/bind',
						'httpMethod' => 'POST',
						'parameters' => [
							'id'                            => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'streamId'                      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'control'    => [
						'path'       => 'liveBroadcasts/control',
						'httpMethod' => 'POST',
						'parameters' => [
							'id'                            => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'displaySlate'                  => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'offsetTimeMs'                  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'walltime'                      => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete'     => [
						'path'       => 'liveBroadcasts',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id'                            => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert'     => [
						'path'       => 'liveBroadcasts',
						'httpMethod' => 'POST',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'       => [
						'path'       => 'liveBroadcasts',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'broadcastStatus'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'broadcastType'                 => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'                            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'                    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'mine'                          => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'transition' => [
						'path'       => 'liveBroadcasts/transition',
						'httpMethod' => 'POST',
						'parameters' => [
							'broadcastStatus'               => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'id'                            => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'     => [
						'path'       => 'liveBroadcasts',
						'httpMethod' => 'PUT',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->liveChatBans = new Google_Service_YouTube_Resource_LiveChatBans(
			$this,
			$this->serviceName,
			'liveChatBans',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'liveChat/bans',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'liveChat/bans',
						'httpMethod' => 'POST',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->liveChatMessages = new Google_Service_YouTube_Resource_LiveChatMessages(
			$this,
			$this->serviceName,
			'liveChatMessages',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'liveChat/messages',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'liveChat/messages',
						'httpMethod' => 'POST',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'liveChat/messages',
						'httpMethod' => 'GET',
						'parameters' => [
							'liveChatId'       => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'part'             => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'hl'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'       => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'profileImageSize' => [
								'location' => 'query',
								'type'     => 'integer',
							],
						],
					],
				],
			]
		);
		$this->liveChatModerators = new Google_Service_YouTube_Resource_LiveChatModerators(
			$this,
			$this->serviceName,
			'liveChatModerators',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'liveChat/moderators',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'liveChat/moderators',
						'httpMethod' => 'POST',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'liveChat/moderators',
						'httpMethod' => 'GET',
						'parameters' => [
							'liveChatId' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'part'       => [
								'location' => 'query',
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
		$this->liveStreams = new Google_Service_YouTube_Resource_LiveStreams(
			$this,
			$this->serviceName,
			'liveStreams',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'liveStreams',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id'                            => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert' => [
						'path'       => 'liveStreams',
						'httpMethod' => 'POST',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'liveStreams',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'id'                            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'                    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'mine'                          => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'liveStreams',
						'httpMethod' => 'PUT',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->playlistItems = new Google_Service_YouTube_Resource_PlaylistItems(
			$this,
			$this->serviceName,
			'playlistItems',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'playlistItems',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert' => [
						'path'       => 'playlistItems',
						'httpMethod' => 'POST',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'playlistItems',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'             => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'playlistId'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoId'                => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'playlistItems',
						'httpMethod' => 'PUT',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->playlists = new Google_Service_YouTube_Resource_Playlists(
			$this,
			$this->serviceName,
			'playlists',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'playlists',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert' => [
						'path'       => 'playlists',
						'httpMethod' => 'POST',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'list'   => [
						'path'       => 'playlists',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'channelId'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'hl'                            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'                            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'                    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'mine'                          => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'playlists',
						'httpMethod' => 'PUT',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->search = new Google_Service_YouTube_Resource_Search(
			$this,
			$this->serviceName,
			'search',
			[
				'methods' => [
					'list' => [
						'path'       => 'search',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'channelId'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'channelType'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'eventType'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'forContentOwner'        => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'forDeveloper'           => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'forMine'                => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'location'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'locationRadius'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'             => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'order'                  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'publishedAfter'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'publishedBefore'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'q'                      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'regionCode'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'relatedToVideoId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'relevanceLanguage'      => [
								'location' => 'query',
								'type'     => 'string',
							],
							'safeSearch'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'topicId'                => [
								'location' => 'query',
								'type'     => 'string',
							],
							'type'                   => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoCaption'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoCategoryId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoDefinition'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoDimension'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoDuration'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoEmbeddable'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoLicense'           => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoSyndicated'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoType'              => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->sponsors = new Google_Service_YouTube_Resource_Sponsors(
			$this,
			$this->serviceName,
			'sponsors',
			[
				'methods' => [
					'list' => [
						'path'       => 'sponsors',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'       => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'filter'     => [
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
		$this->subscriptions = new Google_Service_YouTube_Resource_Subscriptions(
			$this,
			$this->serviceName,
			'subscriptions',
			[
				'methods' => [
					'delete'    => [
						'path'       => 'subscriptions',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'insert' => [
						'path'       => 'subscriptions',
						'httpMethod' => 'POST',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'subscriptions',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'channelId'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'forChannelId'                  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'                            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxResults'                    => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'mine'                          => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'myRecentSubscribers'           => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'mySubscribers'                 => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'order'                         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->superChatEvents = new Google_Service_YouTube_Resource_SuperChatEvents(
			$this,
			$this->serviceName,
			'superChatEvents',
			[
				'methods' => [
					'list' => [
						'path'       => 'superChatEvents',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'       => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'hl'         => [
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
		$this->thumbnails = new Google_Service_YouTube_Resource_Thumbnails(
			$this,
			$this->serviceName,
			'thumbnails',
			[
				'methods' => [
					'set' => [
						'path'       => 'thumbnails/set',
						'httpMethod' => 'POST',
						'parameters' => [
							'videoId'                => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->videoAbuseReportReasons = new Google_Service_YouTube_Resource_VideoAbuseReportReasons(
			$this,
			$this->serviceName,
			'videoAbuseReportReasons',
			[
				'methods' => [
					'list' => [
						'path'       => 'videoAbuseReportReasons',
						'httpMethod' => 'GET',
						'parameters' => [
							'part' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'hl'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->videoCategories = new Google_Service_YouTube_Resource_VideoCategories(
			$this,
			$this->serviceName,
			'videoCategories',
			[
				'methods' => [
					'list' => [
						'path'       => 'videoCategories',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'       => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'hl'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'regionCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->videos = new Google_Service_YouTube_Resource_Videos(
			$this,
			$this->serviceName,
			'videos',
			[
				'methods' => [
					'delete'         => [
						'path'       => 'videos',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'getRating'   => [
						'path'       => 'videos/getRating',
						'httpMethod' => 'GET',
						'parameters' => [
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'insert'      => [
						'path'       => 'videos',
						'httpMethod' => 'POST',
						'parameters' => [
							'part'                          => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'autoLevels'                    => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'notifySubscribers'             => [
								'location' => 'query',
								'type'     => 'boolean',
							],
							'onBehalfOfContentOwner'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwnerChannel' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'stabilize'                     => [
								'location' => 'query',
								'type'     => 'boolean',
							],
						],
					], 'list'        => [
						'path'       => 'videos',
						'httpMethod' => 'GET',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'chart'                  => [
								'location' => 'query',
								'type'     => 'string',
							],
							'hl'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'id'                     => [
								'location' => 'query',
								'type'     => 'string',
							],
							'locale'                 => [
								'location' => 'query',
								'type'     => 'string',
							],
							'maxHeight'              => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'maxResults'             => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'maxWidth'               => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'myRating'               => [
								'location' => 'query',
								'type'     => 'string',
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'              => [
								'location' => 'query',
								'type'     => 'string',
							],
							'regionCode'             => [
								'location' => 'query',
								'type'     => 'string',
							],
							'videoCategoryId'        => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'rate'        => [
						'path'       => 'videos/rate',
						'httpMethod' => 'POST',
						'parameters' => [
							'id'     => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'rating' => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'reportAbuse' => [
						'path'       => 'videos/reportAbuse',
						'httpMethod' => 'POST',
						'parameters' => [
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update'      => [
						'path'       => 'videos',
						'httpMethod' => 'PUT',
						'parameters' => [
							'part'                   => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->watermarks = new Google_Service_YouTube_Resource_Watermarks(
			$this,
			$this->serviceName,
			'watermarks',
			[
				'methods' => [
					'set'      => [
						'path'       => 'watermarks/set',
						'httpMethod' => 'POST',
						'parameters' => [
							'channelId'              => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'unset' => [
						'path'       => 'watermarks/unset',
						'httpMethod' => 'POST',
						'parameters' => [
							'channelId'              => [
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							],
							'onBehalfOfContentOwner' => [
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
