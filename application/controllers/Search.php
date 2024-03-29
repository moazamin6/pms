<?php

if(!defined('BASEPATH'))
{
	exit('No direct script access allowed');
}

class Search extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->access_only_team_members();
	}

	public function index()
	{

	}

	private function can_access_clients()
	{
		$permissions = $this->login_user->permissions;
		if($this->login_user->is_admin || get_array_value($permissions, "client"))
		{
			return true;
		}
	}

	function search_modal_form()
	{
		$search_fields = [
			"task",
			"project",
		];

		if($this->can_access_clients())
		{
			$search_fields[] = "client";
		}

		if(get_setting("module_todo"))
		{
			$search_fields[] = "todo";
		}

		$search_fields_dropdown = [];
		foreach($search_fields as $search_field)
		{
			$search_fields_dropdown[] = ["id" => $search_field, "text" => lang($search_field)];
		}

		$view_data['search_fields_dropdown'] = json_encode($search_fields_dropdown);

		$this->load->view("search/modal_form", $view_data);
	}

	function get_search_suggestion()
	{
		$search = $this->input->post("search");
		$search_field = $this->input->post("search_field");

		if($search && $search_field)
		{
			$options = [];
			$result = [];

			if($search_field == "task")
			{ //task
				$options["show_assigned_tasks_only_user_id"] = $this->show_assigned_tasks_only_user_id();
				$result = $this->Tasks_model->get_search_suggestion($search, $options)->result();
			}
			else
			{
				if($search_field == "project")
				{ //project
					if(!$this->can_manage_all_projects())
					{
						$options["user_id"] = $this->login_user->id;
					}
					$result = $this->Projects_model->get_search_suggestion($search, $options)->result();
				}
				else
				{
					if($search_field == "client")
					{ //client
						if(!$this->can_access_clients())
						{
							redirect("forbidden");
						}
						$options["show_own_clients_only_user_id"] = $this->show_own_clients_only_user_id();
						$result = $this->Clients_model->get_search_suggestion($search, $options)->result();
					}
					else
					{
						if($search_field == "todo" && get_setting("module_todo"))
						{ //todo
							$result = $this->Todo_model->get_search_suggestion($search, $this->login_user->id)->result();
						}
					}
				}
			}

			$result_array = [];
			foreach($result as $value)
			{
				if($search_field == "task")
				{
					$result_array[] = ["value" => $value->id, "label" => lang("task") . " $value->id: " . $value->title];
				}
				else
				{
					$result_array[] = ["value" => $value->id, "label" => $value->title];
				}
			}

			echo json_encode($result_array);
		}
	}

}

/* End of file Search.php */
/* Location: ./application/controllers/Search.php */