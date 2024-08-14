
<!doctype html>
<html lang="en" dir="ltr">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/admin/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 11:25:35 GMT -->
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

        <div class="page-wrapper doctris-theme toggled">
            <!-- sidebar-wrapper -->
            <?php include 'includes/sidebar.php'?>
            <!-- sidebar-wrapper  -->
            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-light">
            <?php include 'includes/aheader.php' ?>

                <div class="container-fluid">
                    <div class="layout-specing">
                        <div class="row">
                            <div class="col-xl-9 col-lg-6 col-md-4">
                                <h5 class="mb-0">Appointments</h5>
                                <!-- <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                        <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                                    </ul>
                                </nav> -->
                            </div><!--end col-->

                            <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
                                <div class="justify-content-md-end">
                                    <form>
                                        <div class="row justify-content-between align-items-center">
                                            <!-- <div class="col-sm-12 col-md-5">
                                                <div class="mb-0 position-relative">
                                                    <select class="form-select form-control">
                                                        <option value="EY">Today</option>
                                                        <option value="GY">Tomorrow</option>
                                                        <option value="PS">Yesterday</option>
                                                    </select>
                                                </div>
                                            </div>end col -->
                                            
                                            <div class="col-sm-12 col-md-7 mt-4 mt-sm-0">
                                                <div class="d-grid">
                                                    <!-- <a href="" class="btn btn-primary" style="width:175px;" data-bs-toggle="modal" data-bs-target="#appointmentform">Add Appointment</a> -->
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                        
                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="table-responsive bg-white shadow rounded">
                                    <table class="table mb-0 table-center">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom p-2" style="min-width: 50px;">#</th>
                                                <th class="border-bottom p-2" style="min-width: 100px;">Name</th>
                                                <th class="border-bottom p-2" style="min-width: 100px;">Email</th>
                                                <th class="border-bottom p-2">Age</th>
                                                <th class="border-bottom p-2">Gender</th>
                                                <th class="border-bottom p-2">Department</th>
                                                <th class="border-bottom p-2" style="min-width: 100px;">Date</th>
                                                <th class="border-bottom p-2">Time</th>
                                                <th class="border-bottom p-2" style="min-width: 100px;">Doctor</th>
                                                <th class="border-bottom p-2">Fees</th>
                                                <th class="border-bottom p-2">Status</th>
                                                <!-- <th class="border-bottom p-2">Action</th> -->
                                                <!-- <th class="border-bottom p-3" style="min-width: 150px;"></th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if(@$appointments)
                        { 
                            foreach($appointments as $item)
                            { ?>
                                            <tr>
                                                <th class="p-3"><?=$item['ap_id']?></th>
                                                <!-- <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                        
                                                            <img src="<?=base_url()?>assets/images/client/01.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="" style="width:100px;height:100px;">
                                                            <span class="ms-2"> <?=$item['fname'].''.$item['lname']?></span>
                                                        </div>
                                                    </a>
                                                </td> -->
                                                <td class="p-3">  <?=$item['name']?></td>
                                                <td class="p-3">  <?=$item['cnic']?></td>
                                                <td class="p-3"> <?=$item['age']?></td>
                                                <td class="p-3"><?=$item['gender']?></td>
                                                <td class="p-3"><?=$item['department']?></td>
                                                <td class="p-3"><?=$item['date']?></td>
                                                <td class="p-3"><?=$item['time']?></td>
                                                <td class="p-3"><?=$item['fname'].' '.$item['lname']?></td>
                                                <!-- <td class="p-3"><img src="<?php echo base_url('uploads/') . $item['image']; ?>" alt="img"class="avatar avatar-md-sm rounded-circle shadow" ></td> -->
                                                <td class="p-3">$<?=$item['fees']?></td>
                                                <?php if($item['status']==1)
                                                {?>
                                                        <td> <a href="#" class="btn "><i style="font-size:20px;color:green;" class="fa fa-thumbs-up" aria-hidden="true"></i></a></td>
                                                <?php } else{ ?>
                                                
                                                
                                                    <td> <a href="<?= base_url('approve-patient/'.$item['ap_id'])?>" class="btn "><i style="font-size:20px;color:red;"  class="fa fa-hourglass-half" aria-hidden="true"></i></a></td>
                                                <?php } ?>
                                            </tr>
                                            <?php } }?>
                                            <!-- <tr>
                                                <th class="p-3">2</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/client/02.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                            <span class="ms-2">Wendy Filson</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">wendy@contact.com</td>
                                                <td class="p-3">28</td>
                                                <td class="p-3">Female</td>
                                                <td class="p-3">Gynecology</td>
                                                <td class="p-3">20th Dec 2020</td>
                                                <td class="p-3">11:00AM</td>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                            <span class="ms-2">Dr. Cristino Murphy</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">$50/Patient</td>
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <th class="p-3">3</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                            <span class="ms-2">Faye Bridger</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">faye@contact.com</td>
                                                <td class="p-3">28</td>
                                                <td class="p-3">Female</td>
                                                <td class="p-3">Psychotherapy</td>
                                                <td class="p-3">20th Dec 2020</td>
                                                <td class="p-3">11:00AM</td>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/doctors/03.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                            <span class="ms-2">Dr. Alia Reddy</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">$50/Patient</td>
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <th class="p-3">4</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/client/04.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                            <span class="ms-2">Ronald Curtis</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">ronald@contact.com</td>
                                                <td class="p-3">25</td>
                                                <td class="p-3">Male</td>
                                                <td class="p-3">Orthopedic</td>
                                                <td class="p-3">20th Dec 2020</td>
                                                <td class="p-3">11:00AM</td>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/doctors/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                            <span class="ms-2">Dr. Toni Kovar</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">$50/Patient</td>
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <th class="p-3">5</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/client/05.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                            <span class="ms-2">Melissa Hibner</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">melissa@contact.com</td>
                                                <td class="p-3">28</td>
                                                <td class="p-3">Female</td>
                                                <td class="p-3">Dental</td>
                                                <td class="p-3">20th Dec 2020</td>
                                                <td class="p-3">11:00AM</td>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/doctors/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                            <span class="ms-2">Dr. Jessica McFarlane</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">$50/Patient</td>
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <th class="p-3">6</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/client/06.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                            <span class="ms-2">Randall Case</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">randall@contact.com</td>
                                                <td class="p-3">25</td>
                                                <td class="p-3">Male</td>
                                                <td class="p-3">Orthopedic</td>
                                                <td class="p-3">20th Dec 2020</td>
                                                <td class="p-3">11:00AM</td>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/doctors/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                            <span class="ms-2">Dr. Toni Kovar</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">$50/Patient</td>
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <th class="p-3">7</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/client/07.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                            <span class="ms-2">Jerry Morena</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">jerry@contact.com</td>
                                                <td class="p-3">25</td>
                                                <td class="p-3">Male</td>
                                                <td class="p-3">Dentist</td>
                                                <td class="p-3">20th Dec 2020</td>
                                                <td class="p-3">11:00AM</td>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/doctors/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                            <span class="ms-2">Dr. Jessica McFarlane</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">$50/Patient</td>
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <th class="p-3">8</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/client/08.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                            <span class="ms-2">Lester McNally</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">jessica@contact.com</td>
                                                <td class="p-3">25</td>
                                                <td class="p-3">Male</td>
                                                <td class="p-3">Gastrology</td>
                                                <td class="p-3">20th Dec 2020</td>
                                                <td class="p-3">11:00AM</td>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/doctors/06.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                            <span class="ms-2">Dr. Elsie Sherman</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">$50/Patient</td>
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <th class="p-3">9</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                            <span class="ms-2">Christopher Burrell</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">christopher@contact.com</td>
                                                <td class="p-3">28</td>
                                                <td class="p-3">Female</td>
                                                <td class="p-3">Urology</td>
                                                <td class="p-3">20th Dec 2020</td>
                                                <td class="p-3">11:00AM</td>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/doctors/07.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                            <span class="ms-2">Dr. Bertha Magers</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">$50/Patient</td>
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <th class="p-3">10</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/client/10.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                            <span class="ms-2">Mary Skeens</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">mary@contact.com</td>
                                                <td class="p-3">28</td>
                                                <td class="p-3">Female</td>
                                                <td class="p-3">Neurology</td>
                                                <td class="p-3">20th Dec 2020</td>
                                                <td class="p-3">11:00AM</td>
                                                <td class="p-3">
                                                    <a href="#" class="text-dark">
                                                        <div class="d-flex align-items-center">
                                                            <img src="<?=base_url()?>assets/images/doctors/08.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                            <span class="ms-2">Dr. Louis Batey</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="p-3">$50/Patient</td>
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-primary" data-bs-toggle="modal" data-bs-target="#viewappointment"><i class="uil uil-eye"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success" data-bs-toggle="modal" data-bs-target="#acceptappointment"><i class="uil uil-check-circle"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger" data-bs-toggle="modal" data-bs-target="#cancelappointment"><i class="uil uil-times-circle"></i></a>
                                                </td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end row-->

                        <div class="row text-center">
                            <!-- PAGINATION START -->
                            <div class="col-12 mt-4">
                                <div class="d-md-flex align-items-center text-center justify-content-between">
                                    <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                                    <ul class="pagination justify-content-center mb-0 mt-3 mt-sm-0">
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a></li>
                                    </ul>
                                </div>
                            </div><!--end col-->
                            <!-- PAGINATION END -->
                        </div><!--end row-->
                    </div>
                </div><!--end container-->

                <!-- Footer Start -->
                <footer class="bg-footer-color shadow py-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-sm-start text-center">
                                    <p class="mb-0 text-muted"><script>document.write(new Date().getFullYear())</script> © Doctris. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
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
        <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src="<?=base_url()?>assets/images/logo-dark.png" height="22" class="light-version" alt="">
                    <img src="<?=base_url()?>assets/images/logo-light.png" height="22" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4 px-md-5">
                <div class="row">
                    <div class="col-12">
                        <!-- Style switcher -->
                        <div id="style-switcher">
                            <div>
                                <ul class="text-center style-switcher list-unstyled mb-0">
                                    <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="<?=base_url()?>assets/images/layouts/light-dash-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="<?=base_url()?>assets/images/layouts/light-dash.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="<?=base_url()?>assets/images/layouts/dark-dash-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="<?=base_url()?>assets/images/layouts/dark-dash.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="<?=base_url()?>assets/images/layouts/dark-dash.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Dark Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="<?=base_url()?>assets/images/layouts/light-dash.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Light Version</span></a></li>
                                    <li class="d-grid"><a href="https://shreethemes.in/doctris/layouts/landing/index.html" target="_blank" class="mt-4"><img src="<?=base_url()?>assets/images/layouts/landing-light.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Landing Page</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end Style switcher -->
                    </div><!--end col-->
                </div><!--end row-->
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon social mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/doctris-template" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank" class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in/" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- Modal start -->
        <!-- Add New Appointment Start -->
        <div class="modal fade" id="appointmentform" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Book an Appointment</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                    <form action="<?=base_url('patient-appointment')?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Patient Name <span class="text-danger">*</span></label>
                                                    <input name="name" id="name" type="text" class="form-control" placeholder="Patient Name :">
                                                </div>
                                            </div><!--end col-->
                                            
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Patient Age <span class="text-danger">*</span></label>
                                                    <input name="age" id="age" type="number" class="form-control" placeholder="Patient Age :">
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Gender <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="gender" >
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Date <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>">

                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Time <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="time" id="time" name="time" value="<?php echo date('H:i'); ?>">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Departments</label>
                                                    <select name="department" class="form-select form-control">
                                                        <option value="Eye Care">Eye Care</option>
                                                        <option value="Gynecologist">Gynecologist</option>
                                                        <option value="Psychotherapist">Psychotherapist</option>
                                                        <option value="Orthopedic">Orthopedic</option>
                                                        <option value="Dentist">Dentist</option>
                                                        <option value="Gastrologist">Gastrologist</option>
                                                        <option value="Urologist">Urologist</option>
                                                        <option value="Neurologist">Neurologist</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->
                                            
                                          <!-- Existing code... -->

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Doctor<span class="text-danger">*</span></label>
                                                        <select name="dr_id" onchange="getvalue(this.value)"  class="form-select form-control">
                                                            <option  value="">Select Doctor</option>
                                                            <?php foreach ($doctors as $item):?>
                                                               
                                                                <option  value="<?=$item['dr_id'];?>"><?= $item['fname'] . ' ' . $item['lname'];?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Fees <span class="text-danger">*</span></label>
                                                    <input name="fees"  id="fees" value="" type="number" class="form-control" placeholder="Your Fees :">
                                                    <!-- <select id="drfees"  class="form-select form-control"> -->
                                                    <!-- <option value="" >select</option> -->
                                                    <!-- <option value=""></option> -->
                                                    </select>
                                                </div> 
                                            </div>
                                                <!-- Rest of the HTML content remains unchanged -->

                                                <!-- Existing code... -->
                                                <!--end col-->
            
                                            <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                            <script>
                                                function getdoctors(){
                                                    // console.log(id);
                                                    // var my_id ='id';
                                                    $.ajax({
                                                        // url:'<?=base_url('Site/sheikh_g')?>',
                                                        url:'http://localhost/ajaxpractise/Site/doc',
                                                        method:'GET',
                                                        // data:{},
                                                        success:function(data){
                                                            var recordtable = $('#doctorlist');
                                                            data = JSON.parse(data);
                                                            var row;
                                                            $.each(data.things, function(index, thing){
                                                            row +='<option value="'+ thing.t_id +'">'+ thing.t_name +'</option>';
                                                            });
                                                            recordtable.append(row);

                                                        }


                                                    });
                                                }
                                            </script> -->

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                                </div> 
                                            </div><!--end col-->
            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Phone <span class="text-danger">*</span></label>
                                                    <input name="phone" id="phone" type="number" class="form-control" placeholder="Your Phone :">
                                                </div> 
                                            </div><!--end col-->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Address <span class="text-danger">*</span></label>
                                                    <input name="address" id="address" type="text" class="form-control" placeholder="Your Address :">
                                                </div> 
                                            </div><!--end col-->
                                           
                                            <!-- <div class="col-md-6">
                                                <div class="mb-3">
                                                <label class="form-label">Image</label>
                                                    <?php if(isset($doctor['image'])){?>
                                                    <img src=" <?php echo base_url('uploads/').$doctor['image']  ?>" height="100px" width="100px" alt="img">
                                                    <?php } ?>
                                                    <input type="hidden" name="old_image" value="<?= (isset($doctor['image']) ? $doctor['image']:'')?>" class="form-control">
                                                    <input class="form-control" type="file" name="image">
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Comments <span class="text-danger">*</span></label>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                                </div>
                                            </div>end col -->
            
                                        

                                            <div class="col-lg-12">
                                                <div class="d-grid">
                                                <br><br>  <button type="submit" class="btn btn-primary">Book An Appointment</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>                    </div>
                </div>
            </div>
        </div>
        <!-- Add New Appointment End -->

        <!-- View Appintment Start -->
        <div class="modal fade" id="viewappointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Appointment Detail</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <div class="d-flex align-items-center">
                            <img src="../assets/images/client/01.jpg" class="avatar avatar-small rounded-pill" alt="">
                            <h5 class="mb-0 ms-3">Howard Tanner</h5>
                        </div>
                        <ul class="list-unstyled mb-0 d-md-flex justify-content-between mt-4">
                            <li>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex">
                                        <h6>Age:</h6>
                                        <p class="text-muted ms-2">25 year old</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6>Gender:</h6>
                                        <p class="text-muted ms-2">Male</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6 class="mb-0">Department:</h6>
                                        <p class="text-muted ms-2 mb-0">Cardiology</p>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <ul class="list-unstyled mb-0">
                                    <li class="d-flex">
                                        <h6>Date:</h6>
                                        <p class="text-muted ms-2">20th Dec 2020</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6>Time:</h6>
                                        <p class="text-muted ms-2">11:00 AM</p>
                                    </li>

                                    <li class="d-flex">
                                        <h6 class="mb-0">Doctor:</h6>
                                        <p class="text-muted ms-2 mb-0">Dr. Calvin Carlo</p>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- View Appintment End -->

        <!-- Accept Appointment Start -->
        <div class="modal fade" id="acceptappointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-success rounded-circle mx-auto" style="height: 95px; width:95px;">
                                <i class="uil uil-check-circle h1 mb-0"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Accept Appointment</h4>
                                <p class="para-desc mx-auto text-muted mb-0">Great doctor if you need your family member to get immediate assistance, emergency treatment.</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-soft-success">Accept</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Accept Appointment End -->

        <!-- Cancel Appointment Start -->
        <div class="modal fade" id="cancelappointment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto" style="height: 95px; width:95px;">
                                <i class="uil uil-times-circle h1 mb-0"></i>
                            </div>
                            <div class="mt-4">
                                <h4>Cancel Appointment</h4>
                                <p class="para-desc mx-auto text-muted mb-0">Great doctor if you need your family member to get immediate assistance, emergency treatment.</p>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-soft-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cancel Appointment End -->
        <!-- Modal end -->
        
        <!-- javascript -->
        <?php include 'includes/jslinks.php'?>
        
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/admin/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 11:25:37 GMT -->
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function getvalue(id)
    {
        console.log(id);
        $.ajax ({
            type:'post',
            dataType:'html',
            cache:false,
            url:'http://localhost/online-doctor-appointment/Site/getfees',
            data:{drid:id},
            success:function(data){
                // console.log(data); 
                $('#fees').val(data);
            }
        });
    }
</script>