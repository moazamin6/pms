<li class="<?php echo ($active_tab == 'tickets_list') ? 'active' : ''; ?>" data-tab="tickets_list"><a
           href="<?php echo_uri('tickets/index/'); ?>"><?php echo lang("tickets_list"); ?></a></li>
<li class="<?php echo ($active_tab == 'ticket_templates') ? 'active' : ''; ?>" data-tab="ticket_templates"><a
           href="<?php echo_uri('tickets/ticket_templates/'); ?>"><?php echo lang("ticket_templates"); ?></a></li>