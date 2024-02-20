<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="#" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="50">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="#" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <?php
    if ($_SESSION['empDesignation'] == 'Doctor') {
        echo '<div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages2" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Patient</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="add-patient.php" class="nav-link" data-key="t-starter"> Add Patient </a>
                            </li>
                            <li class="nav-item">
                                <a href="view-patient.php" class="nav-link" data-key="t-team"> View Patient</a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-patients.php" class="nav-link" data-key="t-team"> Manage Patient</a>
                            </li>

                            <li class="nav-item">
                                <a href="hospital-docs.php" class="nav-link" data-key="t-faqs"> Documentation </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages3" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Follow Up</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages3">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="view-followup-patient.php" class="nav-link" data-key="t-starter"> View FollowUp
                                    Paitent</a>
                            </li>
                            <li class="nav-item">
                                <a href="manage-follow-patient.php" class="nav-link" data-key="t-team"> Manage Follow
                                    Up</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="manage-patients.php" class="nav-link" data-key="t-team"> Manage Patient</a>
                            </li> -->

                            <li class="nav-item">
                                <a href="hospital-docs.php" class="nav-link" data-key="t-faqs"> Documentation </a>
                            </li>
                        </ul>
                    </div>
                </li>




            </ul>
        </div>
        <!-- Sidebar -->
    </div>';
    } else if ($_SESSION['empDesignation'] == 'Receptionist') {
        echo '<div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages1" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Staffs</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages1">
                        <ul class="nav nav-sm flex-column">
                           
                            <li class="nav-item">
                                <a href="view-doctor.php" class="nav-link" data-key="t-team"> View Doctor </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarPages2" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Patient</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages2">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="add-patient.php" class="nav-link" data-key="t-starter"> Add Patient </a>
                            </li>
                            <li class="nav-item">
                                <a href="view-patient.php" class="nav-link" data-key="t-team"> View Patient</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                



            </ul>
        </div>
        <!-- Sidebar -->
    </div>';
    }

    ?>


    <div class="sidebar-background"></div>
</div>