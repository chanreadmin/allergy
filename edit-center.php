<?php
session_start();
include('layout/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
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
    body {
        overflow-x: hidden;
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
                                <h4 class="mb-sm-0">Edit Hospital</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Edit Hospital</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Edit Hospital</h4>
                                    <div class="flex-shrink-0">

                                    </div>
                                </div><!-- end card header -->
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="p-2 mt-4 offset-md-4 ">
                                                <?php
                                                    $center_id = intval($_GET['hid']);
                                                    $query = mysqli_query($conn, "SELECT * From tbl_users Where id = $center_id");
                                                    while ($rows = mysqli_fetch_array($query)) {
                                                        ?>
                                                <form action="components/add-hospital.php?hid=<?php echo $center_id; ?>"
                                                    class="needs-validation" novalidate method="POST">
                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label"> Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="empName"
                                                            id="empName" placeholder="Enter full Name"
                                                            value="<?php echo htmlentities($rows['empName']); ?>"
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Please enter full Name
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label"> Qualification <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="empQualification"
                                                            id="empQualification" placeholder="Enter Qualification"
                                                            value="<?php echo htmlentities($rows['empQualification']); ?>"
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Please enter qualification
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label"> Designation <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="empDesignation"
                                                            id="empDesignation" placeholder="Enter Designation"
                                                            value="<?php echo htmlentities($rows['empDesignation']); ?>"
                                                            required>
                                                        <div class=" invalid-feedback">
                                                            Please enter designation
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label"> KMC No <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="empkmc"
                                                            value="<?php echo htmlentities($rows['empkmc']); ?>"
                                                            id=" empkmc" placeholder="Enter KMC No" required>
                                                        <div class="invalid-feedback">
                                                            Please enter designation
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label">Hospital Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="centerName"
                                                            id="hospital_name" placeholder="Enter Hospital Name"
                                                            required
                                                            value="<?php echo htmlentities($rows['centerName']) ?>">
                                                        <div class="invalid-feedback">
                                                            Please enter Hospital Name
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label">Center Code<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="centerCode"
                                                            id="centerCode" placeholder="Enter center code"
                                                            value="<?php echo htmlentities($rows['centerCode']) ?>"
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Please enter center code
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label">Mobile<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="mobile"
                                                            value="<?php echo htmlentities($rows['center_contact']) ?>"
                                                            name=" center_contact" placeholder="Enter mobile number"
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Please enter mobile number
                                                        </div>
                                                    </div>


                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="useremail" class="form-label">Email <span
                                                                class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="useremail"
                                                            value="<?php echo htmlentities($rows['center_email']) ?>"
                                                            name=" center_email" placeholder="Enter email address"
                                                            required>

                                                        <div class="invalid-feedback">
                                                            Please enter email
                                                        </div>
                                                    </div>
                                                    <div class="mt-4 col-xxl-3 col-md-6">
                                                        <button class="btn btn-success w-100" name="update"
                                                            type="submit">Update</button>
                                                    </div>
                                                </form>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->


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

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <!-- validation init -->
    <script src="assets/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="assets/js/pages/passowrd-create.init.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    // function checkUsernameAvailability() {
    //     var username = $('#username').val();

    //     // Check if the username is not empty
    //     if (username !== '') {
    //         $.ajax({
    //             type: 'POST',
    //             url: 'components/add-hospital.php',
    //             data: {
    //                 username: username
    //             },
    //             success: function(response) {
    //                 $('#availability-status').html(response);
    //             }
    //         });
    //     } else {
    //         // If the username is empty, display a message
    //         $('#availability-status').html('<span style="color:red;">Please enter a username</span>');
    //     }
    // }
    // 

    $(document).ready(function() {
        $('#center_username').keyup(function() {
            checkUsernameAvailability();
        });
    });

    function checkUsernameAvailability() {
        var username = $('#center_username').val();
        // alert(username)
        // Check if the username is not empty
        if (username !== '') {
            $.ajax({
                type: 'POST',
                url: 'components/add-hospital.php',
                data: {
                    username: username
                },
                success: function(response) {
                    $('#availability-status').html(response);
                }
            });
        } else {
            // If the username is empty, display a message
            $('#availability-status').html('<span style="color:red;"></span>');
        }
    }
    </script>
</body>

</html>
<?php } ?>