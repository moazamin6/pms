<?php

$quick_filters_dropdown = [
	["id" => "", "text" => "- " . lang("quick_filters") . " -"],
	["id" => "has_open_projects", "text" => lang("has_open_projects")],
	["id" => "has_completed_projects", "text" => lang("has_completed_projects")],
	["id" => "has_any_hold_projects", "text" => lang("has_any_hold_projects")],
	["id" => "has_unpaid_invoices", "text" => lang("has_unpaid_invoices")],
	["id" => "has_overdue_invoices", "text" => lang("has_overdue_invoices")],
	["id" => "has_partially_paid_invoices", "text" => lang("has_partially_paid_invoices")],
];
echo json_encode($quick_filters_dropdown);
?>