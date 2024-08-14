<?php
//  if ($this->session->userdata('tempuser')==true)
// {?>
    
    <!-- Include SweetAlert JS library -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: 'Invalid email or password. Please try again.',
                confirmButtonColor: '#d33',
                confirmButtonText: 'OK'
            });
        });
    </script> -->
<?php
//    $this->session->unset_userdata('tempuser');} 
   ?>

<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:16 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Doctris - Doctor Appointment Booking System</title>
    <?php include 'includes/head.php' ?>
    <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <div class="back-to-home rounded d-none d-sm-block">
        <a href="index.html" class="btn btn-icon btn-primary"><i data-feather="home" class="icons"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="bg-half-150 d-table w-100 bg-light" style="background: url('../assets/images/bg/bg-lines-one.png') center;padding-top:10px !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <?php
                        if ($this->session->userdata('tempuser') == true) 
                       {
                            echo '
                            <div class="alert alert-danger" role="alert">
                                Invalid email or password. Please try again.
                            </div>';
                            $this->session->unset_userdata('tempuser');
                       }
                    ?>
                    <img src="<?=base_url()?>/assets/images/logo-dark.png" height="22" class="mx-auto d-block" alt="">
                    <div class="card login-page shadow mt-4 rounded border-0">
                        <div class="card-body">
                            <h4 class="text-center">Login In</h4>
                            <form name="myform" onsubmit=" return validateadmin()" action="<?= base_url('login-identify') ?>" method="post" class="login-form mt-4">
                                <!-- <form id="adminform"  action="<?= base_url('login-identify') ?>" method="post" class="login-form mt-4"> -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <input id="email" type="email" class="form-control" placeholder="Email" name="email" required>
                                            <span class="text-danger"><?= form_error('email') ?></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password <span class="text-danger">*</span></label>
                                            <input name="password" type="password" id="password" class="form-control" placeholder="Password" required>
                                            <span class="text-danger"><?= form_error('password') ?></span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input align-middle" type="checkbox" value="" id="remember-check">
                                                    <label class="form-check-label" for="remember-check">Remember me</label>
                                                </div>
                                            </div>
                                            <a href="forgot-password.html" class="text-dark h6 mb-0">Forgot password ?</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12" class="form-group">
                                        <div class="mb-3">
                                            <div id="admin_widget" class="g-recaptcha"></div>
                                            <span style="display: none; color: red" id="admin_captcha_error">Please Submit Captcha First</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-0">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Login in</button>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-3 text-center">
                                        <h6 class="text-muted">Or</h6>
                                    </div><!--end col-->


                                    <div class="col-12 text-center">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="<?= base_url('signup-page') ?>" class="text-dark fw-bold">Sign Up</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!---->
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <?php include 'includes/jslinks.php' ?>

</body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:16 GMT -->

</html>
<script>
    var onloadCallback = function() {
        adminWidget = grecaptcha.render('admin_widget', {
            'sitekey': '6LdnEgojAAAAAPPGD1zaxq6CcBwSGggRrlujf8Cc',
            'theme': 'light'
        });
    }

    function validateadmin() {
        console.log('in');
        var email = document.myform.email.value;
        var password = document.myform.password.value;
        var captchResponse = grecaptcha.getResponse(adminWidget);
        //  validate = true;
        if (email == "") {
            alert("email can't be blank");
            //  validate = false;
            return false;
        } else if (password.length < 4) {
            alert("Password must be at least 6 characters long.");
            // validate = false;
            return false;
        } else if (captchResponse == "") {
            alert("First fill recaptcha");
            // validate = false;
            return false;
        }
        //          else if (validate == true) {
        //   $("#adminform").submit();
        // console.log('validate');
        // } 
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script> -->

<!-- var onloadCallback = function() {
       adminWidget = grecaptcha.render('admin_widget', {
                      'sitekey' : '6LdnEgojAAAAAPPGD1zaxq6CcBwSGggRrlujf8Cc',
                      'theme' : 'light'
            });
   }
  function validateAdmin() {
        // alert('clicked');
    var email = $('#email').val();
    var password = $('#password').val();
    var captchResponse = grecaptcha.getResponse(adminWidget);
    var validate = true;
    // $('.input_error').css("border-color", "#000");
    if (captchResponse == '') {
      $('#admin_captcha_error').show();
      validate = false;
    }else{
      $('#admin_captcha_error').hide();
    }
    if (email == '') {
      $('#email').css("border-color", "red");
      validate = false;
    }
    if (password.length<4) {
        alert("Password must be at least 4 characters long."); 
        $('#password').css("border-color", "red");
      validate = false;
    }
    if (validate == true) {
      $("#adminform").submit();
    console.log('validate');
    }
  } -->
<!-- </script> -->
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>