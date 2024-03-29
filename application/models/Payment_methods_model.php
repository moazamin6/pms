<?php

class Payment_methods_model extends Crud_model
{

	private $table = NULL;

	function __construct()
	{
		$this->table = 'payment_methods';
		parent::__construct($this->table);
	}

	//define different types of payment gateway settings
	function get_settings($type = "")
	{
		$settings = [
			"stripe"                   => [
				["name" => "pay_button_text", "text" => lang("pay_button_text"), "type" => "text", "default" => "Stripe"],
				["name" => "secret_key", "text" => "Secret Key", "type" => "text", "default" => ""],
				["name" => "publishable_key", "text" => "Publishable Key", "type" => "text", "default" => ""],
			],
			"paypal_payments_standard" => [
				["name" => "pay_button_text", "text" => lang("pay_button_text"), "type" => "text", "default" => "PayPal Standard"],
				["name" => "email", "text" => "Email", "type" => "text", "default" => ""],
				["name" => "paypal_live", "text" => "Paypal Live", "type" => "boolean", "default" => "0"],
				["name" => "debug", "text" => "Enable Debug", "type" => "boolean", "default" => "0", "help_text" => "Save logs in a file (paypal.log) in root directory during processing the IPN"],
				["name" => "paypal_ipn_url", "text" => "Paypal IPN URL", "type" => "readonly", "default" => get_uri("paypal_ipn")],
			],
			"khipu"                    => [
				["name" => "pay_button_text", "text" => lang("pay_button_text"), "type" => "text", "default" => "PayPal Pro"],
				["name" => "api_username", "text" => "API Username", "type" => "text", "default" => ""],
				["name" => "api_password", "text" => "API Password", "type" => "text", "default" => ""],
				["name" => "api_signature", "text" => "API Signature", "type" => "text", "default" => ""],
				["name" => "paypal_live", "text" => "Paypal Live", "type" => "boolean", "default" => "0"],
			],
			"paytm"                    => [
				["name" => "pay_button_text", "text" => lang("pay_button_text"), "type" => "text", "default" => "Paytm"],
				["name" => "paytm_testing_environment", "text" => lang("testing_environment"), "type" => "boolean", "default" => "0"],
				["name" => "merchant_id", "text" => "Merchant ID", "type" => "text", "default" => ""],
				["name" => "secret_key", "text" => "Secret Key", "type" => "text", "default" => ""],
				["name" => "merchant_website", "text" => "Merchant Website", "type" => "text", "default" => ""],
				["name" => "industry_type", "text" => "Industry Type", "type" => "text", "default" => ""],
			],
		];
		if($type)
		{
			return get_array_value($settings, $type);
		}
		else
		{
			return [];
		}
	}

	function get_one_with_settings($id = 0)
	{
		$info = $this->get_one($id);
		return $this->_merge_online_settings_with_default($info);
	}

	function get_oneline_payment_method($type)
	{
		$info = $this->get_one_where(["deleted" => 0, "type" => $type, "online_payable" => 1]);
		return $this->_merge_online_settings_with_default($info);
	}

	private function _merge_online_settings_with_default($info)
	{
		$settings = $this->get_settings($info->type);
		$settings_data = $info->settings ? @unserialize($info->settings) : [];

		if(!is_array($settings_data))
		{
			$settings_data = [];
		}

		if(is_array($settings))
		{
			foreach($settings as $setting)
			{
				$setting_name = is_array($setting) ? get_array_value($setting, "name") : "";
				$info->$setting_name = get_array_value($settings_data, $setting_name);
				if(!$info->$setting_name)
				{
					$info->$setting_name = get_array_value($setting, "default");
				}
			}
		}

		return $info;
	}

	function get_details($options = [])
	{
		$payment_methods_table = $this->db->dbprefix('payment_methods');
		$where = "";
		$id = get_array_value($options, "id");
		if($id)
		{
			$where = " AND $payment_methods_table.id=$id";
		}

		$sql = "SELECT $payment_methods_table.*
        FROM $payment_methods_table
        WHERE $payment_methods_table.deleted=0 $where";
		return $this->db->query($sql);
	}

	function delete($id = 0, $undo = false)
	{

		$exists = $this->get_one_where($where = ["id" => $id]);
		if($exists->online_payable == 1)
		{
			//online payable types can't be deleted
			return false;
		}
		else
		{
			return parent::delete($id, $undo);
		}
	}

	function get_available_online_payment_methods()
	{

		$settings = $this->get_all_where(["deleted" => 0, "online_payable" => 1, "available_on_invoice" => 1])->result();

		$final_settings = [];
		foreach($settings as $setting)
		{
			$final_settings[] = (array)$this->_merge_online_settings_with_default($setting);
		}
		return $final_settings;
	}

}
