<form action="{{ url('/admin-login') }}" method="post" id="adminform">
<div class="form-group">
                <div id="admin_widget" class="g-recaptcha"></div>
                <span style="display: none; color: red" id="admin_captcha_error">Please Submit Captcha First</span>
</div>
<div class="col-xs-4">
          <input type="button" style="background: #000; border-color: #000000;" value="Sign in"  class="btn btn-primary btn-block btn-flat" onclick="validateAdmin()">
        </div>
        <?php
        function validateAdmin() {
        // alert('clicked');
    var username = $('#name').val();
    var password = $('#password').val();
    var captchResponse = grecaptcha.getResponse(adminWidget);
    var validate = true;
    $('.input_error').css("border-color", "#000");
    if (captchResponse == '') {
      $('#admin_captcha_error').show();
      validate = false;
    }else{
      $('#admin_captcha_error').hide();
    }
    if (username == '') {
      $('#name').css("border-color", "red");
      validate = false;
    }
    if (password == '') {
      $('#password').css("border-color", "red");
      validate = false;
    }
    if (validate == true) {
      $("#adminform").submit();
    // console.log('validate');
    }
  }
  ?>
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script> 