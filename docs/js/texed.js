function texedRenderSignupTypeForm() {
  var html = '';
  html += '<form>';
  html += '<input id="phone-type" type="radio" name="signup-type" value="Phone" checked>Phone';
  html += '<input id="email-type" type="radio" name="signup-type" value="Email">Email';
  html += '</form>';
  return html;
}

$(document).ready(function() {
  $('#signup-email, #unsubscribe-email').hide();
  $('#signup-type, #unsubscribe-type').html(texedRenderSignupTypeForm());
  $('#phone-type, #email-type').change(function() {
    $('#signup-phone').toggle();
    $('#signup-email').toggle();
    $('#unsubscribe-phone').toggle();
    $('#unsubscribe-email').toggle();
  });
});
