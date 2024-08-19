<?php
include('Config.php');
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Attendance</title>
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
                                <form action="" method="post" id="add_attendance">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-email-input"
                                                        class="form-label">Employee:</label>
                                                    <select class="form-select" id="Employee_Id" name="Employee_Id">
                                                        <option value="">Select Name </option>
                                                        <?php 
                                                            $fetch_employee_q = "SELECT * FROM employee";
                                                            $fetch_employee_res = mysqli_query($conn,$fetch_employee_q);
                                                            while($fetch_employee_r = mysqli_fetch_array($fetch_employee_res))
                                                            {
                                                                echo "<option value=".$fetch_employee_r[0].">".$fetch_employee_r[1]."</option>";
                                                            }
                                                        ?>
                                                        <?php
														// $emp = $conn->query('select * from employee');
														// while($result_emp = $emp->fetch_assoc())
														// {
														?>
                                                        <!-- <option value="<?php // echo $result_emp['Employee_Id'] ?>">
                                                            <?php // echo $result_emp['Employee_Name']; ?>
                                                        </option> -->

                                                        <?php
														// }
														?>
                                                    </select>
                                                </div>
                                                <div>
                                                    <button type="submit" name="btn" class="btn btn-primary w-md">Submit</button>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                </form>
                            </div> <!-- end col -->


                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">ATTENDANCE DETAILS</h4>



                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">

                                    <div class="card-body">

                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>To Date</th>
                                                    <th>Attendance</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

<?php
if(isset($_POST['btn']) && $_POST['Employee_Id'] != "")
{
    $employee_name = $_POST['Employee_Id'];
    $fetch_attendance_q = "SELECT * FROM attendance WHERE Employee='$employee_name'";
    $fetch_attendance_res = mysqli_query($conn,$fetch_attendance_q);

    $employee_q = "SELECT * FROM employee WHERE Employee_Id = '$employee_name' ";
    $employee_res = mysqli_query($conn,$employee_q);
    $employee_r = mysqli_fetch_array($employee_res);

    echo "<h4> Employee Name :- ".$employee_r[1]."</h4>";
                                                
    while($fetch_attendance_r = mysqli_fetch_array($fetch_attendance_res))
    {?>
                                            <tbody>
                                                <tr>
                                                    <td><?= $fetch_attendance_r[1] ?></td>
                                                    <td><?= $fetch_attendance_r[3] ?></td>
                                                    <td><a href="Edit_Attendance.php?id=<?= $fetch_attendance_r[0] ?>"><i class='fas fa-edit'></i></a>
                                                        
                                                    </td>
                                                </tr>
                                            </tbody>
    <?php }

}
else
{?>
    <tbody>
    <tr>

        <td></td>
        <td></td>

        <td><i class='fas fa-edit'></i> 
            
        </td>
    </tr>
</tbody>
<?php
}
?>
                                        </table>

                                    </div>
                                </div>
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

