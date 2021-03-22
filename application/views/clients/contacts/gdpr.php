<div class="tab-content">
	<?php $user_id = $this->login_user->id; ?>
	
	<?php echo form_open("", ["class" => "general-form dashed-row white", "role" => "form"]); ?>
   <div class="panel">
      <div class="panel-default panel-heading">
         <h4><?php echo lang("gdpr"); ?></h4>
      </div>
      <div class="panel-body">
		  
		  <?php if(get_setting("allow_clients_to_export_their_data")){ ?>
             <div class="form-group">
                <label for="export_my_data" class=" col-md-2"><?php echo lang('export_my_data'); ?></label>
                <div class=" col-md-10">
					<?php echo anchor(get_uri("clients/export_my_data/"), lang("export"), ["class" => "btn btn-primary", "title" => lang('export_my_data')]); ?>
                </div>
             </div>
		  <?php } ?>
		  
		  <?php if(get_setting("clients_can_request_account_removal")){ ?>
             <div class="form-group">
                <label for="request_my_account_removal" class=" col-md-2"><?php echo lang('i_want_to_remove_my_account'); ?></label>
                <div class=" col-md-10">
					<?php if($user_info->requested_account_removal){ ?>
                       <button class="btn btn-danger" disabled="true"><?php echo lang("applied"); ?></button>
						<?php
					}
					else
					{
						echo anchor(get_uri("clients/request_my_account_removal/"), lang("apply"), ["class" => "btn btn-danger", "title" => lang('i_want_to_remove_my_account')]);
					}
					?>
                </div>
             </div>
		  <?php } ?>

      </div>
   </div>
	<?php echo form_close(); ?>
</div>

<script type="text/javascript">
   $(document).ready(function () {

   });
</script>    