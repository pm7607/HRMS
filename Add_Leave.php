

<?php
include("config.php");
if (isset($_POST['submit'])) {
    $leave = $_POST['Leave_Discription'];
    $date = $_POST['Leave_Date'];
    $qry = "INSERT INTO employee_leave(Leave_Discription, Leave_Date) VALUES ('$leave','$date')";
    $res = mysqli_query($conn, $qry);
    if ($res) {
        header("Location:Add_Leave.php");
    } else {
        echo "<script>alert('Data not inserted')</script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Add Leave</title>
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
                            <h4 class="mb-sm-0 font-size-18">ADD LEAVE</h4>



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
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Leave Discription:</label>
                                                    <input class="form-control" type="text" name="Leave_Discription" id="Leave_Discription" placeholder="Enter here..">
                                                </div>



                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Date:</label>
                                                    <input class="form-control" type="date" name="Leave_Date" id="Leave_Date">
                                                </div>
                                                <input type="hidden" name="Hidden_Add_Leave" id="Hidden_Add_Leave" value="Yes" />
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