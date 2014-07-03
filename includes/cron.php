<?php
require_once 'settings.php';
require_once 'lib.php';

$previous_messages = get_prev_messages();
$message = get_next_message($previous_messages);
mail_contacts($message['message']);
update_log($message['mid']);
?>
