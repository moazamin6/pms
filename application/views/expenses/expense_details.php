<div class="modal-body clearfix general-form">

   <div class="form-group clearfix">
      <div class="col-md-12 mb20">
         <strong class="font-18"><?php echo lang("expense") . " # " . format_to_date($expense_info->expense_date, false); ?></strong>
         <div>
			 <?php
			 if($expense_info->amount)
			 {
				 //prepare amount
				 $tax = 0;
				 $tax2 = 0;
				 if($expense_info->tax_percentage)
				 {
					 $tax = $expense_info->amount * ($expense_info->tax_percentage / 100);
				 }
				 if($expense_info->tax_percentage2)
				 {
					 $tax2 = $expense_info->amount * ($expense_info->tax_percentage2 / 100);
				 }

				 $total_amount = to_currency($expense_info->amount + $tax + $tax2);

				 echo "<span class='font-14'>$total_amount</span> ";

				 if($tax || $tax2)
				 {
					 $amount = to_currency($expense_info->amount);
					 if($tax)
					 {
						 $amount .= " + " . to_currency($tax) . " (" . lang("tax") . ")";
					 }
					 if($tax2)
					 {
						 $amount .= " + " . to_currency($tax2) . " (" . lang("second_tax") . ")";
					 }

					 $amount .= " = " . $total_amount . " " . lang("total");

					 echo "<span class='text-off'>(" . $amount . ")</span>";
				 }
			 }
			 ?>
         </div>
      </div>

      <div class="col-md-12 mb15">
         <strong><?php echo $expense_info->title; ?></strong>
      </div>

      <div class="col-md-12 mb15">
		  <?php echo $expense_info->description ? nl2br(link_it($expense_info->description)) : "-"; ?>
      </div>

	   <?php if($expense_info->category_title){ ?>
          <div class="col-md-12 mb15">
             <strong><?php echo lang('category') . ": "; ?></strong> <?php echo $expense_info->category_title; ?>
          </div>
	   <?php } ?>

	   <?php if($expense_info->project_title){ ?>
          <div class="col-md-12 mb15">
             <strong><?php echo lang('project') . ": "; ?> </strong> <?php echo anchor(get_uri("projects/view/" . $expense_info->project_id), $expense_info->project_title); ?>
          </div>
	   <?php } ?>

	   <?php if($expense_info->linked_user_name){ ?>
          <div class="col-md-12 mb15">
             <strong><?php echo lang('team_member') . ": "; ?> </strong> <?php echo get_team_member_profile_link($expense_info->user_id, $expense_info->linked_user_name); ?>
          </div>
	   <?php } ?>

	   <?php
	   if(count($custom_fields_list))
	   {
		   foreach($custom_fields_list as $data)
		   {
			   if($data->value)
			   {
				   ?>
                  <div class="col-md-12 mb15">
                     <strong><?php echo $data->title . ": "; ?> </strong> <?php echo $this->load->view("custom_fields/output_" . $data->field_type, ["value" => $data->value], true); ?>
                  </div>
				   <?php
			   }
		   }
	   }
	   ?>

	   <?php if($expense_info->recurring_expense_id){ ?>
          <div class="col-md-12 mb15">
             <strong><?php echo lang('created_from') . ": "; ?> </strong>
			  <?php
			  echo modal_anchor(get_uri("expenses/expense_details"), lang("original_expense"), ["title" => lang("expense_details"), "data-post-id" => $expense_info->recurring_expense_id]);
			  ?>
          </div>
	   <?php } ?>

      <!--recurring info-->
	   <?php if($expense_info->recurring){ ?>

		   <?php
		   $recurring_stopped = false;
		   $recurring_cycle_class = "";
		   if($expense_info->no_of_cycles_completed > 0 && $expense_info->no_of_cycles_completed == $expense_info->no_of_cycles)
		   {
			   $recurring_stopped = true;
			   $recurring_cycle_class = "text-danger";
		   }
		   ?>

		   <?php
		   $cycles = $expense_info->no_of_cycles_completed . "/" . $expense_info->no_of_cycles;
		   if(!$expense_info->no_of_cycles)
		   { //if not no of cycles, so it's infinity
			   $cycles = $expense_info->no_of_cycles_completed . "/&#8734;";
		   }
		   ?>

          <div class="col-md-12 mb15">
             <strong><?php echo lang("repeat_every") . ": "; ?> </strong> <?php echo $expense_info->repeat_every . " " . lang("interval_" . $expense_info->repeat_type); ?>
          </div>

          <div class="col-md-12 mb15">
             <strong><?php echo lang("cycles") . ": "; ?> </strong> <span class="<?php echo $recurring_cycle_class; ?>"><?php echo $cycles; ?></span>
          </div>

		   <?php if(!$recurring_stopped && (int)$expense_info->next_recurring_date){ ?>
             <div class="col-md-12 mb15">
                <strong><?php echo lang("next_recurring_date") . ": "; ?> </strong> <?php echo format_to_date($expense_info->next_recurring_date, false); ?>
             </div>
		   <?php } ?>

	   <?php } ?>

   </div>

</div>

<div class="modal-footer">
	<?php echo modal_anchor(get_uri("expenses/modal_form"), "<i class='fa fa-pencil'></i> " . lang('edit_expense'), ["class" => "btn btn-default", "data-post-id" => $expense_info->id, "title" => lang('edit_expense')]); ?>
   <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> <?php echo lang('close'); ?></button>
</div>
