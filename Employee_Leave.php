<?php
include('Config.php');

?>


<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Leave</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- preloader css -->
        <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>

<?php include('Employee_Menu.php');
ob_start();
session_start();

if (isset($_POST['submit'])) {
	$status = "Pending";
$username_session = $_SESSION['username']; 
$descr = $_POST['descr'];
$formdate = $_POST['formdate'];
$todate = $_POST['todate'];
//$status = $_POST['status'];

$fetch_emp_details = "SELECT * FROM employee WHERE `Employee_Username` = '$username_session' ";
$fetch_emp_res = mysqli_query($conn,$fetch_emp_details);
$fetch_emp_r = mysqli_fetch_array($fetch_emp_res);
 $query = "INSERT INTO leaves(eid, ename, descr, formdate, todate, status) VALUES({$fetch_emp_r['Employee_Id']},'{$username_session}','$descr', '$formdate', '$todate', '$status')";
      $execute = mysqli_query($conn,$query);
      if($execute){
        echo '<script>alert("Leave Application Submitted. Please wait for approval status!")</script>';
      }
      else{
        echo "Query Error : " . $query . "<br>" . mysqli_error($conn);;
      }
}
?>
            

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
                                    <h4 class="mb-sm-0 font-size-18">LEAVE</h4>

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                  
                                    <div class="card-body p-4">
									<form action="" method="post" id="add_leave">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Leave Discription:</label>
                                                        <input class="form-control" type="text"  name="descr" id="descr" placeholder="Enter here..">
                                                    </div>
																										 
																										
                                                    
                                                </div>
												</div>
												<div class="col-lg-4">
                                                <div class="mt-3 mt-lg-0">
												<div class="mb-3">
                                                        <label for="example-date-input" class="form-label"> From Date:</label>
                                                       <input class="form-control" type="date"  name="formdate" id="formdate">
                                                    </div>
													
													
                                                   
											

                                           
                                        </div>
                                    </div>
									<div class="col-lg-4">
                                                <div class="mt-3 mt-lg-0">
												<div class="mb-3">
                                                        <label for="example-date-input" class="form-label">To Date:</label>
                                                       <input class="form-control" type="date"  name="todate" id="todate">
                                                    </div>
													
													<div class="mb-3">
                                                    <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                                    </div>
                                                   
											

                                           
                                        </div>
                                    </div>
                                </div>
								</form>
                            </div> <!-- end col -->
                        </div>
                        	

                        
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="assets/libs/pace-js/pace.min.js"></script>

        <script src="assets/js/app.js"></script>
		<!-- datepicker js -->
        <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
		
    </body>
</html>
