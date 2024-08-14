<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:20 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Doctris - Doctor Appointment Booking System</title>
    <?php include 'includes/head.php' ?>

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
    <section class="bg-home d-flex bg-light align-items-center" style="background: url('../assets/images/bg/bg-lines-one.png') center;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-8">
                    <img src="../assets/images/logo-dark.png" height="22" class="mx-auto d-block" alt="">
                    <div class="card login-page shadow mt-4 rounded border-0">
                        <div class="card-body">
                            <h4 class="text-center">Sign Up</h4>
                            <form name="signup" onsubmit=" return validateform()" action="<?= base_url('insert-user') ?>" method="post" class="login-form mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">First name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="First Name" name="fname" required>
                                            <span class="text-danger"><?= form_error('fname') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Last name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
                                            <span class="text-danger"><?= form_error('lname') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                                            <span class="text-danger"><?= form_error('email') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Password <span class="text-danger">*</span></label>
                                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                                            <span class="text-danger"><?= form_error('password') ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input align-middle" type="checkbox" value="" id="accept-tnc-check">
                                                <label class="form-check-label" for="accept-tnc-check">I Accept <a href="#" class="text-primary">Terms And Condition</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Register</button>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 mt-3 text-center">
                                        <h6 class="text-muted">Or</h6>
                                    </div><!--end col-->

                                    <!-- <div class="col-6 mt-3">
                                            <div class="d-grid">
                                                <a href="javascript:void(0)" class="btn btn-soft-primary"><i class="uil uil-facebook"></i> Facebook</a>
                                            </div>
                                        </div>end col -->

                                    <!-- <div class="col-6 mt-3">
                                            <div class="d-grid">
                                                <a href="javascript:void(0)" class="btn btn-soft-primary"><i class="uil uil-google"></i> Google</a>
                                            </div>
                                        </div>end col -->

                                    <div class="mx-auto">
                                        <p class="mb-0 mt-3"><small class="text-dark me-2">Already have an account ?</small> <a href="<?= base_url('login-page') ?>" class="text-dark fw-bold">Login</a></p>
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


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:20 GMT -->

</html>
<script>
    function validateform() {
        var fname = document.signup.fname.value
        var lname = document.signup.lname.value
        var email = document.signup.email.value
        var password = document.signup.password.value
        if (fname = null || fname == "") {
            alert("First name can't be empty");
            return false;
        } else if (lname == null || lname == "") {
            alert("Last name can't be empty")
            return false;
        } else if (email == null || email == "") {
            alert("email can't be empty")
            return false;
        } else if (password.length < 4) {
            alert("Password must be at least 4 characters long.");
            return false;
        }

    }
</script>