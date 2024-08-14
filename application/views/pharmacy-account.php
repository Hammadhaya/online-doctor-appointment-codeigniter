
<!doctype html>
<html lang="en" dir="ltr">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/pharmacy-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:32 GMT -->
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
        <?php include 'includes/header.php'?><!--end header-->
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100 bg-light">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="sub-title mb-4">My Account</h3>
                            <p class="para-desc mx-auto text-muted">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        
                            <nav aria-label="breadcrumb" class="d-inline-block mt-3">
                                <ul class="breadcrumb bg-light rounded mb-0 bg-transparent">
                                    <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                                    <li class="breadcrumb-item"><a href="pharmacy.html">Pharmacy</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Account</li>
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
        <!-- Hero End -->

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="d-flex align-items-center">
                            <img src="<?=base_url()?>assets/images/client/09.jpg" class="avatar avatar-md-md rounded-circle" alt="">
                            <div class="ms-3">
                                <h6 class="text-muted mb-0">Hello,</h6>
                                <h5 class="mb-0">Mrs. Christopher</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mt-4 pt-2">
                        <ul class="nav nav-pills nav-justified flex-column rounded shadow p-3 mb-0" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link rounded active" id="dashboard" data-bs-toggle="pill" href="#dash" role="tab" aria-controls="dash" aria-selected="false">
                                    <div class="text-start py-1 px-3">
                                        <h6 class="mb-0"><i class="uil uil-dashboard h5 align-middle me-2 mb-0"></i> Dashboard</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="order-history" data-bs-toggle="pill" href="#orders" role="tab" aria-controls="orders" aria-selected="false">
                                    <div class="text-start py-1 px-3">
                                        <h6 class="mb-0"><i class="uil uil-list-ul h5 align-middle me-2 mb-0"></i> Orders</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="download" data-bs-toggle="pill" href="#down" role="tab" aria-controls="down" aria-selected="false">
                                    <div class="text-start py-1 px-3">
                                        <h6 class="mb-0"><i class="uil uil-arrow-circle-down h5 align-middle me-2 mb-0"></i> Downloads</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="addresses" data-bs-toggle="pill" href="#address" role="tab" aria-controls="address" aria-selected="false">
                                    <div class="text-start py-1 px-3">
                                        <h6 class="mb-0"><i class="uil uil-map-marker h5 align-middle me-2 mb-0"></i> Addresses</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item mt-2">
                                <a class="nav-link rounded" id="account-details" data-bs-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="false">
                                    <div class="text-start py-1 px-3">
                                        <h6 class="mb-0"><i class="uil uil-user h5 align-middle me-2 mb-0"></i> Account Details</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul><!--end nav pills-->
                    </div><!--end col-->

                    <div class="col-md-8 col-12 mt-4 pt-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active shadow rounded p-4" id="dash" role="tabpanel" aria-labelledby="dashboard">
                                <p class="text-muted">Hello <span class="text-dark">christopher</span> (not <span class="text-dark fw-bold">christopher</span>? <a href="#" class="text-danger fw-bold">Log out</a>)</p>

                                <p class="text-muted mb-0">From your account dashboard you can view your <a href="#" class="text-danger fw-bold">recent orders</a>, manage your <a href="#" class="text-danger fw-bold">shipping and billing addresses</a>, and <a href="#" class="text-danger fw-bold">edit your password and account details</a>.</p>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade shadow rounded p-4" id="orders" role="tabpanel" aria-labelledby="order-history">
                                <div class="table-responsive bg-white shadow rounded">
                                    <table class="table mb-0 table-center table-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom p-3" scope="col">Order no.</th>
                                                <th class="border-bottom p-3" scope="col">Date</th>
                                                <th class="border-bottom p-3" scope="col">Status</th>
                                                <th class="border-bottom p-3" scope="col">Total</th>
                                                <th class="border-bottom p-3" scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="p-3">7107</td>
                                                <td class="p-3">1st November 2020</td>
                                                <td class="text-success p-3">Delivered</td>
                                                <td class="p-3">$ 320 <span class="text-muted">for 2items</span></td>
                                                <td class="p-3"><a href="#" class="text-primary">View <i class="uil uil-arrow-right"></i></a></td>
                                            </tr>

                                            <tr>
                                                <td class="p-3">8007</td>
                                                <td class="p-3">4td November 2020</td>
                                                <td class="text-muted p-3">Processing</td>
                                                <td class="p-3">$ 800 <span class="text-muted">for 1item</span></td>
                                                <td class="p-3"><a href="#" class="text-primary">View <i class="uil uil-arrow-right"></i></a></td>
                                            </tr>

                                            <tr>
                                                <td class="p-3">8008</td>
                                                <td class="p-3">4th November 2020</td>
                                                <td class="text-danger p-3">Canceled</td>
                                                <td class="p-3">$ 800 <span class="text-muted">for 1item</span></td>
                                                <td class="p-3"><a href="#" class="text-primary">View <i class="uil uil-arrow-right"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade shadow rounded p-4" id="down" role="tabpanel" aria-labelledby="download">
                                <div class="table-responsive bg-white shadow rounded">
                                    <table class="table mb-0 table-center table-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom p-3" scope="col">Product Name</th>
                                                <th class="border-bottom p-3" scope="col">Description</th>
                                                <th class="border-bottom p-3" scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="p-3">Quick heal</td>
                                                <td class="text-muted p-3">It is said that song composers of the past <br> used dummy texts as lyrics when writing <br> melodies in order to have a 'ready-made' <br> text to sing with the melody.</td>
                                                <td class="text-success p-3">Downloaded</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade shadow rounded p-4" id="address" role="tabpanel" aria-labelledby="addresses">
                                <h6 class="text-muted mb-0">The following addresses will be used on the checkout page by default.</h6>

                                <div class="row">
                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="d-flex align-items-center mb-4 justify-content-between">
                                            <h5 class="mb-0">Billing Address:</h5>
                                            <a href="#" class="text-primary h5 mb-0" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="uil uil-edit align-middle"></i></a>
                                        </div>
                                        <div class="pt-4 border-top">
                                            <p class="h6">Cally Joseph</p>
                                            <p class="text-muted mb-0">C/54 Northwest Freeway, </p>
                                            <p class="text-muted mb-0">Suite 558,</p>
                                            <p class="text-muted mb-0">Houston, USA 485</p>
                                            <p class="text-muted mb-0">+123 897 5468</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="d-flex align-items-center mb-4 justify-content-between">
                                            <h5 class="mb-0">Shipping Address:</h5>
                                            <a href="#" class="text-primary h5 mb-0" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="uil uil-edit align-middle"></i></a>
                                        </div>
                                        <div class="pt-4 border-top">
                                            <p class="h6">Cally Joseph</p>
                                            <p class="text-muted mb-0">C/54 Northwest Freeway, </p>
                                            <p class="text-muted mb-0">Suite 558,</p>
                                            <p class="text-muted mb-0">Houston, USA 485</p>
                                            <p class="text-muted mb-0">+123 897 5468</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end teb pane-->

                            <div class="tab-pane fade shadow rounded p-4" id="account" role="tabpanel" aria-labelledby="account-details">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input name="name" id="first-name" type="text" class="form-control" value="Cally">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input name="name" id="last-name" type="text" class="form-control" value="Joseph">
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email</label>
                                                <input name="email" id="email" type="email" class="form-control" value="callyjoseph@gmail.com">
                                            </div> 
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Display Name</label>
                                                <input name="name" id="display-name" type="text" class="form-control" value="christopher">
                                            </div> 
                                        </div><!--end col-->

                                        <div class="col-lg-12 mt-2 mb-0">
                                            <button class="btn btn-primary">Save Changes</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>

                                <h5 class="mt-4">Change password :</h5>
                                <form>
                                    <div class="row mt-3">
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Old password :</label>
                                                <input type="password" class="form-control" placeholder="Old password" required="">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">New password :</label>
                                                <input type="password" class="form-control" placeholder="New password" required="">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label class="form-label">Re-type New password :</label>
                                                <input type="password" class="form-control" placeholder="Re-type New password" required="">
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-lg-12 mt-2 mb-0">
                                            <button class="btn btn-primary">Save Password</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end teb pane-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <?php include 'includes/footer.php'?><!--end footer-->
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
                                            <button type="submit" class="btn btn-pills btn-primary">Search</button>
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
        <?php include 'includes/jslinks.php'?>
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/pharmacy-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:32 GMT -->
</html>