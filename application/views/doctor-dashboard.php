
<!doctype html>
<html lang="en" dir="ltr">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:14 GMT -->
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
        <header id="topnav" class="defaultscroll sticky">
            <div class="container-fluid">
                <!-- Logo container-->
                <a class="logo" href="index.html">
                    <img src="<?=base_url()?>assets/images/logo-dark.png" height="22" class="logo-light-mode" alt="">
                    <img src="<?=base_url()?>assets/images/logo-light.png" height="22" class="logo-dark-mode" alt="">
                </a>                
                <!-- Logo End -->
        
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
                    <li class="list-inline-item mb-0">
                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div class="btn btn-icon btn-pills btn-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                        </a>
                    </li>

                    <li class="list-inline-item mb-0 ms-1">
                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                            <i class="uil uil-search"></i>
                        </a>
                    </li>

                    <li class="list-inline-item mb-0 ms-1">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?=base_url()?>assets/images/doctors/01.jpg" class="avatar avatar-ex-small rounded-circle" alt=""></button>
                            <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                <a class="dropdown-item d-flex align-items-center text-dark" href="doctor-profile.html">
                                    <img src="<?=base_url()?>assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="flex-1 ms-2">
                                        <span class="d-block mb-1">Calvin Carlo</span>
                                        <small class="text-muted">Orthopedic</small>
                                    </div>
                                </a>
                                <a class="dropdown-item text-dark" href="doctor-dashboard.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>
                                <a class="dropdown-item text-dark" href="doctor-profile-setting.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                <div class="dropdown-divider border-top"></div>
                                <a class="dropdown-item text-dark" href="login.html"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Start Dropdown -->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu nav-left">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="index.html" class="sub-menu-item">Index One</a></li>
                                <li><a href="index-two.html" class="sub-menu-item">Index Two</a></li>
                                <li><a href="index-three.html" class="sub-menu-item">Index Three</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Doctors</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)" class="menu-item"> Dashboard </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="doctor-dashboard.html" class="sub-menu-item">Dashboard</a></li>
                                        <li><a href="doctor-appointment.html" class="sub-menu-item">Appointment</a></li>
                                        <li><a href="patient-list.html" class="sub-menu-item">Patients</a></li>
                                        <li><a href="doctor-schedule.html" class="sub-menu-item">Schedule Timing</a></li>
                                        <li><a href="invoices.html" class="sub-menu-item">Invoices</a></li>
                                        <li><a href="patient-review.html" class="sub-menu-item">Reviews</a></li>
                                        <li><a href="doctor-messages.html" class="sub-menu-item">Messages</a></li>
                                        <li><a href="doctor-profile.html" class="sub-menu-item">Profile</a></li>
                                        <li><a href="doctor-profile-setting.html" class="sub-menu-item">Profile Settings</a></li>
                                        <li><a href="doctor-chat.html" class="sub-menu-item">Chat</a></li>
                                        <li><a href="login.html" class="sub-menu-item">Login</a></li>
                                        <li><a href="signup.html" class="sub-menu-item">Sign Up</a></li>
                                        <li><a href="forgot-password.html" class="sub-menu-item">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li><a href="doctor-team-one.html" class="sub-menu-item">Doctors One</a></li>
                                <li><a href="doctor-team-two.html" class="sub-menu-item">Doctors Two</a></li>
                                <li><a href="doctor-team-three.html" class="sub-menu-item">Doctors Three</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Patients</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="patient-dashboard.html" class="sub-menu-item">Dashboard</a></li>
                                <li><a href="patient-profile.html" class="sub-menu-item">Profile</a></li>
                                <li><a href="booking-appointment.html" class="sub-menu-item">Book Appointment</a></li>
                                <li><a href="patient-invoice.html" class="sub-menu-item">Invoice</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Pharmacy</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="pharmacy.html" class="sub-menu-item">Pharmacy</a></li>
                                <li><a href="pharmacy-shop.html" class="sub-menu-item">Shop</a></li>
                                <li><a href="pharmacy-product-detail.html" class="sub-menu-item">Medicine Detail</a></li>
                                <li><a href="pharmacy-shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                                <li><a href="pharmacy-checkout.html" class="sub-menu-item">Checkout</a></li>
                                <li><a href="pharmacy-account.html" class="sub-menu-item">Account</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="aboutus.html" class="sub-menu-item"> About Us</a></li>
                                <li><a href="departments.html" class="sub-menu-item">Departments</a></li>
                                <li><a href="faqs.html" class="sub-menu-item">FAQs</a></li>
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)" class="menu-item"> Blogs </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs.html" class="sub-menu-item">Blogs</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="terms.html" class="sub-menu-item">Terms & Policy</a></li>
                                <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                <li><a href="error.html" class="sub-menu-item">404 !</a></li>
                                <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="https://shreethemes.in/doctris/layouts/admin/index.html" class="sub-menu-item" target="_blank">Admin</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Start Hero -->
        <section class="bg-dashboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                        <div class="rounded shadow overflow-hidden sticky-bar">
                            <div class="card border-0">
                                <img src="<?=base_url()?>assets/images/doctors/profile-bg.jpg" class="img-fluid" alt="">
                            </div>

                            <div class="text-center avatar-profile margin-nagative mt-n5 position-relative pb-4 border-bottom">
                                <img src="<?=base_url()?>assets/images/doctors/01.jpg" class="rounded-circle shadow-md avatar avatar-md-md" alt="">
                                <h5 class="mt-3 mb-1">Dr. Calvin Carlo</h5>
                                <p class="text-muted mb-0">Orthopedic</p>
                            </div>

                            <ul class="list-unstyled sidebar-nav mb-0">
                                <li class="navbar-item"><a href="doctor-dashboard.html" class="navbar-link"><i class="ri-airplay-line align-middle navbar-icon"></i> Dashboard</a></li>
                                <li class="navbar-item"><a href="doctor-appointment.html" class="navbar-link"><i class="ri-calendar-check-line align-middle navbar-icon"></i> Appointment</a></li>
                                <li class="navbar-item"><a href="doctor-schedule.html" class="navbar-link"><i class="ri-timer-line align-middle navbar-icon"></i> Schedule Timing</a></li>
                                <li class="navbar-item"><a href="invoices.html" class="navbar-link"><i class="ri-pages-line align-middle navbar-icon"></i> Invoices</a></li>
                                <li class="navbar-item"><a href="doctor-messages.html" class="navbar-link"><i class="ri-mail-unread-line align-middle navbar-icon"></i> Messages</a></li>
                                <li class="navbar-item"><a href="doctor-profile.html" class="navbar-link"><i class="ri-user-line align-middle navbar-icon"></i> Profile</a></li>
                                <li class="navbar-item"><a href="doctor-profile-setting.html" class="navbar-link"><i class="ri-user-settings-line align-middle navbar-icon"></i> Profile Settings</a></li>
                                <li class="navbar-item"><a href="patient-list.html" class="navbar-link"><i class="ri-empathize-line align-middle navbar-icon"></i> Patients</a></li>
                                <li class="navbar-item"><a href="patient-review.html" class="navbar-link"><i class="ri-chat-1-line align-middle navbar-icon"></i> Patients Review</a></li>
                                <li class="navbar-item"><a href="doctor-chat.html" class="navbar-link"><i class="ri-chat-voice-line align-middle navbar-icon"></i> Chat</a></li>
                                <li class="navbar-item"><a href="login.html" class="navbar-link"><i class="ri-login-circle-line align-middle navbar-icon"></i> Login</a></li>
                                <li class="navbar-item"><a href="forgot-password.html" class="navbar-link"><i class="ri-device-recover-line align-middle navbar-icon"></i> Forgot Password</a></li>
                            </ul>
                        </div>
                    </div><!--end col-->

                    <div class="col-xl-9 col-lg-8 col-md-7 mt-4 mt-sm-0">
                        <h5 class="mb-0">Dashboard</h5>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6 class="align-items-center mb-0">Appointment <span class="badge rounded-pill bg-soft-primary ms-1">+15%</span></h6>
                                        <p class="mb-0 text-muted">220+ Week</p>
                                    </div>
                                    <div id="chart-1"></div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-3 col-lg-6 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6 class="align-items-center mb-0">Patients <span class="badge rounded-pill bg-soft-success ms-1">+20%</span></h6>
                                        <p class="mb-0 text-muted">220+ Week</p>
                                    </div>
                                    <div id="chart-2"></div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-3 col-lg-6 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6 class="align-items-center mb-0">Urgent <span class="badge rounded-pill bg-soft-warning ms-1">+5%</span></h6>
                                        <p class="mb-0 text-muted">220+ Week</p>
                                    </div>
                                    <div id="chart-3"></div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-3 col-lg-6 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6 class="align-items-center mb-0">Canceled <span class="badge rounded-pill bg-soft-danger ms-1">-5%</span></h6>
                                        <p class="mb-0 text-muted">220+ Week</p>
                                    </div>
                                    <div id="chart-4"></div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 mt-4">
                                <div class="card border-0 shadow rounded">
                                    <div class="d-flex justify-content-between p-4 border-bottom">
                                        <h6 class="mb-0"><i class="uil uil-calender text-primary me-1 h5"></i> Latest Appointment</h6>
                                        <h6 class="text-muted mb-0">55 Patients</h6>
                                    </div>

                                    <ul class="list-unstyled mb-0 p-4">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-inline-flex">
                                                        <img src="<?=base_url()?>assets/images/client/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="text-dark mb-0 d-block">Calvin Carlo</h6>
                                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                        </div>
                                                    </div>
                                                    <i class="uil uil-arrow-right h4 text-dark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="mt-4">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-inline-flex">
                                                        <img src="<?=base_url()?>assets/images/client/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="text-dark mb-0 d-block">Joya Khan</h6>
                                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                        </div>
                                                    </div>
                                                    <i class="uil uil-arrow-right h4 text-dark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="mt-4">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-inline-flex">
                                                        <img src="<?=base_url()?>assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="text-dark mb-0 d-block">Amelia Muli</h6>
                                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                        </div>
                                                    </div>
                                                    <i class="uil uil-arrow-right h4 text-dark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="mt-4">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-inline-flex">
                                                        <img src="<?=base_url()?>assets/images/client/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="text-dark mb-0 d-block">Nik Ronaldo</h6>
                                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                        </div>
                                                    </div>
                                                    <i class="uil uil-arrow-right h4 text-dark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="mt-4">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-inline-flex">
                                                        <img src="<?=base_url()?>assets/images/client/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="text-dark mb-0 d-block">Crista Joseph</h6>
                                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                        </div>
                                                    </div>
                                                    <i class="uil uil-arrow-right h4 text-dark"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-6 mt-4">
                                <div class="card border-0 shadow rounded">
                                    <div class="d-flex justify-content-between p-4 border-bottom">
                                        <h6 class="mb-0"><i class="uil uil-calendar-alt text-primary me-1 h5"></i> Upcoming Appointment</h6>
                                        <h6 class="text-muted mb-0">55 Patients</h6>
                                    </div>

                                    <ul class="list-unstyled mb-0 p-4">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-inline-flex">
                                                        <img src="<?=base_url()?>assets/images/client/06.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="text-dark mb-0 d-block">Cristino Murphy</h6>
                                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                        </div>
                                                    </div>
                                                    <i class="uil uil-arrow-right h4 text-dark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="mt-4">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-inline-flex">
                                                        <img src="<?=base_url()?>assets/images/client/07.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="text-dark mb-0 d-block">Nick Jons</h6>
                                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                        </div>
                                                    </div>
                                                    <i class="uil uil-arrow-right h4 text-dark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="mt-4">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-inline-flex">
                                                        <img src="<?=base_url()?>assets/images/client/08.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="text-dark mb-0 d-block">Alex Dirio</h6>
                                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                        </div>
                                                    </div>
                                                    <i class="uil uil-arrow-right h4 text-dark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="mt-4">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-inline-flex">
                                                        <img src="<?=base_url()?>assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="text-dark mb-0 d-block">Vrunda Koli</h6>
                                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                        </div>
                                                    </div>
                                                    <i class="uil uil-arrow-right h4 text-dark"></i>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="mt-4">
                                            <a href="javascript:void(0)">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-inline-flex">
                                                        <img src="<?=base_url()?>assets/images/client/10.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <div class="ms-3">
                                                            <h6 class="text-dark mb-0 d-block">Aisha Low</h6>
                                                            <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                        </div>
                                                    </div>
                                                    <i class="uil uil-arrow-right h4 text-dark"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-12 mt-4">
                                <div class="card border-0 shadow rounded">
                                    <div class="p-4 border-bottom">
                                        <h6 class="mb-0">Patient's Review</h6>
                                    </div>

                                    <div class="p-4">
                                        <div class="client-review-slider">
                                            <div class="tiny-slide">
                                                <p class="text-muted fst-italic">" It seems that only melodies in order to have a 'ready-made' text to sing with the melody of the originalthe 'Lorem Ipsum', which is said to have originated century. "</p>
                                                
                                                <div class="d-inline-flex align-items-center">
                                                    <img src="<?=base_url()?>assets/images/client/01.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <div class="ms-3">
                                                        <ul class="list-unstyled d-block mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                        <h6 class="text-primary">- Thomas Israel <small class="text-muted">C.E.O</small></h6>
                                                    </div>
                                                </div>
                                            </div><!--end customer testi-->
                                            
                                            <div class="tiny-slide">
                                                <p class="text-muted fst-italic">" The advantage of its writing melodies in order to have a 'ready-made' text to sing with the melody and the to itself or distract the viewer's attention from the layout. "</p>
                                                
                                                <div class="d-inline-flex align-items-center">
                                                    <img src="<?=base_url()?>assets/images/client/02.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <div class="ms-3">
                                                        <ul class="list-unstyled d-block mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                        <h6 class="text-primary">- Carl Oliver <small class="text-muted">P.A</small></h6>
                                                    </div>
                                                </div>
                                            </div><!--end customer testi-->
                                            
                                            <div class="tiny-slide">
                                                <p class="text-muted fst-italic">" There is now an in order to have a 'ready-made' text to sing with the melody alternatives to the classic Lorem Ipsum texts are amusing. "</p>
                                                
                                                <div class="d-inline-flex align-items-center">
                                                    <img src="<?=base_url()?>assets/images/client/03.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <div class="ms-3">
                                                        <ul class="list-unstyled d-block mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                        <h6 class="text-primary">- Barbara McIntosh <small class="text-muted">M.D</small></h6>
                                                    </div>
                                                </div>
                                            </div><!--end customer testi-->
                                            
                                            <div class="tiny-slide">
                                                <p class="text-muted fst-italic">" According to most sources in order to have a 'ready-made' text to sing with the melody the origin of the text by compiling all the instances. "</p>
                                                
                                                <div class="d-inline-flex align-items-center">
                                                    <img src="<?=base_url()?>assets/images/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <div class="ms-3">
                                                        <ul class="list-unstyled d-block mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                        <h6 class="text-primary">- Christa Smith <small class="text-muted">Manager</small></h6>
                                                    </div>
                                                </div>
                                            </div><!--end customer testi-->
                                            
                                            <div class="tiny-slide">
                                                <p class="text-muted fst-italic">" It seems that only in order to have a 'ready-made' text to sing with the melody 'Lorem Ipsum', which is said to have originated 16th century. "</p>
                                                
                                                <div class="d-inline-flex align-items-center">
                                                    <img src="<?=base_url()?>assets/images/client/05.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <div class="ms-3">
                                                        <ul class="list-unstyled d-block mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                        <h6 class="text-primary">- Dean Tolle <small class="text-muted">Developer</small></h6>
                                                    </div>
                                                </div>
                                            </div><!--end customer testi-->
                                            
                                            <div class="tiny-slide">
                                                <p class="text-muted fst-italic">" It seems that only lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody of time certain letters were added or deleted at the text. "</p>
                                                
                                                <div class="d-inline-flex align-items-center">
                                                    <img src="<?=base_url()?>assets/images/client/06.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow my-3" alt="">
                                                    <div class="ms-3">
                                                        <ul class="list-unstyled d-block mb-0">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                        <h6 class="text-primary">- Jill Webb <small class="text-muted">Designer</small></h6>
                                                    </div>
                                                </div>
                                            </div><!--end customer testi-->
                                        </div><!--end carousel-->

                                        <div class="row justify-content-center mt-3">
                                            <div class="col-md col-6 text-center pt-3">
                                                <img src="<?=base_url()?>assets/images/client/amazon.png" class="avatar avatar-client" alt="">
                                            </div><!--end col-->
                        
                                            <div class="col-md col-6 text-center pt-3">
                                                <img src="<?=base_url()?>assets/images/client/google.png" class="avatar avatar-client" alt="">
                                            </div><!--end col-->
                                            
                                            <div class="col-md col-6 text-center pt-3">
                                                <img src="<?=base_url()?>assets/images/client/lenovo.png" class="avatar avatar-client" alt="">
                                            </div><!--end col-->
                                            
                                            <div class="col-md col-6 text-center pt-3">
                                                <img src="<?=base_url()?>assets/images/client/paypal.png" class="avatar avatar-client" alt="">
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-message align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="javascript:void(0)" class="title text-dark h5">New Messages</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="javascript:void(0)" class="link">Read more <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-envelope-star align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="javascript:void(0)" class="title text-dark h5">Latest Proposals</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="javascript:void(0)" class="link">View more <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-hourglass align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="javascript:void(0)" class="title text-dark h5">Package Expiry</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="javascript:void(0)" class="link">Check here <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-3 col-md-6 mt-4">
                                <div class="card features feature-primary text-center border-0 p-4 rounded shadow">
                                    <div class="icon text-center rounded-lg mx-auto">
                                        <i class="uil uil-heart align-middle h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-3">
                                        <a href="javascript:void(0)" class="title text-dark h5">Saved Items</a>
                                        <p class="text-muted my-2">Due to its wide spread use as filler text</p>
                                        <a href="javascript:void(0)" class="link">View items <i class="ri-arrow-right-line align-middle"></i></a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <!-- Footer Start -->
        <footer class="py-4">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-start text-center">
                            <p class="mb-0"><script>document.write(new Date().getFullYear())</script> © Doctris. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0">
                        <ul class="list-unstyled footer-list text-sm-end text-center mb-0">
                            <li class="list-inline-item"><a href="terms.html" class="text-foot me-2">Terms</a></li>
                            <li class="list-inline-item"><a href="privacy.html" class="text-foot me-2">Privacy</a></li>
                            <li class="list-inline-item"><a href="aboutus.html" class="text-foot me-2">About</a></li>
                            <li class="list-inline-item"><a href="contact.html" class="text-foot me-2">Contact</a></li>
                        </ul>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5 rounded-pill text-center bg-primary justify-content-center align-items-center"><i data-feather="arrow-up" class="fea icon-sm"></i></a>
        <!-- Back to top -->

        <!-- Offcanvas Start -->
        <?php include 'includes/jslinks.php'?>
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/doctor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:16 GMT -->
</html>