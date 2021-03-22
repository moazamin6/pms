<?php

$statuses = [["id" => "", "text" => "- " . lang("status") . " -"]];
foreach($order_statuses as $status)
{
	$statuses[] = ["id" => $status->id, "text" => $status->title];
}

echo json_encode($statuses);
?>