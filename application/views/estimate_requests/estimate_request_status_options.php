<?php if($model_info->status === "new"){ ?>
   <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/processing"), "<i class='fa fa-refresh'></i> " . lang('mark_as_processing'), ["class" => "", "title" => lang('mark_as_processing'), "data-reload-on-success" => "1"]); ?> </li>
   <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/estimated"), "<i class='fa fa-check-circle'></i> " . lang('mark_as_estimated'), ["class" => "", "title" => lang('mark_as_estimated'), "data-reload-on-success" => "1"]); ?> </li>
   <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/hold"), "<i class='fa fa-pause-circle-o'></i> " . lang('mark_as_hold'), ["class" => "", "title" => lang('mark_as_hold'), "data-reload-on-success" => "1"]); ?> </li>
   <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/canceled"), "<i class='fa fa-times-circle-o'></i> " . lang('mark_as_canceled'), ["class" => "", "title" => lang('mark_as_canceled'), "data-reload-on-success" => "1"]); ?> </li>
<?php } else{
	if($model_info->status === "processing"){ ?>
       <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/estimated"), "<i class='fa fa-check-circle'></i> " . lang('mark_as_estimated'), ["class" => "", "title" => lang('mark_as_estimated'), "data-reload-on-success" => "1"]); ?> </li>
       <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/hold"), "<i class='fa fa-pause-circle-o'></i> " . lang('mark_as_hold'), ["class" => "", "title" => lang('mark_as_hold'), "data-reload-on-success" => "1"]); ?> </li>
       <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/canceled"), "<i class='fa fa-times-circle-o'></i> " . lang('mark_as_canceled'), ["class" => "", "title" => lang('mark_as_canceled'), "data-reload-on-success" => "1"]); ?> </li>
	<?php } else{
		if($model_info->status === "estimated"){ ?>
           <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/processing"), "<i class='fa fa-check-circle'></i> " . lang('mark_as_processing'), ["class" => "", "title" => lang('mark_as_processing'), "data-reload-on-success" => "1"]); ?> </li>
           <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/hold"), "<i class='fa fa-pause-circle-o'></i> " . lang('mark_as_hold'), ["class" => "", "title" => lang('mark_as_hold'), "data-reload-on-success" => "1"]); ?> </li>
           <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/canceled"), "<i class='fa fa-times-circle-o'></i> " . lang('mark_as_canceled'), ["class" => "", "title" => lang('mark_as_canceled'), "data-reload-on-success" => "1"]); ?> </li>
		<?php } else{
			if($model_info->status === "hold"){ ?>
               <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/processing"), "<i class='fa fa-check-circle'></i> " . lang('mark_as_processing'), ["class" => "", "title" => lang('mark_as_processing'), "data-reload-on-success" => "1"]); ?> </li>
               <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/estimated"), "<i class='fa fa-pause-circle-o'></i> " . lang('mark_as_estimated'), ["class" => "", "title" => lang('mark_as_estimated'), "data-reload-on-success" => "1"]); ?> </li>
               <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/canceled"), "<i class='fa fa-times-circle-o'></i> " . lang('mark_as_canceled'), ["class" => "", "title" => lang('mark_as_canceled'), "data-reload-on-success" => "1"]); ?> </li>
			<?php } else{
				if($model_info->status === "canceled"){ ?>
                   <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/processing"), "<i class='fa fa-check-circle'></i> " . lang('mark_as_processing'), ["class" => "", "title" => lang('mark_as_processing'), "data-reload-on-success" => "1"]); ?> </li>
                   <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/estimated"), "<i class='fa fa-pause-circle-o'></i> " . lang('mark_as_estimated'), ["class" => "", "title" => lang('mark_as_estimated'), "data-reload-on-success" => "1"]); ?> </li>
                   <li role="presentation"><?php echo ajax_anchor(get_uri("estimate_requests/change_estimate_request_status/$model_info->id/hold"), "<i class='fa fa-pause-circle-o'></i> " . lang('mark_as_hold'), ["class" => "", "title" => lang('mark_as_hold'), "data-reload-on-success" => "1"]); ?> </li>
				<?php }
			}
		}
	}
} ?>