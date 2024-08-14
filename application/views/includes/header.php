<header id="topnav" class="navigation sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="<?=base_url('/')?>">
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
                    <!-- <li class="list-inline-item mb-0">
                        <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <div class="btn btn-icon btn-pills btn-primary"><i data-feather="settings" class="fea icon-sm"></i></div>
                        </a>
                    </li>

                    <li class="list-inline-item mb-0 ms-1">
                        <a href="javascript:void(0)" class="btn btn-icon btn-pills btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                            <i class="uil uil-search"></i>
                        </a>
                    </li> -->

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
                            <a href="<?=base_url('/')?>">Home</a><!--<span class="menu-arrow"></span>-->
                            <!-- <ul class="submenu">
                                <li><a href="index.html" class="sub-menu-item">Index One</a></li>
                                <li><a href="index-two.html" class="sub-menu-item">Index Two</a></li>
                                <li><a href="index-three.html" class="sub-menu-item">Index Three</a></li>
                            </ul> -->
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="<?=base_url('doctor-team')?>">Doctor</a>
                            <!-- <ul class="submenu">
                                <li class="has-submenu parent-menu-item">
                                    <a href="javascript:void(0)" class="menu-item"> Dashboard </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="<?=base_url('doctor-dashboard')?>" class="sub-menu-item">Dashboard</a></li>
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
                                <li><a href="<?=base_url('doctor-team')?>" class="sub-menu-item">Doctors Three</a></li>
                            </ul> -->
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
                                <li><a href="<?=base_url('contact-us')?>" class="sub-menu-item">Contact</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="<?=base_url('admin-index')?>" class="sub-menu-item" target="_blank">Admin</a></li> -->
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->