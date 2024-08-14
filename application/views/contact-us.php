
<!doctype html>
<html lang="en" dir="ltr">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:35 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Doctris - Doctor Appointment Booking System</title>
        <?php include 'includes/head.php'?>

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
        
        <!-- Navbar STart -->
        <?php include 'includes/header.php'?><!--end header-->
        <!-- Navbar End -->

        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100" style="background: url('<?=base_url()?>assets/images/bg/03.jpg');">
            <div class="bg-overlay bg-overlay-dark"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="sub-title mb-4 text-white title-dark">Contact Us</h3>
                            <p class="para-desc mx-auto text-white-50">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        
                            <nav aria-label="breadcrumb" class="d-inline-block mt-3">
                                <ul class="breadcrumb bg-light rounded mb-0 py-1 px-2">
                                    <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </nav>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-color-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- End Hero -->

        <!-- Start -->
        <section class="mt-100 mt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card features feature-primary text-center border-0">
                            <div class="icon text-center rounded-md mx-auto">
                                <i class="uil uil-phone h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <h5>Phone</h5>
                                <p class="text-muted mt-3">Great doctor if you need your family member to get effective assistance</p>
                                <a href="tel:+152534-468-854" class="link">+152 534-468-854</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card features feature-primary text-center border-0">
                            <div class="icon text-center rounded-md mx-auto">
                                <i class="uil uil-envelope h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <h5>Email</h5>
                                <p class="text-muted mt-3">Great doctor if you need your family member to get effective assistance</p>
                                <a href="mailto:contact@example.com" class="link">contact@example.com</a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <div class="card features feature-primary text-center border-0">
                            <div class="icon text-center rounded-md mx-auto">
                                <i class="uil uil-map-marker h3 mb-0"></i>
                            </div>
                            <div class="card-body p-0 mt-3">
                                <h5>Location</h5>
                                <p class="text-muted mt-3">C/54 Northwest Freeway, Suite 558, <br>Houston, USA 485</p>
                                <a href="#" class="link">View on Google map</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="me-lg-5">
                            <img src="<?=base_url()?>assets/images/about/about-2.png" class="img-fluid" alt="">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="custom-form rounded shadow p-4">
                            <h5 class="mb-4">Get in touch!</h5>
                            <form action="<?= base_url('add-inquiry')?>"method="post" >
                              
                                <!-- <input type="hidden" name="dr_id" value="<?= (isset($doctor['dr_id']) ? $doctor['dr_id'] : '') ?>"> -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                            <input name="in_name" id="name" type="text" class="form-control border rounded" placeholder="First Name :">
                                            <span class="text-danger"><?= form_error('in_name') ?></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                            <input name="in_email" id="email" type="email" class="form-control border rounded" placeholder="Your email :">
                                            <span class="text-danger"><?= form_error('in_email') ?></span>
                                        </div> 
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Subject</label>
                                            <input name="in_subject" id="subject" class="form-control border rounded" placeholder="Your subject :">
                                            <span class="text-danger"><?= form_error('in_subject') ?></span>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Comments <span class="text-danger">*</span></label>
                                            <textarea name="in_comments" id="comments" rows="4" class="form-control border rounded" placeholder="Your Message :"></textarea>
                                            <span class="text-danger"><?= form_error('in_comments') ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form>
                        </div><!--end custom-form-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container-fluid mt-100 mt-60">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="card map border-0">
                            <div class="card-body p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <?php include 'includes/footer.php'?><!--end footer-->
        <!-- End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5 rounded-pill text-center bg-primary justify-content-center align-items-center"><i data-feather="arrow-up" class="fea icon-sm"></i></a>
        <!-- Back to top -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop">
            <div class="offcanvas-body d-flex align-items-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <h4>Search now.....</h4>
                                <div class="subcribe-form mt-4">
                                    <form>
                                        <div class="mb-0">
                                            <input type="text" id="help" name="name" class="border rounded-pill" required="" placeholder="Search">
                                            <button type="submit" class="btn btn-pills btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- Offcanvas Start -->
        <?php include 'includes/jslinks.php'?>

        
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:35 GMT -->
</html>