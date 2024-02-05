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
                                    <h4 class="card-title mb-0 flex-grow-1">Add Medication</h4>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form method="POST" enctype="multipart/form-data" class="row gy-4"
                                            name="add_name" id="add_name">

                                            <div class="col-md-2 col-xxl-2 ">
                                                <label for="">Visit</label>
                                                <div class="input-group mb-3 input-group-sm">
                                                    <select name="visit" id="visit" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <input type="text" value="<?php echo $pid; ?>" name="patient_id"
                                                    id="patient_id" hidden>
                                            </div>
                                            <div class="col-xxl-12 col-md-12">
                                                <table class="table table-bordered" id="dynamic_field">
                                                    <tr>
                                                        <td><input type="text" name="drug_name[]" id="drug_name"
                                                                placeholder="Enter drug name.." class="form-control"
                                                                required></td>
                                                        <td><input type="text" name="dose[]" id="dose"
                                                                placeholder="Enter dose.." class="form-control"
                                                                required></td>
                                                        <td><input type="text" name="duration[]" id="duration"
                                                                placeholder="Enter duration.." class="form-control"
                                                                required></td>
                                                        <td><input type="text" name="instruction[]" id="instruction"
                                                                placeholder="Enter instruction.." class="form-control">
                                                        </td>
                                                        <td><button type="button" name="add" id="add"
                                                                class="btn btn-success">+</button></td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!-- ========================= Investigations ============================= -->
                                            <div class="col-xxl-12 col-md-12 text-center">
                                                <button class="btn btn-primary " name="submit" type="submit"
                                                    id="submit">Submit</button>
                                            </div>
                                        </form>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header align-items-center d-flex">
                                    <h4 class="card-title mb-0 flex-grow-1">Prescription</h4>
                                    <div class="flex-shrink-0">
                                        <!-- <a href="add-prescription.php?pid=<?php $tid = intval($_GET['pid']);
                                            echo $tid; ?>" class="btn btn-danger">Add
                                            Prescription</a> -->
                                        <!-- <a href="components/pdf-prescription.php?pid=<?php $tid = intval($_GET['pid']);
                                            echo $tid; ?>" class="btn btn-primary">PDF</a> -->
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
                                                        <th>visit</th>
                                                        <th>Patient Id</th>
                                                        <th>Updated By</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $gid = intval($_GET['pid']);
                                                        $myquery = mysqli_query($conn, "SELECT
                                                    MAX(drug_name) AS drug_name,
                                                    MAX(dose) AS dose,
                                                    MAX(duration) AS duration,
                                                    MAX(instruction) AS instruction,
                                                    MAX(centerCode) AS centerCode,
                                                    MAX(centerName) AS centerName,
                                                    MAX(patient_id) AS patient_id,
                                                    MAX(updatedBy) AS updatedBy,
                                                    visit,
                                                    MAX(createdAt) AS createdAt
                                                FROM
                                                    tbl_prescription
                                                WHERE
                                                    patient_id = '$gid'
                                                GROUP BY
                                                    visit ORDER BY visit DESC;");
                                                        while ($row = mysqli_fetch_array($myquery)) {

                                                            ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo htmlentities($row['createdAt']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['visit']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['patient_id']) ?>
                                                        </td>
                                                        <td>
                                                            <?php echo htmlentities($row['updatedBy']) ?>
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="view-prescription.php?pid=<?php echo $gid; ?>&&sid=<?php echo htmlentities($row['visit']); ?>">
                                                                View</a>
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
    $(document).ready(function() {
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

        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id).remove();
        });

        $('#submit').click(function() {
            $.ajax({
                url: "components/add-prescription-patient.php",
                method: "POST",
                data: $('#add_name').serialize(),
                success: function(data) {
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