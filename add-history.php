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
                                <h4 class="mb-sm-0">Add History</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Add History</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Add History</h4>
                                    <div class="flex-shrink-0">

                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="live-preview">
                                        <?php
                                            $sid = intval($_GET['pid']);
                                            $query = mysqli_query($conn, "SELECT * from patients where patient_id = $sid");
                                            while ($rows = mysqli_fetch_array($query)) {
                                                ?>

                                        <form action="components/formdata.php" method="post"
                                            enctype="multipart/form-data" class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <!-- <label for="" class="form-label">Patient Id </label> -->
                                                    <input type="text" placeholder="Enter patient id"
                                                        class="form-control"
                                                        value="<?php echo htmlentities($rows['patient_id']); ?>"
                                                        id="patient_id" name="patient_id" required hidden>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-12 col-md-12">
                                                <table class="table table-strip">
                                                    <thead>
                                                        <tr>
                                                            <th>Have you ever had the following conditions</th>
                                                            <th>Yes</th>
                                                            <th>No</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Hay fever (itching of nose, sneezing, stuffy nose,
                                                                running nose) </td>
                                                            <td><input type="radio" id="hayfever"
                                                                    class="btn btn-success" name="hayfever" value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="hayfever" name="hayfever"
                                                                    value="No">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Asthma (wheezing)</td>
                                                            <td><input type="radio" id="asthma" class="btn btn-success"
                                                                    name="asthma" value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="asthma" name="asthma"
                                                                    value="No">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Other Breathing Problems - Shortness of Breath</td>
                                                            <td><input type="radio" id="breath" class="btn btn-success"
                                                                    name="breath" value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="breath" name="breath"
                                                                    value="No">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Hives or Swelling (urticarial-angioedema)</td>
                                                            <td><input type="radio" id="hives" class="btn btn-success"
                                                                    name="hives" value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="hives" name="hives" value="No">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sinus Trouble - Frequent Colds</td>
                                                            <td><input type="radio" id="sinus" class="btn btn-success"
                                                                    name="sinus" value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="sinus" name="sinus" value="No">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Eczema or other rashes (Poison Oak, Etc.)</td>
                                                            <td><input type="radio" id="eczema" class="btn btn-success"
                                                                    name="eczema_oak" value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="eczema" name="eczema_oak"
                                                                    value="No">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Food Allergies</td>
                                                            <td><input type="radio" id="foodallergy"
                                                                    class="btn btn-success" name="foodallergy"
                                                                    value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="foodallergy" name="foodallergy"
                                                                    value="No">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Arthritic Diseases</td>
                                                            <td>
                                                                <input type="radio" id="arthritisdiseases"
                                                                    class="btn btn-success" name="arthritisdiseases"
                                                                    value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="arthritisdiseases"
                                                                    name="arthritisdiseases" value="No">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Immune Defect (frequent or recurrent infections)</td>
                                                            <td><input type="radio" id="immune" class="btn btn-success"
                                                                    name="immune" value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="immune" name="immune"
                                                                    value="No">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Drug Allergy (Penicillin, Sulpha Aspirin, other)</td>
                                                            <td><input type="radio" id="drugallergy"
                                                                    class="btn btn-success" name="drugallergy"
                                                                    value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="drugallergy" name="drugallergy"
                                                                    value="No">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>Bee Sting or Insect Hypersensitivity (large swelling,
                                                                hives, shock)</td>
                                                            <td><input type="radio" id="beesting"
                                                                    class="btn btn-success" name="beesting" value="Yes">
                                                            </td>
                                                            <td><input type="radio" id="beesting" name="beesting"
                                                                    value="No">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end col-->
                                            <!--end col-->
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <h3>Details of Hay fever</h3>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="iconInput" class="form-label">Fever grade </label>
                                                    <div class="form-icon">
                                                        <input type="radio" id="fevergrade" name="fevergrade"
                                                            value="Mild"> Mild
                                                        <input type="radio" id="fevergrade" name="fevergrade"
                                                            value="Moderate"> Moderate
                                                        <input type="radio" id="fevergrade" name="fevergrade"
                                                            value="Severe"> Severe

                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="iconrightInput" class="form-label">Itching sore throat
                                                        and other symptoms if any</label>
                                                    <div class="form-icon">
                                                        <input type="radio" id="itchingsore" name="itchingsore"
                                                            value="Yes"> Yes
                                                        <input type="radio" id="itchingsore" name="itchingsore"
                                                            value="No"> No
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-4 col-md-6">
                                                <div>
                                                    <label for="exampleInputdate" class="form-label">Any specific day/
                                                        exposure/cycles of fever if noted </label>
                                                    <input type="text" class="form-control" id="exampleInputdate"
                                                        name="cycleoffever" placeholder="Any specific day">
                                                </div>
                                            </div>
                                            <!--end col-->


                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <h3>Asthma</h3>

                                                </div>
                                                <div class="col-xxl-3 col-md-6">
                                                    <select name="Asthma_data" onchange="asthmas()" id="Asthma_data"
                                                        class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="exampleInputtime" class="form-label">How often have
                                                        exacerbations occurred in the last year?</label>
                                                    <input type="text" placeholder="Write here.." class="form-control"
                                                        id="exacerbations" name="exacerbations">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <h3>Have these required any of the following and if so how
                                                        frequently?</h3>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <!-- ========================Addmission========================== -->

                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Admission to
                                                        hospital</label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" name="admhospital" id="admhospitaly" value="Yes"
                                                        onclick="addmission('show')"> Yes &nbsp;
                                                    <input type="radio" name="admhospital" id="admhospitaln" value="No"
                                                        onclick="addmission('hide')"> No
                                                </div>
                                            </div>
                                            <!--end col-->

                                            <div class="col-xxl-3 col-md-6">
                                                <div id="admhospital_yes" class="hidden">
                                                    <input type="text" class="form-control" id="admhospital_yess"
                                                        name="admhospital_yes" placeholder="Write here">
                                                </div>
                                            </div>

                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">

                                            </div>
                                            <!--end col-->
                                            <!-- ========================Admission========================== -->

                                            <!-- ========================Hopiatl========================== -->

                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">GP
                                                        attendances</label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" onclick="gpattendances('show')" id="gpy"
                                                        name="gp" value="Yes"> Yes
                                                    &nbsp;
                                                    <input type="radio" onclick="gpattendances('hide')" id="gpn"
                                                        name="gp" value="No"> No
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div id="gp_yes" class="hidden">
                                                    <input type="text" class="form-control" id="gp_yess" name="gp_yes"
                                                        placeholder="Write Here">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">

                                            </div>
                                            <!--end col-->
                                            <!-- ========================Hopiatl========================== -->
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">A&E attendances
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" name="ae" id="aey"
                                                        onclick="aeattendances('show')" value="Yes"> Yes &nbsp;
                                                    <input type="radio" name="ae" id="aen"
                                                        onclick="aeattendances('hide')" value="No"> No
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div id='ae_yes' class="hidden">
                                                    <input type="text" class="form-control" id="ae_yess" name="ae_yes"
                                                        placeholder="Write here">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">

                                            </div>
                                            <!--end col-->
                                            <!-- ========================AE========================== -->
                                            <!--end col-->
                                            <!-- ========================ITU========================== -->

                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Any ITU admissions in
                                                        the past?
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" onclick="itu_addmission('show')" id="ituy"
                                                        name="itu" value="Yes"> Yes &nbsp;
                                                    <input type="radio" onclick="itu_addmission('hide')" id="itun"
                                                        name="itu" value="No"> No
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div id="itu_yes" class="hidden">
                                                    <input type="text" class="form-control" id="itu_yess" name="itu_yes"
                                                        placeholder="Write here">
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                            </div>
                                            <!--end col-->
                                            <!-- ========================ITU========================== -->
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">How many times are
                                                        cough/wheeze present in a week</label>
                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" name="coughwhz" id="coughwhzy"
                                                        onclick="coughwhzz('show')" value="Yes"> Yes &nbsp;
                                                    <input type="radio" name="coughwhz" id="coughwhzn"
                                                        onclick="coughwhzz('hide')" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div class="hidden" id="coughwhz_yes">
                                                    <input type="text" class="form-control" id="coughwhz_yess"
                                                        name="coughwhz_yes" placeholder="Write here">
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                            </div>
                                            <!-- ============Interval=============== -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Are interval symptoms
                                                        present? </label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="intervaly"
                                                        onclick="intervalsymptoms('show')" name="intervals" value="Yes">
                                                    Yes &nbsp;
                                                    <input type="radio" id="intervaln"
                                                        onclick="intervalsymptoms('hide')" name="intervals" value="No">
                                                    No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div id="interval_yes" class="hidden">
                                                    <input type="text" class="form-control" id="intervals_yess"
                                                        name="intervals_yes" placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">

                                            </div>
                                            <!-- ====================Interval========================= -->

                                            <!-- ============Coughing=============== -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Coughing at night how
                                                        often does this wake the child </label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="cough_nighty" onclick="cough_nightz('show')"
                                                        name="cough_night" value="Yes"> Yes &nbsp;
                                                    <input type="radio" id="cough_nightn" onclick="cough_nightz('hide')"
                                                        name="cough_night" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div id="cough_night_yes" class="hidden">
                                                    <input type="text" class="form-control" id="cough_night_yess"
                                                        name="cough_night_yes" placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                            </div>
                                            <!-- ====================coughing========================= -->

                                            <!-- ============Early morning cough=============== -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Early morning cough
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="morningCoughy"
                                                        onclick="morningCoughs('show')" name="morningCough" value="Yes">
                                                    Yes &nbsp;
                                                    <input type="radio" id="morningCoughn"
                                                        onclick="morningCoughs('hide')" name="morningCough" value="No">
                                                    No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div id="morningCough_yes" class="hidden">
                                                    <input type="text" id="morningCough_yess" placeholder="Write here"
                                                        class="form-control" name="morningCough_yes">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                            </div>
                                            <!-- ====================Early morning cough========================= -->


                                            <!-- ============Exercise induced symptoms ?=============== -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Exercise induced
                                                        symptoms ?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="exercise_symptomy"
                                                        onclick="exercise_symptoms('show')" name="exercise_symptom"
                                                        value="Yes"> Yes &nbsp;
                                                    <input type="radio" id="exercise_symptomn"
                                                        onclick="exercise_symptoms('hide')" name="exercise_symptom"
                                                        value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div id="exercise_yes" class="hidden">
                                                    <input type="text" class="form-control" id="exercise_yess"
                                                        name="exercise_yes" placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                            </div>
                                            <!-- ====================Exercise induced symptoms ?========================= -->
                                            <!-- ============Anyone=============== -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Does anyone in the
                                                        family smoke?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="smokey" onclick="smokes('show')"
                                                        name="smoke" value="Yes"> Yes &nbsp;
                                                    <input type="radio" id="smoken" onclick="smokes('hide')"
                                                        name="smoke" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div id="smoke_yes" class="hidden">
                                                    <input type="text" id="smoke_yess" class="form-control"
                                                        name="smoke_yes" placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                            </div>
                                            <!-- ====================Anyone========================= -->

                                            <!-- ============Pet=============== -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Are there any pets at
                                                        home
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="petsy" onclick="petsz('show')" name="pets"
                                                        value="Yes">
                                                    Yes &nbsp;
                                                    <input type="radio" id="petsn" onclick="petsz('hide')" name="pets"
                                                        value="No">
                                                    No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div id="pets_yes" class="hidden">
                                                    <input type="text" class="form-control" id="pets_yess"
                                                        name="pets_yes" placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                            </div>
                                            <!-- ====================Pet========================= -->
                                            <!-- ============Pet=============== -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">What triggers
                                                        exacerbations?
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-6 col-md-6">
                                                <div>
                                                    <input type="checkbox" id="triggers1" name="triggers" value="URTIs">
                                                    URTIs &nbsp;
                                                    <input type="checkbox" id="triggers2" name="triggers"
                                                        value="Cold weather"> Cold
                                                    weather &nbsp;
                                                    <input type="checkbox" id="triggers3" name="triggers"
                                                        value="Pollen">
                                                    Pollen &nbsp;
                                                    <input type="checkbox" id="triggers4" name="triggers" value="Smoke">
                                                    Smoke &nbsp;
                                                    <input type="checkbox" id="triggers5" name="triggers"
                                                        value="Exercise"> Exercise
                                                    &nbsp;
                                                    <input type="checkbox" id="triggers6" name="triggers" value="Pets">
                                                    Pets &nbsp;
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="text" class="form-control"
                                                        placeholder="Others, please specify" id="triggers_other"
                                                        name="triggers_other">
                                                </div>
                                            </div>
                                            <!-- <div class="col-xxl-3 col-md-6">
                                            </div> -->
                                            <!-- ====================Pet========================= -->
                                            <div class="col-xxl-12 col-md-12">
                                                <table id="myTable" class="table table-strip">
                                                    <thead>
                                                        <tr>
                                                            <th>
                                                                <strong>Allergic Rhinitis</strong>
                                                                <select name="allergic_rhinitis" onchange="allergic()"
                                                                    id="allergic_rhinitis">
                                                                    <option value="">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                            </th>
                                                            <th>Not So Much</th>
                                                            <th>Mild</th>
                                                            <th>Mod</th>
                                                            <th>Severe</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Sneezing</td>
                                                            <td><input type="radio" id="sneezing_not_so_much"
                                                                    name="Sneezing" value="Not So Much"></td>
                                                            <td><input type="radio" id="sneezing_mild" name="Sneezing"
                                                                    value="Mild"></td>
                                                            <td><input type="radio" id="sneezing_mod" name="Sneezing"
                                                                    value="Mod"></td>
                                                            <td><input type="radio" id="sneezing_severe" name="Sneezing"
                                                                    value="Severe"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nasal Congestion</td>
                                                            <td><input type="radio" id="nasal_not_so_much" name="nasal"
                                                                    value="Not So Much"></td>
                                                            <td><input type="radio" id="nasal_mild" name="nasal"
                                                                    value="Mild"></td>
                                                            <td><input type="radio" id="nasal_mod" name="nasal"
                                                                    value="Mod"></td>
                                                            <td><input type="radio" id="nasal_severe" name="nasal"
                                                                    value="Severe"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Running Nose</td>
                                                            <td><input type="radio" id="runningnose_not_so_much"
                                                                    name="runningnose" value="Not So Much"></td>
                                                            <td><input type="radio" id="runningnose_mild"
                                                                    name="runningnose" value="Mild"></td>
                                                            <td><input type="radio" id="runningnose_mod"
                                                                    name="runningnose" value="Mod"></td>
                                                            <td><input type="radio" id="runningnose_severe"
                                                                    name="runningnose" value="Severe"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Itching Nose</td>
                                                            <td><input type="radio" id="itching_not_so_much"
                                                                    name="itching" value="Not So Much"></td>
                                                            <td><input type="radio" id="itching_mild" name="itching"
                                                                    value="Mild"></td>
                                                            <td><input type="radio" id="itching_mod" name="itching"
                                                                    value="Mod"></td>
                                                            <td><input type="radio" id="itching_severe" name="itching"
                                                                    value="Severe"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Itching Eyes</td>
                                                            <td><input type="radio" id="itchingeyes_not_so_much"
                                                                    name="itchingeyes" value="Not So Much"></td>
                                                            <td><input type="radio" id="itchingeyes_mild"
                                                                    name="itchingeyes" value="Mild"></td>
                                                            <td><input type="radio" id="itchingeyes_mod"
                                                                    name="itchingeyes" value="Mod"></td>
                                                            <td><input type="radio" id="itchingeyes_severe"
                                                                    name="itchingeyes" value="Severe"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Coughing</td>
                                                            <td><input type="radio" id="coughing1_not_so_much"
                                                                    name="coughing1" value="Not So Much"></td>
                                                            <td><input type="radio" id="coughing1_mild" name="coughing1"
                                                                    value="Mild"></td>
                                                            <td><input type="radio" id="coughing1_mod" name="coughing1"
                                                                    value="Mod"></td>
                                                            <td><input type="radio" id="coughing1_severe"
                                                                    name="coughing1" value="Severe"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wheezing</td>
                                                            <td><input type="radio" id="wheezing_not_so_much"
                                                                    name="Wheezing" value="Not So Much"></td>
                                                            <td><input type="radio" id="wheezing_mild" name="Wheezing"
                                                                    value="Mild"></td>
                                                            <td><input type="radio" id="wheezing_mod" name="Wheezing"
                                                                    value="Mod"></td>
                                                            <td><input type="radio" id="wheezing_severe" name="Wheezing"
                                                                    value="Severe"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Coughing or Wheezing</td>
                                                            <td><input type="radio" id="coughingorwheezing_not_so_much"
                                                                    name="coughingorwheezing" value="Not So Much"></td>
                                                            <td><input type="radio" id="coughingorwheezing_mild"
                                                                    name="coughingorwheezing" value="Mild"></td>
                                                            <td><input type="radio" id="coughingorwheezing_mod"
                                                                    name="coughingorwheezing" value="Mod"></td>
                                                            <td><input type="radio" id="coughingorwheezing_severe"
                                                                    name="coughingorwheezing" value="Severe"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>With Exercise</td>
                                                            <td><input type="radio" id="withexercise_not_so_much"
                                                                    name="withexcercise" value="Not So Much"></td>
                                                            <td><input type="radio" id="withexercise_mild"
                                                                    name="withexcercise" value="Mild"></td>
                                                            <td><input type="radio" id="withexercise_mod"
                                                                    name="withexcercise" value="Mod"></td>
                                                            <td><input type="radio" id="withexercise_severe"
                                                                    name="withexcercise" value="Severe"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Headaches</td>
                                                            <td><input type="radio" id="headaches_not_so_much"
                                                                    name="headaches" value="Not So Much"></td>
                                                            <td><input type="radio" id="headaches_mild" name="headaches"
                                                                    value="Mild"></td>
                                                            <td><input type="radio" id="headaches_mod" name="headaches"
                                                                    value="Mod"></td>
                                                            <td><input type="radio" id="headaches_severe"
                                                                    name="headaches" value="Severe"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Post Nasal Drip</td>
                                                            <td><input type="radio" id="nasaldrop_not_so_much"
                                                                    name="nasaldrop" value="Not So Much"></td>
                                                            <td><input type="radio" id="nasaldrop_mild" name="nasaldrop"
                                                                    value="Mild"></td>
                                                            <td><input type="radio" id="nasaldrop_mod" name="nasaldrop"
                                                                    value="Mod"></td>
                                                            <td><input type="radio" id="nasaldrop_severe"
                                                                    name="nasaldrop" value="Severe"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- ============Skin Allergy=============== -->
                                            <div class="col-xxl-12 col-md-12">
                                                <h4>
                                                    Skin Allergy
                                                </h4>
                                                <div class="col-xxl-3 col-md-6">
                                                    <select name="skin_allergy" onchange="skin_allergys()"
                                                        id="skin_allergy" class="form-control">
                                                        <option value="">Select</option>
                                                        <option value="Yes">Yes</option>
                                                        <option value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Heaves</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="heavesy" name="heaves" value="Yes"> Yes
                                                    &nbsp;
                                                    <input type="radio" id="heavesn" name="heaves" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Heaves
                                                        Distribution</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <select class="js-example-disabled-multi" id="hd" name="hd[]"
                                                        multiple="multiple">
                                                        <option value="Face">Face</option>
                                                        <option value="Extremities">Extremities</option>
                                                        <option value="Left Hand">Left Hand</option>
                                                        <option value="Right Hand">Right Hand</option>
                                                        <option value="Left Legs">Left Legs</option>
                                                        <option value="Right Legs">Right Legs</option>
                                                        <option value="Scalp">Scalp</option>
                                                        <option value="Flexures">Flexures</option>
                                                        <option value="Nasolabial Fold">Nasolabial Fold</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- ====================Skin Allergy========================= -->
                                            <!-- ================== Eczema ========================= -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Eczema</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="eczemay" name="eczema" value="Yes"> Yes
                                                    &nbsp;
                                                    <input type="radio" id="eczeman" name="eczema" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Eczema
                                                        Distribution</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <select class="js-example-disabled-multi" id="eczemad"
                                                        name="eczemad[]" multiple="multiple">
                                                        <option value="Face">Face</option>
                                                        <option value="Extremities">Extremities</option>
                                                        <option value="Left Hand">Left Hand</option>
                                                        <option value="Right Hand">Right Hand</option>
                                                        <option value="Left Legs">Left Legs</option>
                                                        <option value="Right Legs">Right Legs</option>
                                                        <option value="Scalp">Scalp</option>
                                                        <option value="Flexures">Flexures</option>
                                                        <option value="Nasolabial Fold">Nasolabial Fold</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- ======================== Eczema =========================== -->



                                            <!-- ================== Ulcer ========================= -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Ulcer</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="ulcery" name="ulcer" value="Yes"> Yes &nbsp;
                                                    <input type="radio" id="ulcern" name="ulcer" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Ulcer
                                                        Distribution</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <select class="js-example-disabled-multi" id="ulcerd"
                                                        name="ulcerd[]" multiple="multiple">
                                                        <option value="Face">Face</option>
                                                        <option value="Extremities">Extremities</option>
                                                        <option value="Left Hand">Left Hand</option>
                                                        <option value="Right Hand">Right Hand</option>
                                                        <option value="Left Legs">Left Legs</option>
                                                        <option value="Right Legs">Right Legs</option>
                                                        <option value="Scalp">Scalp</option>
                                                        <option value="Flexures">Flexures</option>
                                                        <option value="Nasolabial Fold">Nasolabial Fold</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- ======================== Ulcer =========================== -->

                                            <!-- ================== Papaulo ========================= -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Papaulo-squamous
                                                        rashes</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="papauloy" name="papaulo" value="Yes"> Yes
                                                    &nbsp;
                                                    <input type="radio" id="papaulon" name="papaulo" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Papaulo-squamous rashes
                                                        Distribution</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <select class="js-example-disabled-multi" id="papaulod"
                                                        name="papaulod[]" multiple="multiple">
                                                        <option value="Face">Face</option>
                                                        <option value="Extremities">Extremities</option>
                                                        <option value="Left Hand">Left Hand</option>
                                                        <option value="Right Hand">Right Hand</option>
                                                        <option value="Left Legs">Left Legs</option>
                                                        <option value="Right Legs">Right Legs</option>
                                                        <option value="Scalp">Scalp</option>
                                                        <option value="Flexures">Flexures</option>
                                                        <option value="Nasolabial Fold">Nasolabial Fold</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- ======================== papaulo =========================== -->

                                            <!-- ================== Papaulo ========================= -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Itching with no
                                                        rashes</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" id="norashesy" name="norashes" value="Yes"> Yes
                                                    &nbsp;
                                                    <input type="radio" id="norashesn" name="norashes" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="borderInput" class="form-label">Itching with no rashes
                                                        Distribution</label>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <select class="js-example-disabled-multi" id="norashesd"
                                                        name="norashesd[]" multiple="multiple">
                                                        <option value="Face">Face</option>
                                                        <option value="Extremities">Extremities</option>
                                                        <option value="Left Hand">Left Hand</option>
                                                        <option value="Right Hand">Right Hand</option>
                                                        <option value="Left Legs">Left Legs</option>
                                                        <option value="Right Legs">Right Legs</option>
                                                        <option value="Scalp">Scalp</option>
                                                        <option value="Flexures">Flexures</option>
                                                        <option value="Nasolabial Fold">Nasolabial Fold</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- ======================== papaulo =========================== -->

                                            <!-- ====================== History =========================== -->
                                            <div class="col-xxl-12 col-md-12">
                                                <h4>
                                                    History
                                                </h4>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Hypertension &nbsp; </label>
                                                    <input type="radio" name="hypertension" value="Yes"> Yes &nbsp;
                                                    <input type="radio" name="hypertension" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Diabetes &nbsp; </label>
                                                    <input type="radio" name="diabetes" value="Yes"> Yes &nbsp;
                                                    <input type="radio" name="diabetes" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Epilepsy &nbsp; </label>
                                                    <input type="radio" name="epilepsy" value="Yes"> Yes &nbsp;
                                                    <input type="radio" name="epilepsy" value="No"> No
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">IHD &nbsp; </label>
                                                    <input type="radio" name="ihd" value="Yes"> Yes &nbsp;
                                                    <input type="radio" name="ihd" value="No"> No
                                                </div>
                                            </div>
                                            <!-- ====================== History ========================== -->

                                            <!-- ====================== Any New Drugs recently prescribed before the onset =========================== -->
                                            <div class="col-xxl-12 col-md-12">
                                                <h4>
                                                    Any New Drugs recently prescribed before the onset
                                                </h4>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Drug Allergy Known </label>
                                                    <input type="text" name="dak" class="form-control"
                                                        placeholder="Write here..">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Probable </label>
                                                    <input type="text" name="pro" class="form-control"
                                                        placeholder="Write here..">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Definite &nbsp; </label>
                                                    <input type="text" name="def" class="form-control"
                                                        placeholder="Write here..">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>

                                                </div>
                                            </div>
                                            <!-- ====================== Any New Drugs recently prescribed before the onset ========================== -->
                                            <!-- ====================== Occupation and Exposure possibility =========================== -->
                                            <div class="col-xxl-12 col-md-12">
                                                <h4>
                                                    Occupation and Exposure possibility
                                                </h4>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Occupation</label>
                                                    <input type="text" name="occupation" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Probable Chemical Exposure</label>
                                                    <input type="text" name="pce" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Location &nbsp; </label>
                                                    <select class="js-example-disabled-multi" name="location[]"
                                                        multiple="multiple">
                                                        <option value="Rural">Rural</option>
                                                        <option value="Urban">Urban</option>
                                                        <option value="Surrounding Industry">Surrounding Industry
                                                        </option>
                                                        <option value="Travel">Any Latest Change or Travel</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Family History</label>
                                                    <input type="text" name="fhistory" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>
                                            <!-- ====================== Occupation and Exposure possibility ========================== -->
                                            <!-- ====================== Examination =========================== -->
                                            <div class="col-xxl-12 col-md-12">
                                                <h4>
                                                    Examination
                                                </h4>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Oral Cavity</label>
                                                    <input type="text" name="ocavity" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Skin</label>
                                                    <input type="text" name="skin" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">ENT </label>
                                                    <input type="text" name="ent" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Eye</label>
                                                    <input type="text" name="eye" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Respiratory System</label>
                                                    <input type="text" name="rs" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">CVS</label>
                                                    <input type="text" name="cvs" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">CNS</label>
                                                    <input type="text" name="cns" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Abdomen</label>
                                                    <input type="text" name="abdomen" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>

                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Any Other Findings</label>
                                                    <input type="text" name="anyother" class="form-control"
                                                        placeholder="Write here">
                                                </div>
                                            </div>
                                            <!-- ====================== Examination ========================== -->

                                            <!-- ========================= Investigations ============================= -->
                                            <!-- <div class="col-xxl-12 col-md-12">
                                                <h4>
                                                    Investigations
                                                </h4>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Screening Test</label>
                                                    <select class="js-example-disabled-multi" name="sctest[]"
                                                        multiple="multiple">
                                                        <option value="cbc">CBC</option>
                                                        <option value="esr">ESR</option>
                                                        <option value="serum creatinine">Serum creatinine</option>
                                                        <option value="crp">CRP</option>
                                                        <option value="Serum IgE levels">Serum IgE levels</option>
                                                        <option value="Urine Routine">Urine Routine</option>
                                                        <option value="C3 C4 levels">C3 C4 levels</option>
                                                        <option value="Allergy Panel">Allergy Panel</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Allergy Panel</label>
                                                    <input type="text" name="apanel" class="form-control">
                                                </div>
                                            </div> -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="">Report</label>
                                                    <input type="file" name="pdfreport" class="form-control">
                                                </div>
                                            </div>

                                            <!-- ========================= Investigations ============================= -->
                                            <div class="col-xxl-12 col-md-12 text-center">
                                                <button class="btn btn-primary " name="submit"
                                                    type="submit">Submit</button>
                                            </div>
                                        </form>

                                        <?php } ?>
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

</body>

</html>
<?php } ?>