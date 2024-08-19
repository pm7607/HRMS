<?php
include("Config.php");
$m = $_GET['z'];
$qry = "SELECT employee.Employee_Name,employee_bank_detail.Bank_Holder_Name,employee_bank_detail.Bank_Acc_Number,employee_bank_detail.Bank_IFSC_Code from employee inner join employee_bank_detail on employee.Employee_Id=employee_bank_detail.Employee_Id where Bank_id='$m'";
$res = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($res);
?>
<?php
if(isset($_POST['submit'])){
    $acc_number=$_POST['Bank_Acc_Number'];
    $name=$_POST['Bank_Holder_Name'];
    $code=$_POST['Bank_IFSC_Code'];
    $qry= "UPDATE employee_bank_detail SET Bank_Holder_Name='$name',Bank_Acc_Number='$acc_number',Bank_IFSC_Code='$code' WHERE Bank_id='$m'";
    $res=mysqli_query($conn,$qry);
    if (!isset($res)) {
        echo "Data Not Updated";
    } else {
        header("Location: Manage_BankDetail.php");
    }
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Add documents</title>
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

                <!-- end page title -->

                <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">ADD BANK DETAILS</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body p-4">
                                <form action="" method="post" id="add_bank_detail">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="example-select-input" class="form-label">Employee Name:</label>
                                                <input class="form-control" name="Employee_Id" value="<?php echo $row['Employee_Name'] ?>" disabled>




                                                </input>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Account Number:</label>
                                                <input class="form-control" type="text" name="Bank_Acc_Number" value="<?php echo $row['Bank_Acc_Number'] ?>">
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Name As Per Bank:</label>
                                                    <input class="form-control" type="text" name="Bank_Holder_Name" id="Bank_Holder_Name" value="<?php echo $row['Bank_Holder_Name'] ?>">
                                                </div>

                                                <div class=" mb-3">
                                                    <label for="example-text-input" class="form-label">IFSC Code:</label>
                                                    <input class="form-control" type="text" name="Bank_IFSC_Code" id="Bank_IFSC_Code" value="<?php echo $row['Bank_IFSC_Code'] ?>">
                                                </div>
                                                <input type="hidden" name="Hidden_Bank_Detail" id="Hidden_Bank_Detail" value="Yes" />
                                                <div>
                                                    <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                                </div>



                                            </div>
                                        </div>
                                    </div>



                            </div>
                            </form>
                        </div>
                    </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
    <!-- end js include path -->


</body>

</html>