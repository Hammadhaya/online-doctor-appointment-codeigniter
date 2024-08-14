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
                        <h5 class="mb-0">Add New Content</h5>

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

                                <form action="<?= base_url('add-content') ?>" method="post" enctype="multipart/form-data" class="mt-4">

                                    <input type="hidden" name="c_id" value="<?= (isset($content['c_id']) ? $content['c_id'] : '') ?>">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Pages</label>
                                                <select name="pg_name" id="pg_name" class="form-select form-control">
                                                    <!-- <option value=" ">Select</option> -->
                                                    <?php foreach ($pages as $item) : ?>
                                                        <option value="<?= $item['pg_name'] ?>" <?= ($item['pg_name']== @$service['pg_name']) ? 'selected' : set_value('pg_name') ?> ><?= $item['pg_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">H1</label>
                                                <input name="h1" id="h1" type="text" value="<?= (isset($content['h1']) ? $content['h1'] : '') ?>" class="form-control" placeholder="H2 :">
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">H2</label>
                                                <input name="h2" id="h2" type="text" value="<?= (isset($content['h2']) ? $content['h2'] : '') ?>" class="form-control" placeholder="H2 :">
                                            </div>
                                        </div><!--end col-->




                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Keyword</label>
                                                <input type="text" name="keyword" id="keyword" value="<?= (isset($content['keyword']) ? $content['keyword'] : '') ?>" rows="3" class="form-control" placeholder="keyword :"></input>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" name="title" id="title" value="<?= (isset($content['title']) ? $content['title'] : '') ?>" rows="3" class="form-control" placeholder="Title :"></input>
                                            </div>
                                        </div>

                                        
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" id="description" rows="3" class="form-control" placeholder="Detail :"><?= (isset($content['description']) ? $content['description'] : '') ?></textarea>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Banner Image</label>
                                                <?php if (isset($content['image'])) { ?>
                                                    <img src=" <?php echo base_url('uploads/') . $content['image']  ?>" height="100px" width="100px" alt="img">
                                                <?php } ?>
                                                <!-- <input type="hidden" name="old_image" value="<?= (isset($doctor['image']) ? $doctor['image'] : '') ?>" class="form-control"> -->
                                                <input class="form-control" type="file" name="image" id="image">
                                            </div>
                                        </div>
                                    </div><!--end row-->

                                    <button type="submit"  class="btn btn-primary">Add Content</button>
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
