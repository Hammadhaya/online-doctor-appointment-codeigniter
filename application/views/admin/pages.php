<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from shreethemes.in/doctris/layouts/admin/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 11:25:37 GMT -->

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

    <div class="page-wrapper doctris-theme toggled">
        <!-- sidebar-wrapper -->
        <?php include 'includes/sidebar.php' ?>
        <!-- sidebar-wrapper  -->
        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <?php include 'includes/aheader.php' ?>

            <div class="container-fluid">
                <div class="layout-specing">
                    <div class="d-md-flex justify-content-between">
                        <h5 class="mb-0">Add New Page</h5>

                        <!-- <nav aria-label="breadcrumb" class="d-inline-block mt-4 mt-sm-0">
                                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                                    <li class="breadcrumb-item"><a href="doctors.html">Doctors</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Doctor</li>
                                </ul>
                            </nav> -->
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mt-4">
                            <div class="card border-0 p-4 rounded shadow">
                                <!-- <div class="row align-items-center">
                                        <div class="col-lg-2 col-md-4">
                                            <img src="<?= base_url() ?>assets/images/doctors/01.jpg" class="avatar avatar-md-md rounded-pill shadow mx-auto d-block" alt="">
                                        </div>
            
                                        <div class="col-lg-5 col-md-8 text-center text-md-start mt-4 mt-sm-0">
                                            <h5 class="">Upload your picture</h5>
                                            <p class="text-muted mb-0">For best results, use an image at least 600px by 600px in either .jpg or .png format</p>
                                        </div>
            
                                        <div class="col-lg-5 col-md-12 text-lg-end text-center mt-4 mt-lg-0">
                                            <a href="#" class="btn btn-primary">Upload</a>
                                            <a href="#" class="btn btn-soft-primary ms-2">Remove</a>
                                        </div>
                                    
                                    </div> -->
                                <!--end row-->

                                <form action="<?= base_url('add-page') ?>" method="post" enctype="multipart/form-data" class="mt-4">
                                    <input type="hidden" name="pg_id" value="<?= (isset($pages['pg_id']) ? $pages['pg_id'] : '') ?>">
                                    <div class="row">
                                        <div class="col-md-6 " >
                                            <div class="mb-3">
                                                <label class="form-label">Page Name:</label>
                                                <input name="pg_name" id="pg_name" type="text" value="<?= (isset($pages['pg_name']) ? $pages['pg_name'] : set_value('pg_name')) ?>" class="form-control " placeholder="Page Name " >
                                                <!-- <input name="pg_name" id="pg_name" type="text" value="<?= set_value('pg_name') ?>" class="form-control " placeholder="Page Name " > -->
                                                <span class="text-danger"><?= form_error('pg_name') ?></span>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6 ">
                                            <div class="mb-3">
                                                <label class="form-label ">Slug:</label>
                                                <input name="slug" id="slug" type="text" value="<?= (isset($pages['slug']) ? $pages['slug'] : set_value('slug')) ?>" class="form-control " placeholder="Enter Slug" >
                                                <!-- <input name="slug" id="slug" type="text" value="<?= set_value('slug') ?>" class="form-control " placeholder="Enter Slug" > -->
                                               <span class="text-danger"><?= form_error('slug') ?></span> 
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                         <button type="submit" class="btn btn-primary">Add Page</button>

                                         </div>


                                        

                                </form>
                            </div>
                        </div><!--end col-->

                        <!-- <div class="col-lg-4 mt-4"> -->
                        <!-- <div class="card rounded border-0 shadow">
                                    <div class="p-4 border-bottom">
                                        <h5 class="mb-0">Doctors List</h5>
                                    </div>

                                    <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 690px;">
                                        <li class="d-md-flex align-items-center text-center text-md-start">
                                            <img src="<?= base_url() ?>assets/images/doctors/01.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                                            <div class="ms-md-3 mt-4 mt-sm-0">
                                                <a href="#" class="text-dark h6">Dr. Calvin Carlo</a>
                                                <p class="text-muted my-1">Cardiologist</p>
                                                <p class="text-muted mb-0">3 Years Experienced</p>
                                            </div>
                                        </li> -->

                        <!-- <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                                            <img src="<?= base_url() ?>assets/images/doctors/02.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                                            <div class="ms-md-3 mt-4 mt-sm-0">
                                                <a href="#" class="text-dark h6">Dr. Alex Smith</a>
                                                <p class="text-muted my-1">Dentist</p>
                                                <p class="text-muted mb-0">1 Years Experienced</p>
                                            </div>
                                        </li>

                                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                                            <img src="<?= base_url() ?>assets/images/doctors/03.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                                            <div class="ms-md-3 mt-4 mt-sm-0">
                                                <a href="#" class="text-dark h6">Dr. Cristina Luly</a>
                                                <p class="text-muted my-1">Orthopedic</p>
                                                <p class="text-muted mb-0">5 Years Experienced</p>
                                            </div>
                                        </li>

                                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                                            <img src="<?= base_url() ?>assets/images/doctors/04.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                                            <div class="ms-md-3 mt-4 mt-sm-0">
                                                <a href="#" class="text-dark h6">Dr. Dwayen Maria</a>
                                                <p class="text-muted my-1">Gastrologist</p>
                                                <p class="text-muted mb-0">2 Years Experienced</p>
                                            </div>
                                        </li>

                                        <li class="d-md-flex align-items-center text-center text-md-start mt-4">
                                            <img src="<?= base_url() ?>assets/images/doctors/05.jpg" class="avatar avatar-medium rounded-md shadow" alt="">

                                            <div class="ms-md-3 mt-4 mt-sm-0">
                                                <a href="#" class="text-dark h6">Dr. Jenelia Focia</a>
                                                <p class="text-muted my-1">Psychotherapist</p>
                                                <p class="text-muted mb-0">3 Years Experienced</p>
                                            </div>
                                        </li> -->

                        <!-- <li class="mt-4">
                                            <a href="<?= base_url('doctors') ?>" class="btn btn-primary">All Doctors</a>
                                        </li> -->
                        <!-- </ul> -->
                        <!-- </div> -->
                        <!-- </div> -->
                    </div><!--end row-->
                </div>
            </div><!--end container-->

            <!-- Footer Start -->
          <!--end footer-->
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->

    <!-- Offcanvas Start -->
    <?php include 'includes/jslinks.php' ?>

</body>


<!-- Mirrored from shreethemes.in/doctris/layouts/admin/add-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 11:25:37 GMT -->

</html>
