<div class="list-group">
	<?php foreach($timers as $timer){ ?>
       <div class="list-group-item">
          <div class="clearfix">
                <span class="pull-left mt5" title=" <?php echo format_to_datetime($timer->start_time); ?>">
                    <?php
					$start_time = new DateTime($timer->start_time);
					$timer_diff = $start_time->diff(new DateTime(get_current_utc_time()));

					$timer_diff_text = "";
					if($timer_diff->d)
					{
						//days
						$timer_diff_text .= $timer_diff->d . "d";
					}

					if($timer_diff->h)
					{
						//hours
						if($timer_diff_text)
						{
							$timer_diff_text .= " ";
						}

						$timer_diff_text .= $timer_diff->h . "h";
					}

					if($timer_diff->i)
					{
						//minutes
						if($timer_diff_text)
						{
							$timer_diff_text .= " ";
						}

						$timer_diff_text .= $timer_diff->i . "m";
					}

					//if nothing found, so it's less than a minute
					if(!$timer_diff_text)
					{
						$timer_diff_text = "<1m";
					}

					echo lang("started") . " <strong>" . $timer_diff_text . "</strong>";
					?>
                </span>
             <span class="pull-right"><?php
				 echo modal_anchor(get_uri("projects/stop_timer_modal_form/" . $timer->project_id), "<i class='fa fa fa-clock-o'></i> " . lang('stop_timer'), ["class" => "btn btn-danger btn-sm", "title" => lang('stop_timer'), "data-post-task_id" => $timer->task_id]);
				 ?>
                </span>
          </div>
		   <?php if(!$timer->task_id){ ?>
              <div class="pt5"><i
                         class="fa fa-th-large"></i> <?php echo anchor("projects/view/" . $timer->project_id, $timer->project_title, ["class" => "dark"]); ?>
              </div>
		   <?php } else{ ?>
              <div class="pt5"><i
                         class="fa fa-tasks"></i> <?php echo modal_anchor(get_uri("projects/task_view"), $timer->task_title, ["title" => lang('task_info') . " #$timer->task_id", "class" => "dark", "data-post-id" => $timer->task_id, "data-modal-lg" => "1"]); ?>
              </div>
		   <?php } ?>
       </div>
	<?php } ?>
</div>
