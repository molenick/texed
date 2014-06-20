<!DOCTYPE html>
<html>
  <head>
    <title>TRUISMS</title>
  </head>
  <body>
    <header>
      <h1>Truisms</h1>
      Jenny Holzer's Truisms delivered via SMS.
    </header>
    <section id="body">
      <div id="help-text">
        Please submit a phone number or email address to subscribe:
      </div>
<!--
      <form id="signup-type">
        <input type="radio" name="signup-type" value="Phone">Phone
        <input type="radio" name="signup-type" value="Email">Email
      </form>
-->
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
      or
      <form id="signup-email">
        <input name="email" type="text" placeholder="Email Address" required />
        <input name="email-submit" type="submit" value="Submit"/>
      </form>
    </section>
  </body>
</html>
