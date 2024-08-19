<?php
require_once 'config.php';
// set session cookie to expire after 10 minutes
$session_lifetime = 500;
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





<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Begin page -->
<div id="layout-wrapper">


    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="dashbord.php" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.svg" alt="" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">HRMS</span>
                        </span>
                    </a>

                    <a href="dashbord.php" class="logo logo-light">
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

                
            </div>

            <div class="d-flex">

                <div class="dropdown d-inline-block d-lg-none ms-2">
                    <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i data-feather="search" class="icon-lg"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                        
                    </div>
                </div>




                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="user.png" alt="">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium"><?php echo $_SESSION['username']; ?></span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="profile.php"><i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i> Profile</a>
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
                    <a href="dashbord.php">
                        <i class="fa fa-home"></i>

                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>

                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-user-alt'></i>

                        <span data-key="t-Employee">Employee</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Add_Employee.php" data-key="t-add">Add Employee</a></li>
                        <li><a href="manage_employee.php" data-key="t-">Manage Employee</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fa fa-file-text"></i>

                        <span data-key="t-pages">Employee Document</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Add_Document.php" data-key="t-starter-page">Add Employee/Bank Document</a></li>
                        <li><a href="manage_document.php" data-key="t-maintenance">Manage Document</a></li>
                        <li><a href="Manage_BankDetail.php" data-key="t-maintenance">Manage Bank detail</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class="fa fa-file-text"></i>

                        <span data-key="t-pages">Employee Department</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Department.php" data-key="t-starter-page">Add Department</a></li>


                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-calendar-alt'></i>

                        <span data-key="t-pages">Leave Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Add_Leave.php" data-key="t-starter-page">Add Leave</a></li>
                        <li><a href="Manage_Leave.php" data-key="t-maintenance">Manage Leave</a></li>
                        <li><a href="Admin_Leave.php" data-key="t-maintenance">Employee Leave</a></li>

                    </ul>
                </li>
               

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-clone'></i>
                        <span data-key="t-pages">Professional Tax</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Tax.php" data-key="t-starter-page">Add Tax</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-clock'></i>

                        <span data-key="t-pages">Attendance</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Add_Attendance.php" data-key="t-starter-page">Add Attendance</a></li>
                        <li><a href="Attendance.php" data-key="t-starter-page">Manage Attendance</a></li>
                    </ul>
                </li>
              
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-file'></i>

                        <span data-key="t-pages">Project Allocation</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="project.php" data-key="t-starter-page">Projects</a></li>
                        <li><a href="Add_Task.php" data-key="t-starter-page">Tasks</a></li>
                        <li><a href="manage_project.php" data-key="t-starter-page">Manage Project</a></li>
                        <li><a href="manage_task.php" data-key="t-starter-page">Manage Task</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-dice-d6'></i>

                        <span data-key="t-pages">Payroll </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="payroll.php" data-key="t-starter-page">Manage Payroll</a></li>

                    </ul>
                    
                </li>
				<li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i class='fas fa-file'></i>

                        <span data-key="t-pages">Report </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="Employee_Leave_History.php" data-key="t-starter-page">Employee Leave History</a></li>

                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html" data-key="t-starter-page"></a></li>
                        <li><a href="pages-starter.html" data-key="t-starter-page"></a></li>
                    </ul>
                </li>
            </ul>
        </div>























        <!-- Sidebar -->
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                Copyright © <script>
                    document.write(new Date().getFullYear())
                </script> All Rights Reserved | Designed and Developed by Pratik Mehta.
            </div>
            <!-- <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a>
                </div>
            </div> -->
        </div>
    </div>
</footer>