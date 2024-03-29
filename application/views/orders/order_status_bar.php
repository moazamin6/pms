<div class="panel panel-default  p15 no-border m0">
   <span><?php echo lang("status") . ": " . js_anchor($order_info->order_status_title, ["style" => "background-color: $order_info->order_status_color", "class" => "label", "data-id" => $order_info->id, "data-value" => $order_info->status_id, "data-act" => "update-order-status"]); ?></span>

   <span class="ml15">
        <?php
		echo lang("client") . ": ";
		echo(anchor(get_uri("clients/view/" . $order_info->client_id), $order_info->company_name));
		?>
    </span>
   <span class="ml15">
        <?php
		echo lang("created_by") . ": ";
		$created_by = $order_info->created_by_user;
		if($order_info->created_by_user_type == "staff")
		{
			echo get_team_member_profile_link($order_info->created_by, $created_by);
		}
		else
		{
			echo get_client_contact_profile_link($order_info->created_by, $created_by);
		}
		?>
    </span>
</div>