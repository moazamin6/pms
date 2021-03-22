<?php

$sources = [["id" => "", "text" => "- " . lang("source") . " -"]];
foreach($lead_sources as $source)
{
	$sources[] = ["id" => $source->id, "text" => $source->title];
}

echo json_encode($sources);
?>