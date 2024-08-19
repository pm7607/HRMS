<?php
include('Config.php');



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Documents</title>
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
    <?php include('Employee_Menu.php'); ?>
	<?php
	ob_start();
session_start();

$username_session = $_SESSION['username']; 

$fetch_emp_details = "SELECT * FROM employee WHERE `Employee_Username` = '$username_session'";
$fetch_emp_res = mysqli_query($conn,$fetch_emp_details);
$fetch_emp_r = mysqli_fetch_array($fetch_emp_res);

$fetch_document = "SELECT * FROM  employee_document WHERE Employee_Id = '$fetch_emp_r[0]'";
$fetch_document_res = mysqli_query($conn,$fetch_document);
$fetch_document_r = mysqli_fetch_array($fetch_document_res);

$fetch_bank = "SELECT * FROM  employee_bank_detail WHERE Employee_Id = '$fetch_emp_r[0]'";
$fetch_bank_res = mysqli_query($conn,$fetch_bank);
$fetch_bank_r = mysqli_fetch_array($fetch_bank_res);
?>
<?php
$username_session = $_SESSION['username'];

if (isset($_POST['s1'])) {
    if ($_FILES['Resume']['name'] != "") {
        $Resume = $_FILES['Resume']['name'];
        move_uploaded_file($_FILES['Resume']['tmp_name'], 'Resume/' . $Resume);
    } else {
        $Resume = $_POST['old_Resume'];
    }
    if ($_FILES['Aadhar_Card']['name'] != "") {
        $Aadhar_Card = $_FILES['Aadhar_Card']['name'];
        move_uploaded_file($_FILES['Aadhar_Card']['tmp_name'], 'Aadhar_Card/' . $Aadhar_Card);
    } else {
        $Aadhar_Card = $_POST['old_Aadhar'];
    }
    if ($_FILES['Pan_Card']['name'] != "") {
        $Pan_Card = $_FILES['Pan_Card']['name'];
        move_uploaded_file($_FILES['Pan_Card']['tmp_name'], 'Pan_Card/' . $Pan_Card);
    } else {
        $Pan_Card = $_POST['old_Pan'];
    }
    if ($_FILES['Joinning_Letter']['name'] != "") {
        $Joinning_Letter = $_FILES['Joinning_Letter']['name'];
        move_uploaded_file($_FILES['Joinning_Letter']['tmp_name'], 'Joinning_Letter/' . $Joinning_Letter);
    } else {
        $Joinning_Letter = $_POST['old_Joinning_Letter'];
    }
    $qry = "UPDATE employee_document SET Resume= '" . $Resume . "', Aadhar_Card= '" . $Aadhar_Card . "',Pan_Card= '" . $Pan_Card . "',Joinning_Letter= '" . $Joinning_Letter . "' WHERE Employee_Id = '$fetch_emp_r[0]'";
    $res = mysqli_query($conn, $qry);
    if (!isset($res)) {
        echo "Data Not Updated";
    } else {
        header("Location: Employee_Document.php");
    }
}
?>
<?php
if(isset($_POST['s2'])){
    $acc_number=$_POST['Bank_Acc_Number'];
    $name=$_POST['Bank_Holder_Name'];
    $code=$_POST['Bank_IFSC_Code'];
    $qry= "UPDATE employee_bank_detail SET Bank_Holder_Name='$name',Bank_Acc_Number='$acc_number',Bank_IFSC_Code='$code' WHERE Employee_Id = '$fetch_emp_r[0]'";
    $res=mysqli_query($conn,$qry);
    if (!isset($res)) {
        echo "Data Not Updated";
    } else {
        header("Location: Employee_Document.php");
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
                            <h4 class="mb-sm-0 font-size-18">DOCUMENT</h4>
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
                                                    <label for="example-select-input" class="form-label">Employee Name:</label>
                                                    <input class="form-control" type="text" name="Employee_Id" id="Employee_Id" value="<?php echo $fetch_emp_r[10]; ?>">
                                                    
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Resume:</label><br>
													<label for="example-file-input" class="form-label"></label>
													<img src="Resume/<?php echo $fetch_document_r[1]; ?>" width="100px" height="100px">
													<input type="hidden" name="old_Resume" value="<?php echo $fetch_document_r[1]; ?>">
													<input class="form-control" type="file" name="Resume" accept=".jpg, .png, .pdf">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Aadhar Card</label><br>
													<label for="example-file-input" class="form-label"></label>
                                                    <img src="Aadhar_Card/<?php echo $fetch_document_r[2]; ?>"  height="100px" width="100px">
                                                    <input type="hidden" name="old_Aadhar" value="<?php echo $fetch_document_r[2]; ?>">
                                                    <input class="form-control" type="file" name="Aadhar_Card" accept=".jpg, .png, .pdf"><br><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Pan Card:</label><br>
													<label for="example-file-input" class="form-label"></label>
                                                    <img src="Pan_Card/<?php echo $fetch_document_r[4]; ?>" alt="" height="100px" width="100px">
                                                   <input type="hidden" name="old_Pan" value="<?php echo $fetch_document_r[4]; ?>">
                                                    <input class="form-control" type="file" name="Pan_Card" id="Pan_Card"><br><br>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Joinning Letter:</label><br>
													<label for="example-file-input" class="form-label"></label>
                                                    <img src="Joinning_Letter/<?php echo $fetch_document_r[3]; ?>" alt="" height="100px" width="100px">
                                                    <input type="hidden" name="old_Joinning_Letter" value="<?php echo $fetch_document_r[3]; ?>">
                                                    <input class="form-control" type="file" name="Joinning_Letter" id="Joinning_Letter">
                                                </div>
                                                <div class="mb-3">
                                                    
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
                            <h4 class="mb-sm-0 font-size-18"> BANK DETAILS</h4>
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
                                                <input class="form-control" type="text" name="Employee_Id" id="Employee_Id" value="<?php echo $fetch_emp_r[10]; ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Account Number:</label>
                                                <input class="form-control" type="text" name="Bank_Acc_Number" id="Bank_Acc_Number" value="<?php echo $fetch_bank_r[2]; ?> ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Name As Per Bank:</label>
                                                    <input class="form-control" type="text" name="Bank_Holder_Name" id="Bank_Holder_Name" value="<?php echo $fetch_bank_r[1]; ?> ">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">IFSC Code:</label>
                                                    <input class="form-control" type="text" name="Bank_IFSC_Code" id="Bank_IFSC_Code" value="<?php echo $fetch_bank_r[3]; ?> ">
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