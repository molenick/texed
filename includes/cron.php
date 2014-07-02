<?php

require_once 'settings.php';

require_once 'lib.php';


// Get past sent messages

$log_query = 'SELECT mid FROM log';
$log_rs = $mysqli->query($log_query);
$past_messages = '';


while ($row = $log_rs->fetch_assoc()) {
  if (trim($past_messages) != '') {
    $past_messages .= ',';
  }
  $past_messages .= $row['mid'];
}

// @todo Make sure this doesn't return 0.  If it does truncate log and go again.
$message_query = 'SELECT * FROM message';
if (trim($past_messages != '')) {
  $message_query .= ' WHERE mid NOT IN (' . $past_messages . ')';
}
echo "<br/>$message_query<br/>";
$message_rs = $mysqli->query($message_query);
$messages = array();

while ($row = $message_rs->fetch_assoc()) {
  $messages[] = array('mid' => $row['mid'], 'message' => $row['message']);
}

$new_index = rand(0, count($messages) -1);
$new_mid = $messages[$new_index]['mid'];
$new_message = $messages[$new_index]['message'];

$new_mid = $mysqli->real_escape_string($new_mid);
$insert_query = "INSERT INTO log (mid, timestamp) VALUES ('" . $new_mid . "', " . time() . ")";
$mysqli->query($insert_query);


?>
