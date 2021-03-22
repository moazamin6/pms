<?php

$estimate_statuses_dropdown = [
	["id" => "", "text" => "- " . lang("status") . " -"],
	["id" => "draft", "text" => lang("draft")],
	["id" => "sent", "text" => lang("sent")],
	["id" => "accepted", "text" => lang("accepted")],
	["id" => "declined", "text" => lang("declined")],
];
echo json_encode($estimate_statuses_dropdown);
