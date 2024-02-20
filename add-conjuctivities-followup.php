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
        <meta content="" name="description" />
        <meta content="" name="author" />
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
            <?php include('admin/header.php'); ?>
            <!-- removeNotificationModal -->
            <!-- ========== App Menu ========== -->
            <?php include('admin/leftsidebar.php'); ?>
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
                                    <h4 class="mb-sm-0">Allergic Conjunctivities</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Allergic Conjunctivities</li>
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
                                        <h4 class="card-title mb-0 flex-grow-1">Allergic Conjunctivities</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <form action="components/conjunctivities.php?pid=<?php echo $sid; ?>"
                                                method="post" enctype="multipart/form-data" class="row gy-4">
                                                <div class="col-xxl-3 col-md-3">
                                                    <div>
                                                        <label for="symptoms" class="form-label">Symptoms</label>

                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-9">
                                                    <div>
                                                        <input type="radio" name="itching" id="itching" value="Itching">
                                                        Itching &nbsp;
                                                        <input type="radio" name="tearing" id="tearing" value="Tearing">
                                                        Tearing &nbsp;
                                                        <input type="radio" name="redness" id="redness" value="Redness">
                                                        Redness &nbsp;
                                                        <input type="radio" name="discomfort" id="discomfort"
                                                            value="Discomfort">
                                                        Discomfort &nbsp;
                                                        <input type="radio" name="discharge" id="discharge"
                                                            value="Discharge">
                                                        Discharge &nbsp;
                                                        <input type="radio" name="photophobia" id="photophobia"
                                                            value="Photophobia"> Photophobia

                                                    </div>
                                                </div>
                                                <!--end col-->


                                                <div class="col-xxl-3 col-md-3">
                                                    <div>
                                                        <label for="symptoms" class="form-label">Type</label>

                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-3 col-md-9">
                                                    <div>
                                                        <input type="radio" name="seasonal" id="seasonal" value="seasonal">
                                                        Seasonal &nbsp;
                                                        <input type="radio" name="perinneal" id="perinneal"
                                                            value="perinneal">
                                                        Perinneal &nbsp;
                                                        <input type="radio" name="intermittent" id="intermittent"
                                                            value="intermittent">
                                                        Intermittent (< 4 days per week or < 4 consecutive week) &nbsp;
                                                            <input type="radio" name="persistent" id="persistent"
                                                            value="Persistent">
                                                            Persistent (< 4 days per week or < 4 consecutive week) &nbsp;
                                                                </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-xxl-12 col-md-12">
                                                        <div>
                                                            <h4>Grading</h4>
                                                        </div>
                                                    </div>


                                                    <div class="col-xxl-12 col-md-12">
                                                        <table id="myTable" class="table table-strip">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <strong>Grading</strong>
                                                                    </th>
                                                                    <th>Mild (0)</th>
                                                                    <th>Moderate (1-3)</th>
                                                                    <th>Severe (4)</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Signs & Symptoms being bothersome</td>
                                                                    <td><input type="radio" id="bothersome"
                                                                            name="bothersome" value="Mild"></td>
                                                                    <td><input type="radio" id="bothersome"
                                                                            name="bothersome" value="Moderate"></td>
                                                                    <td><input type="radio" id="bothersome"
                                                                            name="bothersome" value="Severe"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Effects on vision</td>
                                                                    <td><input type="radio" id="vision" name="vision"
                                                                            value="Mild"></td>
                                                                    <td><input type="radio" id="vision" name="vision"
                                                                            value="Moderate"></td>
                                                                    <td><input type="radio" id="vision" name="vision"
                                                                            value="Severe"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Interference in School/Work</td>
                                                                    <td><input type="radio" id="interference"
                                                                            name="interference" value="Mild">
                                                                    </td>
                                                                    <td><input type="radio" id="interference"
                                                                            name="interference" value="Moderate"></td>
                                                                    <td><input type="radio" id="interference"
                                                                            name="interference" value="Severe"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Able to perform daily activities</td>
                                                                    <td><input type="radio" id="activities"
                                                                            name="activities" value="Mild"></td>
                                                                    <td><input type="radio" id="activities"
                                                                            name="activities" value="Moderate"></td>
                                                                    <td><input type="radio" id="activities"
                                                                            name="activities" value="Severe"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-xxl-6 col-md-6">
                                                        <div>
                                                            <label for="othermedications"
                                                                class="form-label">Ophthalmological Examination</label>
                                                            <textarea class="form-control" name="opthalexam"
                                                                id="opthalexam"></textarea>
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