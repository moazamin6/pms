<?php echo modal_anchor(get_uri("team_members/recently_meaning_modal_form"), "", ["class" => "hide", "id" => "recently_meaning_hidden", "title" => lang("recently_meaning")]); ?>

<script>
   $(document).ready(function () {
      $("[name='quick_filter']").on("change", function () {
         var value = $(this).val();
         if (value === "recently_meaning") {
            $("#recently_meaning_hidden").trigger("click");
         }
      });
   });
</script>