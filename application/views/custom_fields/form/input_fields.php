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

<div class="form-group">
   <label for="placeholder" class=" col-md-3"><?php echo lang('placeholder'); ?></label>
   <div class=" col-md-9">
	   <?php
	   echo form_input([
		   "id"          => "placeholder",
		   "name"        => "placeholder",
		   "value"       => $model_info->placeholder,
		   "class"       => "form-control",
		   "placeholder" => lang('placeholder'),
	   ]);
	   ?>
   </div>
</div>

<?php if(isset($related_to) && $related_to === "tickets"){ ?>
   <div class="form-group">
      <label for="example_variable_name" class=" col-md-3"><?php echo lang('email_template_variable'); ?></label>
      <div class=" col-md-9">
		  <?php if($model_info->example_variable_name){ ?>
             <input type="hidden" name="example_variable_name" value="<?php echo $model_info->example_variable_name; ?>"/>
			  <?php echo $model_info->example_variable_name; ?>
			  <?php
		  }
		  else
		  {
			  echo form_input([
				  "id"           => "example_variable_name",
				  "name"         => "example_variable_name",
				  "value"        => $model_info->example_variable_name,
				  "class"        => "form-control text-uppercase",
				  "placeholder"  => lang('example_variable_name'),
				  "autocomplete" => "off",
			  ]);
		  }
		  ?>
      </div>
   </div>
<?php } ?>


<div class="form-group">
   <label for="field_type" class=" col-md-3"><?php echo lang('field_type'); ?></label>
   <div class="col-md-9">
	   <?php
	   $disabled = "";
	   if($model_info->id)
	   {
		   $disabled = " disabled='disabled'";
	   }

	   $field_type_dropdown = [
		   "text"          => lang("field_type_text"),
		   "textarea"      => lang("field_type_textarea"),
		   "select"        => lang("field_type_select"),
		   "multi_select"  => lang("field_type_multi_select"),
		   "email"         => lang("email"),
		   "date"          => lang("date"),
		   "number"        => lang("field_type_number"),
		   "external_link" => lang("field_type_external_link"),
	   ];
	   echo form_dropdown("field_type", $field_type_dropdown, $model_info->field_type, "class='select2' id='field_type' $disabled");
	   ?>
   </div>
</div>

<div id="options_container" class="form-group">
   <label for="options" class=" col-md-3"><?php echo lang('options'); ?></label>
   <div class=" col-md-9">
	   <?php
	   $labels = explode(",", $model_info->options);
	   $opton_suggestions = [];
	   foreach($labels as $label)
	   {
		   if($label && !in_array($label, $opton_suggestions))
		   {
			   $opton_suggestions[] = $label;
		   }
	   }
	   if(!count($opton_suggestions))
	   {
		   $opton_suggestions = ["0" => ""];
	   }


	   echo form_input([
		   "id"          => "options",
		   "name"        => "options",
		   "value"       => $model_info->options,
		   "class"       => "form-control",
		   "placeholder" => lang('options'),
	   ]);
	   ?>
   </div>
</div>

<div class="form-group">
   <label for="required" class=" col-md-3"><?php echo lang('required'); ?></label>
   <div class="col-md-9">
	   <?php
	   echo form_checkbox(
		   "required", "1", $model_info->required, "id='required'"
	   );
	   ?>
   </div>
</div>


<script type="text/javascript">
   $(document).ready(function () {

      $("#field_type").select2().change(function () {
         showHideFieldOptions($(this).val());
      });

      showHideFieldOptions("<?php echo $model_info->field_type; ?>");

      $("#options").select2({
         tags: <?php echo json_encode($opton_suggestions); ?>
      });

   });

   //show the options field only for slect/multi_select type fields
   function showHideFieldOptions(fieldType) {
      if (fieldType === "select" || fieldType === "multi_select") {
         $("#options_container").show();
      } else {
         $("#options_container").hide();
      }
   }

</script>