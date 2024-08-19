<?php
require_once 'config.php';
// set session cookie to expire after 10 minutes
$session_lifetime = 200;
session_set_cookie_params($session_lifetime);

// set session max lifetime to 10 minutes
ini_set('session.gc_maxlifetime', $session_lifetime);

// start the session
session_start();

// check if session has expired
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $session_lifetime)) {
    // unset the session
    session_unset();
    session_destroy();
}

// update session last activity time
$_SESSION['LAST_ACTIVITY'] = time();


if ($_SESSION['status'] != true) {
    header("location:index.php");
}
?>
<?php
ob_start();
//session_start();

$username_session = $_SESSION['username']; 
$fetch_emp_details = "SELECT * FROM employee WHERE `Employee_Username` = '$username_session' ";
$fetch_emp_res = mysqli_query($conn,$fetch_emp_details);
$fetch_emp_r = mysqli_fetch_array($fetch_emp_res);


?>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">HRMS</span>
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">HRMS</span>
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                 <div class="app-search d-none d-lg-block"> 
                <div class="position-relative">
                 <h3><p>Welcome <?php echo $fetch_emp_r[1]; ?></p></h3> 
                 <!--<button class="btn btn-primary" type="button"><i class="bx bx-search-alt align-middle"></i></button>--> 
                </div> 
                </div>
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="search" class="icon-lg"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                        <!-- <form class="p-3"> -->
                        <!-- <div class="form-group m-0"> -->
                        <!-- <div class="input-group"> -->
                        <!-- <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result"> -->

                        <!-- <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button> -->
                        <!-- </div> -->
                        <!-- </div> -->
                        <!-- </form> -->
                    </div>
                </div>



                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="bell" class="icon-lg"></i>
                        <span class="badge bg-danger rounded-pill"></span>
                    </button>

                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item right-bar-toggle me-2">
                        <i data-feather="settings" class="icon-lg"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!--<img class="rounded-circle header-profile-user" src="user.png" alt="Header Avatar">-->

                        <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo $_SESSION['username']; ?></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <!--<a class="dropdown-item" href="profile.php"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>-->
                        <!-- <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a> -->
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
</div>

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="Employee_Dashboard.php">
                        <i class="fa fa-home"></i>

                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>

                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-user-alt'></i>

                        <span data-key="t-Employee">Profile</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Employee_Personal_Info.php" data-key="t-add">Personal Information</a></li>
                        <li><a href="Employee_Document.php" data-key="t-">Documents/Bank Details</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-calendar-alt'></i>

                        <span data-key="t-pages">Leave</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Employee_Leave.php" data-key="t-starter-page">Add Leave</a></li>
                        <li><a href="Employee_Holiday.php" data-key="t-maintenance">Holidays</a></li>
                        <li><a href="My_Leave_History.php" data-key="t-maintenance"> My Leave History</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fa fa-credit-card"></i>
                        <span data-key="t-pages">Salary History</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Employee_Salary.php" data-key="t-starter-page">Salary</a></li>
                    </ul>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-clock'></i>

                        <span data-key="t-pages">Attendance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Employee_Attendance.php" data-key="t-starter-page">Attendance</a></li>

                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-file'></i>

                        <span data-key="t-pages">Project</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Employee_Project.php" data-key="t-starter-page">Projects/Tasks</a></li>
                        

                    </ul>
                </li>

            </ul>
        </div>























        <!-- Sidebar -->
    </div>
</div>

</html>