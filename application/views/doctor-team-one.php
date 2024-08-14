<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-team-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:20 GMT -->

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

    <!-- Navbar STart -->
    <?php include 'includes/header.php' ?>
    <!-- Navbar End -->

    <!-- Start Hero -->
    <section class="bg-half-150 bg-light d-table w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="sub-title mb-4">Doctors team</h3>
                        <p class="para-desc mx-auto text-muted">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>

                        <nav aria-label="breadcrumb" class="d-inline-block mt-3">
                            <ul class="breadcrumb bg-transparent mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                                <li class="breadcrumb-item"><a href="#">Doctors</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Team one</li>
                            </ul>
                        </nav>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row">
                <?php if (isset($doctor)) {
                    foreach ($doctor as $item) { ?>

                        <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2">
                            <div class="card team border-0 rounded shadow overflow-hidden">
                                <div class="team-img position-relative">
                                    <img src="<?php echo base_url('uploads/') . $item['image'] ?>" class="img-fluid" alt="" style="width:261px; height:250px;">
                                    <ul class="list-unstyled team-social mb-0">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content text-center">
                                    <a href="<?= base_url('doctor-team-one') ?>" class="title text-dark h5 d-block mb-0"><?= $item['fname'] . ' ' . $item['lname'] ?></a>
                                    <small class="text-muted speciality"><?= $item['department'] ?></small>
                                </div>
                            </div>
                        </div><!--end col-->
                <?php }
                } ?>







            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start -->
    <?php include 'includes/footer.php' ?>
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
    <?php include 'includes/jslinks.php' ?>

</body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-team-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:20 GMT -->

</html>