<?php
session_start();
include('layout/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {


    if ($_GET['action'] = 'del') {
        $postid = intval($_GET['sid']);
        $query = mysqli_query($conn, "delete from tbl_investigation where id='$postid'");
        if ($query) {
            $msg = "Hospital deleted ";
        } else {
            $error = "Something went wrong . Please try again.";
        }
    }
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

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                It!</button>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <!-- ========== App Menu ========== -->
        <?php
            include('admin/leftsidebar.php')
                ?>
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
                                <h4 class="mb-sm-0">Atopic Dermatis</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">View</a></li>
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
                                    <a href="atopic-dermatis.php?pid=<?php echo $postid; ?>" style="float:right"
                                        class="btn btn-primary">Add Follow Up</a>
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
                                                        <th>symptoms</th>
                                                        <th>affected_area</th>
                                                        <th>erythema</th>
                                                        <th>oedema</th>
                                                        <th>swl</th>
                                                        <th>oozing</th>
                                                        <th>crusting</th>
                                                        <th>excoriation</th>
                                                        <th>lichenification</th>
                                                        <th>dryness</th>
                                                        <th>redness</th>
                                                        <th>swelling</th>
                                                        <th>oozing</th>
                                                        <th>scratching</th>
                                                        <th>thickened</th>
                                                        <th>itching</th>
                                                        <th>sleep</th>
                                                        <th>pmedications</th>
                                                        <th>lapplication</th>
                                                        <th>othermedications</th>
                                                        <th>centerCode</th>
                                                        <th>centerName</th>
                                                        <th>patient_id</th>
                                                        <th>updatedBy</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $gid = intval($_GET['pid']);
                                                        $myquery = mysqli_query($conn, "Select * from tbl_atopic where patient_id = '$gid'");
                                                        while ($row = mysqli_fetch_array($myquery)) {
                                                            ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo htmlentities($row['createdAt']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['symptoms']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['affected_area']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['erythema']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['oedema']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['swl']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['oozing']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['crusting']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['excoration']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['lichenification']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['dryness']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['redness']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['swelling']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['ooz']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['scratching']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['thickend']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['itching']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['sleep']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['pmedications']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['lapplication']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['othermedications']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['centerCode']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['centerName']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['patient_id']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['updatedBy']) ?>
                                                        </td>
                                                        <td>
                                                            <a href="atopic-edit.php?pid=<?php echo $gid; ?>&&sid=<?php echo $row['id']; ?>"
                                                                class="btn btn-success">View & Edit</a>
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