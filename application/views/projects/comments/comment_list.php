<?php
foreach($comments as $comment)
{
	
	$type = "project";
	$type_id = $comment->project_id;
	if($comment->file_id)
	{
		$type = "file";
		$type_id = $comment->file_id;
	}
	else
	{
		if($comment->task_id)
		{
			$type = "task";
			$type_id = $comment->task_id;
		}
		else
		{
			if($comment->customer_feedback_id)
			{
				$type = "customer_feedback";
				$type_id = $comment->customer_feedback_id;
			}
		}
	}
	?>
   <div id="prject-comment-container-<?php echo $type . "-" . $comment->id; ?>" class="comment-container media b-b mb15 <?php echo "comment-" . $type; ?>">
      <div class="media-left comment-avatar">
            <span class="avatar <?php echo ($type === "project") ? " avatar-sm" : " avatar-xs"; ?> ">
                <img src="<?php echo get_avatar($comment->created_by_avatar); ?>" alt="..."/>
            </span>
      </div>
      <div class="media-body">
         <div class="media-heading">
			 <?php
			 if($comment->user_type === "staff")
			 {
				 echo get_team_member_profile_link($comment->created_by, $comment->created_by_user, ["class" => "dark strong"]);
			 }
			 else
			 {
				 echo get_client_contact_profile_link($comment->created_by, $comment->created_by_user, ["class" => "dark strong"]);
			 }
			 ?>
            <small><span class="text-off"><?php echo format_to_relative_time($comment->created_at); ?></span></small>


            <span class="pull-right comment-like-top">
                    <?php
					if(isset($comment->like_status))
					{
						$like_icon = $comment->like_status ? "fa-thumbs-up" : "fa-thumbs-o-up";
						echo ajax_anchor(get_uri("projects/like_comment/" . $comment->id), "<i class='fa $like_icon'></i> " . lang('like') . " ", ["class" => "mr5 like-button", "data-real-target" => "#comment-like-container-$comment->id"]);
					}
					?>
                </span>
			 
			 <?php if($this->login_user->is_admin || $comment->created_by == $this->login_user->id){ ?>
                <span class="pull-right dropdown comment-dropdown">
                        <div class="text-off dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-chevron-down clickable"></i>
                        </div>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><?php echo ajax_anchor(get_uri("projects/delete_comment/$comment->id"), "<i class='fa fa-times'></i> " . lang('delete'), ["class" => "", "title" => lang('delete'), "data-fade-out-on-success" => "#prject-comment-container-$type-$comment->id"]); ?> </li>
                        </ul>
                    </span>
			 <?php } ?>

         </div>
         <p><?php echo convert_mentions($comment->description); ?></p>

         <div class="comment-image-box clearfix">
			 
			 <?php
			 $files = unserialize($comment->files);
			 $total_files = count($files);
			 $this->load->view("includes/timeline_preview", ["files" => $files]);
			 ?>

            <div class="mb15 clearfix">
				<?php if(isset($comment->like_status)){ ?>
                   <span id="comment-like-container-<?php echo $comment->id; ?>">
                            <?php $this->load->view("projects/comments/like_comment", ["comment" => $comment]); ?>
                        </span>
				<?php } ?>
				
				<?php
				$can_reply = false;
				if($type === "project" || $type === "customer_feedback")
				{
					$can_reply = true;
					echo ajax_anchor(get_uri("projects/comment_reply_form/" . $comment->id . "/" . $type . "/" . $type_id), "<i class='fa fa-reply font-11'></i> " . lang('reply'), ["data-real-target" => "#reply-form-container-" . $comment->id]);
				}
				?>
				<?php
				$reply_caption = "";
				if($comment->total_replies == 1)
				{
					$reply_caption = lang("reply");
				}
				else
				{
					if(($comment->total_replies > 1))
					{
						$reply_caption = lang("replies");
					}
				}
				
				if($reply_caption)
				{
					echo ajax_anchor(get_uri("projects/view_comment_replies/" . $comment->id), "<i class='fa fa-comment-o'></i> " . lang("view") . " " . $comment->total_replies . " " . $reply_caption, ["class" => "btn btn-default btn-xs view-replies", "id" => "show-replies-" . $comment->id, "data-remove-on-success" => "#show-replies-" . $comment->id, "data-real-target" => "#reply-list-" . $comment->id]);
				}
				
				//create link for reply success. trigger this link after submit any reply
				echo ajax_anchor(get_uri("projects/view_comment_replies/" . $comment->id), "", ["class" => "hide", "id" => "reload-reply-list-button-" . $comment->id, "data-real-target" => "#reply-list-" . $comment->id]);
				
				if($total_files)
				{
					$download_caption = lang('download');
					if($total_files > 1)
					{
						$download_caption = sprintf(lang('download_files'), $total_files);
					}
					if(!$can_reply)
					{
						echo "<i class='fa fa-paperclip pull-left font-16'></i>";
					}
					
					echo anchor(get_uri("projects/download_comment_files/" . $comment->id), $download_caption, ["class" => "pull-right", "title" => $download_caption]);
				}
				?>
            </div>
         </div>
         <div id="reply-list-<?php echo $comment->id; ?>"></div>
         <div id="reply-form-container-<?php echo $comment->id; ?>"></div>

      </div>
   </div>
<?php } ?>


<script>
   $(document).ready(function () {
      $(".like-button").click(function () {
         var $icon = $(this).find("i");
         console.log($icon.hasClass("fa-thumbs-up"));
         if ($icon.hasClass("fa-thumbs-up")) {
            $icon.removeClass("fa-thumbs-up");
            $icon.addClass("fa-thumbs-o-up");
         } else {
            $icon.removeClass("fa-thumbs-o-up");
            $icon.addClass("fa-thumbs-up");
         }
      });
   });
</script>