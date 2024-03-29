<?php

class Activity_logs_model extends CI_Model
{

	function __construct()
	{

	}

	function save($data, $activity_log_created_by_app = false)
	{
		$data["created_at"] = get_current_utc_time();
		$data["created_by"] = $activity_log_created_by_app ? 0 : $this->login_user->id;
		$this->db->insert("activity_logs", $data);
		return $this->db->insert_id();
	}

	function delete_where($where = [])
	{
		if(count($where))
		{
			return $this->db->delete("activity_logs", $where);
		}
	}

	function get_details($options = [])
	{
		$activity_logs_table = $this->db->dbprefix('activity_logs');
		$project_members_table = $this->db->dbprefix('project_members');
		$users_table = $this->db->dbprefix('users');
		$projects_table = $this->db->dbprefix('projects');
		$tasks_table = $this->db->dbprefix('tasks');

		$where = "";
		$limit = get_array_value($options, "limit");
		$limit = $limit ? $limit : "20";
		$offset = get_array_value($options, "offset");
		$offset = $offset ? $offset : "0";

		$extra_join_info = "";
		$extra_select = "";

		$log_for = get_array_value($options, "log_for");
		if($log_for)
		{
			$where .= " AND $activity_logs_table.log_for='$log_for'";

			$log_for_id = get_array_value($options, "log_for_id");
			if($log_for_id)
			{
				$where .= " AND $activity_logs_table.log_for_id=$log_for_id";
			}
			else
			{
				//link with the parent
				if($log_for === "project")
				{
					$link_with_table = $this->db->dbprefix('projects');
					$extra_join_info = " LEFT JOIN $link_with_table ON $activity_logs_table.log_for_id=$link_with_table.id ";
					$extra_select = " , $link_with_table.title as log_for_title";
				}
			}
		}

		$log_type = get_array_value($options, "log_type");
		$log_type_id = get_array_value($options, "log_type_id");
		if($log_type && $log_type_id)
		{
			$where .= " AND $activity_logs_table.log_type='$log_type' AND $activity_logs_table.log_type_id=$log_type_id";
		}

		//don't show all project's log for none admin users
		$project_join = "";
		$project_where = "";
		$user_id = get_array_value($options, "user_id");
		$is_admin = get_array_value($options, "is_admin");
		$user_type = get_array_value($options, "user_type");
		if(!$is_admin && $user_id && $user_type !== "client")
		{
			$project_join = " LEFT JOIN (SELECT $project_members_table.user_id, $project_members_table.project_id FROM $project_members_table WHERE $project_members_table.user_id=$user_id AND $project_members_table.deleted=0 GROUP BY $project_members_table.project_id) AS project_members_table ON project_members_table.project_id= $activity_logs_table.log_for_id AND log_for='project' ";
			$project_where = " AND project_members_table.user_id=$user_id";

			$show_assigned_tasks_only = get_array_value($options, "show_assigned_tasks_only");
			if($show_assigned_tasks_only)
			{
				//this is restricted only for tasks related logs
				//task created/updated/deleted
				$where .= " AND IF($activity_logs_table.log_type='task', $activity_logs_table.log_type_id IN(SELECT $tasks_table.id FROM $tasks_table WHERE $tasks_table.id=$activity_logs_table.log_type_id AND ($tasks_table.assigned_to=$user_id OR FIND_IN_SET('$user_id', $tasks_table.collaborators))), $activity_logs_table.log_type!='task')";

				//task commented
				$where .= " AND IF($activity_logs_table.log_type='task_comment', $activity_logs_table.log_for_id2 IN(SELECT $tasks_table.id FROM $tasks_table WHERE $tasks_table.id=$activity_logs_table.log_for_id2 AND ($tasks_table.assigned_to=$user_id OR FIND_IN_SET('$user_id', $tasks_table.collaborators))), $activity_logs_table.log_type!='task_comment')";
			}
		}

		//show client's own projects activity
		if($user_type == "client")
		{
			$client_id = get_array_value($options, "client_id");

			if($client_id)
			{
				$project_join = " LEFT JOIN (SELECT $projects_table.client_id, $projects_table.id FROM $projects_table WHERE $projects_table.client_id=$client_id AND $projects_table.deleted=0 GROUP BY $projects_table.id) AS projects_table ON projects_table.id= $activity_logs_table.log_for_id AND log_for='project' ";
				$project_where = " AND projects_table.client_id=$client_id";
			}

			//don't show project's comments to clients
			$where .= " AND $activity_logs_table.log_type!='project_comment'";
		}


		$sql = "SELECT SQL_CALC_FOUND_ROWS $activity_logs_table.*,  CONCAT($users_table.first_name, ' ',$users_table.last_name) AS created_by_user, $users_table.image as created_by_avatar, $users_table.user_type $extra_select
        FROM $activity_logs_table
        LEFT JOIN $users_table ON $users_table.id= $activity_logs_table.created_by
        $extra_join_info
        $project_join
        WHERE $activity_logs_table.deleted=0 $where $project_where
        ORDER BY $activity_logs_table.created_at DESC
        LIMIT $offset, $limit";
		$data = new stdClass();
		$data->result = $this->db->query($sql)->result();
		$data->found_rows = $this->db->query("SELECT FOUND_ROWS() as found_rows")->row()->found_rows;
		return $data;
	}

	function get_one($id = 0)
	{
		return $this->get_one_where(['id' => $id]);
	}

	function get_one_where($where = [])
	{
		$result = $this->db->get_where("activity_logs", $where, 1);
		if($result->num_rows())
		{
			return $result->row();
		}
		else
		{
			$db_fields = $this->db->list_fields("activity_logs");
			$fields = new stdClass();
			foreach($db_fields as $field)
			{
				$fields->$field = "";
			}
			return $fields;
		}
	}

	function update_where($data = [], $where = [])
	{
		if(count($where))
		{
			return $this->db->update("activity_logs", $data, $where);
		}
	}

}
