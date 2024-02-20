<?php
session_start();
include('layout/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    $p_id = intval($_GET['pid']);
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
    </style>
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include('admin/header.php'); ?>
        <!-- ========== App Menu ========== -->
        <?php include('admin/leftsidebar.php'); ?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Test</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Add Test</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Add Test</h4>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form action="components/add-investigation.php?pid=<?php echo $p_id; ?>"
                                            method="post">
                                            <div class="table-responsive">
                                                <table class="display table table-bordered">
                                                    <thead align="center">
                                                        <tr>
                                                            <th>Screening Test</th>
                                                            <th>Reports</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>CBC</td>
                                                            <td>
                                                                <!-- <input type="text" name="cbc" class="form-control"
                                                                        placeholder="Write here .."> -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Hb</td>
                                                            <td><input type="text" name="hb" class="form-control"
                                                                    placeholder="Write here .."></td>
                                                        </tr>
                                                        <tr>
                                                            <td>TC</td>
                                                            <td><input type="text" name="tc" class="form-control"
                                                                    placeholder="Write here .."></td>
                                                        </tr>
                                                        <tr>
                                                            <td>DC</td>
                                                            <td>
                                                                <!-- <input type="text" name="dc" class="form-control"
                                                                    placeholder="Write here .."> -->
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Neutrophils</td>
                                                            <td><input type="text" name="neutrophils"
                                                                    class="form-control" placeholder="Write here ..">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Eosinophil</td>
                                                            <td><input type="text" name="eosinophil"
                                                                    class="form-control" placeholder="Write here ..">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lymphocytes</td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Write here .." name="lymphocytes"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Monocytes</td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Write here .." name="monocytes"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Platelets</td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Write here .." name="platelets"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>ESR</td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Write here .." name="esr"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serum Creatinine</td>
                                                            <td><input type="text" class="form-control"
                                                                    placeholder="Write here .." name="serum_creatinine">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Serum IgE Levels</td>
                                                            <td><input name="serumig" type="text" class="form-control"
                                                                    placeholder="Write here .."></td>
                                                        </tr>
                                                        <tr>
                                                            <td>C3 Levels</td>
                                                            <td><input name="clevel" type="text" class="form-control"
                                                                    placeholder="Write here .."></td>
                                                        </tr>
                                                        <tr>
                                                            <td>C4 Levels</td>
                                                            <td><input name="clevel4" type="text" class="form-control"
                                                                    placeholder="Write here .."></td>
                                                        </tr>
                                                        <tr>
                                                            <td>ANA (IF)</td>
                                                            <td><input name="ana" type="text" class="form-control"
                                                                    placeholder="Write here .."></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Urine Routine</td>
                                                            <td><input name="urine_routine" type="text"
                                                                    class="form-control" placeholder="Write here ..">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Allergy Panel</td>
                                                            <td><input name="allergy_panel" type="text"
                                                                    class="form-control" placeholder="Write here ..">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2" align="center"><button
                                                                    class="btn btn-primary" type="submit"
                                                                    name="submit">Submit</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Investigation</h4>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="table-responsive">
                                            <table id="buttons-datatables" class="display table table-bordered"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>hb</th>
                                                        <th>tc</th>
                                                        <th>N</th>
                                                        <th>E</th>
                                                        <th>L</th>
                                                        <th>M</th>
                                                        <th>Platelets</th>
                                                        <th>ESR</th>
                                                        <th>Serum Creatinine</th>
                                                        <th>Serum IgE Levels</th>
                                                        <th>C3 Levels</th>
                                                        <th>C4 Levels</th>
                                                        <th>ANA</th>
                                                        <th>Urine Routine</th>
                                                        <th>Allergy Panel</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $gid = intval($_GET['pid']);
                                                        $myquery = mysqli_query($conn, "Select * from tbl_investigation where patient_id = '$gid'");
                                                        while ($row = mysqli_fetch_array($myquery)) {

                                                            ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo htmlentities($row['createdAt']) ?>
                                                        </td>

                                                        <td>
                                                            <?php echo htmlentities($row['hb']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['tc']) ?>
                                                        </td>

                                                        <td>
                                                            <?php echo htmlentities($row['neutrophils']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['eosinophil']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['lymphocytes']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['monocytes']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['platelets']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['esr']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['serum_creatinine']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['serumig']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['clevel']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['clevel4']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['ana']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['urine_routine']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['allergy_panel']) ?>
                                                        </td>
                                                        <td>
                                                            <a href="" class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
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

</body>

</html>
<?php } ?>