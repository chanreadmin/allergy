<?php
session_start();
include('layout/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    // if (isset($_POST['submit'])) {
    //     $drug_name = $_POST['drug_name'];
    //     $dose = $_POST['dose'];
    //     $duration = $_POST['duration'];
    //     $instruction = $_POST['instruction'];
    //     $gid = intval($_GET['pid']);
    //     $updatedBy = $_SESSION['adminName'];
    //     $centerName = $_SESSION['centerName'];
    //     $centerCode = $_SESSION['centerCode'];
    //     $isActive = 1;
    //     $insQuery = mysqli_query($conn, "Insert into tbl_prescription 
    //     (drug_name, dose, duration, instruction, centerCode, centerName, patient_id, updatedBy, isActive) 
    //     values('$drug_name', '$dose','$duration', '$instruction','$centerCode', '$centerName', '$gid' ,'$updatedBy','$isActive' )");

    //     if ($insQuery) {
    //         echo "<script>alert('You have successfully inserted the data');</script>";
    //     } else {
    //         echo "<script>alert('Failed to insert the data');</script>";
    //     }
    // }

    $pid = intval($_GET['pid']);
    $vid = intval($_GET['sid']);
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
                                    <h4 class="mb-sm-0">Prescription</h4>
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Add Prescription</li>
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
                                        <h4 class="card-title mb-0 flex-grow-1">Medication</h4>
                                        <div class="flex-shrink-0">
                                            <a href="components/pdf-prescription.php?pid=<?php $tid = intval($_GET['pid']);
                                            echo $tid; ?>&&sid=<?php echo $vid; ?>?>" class="btn btn-primary">PDF</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="live-preview">
                                            <div class="table-responsive">
                                                <table id="buttons-datatables" class="display table table-bordered"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Drug</th>
                                                            <th>Dose</th>
                                                            <th>Duration</th>
                                                            <th>Instruction</th>
                                                            <!-- <th>Action</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $gid = intval($_GET['pid']);
                                                        $sid = intval($_GET['sid']);
                                                        // $myquery = mysqli_query($conn, "Select createdAt, visit, duration, instruction from tbl_prescription GROUP BY visit ORDER BY visit DESC where patient_id = '$gid' ");
                                                        $myquery = mysqli_query($conn, "SELECT * from tbl_prescription Where patient_id = '$gid' && visit ='$sid'");

                                                        while ($row = mysqli_fetch_array($myquery)) {

                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo htmlentities($row['drug_name']) ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo htmlentities($row['dose']) ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo htmlentities($row['duration']) ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo htmlentities($row['instruction']) ?>
                                                                </td>


                                                            </tr>
                                                        <?php } ?>
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
        <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <!--select2 cdn-->
        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-ecommerce.init.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

        <script src="assets/js/pages/select2.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/formhandler.js"></script>
        <script>
            $(document).ready(function () {
                var i = 1;

                function addRow() {
                    i++;
                    var newRow =
                        '<tr id="row' + i + '">' +
                        '<td><input type="text" name="drug_name[]" placeholder="Enter your Name" class="form-control name_list" /></td>' +
                        '<td><input type="text" name="dose[]" placeholder="Enter Dose" class="form-control dose_list" /></td>' +
                        '<td><input type="text" name="duration[]" placeholder="Enter Duration" class="form-control duration_list" /></td>' +
                        '<td><input type="text" name="instruction[]" placeholder="Enter instruction" class="form-control instruction_list" /></td>' +
                        '<td><button type="button" name="remove" id="' + i +
                        '" class="btn btn-danger btn_remove">X</button></td>' +
                        '</tr>';
                    $('#dynamic_field').append(newRow);
                }

                $('#add').click(addRow);

                $(document).on('click', '.btn_remove', function () {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id).remove();
                });

                $('#submit').click(function () {
                    $.ajax({
                        url: "components/add-prescription-patient.php",
                        method: "POST",
                        data: $('#add_name').serialize(),
                        success: function (data) {
                            alert(data);
                            $('#add_name')[0].reset();
                        }
                    });
                });

            });
        </script>
    </body>

    </html>
<?php } ?>