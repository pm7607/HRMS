<?php
include('Config.php');
$m = $_GET['z'];
$qry = "SELECT employee.Employee_Name,employee_salary.Salary_Month,employee_salary.Salary from employee inner join employee_salary on employee.Employee_Id=employee_salary.Employee_Id where Salary_Id='$m'";
$res = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($res);
?>
<?php
if(isset($_POST['submit'])){
    $month=$_POST['Salary_Month'];
    $salary=$_POST['Salary'];
    $qry= "UPDATE employee_salary SET Salary_Month='$month',Salary='$salary' WHERE Salary_Id='$m'";
    $res=mysqli_query($conn,$qry);
    if (!isset($res)) {
        echo "Data Not Updated";
    } else {
        header("Location: Salary.php");
    }
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Leave Table</title>
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
    <?php include('Menu.php'); ?>

    <!-- <body data-layout="horizontal"> -->

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
                            <h4 class="mb-sm-0 font-size-18"> UPDATE SALARY</h4>



                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body p-4">
                                <form action="" method="post" id="add_salary">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-email-input" class="form-label">Employee Name:</label>
                                                    <input class="form-control" id="Employee_Id" name="Employee_Id" value="<?php echo $row['Employee_Name']; ?>" disabled>



                                                    </input>
                                                </div>






                                            </div>
                                            <div>
                                                <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>

                                        </div>
                                        <div class="col-lg-3">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-month-input" class="form-label">Month:</label>
                                                    <input class="form-control" type="month" name="Salary_Month" value="<?php echo $row['Salary_Month']; ?>">
                                                </div>



                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-3">
									<div>
                                                    <div class="mb-3">
                                                        <label for="example-year-input" class="form-label">Year:</label>
                                                        <input class="form-control" type="year-input" name="Salary_Year" id="Salary_Year" placeholder="Enter Year">
                                                    </div>
													
																										 
																										
                                                    
                                                </div>
                                                
                                    </div> -->
                                        <div class="col-lg-3">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Salary:</label>
                                                    <input class="form-control" type="text" name="Salary" value="<?php echo $row['Salary']; ?>" placeholder=" Enter Salary">
                                                </div>
                                                <input type="hidden" name="Hidden_Salary" id="Hidden_Salary" value="Yes" />





                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end col -->
                        </div>


                        <!-- end row -->



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