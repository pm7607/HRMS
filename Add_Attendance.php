<?php
include "config.php";
?>
<?php
if (isset($_POST['submit'])) {
    $Date = $_POST['Date'];
    $Employee_Name = $_POST['Employee_Id'];
    $Attendance = $_POST['Attendance'];

    $qry = "INSERT INTO attendance(Date,Employee,Attendance) VALUES ('$Date','$Employee_Name','$Attendance')";
    $res = mysqli_query($conn, $qry);
    if ($res) {
        header("location:Attendance.php");
    } else {
        echo "<script>alert('data not inserted...please try again letter')</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add Attendance</title>
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
    <?php include('Menu.php'); ?>
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
                            <h4 class="mb-sm-0 font-size-18">ATTENDANCE</h4>



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
                                        <div class="col-lg-4">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Date:</label>

                                                    <input class="form-control" type="date" name="Date" id="Date">

                                                </div>






                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-month-input" class="form-label">Employee:</label>
                                                    <select class="form-select" id="Employee_Id" name="Employee_Id">
                                                        <?php
                                                        $emp = $conn->query('select * from employee');
                                                        while ($result_emp = $emp->fetch_assoc()) {
                                                        ?>
                                                            <option value="<?php echo $result_emp['Employee_Id'] ?>"><?php echo $result_emp['Employee_Name']; ?></option>

                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
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
                                        <div class="col-lg-4">
                                            <div>





                                            </div>

                                        </div>
                                        <div class="mb-3">
                                            <label for="example-check-input" class="form-label">Attendance:</label><br>
                                            <input class="form-check-input" type="checkbox" name="Attendance" id="Attendance" value="present">&nbsp; &nbsp;
                                            <label class="form-check-label" for="formRadios1">
                                                present
                                            </label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            <input class="form-check-input" type="checkbox" name="Attendance" id="Attendance" value="absent">&nbsp; &nbsp;
                                            <label class="form-check-label" for="formRadios1">
                                                absent
                                            </label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            <input class="form-check-input" type="checkbox" name="Attendance" id="Attendance" value="half day">&nbsp; &nbsp;
                                            <label class="form-check-label" for="formRadios1">
                                                half day
                                            </label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            <input class="form-check-input" type="checkbox" name="Attendance" id="Attendance" value="late">&nbsp; &nbsp;
                                            <label class="form-check-label" for="formRadios1">
                                                late
                                            </label>
                                        </div>


                                        <div>
                                            <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- end col -->
                        </div>
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
                        <!-- end js include path -->
</body>

</html>