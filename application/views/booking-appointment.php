<?php
 if ($this->session->userdata('submit')==true)
{?>
    
    <!-- Include SweetAlert JS library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: "Submitted Successfully!",
                // text: "You clicked the button!",
                icon: "success",
            });
        });
    </script>
<?php
    unset($_SESSION['submit']);} ?>
<!doctype html>
<html lang="en" dir="ltr">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/booking-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:22 GMT -->
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
        <?php include 'includes/header.php'?>
        <header id="topnav" class="navigation sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="index.html">
                        <span class="logo-light-mode">
                            <img src="<?=base_url()?>assets/images/logo-dark.png" class="l-dark" height="22" alt="">
                            <img src="<?=base_url()?>assets/images/logo-light.png" class="l-light" height="22" alt="">
                        </span>
                        <img src="<?=base_url()?>assets/images/logo-light.png" height="22" class="logo-dark-mode" alt="">
                    </a>
                </div>
                <!-- End Logo container-->
        
                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!-- Start Dropdown -->
                <ul class="dropdowns list-inline mb-0">
                   

                    <li class="list-inline-item mb-0 ms-1">
                        <div class="dropdown dropdown-primary">
                            <!-- <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?=base_url()?>assets.//images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                <a class="dropdown-item d-flex align-items-center text-dark" href="doctor-profile.html">
                                    <img src="<?=base_url()?>assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="flex-1 ms-2">
                                        <span class="d-block mb-1">Calvin Carlo</span>
                                        <small class="text-muted">Orthopedic</small>
                                    </div>
                                </a>
                                <a class="dropdown-item text-dark" href="<?=base_url('doctor-dashboard')?>"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>
                                <a class="dropdown-item text-dark" href="doctor-profile-setting.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                <div class="dropdown-divider border-top"></div>
                                <a class="dropdown-item text-dark" href="login.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                            </div> -->
                            <?php if($this->session->userdata('user')!=NULL)
                            { 
                            // return redirect('login-page');?>
                           <a href="<?=base_url('logout-page')?>"><button type="button" class="btn btn-primary">Logout</button></a> 
                           <?php } 
                            else
                            { ?>
                           <a href="<?=base_url('login-page')?>"><button type="button" class="btn btn-primary">Login</button></a> 
                            
                            <!-- <a href="<?=base_url('login-page')?>"><button type="button" class="btn btn-success"><?= $this->session->userdata('user')['fname'].' '.$this->session->userdata('user')['lname']?></button></a>  -->
                            <?php } ?>
                        </div>
                    </li>
                </ul>
                <!-- Start Dropdown -->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-left nav-light">
                        <li class="has-submenu parent-menu-item">
                            <a href="<?=base_url('index-three')?>">Home</a><!--<span class="menu-arrow"></span>-->
                          
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="<?=base_url('doctorthree')?>">Doctors</a>
                           
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Patients</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <!-- <li><a href="patient-dashboard.html" class="sub-menu-item">Dashboard</a></li> -->
                                <!-- <li><a href="<?=base_url('patient-profile') ?>" class="sub-menu-item">Profile</a></li> -->
                                <li><a href="<?=base_url('booking-appointment')?>" class="sub-menu-item">Book Appointment</a></li>
                                <!-- <li><a href="<?=base_url('patient-invoice')?>" class="sub-menu-item">Invoice</a></li> -->
                            </ul>
                        </li>

                        <!-- <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Pharmacy</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?=base_url('pharmacy')?>" class="sub-menu-item">Pharmacy</a></li>
                                <li><a href="<?=base_url('pharmacy-shop')?>" class="sub-menu-item">Shop</a></li>
                                <li><a href="<?=base_url('pharmacy-product-detail')?>" class="sub-menu-item">Medicine Detail</a></li>
                                <li><a href="<?=base_url('pharmacy-shop-cart')?>" class="sub-menu-item">Shop Cart</a></li>
                                <li><a href="<?=base_url('pharmacy-checkout')?>" class="sub-menu-item">Checkout</a></li>
                                <li><a href="<?=base_url('pharmacy-account')?>" class="sub-menu-item">Account</a></li>
                            </ul>
                        </li> -->

                        <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="<?=base_url('pharmacy-aboutus')?>" class="sub-menu-item"> About Us</a></li>
                                <li><a href="departments<?=base_url('pharmacy-departments')?>" class="sub-menu-item">Departments</a></li>
                                <li><a href="<?=base_url('pharmacy-faqs')?>" class="sub-menu-item">FAQs</a></li>
                                <!-- <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)" class="menu-item"> Blogs </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="<?=base_url('pharmacy-blogs')?>" class="sub-menu-item">Blogs</a></li>
                                        <li><a href="<?=base_url('pharmacy-blog-detail')?>" class="sub-menu-item">Blog Details</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="<?=base_url('pharmacy-terms')?>" class="sub-menu-item">Terms & Policy</a></li>
                                <li><a href="<?=base_url('pharmacy-privacy')?>" class="sub-menu-item">Privacy Policy</a></li>
                                <li><a href="<?=base_url('pharmacy-error')?>" class="sub-menu-item">404 !</a></li>
                                <li><a href="<?=base_url('pharmacy-contact')?>" class="sub-menu-item">Contact</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="<?=base_url('admin-index')?>" class="sub-menu-item" target="_blank">Admin</a></li> -->
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100 bg-light">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="sub-title mb-4">Book  appointment</h3>
                            <p class="para-desc mx-auto text-muted">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        
                            <nav aria-label="breadcrumb" class="d-inline-block mt-3">
                                <ul class="breadcrumb bg-transparent mb-0 py-1">
                                    <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
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
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card border-0 shadow rounded overflow-hidden">
                            <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded-0 shadow overflow-hidden bg-light mb-0" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link rounded-0 active" id="clinic-booking" data-bs-toggle="pill" href="#pills-clinic" role="tab" aria-controls="pills-clinic" aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h5 class="fw-medium mb-0">Clinic Appointment</h5>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                                
                                <!-- <li class="nav-item">
                                    <a class="nav-link rounded-0" id="online-booking" data-bs-toggle="pill" href="#pills-online" role="tab" aria-controls="pills-online" aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h5 class="fw-medium mb-0">Online Appointment</h5>
                                        </div>
                                    </a><!--end nav link
                                </li>end nav item -->
                            </ul>
    
                            <div class="tab-content p-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-clinic" role="tabpanel" aria-labelledby="clinic-booking">
                                    <form  action="<?=base_url('patient-appointment')?>" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="ap_id" >    
                                    <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Patient Name <span class="text-danger">*</span></label>
                                                    <input name="name" id="name" type="text" class="form-control" placeholder="Patient Name :" required>
                                                </div>
                                            </div><!--end col-->
                                            
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Patient Age <span class="text-danger">*</span></label>
                                                    <input name="age" id="age" type="number" class="form-control" placeholder="Patient Age :" required>
                                                </div>
                                            </div><!--end col-->

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Gender <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="gender" id="gender" required>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">CNIC Number <span class="text-danger">*</span></label>
                                                    <input name="cnic" id="cnic" type="text" class="form-control" placeholder="Your CNIC :" required>
                                                </div> 
                                            </div><!--end col-->

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Date <span class="text-danger">*</span></label>
                                                    <input class="form-control" type="date" id="date" name="date" value="<?php echo date('Y-m-d'); ?>" required>

                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Time <span class="text-danger">*</span></label>
                                                    
                                                    <!-- <input class="form-control" type="time" id="time" name="time" value="<?php echo date('H:i'); ?>" required> -->
                                                    <!-- <input class="form-control" type="time" id="time" name="time" value="<?=date('h:m '); ?>" required> -->
                                                    <!-- <input class="form-control" type="time" id="time" name="time" value="<?= date('H:i', time() + 5 * 60 * 60); ?>" required> -->
                                                    <input class="form-control" type="time" id="time" name="time" value="<?php echo date('H:i', strtotime('+5 hours')); ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Departments</label>
                                                    <select name="department" id="department" class="form-select form-control" required>
                                                        <option value=" ">Select</option>
                                                        <?php foreach ($services as $item):?>
                                                               
                                                               <option  value="<?= $item['department']?>"><?= $item['department']?></option>
                                                           <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div><!--end col-->
                                            
                                          <!-- Existing code... -->

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Doctor<span class="text-danger">*</span></label>
                                                        <select name="dr_id" id="dr_id" onchange="getvalue(this.value)"  class="form-select form-control" required>
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
                                                    <input name="fees"  id="fees" value="" type="number" class="form-control" placeholder="Your Fees :" required>
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
                                                    <label class="form-label">Your Phone <span class="text-danger">*</span></label>
                                                    <input name="phone" id="phone" type="number" class="form-control" placeholder="Your Phone :" required>
                                                </div> 
                                            </div><!--end col-->
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Address <span class="text-danger">*</span></label>
                                                    <input name="address" id="address" type="text" class="form-control" placeholder="Your Address :" required>
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
            
                                         

                                            <div style="display:flex;justify-content:center;" class="col-lg-12">
                                                <div class="d-grid">
                                                <br>  <button style="width:207px;" type="submit" class="btn btn-primary">Book an Appointment</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                                </div>
    
                                <!-- <div class="tab-pane fade" id="pills-online" role="tabpanel" aria-labelledby="online-booking">
                                    <form >
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Patient Name <span class="text-danger">*</span></label>
                                                    <input name="name" id="name2" type="text" class="form-control" placeholder="Patient Name :">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Departments</label>
                                                    <select class="form-select form-control">
                                                        <option value="EY">Eye Care</option>
                                                        <option value="GY">Gynecologist</option>
                                                        <option value="PS">Psychotherapist</option>
                                                        <option value="OR">Orthopedic</option>
                                                        <option value="DE">Dentist</option>
                                                        <option value="GA">Gastrologist</option>
                                                        <option value="UR">Urologist</option>
                                                        <option value="NE">Neurologist</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Doctor</label>
                                                    <select class="form-select form-control">
                                                        <option value="CA">Dr. Calvin Carlo</option>
                                                        <option value="CR">Dr. Cristino Murphy</option>
                                                        <option value="AL">Dr. Alia Reddy</option>
                                                        <option value="TO">Dr. Toni Kovar</option>
                                                        <option value="JE">Dr. Jessica McFarlane</option>
                                                        <option value="EL">Dr. Elsie Sherman</option>
                                                        <option value="BE">Dr. Bertha Magers</option>
                                                        <option value="LO">Dr. Louis Batey</option>
                                                    </select>
                                                </div>
                                            </div>
            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                    <input name="email" id="email2" type="email" class="form-control" placeholder="Your email :">
                                                </div> 
                                            </div>
            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Your Phone <span class="text-danger">*</span></label>
                                                    <input name="phone" id="phone2" type="tel" class="form-control" placeholder="Your Phone :">
                                                </div> 
                                            </div>
            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label"> Date : </label>
                                                    <input name="date" type="text" class="form-control start" placeholder="Select date :">
                                                </div>
                                            </div>
            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="input-time">Time : </label>
                                                    <input name="time" type="text" class="form-control timepicker" id="input-time" placeholder="03:30 PM">
                                                </div> 
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Comments <span class="text-danger">*</span></label>
                                                    <textarea name="comments" id="comments2" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                                </div>
                                            </div>
            
                                            <div class="col-lg-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">Book An Appointment</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>--> 
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <?php include 'includes/footer.php'?>
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
                                            <button  type=" button " class="btn btn-pills btn-primary">Search</button>
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
        <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src="<?=base_url()?>assets/images/logo-dark.png" height="22" class="light-version" alt="">
                    <img src="<?=base_url()?>assets/images/logo-light.png" height="22" class="dark-version" alt="">
                </h5>
                <button type="submit" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4 px-md-5">
                <div class="row">
                    <div class="col-12">
                        <!-- Style switcher -->
                        <div id="style-switcher">
                            <div>
                                <ul class="text-center style-switcher list-unstyled mb-0">
                                    <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="<?=base_url()?>assets/images/layouts/landing-light-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="<?=base_url()?>assets/images/layouts/landing-light.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="<?=base_url()?>assets/images/layouts/landing-dark-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="<?=base_url()?>assets/images/layouts/landing-dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="<?=base_url()?>assets/images/layouts/landing-dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Dark Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="<?=base_url()?>assets/images/layouts/landing-light.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Light Version</span></a></li>
                                    <li class="d-grid"><a href="https://shreethemes.in/doctris/layouts/admin/index.html" target="_blank" class="mt-4"><img src="<?=base_url()?>assets/images/layouts/light-dash.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Admin Dashboard</span></a></li>
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
        
        <!-- javascript -->
        <?php include 'includes/jslinks.php'?>
        
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/booking-appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:22 GMT -->
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
