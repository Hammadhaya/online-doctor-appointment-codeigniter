
<!doctype html>
<html lang="en" dir="ltr">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/pharmacy-shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:31 GMT -->
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
                            <h3 class="sub-title mb-4">Shop Cart</h3>
                            <p class="para-desc mx-auto text-muted">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        
                            <nav aria-label="breadcrumb" class="d-inline-block mt-3">
                                <ul class="breadcrumb bg-light rounded mb-0 bg-transparent">
                                    <li class="breadcrumb-item"><a href="index.html">Doctris</a></li>
                                    <li class="breadcrumb-item"><a href="pharmacy.html">Pharmacy</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Shop Cart</li>
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
                    <div class="col-12">
                        <div class="table-responsive bg-white shadow rounded">
                            <table class="table table-center table-padding mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-bottom p-3" style="min-width:20px "></th>
                                        <th class="border-bottom p-3" style="min-width: 300px;">Product</th>
                                        <th class="border-bottom text-center p-3" style="min-width: 160px;">Price</th>
                                        <th class="border-bottom text-center p-3" style="min-width: 190px;">Qty</th>
                                        <th class="border-bottom text-end p-3" style="min-width: 50px;">Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="h5 p-3 text-center"><a href="#" class="text-danger"><i class="uil uil-times"></i></a></td>
                                        <td class="p-3">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/pharmacy/shop/ashwagandha.jpg" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                                <h6 class="mb-0 ms-3">Ashwagandha Churna</h6>
                                            </div>
                                        </td>
                                        <td class="text-center p-3">$ 255.00</td>
                                        <td class="text-center shop-list p-3">
                                            <div class="qty-icons">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-icon btn-primary minus">-</button>
                                                <input min="0" name="quantity" value="0" type="number" class="btn btn-icon btn-primary qty-btn quantity">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn btn-icon btn-primary plus">+</button>
                                            </div>
                                        </td>
                                        <td class="text-end font-weight-bold p-3">$510.00</td>
                                    </tr>

                                    <tr>
                                        <td class="h5 p-3 text-center"><a href="#" class="text-danger"><i class="uil uil-times"></i></a></td>
                                        <td class="p-3">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/pharmacy/shop/diabend.jpg" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                                <h6 class="mb-0 ms-3">Diabend</h6>
                                            </div>
                                        </td>
                                        <td class="text-center p-3">$ 520.00</td>
                                        <td class="text-center shop-list p-3">
                                            <div class="qty-icons">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-icon btn-primary minus">-</button>
                                                <input min="0" name="quantity" value="0" type="number" class="btn btn-icon btn-primary qty-btn quantity">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn btn-icon btn-primary plus">+</button>
                                            </div>
                                        </td>
                                        <td class="text-end font-weight-bold p-3">$520.00</td>
                                    </tr>

                                    <tr>
                                        <td class="h5 p-3 text-center"><a href="#" class="text-danger"><i class="uil uil-times"></i></a></td>
                                        <td class="p-3">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/pharmacy/shop/facewash.jpg" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                                <h6 class="mb-0 ms-3">Facewash</h6>
                                            </div>
                                        </td>
                                        <td class="text-center p-3">$ 160.00</td>
                                        <td class="text-center shop-list p-3">
                                            <div class="qty-icons">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-icon btn-primary minus">-</button>
                                                <input min="0" name="quantity" value="0" type="number" class="btn btn-icon btn-primary qty-btn quantity">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn btn-icon btn-primary plus">+</button>
                                            </div>
                                        </td>
                                        <td class="text-end font-weight-bold p-3">$640.00</td>
                                    </tr>

                                    <tr>
                                        <td class="h5 p-3 text-center"><a href="#" class="text-danger"><i class="uil uil-times"></i></a></td>
                                        <td class="p-3">
                                            <div class="d-flex align-items-center">
                                                <img src="<?=base_url()?>assets/images/pharmacy/shop/handwash.jpg" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                                <h6 class="mb-0 ms-3">Dettol handwash</h6>
                                            </div>
                                        </td>
                                        <td class="text-center p-3">$ 260.00</td>
                                        <td class="text-center shop-list p-3">
                                            <div class="qty-icons">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="btn btn-icon btn-primary minus">-</button>
                                                <input min="0" name="quantity" value="0" type="number" class="btn btn-icon btn-primary qty-btn quantity">
                                                <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="btn btn-icon btn-primary plus">+</button>
                                            </div>
                                        </td>
                                        <td class="text-end font-weight-bold p-3">$520.00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-8 col-md-6 mt-4 pt-2">
                        <a href="#" class="btn btn-primary">Shop More</a>
                        <a href="#" class="btn btn-soft-primary ms-2">Update Cart</a>
                    </div>
                    <div class="col-lg-4 col-md-6 ms-auto mt-4 pt-2">
                        <div class="table-responsive bg-white rounded shadow">
                            <table class="table table-center table-padding mb-0">
                                <tbody>
                                    <tr>
                                        <td class="h6 p-3">Subtotal</td>
                                        <td class="text-end font-weight-bold p-3">$ 2190</td>
                                    </tr>
                                    <tr>
                                        <td class="h6 p-3">Taxes</td>
                                        <td class="text-end font-weight-bold p-3">$ 219</td>
                                    </tr>
                                    <tr class="bg-light">
                                        <td class="h6 p-3">Total</td>
                                        <td class="text-end font-weight-bold p-3">$ 2409</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 pt-2 text-end">
                            <a href="#" class="btn btn-primary">Proceed to checkout</a>
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


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/pharmacy-shop-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:32 GMT -->
</html>