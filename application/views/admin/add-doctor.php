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
                        <h5 class="mb-0">Add New Doctor</h5>

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

                                <form action="<?= base_url('add-doctor') ?>" method="post" enctype="multipart/form-data" class="mt-4">
                                    <input type="hidden" name="dr_id" value="<?= (isset($doctor['dr_id']) ? $doctor['dr_id'] : '') ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">First Name <span class="text-danger">*</span></label>
                                                <input name="fname" id="name" type="text" value="<?= (isset($doctor['fname']) ? $doctor['fname'] :  set_value('fname')) ?>"   class="form-control " placeholder="First Name :" >
                                                <span class="text-danger"><?= form_error('fname') ?></span>
                                            
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Last Name <span class="text-danger">*</span></label>
                                                <input name="lname" id="name2" type="text" value="<?= (isset($doctor['lname']) ? $doctor['lname'] :  set_value('lname')) ?>"   class="form-control " placeholder="Last Name :" >
                                                <span class="text-danger"><?= form_error('lname') ?></span>
                                           
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <input name="email" id="email" type="email" value="<?= (isset($doctor['email']) ? $doctor['email'] :  set_value('email')) ?>"  class="form-control " placeholder="Your email :">
                                                <span class="text-danger"><?= form_error('email') ?></span>
                                            
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Phone no. <span class="text-danger">*</span></label>
                                                <input name="phone" id="phone" type="text" value="<?= (isset($doctor['phone']) ? $doctor['phone'] :  set_value('phone')) ?>"   class="form-control " placeholder="Phone no. :" >
                                                <span class="text-danger"><?= form_error('phone') ?></span>
                                            
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Departments <span class="text-danger">*</span></label>
                                                <select name="department" id="department"  class="form-select form-control  " >
                                                     <option value=" " >Select</option>
                                                       <?php if(isset($services))
                                                       {
                                                            foreach ($services as $item) 
                                                            { ?>
                                                                <option value="<?= $item['department'] ?>"<?=  ($item['department'] == @$doctor['department']) ? 'selected' : (isset($item['department']) ? $item['department'] :  set_value('department')) ?>><?= $item['department'] ?></option>
                                                              <?php
                                                            } 
                                                        } ?>
                                                </select>
                                                <span class="text-danger"><?= form_error('department') ?></span>
                                           
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Gender <span class="text-danger">*</span></label>
                                                <select name="gender" class="form-select form-control  " >
                                                    <option value="Male" <?= (isset($result['gender']) == 'Male') ? 'selected' : (set_value('gender') == 'Male') ?>>Male</option>
                                                    <option value="Female" <?= (isset($result['gender']) == 'Female') ? 'selected' : (set_value('gender') == 'Female') ?>>Female</option>
                                                    <span class="text-danger"><?= form_error('gender') ?></span>
                                                
                                                </select>
                                            </div>
                                        </div><!--end col-->

                                        <!-- <div class="col-md-6">
                                                <div class="mb-3">
                                                <label class="form-label">Image</label>
                                                    <?php if (isset($doctor['image'])) { ?>
                                                    <img src=" <?php echo base_url('uploads/') . $doctor['image']  ?>" height="100px" width="100px" alt="img">
                                                    <?php } ?>
                                                    <input type="hidden" name="old_image" value="<?= (isset($doctor['image']) ? $doctor['image'] : '') ?>" class="form-control">
                                                    <input class="form-control" type="file" name="image">
                                                </div>
                                            </div>   -->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Fees <span class="text-danger">*</span></label>
                                                <input type="text" name="fees" id="fees" value="<?= (isset($doctor['fees']) ? $doctor['fees'] :  set_value('fees')) ?>" rows="3" class="form-control " placeholder="Fees :"  >
                                                <span class="text-danger"><?= form_error('fees') ?></span>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Address <span class="text-danger">*</span></label>
                                              
                                                <input type="text" name="address" id="address" value="<?= (isset($doctor['address']) ? $doctor['address'] :  set_value('address')) ?>" rows="3" class="form-control " placeholder="Enter Address :" >
                                                <span class="text-danger"><?= form_error('address') ?></span>
                                           
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Start Time <span class="text-danger">*</span></label>
                                                <input  type="text" name="stime" id="stime" value="<?= (isset($doctor['stime']) ? $doctor['stime'] :  set_value('stime')) ?>" rows="3" class="form-control " placeholder="Enter Time :" >
                                                <span class="text-danger"><?= form_error('stime') ?></span>
                                           
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">End Time <span class="text-danger">*</span></label>
                                                <input type="text" name="etime" id="etime" value="<?= (isset($doctor['etime']) ? $doctor['etime'] :  set_value('etime')) ?>" rows="3" class="form-control " placeholder="Enter Time :" >
                                                <span class="text-danger"><?= form_error('etime') ?></span>
                                           
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Day <span class="text-danger">*</span></label>
                                                <input type="text" name="day" id="day" value="<?= (isset($doctor['day']) ? $doctor['day'] :  set_value('day')) ?>" rows="3" class="form-control " placeholder="Enter Day :" >
                                                <span class="text-danger"><?= form_error('day') ?></span>
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Image <span class="text-danger">*</span></label>
                                                <?php if (isset($doctor['image'])) { ?>
                                                    <img src=" <?php echo base_url('uploads/') . $doctor['image']  ?>" height="100px" width="100px" alt="img">
                                                <?php } ?>
                                                <!-- <input type="hidden" name="old_image" value="<?= (isset($doctor['image']) ? $doctor['image'] : '') ?>" class="form-control"> -->
                                                <input class="form-control " type="file" name="image" value="<?=set_value('image')?>" >
                                                <span class="text-danger"><?= form_error('image') ?></span>
                                            
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Your Bio Here <span class="text-danger">*</span></label>
                                                <textarea  name="bio" id="bio"" rows="3" class="form-control " placeholder="Bio :" ><?= (isset($doctor['bio']) ? $doctor['bio'] :  set_value('bio')) ?></textarea>
                                                <span class="text-danger"><?= form_error('bio') ?></span>
                                           
                                            </div>
                                        </div>
                                       
                                    </div><!--end row-->

                                    <button type="submit" class="btn btn-primary">Add Doctor</button>
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
