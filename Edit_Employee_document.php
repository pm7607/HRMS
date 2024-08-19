<?php
include('Config.php');
$m = $_GET['z'];
$qry = "SELECT employee.Employee_Name,employee_document.Resume,employee_document.Aadhar_Card,employee_document.Joinning_Letter,employee_document.Pan_Card from employee inner join employee_document on employee.Employee_Id=employee_document.Employee_Id Where Document_Id='$m'";
$res = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($res);
?>
<?php
if (isset($_POST['submit'])) {
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
    $qry = "UPDATE employee_document SET Resume='" . $Resume . "', Aadhar_Card='" . $Aadhar_Card . "',Pan_Card='" . $Pan_Card . "',Joinning_Letter='" . $Joinning_Letter . "' WHERE Document_Id='$m'";
    $res = mysqli_query($conn, $qry);
    if (!isset($res)) {
        echo "Data Not Updated";
    } else {
        header("Location: manage_document.php");
    }
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Update Employee documents</title>
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
                            <h4 class="mb-sm-0 font-size-18">UPDATE EMPLOYEE DOCUMENT</h4>



                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body p-4">
                                <form action="" method="post" id="add_document" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6">

                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-select-input" class="form-label">Employee Name:</label>
                                                    <input type="text" class="form-control" name="Employee_Id" value="<?php echo $row['Employee_Name']; ?>" disabled>

                                                    </input>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Resume:</label><br>
                                                    <label for="example-file-input" class="form-label">Resume Old Image : </label>
                                                    <img src="Resume/<?php echo $row['Resume']; ?>" width="140px" height="140px">
                                                    <input type="hidden" name="old_Resume" value="<?php echo $row['Resume']; ?>">
                                                    <input class="form-control" type="file" name="Resume"><br><br>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Aadhar Card:</label><br>
                                                    <label for="example-file-input" class="form-label">Aadhar Card Old Image : </label>
                                                    <img src="Aadhar_Card/<?php echo $row['Aadhar_Card']; ?>" width="140px" height="140px">
                                                    <input type="hidden" name="old_Aadhar" value="<?php echo $row['Aadhar_Card']; ?>">
                                                    <input class="form-control" type="file" name="Aadhar_Card">
                                                </div>



                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">

                                                <div class="mb-3">
                                                    <br><br><br><br><label for="example-file-input" class="form-label">Pan Card:</label><br>
                                                    <label for="example-file-input" class="form-label">Pan Card Old Image : </label>
                                                    <img src="Pan_Card/<?php echo $row['Pan_Card']; ?>" width="140px" height="140px">
                                                    <input type="hidden" name="old_Pan" value="<?php echo $row['Pan_Card']; ?>">
                                                    <input class="form-control" type="file" name="Pan_Card" id="Pan_Card"><br><br>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Joinning Letter:</label><br>
                                                    <label for="example-file-input" class="form-label">Joinning Letter Old Image : </label>
                                                    <img src="Joinning_Letter/<?php echo $row['Joinning_Letter']; ?>" width="140px" height="140px">
                                                    <input type="hidden" name="old_Joinning_Letter" value="<?php echo $row['Joinning_Letter']; ?>">
                                                    <input class="form-control" type="file" name="Joinning_Letter" id="Joinning_Letter">
                                                </div>

                                                <input type="hidden" name="Hidden_Add_Document" id="Hidden_Add_Document" value="Yes" />

                                                <div class="mb-3" align="right"><br>
                                                    <br>
                                                    <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>

                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $("body").on("submit", "#add_document", function() {
            var formData = new FormData($(this)[0]);

            $.ajax({
                url: 'ajax_functions.php',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data == "Yes") {
                        alert("Insert Sucess...");
                        return false;
                    } else {
                        alert('Username or password is invalid');
                        return false;
                    }
                }
            });



        });
        $("body").on("submit", "#add_bank_detail", function() {
            var formData = new FormData($(this)[0]);

            $.ajax({
                url: 'ajax_functions.php',
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    alert(data);
                    if (data == "Yes") {
                        window.location = "index.php";
                    } else {
                        alert('Username or password is invalid');
                        return false;
                    }
                }
            });



        });
    </script>
    <!-- end js include path -->


</body>

</html>