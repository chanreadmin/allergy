<?php
session_start();
include('layout/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    $sid = intval($_GET['pid']);
    ?>
    <!doctype html>
    <html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
        data-sidebar-image="none" data-preloader="disable">

    <head>
        <meta charset="utf-8" />
        <title>Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- jsvectormap css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
        <!--Swiper slider css-->
        <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <style>
            .hidden {
                display: none;
            }

            input {
                border: 10px solid red;
            }
        </style>
    </head>

    <body>
        <!-- Begin page -->
        <div id="layout-wrapper">
            <?php include('admin/header.php') ?>

            <!-- ========== App Menu ========== -->
            <?php
            include('admin/leftsidebar.php')
                ?>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Atopic Dermatis</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Atopic Dermatis</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Atopic Dermatis</h4>

                                    </div>
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="components/atopic-follow.php?pid=<?php echo $sid; ?>"
                                                method="post" enctype="multipart/form-data" class="row gy-4">
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="symptoms" class="form-label">Symptoms</label>
                                                        <input type="text" name="symptoms" id="symptoms"
                                                            placeholder="Enter Symptoms.." class="form-control" required>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="affected_area" class="form-label">Affected Areas/Surface
                                                            of the
                                                            body</label>
                                                        <input type="text" class="form-control" name="affected_area"
                                                            id="affected_area"
                                                            placeholder="Enter Affected Areas/Surface of the body" required>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-xxl-12 col-md-12">
                                                    <div>
                                                        <h4>Intensity</h4>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="erythema" class="form-label">Erythema</label>
                                                        <select class="form-control" id="erythema" name="erythema" required>
                                                            <option value="">Select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="oedema" class="form-label">Oedema</label>
                                                        <select class="form-control" id="oedema" name="oedema" required>
                                                            <option value="">Select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="swl" class="form-label">Swelling</label>
                                                        <select class="form-control" id="swl" name="swl" required>
                                                            <option value="">Select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="oozing" class="form-label">Oozing</label>
                                                        <select class="form-control" id="oozing" name="oozing" required>
                                                            <option value="">Select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="crusting" class="form-label">Crusting</label>
                                                        <select class="form-control" id="crusting" name="crusting" required>
                                                            <option value="">Select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="excoration" class="form-label">Excoration</label>
                                                        <select class="form-control" id="excoration" name="excoration"
                                                            required>
                                                            <option value="">Select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label for="crusting" class="form-label">Lichenification</label>
                                                        <select class="form-control" id="lichenification"
                                                            name="lichenification" required>
                                                            <option value="">Select</option>
                                                            <option value="Yes">Yes</option>
                                                            <option value="No">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->

                                                <div class="col-xxl-12 col-md-12">
                                                    <table id="myTable" class="table table-strip">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <strong>On skin without eczema</strong>
                                                                </th>
                                                                <th>No</th>
                                                                <th>Slight</th>
                                                                <th>Moderate</th>
                                                                <th>Very Dry</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Dryness</td>
                                                                <td><input type="radio" id="sneezing_not_so_much"
                                                                        name="dryness" value="No"></td>
                                                                <td><input type="radio" id="sneezing_mild" name="dryness"
                                                                        value="Slight"></td>
                                                                <td><input type="radio" id="sneezing_mod" name="dryness"
                                                                        value="Moderate"></td>
                                                                <td><input type="radio" id="sneezing_severe" name="dryness"
                                                                        value="Dry"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-xxl-12 col-md-12">
                                                    <table id="myTable" class="table table-strip">
                                                        <thead>
                                                            <tr>
                                                                <th>
                                                                    <strong>On skin with eczema</strong>
                                                                </th>
                                                                <th>No</th>
                                                                <th>Slight</th>
                                                                <th>Moderate</th>
                                                                <th>Severe</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Redness</td>
                                                                <td><input type="radio" id="sneezing_not_so_much"
                                                                        name="redness" value="No"></td>
                                                                <td><input type="radio" id="sneezing_mild" name="redness"
                                                                        value="Slight"></td>
                                                                <td><input type="radio" id="sneezing_mod" name="redness"
                                                                        value="Moderate"></td>
                                                                <td><input type="radio" id="sneezing_severe" name="redness"
                                                                        value="Dry"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Swelling</td>
                                                                <td><input type="radio" id="sneezing_not_so_much"
                                                                        name="swelling" value="No"></td>
                                                                <td><input type="radio" id="sneezing_mild" name="swelling"
                                                                        value="Slight"></td>
                                                                <td><input type="radio" id="sneezing_mod" name="swelling"
                                                                        value="Moderate"></td>
                                                                <td><input type="radio" id="sneezing_severe" name="swelling"
                                                                        value="Dry"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Oozing</td>
                                                                <td><input type="radio" id="sneezing_not_so_much" name="ooz"
                                                                        value="No"></td>
                                                                <td><input type="radio" id="sneezing_mild" name="ooz"
                                                                        value="Slight"></td>
                                                                <td><input type="radio" id="sneezing_mod" name="ooz"
                                                                        value="Moderate"></td>
                                                                <td><input type="radio" id="sneezing_severe" name="ooz"
                                                                        value="Dry"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Traces of scratching</td>
                                                                <td><input type="radio" id="sneezing_not_so_much"
                                                                        name="scratching" value="No"></td>
                                                                <td><input type="radio" id="sneezing_mild" name="scratching"
                                                                        value="Slight"></td>
                                                                <td><input type="radio" id="sneezing_mod" name="scratching"
                                                                        value="Moderate"></td>
                                                                <td><input type="radio" id="sneezing_severe"
                                                                        name="scratching" value="Dry"></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thickend Skin</td>
                                                                <td><input type="radio" id="sneezing_not_so_much"
                                                                        name="thickend" value="No"></td>
                                                                <td><input type="radio" id="sneezing_mild" name="thickend"
                                                                        value="Slight"></td>
                                                                <td><input type="radio" id="sneezing_mod" name="thickend"
                                                                        value="Moderate"></td>
                                                                <td><input type="radio" id="sneezing_severe" name="thickend"
                                                                        value="Dry"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label class="form-label">Severity of Itching</label>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <input type="range" data-slider-color="secondary" id="rangeSlider11"
                                                            min="0" max="10" value="0" name="itching" step="1"
                                                            oninput="updateMentalFunction()" onchange="tnnsymptom()">
                                                        <div id="sliderValue11">Value: 0</div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <label class="form-label">Severity of Sleep Disturbance</label>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <div>
                                                        <input type="range" data-slider-color="secondary" id="rangeSlider12"
                                                            min="0" max="10" value="0" name="sleep" step="1"
                                                            oninput="updateQuality()">
                                                        <div id="sliderValue12">Value: 0</div>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="age" class="form-label">Present Medications</label>
                                                        <textarea class="form-control" name="pmedications"
                                                            id="pmedications"></textarea>
                                                    </div>
                                                </div>
                                                <!--end col-->

                                                <!--end col-->
                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="age" class="form-label">Local Applications</label>
                                                        <textarea class="form-control" name="lapplication"
                                                            id="lapplication"></textarea>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <!--end col-->
                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="othermedications" class="form-label">Other
                                                            Medications</label>
                                                        <textarea class="form-control" name="othermedications"
                                                            id="othermedications"></textarea>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-6 col-md-6">
                                                    <div>
                                                        <label for="othermedications" class="form-label">Skin
                                                            Examination</label>
                                                        <textarea class="form-control" name="skinexam"
                                                            id="skinexam"></textarea>
                                                    </div>
                                                </div>


                                                <!-- ========================= Investigations ============================= -->
                                                <div class="col-xxl-12 col-md-12 text-center">
                                                    <button class="btn btn-primary " name="submit"
                                                        type="submit">Submit</button>
                                                </div>
                                            </form>
                                            <!--end row-->
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div> <!-- container-fluid -->
                </div><!-- End Page-content -->
                <?php include('admin/footer.php') ?>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <!--preloader-->
        <!-- <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div> -->

        <!-- Theme Settings -->


        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Vector map-->
        <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

        <!--Swiper slider js-->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>
        <!--jquery cdn-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--select2 cdn-->
        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="assets/js/pages/select2.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/formhandler.js"></script>
        <script src="assets/js/pages/form-input-spin.init.js"></script>
        <!-- input flag init -->
        <script src="assets/js/pages/flag-input.init.js"></script>
        <script src="assets/js/pages/range-sliders.init.js"></script>

    </body>

    </html>
<?php } ?>