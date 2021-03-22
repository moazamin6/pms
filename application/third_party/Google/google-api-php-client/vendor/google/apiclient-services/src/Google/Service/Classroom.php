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
 * Service definition for Classroom (v1).
 *
 * <p>
 * Manages classes, rosters, and invitations in Google Classroom.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/classroom/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Classroom extends Google_Service
{
	/** View and manage announcements in Google Classroom. */
	const CLASSROOM_ANNOUNCEMENTS =
		"https://www.googleapis.com/auth/classroom.announcements";
	/** View announcements in Google Classroom. */
	const CLASSROOM_ANNOUNCEMENTS_READONLY =
		"https://www.googleapis.com/auth/classroom.announcements.readonly";
	/** Manage your Google Classroom classes. */
	const CLASSROOM_COURSES =
		"https://www.googleapis.com/auth/classroom.courses";
	/** View your Google Classroom classes. */
	const CLASSROOM_COURSES_READONLY =
		"https://www.googleapis.com/auth/classroom.courses.readonly";
	/** Manage your course work and view your grades in Google Classroom. */
	const CLASSROOM_COURSEWORK_ME =
		"https://www.googleapis.com/auth/classroom.coursework.me";
	/** View your course work and grades in Google Classroom. */
	const CLASSROOM_COURSEWORK_ME_READONLY =
		"https://www.googleapis.com/auth/classroom.coursework.me.readonly";
	/** Manage course work and grades for students in the Google Classroom classes you teach and view the course work and grades for classes you administer. */
	const CLASSROOM_COURSEWORK_STUDENTS =
		"https://www.googleapis.com/auth/classroom.coursework.students";
	/** View course work and grades for students in the Google Classroom classes you teach or administer. */
	const CLASSROOM_COURSEWORK_STUDENTS_READONLY =
		"https://www.googleapis.com/auth/classroom.coursework.students.readonly";
	/** View your Google Classroom guardians. */
	const CLASSROOM_GUARDIANLINKS_ME_READONLY =
		"https://www.googleapis.com/auth/classroom.guardianlinks.me.readonly";
	/** View and manage guardians for students in your Google Classroom classes. */
	const CLASSROOM_GUARDIANLINKS_STUDENTS =
		"https://www.googleapis.com/auth/classroom.guardianlinks.students";
	/** View guardians for students in your Google Classroom classes. */
	const CLASSROOM_GUARDIANLINKS_STUDENTS_READONLY =
		"https://www.googleapis.com/auth/classroom.guardianlinks.students.readonly";
	/** View the email addresses of people in your classes. */
	const CLASSROOM_PROFILE_EMAILS =
		"https://www.googleapis.com/auth/classroom.profile.emails";
	/** View the profile photos of people in your classes. */
	const CLASSROOM_PROFILE_PHOTOS =
		"https://www.googleapis.com/auth/classroom.profile.photos";
	/** Receive notifications about your Google Classroom data. */
	const CLASSROOM_PUSH_NOTIFICATIONS =
		"https://www.googleapis.com/auth/classroom.push-notifications";
	/** Manage your Google Classroom class rosters. */
	const CLASSROOM_ROSTERS =
		"https://www.googleapis.com/auth/classroom.rosters";
	/** View your Google Classroom class rosters. */
	const CLASSROOM_ROSTERS_READONLY =
		"https://www.googleapis.com/auth/classroom.rosters.readonly";
	/** View your course work and grades in Google Classroom. */
	const CLASSROOM_STUDENT_SUBMISSIONS_ME_READONLY =
		"https://www.googleapis.com/auth/classroom.student-submissions.me.readonly";
	/** View course work and grades for students in the Google Classroom classes you teach or administer. */
	const CLASSROOM_STUDENT_SUBMISSIONS_STUDENTS_READONLY =
		"https://www.googleapis.com/auth/classroom.student-submissions.students.readonly";
	
	public $courses;
	public $courses_aliases;
	public $courses_announcements;
	public $courses_courseWork;
	public $courses_courseWork_studentSubmissions;
	public $courses_students;
	public $courses_teachers;
	public $invitations;
	public $registrations;
	public $userProfiles;
	public $userProfiles_guardianInvitations;
	public $userProfiles_guardians;
	
	/**
	 * Constructs the internal representation of the Classroom service.
	 *
	 * @param Google_Client $client
	 */
	public function __construct(Google_Client $client)
	{
		parent::__construct($client);
		$this->rootUrl = 'https://classroom.googleapis.com/';
		$this->servicePath = '';
		$this->version = 'v1';
		$this->serviceName = 'classroom';
		
		$this->courses = new Google_Service_Classroom_Resource_Courses(
			$this,
			$this->serviceName,
			'courses',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/courses',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete' => [
						'path'       => 'v1/courses/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/courses/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/courses',
						'httpMethod' => 'GET',
						'parameters' => [
							'studentId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'teacherId'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'courseStates' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'patch'  => [
						'path'       => 'v1/courses/{id}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'id'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'update' => [
						'path'       => 'v1/courses/{id}',
						'httpMethod' => 'PUT',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->courses_aliases = new Google_Service_Classroom_Resource_CoursesAliases(
			$this,
			$this->serviceName,
			'aliases',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/courses/{courseId}/aliases',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/courses/{courseId}/aliases/{alias}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'courseId' => [
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
					], 'list'   => [
						'path'       => 'v1/courses/{courseId}/aliases',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId'  => [
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
		$this->courses_announcements = new Google_Service_Classroom_Resource_CoursesAnnouncements(
			$this,
			$this->serviceName,
			'announcements',
			[
				'methods' => [
					'create'             => [
						'path'       => 'v1/courses/{courseId}/announcements',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'          => [
						'path'       => 'v1/courses/{courseId}/announcements/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'             => [
						'path'       => 'v1/courses/{courseId}/announcements/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'            => [
						'path'       => 'v1/courses/{courseId}/announcements',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderBy'            => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'           => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'announcementStates' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'modifyAssignees' => [
						'path'       => 'v1/courses/{courseId}/announcements/{id}:modifyAssignees',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'           => [
						'path'       => 'v1/courses/{courseId}/announcements/{id}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'courseId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'         => [
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
		$this->courses_courseWork = new Google_Service_Classroom_Resource_CoursesCourseWork(
			$this,
			$this->serviceName,
			'courseWork',
			[
				'methods' => [
					'create'             => [
						'path'       => 'v1/courses/{courseId}/courseWork',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete'          => [
						'path'       => 'v1/courses/{courseId}/courseWork/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'             => [
						'path'       => 'v1/courses/{courseId}/courseWork/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'            => [
						'path'       => 'v1/courses/{courseId}/courseWork',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId'         => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'orderBy'          => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'        => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'         => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'courseWorkStates' => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'modifyAssignees' => [
						'path'       => 'v1/courses/{courseId}/courseWork/{id}:modifyAssignees',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'           => [
						'path'       => 'v1/courses/{courseId}/courseWork/{id}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'courseId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'         => [
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
		$this->courses_courseWork_studentSubmissions = new Google_Service_Classroom_Resource_CoursesCourseWorkStudentSubmissions(
			$this,
			$this->serviceName,
			'studentSubmissions',
			[
				'methods' => [
					'get'                  => [
						'path'       => 'v1/courses/{courseId}/courseWork/{courseWorkId}/studentSubmissions/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'courseWorkId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'              => [
						'path'       => 'v1/courses/{courseId}/courseWork/{courseWorkId}/studentSubmissions',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'courseWorkId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'       => [
								'location' => 'query',
								'type'     => 'string',
							],
							'late'         => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageToken'    => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'     => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'states'       => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
						],
					], 'modifyAttachments' => [
						'path'       => 'v1/courses/{courseId}/courseWork/{courseWorkId}/studentSubmissions/{id}:modifyAttachments',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'courseWorkId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'patch'             => [
						'path'       => 'v1/courses/{courseId}/courseWork/{courseWorkId}/studentSubmissions/{id}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'courseId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'courseWorkId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'updateMask'   => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'reclaim'           => [
						'path'       => 'v1/courses/{courseId}/courseWork/{courseWorkId}/studentSubmissions/{id}:reclaim',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'courseWorkId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'return'            => [
						'path'       => 'v1/courses/{courseId}/courseWork/{courseWorkId}/studentSubmissions/{id}:return',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'courseWorkId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'turnIn'            => [
						'path'       => 'v1/courses/{courseId}/courseWork/{courseWorkId}/studentSubmissions/{id}:turnIn',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId'     => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'courseWorkId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'id'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->courses_students = new Google_Service_Classroom_Resource_CoursesStudents(
			$this,
			$this->serviceName,
			'students',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/courses/{courseId}/students',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId'       => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'enrollmentCode' => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'delete' => [
						'path'       => 'v1/courses/{courseId}/students/{userId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/courses/{courseId}/students/{userId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/courses/{courseId}/students',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId'  => [
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
		$this->courses_teachers = new Google_Service_Classroom_Resource_CoursesTeachers(
			$this,
			$this->serviceName,
			'teachers',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/courses/{courseId}/teachers',
						'httpMethod' => 'POST',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'delete' => [
						'path'       => 'v1/courses/{courseId}/teachers/{userId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/courses/{courseId}/teachers/{userId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'userId'   => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/courses/{courseId}/teachers',
						'httpMethod' => 'GET',
						'parameters' => [
							'courseId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'pageSize'  => [
								'location' => 'query',
								'type'     => 'integer',
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
		$this->invitations = new Google_Service_Classroom_Resource_Invitations(
			$this,
			$this->serviceName,
			'invitations',
			[
				'methods' => [
					'accept'    => [
						'path'       => 'v1/invitations/{id}:accept',
						'httpMethod' => 'POST',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'create' => [
						'path'       => 'v1/invitations',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete' => [
						'path'       => 'v1/invitations/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'    => [
						'path'       => 'v1/invitations/{id}',
						'httpMethod' => 'GET',
						'parameters' => [
							'id' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'   => [
						'path'       => 'v1/invitations',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId'    => [
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
							'courseId'  => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					],
				],
			]
		);
		$this->registrations = new Google_Service_Classroom_Resource_Registrations(
			$this,
			$this->serviceName,
			'registrations',
			[
				'methods' => [
					'create'    => [
						'path'       => 'v1/registrations',
						'httpMethod' => 'POST',
						'parameters' => [],
					], 'delete' => [
						'path'       => 'v1/registrations/{registrationId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'registrationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->userProfiles = new Google_Service_Classroom_Resource_UserProfiles(
			$this,
			$this->serviceName,
			'userProfiles',
			[
				'methods' => [
					'get' => [
						'path'       => 'v1/userProfiles/{userId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'userId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					],
				],
			]
		);
		$this->userProfiles_guardianInvitations = new Google_Service_Classroom_Resource_UserProfilesGuardianInvitations(
			$this,
			$this->serviceName,
			'guardianInvitations',
			[
				'methods' => [
					'create'   => [
						'path'       => 'v1/userProfiles/{studentId}/guardianInvitations',
						'httpMethod' => 'POST',
						'parameters' => [
							'studentId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'   => [
						'path'       => 'v1/userProfiles/{studentId}/guardianInvitations/{invitationId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'studentId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'invitationId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list'  => [
						'path'       => 'v1/userProfiles/{studentId}/guardianInvitations',
						'httpMethod' => 'GET',
						'parameters' => [
							'studentId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'invitedEmailAddress' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'states'              => [
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							],
							'pageSize'            => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'           => [
								'location' => 'query',
								'type'     => 'string',
							],
						],
					], 'patch' => [
						'path'       => 'v1/userProfiles/{studentId}/guardianInvitations/{invitationId}',
						'httpMethod' => 'PATCH',
						'parameters' => [
							'studentId'    => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'invitationId' => [
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
		$this->userProfiles_guardians = new Google_Service_Classroom_Resource_UserProfilesGuardians(
			$this,
			$this->serviceName,
			'guardians',
			[
				'methods' => [
					'delete'  => [
						'path'       => 'v1/userProfiles/{studentId}/guardians/{guardianId}',
						'httpMethod' => 'DELETE',
						'parameters' => [
							'studentId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'guardianId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'get'  => [
						'path'       => 'v1/userProfiles/{studentId}/guardians/{guardianId}',
						'httpMethod' => 'GET',
						'parameters' => [
							'studentId'  => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'guardianId' => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
						],
					], 'list' => [
						'path'       => 'v1/userProfiles/{studentId}/guardians',
						'httpMethod' => 'GET',
						'parameters' => [
							'studentId'           => [
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							],
							'invitedEmailAddress' => [
								'location' => 'query',
								'type'     => 'string',
							],
							'pageSize'            => [
								'location' => 'query',
								'type'     => 'integer',
							],
							'pageToken'           => [
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
