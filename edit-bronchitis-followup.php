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
                                <h4 class="mb-sm-0">Allergic Bronchitis</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Allergic Bronchitis</li>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Allergic Bronchitis</h4>
                                </div>
                                <div class="card-body">
                                    <div class="live-preview">
                                        <?php
                                            $bid = intval($_GET['sid']);
                                            $query = mysqli_query($conn, "SELECT * from tbl_bronchitis where id ='$bid'  ");
                                            while ($row = mysqli_fetch_array($query)) {
                                                ?>
                                        <form
                                            action="components/bronchitis.php?pid=<?php echo htmlentities($row['patient_id']); ?>&&sid=<?php echo $row['id']; ?>"
                                            method="post" enctype="multipart/form-data" class="row gy-4">
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <label for="symptoms" class="form-label">Symptoms</label>

                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-3 col-md-6">
                                                <input type="text" value="<?php echo htmlentities($row['symptoms']); ?>"
                                                    class="form-control" name="symptoms" id="symptoms" required>
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
                                                    <input type="radio" name="types" id="seasonal"
                                                        <?= $row['types'] == 'Cough <3 weeks' ? "checked" : '' ?>
                                                        value="Cough <3 weeks">
                                                    Acute &nbsp;
                                                    <input type="radio" name="types" id="perinneal"
                                                        <?= $row['types'] == 'Cough for 3 months in 2 consecutive years' ? "checked" : '' ?>
                                                        value="Cough for 3 months in 2 consecutive years">
                                                    Chronic &nbsp;

                                                </div>
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <h4>Gina Grading of Asthma</h4>
                                                </div>
                                            </div>


                                            <div class="col-xxl-12 col-md-12">
                                                <table id="myTable" class="table table-strip">
                                                    <thead>
                                                        <tr>
                                                            <th>Characterstics</th>
                                                            <th>Controlled</th>
                                                            <th>Partially Controlled</th>
                                                            <th>Uncontrolled</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Day time symptoms</td>
                                                            <td><input type="radio" id="daytime" name="daytime"
                                                                    <?= $row['daytime'] == 0 ? "checked" : '' ?>
                                                                    value="0">
                                                                <= twice per weeks</td>
                                                            <td><input type="radio" id="daytime" name="daytime"
                                                                    <?= $row['daytime'] == 1 ? "checked" : '' ?>
                                                                    value="1">
                                                                > twice per weeks</td>
                                                            <td colspan="6"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Limitation of activities</td>
                                                            <td><input type="radio" id="limitation" name="limitation"
                                                                    <?= $row['limitation'] == 0 ? "checked" : '' ?>
                                                                    value="0"> None</td>
                                                            <td><input type="radio" id="limitation" name="limitation"
                                                                    <?= $row['limitation'] == 1 ? "checked" : '' ?>
                                                                    value="1"> Any</td>

                                                        </tr>
                                                        <tr>
                                                            <td>Nocturnal Symptoms / Awakening</td>
                                                            <td><input type="radio" id="nocturnal" name="nocturnal"
                                                                    <?= $row['nocturnal'] == 0 ? "checked" : '' ?>
                                                                    value="0"> None
                                                            </td>
                                                            <td><input type="radio" id="nocturnal" name="nocturnal"
                                                                    <?= $row['nocturnal'] == 1 ? "checked" : '' ?>
                                                                    value="1"> Any</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Need for relax/ rescue treatment</td>
                                                            <td><input type="radio" id="rescue" name="rescue" value="0"
                                                                    <?= $row['rescue'] == 0 ? "checked" : '' ?>>
                                                                <= twice per weeks</td>
                                                            <td><input type="radio" id="rescue" name="rescue" value="1"
                                                                    <?= $row['rescue'] == 1 ? "checked" : '' ?>>
                                                                > twice per weeks</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lung Function(PEF or FEV1)</td>
                                                            <td><input type="radio" id="lf" name="lf" value="0"
                                                                    <?= $row['lf'] == 0 ? "checked" : '' ?>> Normal
                                                            </td>
                                                            <td><input type="radio" id="lf" name="lf" value="1"
                                                                    <?= $row['lf'] == 1 ? "checked" : '' ?>>
                                                                < 80% predicted or Personal Best</td>
                                                        </tr>

                                                        <tr>
                                                            <td>Exacerbations</td>
                                                            <td><input type="radio" id="ex" name="ex" value="0"
                                                                    <?= $row['ex'] == 0 ? "checked" : '' ?>
                                                                    onclick="calculateTotal()"> None
                                                            </td>
                                                            <td><input type="radio" id="ex" name="ex" value="1"
                                                                    <?= $row['ex'] == 0 ? "checked" : '' ?>
                                                                    onclick="calculateTotal()"> One or
                                                                more / Year</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Result</td>
                                                            <td><input type="text" id="controlled" name="controlled"
                                                                    value="<?php echo htmlentities($row['controlled']); ?>"
                                                                    class="form-control" readonly></td>
                                                            <td><input type="text" id="partially" name="partially"
                                                                    value="<?php echo htmlentities($row['partially']); ?>"
                                                                    class="form-control" readonly></td>
                                                            <td><input type="text" id="uncontrolled" name="uncontrolled"
                                                                    value="<?php echo htmlentities($row['uncontrolled']); ?>"
                                                                    class="form-control" readonly> <br> <span
                                                                    class="btn btn-primary" onclick="resetForm()">Reset
                                                                </span></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <h4>Grading based on PFT</h4>
                                                </div>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <table id="myTable" class="table table-strip">
                                                    <thead>
                                                        <tr>
                                                            <th>Mild</th>
                                                            <th>Moderate</th>
                                                            <th>Severe</th>
                                                            <th>Very Severe</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="radio" id="pftgrading" name="pftgrading"
                                                                    <?= $row['pftgrading'] == 'Mild' ? "checked" : '' ?>
                                                                    value="Mild"> Fev => 80% </td>
                                                            <td><input type="radio" id="pftgrading" name="pftgrading"
                                                                    <?= $row['pftgrading'] == 'Moderate' ? "checked" : '' ?>
                                                                    value="Moderate">
                                                                Fev => 50-80%</td>
                                                            <td><input type="radio" id="pftgrading" name="pftgrading"
                                                                    <?= $row['pftgrading'] == 'Severe' ? "checked" : '' ?>
                                                                    value="Severe"> Fev => 30-50%</td>
                                                            <td> <input type="radio" id="pftgrading" name="pftgrading"
                                                                    <?= $row['pftgrading'] == 'Very Severe' ? "checked" : '' ?>
                                                                    value="Very Severe"> Extremely difficult to breathe
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-xxl-12 col-md-12">
                                                <div>
                                                    <h4>Habits</h4>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-md-6">
                                                <div>
                                                    <input type="radio" name="habits" id="habits" value="Smoker"
                                                        <?= $row['habits'] == 'Smoker' ? "checked" : '' ?>> Smoker
                                                    &nbsp;
                                                    <input type="radio" name="habits" id="habits" value="Non Smoker"
                                                        <?= $row['habits'] == 'Non Smoker' ? "checked" : '' ?>> Non
                                                    Smoker
                                                </div>
                                            </div>
                                            <!-- ========================= Investigations ============================= -->
                                            <div class="col-xxl-12 col-md-12 text-center">
                                                <button class="btn btn-primary " name="update"
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

    <script>
    function calculateTotal() {
        const daytimeValue = parseInt(document.querySelector('input[name="daytime"]:checked').value, 10) || 0;
        const limitationValue = parseInt(document.querySelector('input[name="limitation"]:checked').value, 10) || 0;
        const nocturnalValue = parseInt(document.querySelector('input[name="nocturnal"]:checked').value, 10) || 0;
        const rescueValue = parseInt(document.querySelector('input[name="rescue"]:checked').value, 10) || 0;
        const lfValue = parseInt(document.querySelector('input[name="lf"]:checked').value, 10) || 0;
        const exValue = parseInt(document.querySelector('input[name="ex"]:checked').value, 10) || 0;
        // Calculate the total
        total = daytimeValue + limitationValue + nocturnalValue + rescueValue + lfValue + exValue;
        // Display the total in a specific location (you can modify this based on your requirements)
        const resultElement = document.getElementById('result');
        if (total == 0) {
            var txt1 = "Controlled";
            document.getElementById('controlled').value = txt1;
        } else if (total > 0 && total <= 2) {

            var txt2 = "Partially Controlled";
            document.getElementById('partially').value = txt2;
        } else if (total >= 3) {
            var txt3 = "Uncontrolled";
            document.getElementById('uncontrolled').value = txt3;
        }
    }

    function resetForm() {
        // Reset radio buttons
        document.querySelectorAll('input[type="radio"]').forEach(radio => {
            radio.checked = false;
        });

        // Reset text boxes
        document.querySelectorAll('input[type="text"]').forEach(textbox => {
            textbox.value = '';
        });
    }
    </script>

</body>

</html>
<?php } ?>