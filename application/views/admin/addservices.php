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
                        <h5 class="mb-0">Add New Service</h5>

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

                                <form  action="<?= base_url('add-services') ?>" method="post" enctype="multipart/form-data" class="mt-4">
                                    <input type="hidden" name="sr_id" value="<?= (isset($services['sr_id']) ? $services['sr_id'] : '') ?>">
                                    <div class="row">




                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Services <span class="text-danger">*</span></label>
                                                <input name="department" id="department" type="text" value="<?= (isset($services['department']) ? $services['department'] : set_value('department')) ?>" class="form-control" placeholder="Enter service" >
                                                <span class="text-danger"><?= form_error('department') ?></span>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Image <span class="text-danger">*</span></label>
                                                <?php if (isset($services['image'])) { ?>
                                                    <img src=" <?php echo base_url('uploads/') . $services['image']  ?>" height="100px" width="100px" alt="img">
                                                <?php } ?>
                                                <!-- <input type="hidden" name="old_image" value="<?= (isset($services['image']) ? $services['image'] : '') ?>" class="form-control"> -->
                                                <input class="form-control" type="file" name="image" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Services Description <span class="text-danger">*</span></label>
                                                <textarea name="content" id="content"  rows="3" class="form-control" placeholder="Content :" ><?= (isset($services['content']) ? $services['content'] : set_value('content')) ?></textarea>
                                                <span class="text-danger"><?= form_error('content') ?></span>
                                            </div>
                                        </div>
                                    </div><!--end row-->

                                   
                                    <button type="submit"  class="btn btn-primary">Add Service</button>
                                </form>
                            </div>
                        </div><!--end col-->

                       
                    </div><!--end row-->
                </div>
            </div><!--end container-->

            <!-- Footer Start -->
            <footer class="bg-footer-color shadow py-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-sm-start text-center">
                                <p class="mb-0 text-muted">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> © Doctris. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
                                </p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </footer><!--end footer-->
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
