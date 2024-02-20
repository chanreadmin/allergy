<?php
session_start();
include('layout/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {

    $centerCode = $_SESSION['centerCode'];
    $centerName = $_SESSION['centerName'];
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
                                <h4 class="mb-sm-0">Add Staff</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Add Staff</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Add staff</h4>
                                    <div class="flex-shrink-0">

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="live-preview">
                                        <div class="row gy-4">
                                            <div class="p-2 mt-4 offset-md-3 ">
                                                <form action="components/add-staff.php" class="needs-validation"
                                                    novalidate method="POST">
                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label">Name <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="empName"
                                                            id="empName" placeholder="Enter full Name" required>
                                                        <div class="invalid-feedback">
                                                            Please enter Hospital Name
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="useremail" class="form-label">Role <span
                                                                class="text-danger">*</span></label>
                                                        <select name="role" id="role" class="form-control">
                                                            <option value="">Select</option>
                                                            <option value="Doctor">Doctor</option>
                                                            <option value="Receptionist">Receptionist</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            Please enter email
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label">Qualification <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="empQualification"
                                                            id="empQualification" placeholder="Enter Qualification"
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Please enter Hospital Name
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label">Designation <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="empDesignation"
                                                            id="empDesignation" placeholder="Enter Designation"
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Please enter Hospital Name
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label">KMC No<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" name="empkmc"
                                                            id="empkmc" placeholder="Enter KMC no" required>
                                                        <div class="invalid-feedback">
                                                            Please enter center code
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <!-- <label for="username" class="form-label">Center Name <span
                                                                    class="text-danger">*</span></label> -->
                                                        <input type="text" class="form-control" name="centerName"
                                                            id="hospital_name" value="<?php echo $centerName; ?>"
                                                            placeholder="Enter Hospital Name" required hidden>
                                                        <div class="invalid-feedback">
                                                            Please enter Hospital Name
                                                        </div>
                                                    </div>


                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <!-- <label for="username" class="form-label">Center Code<span
                                                                class="text-danger">*</span></label> -->
                                                        <input type="text" class="form-control" name="centerCode"
                                                            id="centerCode" placeholder="Enter center code"
                                                            value="<?php echo $centerCode; ?>" required hidden>
                                                        <div class="invalid-feedback">
                                                            Please enter center code
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label">Mobile<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" id="usermobile"
                                                            name="usermobile" placeholder="Enter mobile number"
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Please enter mobile number
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="useremail" class="form-label">Email <span
                                                                class="text-danger">*</span></label>
                                                        <input type="email" class="form-control" id="useremail"
                                                            name="useremail" placeholder="Enter email address" required>
                                                        <div class="invalid-feedback">
                                                            Please enter email
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label for="username" class="form-label">Username <span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" onkeyup="checkUsernameAvailability()"
                                                            class="form-control" id="empUsername" name="empUsername"
                                                            autocomplete="false" placeholder="Enter username (Login id)"
                                                            required>
                                                        <span id="availability-status"></span>
                                                    </div>

                                                    <div class="mb-3 col-xxl-4 col-md-6">
                                                        <label class="form-label" for="password-input">Password</label>
                                                        <div class="position-relative auth-pass-inputgroup">
                                                            <input type="password"
                                                                class="form-control pe-5 password-input"
                                                                onpaste="return false" placeholder="Enter password"
                                                                id="password-input" aria-describedby="passwordInput"
                                                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                                                name="empPassword" required>
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="password-addon"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                            <div class="invalid-feedback">
                                                                Please enter password
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                        <h5 class="fs-13">Password must contain:</h5>
                                                        <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8
                                                                characters</b>
                                                        </p>
                                                        <p id="pass-lower" class="invalid fs-12 mb-2">At
                                                            <b>lowercase</b> letter
                                                            (a-z)
                                                        </p>
                                                        <p id="pass-upper" class="invalid fs-12 mb-2">At least
                                                            <b>uppercase</b>
                                                            letter (A-Z)
                                                        </p>
                                                        <p id="pass-number" class="invalid fs-12 mb-0">A least
                                                            <b>number</b> (0-9)
                                                        </p>
                                                    </div>
                                                    <div class="mt-4 col-xxl-4 col-md-6">
                                                        <button class="btn btn-success w-100" name="submit"
                                                            type="submit">Save</button>
                                                    </div>
                                                </form>
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
    $(document).ready(function() {
        $('#center_username').keyup(function() {
            checkUsernameAvailability();
        });
    });

    function checkUsernameAvailability() {
        var username = $('#center_username').val();
        if (username !== '') {
            $.ajax({
                type: 'POST',
                url: 'components/add-staff.php',
                data: {
                    username: username
                },
                success: function(response) {
                    $('#availability-status').html(response);
                }
            });
        } else {
            $('#availability-status').html('<span style="color:red;"></span>');
        }
    }
    </script>
</body>

</html>
<?php } ?>