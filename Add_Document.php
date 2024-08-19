<?php
include('Config.php');
?>
<?php
if(isset($_POST['s1'])){
$id=$_POST['Employee_Id'];
$Resume=$_FILES['Resume']['name'];
move_uploaded_file($_FILES['Resume']['tmp_name'], 'Resume/' . $Resume);

    $Aadhar_Card = $_FILES['Aadhar_Card']['name'];
    move_uploaded_file($_FILES['Aadhar_Card']['tmp_name'], 'Aadhar_Card/' . $Aadhar_Card);


    $Pan_Card = $_FILES['Pan_Card']['name'];
    move_uploaded_file($_FILES['Pan_Card']['tmp_name'], 'Pan_Card/' . $Pan_Card);


    $Joinning_Letter = $_FILES['Joinning_Letter']['name'];
    move_uploaded_file($_FILES['Joinning_Letter']['tmp_name'], 'Joinning_Letter/' . $Joinning_Letter);
$qry= "INSERT INTO employee_document(Resume, Aadhar_Card, Joinning_Letter, Pan_Card, Employee_Id) VALUES ('".$Resume."','".$Aadhar_Card."','". $Joinning_Letter."','".$Pan_Card."','$id')";
$res=mysqli_query($conn,$qry);
if($res) {
    header("Location:manage_document.php");
} else {
    echo "<script>alert('Data not inserted')</script>";
}
}
?>
<?php
if(isset($_POST['s2'])){
$id=$_POST['Employee_Id'];
$acc_number=$_POST['Bank_Acc_Number'];
$name=$_POST['Bank_Holder_Name'];
$ifsc_code=$_POST['Bank_IFSC_Code'];
$qry= "INSERT INTO employee_bank_detail(Bank_Holder_Name, Bank_Acc_Number, Bank_IFSC_Code, Employee_Id) VALUES ('$name','$acc_number','$ifsc_code','$id')";
$res=mysqli_query($conn,$qry);
if($res){
    header("Location:Manage_BankDetail.php");
}
else{
    echo "<script>alert('data not inserted...please try again letter')</script>";
}
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add Employee Documents</title>
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
                            <h4 class="mb-sm-0 font-size-18">ADD EMPLOYEE DOCUMENT</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-4">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-select-input" class="form-label">Employee Documents:</label>
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
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Resume:</label>
                                                    <input class="form-control" type="file" name="Resume"  accept=".jpg, .png, .pdf">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Aadhar Card</label>
                                                    <input class="form-control" type="file" name="Aadhar_Card" id="Aadhar_Card" accept=".jpg, .png, .pdf">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Pan Card:</label>
                                                    <input class="form-control" type="file" name="Pan_Card" id="Pan_Card" accept=".jpg, .png, .pdf">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Joinning Letter:</label>
                                                    <input class="form-control" type="file" name="Joinning_Letter" id="Joinning_Letter" accept=".jpg, .png, .pdf">
                                                </div>
                                                <input type="hidden" name="Hidden_Add_Document" id="Hidden_Add_Document" value="Yes" />
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">&nbsp; &nbsp; &nbsp; &nbsp; </label><br>
                                                    <button type="submit" name="s1" class="btn btn-primary w-md">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
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
                                                <label for="example-select-input" class="form-label">Employee:</label>
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
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Account Number:</label>
                                                <input class="form-control" type="text" name="Bank_Acc_Number" id="Bank_Acc_Number">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Name As Per Bank:</label>
                                                    <input class="form-control" type="text" name="Bank_Holder_Name" id="Bank_Holder_Name">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">IFSC Code:</label>
                                                    <input class="form-control" type="text" name="Bank_IFSC_Code" id="Bank_IFSC_Code">
                                                </div>
                                                <input type="hidden" name="Hidden_Bank_Detail" id="Hidden_Bank_Detail" value="Yes" />
                                                <div>
                                                    <button type="submit" name="s2" class="btn btn-primary w-md">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end col -->
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
    <!-- end js include path -->
</body>

</html>