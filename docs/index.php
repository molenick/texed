<?php

require_once '../includes/lib.php';
  
$status;
$submit_type;
$message = '';

// Determine message
if (isset($_GET['status'])) {
  if(trim($_GET['status']) == 'fail') {
    $message = render_message(MESSAGE_ERROR, 'Please enter a valid email or phone number to signup. Phone numbers should be numbers only, no letters or special characters. :)');
  }
  elseif (trim($_GET['status']) == 'success') {
    $message = render_message(MESSAGE_NOTICE, 'Good job, you are now signed up. :)');
  }
  elseif (trim($_GET['status']) == 'unsubscribe') {
    $message = render_message(MESSAGE_NOTICE, 'You\'ve been removed from the ' . $conf['app_name'] . ' list. :)');
  }
}

// Determine submit-type.  Only accept one.
if (isset($_GET['phone-submit'])) {
  $submit_type = 'phone';
  $phone = $_GET['phone'];
  echo 'LENGTH: ' . strlen(trim($phone));
  if (strlen(trim($phone)) < 10) {
    header('Location: index.php?status=fail');
  }
  elseif (!is_numeric($phone)) {
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
    <title><?php echo $conf['app_name']; ?></title>
    <!-- CSS Here -->
    <link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
    <!-- Scripts Here --> 
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/texed.js" type="text/javascript"></script>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <h1><a href="index.php"><?php echo $conf['app_name']; ?></a></h1>
      </header>
      <section id="about">
        <h2>About</h2>
        <?php echo $conf['app_about']; ?>
      </section>
      <section id="signup">
        <h2>Signup</h2>
        <?php if (isset($message)) { echo $message; } ?>
        <div id="help-text">
          Please enter your phone number or email address to subscribe:
        </div>
        <div id="signup-type"></div>
        <form id="signup-phone">
          <p>Enter your <strong>phone number</strong> (including area code) as well as your <strong>service provider</strong>:</p>
          <input name="phone" type="text" placeholder="Phone Number" required />
          <select name="provider" required>
            <option value="message.alltel.com">Alltel</option>
            <option value="txt.att.net">AT&T</option>
            <option value="myboostmobile.com">Boost Mobile</option>
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
          <p>Enter your <strong>email address</strong>:</p>
          <input name="email" type="text" placeholder="Email Address" required />
          <input name="email-submit" type="submit" value="Submit"/>
        </form>
      </section>
      </section>
      <section id="privacy-policy">
        <h2>Privacy Policy</h2>
        <?php echo $conf['app_policy']; ?>
      </section>
      <section id="unsubscribe">
        <a href="unsubscribe.php">
          <div id="unsubscribe-box">Unsubscribe</div>
        </a>
    </div>
  </body>
</html>
