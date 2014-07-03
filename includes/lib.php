<?php

require_once 'settings.php';

define('MESSAGE_ERROR', 'error');
define('MESSAGE_NOTICE', 'notice');

$mysqli = new mysqli($conf['db_host'], $conf['db_user'], $conf['db_pass'], $conf['db']);
if ($mysqli->connect_errno) {
  echo "Can't connect to the database. :*(";
}

function get_contacts() {
  global $mysqli;
  $contacts = array();
  $query = 'SELECT * FROM contact';
  $results = $mysqli->query($query);
  while ($row = $results->fetch_assoc()) {
    $contacts[] = $row['email'];
  }
}

function save_contact($contact = '', $submit_type = 'phone') {
  global $mysqli;
  if (filter_var($contact, FILTER_VALIDATE_EMAIL)) {
    $contact = $mysqli->real_escape_string($contact);
    $query = "INSERT INTO contact (email) values ('$contact')";
    $mysqli->query($query);
    header('Location: index.php?status=success&submit-type=' . $submit_type);
  }
  else {
    header('Location: index.php?status=fail&submit-type=' . $submit_type);
  }
}

function get_prev_messages() {
  global $mysqli;
  $past_messages = '';
  $query = 'SELECT mid FROM log';
  $rs = $mysqli->query($query);

  while ($row = $rs->fetch_assoc()) {
    if (trim($past_messages) != '') {
      $past_messages .= ',';
    }
    $past_messages .= $row['mid'];
  }
  return $past_messages;
}

function get_next_message($past_messages) {
  global $mysqli;
  // Get random message that is not in log.
  $query = 'SELECT * FROM message';
  if (trim($past_messages != '')) {
    $query .= ' WHERE mid NOT IN (' . $past_messages . ')';
  }
  $rs = $mysqli->query($query);
  $messages = array();

  while ($row = $rs->fetch_assoc()) {
    $messages[] = array('mid' => $row['mid'], 'message' => $row['message']);
  } 
  if (count($messages) > 0) {
    $new_index = rand(0, count($messages) -1);
    return $messages[$new_index];
  }
  else {
    // We've reached the end of the list. Truncate log table and start over.
    truncate_log();
    $past_messages = '';
    return get_next_message($past_messages);
  }
}

function truncate_log() {
  global $mysqli;
  $query = 'truncate log';
  $rs = $mysqli->query($query);  
}

function update_log($mid) {
  global $mysqli;
  $mid = $mysqli->real_escape_string($mid);
  $query = "INSERT INTO log (mid, timestamp) VALUES ('" . $mid . "', " . time() . ")";
  $mysqli->query($query);
}

function render_message($type, $message) {
  $html = '<div class="message message-' . $type . '">';
  $html .= htmlspecialchars($message);
  $html .= '</div>';
  return $html;
}

?>
