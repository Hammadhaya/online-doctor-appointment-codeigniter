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

    
<!-- Mirrored from shreethemes.in/doctris/layouts/landing/index-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:17 GMT -->
<head>
        <meta charset="utf-8" />
        <title><?= (isset($content['title'])) ? $content['title'] : '' ?></title>
       <?php include 'includes/head.php'?>

    </head>

    <body>
               
        <!-- Navbar STart -->
        <?php include 'includes/header.php'?>
        <!-- Navbar End -->

        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100" id="home">
            <div class="bg-overlay bg-overlay-dark"></div>
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-xl-10">
                        <div class="heading-title text-center">
                            <img src="<?= base_url() ?>assets/images/logo-icon.png" height="50" alt="">
                            <h4 class="heading fw-bold text-white title-dark mt-3 mb-4"><?= (isset($content['h1'])) ? $content['h1'] : '' ?></h4>
                            <p class="para-desc mx-auto text-white-50 mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                            
                            <div class="mt-4 pt-2">
                                <form class="rounded text-start shadow p-4 bg-white-50">
                                    <div class="row align-items-center">
                                        <div class="col-md">
                                            <div class="input-group bg-white border rounded" style="opacity: 0.7;">
                                                <span class="input-group-text border-0"><i class="ri-map-pin-line text-primary h5 fw-normal mb-0"></i></span>
                                                <input name="name" id="location" type="text" class="form-control border-0" placeholder="Location:">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md mt-4 mt-sm-0">
                                            <div class="input-group bg-white border rounded" style="opacity: 0.7;">
                                                <span class="input-group-text border-0"><i class="ri-user-2-line text-primary h5 fw-normal mb-0"></i></span>
                                                <input name="name" id="name" type="text" class="form-control border-0" placeholder="Doctor Name:">
                                            </div>
                                        </div><!--end col-->
                                        
                                        <div class="col-md-auto mt-4 mt-sm-0">
                                            <div class="d-grid d-md-block">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->
        
        <!-- Start -->
        <section class="section py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex">
                            <i class="uil uil-briefcase h1 mb-0 text-primary"></i>
                            <div class="ms-3 ms-lg-4">
                                <h5>Our Mission</h5>
                                <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the 16th century.</p>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="d-flex">
                            <i class="uil uil-airplay h1 mb-0 text-primary"></i>
                            <div class="ms-3 ms-lg-4">
                                <h5>Our Vision</h5>
                                <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the 16th century.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                    
                    <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="d-flex">
                            <i class="uil uil-flip-v h1 mb-0 text-primary"></i>
                            <div class="ms-3 ms-lg-4">
                                <h5>Who We Are ?</h5>
                                <p class="text-muted mb-0">The most well-known dummy text is the 'Lorem Ipsum' originated in the 16th century.</p>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <section class="section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="position-relative">
                            <img src="<?= base_url() ?>assets/images/about/about-2.png" class="img-fluid" alt="">
                            <div class="play-icon">
                                <a href="#!" data-type="youtube" data-id="yba7hPeTSjk" class="play-btn lightbox video-play-icon">
                                    <i class="mdi mdi-play text-primary rounded-circle shadow"></i>
                                </a>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="section-title ms-lg-5">
                            <span class="badge rounded-pill bg-soft-primary">About Doctris</span>
                            <h4 class="title mt-3 mb-4">Good Services And Better <br> Health By Our Specialists</h4>
                            <p class="para-desc text-muted">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                            <p class="para-desc text-muted">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words.</p>
                            <div class="mt-4">
                                <a href="aboutus.html" class="btn btn-soft-primary">Read More</a>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-4 pb-2 text-center">
                            <span class="badge rounded-pill bg-soft-primary mb-3">Departments</span>
                            <h4 class="title mb-4">Our Medical Services</h4>
                            <p class="text-muted mx-auto para-desc mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <?php if(isset($services)){ 
                        foreach($services as $item){ ?>
                    <div class="col-xl-3 col-md-4 col-12 mt-5">
                        <div class="card features feature-primary bg-transparent border-0">
                            <div class="icon text-center rounded-md">
                                <img src="<?=base_url('uploads/'.$item['image'])?>" style="height:80px; width:80px;" alt="">
                            </div>
                            <div class="card-body p-0 mt-3">
                                <a href="<?=base_url('pharmacy-departments')?>" class="title text-dark h5"><?= $item['department'] ?></a>
                                <p class="text-muted mt-3"><?= $item['content'] ?></p>
                                <a href="<?=base_url('pharmacy-departments')?>" class="link">Read More <i class="ri-arrow-right-line align-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } } ?><!--end col-->

                    

                   
                </div><!--end row-->
            </div><!--end container-->
            
            <!-- Cta Start -->
            <div class="container-fluid mt-100 mt-60">
                <div class="py-5 rounded" style="background: url('<?= base_url() ?>assets//images/bg/05.jpg') center left;">
                    <div class="container">
                        <div class="row">
                            <div class="offset-lg-8 offset-md-6 col-lg-4 col-md-6">
                                <div class="cta-review bg-primary shadow-md mb-lg-4 rounded p-4 py-5">
                                    <div class="client-review-slider">
                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                            
                                            <div class="d-inline-flex align-items-center">
                                                <img src="<?= base_url() ?>assets/images/client/01.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Thomas Israel <small class="text-white-50 d-block">C.E.O</small></h6>
                                            </div>
                                        </div><!--end customer testi-->
                                        
                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout. "</p>
                                            
                                            <div class="d-inline-flex align-items-center">
                                                <img src="<?= base_url() ?>assets/images/client/02.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Carl Oliver <small class="text-white-50 d-block">P.A</small></h6>
                                            </div>
                                        </div><!--end customer testi-->
                                        
                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories. "</p>
                                            
                                            <div class="d-inline-flex align-items-center">
                                                <img src="<?= base_url() ?>assets/images/client/03.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Barbara McIntosh <small class="text-white-50 d-block">M.D</small></h6>
                                            </div>
                                        </div><!--end customer testi-->
                                        
                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" According to most sources, Lorum Ipsum can be traced back to a text composed by Cicero in 45 BC. Allegedly, a Latin scholar established the origin of the text by compiling all the instances of the unusual word 'consectetur' he could find "</p>
                                            
                                            <div class="d-inline-flex align-items-center">
                                                <img src="<?= base_url() ?>assets/images/client/04.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Christa Smith <small class="text-white-50 d-block">Manager</small></h6>
                                            </div>
                                        </div><!--end customer testi-->
                                        
                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. "</p>
                                            
                                            <div class="d-inline-flex align-items-center">
                                                <img src="<?= base_url() ?>assets/images/client/05.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Dean Tolle <small class="text-white-50 d-block">Developer</small></h6>
                                            </div>
                                        </div><!--end customer testi-->
                                        
                                        <div class="tiny-slide">
                                            <p class="text-white-50 fst-italic">" It seems that only fragments of the original text remain in the Lorem Ipsum texts used today. One may speculate that over the course of time certain letters were added or deleted at various positions within the text. "</p>
                                            
                                            <div class="d-inline-flex align-items-center">
                                                <img src="<?= base_url() ?>assets/images/client/06.jpg" class="img-fluid avatar avatar-small rounded-circle mx-auto shadow" alt="">
                                                <h6 class="text-light title-dark fw-normal ms-3">Jill Webb <small class="text-white-50 d-block">Designer</small></h6>
                                            </div>
                                        </div><!--end customer testi-->
                                    </div><!--end carousel-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
            </div><!--end container-->
        </section>
        <!-- End -->

        <section class="pt-md-0 cta-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="row mt-4">
                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="<?= base_url() ?>assets/images/client/amazon.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->
        
                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="<?= base_url() ?>assets/images/client/google.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->
                            
                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="<?= base_url() ?>assets/images/client/lenovo.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->
                            
                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="<?= base_url() ?>assets/images/client/paypal.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->
                            
                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="<?= base_url() ?>assets/images/client/shopify.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->
                            
                            <div class="col-lg-3 col-md-4 col-6 text-center py-4">
                                <img src="<?= base_url() ?>assets/images/client/spotify.png" class="avatar avatar-client" alt="">
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
            
        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center mb-4 pb-2">
                            <h4 class="title mb-4">Doctors</h4>
                            <p class="text-muted mx-auto para-desc mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row align-items-center">
                <?php if(isset($doctor))
                { foreach($doctor as $item)
                    {?>                   
        
                    <div class="col-xl-3 col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card team border-0 rounded shadow overflow-hidden">
                            <div class="team-img position-relative">
                                <img src="<?php echo base_url('uploads/').$item['image']?>" class="img-fluid" alt="" style="width:261px; height:250px;">
                                <ul class="list-unstyled team-social mb-0">
                                    <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="facebook" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="linkedin" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="github" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="twitter" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content text-center">
                                <a href="<?=base_url('doctor-team-one')?>" class="title text-dark h5 d-block mb-0"><?=$item['fname'].' '.$item['lname']?></a>
                                <small class="text-muted speciality"><?=$item['department']?></small>
                            </div>
                        </div>
                    </div><!--end col-->
                    <?php }  } ?>
                    
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-lg-end">
                    <div class="col-md-6">
                        <div class="me-xl-3">
                            <div class="section-title mb-4 pb-2">
                                <i class="uil uil-notes text-primary h2"></i>
                                <h4 class="title mb-4">Book Your Appointment</h4>
                                <p class="text-muted para-desc mb-0">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                            </div>
    
                            <div class="features feature-bg-primary d-flex card flex-row p-4 rounded-md shadow position-relative overflow-hidden">
                                <i class="uil uil-stethoscope-alt icons h2 mb-0 text-primary"></i>
                                <div class="ms-3">
                                    <h5 class="titles">Success Of Treatment</h5>
                                    <p class="text-muted para mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                                </div>
                                <div class="big-icon">
                                    <i class="uil uil-stethoscope-alt"></i>
                                </div>
                            </div>
    
                            <div class="features feature-bg-primary d-flex card flex-row p-4 rounded-md shadow position-relative overflow-hidden mt-4">
                                <i class="uil uil-microscope icons h2 mb-0 text-primary"></i>
                                <div class="ms-3">
                                    <h5 class="titles">Modern Technology</h5>
                                    <p class="text-muted para mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                                </div>
                                <div class="big-icon">
                                    <i class="uil uil-microscope"></i>
                                </div>
                            </div>
    
                            <div class="features feature-bg-primary d-flex card flex-row p-4 rounded-md shadow position-relative overflow-hidden mt-4">
                                <i class="uil uil-user-md icons h2 mb-0 text-primary"></i>
                                <div class="ms-3">
                                    <h5 class="titles">Certified Doctors</h5>
                                    <p class="text-muted para mb-0">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century.</p>
                                </div>
                                <div class="big-icon">
                                    <i class="uil uil-user-md"></i>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 rounded shadow p-4 ms-xl-3">
                            <div class="custom-form">
                            <form name="myform" action="<?=base_url('site-appointment')?>" method="post" enctype="multipart/form-data">
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
                                                    <input class="form-control" type="time" id="time" name="time" value="<?php echo date('H:i'); ?>" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Departments</label>
                                                    <select name="department" id="department" class="form-select form-control" required>
                                                        <option value="">Select</option>
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
                                                        <select name="dr_id" id="dr_id" onchange="getvalue(this.value)"  class="form-select form-control"  required>
                                                            <option  value="">Select Doctor</option>
                                                            <?php foreach ($doctor as $item):?>
                                                               
                                                                <option  value="<?=$item['dr_id'];?>"><?= $item['fname'] . ' ' . $item['lname'];?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Fees <span class="text-danger">*</span></label>
                                                    <input name="fees"  id="fees" value="" type="number" class="form-control" placeholder="Your Fees :"  required>
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
                                            <div class="col-lg-12">
                                                <div class="d-grid">
                                                <br>  <button  type="submit" class="btn btn-primary">Book an Appointment</button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form>
                            </div>
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
        <div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src=" <?=base_url()?>assets/images/logo-dark.png" height="22" class="light-version" alt="">
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
                                    <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="<?= base_url() ?>assets/images/layouts/landing-light-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="<?= base_url() ?>assets/images/layouts/landing-light.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="<?= base_url() ?>assets/images/layouts/landing-dark-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="<?= base_url() ?>assets/images/layouts/landing-dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="<?= base_url() ?>assets/images/layouts/landing-dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Dark Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="<?= base_url() ?>assets/images/layouts/landing-light.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Light Version</span></a></li>
                                    <li class="d-grid"><a href="https://shreethemes.in/doctris/layouts/admin/index.html" target="_blank" class="mt-4"><img src="<?= base_url() ?>assets/images/layouts/light-dash.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 240px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Admin Dashboard</span></a></li>
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


<!-- Mirrored from shreethemes.in/doctris/layouts/landing/index-three.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2023 15:25:18 GMT -->
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
