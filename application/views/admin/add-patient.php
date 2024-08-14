<!doctype html>
<html lang="en" dir="ltr">


<!-- Mirrored from shreethemes.in/doctris/layouts/admin/add-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 11:25:39 GMT -->

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
            <div class="top-header">
                <div class="header-bar d-flex justify-content-between border-bottom">
                    <div class="d-flex align-items-center">
                        <a href="#" class="logo-icon">
                            <img src="<?= base_url() ?>assets/images/logo-icon.png" height="30" class="small" alt="">
                            <span class="big">
                                <img src="<?= base_url() ?>assets/images/logo-dark.png" height="22" class="logo-light-mode" alt="">
                                <img src="<?= base_url() ?>assets/images/logo-light.png" height="22" class="logo-dark-mode" alt="">
                            </span>
                        </a>
                        <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary ms-2" href="#">
                            <i class="uil uil-bars"></i>
                        </a>
                        <div class="search-bar p-0 d-none d-lg-block ms-2">
                            <div id="search" class="menu-search mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="form-control border rounded-pill" name="s" id="s" placeholder="Search Keywords...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item mb-0">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url() ?>assets/images/language/american.png" class="avatar avatar-ex-small rounded-circle p-2" alt=""></button>
                                <div class="dropdown-menu dd-menu drop-ups dropdown-menu-end shadow border-0 mt-3 p-2" data-simplebar style="height: 175px;">
                                    <a href="javascript:void(0)" class="d-flex align-items-center">
                                        <img src="<?= base_url() ?>assets/images/language/chinese.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                        <div class="flex-1 text-left ms-2 overflow-hidden">
                                            <small class="text-dark mb-0">Chinese</small>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                        <img src="<?= base_url() ?>assets/images/language/european.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                        <div class="flex-1 text-left ms-2 overflow-hidden">
                                            <small class="text-dark mb-0">European</small>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                        <img src="<?= base_url() ?>assets/images/language/indian.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                        <div class="flex-1 text-left ms-2 overflow-hidden">
                                            <small class="text-dark mb-0">Indian</small>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                        <img src="<?= base_url() ?>assets/images/language/japanese.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                        <div class="flex-1 text-left ms-2 overflow-hidden">
                                            <small class="text-dark mb-0">Japanese</small>
                                        </div>
                                    </a>

                                    <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                        <img src="<?= base_url() ?>assets/images/language/russian.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                        <div class="flex-1 text-left ms-2 overflow-hidden">
                                            <small class="text-dark mb-0">Russian</small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <div class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                            </a>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail" class="fea icon-sm"></i></button>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">4 <span class="visually-hidden">unread mail</span></span>

                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow rounded border-0 mt-3 px-2 py-2" data-simplebar style="height: 320px; width: 300px;">
                                    <a href="#" class="d-flex align-items-center justify-content-between py-2">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="<?= base_url() ?>assets/images/client/02.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Janalia</b> <small class="text-muted fw-normal d-inline-block">1 hour ago</small></small>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="https://shreethemes.in/doctris/layouts/assets/images/client/Codepen.svg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>codepen</b> <small class="text-muted fw-normal d-inline-block">4 hour ago</small></small>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="<?= base_url() ?>assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Cristina</b> <small class="text-muted fw-normal d-inline-block">5 hour ago</small></small>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="https://shreethemes.in/doctris/layouts/assets/images/client/dribbble.svg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Dribbble</b> <small class="text-muted fw-normal d-inline-block">24 hour ago</small></small>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="<?= base_url() ?>assets/images/client/06.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Donald Aghori</b> <small class="text-muted fw-normal d-inline-block">1 day ago</small></small>
                                        </div>
                                    </a>

                                    <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                        <div class="d-inline-flex position-relative overflow-hidden">
                                            <img src="<?= base_url() ?>assets/images/client/07.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                            <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Calvin</b> <small class="text-muted fw-normal d-inline-block">2 day ago</small></small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                    <a class="dropdown-item d-flex align-items-center text-dark" href="profile.html">
                                        <img src="<?= base_url() ?>assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        <div class="flex-1 ms-2">
                                            <span class="d-block mb-1">Calvin Carlo</span>
                                            <small class="text-muted">Orthopedic</small>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-dark" href="index.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>
                                    <a class="dropdown-item text-dark" href="dr-profile.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                    <div class="dropdown-divider border-top"></div>
                                    <a class="dropdown-item text-dark" href="lock-screen.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container-fluid">
                <div class="layout-specing">
                    <div class="d-md-flex justify-content-between">
                        <h5 class="mb-0">Add New Patient</h5>


                    </div>

                    <div class="row">
                        <div class="col-lg-12 mt-4">
                            <div class="card border-0 p-4 rounded shadow">


                                <form  action="<?= base_url('add-patient') ?>" method="post" enctype="multipart/form-data" class="mt-4">
                                    <div class="row">
                                        <input type="hidden" name="pt_id" value="<?= (isset($patient['pt_id']) ? $patient['pt_id'] : '') ?>">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">First Name <span class="text-danger">*</span></label>
                                                    <input name="pt_name" id="pt_name" type="text" value="<?= (isset($patient['pt_name']) ? $patient['pt_name'] : set_value('pt_name')) ?>" class="form-control " placeholder=" Name">
                                                    <span class="text-danger"><?= form_error('pt_name') ?></span>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Age <span class="text-danger">*</span></label>
                                                    <input name="pt_age" id="pt_age" type="number" value="<?= (isset($patient['pt_age']) ? $patient['pt_age'] : set_value('pt_age')) ?>" class="form-control " placeholder="Age :" >
                                                    <span class="text-danger"><?= form_error('pt_age') ?></span>
                                                </div>
                                            </div><!--end col-->
                                          
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                                <select name="pt_gender" class="form-select form-control"  >
                                                    <option value="Male" <?= (isset($patient['pt_gender']) == 'Male') ? 'selected' : set_value('pt_gender') ?>>Male</option>
                                                    <option value="Female" <?= (isset($patient['pt_gender']) == 'Female') ? 'selected' : set_value('pt_gender') ?>>Female</option>
                                                    <span class="text-danger"><?= form_error('pt_gender') ?></span>
                                                </select>
                                            </div>
                                        </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Address <span class="text-danger">*</span></label>
                                                    <input name="pt_address" id="pt_address" type="text" value="<?= (isset($patient['pt_address']) ? $patient['pt_address'] : set_value('pt_address')) ?>" class="form-control" placeholder="Address :"  >
                                                    <span class="text-danger"><?= form_error('pt_address') ?></span>
                                                </div>
                                            </div><!--end col-->

                                            <!-- <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Email</label>
                                                    <input name="pt_email" id="email" type="email" value="<?= (isset($patient['pt_email']) ? $patient['pt_email'] : set_value('pt_email')) ?>" class="form-control" placeholder="Your email :">
                                                </div> 
                                            </div>end colend col -->


                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Departments <span class="text-danger">*</span></label>
                                                    <select name="pt_department" id="pt_department" class="form-select form-control "  >
                                                        <option value=" ">Select</option>
                                                        <?php if(isset($services))
                                                       {
                                                            foreach ($services as $item) 
                                                            { ?>
                                                            <option value="<?= $item['department']; ?>" <?= ($item['department']== @$patient['pt_department']) ? 'selected' : set_value('department') ?> ><?= $item['department'] ?></option>
                                                            <?php
                                                            } 
                                                        } ?>
                                                    </select>
                                                    <span class="text-danger"><?= form_error('pt_department') ?></span>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Phone no. <span class="text-danger">*</span></label>
                                                    <input name="pt_phone" id="phone" type="text" value="<?= (isset($patient['pt_phone']) ? $patient['pt_phone'] : set_value('pt_phone')) ?>" class="form-control " placeholder="Phone no. :"  >
                                                    <span class="text-danger"><?= form_error('pt_phone') ?></span>
                                                </div>
                                            </div><!--end col-->

                                           

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label"> Date :<span class="text-danger">*</span> </label>
                                                    <input class="form-control " type="date" id="date" name="pt_date" value="<?php echo date('Y-m-d'); ?>" >
                                                    <span class="text-danger"><?= form_error('pt_date') ?></span>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Time <span class="text-danger">*</span></label>
                                                    <input class="form-control " type="time" id="pt_time" name="pt_time" value="<?php echo date('H:i'); ?>" >
                                                    <span class="text-danger"><?= form_error('pt_time') ?></span>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Image <span class="text-danger">*</span></label>

                                                    <!-- <input type="hidden" name="old_image" value="<?= (isset($patient['image']) ? $patient['image'] : '') ?>" class="form-control"> -->
                                                    <input class="form-control " type="file" name="image" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <?php if (isset($patient['image'])) { ?>
                                                    <img src=" <?php echo base_url('uploads/') . $patient['image']  ?>" height="100px" width="100px" alt="img">
                                                <?php } ?>
                                            </div>
                                         <div class="col-12">
                                         <button type="submit" class="btn btn-primary">Add Patient</button>

                                         </div>

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


<!-- Mirrored from shreethemes.in/doctris/layouts/admin/add-patient.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 11:25:39 GMT -->

</html>
