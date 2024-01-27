<?php
session_start();
include('layout/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    $pid = intval($_GET['pid']);
    $postid = intval($_GET['sid']);
    $about = mysqli_query($conn, "Select * from patients where patient_id = '$pid' ");
    while ($row = mysqli_fetch_array($about)) {
        $patient_name = $row['patient_name'];
        $age = $row['age'];
        $sex = $row['sex'];
        $physician = $row['physician'];
        $address = $row['address'];
        $mobile = $row['mobile'];
        $email = $row['email'];
    }

    if ($_GET['action'] = 'del') {

        $isActive = 0;
        $query = mysqli_query($conn, "update tbl_prescription SET isActive='$isActive'  where id='$postid'");
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
        <title>Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <!-- swiper css -->
        <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

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

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">



            <?php include('admin/header.php'); ?>
            <!-- removeNotificationModal -->
            <!-- ========== App Menu ========== -->
            <?php include('admin/leftsidebar.php'); ?>

            <!-- removeNotificationModal -->

            <!-- ========== App Menu ========== -->

            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <div class="profile-foreground position-relative mx-n4 mt-n4">
                            <div class="profile-wid-bg">
                                <img src="assets/images/profile-bg.jpg" alt="" class="profile-wid-img" />
                            </div>
                        </div>
                        <div class="pt-4 mb-4 mb-lg-3 pb-lg-4 profile-wrapper">
                            <div class="row g-4">
                                <div class="col-auto">
                                    <div class="avatar-lg">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user-img"
                                            class="img-thumbnail rounded-circle" />
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col">
                                    <div class="p-2">
                                        <h3 class="text-white mb-1">
                                            <?php echo $patient_name; ?>
                                        </h3>
                                        <p class="text-white text-opacity-75">
                                            <?php echo $sex; ?>
                                        </p>
                                        <div class="hstack text-white-50 gap-1">
                                            <div class="me-2"><i
                                                    class="ri-map-pin-user-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>
                                                <?php echo $address; ?>
                                            </div>
                                            <div>
                                                <i
                                                    class="ri-building-line me-1 text-white text-opacity-75 fs-16 align-middle"></i>
                                                <?php echo $email; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-12 col-lg-auto order-last order-lg-0">
                                    <div class="row text text-white-50 text-center">
                                        <div class="col-lg-6 col-4">
                                            <div class="p-2">
                                                <!-- <h4 class="text-white mb-1">24.3K</h4>
                                                <p class="fs-14 mb-0">Followers</p> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-4">
                                            <div class="p-2">
                                                <!-- <h4 class="text-white mb-1">1.3K</h4>
                                                <p class="fs-14 mb-0">Following</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                            </div>
                            <!--end row-->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <div class="d-flex profile-wrapper">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1"
                                            role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab"
                                                    role="tab">
                                                    <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span
                                                        class="d-none d-md-inline-block">Overview</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities"
                                                    role="tab">
                                                    <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                                        class="d-none d-md-inline-block">Follow Up</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                                    <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span
                                                        class="d-none d-md-inline-block">Prescription</span>
                                                </a>
                                            </li>
                                            <!-- <li class="nav-item">
                                            <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                                <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                                    class="d-none d-md-inline-block">Documents</span>
                                            </a>
                                        </li> -->
                                        </ul>
                                        <div class="flex-shrink-0">
                                            <a href="pages-profile-settings.html" class="btn btn-success"><i
                                                    class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                                        </div>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content pt-4 text-muted">
                                        <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                            <div class="row">
                                                <div class="col-xxl-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-5">Patient Details</h5>
                                                            <div
                                                                class="progress animated-progress custom-progress progress-label">
                                                                <div class="progress-bar bg-danger" role="progressbar"
                                                                    style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                                                    aria-valuemax="100">
                                                                    <!-- <div class="label">30%</div> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-3">Info</h5>
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless mb-0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Full Name :</th>
                                                                            <td class="text-muted">
                                                                                <?php echo $patient_name; ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Mobile :</th>
                                                                            <td class="text-muted">
                                                                                <?php echo $mobile; ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">E-mail :</th>
                                                                            <td class="text-muted">
                                                                                <?php echo $email; ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Location :</th>
                                                                            <td class="text-muted">
                                                                                <?php echo $address; ?>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="ps-0" scope="row">Physician</th>
                                                                            <td class="text-muted">
                                                                                <?php echo $physician; ?>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">Investigations</h5>
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <?php include('components/inc-view-investigation.php'); ?>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title mb-4">Medications</h5>
                                                            <div class="d-flex flex-wrap gap-2 fs-15">
                                                                <?php include('components/inc-view-medications.php') ?>
                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div><!-- end card -->

                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="d-flex align-items-center mb-4">
                                                                <div class="flex-grow-1">
                                                                    <h5 class="card-title mb-0">History</h5>
                                                                </div>
                                                                <div class="flex-shrink-0">
                                                                    <div class="dropdown">
                                                                        <a href="#" role="button" id="dropdownMenuLink2"
                                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                                            <i class="ri-more-2-fill fs-14"></i>
                                                                        </a>

                                                                        <ul class="dropdown-menu dropdown-menu-end"
                                                                            aria-labelledby="dropdownMenuLink2">
                                                                            <li><a class="dropdown-item" href="#">View</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item" href="#">Edit</a>
                                                                            </li>
                                                                            <li><a class="dropdown-item" href="#">Delete</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="d-flex align-items-center py-3">
                                                                    <?php include('components/inc-view-history.php') ?>
                                                                </div>

                                                            </div>
                                                        </div><!-- end card body -->
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->
                                                <div class="col-xxl-9">

                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <div class="tab-pane fade" id="activities" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <!-- <h5 class="card-title mb-3">Allergic Rhinitis</h5> -->
                                                    <?php include('components/inc-view-allergicrhinitis.php') ?>
                                                </div>
                                            </div>
                                            <!--end card-->


                                            <?php include('components/inc-view-atopic.php') ?>
                                            <!--end card-->
                                            <?php include('components/inc-view-conjunctivities.php') ?>
                                            <!--end card-->
                                            <?php include('components/inc-view-bronchitis.php') ?>
                                            <!--end card-->
                                            <?php include('components/inc-view-gpe.php') ?>
                                            <!--end card-->
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane fade" id="projects" role="tabpanel">

                                            <?php include('components/inc-view-prescription.php') ?>
                                            <div class="card">
                                                <div class="card-body">

                                                    <!--end row-->
                                                </div>
                                                <!--end card-body-->
                                            </div>
                                            <!--end card-->
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane fade" id="documents" role="tabpanel">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-4">
                                                        <h5 class="card-title flex-grow-1 mb-0">Documents</h5>
                                                        <div class="flex-shrink-0">
                                                            <input class="form-control d-none" type="file" id="formFile">
                                                            <label for="formFile" class="btn btn-danger"><i
                                                                    class="ri-upload-2-fill me-1 align-bottom"></i> Upload
                                                                File</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-borderless align-middle mb-0">
                                                                    <thead class="table-light">
                                                                        <tr>
                                                                            <th scope="col">File Name</th>
                                                                            <th scope="col">Type</th>
                                                                            <th scope="col">Size</th>
                                                                            <th scope="col">Upload Date</th>
                                                                            <th scope="col">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title bg-primary-subtle text-primary rounded fs-20">
                                                                                            <i class="ri-file-zip-fill"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0"><a
                                                                                                href="javascript:void(0)">Artboard-documents.zip</a>
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>Zip File</td>
                                                                            <td>4.57 MB</td>
                                                                            <td>12 Dec 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);"
                                                                                        class="btn btn-light btn-icon"
                                                                                        id="dropdownMenuLink15"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                                                        aria-labelledby="dropdownMenuLink15">
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                                        </li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                                        </li>
                                                                                        <li class="dropdown-divider"></li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                                            <i class="ri-file-pdf-fill"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0"><a
                                                                                                href="javascript:void(0);">Bank
                                                                                                Management System</a></h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>PDF File</td>
                                                                            <td>8.89 MB</td>
                                                                            <td>24 Nov 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);"
                                                                                        class="btn btn-light btn-icon"
                                                                                        id="dropdownMenuLink3"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                                                        aria-labelledby="dropdownMenuLink3">
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                                        </li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                                        </li>
                                                                                        <li class="dropdown-divider"></li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title bg-secondary-subtle text-secondary rounded fs-20">
                                                                                            <i class="ri-video-line"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0"><a
                                                                                                href="javascript:void(0);">Tour-video.mp4</a>
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>MP4 File</td>
                                                                            <td>14.62 MB</td>
                                                                            <td>19 Nov 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);"
                                                                                        class="btn btn-light btn-icon"
                                                                                        id="dropdownMenuLink4"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                                                        aria-labelledby="dropdownMenuLink4">
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                                        </li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                                        </li>
                                                                                        <li class="dropdown-divider"></li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title bg-success-subtle text-success rounded fs-20">
                                                                                            <i
                                                                                                class="ri-file-excel-fill"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0"><a
                                                                                                href="javascript:void(0);">Account-statement.xsl</a>
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>XSL File</td>
                                                                            <td>2.38 KB</td>
                                                                            <td>14 Nov 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);"
                                                                                        class="btn btn-light btn-icon"
                                                                                        id="dropdownMenuLink5"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                                                        aria-labelledby="dropdownMenuLink5">
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-eye-fill me-2 align-middle text-muted"></i>View</a>
                                                                                        </li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-download-2-fill me-2 align-middle text-muted"></i>Download</a>
                                                                                        </li>
                                                                                        <li class="dropdown-divider"></li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-delete-bin-5-line me-2 align-middle text-muted"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title bg-info-subtle text-info rounded fs-20">
                                                                                            <i class="ri-folder-line"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0"><a
                                                                                                href="javascript:void(0);">Project
                                                                                                Screenshots Collection</a>
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>Floder File</td>
                                                                            <td>87.24 MB</td>
                                                                            <td>08 Nov 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);"
                                                                                        class="btn btn-light btn-icon"
                                                                                        id="dropdownMenuLink6"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                                                        aria-labelledby="dropdownMenuLink6">
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-eye-fill me-2 align-middle"></i>View</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                                        </li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="avatar-sm">
                                                                                        <div
                                                                                            class="avatar-title bg-danger-subtle text-danger rounded fs-20">
                                                                                            <i class="ri-image-2-fill"></i>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ms-3 flex-grow-1">
                                                                                        <h6 class="fs-15 mb-0">
                                                                                            <a
                                                                                                href="javascript:void(0);">Velzon-logo.png</a>
                                                                                        </h6>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>PNG File</td>
                                                                            <td>879 KB</td>
                                                                            <td>02 Nov 2021</td>
                                                                            <td>
                                                                                <div class="dropdown">
                                                                                    <a href="javascript:void(0);"
                                                                                        class="btn btn-light btn-icon"
                                                                                        id="dropdownMenuLink7"
                                                                                        data-bs-toggle="dropdown"
                                                                                        aria-expanded="true">
                                                                                        <i class="ri-equalizer-fill"></i>
                                                                                    </a>
                                                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                                                        aria-labelledby="dropdownMenuLink7">
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-eye-fill me-2 align-middle"></i>View</a>
                                                                                        </li>
                                                                                        <li><a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-download-2-fill me-2 align-middle"></i>Download</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a class="dropdown-item"
                                                                                                href="javascript:void(0);"><i
                                                                                                    class="ri-delete-bin-5-line me-2 align-middle"></i>Delete</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="text-center mt-3">
                                                                <a href="javascript:void(0);" class="text-success"><i
                                                                        class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i>
                                                                    Load more </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end tab-pane-->
                                    </div>
                                    <!--end tab-content-->
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                    </div><!-- container-fluid -->
                </div><!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6"> Copyright
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> © ChanRe.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    ChanRe Allergy
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div><!-- end main content-->

        </div>
        <!-- END layout-wrapper -->



        <!--start back-to-top-->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <!--preloader-->


        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- swiper js -->
        <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- profile init js -->
        <script src="assets/js/pages/profile.init.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="assets/js/pages/select2.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

    </html>
<?php } ?>