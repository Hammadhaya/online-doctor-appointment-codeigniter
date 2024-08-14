<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from shreethemes.in/doctris/layouts/admin/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 11:25:37 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Doctris - Doctor Appointment Booking System</title>
    <?php include 'includes/head.php' ?>
    <style></style>

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
                    <div class="row">
                        <div class="col-xl-9 col-md-6">
                            <h5 class="mb-0">Doctors</h5>

                            <!-- <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                                    </ul>
                                </nav> -->
                        </div><!--end col-->

                        <div class="col-xl-3 col-md-6 mt-4 mt-md-0 text-md-end">
                            <a href="<?= base_url('doctor-page') ?>" class="btn btn-primary">Add New Doctor</a>
                        </div><!--end col-->
                    </div><!--end row-->

                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="table-responsive bg-white shadow rounded">
                                <table class="table mb-0 table-center">
                                    <thead>
                                        <tr>
                                            <th class="border-bottom p-2" style="min-width: 50px;">#</th>
                                            <th class="border-bottom p-2" style="min-width: 100px;">Heading</th>
                                            <th class="border-bottom p-2" style="min-width: 100px;">Description</th>
                                            <th class="border-bottom p-2">Image</th>
                                            <!-- <th class="border-bottom p-2">Gender</th> -->
                                            <!-- <th class="border-bottom p-2">Department</th> -->
                                            <!-- <th class="border-bottom p-2">Bio</th> -->
                                            <!-- <th class="border-bottom p-2">Doctor</th> -->
                                            <!-- <th class="border-bottom p-2" style="min-width: 100px;">Date</th> -->
                                            <!-- <th class="border-bottom p-2">Time</th> -->
                                            <!-- <th class="border-bottom p-2" style="min-width: 100px;">Doctor</th> -->
                                            <!-- <th class="border-bottom p-2">Fees</th> -->
                                            <th class="border-bottom p-2">Action</th>
                                            <!-- <th class="border-bottom p-3" style="min-width: 150px;"></th> -->

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (isset($services)) {
                                            foreach ($services as $item) { ?>
                                                <tr>
                                                    <th class="p-3"><?= $item['sr_id'] ?></th>
                                                    <td class="p-3"> <?= $item['department'] ?></td>
                                                    <td class="p-3"><?= $item['content'] ?></td>
                                                    <td class="p-3"><img src="<?= base_url('uploads/' . $item['image']) ?>" alt="img" class="avatar avatar-md-sm rounded-circle shadow"></td>
                                                    <td> <a href="<?= base_url('srdelete/' . $item['sr_id']) ?>"><i style="font-size:20px;color:red;" class="fa fa-trash" aria-hidden="true"></i></a>
                                                        <a href="<?= base_url('sredit/' . $item['sr_id']) ?>"><i style="font-size:20px;" class="fa fa-pencil-square" aria-hidden="true"></i></a>
                                                    </td>

                                                </tr>
                                        <?php }
                                        } ?>
                            </div>
                        </div>
                    </div>
                    <!--end col-->


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


<!-- Mirrored from shreethemes.in/doctris/layouts/admin/doctors.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 11:25:37 GMT -->

</html>