<?php echo ajax_anchor(get_uri("projects/add_remove_star/" . $project_id . "/remove"), "<i class='fa fa-star star-btn'></i>", ["data-real-target" => "#star-mark"]);