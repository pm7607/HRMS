<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Employee Salary</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

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
<?php 
 
include('Employee_Menu.php');
?>
<?php 
ob_start();
session_start();

$username_session = $_SESSION['username'];
$fetch_emp_details = "SELECT * FROM employee WHERE `Employee_Username` = '$username_session' ";
$fetch_emp_res = mysqli_query($conn,$fetch_emp_details);
$fetch_emp_r = mysqli_fetch_array($fetch_emp_res);


$fetch_salary = "SELECT * FROM payroll_management WHERE Employee_Id='$fetch_emp_r[0]' ";
$fetch_salary_res = mysqli_query($conn,$fetch_salary);

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
                                    <h4 class="mb-sm-0 font-size-18">Salary History</h4>

                                    <!-- <div class="page-title-right"> -->
                                        <!-- <ol class="breadcrumb m-0"> -->
                                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li> -->
                                            <!-- <li class="breadcrumb-item active">DataTables</li> -->
                                        <!-- </ol> -->
                                    <!-- </div> -->

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                               
                                                <th>Month</th>
                                                <th>Salary</th>
                                                <th>Tax</th>
                                                <th>Total Amount</th>
                                                
                                                
                                            </tr>
                                            </thead>
											 
												
        
                                            <tbody>
											
        
                                            <?php while($fetch_salary_r = mysqli_fetch_array($fetch_salary_res))
                                            {?>
                                            <tr>
                                                
                                                <td><?php echo $fetch_salary_r[3]; ?></td>
                                                <td><?php echo $fetch_salary_r[2]; ?></td>
                                                <td><?php echo $fetch_salary_r[4]; ?></td>
                                                <td><?php echo $fetch_salary_r[5]; ?></td>
                                            </tr>
                                            <?php } ?>
											
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- <div class="col-sm-6"> -->
                                <!-- <script>document.write(new Date().getFullYear())</script> © Minia. -->
                            <!-- </div> -->
                            <!-- <div class="col-sm-6"> -->
                                <!-- <div class="text-sm-end d-none d-sm-block"> -->
                                    <!-- Design & Develop by <a href="#!" class="text-decoration-underline">Themesbrand</a> -->
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        
       

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- pace js -->
        <script src="assets/libs/pace-js/pace.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>    

        <script src="assets/js/app.js"></script>

    </body>
</html>
