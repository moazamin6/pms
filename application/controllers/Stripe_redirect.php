<?php

if(!defined('BASEPATH'))
{
	exit('No direct script access allowed');
}

//don't extend this controller from Pre_loader 
//because this will be called by Stripe 
//and login check is not required since we'll validate the data

class Stripe_redirect extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library("stripe");
		$this->load->model("Stripe_ipn_model");
	}

	function index($payment_verification_code = "")
	{
		if(!$payment_verification_code)
		{
			show_404();
		}

		$stripe_ipn_info = $this->Stripe_ipn_model->get_one_payment_where($payment_verification_code);
		if(!$stripe_ipn_info)
		{
			show_404();
		}

		$payment = $this->stripe->is_valid_ipn($stripe_ipn_info->payment_intent);
		if(!$payment)
		{
			show_404();
		}

		//so, the payment is valid
		//save the payment
		//set login user id = contact id for future processing
		$this->login_user = new stdClass();
		$this->login_user->id = $stripe_ipn_info->contact_user_id;
		$this->login_user->user_type = "client";

		$invoice_id = $stripe_ipn_info->invoice_id;

		$invoice_payment_data = [
			"invoice_id"        => $invoice_id,
			"payment_date"      => get_current_utc_time(),
			"payment_method_id" => $stripe_ipn_info->payment_method_id,
			"note"              => "",
			"amount"            => $payment->amount / 100,
			"transaction_id"    => $payment->id,
			"created_at"        => get_current_utc_time(),
			"created_by"        => $this->login_user->id,
		];

		//check if already a payment done with this transaction
		$existing = $this->Invoice_payments_model->get_one_where(["transaction_id" => $payment->id]);
		if($existing->id)
		{
			show_404();
		}

		$invoice_payment_id = $this->Invoice_payments_model->save($invoice_payment_data);
		if(!$invoice_payment_id)
		{
			show_404();
		}

		//as receiving payment for the invoice, we'll remove the 'draft' status from the invoice
		$this->Invoices_model->update_invoice_status($invoice_id);

		log_notification("invoice_payment_confirmation", ["invoice_payment_id" => $invoice_payment_id, "invoice_id" => $invoice_id], "0");

		log_notification("invoice_online_payment_received", ["invoice_payment_id" => $invoice_payment_id, "invoice_id" => $invoice_id], $this->login_user->id);

		//delete the ipn data
		$this->Stripe_ipn_model->delete($stripe_ipn_info->id);

		$verification_code = $stripe_ipn_info->verification_code;
		if($verification_code)
		{
			$redirect_to = "pay_invoice/index/$verification_code";
		}
		else
		{
			$redirect_to = "invoices/preview/$invoice_id";
		}

		$this->session->set_flashdata("success_message", lang("payment_success_message"));
		redirect($redirect_to);
	}

}

/* End of file Stripe_redirect.php */
/* Location: ./application/controllers/Stripe_redirect.php */