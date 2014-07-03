<?php

require_once '../includes/lib.php';
  
$status;
$submit_type;
$message = '';

// Determine message
if (isset($_GET['status'])) {
  if(trim($_GET['status']) == 'fail') {
    $message = render_message(MESSAGE_ERROR, 'Please enter a valid email or phone number to signup. :)');
  }
  elseif (trim($_GET['status']) == 'success') {
    $message = render_message(MESSAGE_NOTICE, 'Good job, you are now signed up. :)');
  }
  elseif (trim($_GET['status']) == 'unsubscribe') {
    $message = render_message(MESSAGE_NOTICE, 'You\'ve been removed from the truisms list. :)');
  }
}
  
// Determine submit-type.  Only accept one.
if (isset($_GET['phone-submit'])) {
  $submit_type = 'phone';
  //save_contact($_GET['phone'], $submit_type);
  $phone = $_GET['phone'];
  echo 'LENGTH: ' . strlen(trim($phone));
  if (strlen(trim($phone)) < 10) {
    header('Location: index.php?status=fail');
  }
  else {
    $provider = $_GET['provider'];
    $contact = $phone . '@' . $provider;
    save_contact($contact, $submit_type);
  }
}
elseif (isset($_GET['email-submit'])) {
  $submit_type = 'email';
  save_contact($_GET['email'], $submit_type);
}
?>
  
<!DOCTYPE html>
<html>
  <head>
    <title>TRUISMS</title>

    <!-- Scripts Here --> 
    <script src="lib/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/truisms.js" type="text/javascript"></script>
  </head>
  <body>
    <header>
      <h1><a href="index.php">Truisms</a></h1>
      Jenny Holzer's Truisms delivered via SMS or Email.
    </header>
    <section id="body">
      <?php if (isset($message)) { echo $message; } ?>
      <div id="help-text">
        Please submit a phone number or email address to subscribe:
      </div>

      <div id="signup-type"></div>
      <form id="signup-phone">
        Enter your phone number, including area code:<br />
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
      <form id="signup-email">
        Enter your email address:<br />
        <input name="email" type="text" placeholder="Email Address" required />
        <input name="email-submit" type="submit" value="Submit"/>
      </form>
    </section>
    <section id="unsubscribe">
      <a href="unsubscribe.php">Unsubscribe</a>
    </section>
    <section id="privacy-policy">
      <h2>Privacy Policy</h2>
      This site stores your supplied email and/or phone information to send you messages. This information is not shared with any third parties.
    </section>
  </body>
</html>
