<?php

if(!defined('BASEPATH'))
{
	exit('No direct script access allowed');
}

class Email_templates extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->access_only_admin();
	}

	private function _templates()
	{
		$templates_array = [
			"account"  => [
				"login_info"                => ["USER_FIRST_NAME", "USER_LAST_NAME", "DASHBOARD_URL", "USER_LOGIN_EMAIL", "USER_LOGIN_PASSWORD", "LOGO_URL", "SIGNATURE"],
				"reset_password"            => ["ACCOUNT_HOLDER_NAME", "RESET_PASSWORD_URL", "SITE_URL", "LOGO_URL", "SIGNATURE"],
				"team_member_invitation"    => ["INVITATION_SENT_BY", "INVITATION_URL", "SITE_URL", "LOGO_URL", "SIGNATURE"],
				"new_client_greetings"      => ["CONTACT_FIRST_NAME", "CONTACT_LAST_NAME", "COMPANY_NAME", "DASHBOARD_URL", "CONTACT_LOGIN_EMAIL", "CONTACT_LOGIN_PASSWORD", "LOGO_URL", "SIGNATURE"],
				"client_contact_invitation" => ["INVITATION_SENT_BY", "INVITATION_URL", "SITE_URL", "LOGO_URL", "SIGNATURE"],
				"verify_email"              => ["VERIFY_EMAIL_URL", "SITE_URL", "LOGO_URL", "SIGNATURE"],
			],
			"project"  => [
				"project_task_deadline_reminder" => ["APP_TITLE", "DEADLINE", "SIGNATURE", "TASKS_LIST", "LOGO_URL"],
			],
			"invoice"  => [
				"send_invoice"                         => ["INVOICE_ID", "CONTACT_FIRST_NAME", "CONTACT_LAST_NAME", "PROJECT_TITLE", "BALANCE_DUE", "DUE_DATE", "SIGNATURE", "INVOICE_URL", "LOGO_URL", "PUBLIC_PAY_INVOICE_URL"],
				"invoice_payment_confirmation"         => ["INVOICE_ID", "PAYMENT_AMOUNT", "INVOICE_URL", "LOGO_URL", "SIGNATURE"],
				"invoice_due_reminder_before_due_date" => ["INVOICE_ID", "CONTACT_FIRST_NAME", "CONTACT_LAST_NAME", "PROJECT_TITLE", "BALANCE_DUE", "DUE_DATE", "SIGNATURE", "INVOICE_URL", "LOGO_URL"],
				"invoice_overdue_reminder"             => ["INVOICE_ID", "CONTACT_FIRST_NAME", "CONTACT_LAST_NAME", "PROJECT_TITLE", "BALANCE_DUE", "DUE_DATE", "SIGNATURE", "INVOICE_URL", "LOGO_URL"],
				"recurring_invoice_creation_reminder"  => ["CONTACT_FIRST_NAME", "CONTACT_LAST_NAME", "APP_TITLE", "INVOICE_URL", "NEXT_RECURRING_DATE", "LOGO_URL", "SIGNATURE"],
			],
			"estimate" => [
				"estimate_sent"             => ["ESTIMATE_ID", "CONTACT_FIRST_NAME", "CONTACT_LAST_NAME", "SIGNATURE", "ESTIMATE_URL", "LOGO_URL"],
				"estimate_accepted"         => ["ESTIMATE_ID", "SIGNATURE", "ESTIMATE_URL", "LOGO_URL"],
				"estimate_rejected"         => ["ESTIMATE_ID", "SIGNATURE", "ESTIMATE_URL", "LOGO_URL"],
				"estimate_request_received" => ["ESTIMATE_REQUEST_ID", "CONTACT_FIRST_NAME", "CONTACT_LAST_NAME", "SIGNATURE", "ESTIMATE_REQUEST_URL", "LOGO_URL"],
			],
			"order"    => [
				"new_order_received"   => ["ORDER_ID", "CONTACT_FIRST_NAME", "CONTACT_LAST_NAME", "SIGNATURE", "ORDER_URL", "LOGO_URL"],
				"order_status_updated" => ["ORDER_ID", "CONTACT_FIRST_NAME", "CONTACT_LAST_NAME", "SIGNATURE", "ORDER_URL", "LOGO_URL"],
			],
			"ticket"   => [
				"ticket_created"   => ["TICKET_ID", "TICKET_TITLE", "USER_NAME", "TICKET_CONTENT", "TICKET_URL", "LOGO_URL", "SIGNATURE"],
				"ticket_commented" => ["TICKET_ID", "TICKET_TITLE", "USER_NAME", "TICKET_CONTENT", "TICKET_URL", "LOGO_URL", "SIGNATURE"],
				"ticket_closed"    => ["TICKET_ID", "TICKET_TITLE", "USER_NAME", "TICKET_URL", "LOGO_URL", "SIGNATURE"],
				"ticket_reopened"  => ["TICKET_ID", "TICKET_TITLE", "USER_NAME", "TICKET_URL", "SIGNATURE", "LOGO_URL"],
			],
			"message"  => [
				"message_received" => ["SUBJECT", "USER_NAME", "MESSAGE_CONTENT", "MESSAGE_URL", "APP_TITLE", "LOGO_URL", "SIGNATURE"],
			],
			"common"   => [
				"general_notification" => ["EVENT_TITLE", "EVENT_DETAILS", "APP_TITLE", "COMPANY_NAME", "NOTIFICATION_URL", "LOGO_URL", "SIGNATURE"],
				"signature"            => [],
			],
		];

		$tickets_template_variables = $this->Custom_fields_model->get_email_template_variables_array("tickets", 0, $this->login_user->is_admin, $this->login_user->user_type);
		if($tickets_template_variables)
		{
			//marge custom variables with default variables
			$templates_array["ticket"]["ticket_created"] = array_merge($templates_array["ticket"]["ticket_created"], $tickets_template_variables);
			$templates_array["ticket"]["ticket_commented"] = array_merge($templates_array["ticket"]["ticket_commented"], $tickets_template_variables);
			$templates_array["ticket"]["ticket_closed"] = array_merge($templates_array["ticket"]["ticket_closed"], $tickets_template_variables);
			$templates_array["ticket"]["ticket_reopened"] = array_merge($templates_array["ticket"]["ticket_reopened"], $tickets_template_variables);
		}

		return $templates_array;
	}

	function index()
	{
		$view_data["templates"] = $this->_templates();
		$this->template->rander("email_templates/index", $view_data);
	}

	function save()
	{
		validate_submitted_data([
			"id" => "required|numeric",
		]);

		$id = $this->input->post('id');

		$data = [
			"email_subject"  => $this->input->post('email_subject'),
			"custom_message" => decode_ajax_post_data($this->input->post('custom_message')),
		];
		$save_id = $this->Email_templates_model->save($data, $id);
		if($save_id)
		{
			echo json_encode(["success" => true, 'id' => $save_id, 'message' => lang('record_saved')]);
		}
		else
		{
			echo json_encode(["success" => false, 'message' => lang('error_occurred')]);
		}
	}

	function restore_to_default()
	{

		validate_submitted_data([
			"id" => "required|numeric",
		]);

		$template_id = $this->input->post('id');

		$data = [
			"custom_message" => "",
		];
		$save_id = $this->Email_templates_model->save($data, $template_id);
		if($save_id)
		{
			$default_message = $this->Email_templates_model->get_one($save_id)->default_message;
			echo json_encode(["success" => true, "data" => $default_message, 'message' => lang('template_restored')]);
		}
		else
		{
			echo json_encode(["success" => false, 'message' => lang('error_occurred')]);
		}
	}

	/* load template edit form */

	function form($template_name = "")
	{
		$view_data['model_info'] = $this->Email_templates_model->get_one_where(["template_name" => $template_name]);
		$variables_array = array_column($this->_templates(), $template_name);
		$variables = get_array_value($variables_array, 0);
		$view_data['variables'] = $variables ? $variables : [];
		$this->load->view('email_templates/form', $view_data);
	}

}

/* End of file email_templates.php */
/* Location: ./application/controllers/email_templates.php */