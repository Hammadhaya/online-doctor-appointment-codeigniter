
<!doctype html>
<html lang="en" dir="rtl">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/admin/index-rtl-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 11:25:35 GMT -->
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
                                <img src="../assets/images/logo-icon.png" height="30" class="small" alt="">
                                <span class="big">
                                    <img src="../assets/images/logo-dark.png" height="22" class="logo-light-mode" alt="">
                                    <img src="../assets/images/logo-light.png" height="22" class="logo-dark-mode" alt="">
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
                                    <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/language/american.png" class="avatar avatar-ex-small rounded-circle p-2" alt=""></button>
                                    <div class="dropdown-menu dd-menu drop-ups dropdown-menu-end shadow border-0 mt-3 p-2" data-simplebar style="height: 175px;">
                                        <a href="javascript:void(0)" class="d-flex align-items-center">
                                            <img src="../assets/images/language/chinese.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                            <div class="flex-1 text-left ms-2 overflow-hidden">
                                                <small class="text-dark mb-0">Chinese</small>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                            <img src="../assets/images/language/european.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                            <div class="flex-1 text-left ms-2 overflow-hidden">
                                                <small class="text-dark mb-0">European</small>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                            <img src="../assets/images/language/indian.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                            <div class="flex-1 text-left ms-2 overflow-hidden">
                                                <small class="text-dark mb-0">Indian</small>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                            <img src="../assets/images/language/japanese.png" class="avatar avatar-client rounded-circle shadow" alt="">
                                            <div class="flex-1 text-left ms-2 overflow-hidden">
                                                <small class="text-dark mb-0">Japanese</small>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0)" class="d-flex align-items-center mt-2">
                                            <img src="../assets/images/language/russian.png" class="avatar avatar-client rounded-circle shadow" alt="">
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
                                                <img src="../assets/images/client/02.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Janalia</b> <small class="text-muted fw-normal d-inline-block">1 hour ago</small></small>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                            <div class="d-inline-flex position-relative overflow-hidden">
                                                <img src="https://shreethemes.in/doctris/layouts/assets/images/client/Codepen.svg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>codepen</b>  <small class="text-muted fw-normal d-inline-block">4 hour ago</small></small>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                            <div class="d-inline-flex position-relative overflow-hidden">
                                                <img src="../assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
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
                                                <img src="../assets/images/client/06.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
                                                <small class="text-dark mb-0 d-block text-truncat ms-3">You received a new email from <b>Donald Aghori</b> <small class="text-muted fw-normal d-inline-block">1 day ago</small></small>
                                            </div>
                                        </a>

                                        <a href="#" class="d-flex align-items-center justify-content-between py-2 border-top">
                                            <div class="d-inline-flex position-relative overflow-hidden">
                                                <img src="../assets/images/client/07.jpg" class="avatar avatar-md-sm rounded-circle shadow" alt="">
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
                                            <img src="../assets/images/doctors/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
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
                        <h5 class="mb-0">Dashboard</h5>

                        <div class="row">
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-bed h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">558</h5>
                                            <p class="text-muted mb-0">Patients</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-file-medical-alt h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">$2164</h5>
                                            <p class="text-muted mb-0">Avg. costs</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-social-distancing h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">112</h5>
                                            <p class="text-muted mb-0">Staff Members</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-ambulance h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">16</h5>
                                            <p class="text-muted mb-0">Vehicles</p>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-medkit h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">220</h5>
                                            <p class="text-muted mb-0">Appointment</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            
                            <div class="col-xl-2 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-medical-drip h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            <h5 class="mb-0">10</h5>
                                            <p class="text-muted mb-0">Operations</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-8 col-lg-7 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="align-items-center mb-0">Patients visit by Gender</h6>
                                        
                                        <div class="mb-0 position-relative">
                                            <select class="form-select form-control" id="yearchart">
                                                <option selected>2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="dashboard" class="apex-chart"></div>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-5 mt-4">
                                <div class="card shadow border-0 p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="align-items-center mb-0">Patients by Department</h6>
                                        
                                        <div class="mb-0 position-relative">
                                            <select class="form-select form-control" id="dailychart">
                                                <option selected>Today</option>
                                                <option value="2019">Yesterday</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="department" class="apex-chart"></div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-4 col-lg-6 mt-4">
                                <div class="card border-0 shadow rounded">
                                    <div class="d-flex justify-content-between align-items-center p-4 border-bottom">
                                        <h6 class="mb-0"><i class="uil uil-calender text-primary me-1 h5"></i> Latest Appointment</h6>
                                        <h6 class="text-muted mb-0">55 Patients</h6>
                                    </div>

                                    <ul class="list-unstyled mb-0 p-4">
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-inline-flex">
                                                    <img src="../assets/images/client/01.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                    <div class="ms-3">
                                                        <h6 class="text-dark mb-0 d-block">Calvin Carlo</h6>
                                                        <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-inline-flex">
                                                    <img src="../assets/images/client/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                    <div class="ms-3">
                                                        <h6 class="text-dark mb-0 d-block">Joya Khan</h6>
                                                        <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-inline-flex">
                                                    <img src="../assets/images/client/03.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                    <div class="ms-3">
                                                        <h6 class="text-dark mb-0 d-block">Amelia Muli</h6>
                                                        <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-inline-flex">
                                                    <img src="../assets/images/client/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                    <div class="ms-3">
                                                        <h6 class="text-dark mb-0 d-block">Nik Ronaldo</h6>
                                                        <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times"></i></a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-inline-flex">
                                                    <img src="../assets/images/client/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                    <div class="ms-3">
                                                        <h6 class="text-dark mb-0 d-block">Crista Joseph</h6>
                                                        <small class="text-muted">Booking on 27th Nov, 2020</small>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-success"><i class="uil uil-check"></i></a>
                                                    <a href="#" class="btn btn-icon btn-pills btn-soft-danger"><i class="uil uil-times"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-6 mt-4">
                                <div class="card chat chat-person border-0 shadow rounded">
                                    <div class="d-flex justify-content-between border-bottom p-4">
                                        <div class="d-flex">
                                            <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                            <div class="flex-1 overflow-hidden ms-3">
                                                <a href="#" class="text-dark mb-0 h6 d-block text-truncate">Cristino Murphy</a>
                                                <small class="text-muted"><i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i> Online</small>
                                            </div>
                                        </div>

                                        <ul class="list-unstyled mb-0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-ellipsis-h"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                    <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-user align-middle h6"></i></span> Profile</a>
                                                    <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-setting align-middle h6"></i></span> Profile Settings</a>
                                                    <a class="dropdown-item text-dark" href="#"><span class="mb-0 d-inline-block me-1"><i class="uil uil-trash align-middle h6"></i></span> Delete</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <ul class="p-4 list-unstyled mb-0 chat" data-simplebar style="background: url('../assets/images/bg/bg-chat.png') center center; max-height: 295px;">
                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-light rounded mb-1">Hey Christopher</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>59 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-light rounded mb-1">Hello Cristino</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>45 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-light rounded mb-1">How can i help you?</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>44 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-light rounded mb-1">Nice to meet you</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>42 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-light rounded mb-1">Hope you are doing fine?</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>40 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-light rounded mb-1">I'm good thanks for asking</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>45 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-light rounded mb-1">I am intrested to know more about your prices and services you offer</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>35 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-light rounded mb-1">Sure please check below link to find more useful information <a href="https://1.envato.market/doctris-template" target="_blank" class="text-primary">https://shreethemes.in/Doctris/</a></p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>25 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative">
                                                        <img src="../assets/images/doctors/02.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-light rounded mb-1">Thank you 😊</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>20 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="chat-right">
                                            <div class="d-inline-block">
                                                <div class="d-flex chat-type mb-3">
                                                    <div class="position-relative chat-user-image">
                                                        <img src="../assets/images/client/09.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                                        <i class="mdi mdi-checkbox-blank-circle text-success on-off align-text-bottom"></i>
                                                    </div>
                                                        
                                                    <div class="flex-1 chat-msg" style="max-width: 500px;">
                                                        <p class="text-muted small shadow px-3 py-2 bg-light rounded mb-1">Welcome</p>
                                                        <small class="text-muted msg-time"><i class="uil uil-clock-nine me-1"></i>18 min ago</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="p-2 rounded-bottom shadow">
                                        <div class="row">
                                            <div class="col">
                                                <input type="text" class="form-control border" placeholder="Enter Message...">
                                            </div>
                                            <div class="col-auto">
                                                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-message"></i></a>
                                                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-smile"></i></a>
                                                <a href="#" class="btn btn-icon btn-primary"><i class="uil uil-paperclip"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-12 mt-4">
                                <div class="card border-0 shadow rounded">
                                    <div class="p-4 border-bottom">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6 class="mb-0"><i class="uil uil-user text-primary me-1 h5"></i> Patients Reviews</h6>
                                            
                                            <div class="mb-0 position-relative">
                                                <select class="form-select form-control" id="dailypatient">
                                                    <option selected>New</option>
                                                    <option value="2019">Old</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-unstyled mb-0 p-4" data-simplebar style="height: 355px;">
                                        <li class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/01.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Calvin Carlo</span>
                                                    <small class="text-muted">Orthopedic</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(45)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">150 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/02.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Cristino Murphy</span>
                                                    <small class="text-muted">Gynecology</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(75)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">350 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/03.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Alia Reddy</span>
                                                    <small class="text-muted">Psychotherapy</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(48)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">450 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/04.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Toni Kover</span>
                                                    <small class="text-muted">Dentist</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(68)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">484 Patients</p>
                                        </li>

                                        <li class="d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <img src="../assets/images/doctors/05.jpg" class="avatar avatar-small rounded-circle border shadow" alt="">
                                                <div class="flex-1 ms-3">
                                                    <span class="d-block h6 mb-0">Dr. Jennifer Ballance</span>
                                                    <small class="text-muted">Cardiology</small>

                                                    <ul class="list-unstyled mb-0">
                                                        <li class="list-inline-item text-muted">(55)</li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-0">476 Patients</p>
                                        </li>
                                    </ul>
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
        <?php include 'includes/jslinks.php' ?>
        
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/admin/index-rtl-dark.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Nov 2023 11:25:35 GMT -->
</html>