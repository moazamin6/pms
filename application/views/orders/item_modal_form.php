<?php echo form_open(get_uri("orders/save_item"), ["id" => "order-item-form", "class" => "general-form", "role" => "form"]); ?>
<div class="modal-body clearfix">
   <input type="hidden" name="id" value="<?php echo $model_info->id; ?>"/>

	<?php if($order_id){ ?>
       <input type="hidden" name="order_id" value="<?php echo $order_id; ?>"/>
       <input type="hidden" name="add_new_item_to_library" value="" id="add_new_item_to_library"/>

       <div class="form-group">
          <label for="order_item_title" class=" col-md-3"><?php echo lang('item'); ?></label>
          <div class="col-md-9">
			  <?php
			  echo form_input([
				  "id"                 => "order_item_title",
				  "name"               => "order_item_title",
				  "value"              => $model_info->title,
				  "class"              => "form-control validate-hidden",
				  "placeholder"        => lang('select_or_create_new_item'),
				  "data-rule-required" => true,
				  "data-msg-required"  => lang("field_required"),
			  ]);
			  ?>
             <a id="order_item_title_dropdwon_icon" tabindex="-1" href="javascript:void(0);"
                style="color: #B3B3B3;float: right; padding: 5px 7px; margin-top: -35px; font-size: 18px;"><span>×</span></a>
          </div>
       </div>
	<?php } ?>


   <div class="form-group">
      <label for="order_item_description" class="col-md-3"><?php echo lang('description'); ?></label>
      <div class=" col-md-9">
		  <?php
		  echo form_textarea([
			  "id"                    => "order_item_description",
			  "name"                  => "order_item_description",
			  "value"                 => $model_info->description ? $model_info->description : "",
			  "class"                 => "form-control",
			  "placeholder"           => lang('description'),
			  "data-rich-text-editor" => true,
		  ]);
		  ?>
      </div>
   </div>
   <div class="form-group">
      <label for="order_item_quantity" class=" col-md-3"><?php echo lang('quantity'); ?></label>
      <div class="col-md-9">
		  <?php
		  echo form_input([
			  "id"                 => "order_item_quantity",
			  "name"               => "order_item_quantity",
			  "value"              => $model_info->quantity ? to_decimal_format($model_info->quantity) : "",
			  "class"              => "form-control",
			  "placeholder"        => lang('quantity'),
			  "type"               => "number",
			  "data-rule-required" => true,
			  "data-msg-required"  => lang("field_required"),
		  ]);
		  ?>
      </div>
   </div>

	<?php if($order_id){ ?>
       <div class="form-group">
          <label for="order_unit_type" class=" col-md-3"><?php echo lang('unit_type'); ?></label>
          <div class="col-md-9">
			  <?php
			  echo form_input([
				  "id"          => "order_unit_type",
				  "name"        => "order_unit_type",
				  "value"       => $model_info->unit_type,
				  "class"       => "form-control",
				  "placeholder" => lang('unit_type') . ' (Ex: hours, pc, etc.)',
			  ]);
			  ?>
          </div>
       </div>
       <div class="form-group">
          <label for="order_item_rate" class=" col-md-3"><?php echo lang('rate'); ?></label>
          <div class="col-md-9">
			  <?php
			  echo form_input([
				  "id"                 => "order_item_rate",
				  "name"               => "order_item_rate",
				  "value"              => $model_info->rate ? to_decimal_format($model_info->rate) : "",
				  "class"              => "form-control",
				  "placeholder"        => lang('rate'),
				  "data-rule-required" => true,
				  "data-msg-required"  => lang("field_required"),
			  ]);
			  ?>
          </div>
       </div>
	<?php } ?>

</div>

<div class="modal-footer">
   <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-close"></span> <?php echo lang('close'); ?></button>
   <button type="submit" class="btn btn-primary"><span class="fa fa-check-circle"></span> <?php echo lang('save'); ?></button>
</div>
<?php echo form_close(); ?>

<script type="text/javascript">
   $(document).ready(function () {
      $("#order-item-form").appForm({
         onSuccess: function (result) {
            $("#order-item-table").appTable({newData: result.data, dataId: result.id});
            $("#order-total-section").html(result.order_total_view);
         }
      });

      //show item suggestion dropdown when adding new item
      var isUpdate = "<?php echo $model_info->id; ?>";
      if (!isUpdate) {
         applySelect2OnItemTitle();
      }

      //re-initialize item suggestion dropdown on request
      $("#order_item_title_dropdwon_icon").click(function () {
         applySelect2OnItemTitle();
      });

   });

   function applySelect2OnItemTitle() {
      $("#order_item_title").select2({
         showSearchBox: true,
         ajax: {
            url: "<?php echo get_uri("orders/get_order_item_suggestion"); ?>",
            dataType: 'json',
            quietMillis: 250,
            data: function (term, page) {
               return {
                  q: term // search term
               };
            },
            results: function (data, page) {
               return {results: data};
            }
         }
      }).change(function (e) {
         if (e.val === "+") {
            //show simple textbox to input the new item
            $("#order_item_title").select2("destroy").val("").focus();
            $("#add_new_item_to_library").val(1); //set the flag to add new item in library
         } else if (e.val) {
            //get existing item info
            $("#add_new_item_to_library").val(""); //reset the flag to add new item in library
            $.ajax({
               url: "<?php echo get_uri("orders/get_order_item_info_suggestion"); ?>",
               data: {item_name: e.val},
               cache: false,
               type: 'POST',
               dataType: "json",
               success: function (response) {

                  //auto fill the description, unit type and rate fields.
                  if (response && response.success) {

                     if (!$("#order_item_description").val()) {
                        $("#order_item_description").val(response.item_info.description);
                     }

                     if (!$("#order_unit_type").val()) {
                        $("#order_unit_type").val(response.item_info.unit_type);
                     }

                     if (!$("#order_item_rate").val()) {
                        $("#order_item_rate").val(response.item_info.rate);
                     }
                  }
               }
            });
         }

      });
   }

</script>