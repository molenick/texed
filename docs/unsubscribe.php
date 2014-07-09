<?php

require_once '../includes/lib.php';
  
$status;
$submit_type;
$message = '';

// Determine message
if (isset($_GET['status'])) {
  if(trim($_GET['status']) == 'fail') {
    $message = render_message(MESSAGE_ERROR, 'Please enter a valid email or phone number to unsubscribe. :)');
  }
}
  
// Determine submit-type.  Only accept one.
if (isset($_GET['phone-submit'])) {
  $phone = $_GET['phone'];
  if (strlen(trim($phone)) < 10) {
    header('Location: unsubscribe.php?status=fail');
  }
  else {
    $provider = $_GET['provider'];
    $contact = $phone . '@' . $provider;
    remove_contact($contact, $submit_type);
  }
}
elseif (isset($_GET['email-submit'])) {
  $submit_type = 'email';
  remove_contact($_GET['email']);
}
?>
  
<!DOCTYPE html>
<html>
  <head>
    <title>Unsubscribe | Truisms</title>
    <!-- CSS Here -->
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
    <!-- Scripts Here --> 
    <script src="lib/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/truisms.js" type="text/javascript"></script>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <h1><a href="index.php">Truisms</a></h1>
      </header>
      <section id="unsubscribe">
        <h2>Unsubscribe from Truisms</h2>
        <?php if (isset($message)) { echo $message; } ?>
        <div id="help-text">
          Please enter your phone number or email address to unsubscribe:
        </div>
        <div id="unsubscribe-type"></div>
        <form id="unsubscribe-phone">
          <p>Enter your phone number, including area code:</p>
          <input name="phone" type="text" placeholder="Phone Number" required />
          <select name="provider" required>
            <option value="message.alltel.com">Alltel</option>
	          <option value="txt.att.net">AT&T</option>
            <option value="myboostmobile.com">Boost">Mobile</option>
            <option value="sms.mycricket.com">Cricket</option>
            <option value="mymetropcs.com">Metro PCS</option>
            <option value="messaging.nextel.com">Nextel</option>
            <option value="ptel.com">Ptel</option>
  	        <option value="qwestmp.com">Qwest</option>
            <option value="messaging.sprintpcs.com">Sprint</option>
            <option value="tms.suncom.com">Suncom</option>
	          <option value="tmomail.net">T-Mobile</option>
      	    <option value="mmst5.tracfone.com">Tracfone</option>
	          <option value="email.uscc.net">U.S. Cellular</option>
	          <option value="vtext.com">Verizon</option>
            <option value="vmobl.com">Virgin Mobile</option>
          </select>
          <input name="phone-submit" type="submit" value="Submit"/>
        </form>
        <noscript><h2>or</h2></noscript>
        <form id="unsubscribe-email">
          <p>Enter your email address:</p>
          <input name="email" type="text" placeholder="Email Address" required />
          <input name="email-submit" type="submit" value="Submit"/>
        </form>
      </section>
      <section id="privacy-policy">
        <h2>Privacy Policy</h2>
        <p>This site stores your supplied email and/or phone information to send you messages. This information is not shared with any third parties.</p>
      </section>
    </div>
  </body>
</html>
