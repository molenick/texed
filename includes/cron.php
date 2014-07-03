<?php
require_once 'settings.php';
require_once 'lib.php';

$previous_messages = get_prev_messages();
$next_message = get_next_message($previous_messages);
$mid = $next_message['mid'];
$message_text = $next_message['message'];
update_log($mid);

// @todo Handle mail.
// @todo Handle unsubscribe.
?>
