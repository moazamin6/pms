<?php

if(!defined('BASEPATH'))
{
	exit('No direct script access allowed');
}

/*
 * To process the notifications we'll use this.
 * This controller will be called via curl 
 * 
 * Purpose of this process is to reduce the processing time in main thread.
 * 
 */

class Notification_processor extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('notifications');
	}

	//don't show anything here
	function index()
	{
		redirect("forbidden");
	}

	function create_notification()
	{

		ini_set('max_execution_time', 300); //300 seconds
		//error_log(date('[Y-m-d H:i:s e] ') . " Process Notification: " . serialize($_POST) . PHP_EOL, 3, "error.log");
		//validate notification request

		$event = decode_id(get_array_value($_POST, "event"), "notification");

		if(!$event)
		{
			die("Access Denied!");
		}

		$notification_data = get_notification_config($event);

		if(!is_array($notification_data))
		{
			die("Access Denied!!");
		}

		$user_id = get_array_value($_POST, "user_id");
		$activity_log_id = get_array_value($_POST, "activity_log_id");


		$options = [
			"project_id"                  => get_array_value($_POST, "project_id"),
			"task_id"                     => get_array_value($_POST, "task_id"),
			"project_comment_id"          => get_array_value($_POST, "project_comment_id"),
			"ticket_id"                   => get_array_value($_POST, "ticket_id"),
			"ticket_comment_id"           => get_array_value($_POST, "ticket_comment_id"),
			"project_file_id"             => get_array_value($_POST, "project_file_id"),
			"leave_id"                    => get_array_value($_POST, "leave_id"),
			"post_id"                     => get_array_value($_POST, "post_id"),
			"to_user_id"                  => get_array_value($_POST, "to_user_id"),
			"activity_log_id"             => get_array_value($_POST, "activity_log_id"),
			"client_id"                   => get_array_value($_POST, "client_id"),
			"invoice_payment_id"          => get_array_value($_POST, "invoice_payment_id"),
			"invoice_id"                  => get_array_value($_POST, "invoice_id"),
			"estimate_id"                 => get_array_value($_POST, "estimate_id"),
			"order_id"                    => get_array_value($_POST, "order_id"),
			"estimate_request_id"         => get_array_value($_POST, "estimate_request_id"),
			"actual_message_id"           => get_array_value($_POST, "actual_message_id"),
			"parent_message_id"           => get_array_value($_POST, "parent_message_id"),
			"event_id"                    => get_array_value($_POST, "event_id"),
			"announcement_id"             => get_array_value($_POST, "announcement_id"),
			"exclude_ticket_creator"      => get_array_value($_POST, "exclude_ticket_creator"),
			"notification_multiple_tasks" => get_array_value($_POST, "notification_multiple_tasks"),
			"lead_id"                     => get_array_value($_POST, "lead_id"),
		];


		//clasified the task modification parts
		if($event == "project_task_updated")
		{
			//overwrite event and options
			$notify_to_array = $this->_clasified_task_modification($event, $options, $activity_log_id);

			/*
			 * for custom field changes, we've to check if the field has any restrictions
			 * like 'visible to admins only' or 'hide from clients'
			 * but there might be changed other things along with the secret custom fields
			 * so, we've to show only that fields. then, we need to create notification for all users
			 */
			if(is_array($notify_to_array))
			{
				if(!get_array_value($notify_to_array, array_search("all", $notify_to_array)))
				{
					$options["notify_to_admins_only"] = true;
				}
			}
		}

		//get reminder tasks
		if(get_array_value($options, "notification_multiple_tasks"))
		{
			$reminder_tasks = $this->get_reminder_tasks($event);
			if($reminder_tasks)
			{
				$options["notification_multiple_tasks"] = $reminder_tasks;
			}
			else
			{
				//if no tasks to remind, exit for reminder tasks notifications
				return;
			}
		}

		//save reminder date
		$this->_save_reminder_date($event, $options);

		//error_log("announcement_id: " . $options["announcement_id"] . PHP_EOL, 3, "notification.txt");
		//error_log("announcement_share_with: " . $options["announcement_share_with"] . PHP_EOL, 3, "notification.txt");

		$this->Notifications_model->create_notification($event, $user_id, $options);
	}

	private function get_reminder_tasks($event)
	{
		//prepare task deadline date accroding to the setting
		$reminder_date = get_setting($event);
		if($reminder_date)
		{
			$date = get_today_date();
			$start_date = add_period_to_date($date, $reminder_date, "days");
			$todo_status_id = $this->Task_status_model->get_one_where(["key_name" => "done", "deleted" => 0]);

			if($event == "project_task_deadline_overdue_reminder")
			{
				$start_date = subtract_period_from_date($date, $reminder_date, "days");
			}
			else
			{
				if($event == "project_task_reminder_on_the_day_of_deadline")
				{
					$start_date = $date;
				}
			}

			return $this->Tasks_model->get_details([
				"exclude_status_id"     => $todo_status_id->id, //find all tasks which are not done yet
				"start_date"            => $start_date,
				"deadline"              => $start_date, //both should be same
				"exclude_reminder_date" => $date, //don't find tasks which reminder already sent today
				"sort_by_project"       => true,
			])->result();
		}
	}

	private function _clasified_task_modification(&$event, &$options, $activity_log_id = 0)
	{

		//find out what types of changes has made
		if($activity_log_id)
		{
			$activity = $this->Activity_logs_model->get_one($activity_log_id);
			if($activity && $activity->changes)
			{

				//get notify to array according to changes
				$notify_to_array = get_change_logs_array($activity->changes, $activity->log_type, $activity->action, true);

				$changes = unserialize($activity->changes);

				//only chaged assigned_to field?
				if(is_array($changes) && count($changes) == 1 && get_array_value($changes, "assigned_to"))
				{
					$event = "project_task_assigned";
					$assigned_to = get_array_value($changes, "assigned_to");
					$new_assigned_to = get_array_value($assigned_to, "to");

					$options["to_user_id"] = $new_assigned_to;
					$options["activity_log_id"] = ""; //remove activity log id
				}


				//only chaged status field? find out the change event
				if(is_array($changes) && count($changes) == 1 && get_array_value($changes, "status"))
				{

					$status = get_array_value($changes, "status");
					$new_status = get_array_value($status, "to");

					if($new_status == "1")
					{
						$event = "project_task_reopened";
					}
					else
					{
						if($new_status == "3")
						{
							$event = "project_task_finished";
						}
						else
						{
							$event = "project_task_started";
						}
					}
					$options["activity_log_id"] = ""; //remove activity log id
				}

				return $notify_to_array;
			}
		}
	}

	//to prevent multiple reminder, we'll save the reminder date
	private function _save_reminder_date(&$event, &$options)
	{
		//save invoices reminder dates
		$invoice_id = get_array_value($options, "invoice_id");
		if($invoice_id)
		{
			$invoice_reminder_date = [];
			if($event == "invoice_due_reminder_before_due_date" || $event == "invoice_overdue_reminder")
			{
				$invoice_reminder_date["due_reminder_date"] = get_my_local_time();
			}
			if($event == "recurring_invoice_creation_reminder")
			{
				$invoice_reminder_date["recurring_reminder_date"] = get_my_local_time();
			}
			if(count($invoice_reminder_date))
			{
				$this->Invoices_model->save($invoice_reminder_date, $invoice_id);
			}
		}

		//save tasks reminder dates
		$notification_multiple_tasks = get_array_value($options, "notification_multiple_tasks");
		if($notification_multiple_tasks)
		{

			foreach($notification_multiple_tasks as $task_info)
			{
				//don't create activity logs for this
				$data["reminder_date"] = get_my_local_time();
				$this->Tasks_model->save_reminder_date($data, $task_info->id);
			}
		}
	}

}

/* End of file notifications.php */
/* Location: ./application/controllers/Notifications.php */