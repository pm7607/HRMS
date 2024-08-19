<?php
include('Config.php');

$attendance_id = $_GET['id'];

$fetch_attendance = "SELECT * FROM attendance WHERE Attendance_Id = '$attendance_id' ";
$fetch_attendance_res = mysqli_query($conn,$fetch_attendance);
$fetch_attendance_r = mysqli_fetch_array($fetch_attendance_res);

$fetch_employee = "SELECT * FROM employee WHERE Employee_Id = '$fetch_attendance_r[2]' ";
$fetch_employee_res = mysqli_query($conn,$fetch_employee);
$fetch_employee_r = mysqli_fetch_array($fetch_employee_res);

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Edit Attendance</title>
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
                                                  <label for="example-select-input" class="form-label">Employee Name:</label>
                                                <input class="form-control" name="Employee_Id" value="<?php echo $fetch_employee_r[1]; ?>">
  

                                                </div>






                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                  <label for="example-date-input" class="form-label">Date:</label>

                                                    <input class="form-control" type="date" name="Date" id="Date" value="<?php echo $fetch_attendance_r[1]; ?>">  
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
                                            <div class="mb-3">
                                            <label for="example-date-input" class="form-label">Attendance:</label>

                                                    <input class="form-control" type="text" name="Attendance" id="Attendance" value="<?php echo $fetch_attendance_r[3]; ?>">
                                        </div>
										
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

<?php 
if(isset($_POST['submit']))
{
    $date = $_POST['Date'];
    $attendance = $_POST['Attendance'];

    $update_attendance = "UPDATE `attendance` SET `Date`='$date',`Attendance`='$attendance' WHERE Attendance_Id = '$attendance_id'";
    if(mysqli_query($conn,$update_attendance))
    {
        echo "<script>Data updated Successfull</script>";
        header("Refresh:0");
    }
    else
    {
        echo "<script>Error...!</script>";

    }
}
?>