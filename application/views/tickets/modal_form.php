<?php echo form_open(get_uri("tickets/save"), ["id" => "ticket-form", "class" => "general-form", "role" => "form"]); ?>
<div id="new-ticket-dropzone" class="post-dropzone">
   <div class="modal-body clearfix">
      <input type="hidden" name="id" value="<?php echo $model_info->id; ?>"/>

      <div class="form-group">
         <label for="title" class=" col-md-3"><?php echo lang('title'); ?></label>
         <div class=" col-md-9">
			 <?php
			 echo form_input([
				 "id"                 => "title",
				 "name"               => "title",
				 "value"              => $model_info->title,
				 "class"              => "form-control",
				 "placeholder"        => lang('title'),
				 "autofocus"          => true,
				 "data-rule-required" => true,
				 "data-msg-required"  => lang("field_required"),
			 ]);
			 ?>
         </div>
      </div>

      <!-- client can't be changed during editing -->
	   <?php if($client_id){ ?>
          <input type="hidden" name="client_id" value="<?php echo $client_id; ?>"/>
	   <?php } else{
		   if(!$model_info->creator_email){ ?>
              <div class="form-group">
                 <label for="client_id" class=" col-md-3"><?php echo lang('client'); ?></label>
                 <div class="col-md-9">
					 <?php
					 echo form_dropdown("client_id", $clients_dropdown, [""], "class='select2 validate-hidden' id='client_id' data-rule-required='true', data-msg-required='" . lang('field_required') . "'");
					 ?>
                 </div>
              </div>
		   <?php }
	   } ?>

	   <?php if(!$requested_by_id && !$model_info->id){ ?>
		   <?php if($this->login_user->user_type == "staff"){ ?>
             <div class="form-group">
                <label for="requested_by_id" class=" col-md-3"><?php echo lang('requested_by'); ?></label>
                <div class="col-md-9" id="requested-by-dropdown-section">
					<?php
					echo form_input([
						"id"          => "requested_by_id",
						"name"        => "requested_by_id",
						"value"       => $model_info->requested_by,
						"class"       => "form-control",
						"placeholder" => lang('requested_by'),
					]);
					?>
                </div>
             </div>
		   <?php } else{
			   if($this->login_user->user_type == "client"){ ?>
                  <input type="hidden" name="requested_by_id" value="<?php echo $this->login_user->id; ?>"/>
			   <?php }
		   } ?>
	   <?php } else{ ?>
          <input type="hidden" name="requested_by_id" value="<?php echo $requested_by_id; ?>"/>
	   <?php } ?>

	   <?php if($show_project_reference == "1"){ ?>
          <div class="form-group">
             <label for="project_id" class=" col-md-3"><?php echo lang('project'); ?></label>
             <div class="col-md-9" id="porject-dropdown-section">
				 <?php
				 echo form_input([
					 "id"          => "project_id",
					 "name"        => "project_id",
					 "value"       => $model_info->project_id,
					 "class"       => "form-control",
					 "placeholder" => lang('project'),
				 ]);
				 ?>
             </div>
          </div>
	   <?php } ?>

      <div class="form-group">
         <label for="ticket_type_id" class=" col-md-3"><?php echo lang('ticket_type'); ?></label>
         <div class="col-md-9">
			 <?php
			 echo form_dropdown("ticket_type_id", $ticket_types_dropdown, $model_info->ticket_type_id, "class='select2'");
			 ?>
         </div>
      </div>

	   <?php if(!$model_info->id){ ?>
          <!-- description can't be changed during editing -->
          <div class="form-group">
             <label for="description" class=" col-md-3"><?php echo lang('description'); ?></label>
             <div class=" col-md-9">
				 <?php
				 echo form_textarea([
					 "id"                    => "description",
					 "name"                  => "description",
					 "class"                 => "form-control",
					 "placeholder"           => lang('description'),
					 "data-rule-required"    => true,
					 "data-msg-required"     => lang("field_required"),
					 "data-rich-text-editor" => true,
				 ]);
				 ?>
             </div>
          </div>
	   <?php } ?>

      <!-- Assign to only visible to team members -->
	   <?php if($this->login_user->user_type == "staff"){ ?>
          <div class="form-group">
             <label for="assigned_to" class=" col-md-3"><?php echo lang('assign_to'); ?></label>
             <div class="col-md-9">
				 <?php
				 echo form_dropdown("assigned_to", $assigned_to_dropdown, $model_info->assigned_to, "class='select2'");
				 ?>
             </div>
          </div>

          <div class="form-group">
             <label for="ticket_labels" class=" col-md-3"><?php echo lang('labels'); ?></label>
             <div class=" col-md-9">
				 <?php
				 echo form_input([
					 "id"          => "ticket_labels",
					 "name"        => "labels",
					 "value"       => $model_info->labels,
					 "class"       => "form-control",
					 "placeholder" => lang('labels'),
				 ]);
				 ?>
             </div>
          </div>
	   <?php } ?>

	   <?php $this->load->view("custom_fields/form/prepare_context_fields", ["custom_fields" => $custom_fields, "label_column" => "col-md-3", "field_column" => " col-md-9"]); ?>

	   <?php $this->load->view("includes/dropzone_preview"); ?>
   </div>

   <div class="modal-footer">

      <!-- file can't be uploaded during editing -->
      <button class="btn btn-default upload-file-button pull-left btn-sm round  <?php
	  if($model_info->id)
	  {
		  echo "hide";
	  }
	  ?>" type="button" style="color:#7988a2"><i class='fa fa-camera'></i> <?php echo lang("upload_file"); ?></button>

      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> <?php echo lang('close'); ?></button>
      <button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> <?php echo lang('save'); ?></button>
   </div>
</div>
<?php echo form_close(); ?>


<script type="text/javascript">
   $(document).ready(function () {

      var uploadUrl = "<?php echo get_uri("tickets/upload_file"); ?>";
      var validationUrl = "<?php echo get_uri("tickets/validate_ticket_file"); ?>";
      var editMode = "<?php echo $model_info->id; ?>";

      var dropzone = attachDropzoneWithForm("#new-ticket-dropzone", uploadUrl, validationUrl);

      $("#ticket-form").appForm({
         onSuccess: function (result) {
            if (editMode) {

               appAlert.success(result.message, {duration: 10000});

               //don't reload whole page when it's the list view
               if ($("#ticket-table").length) {
                  $("#ticket-table").appTable({newData: result.data, dataId: result.id});
               } else {
                  location.reload();
               }
            } else {
               $("#ticket-table").appTable({newData: result.data, dataId: result.id});
            }

         }
      });
      $("#title").focus();
      $("#ticket-form .select2").select2();

      $("#ticket_labels").select2({multiple: true, data: <?php echo json_encode($label_suggestions); ?>});

	   <?php if ($show_project_reference == "1") { ?>
      //load all projects of selected client
      $("#client_id").select2().on("change", function () {
         var client_id = $(this).val();
         if ($(this).val()) {
            $('#project_id').select2("destroy");
            $("#project_id").hide();
            appLoader.show({container: "#porject-dropdown-section"});
            $.ajax({
               url: "<?php echo get_uri("tickets/get_project_suggestion") ?>" + "/" + client_id,
               dataType: "json",
               success: function (result) {
                  $("#project_id").show().val("");
                  $('#project_id').select2({data: result});
                  appLoader.hide();
               }
            });
         }
      });

      $('#project_id').select2({data: <?php echo json_encode($projects_suggestion); ?>});

	   <?php } ?>

      //load all client contacts of selected client
      $("#client_id").select2().on("change", function () {
         var client_id = $(this).val();
         if ($(this).val()) {
            $('#requested_by_id').select2("destroy");
            $("#requested_by_id").hide();
            appLoader.show({container: "#requested-by-dropdown-section"});
            $.ajax({
               url: "<?php echo get_uri("tickets/get_client_contact_suggestion") ?>" + "/" + client_id,
               dataType: "json",
               success: function (result) {
                  $("#requested_by_id").show().val("");
                  $('#requested_by_id').select2({data: result});
                  appLoader.hide();
               }
            });
         }
      });

      $('#requested_by_id').select2({data: <?php echo json_encode($requested_by_dropdown); ?>});

   });


</script>