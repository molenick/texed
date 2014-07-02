<?php
  error_reporting(E_ALL);
  ini_set('display_errors', TRUE);
  ini_set('display_startup_errors', TRUE);
  require_once 'includes/settings.php';
  require_once 'includes/lib.php';
  
  $status;
  $submit_type;
  $message = '';
  
  print ($_GET['status']);
  // Detemine state of app:
  
  // Determine message
  if (isset($_GET['status'])) {
    if(trim($_GET['status']) == 'fail') {
      $message = render_message(MESSAGE_ERROR, 'Please enter a valid email or phone number to signup. :)');
    }
    elseif (trim($_GET['status']) == 'success') {
      $message = render_message(MESSAGE_NOTICE, 'Good job, you are now signed up. :)');
    }
  }
  
  // Determine submit-type.  Only accept one.
  if (isset($_GET['phone-submit'])) {
    $submit_type = 'phone';
  }
  elseif (isset($_GET['email-submit'])) {
    $submit_type = 'email';
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
      <h1>Truisms</h1>
      Jenny Holzer's Truisms delivered via SMS.
    </header>
    <section id="body">
      <?php if (isset($message)) { echo $message; } ?>
      <div id="help-text">
        Please submit a phone number or email address to subscribe:
      </div>

      <div id="signup-type"></div>
      <form id="signup-phone">
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
        <input name="email" type="text" placeholder="Email Address" required />
        <input name="email-submit" type="submit" value="Submit"/>
      </form>
    </section>
  </body>
</html>
