<?php

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

function save_contact($contact = '') {
  global $mysqli;

  if (filter_var($contact, FILTER_VALIDATE_EMAIL)) {
    $contact = $mysqli->real_escape_string($contact);
    $query = "INSERT INTO contact (email) values ('$contact')";
    $mysqli->query($query);
    return TRUE;
  }
  else {
    header('Location: index.php?status=fail');
    return FALSE;
  }
}

function render_message($type, $message) {
  $html = '<div class="message message-' . $type . '">';
  $html .= htmlspecialchars($message);
  $html .= '</div>';
  return $html;
}


get_contacts();

?>