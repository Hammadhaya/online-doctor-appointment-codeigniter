
<!doctype html>
<html lang="en" dir="ltr">

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/patient-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:22 GMT -->
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
        <!--end header-->
        <!-- Navbar End -->

        <!-- Start -->
        <section class="bg-half-170 bg-light">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-10">
                        <div class="card border-0 rounded shadow px-4 py-5">
                            <div class="row mb-4">
                                <div class="col-lg-8 col-md-6">
                                    <img src="<?=base_url()?>assets/images/logo-dark.png" height="22" alt="">
                                    <h6 class="mt-4 pt-2">Address :</h6>
                                    <small class="text-muted mb-0">1419 Riverwood Drive, <br>Redding, CA 96001</small>
                                </div><!--end col-->
    
                                <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                    <ul class="list-unstyled">
                                        <li class="d-flex">
                                            <small class="mb-0 text-muted">Invoice no. : </small>
                                            <small class="mb-0 text-dark">&nbsp;&nbsp;#54638990jnn</small>
                                        </li>
                                        <li class="d-flex mt-2">
                                            <small class="mb-0 text-muted">Email : </small>
                                            <small class="mb-0">&nbsp;&nbsp;<a href="mailto:contact@example.com" class="text-dark">info@doctris.com</a></small>
                                        </li>
                                        <li class="d-flex mt-2">
                                            <small class="mb-0 text-muted">Phone : </small>
                                            <small class="mb-0">&nbsp;&nbsp;<a href="tel:+152534-468-854" class="text-dark">(+12) 1546-456-856</a></small>
                                        </li>
                                        <li class="d-flex mt-2">
                                            <small class="mb-0 text-muted">Website : </small>
                                            <small class="mb-0">&nbsp;&nbsp;<a href="javascript:void(0)" class="text-dark">www.doctris.com</a></small>
                                        </li>
                                        <li class="d-flex mt-2">
                                            <small class="mb-0 text-muted">Patient Name : </small>
                                            <small class="mb-0">&nbsp;&nbsp;Mary Skeens</small>
                                        </li>
                                    </ul>
                                </div><!--end col-->
                            </div><!--end row-->
    
                            <div class="pt-4 border-top">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6">
                                        <h5 class="text-muted fw-bold">Invoice <span class="badge rounded-pill bg-soft-success fw-normal ms-2">Paid</span></h5>
                                        <h6>Surgery (Gynecology)</h6>
                                    </div><!--end col-->
    
                                    <div class="col-lg-4 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                        <ul class="list-unstyled">
                                            <li class="d-flex mt-2">
                                                <small class="mb-0 text-muted">Issue Dt. : </small>
                                                <small class="mb-0 text-dark">&nbsp;&nbsp;25th Sep. 2020</small>
                                            </li>
    
                                            <li class="d-flex mt-2">
                                                <small class="mb-0 text-muted">Due Dt. : </small>
                                                <small class="mb-0 text-dark">&nbsp;&nbsp;11th Oct. 2020</small>
                                            </li>
    
                                            <li class="d-flex mt-2">
                                                <small class="mb-0 text-muted">Dr. Name : </small>
                                                <small class="mb-0 text-dark">&nbsp;&nbsp;Dr. Calvin Carlo</small>
                                            </li>
                                        </ul>
                                    </div><!--end col-->
                                </div><!--end row-->
                                
                                <div class="invoice-table pb-4">
                                    <div class="table-responsive shadow rounded mt-4">
                                        <table class="table table-center invoice-tb mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-start border-bottom p-3" style="min-width: 60px;">No.</th>
                                                    <th scope="col" class="text-start border-bottom p-3" style="min-width: 220px;">Item</th>
                                                    <th scope="col" class="text-center border-bottom p-3" style="min-width: 60px;">Qty</th>
                                                    <th scope="col" class="border-bottom p-3" style="min-width: 130px;">Rate</th>
                                                    <th scope="col" class="border-bottom p-3" style="min-width: 130px;">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="text-start p-3">1</th>
                                                    <td class="text-start p-3">Hospital Charges</td>
                                                    <td class="text-center p-3">1</td>
                                                    <td class="p-3">$ 125</td>
                                                    <td class="p-3">$ 125</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-start p-3">2</th>
                                                    <td class="text-start p-3">Medicine</td>
                                                    <td class="text-center p-3">1</td>
                                                    <td class="p-3">$ 245</td>
                                                    <td class="p-3">$ 245</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="text-start p-3">3</th>
                                                    <td class="text-start p-3">Special Visit Fee(Doctor)</td>
                                                    <td class="text-center p-3">1</td>
                                                    <td class="p-3">$ 150</td>
                                                    <td class="p-3">$ 150</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
    
                                    <div class="row">
                                        <div class="col-lg-4 col-md-5 ms-auto">
                                            <ul class="list-unstyled h6 fw-normal mt-4 mb-0 ms-md-5 ms-lg-4">
                                                <li class="text-muted d-flex justify-content-between pe-3">Subtotal :<span>$ 520</span></li>
                                                <li class="text-muted d-flex justify-content-between pe-3">Taxes :<span> 0</span></li>
                                                <li class="d-flex justify-content-between pe-3">Total :<span>$ 520</span></li>
                                            </ul>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
    
                                <div class="border-top pt-4">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="text-sm-start text-muted text-center">
                                                <small class="mb-0">Customer Services : <a href="tel:+152534-468-854" class="text-warning">(+12) 1546-456-856</a></small>
                                            </div>
                                        </div><!--end col-->
    
                                        <div class="col-sm-6">
                                            <div class="text-sm-end text-muted text-center">
                                                <small class="mb-0"><a href="javascript:void(0)" class="text-primary">Terms & Conditions</a></small>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div>
                            </div>
                        </div>

                        <div class="text-end mt-4 pt-2">
                            <a href="javascript:window.print()" class="btn btn-soft-primary d-print-none"><i class="uil uil-print"></i> Print</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <?php include 'includes/footer.php'?>
        <!--end footer-->
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
       
        <!-- Offcanvas End -->
        
        <!-- javascript -->
        <?php include 'includes/jslinks.php'?>
        
    </body>


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/patient-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:22 GMT -->
</html>