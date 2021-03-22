<?php

foreach($replies as $reply_info)
{
	$this->load->view("messages/reply_row", ["reply_info" => $reply_info]);
} 