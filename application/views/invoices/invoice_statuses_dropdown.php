<?php

$invoice_statuses_dropdown = [
	["id" => "", "text" => "- " . lang("status") . " -"],
	["id" => "overdue", "text" => lang("overdue")],
	["id" => "draft", "text" => lang("draft")],
	["id" => "not_paid", "text" => lang("not_paid")],
	["id" => "partially_paid", "text" => lang("partially_paid")],
	["id" => "fully_paid", "text" => lang("fully_paid")],
	["id" => "cancelled", "text" => lang("cancelled")],
];
echo json_encode($invoice_statuses_dropdown);
?>