<div id="page-content" class="p20 clearfix">
   <div class="row">
      <div class="col-sm-3 col-lg-2">
		  <?php
		  $tab_view['active_tab'] = "gdpr";
		  $this->load->view("settings/tabs", $tab_view);
		  ?>
      </div>

      <div class="col-sm-9 col-lg-10">
		  <?php echo form_open(get_uri("settings/save_gdpr_settings"), ["id" => "gdpr-settings-form", "class" => "general-form dashed-row", "role" => "form"]); ?>
         <div class="panel">
            <div class="panel-default panel-heading">
               <h4>GDPR</h4>
            </div>
            <div class="panel-body">
               <div class="form-group">
                  <label for="enable_gdpr" class="col-md-2"><?php echo lang('enable_gdpr'); ?></label>
                  <div class="col-md-10">
					  <?php
					  echo form_checkbox("enable_gdpr", "1", get_setting("enable_gdpr") ? true : false, "id='enable_gdpr' class='ml15'");
					  ?>
                  </div>
               </div>

               <div id="gdpr-details" class="<?php echo get_setting("enable_gdpr") ? "" : "hide"; ?>">
                  <div class="form-group">
                     <label for="allow_clients_to_export_their_data" class="col-md-2"><?php echo lang('allow_clients_to_export_their_data'); ?></label>
                     <div class="col-md-10">
						 <?php
						 echo form_checkbox("allow_clients_to_export_their_data", "1", get_setting("allow_clients_to_export_their_data") ? true : false, "id='allow_clients_to_export_their_data' class='ml15'");
						 ?>
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="clients_can_request_account_removal" class="col-md-2"><?php echo lang('clients_can_request_account_removal'); ?></label>
                     <div class="col-md-10">
						 <?php
						 echo form_checkbox("clients_can_request_account_removal", "1", get_setting("clients_can_request_account_removal") ? true : false, "id='clients_can_request_account_removal' class='ml15'");
						 ?>
                     </div>
                  </div>

                  <div class="form-group">
                     <label for="show_terms_and_conditions_in_client_signup_page"
                            class="col-md-2"><?php echo lang('show_terms_and_conditions_in_client_signup_page'); ?></label>
                     <div class="col-md-10">
						 <?php
						 echo form_checkbox("show_terms_and_conditions_in_client_signup_page", "1", get_setting("show_terms_and_conditions_in_client_signup_page") ? true : false, "id='show_terms_and_conditions_in_client_signup_page' class='ml15'");
						 ?>
                     </div>
                  </div>

                  <div id="terms-and-conditions-details" class="<?php echo get_setting("show_terms_and_conditions_in_client_signup_page") ? "" : "hide"; ?>">
                     <div class="form-group">
                        <label for="gdpr_terms_and_conditions_link" class=" col-md-2"><?php echo lang('gdpr_terms_and_conditions_link'); ?></label>
                        <div class=" col-md-10">
							<?php
							echo form_input([
								"id"                 => "gdpr_terms_and_conditions_link",
								"name"               => "gdpr_terms_and_conditions_link",
								"value"              => get_setting("gdpr_terms_and_conditions_link"),
								"class"              => "form-control",
								"placeholder"        => "URL",
								"data-rule-required" => true,
								"data-msg-required"  => lang("field_required"),
							]);
							?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="panel-footer">
               <button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> <?php echo lang('save'); ?></button>
            </div>
         </div>

		  <?php echo form_close(); ?>
      </div>
   </div>
</div>

<script type="text/javascript">
   $(document).ready(function () {
      $("#gdpr-settings-form").appForm({
         isModal: false,
         onSuccess: function (result) {
            if (result.success) {
               appAlert.success(result.message, {duration: 10000});
            } else {
               appAlert.error(result.message);
            }
         }
      });

      //show/hide gdpr details area
      $("#enable_gdpr").click(function () {
         if ($(this).is(":checked")) {
            $("#gdpr-details").removeClass("hide");
         } else {
            $("#gdpr-details").addClass("hide");
         }
      });

      //show/hide terms and conditions details area
      $("#show_terms_and_conditions_in_client_signup_page").click(function () {
         if ($(this).is(":checked")) {
            $("#terms-and-conditions-details").removeClass("hide");
         } else {
            $("#terms-and-conditions-details").addClass("hide");
         }
      });
   });
</script>