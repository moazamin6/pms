<?php

$quick_filters_dropdown = [
	["id" => "", "text" => "- " . lang("quick_filters") . " -"],
	["id" => "recently_updated", "text" => lang("recently_updated")],
];

foreach($task_statuses as $task_status)
{
	$quick_filters_dropdown[] = ["id" => $task_status->id, "text" => $task_status->key_name ? lang("recently_moved_to") . " " . lang($task_status->key_name) : lang("recently_moved_to") . " " . $task_status->title];
}

$quick_filters_dropdown[] = ["id" => "recently_commented", "text" => lang("recently_commented")];
$quick_filters_dropdown[] = ["id" => "mentioned_me", "text" => lang("mentioned_me")];
$quick_filters_dropdown[] = ["id" => "recently_mentioned_me", "text" => lang("recently_mentioned_me")];
$quick_filters_dropdown[] = ["id" => "recently_meaning", "text" => "<i class='fa fa-gear'></i> " . lang("recently_meaning")];

echo json_encode($quick_filters_dropdown);
?>