<?php

if(!defined('BASEPATH'))
{
	exit('No direct script access allowed');
}

class Orders extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->init_permission_checker("order");
	}

	function index()
	{
		$this->check_access_to_store();

		$view_data["custom_field_headers"] = $this->Custom_fields_model->get_custom_field_headers_for_table("orders", $this->login_user->is_admin, $this->login_user->user_type);

		if($this->login_user->user_type === "staff")
		{
			$view_data['order_statuses'] = $this->Order_status_model->get_details()->result();
			$this->template->rander("orders/index", $view_data);
		}
		else
		{
			//client view
			$view_data["client_info"] = $this->Clients_model->get_one($this->login_user->client_id);
			$view_data['client_id'] = $this->login_user->client_id;
			$view_data['page_type'] = "full";

			$this->template->rander("clients/orders/client_portal", $view_data);
		}
	}

	function process_order()
	{
		$this->check_access_to_store();
		$view_data = get_order_making_data();
		$view_data["cart_items_count"] = $this->Order_items_model->get_all_where(["created_by" => $this->login_user->id, "order_id" => 0, "deleted" => 0])->num_rows();

		$view_data['clients_dropdown'] = "";
		if($this->login_user->user_type == "staff")
		{
			$view_data['clients_dropdown'] = $this->_get_clients_dropdown();
		}

		$this->template->rander("orders/process_order", $view_data);
	}

	function item_list_data_of_login_user()
	{
		$this->check_access_to_store();
		$options = ["created_by" => $this->login_user->id, "processing" => true];
		$list_data = $this->Order_items_model->get_details($options)->result();
		$result = [];
		foreach($list_data as $data)
		{
			$result[] = $this->_make_item_row($data);
		}

		echo json_encode(["data" => $result]);
	}

	/* prepare a row of order item list table */

	private function _make_item_row($data)
	{
		$item = "<div class='item-row strong mb5' data-id='$data->id'><i class='fa fa-bars pull-left move-icon'></i> $data->title</div>";
		if($data->description)
		{
			$item .= "<span>" . nl2br($data->description) . "</span>";
		}
		$type = $data->unit_type ? $data->unit_type : "";

		return [
			$data->sort,
			$item,
			to_decimal_format($data->quantity) . " " . $type,
			to_currency($data->rate, $data->currency_symbol),
			to_currency($data->total, $data->currency_symbol),
			modal_anchor(get_uri("orders/item_modal_form"), "<i class='fa fa-pencil'></i>", ["class" => "edit", "title" => lang('edit_item'), "data-post-id" => $data->id, "data-post-order_id" => $data->order_id])
			. js_anchor("<i class='fa fa-times fa-fw'></i>", ['title' => lang('delete'), "class" => "delete", "data-id" => $data->id, "data-action-url" => get_uri("orders/delete_item"), "data-action" => "delete"]),
		];
	}

	/* load item modal */

	function item_modal_form()
	{
		$this->check_access_to_store();
		validate_submitted_data([
			"id" => "numeric",
		]);

		$model_info = $this->Order_items_model->get_one($this->input->post('id'));
		$this->check_access_to_this_order_item($model_info);

		$view_data['model_info'] = $model_info;
		$view_data['order_id'] = $this->input->post('order_id');

		$this->load->view('orders/item_modal_form', $view_data);
	}

	/* add or edit an order item */

	function save_item()
	{
		$this->check_access_to_store();
		validate_submitted_data([
			"id" => "numeric",
		]);

		$id = $this->input->post('id');
		$item_info = $this->Order_items_model->get_one($id);
		$this->check_access_to_this_order_item($item_info);

		$quantity = unformat_currency($this->input->post('order_item_quantity'));

		$order_item_data = [
			"description" => $this->input->post('order_item_description'),
			"quantity"    => $quantity,
		];

		$order_id = $this->input->post("order_id");
		if($order_id)
		{
			$rate = unformat_currency($this->input->post('order_item_rate'));
			$order_item_data["order_id"] = $order_id;
			$order_item_data["title"] = $this->input->post('order_item_title');
			$order_item_data["unit_type"] = $this->input->post('order_unit_type');
			$order_item_data["rate"] = unformat_currency($this->input->post('order_item_rate'));
			$order_item_data["total"] = $rate * $quantity;
		}
		else
		{
			$order_item_data["total"] = $item_info->rate * $quantity;
		}

		$order_item_id = $this->Order_items_model->save($order_item_data, $id);
		if($order_item_id)
		{

			//check if the add_new_item flag is on, if so, add the item to libary.
			$add_new_item_to_library = $this->input->post('add_new_item_to_library');
			if($add_new_item_to_library)
			{
				$library_item_data = [
					"title"       => $this->input->post('order_item_title'),
					"description" => $this->input->post('order_item_description'),
					"unit_type"   => $this->input->post('order_unit_type'),
					"rate"        => unformat_currency($this->input->post('order_item_rate')),
				];
				$this->Items_model->save($library_item_data);
			}

			$options = ["id" => $order_item_id];
			$item_info = $this->Order_items_model->get_details($options)->row();

			echo json_encode(["success" => true, "order_id" => $item_info->order_id, "data" => $this->_make_item_row($item_info), "order_total_view" => $this->_get_order_total_view($item_info->order_id), 'id' => $order_item_id, 'message' => lang('record_saved')]);
		}
		else
		{
			echo json_encode(["success" => false, 'message' => lang('error_occurred')]);
		}
	}

	//update the sort value for order item
	function update_item_sort_values($id = 0)
	{
		$this->check_access_to_store();
		$sort_values = $this->input->post("sort_values");
		if($sort_values)
		{

			//extract the values from the comma separated string
			$sort_array = explode(",", $sort_values);

			//update the value in db
			foreach($sort_array as $value)
			{
				$sort_item = explode("-", $value); //extract id and sort value

				$id = get_array_value($sort_item, 0);
				$sort = get_array_value($sort_item, 1);

				$data = ["sort" => $sort];
				$this->Order_items_model->save($data, $id);
			}
		}
	}

	/* delete or undo an order item */

	function delete_item()
	{
		$this->check_access_to_store();
		validate_submitted_data([
			"id" => "required|numeric",
		]);

		$id = $this->input->post('id');
		$order_item_info = $this->Order_items_model->get_one($id);
		$this->check_access_to_this_order_item($order_item_info);

		if($this->input->post('undo'))
		{
			if($this->Order_items_model->delete($id, true))
			{
				$options = ["id" => $id];
				$item_info = $this->Order_items_model->get_details($options)->row();
				echo json_encode(["success" => true, "order_id" => $item_info->order_id, "data" => $this->_make_item_row($item_info), "order_total_view" => $this->_get_order_total_view($item_info->order_id), "message" => lang('record_undone')]);
			}
			else
			{
				echo json_encode(["success" => false, lang('error_occurred')]);
			}
		}
		else
		{
			if($this->Order_items_model->delete($id))
			{
				$item_info = $this->Order_items_model->get_one($id);
				echo json_encode(["success" => true, "order_id" => $item_info->order_id, "order_total_view" => $this->_get_order_total_view($item_info->order_id), 'message' => lang('record_deleted')]);
			}
			else
			{
				echo json_encode(["success" => false, 'message' => lang('record_cannot_be_deleted')]);
			}
		}
	}

	/* order total section */

	private function _get_order_total_view($order_id = 0)
	{
		if($order_id)
		{
			$view_data["order_total_summary"] = $this->Orders_model->get_order_total_summary($order_id);
			$view_data["order_id"] = $order_id;
			return $this->load->view('orders/order_total_section', $view_data, true);
		}
		else
		{
			$view_data = get_order_making_data();
			return $this->load->view('orders/processing_order_total_section', $view_data, true);
		}
	}

	function place_order()
	{
		$this->check_access_to_store();

		$order_items = $this->Order_items_model->get_all_where(["created_by" => $this->login_user->id, "order_id" => 0, "deleted" => 0])->result();
		if(!$order_items)
		{
			show_404();
		}

		$order_data = [
			"client_id"  => $this->input->post("client_id") ? $this->input->post("client_id") : $this->login_user->client_id,
			"order_date" => get_today_date(),
			"note"       => $this->input->post('order_note'),
			"created_by" => $this->login_user->id,
			"status_id"  => $this->Order_status_model->get_first_status(),
			"tax_id"     => get_setting('order_tax_id') ? get_setting('order_tax_id') : 0,
			"tax_id2"    => get_setting('order_tax_id2') ? get_setting('order_tax_id2') : 0,
		];

		$order_id = $this->Orders_model->save($order_data);

		if($order_id)
		{
			//save items to this order
			foreach($order_items as $order_item)
			{
				$order_item_data = ["order_id" => $order_id];
				$this->Order_items_model->save($order_item_data, $order_item->id);
			}

			$redirect_to = get_uri("orders/view/$order_id");
			if($this->login_user->user_type == "client")
			{
				$redirect_to = get_uri("orders/preview/$order_id");
			}

			//send notification
			log_notification("new_order_received", ["order_id" => $order_id]);

			echo json_encode(["success" => true, "redirect_to" => $redirect_to, 'message' => lang('record_saved')]);
		}
		else
		{
			echo json_encode(["success" => false, 'message' => lang('error_occurred')]);
		}
	}

	/* list of orders, prepared for datatable  */

	function list_data()
	{
		$this->access_only_allowed_members();

		$custom_fields = $this->Custom_fields_model->get_available_fields_for_table("orders", $this->login_user->is_admin, $this->login_user->user_type);

		$options = [
			"status_id"     => $this->input->post("status_id"),
			"order_date"    => $this->input->post("start_date"),
			"deadline"      => $this->input->post("end_date"),
			"custom_fields" => $custom_fields,
		];

		$list_data = $this->Orders_model->get_details($options)->result();
		$result = [];
		foreach($list_data as $data)
		{
			$result[] = $this->_make_row($data, $custom_fields);
		}

		echo json_encode(["data" => $result]);
	}

	/* prepare a row of order list table */

	private function _make_row($data, $custom_fields)
	{
		$order_url = "";
		if($this->login_user->user_type == "staff")
		{
			$order_url = anchor(get_uri("orders/view/" . $data->id), get_order_id($data->id));
		}
		else
		{
			//for client
			$order_url = anchor(get_uri("orders/preview/" . $data->id), get_order_id($data->id));
		}

		$client = anchor(get_uri("clients/view/" . $data->client_id), $data->company_name);

		$row_data = [
			$order_url,
			$client,
			$data->order_date,
			format_to_date($data->order_date, false),
			to_currency($data->order_value, $data->currency_symbol),
		];

		if($this->login_user->user_type == "staff")
		{
			$row_data[] = js_anchor($data->order_status_title, ["style" => "background-color: $data->order_status_color", "class" => "label", "data-id" => $data->id, "data-value" => $data->status_id, "data-act" => "update-order-status"]);
		}
		else
		{
			$row_data[] = "<span style='background-color: $data->order_status_color;' class='label'>$data->order_status_title</span>";
		}

		foreach($custom_fields as $field)
		{
			$cf_id = "cfv_" . $field->id;
			$row_data[] = $this->load->view("custom_fields/output_" . $field->field_type, ["value" => $data->$cf_id], true);
		}

		$row_data[] = modal_anchor(get_uri("orders/modal_form"), "<i class='fa fa-pencil'></i>", ["class" => "edit", "title" => lang('edit_order'), "data-post-id" => $data->id])
			. js_anchor("<i class='fa fa-times fa-fw'></i>", ['title' => lang('delete_order'), "class" => "delete", "data-id" => $data->id, "data-action-url" => get_uri("orders/delete"), "data-action" => "delete"]);

		return $row_data;
	}

	//load the yearly view of order list
	function yearly()
	{
		$this->load->view("orders/yearly_orders");
	}

	/* load new order modal */

	function modal_form()
	{
		$this->access_only_allowed_members();

		validate_submitted_data([
			"id"        => "numeric",
			"client_id" => "numeric",
		]);

		$client_id = $this->input->post('client_id');
		$view_data['model_info'] = $this->Orders_model->get_one($this->input->post('id'));

		//make the drodown lists
		$view_data['taxes_dropdown'] = ["" => "-"] + $this->Taxes_model->get_dropdown_list(["title"]);
		$view_data['clients_dropdown'] = $this->_get_clients_dropdown();

		$view_data['order_statuses'] = $this->Order_status_model->get_details()->result();

		$view_data['client_id'] = $client_id;

		$view_data["custom_fields"] = $this->Custom_fields_model->get_combined_details("orders", $view_data['model_info']->id, $this->login_user->is_admin, $this->login_user->user_type)->result();

		$this->load->view('orders/modal_form', $view_data);
	}

	private function _get_clients_dropdown()
	{
		$clients_dropdown = ["" => "-"];
		$clients = $this->Clients_model->get_dropdown_list(["company_name"], "id", ["is_lead" => 0]);
		foreach($clients as $key => $value)
		{
			$clients_dropdown[$key] = $value;
		}
		return $clients_dropdown;
	}

	/* add, edit or clone an order */

	function save()
	{
		$this->access_only_allowed_members();

		validate_submitted_data([
			"id"              => "numeric",
			"order_client_id" => "required|numeric",
			"order_date"      => "required",
			"status_id"       => "required",
		]);

		$client_id = $this->input->post('order_client_id');
		$id = $this->input->post('id');

		$order_data = [
			"client_id"  => $client_id,
			"order_date" => $this->input->post('order_date'),
			"tax_id"     => $this->input->post('tax_id') ? $this->input->post('tax_id') : 0,
			"tax_id2"    => $this->input->post('tax_id2') ? $this->input->post('tax_id2') : 0,
			"note"       => $this->input->post('order_note'),
			"status_id"  => $this->input->post('status_id'),
		];

		//check if the status has been changed,
		//if so, send notification
		$order_info = $this->Orders_model->get_one($id);
		if($order_info->status_id !== $this->input->post('status_id'))
		{
			log_notification("order_status_updated", ["order_id" => $id]);
		}

		$order_id = $this->Orders_model->save($order_data, $id);
		if($order_id)
		{
			save_custom_fields("orders", $order_id, $this->login_user->is_admin, $this->login_user->user_type);

			echo json_encode(["success" => true, "data" => $this->_row_data($order_id), 'id' => $order_id, 'message' => lang('record_saved')]);
		}
		else
		{
			echo json_encode(["success" => false, 'message' => lang('error_occurred')]);
		}
	}

	/* delete or undo an order */

	function delete()
	{
		$this->access_only_allowed_members();

		validate_submitted_data([
			"id" => "required|numeric",
		]);

		$id = $this->input->post('id');
		if($this->input->post('undo'))
		{
			if($this->Orders_model->delete($id, true))
			{
				echo json_encode(["success" => true, "data" => $this->_row_data($id), "message" => lang('record_undone')]);
			}
			else
			{
				echo json_encode(["success" => false, lang('error_occurred')]);
			}
		}
		else
		{
			if($this->Orders_model->delete($id))
			{
				echo json_encode(["success" => true, 'message' => lang('record_deleted')]);
			}
			else
			{
				echo json_encode(["success" => false, 'message' => lang('record_cannot_be_deleted')]);
			}
		}
	}

	/* load order details view */

	function view($order_id = 0)
	{
		$this->access_only_allowed_members();

		if($order_id)
		{

			$view_data = get_order_making_data($order_id);

			if($view_data)
			{
				$access_info = $this->get_access_info("invoice");
				$view_data["show_invoice_option"] = (get_setting("module_invoice") && $access_info->access_type == "all") ? true : false;

				$access_info = $this->get_access_info("estimate");
				$view_data["show_estimate_option"] = (get_setting("module_estimate") && $access_info->access_type == "all") ? true : false;

				$view_data["order_id"] = $order_id;

				$view_data['order_statuses'] = $this->Order_status_model->get_details()->result();

				$this->template->rander("orders/view", $view_data);
			}
			else
			{
				show_404();
			}
		}
	}

	private function check_access_to_this_order($order_data)
	{
		//check for valid order
		if(!$order_data)
		{
			show_404();
		}

		//check for security
		$order_info = get_array_value($order_data, "order_info");
		if($this->login_user->user_type == "client")
		{
			if($this->login_user->client_id != $order_info->client_id)
			{
				redirect("forbidden");
			}
		}
	}

	function download_pdf($order_id = 0, $mode = "download")
	{
		if($order_id)
		{
			$order_data = get_order_making_data($order_id);
			$this->check_access_to_store();
			$this->check_access_to_this_order($order_data);

			if(@ob_get_length())
			{
				@ob_clean();
			}
			//so, we have a valid order data. Prepare the view.

			prepare_order_pdf($order_data, $mode);
		}
		else
		{
			show_404();
		}
	}

	//view html is accessable to client only.
	function preview($order_id = 0, $show_close_preview = false)
	{
		$this->check_access_to_store();

		if($order_id)
		{
			$order_data = get_order_making_data($order_id);
			$this->check_access_to_this_order($order_data);

			$order_data['order_info'] = get_array_value($order_data, "order_info");

			$view_data['order_preview'] = prepare_order_pdf($order_data, "html");

			//show a back button
			$view_data['show_close_preview'] = $show_close_preview && $this->login_user->user_type === "staff" ? true : false;

			$view_data['order_id'] = $order_id;

			$this->template->rander("orders/order_preview", $view_data);
		}
		else
		{
			show_404();
		}
	}

	/* prepare suggestion of order item */

	function get_order_item_suggestion()
	{
		$key = $_REQUEST["q"];
		$suggestion = [];

		$items = $this->Invoice_items_model->get_item_suggestion($key);

		foreach($items as $item)
		{
			$suggestion[] = ["id" => $item->title, "text" => $item->title];
		}

		$suggestion[] = ["id" => "+", "text" => "+ " . lang("create_new_item")];

		echo json_encode($suggestion);
	}

	function get_order_item_info_suggestion()
	{
		$item = $this->Invoice_items_model->get_item_info_suggestion($this->input->post("item_name"));
		if($item)
		{
			echo json_encode(["success" => true, "item_info" => $item]);
		}
		else
		{
			echo json_encode(["success" => false]);
		}
	}

	function save_order_status($id = 0)
	{
		$this->access_only_allowed_members();
		if(!$id)
		{
			show_404();
		}

		$data = [
			"status_id" => $this->input->post('value'),
		];

		$save_id = $this->Orders_model->save($data, $id);

		if($save_id)
		{
			log_notification("order_status_updated", ["order_id" => $id]);
			$order_info = $this->Orders_model->get_details(["id" => $id])->row();
			echo json_encode(["success" => true, "data" => $this->_row_data($save_id), 'id' => $save_id, "message" => lang('record_saved'), "order_status_color" => $order_info->order_status_color]);
		}
		else
		{
			echo json_encode(["success" => false, lang('error_occurred')]);
		}
	}

	/* return a row of order list table */

	private function _row_data($id)
	{
		$custom_fields = $this->Custom_fields_model->get_available_fields_for_table("orders", $this->login_user->is_admin, $this->login_user->user_type);

		$options = ["id" => $id, "custom_fields" => $custom_fields];
		$data = $this->Orders_model->get_details($options)->row();
		return $this->_make_row($data, $custom_fields);
	}

	/* load discount modal */

	function discount_modal_form()
	{
		$this->access_only_allowed_members();

		validate_submitted_data([
			"order_id" => "required|numeric",
		]);

		$order_id = $this->input->post('order_id');

		$view_data['model_info'] = $this->Orders_model->get_one($order_id);

		$this->load->view('orders/discount_modal_form', $view_data);
	}

	/* save discount */

	function save_discount()
	{
		$this->access_only_allowed_members();

		validate_submitted_data([
			"order_id"             => "required|numeric",
			"discount_type"        => "required",
			"discount_amount"      => "numeric",
			"discount_amount_type" => "required",
		]);

		$order_id = $this->input->post('order_id');

		$data = [
			"discount_type"        => $this->input->post('discount_type'),
			"discount_amount"      => $this->input->post('discount_amount'),
			"discount_amount_type" => $this->input->post('discount_amount_type'),
		];

		$data = clean_data($data);

		$save_data = $this->Orders_model->save($data, $order_id);
		if($save_data)
		{
			echo json_encode(["success" => true, "order_total_view" => $this->_get_order_total_view($order_id), 'message' => lang('record_saved'), "order_id" => $order_id]);
		}
		else
		{
			echo json_encode(["success" => false, 'message' => lang('error_occurred')]);
		}
	}

	/* list of order items, prepared for datatable  */

	function item_list_data($order_id = 0)
	{
		$this->access_only_allowed_members();

		$list_data = $this->Order_items_model->get_details(["order_id" => $order_id])->result();
		$result = [];
		foreach($list_data as $data)
		{
			$result[] = $this->_make_item_row($data);
		}
		echo json_encode(["data" => $result]);
	}

	/* list of order of a specific client, prepared for datatable  */

	function order_list_data_of_client($client_id)
	{
		$this->check_access_to_store();

		$custom_fields = $this->Custom_fields_model->get_available_fields_for_table("orders", $this->login_user->is_admin, $this->login_user->user_type);

		$options = ["client_id" => $client_id, "custom_fields" => $custom_fields];

		$list_data = $this->Orders_model->get_details($options)->result();
		$result = [];
		foreach($list_data as $data)
		{
			$result[] = $this->_make_row($data, $custom_fields);
		}
		echo json_encode(["data" => $result]);
	}

}

/* End of file orders.php */
/* Location: ./application/controllers/orders.php */