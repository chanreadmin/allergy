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

    input[type="range"] {
        width: 100%;
        margin-top: 10px;
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
                                <h4 class="mb-sm-0">Allergic Rhinitis</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Allergic Rhinitis</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Allergic Rhinitis</h4>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="live-preview">
                                        <form action="components/allergic-followup.php?pid=<?php echo $sid; ?>"
                                            method="post" enctype="multipart/form-data" class="row gy-4">

                                            <!--end col-->
                                            <div class="table-responsive">
                                                <table id="buttons-datatables" class="display table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Nasal Symptom Severity</th>
                                                            <th>Score(0-7)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Sneezing</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider1" min="0" max="7" value="0" step="1"
                                                                    oninput="updateSneezing()" onchange="totalns()"
                                                                    name="sneezing">
                                                                <div id="sliderValue1">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Running Nose</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider2" min="0" max="7" value="0" step="1"
                                                                    oninput="updateRunningNose()" onchange="totalns()"
                                                                    name="rnose">
                                                                <div id="sliderValue2">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Congestion</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider3" min="0" max="7" value="0" step="1"
                                                                    oninput="Congestion()" onchange="totalns()"
                                                                    name="congestion">
                                                                <div id="sliderValue3">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Itchy Nose</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider4" min="0" max="7" value="0" step="1"
                                                                    oninput="ItchyNose()" onchange="totalns()"
                                                                    name="itchynose">
                                                                <div id="sliderValue4">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Post Nasal Drop</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider5" min="0" max="7" value="0" step="1"
                                                                    oninput="PostNasalDrop()" onchange="totalns()"
                                                                    name="pns">
                                                                <div id="sliderValue5">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total Nasal Symptoms</td>
                                                            <td>
                                                                <input type="text" class="form-control" id="tns"
                                                                    name="tns">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Non Nasal Symptom Severity</th>
                                                            <th>Score(0-7)</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Eye Symptoms</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider6" min="0" max="7" value="0" step="1"
                                                                    oninput="updateEyeSymptoms()"
                                                                    onchange="tnnsymptom()" name="eyesymptoms">
                                                                <div id="sliderValue6">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Throat Symptoms</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider7" min="0" max="7" value="0" step="1"
                                                                    oninput="updateThroatSymptoms()"
                                                                    onchange="tnnsymptom()" name="throatsymptoms">
                                                                <div id="sliderValue7">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Chronic Symptoms</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider8" min="0" max="7" value="0" step="1"
                                                                    oninput="updateChronicSymptoms()" name="chronic"
                                                                    onchange="tnnsymptom()">
                                                                <div id="sliderValue8">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ear Symptoms</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider9" min="0" max="7" value="0" step="1"
                                                                    oninput="updateEarSymptoms()" name="earsymptoms"
                                                                    onchange="tnnsymptom()">
                                                                <div id="sliderValue9">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Headache</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider10" min="0" max="7" value="0"
                                                                    step="1" oninput="updateHeadache()" name="headache"
                                                                    onchange="tnnsymptom()">
                                                                <div id="sliderValue10">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mental Function</td>
                                                            <td>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider11" min="0" max="7" value="0"
                                                                    name="mental" step="1"
                                                                    oninput="updateMentalFunction()"
                                                                    onchange="tnnsymptom()">
                                                                <div id="sliderValue11">Value: 0</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total</td>
                                                            <td>
                                                                <input type="text" id="tnns" name="tnns"
                                                                    class="form-control">

                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <th>Quality of life assesment of rhinitis Severly</th>
                                                            <th>
                                                                <input type="range" data-slider-color="secondary"
                                                                    id="rangeSlider12" min="0" max="7" value="0"
                                                                    name="quality" step="1" oninput="updateQuality()">
                                                                <div id="sliderValue12">Value: 0</div>
                                                            </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">Medication for Non-Nasal
                                                        Symptom
                                                    </label>
                                                    <input type="text" class="form-control" name="nnsymptoms">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">Medication for Nasal
                                                        Symptom
                                                    </label>
                                                    <input type="text" class="form-control" name="medicationns">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">No of Antihistamine
                                                        consumed
                                                    </label>
                                                    <input type="text" class="form-control" name="antihistamine">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">Other Medication, If any?
                                                    </label>
                                                    <input type="text" class="form-control" name="othermedication">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <h4>GPE</h4>
                                                    <!-- <input type="text" class="form-control"> -->
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">Weight
                                                    </label>
                                                    <input type="text" class="form-control" name="weight">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">Pulse
                                                    </label>
                                                    <input type="text" class="form-control" name="pulse">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">Bp
                                                    </label>
                                                    <input type="text" class="form-control" name="bp">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">RR
                                                    </label>
                                                    <input type="text" class="form-control" name="rr">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">Temp
                                                    </label>
                                                    <input type="text" class="form-control" name="temp">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">SPO<sub>2</sub>%
                                                    </label>
                                                    <input type="text" class="form-control" name="spo">
                                                </div>
                                            </div>
                                            <!-- col end -->


                                            <div class="col-xxl-12 col-md-12">
                                                <div>

                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">ENT Examination
                                                    </label>
                                                    <input type="text" class="form-control" name="ent">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <h4>Systematic Examination</h4>
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">CNS
                                                    </label>
                                                    <input type="text" class="form-control" name="cns">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">CVS
                                                    </label>
                                                    <input type="text" class="form-control" name="cvs">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">RS
                                                    </label>
                                                    <input type="text" class="form-control" name="rs">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">P/A
                                                    </label>
                                                    <input type="text" class="form-control" name="pa">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">Drug Adverse Notion
                                                    </label>
                                                    <input type="text" class="form-control" name="drugadverse">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">Drug Compliance
                                                    </label>
                                                    <input type="text" class="form-control" name="drugcomp">
                                                </div>
                                            </div>
                                            <!-- col end -->
                                            <!-- col start -->
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="drug_name" class="form-label">Advise to be followed up
                                                        till next visit
                                                    </label>
                                                    <input type="text" class="form-control" name="advise">
                                                </div>
                                            </div>
                                            <!-- col end -->
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

    <script src="assets/js/pages/form-advanced.init.js"></script>
    <!-- input spin init -->
    <script src="assets/js/pages/form-input-spin.init.js"></script>
    <!-- input flag init -->
    <script src="assets/js/pages/flag-input.init.js"></script>
    <script src="assets/js/pages/range-sliders.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/formhandler.js"></script>



</body>

</html>
<?php } ?>