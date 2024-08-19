<?php
include('Config.php');
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Personal Information</title>
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
$fetch_emp_details = "SELECT department.Department_Name, employee.* FROM employee INNER JOIN department ON employee.Department = department.Department_Id WHERE `Employee_Username` = '$username_session' ";
$fetch_emp_res = mysqli_query($conn,$fetch_emp_details);
$fetch_emp_r = mysqli_fetch_array($fetch_emp_res);


?>
<?php
									$username_session = $_SESSION['username'];
									if (isset($_POST['submit'])) {
										$Employee_Name = $_POST["Employee_Name"];
										$Mobile_Number = $_POST["Mobile_Number"];
										$Password = $_POST["Password"];
										$Gender = $_POST["Gender"];
										$Address = $_POST["Address"];
										$Education_Experience = $_POST["Education_Experience"];
										//$Salary = $_POST["Salary"];
										$Email = $_POST["Email"];
										$Birthdate = $_POST["Birthdate"];
										//$Department_Id = $_POST["Department_Id"];
										//$Joinning_Date = $_POST["Joinning_Date"];
										//$Username = $_POST["Employee_Username"];
										$Parents_Number = $_POST["Parents_Number"];
										if ($_FILES['Employee_Photo']['name'] != "") {
											$File = $_FILES['Employee_Photo']['name'];
											move_uploaded_file($_FILES['Employee_Photo']['tmp_name'], 'Employee_Photo/' . $File);
										} else {
											$File = $_POST['old_image'];
										}


										$fetch_emp_details = "UPDATE employee SET Employee_Name='$Employee_Name',Mobile_Number='$Mobile_Number',Password='$Password',Gender='$Gender',Address='$Address',Education_Experience='$Education_Experience',Email='$Email',Birthdate='$Birthdate',Parents_Number='$Parents_Number',Employee_Photo='" . $File . "' WHERE Employee_Username = '$username_session' ";
										$fetch_emp_res = mysqli_query($conn, $fetch_emp_details);
										if (!isset($fetch_emp_res)) {
											echo "Data Not Updated";
										} else {
											header("Location: Employee_Personal_Info.php");
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
                            <h4 class="mb-sm-0 font-size-18">Personal Information</h4>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-header"> -->
                            <!-- <h4 class="card-title">Textual inputs</h4> -->
                            <!-- <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each -->
                            <!-- textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p> -->
                            <!-- </div> -->
                            <div class="card-body p-4">
                                <form action="" method="post" id="add_data" onsubmit="return(valid());" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <input type="hidden" name="Employee_Id" value="<?php echo $fetch_emp_r[0]; ?>">
                                                    <label for="example-text-input" class="form-label">Enter Name:</label>
                                                    <input class="form-control" type="text" name="Employee_Name" id="emp_name" value="<?php echo $fetch_emp_r[2]; ?>">
                                                    <p id="p1"></p>
                                                    <!-- <div class="valid-feedback">Valid.</div> -->
                                                    <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                                                </div>
                                                <!-- <div class="mb-3"> -->
                                                <!-- <label for="example-date-input" class="form-label">Enter Email:</label> -->
                                                <!-- <input class="form-control" type="email"  id="email" placeholder="Enter email" required> -->
                                                <!-- </div> -->
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Enter Mobile Number:</label>
                                                    <input class="form-control" type="tel" maxlength="10" name="Mobile_Number" id="Mobile_Number" value="<?php echo $fetch_emp_r[4]; ?>" >
                                                    <p id="p2"></p>

                                                </div>
                                                <!-- <div class="mb-3"> -->
                                                <!-- <label for="example-date-input" class="form-label">Birthdate:</label> -->
                                                <!-- <input class="form-control" type="date"  id="birthdate" placeholder="Enter birthdate" required> -->
                                                <!-- </div> -->
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="form-label">Gender:</label>
                                                        <input class="form-check-input" type="radio" name="Gender" id="Male" value="Male" <?php if($fetch_emp_r[6] == 'Male'){ echo "checked"; } ?>>
                                                        <label class="form-check-label" for="formRadios1">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="example-date-input" class="form-label">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                                                        <input class="form-check-input" type="radio" name="Gender" id="Female" value="Female" <?php if($fetch_emp_r[6] == 'Female'){ echo "checked"; } ?>>
                                                        <label class="form-check-label" for="formRadios1">
                                                            Female
                                                        </label>
                                                    </div>
                                                    <p id="p3"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-url-input" class="form-label">Password:</label>
                                                    <input class="form-control" type="text" name="Password" id="Password" value="<?php echo $fetch_emp_r[8]; ?>">
                                                    <p id="p4"></p>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Address:</label>
                                                    <input class="form-control" type="text" name="Address" id="Address" value="<?php echo $fetch_emp_r[10]; ?>">
                                                    <p id="p5"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Education & Experience:</label>
                                                    <input class="form-control" type="text" name="Education_Experience" id="Education_Experience" value="<?php echo $fetch_emp_r[12]; ?>">
                                                    <p id="p6"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Salary Per Month:</label>
                                                    <input class="form-control" type="text" name="Salary" id="Salary" value="<?php echo $fetch_emp_r[14]; ?>"disabled>
                                                    <p id="p7"></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Enter Email:</label>
                                                    <input class="form-control" type="text" name="Email" id="Email" value="<?php echo $fetch_emp_r[3]; ?>">
                                                    <p id="p8"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Birthdate:</label>
                                                    <input class="form-control" type="date" name="Birthdate" id="Birthdate" value="<?php echo $fetch_emp_r[5]; ?>">
                                                    <p id="p9"></p>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email-input" class="form-label">Department:</label>
                                                    <select class="form-select" id="Department_Id" name="Department_Id" disabled >
                                                        <option value="">Select Department</option>
                                                        <?php
                                                        $dept = $conn->query('select * from department');
                                                        while ($result_dept = $dept->fetch_assoc()) {
                                                        ?>
                                                            <option value="<?php echo $result_dept['Department_Id']; ?>" <?php if ($fetch_emp_r['Department'] == $result_dept['Department_Id']) {
																																									echo "selected";
																																								} ?>> <?php echo $result_dept['Department_Name']; ?> </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                    <p id="p10"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-time-input" class="form-label">Joinning Date:</label>
                                                    <input class="form-control" type="date" name="Joinning_Date" id="Joinning_Date" value="<?php echo $fetch_emp_r[9]; ?>"disabled>
                                                    <p id="p11"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Employee Username:</label>
                                                    <input type="text" class="form-control" name="Employee_Username" id="Employee_Username"value="<?php echo $fetch_emp_r[11]; ?>" disabled>
                                                    <p id="p12"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Parents Mobile Number:</label>
                                                    <input class="form-control" type="tel" maxlength="10" name="Parents_Number" id="Parents_Number" value="<?php echo $fetch_emp_r[13]; ?>">
                                                    <p id="p13"></p>

                                                </div>
                                                <div class="mb-3">
																						<label for="example-file-input" class="form-label">Photo:</label><br>
																						<label for="example-file-input" class="form-label"></label>
																						<img src="Employee_Photo/<?php echo $fetch_emp_r[15]; ?>" width="100px" height="100px">
																						<input type="hidden" name="old_image" value="<?php echo $fetch_emp_r['Employee_Photo']; ?>">
																						<input class="form-control" type="file" name="Employee_Photo" accept=".jpg, .png, .gif">
																					</div>
                                                
                                                <div class="row justify-content-end">
                                                    <div class="col-sm-3">
                                                    </div>
                                                </div>
                                                <div align="right">
                                                    <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                                </div>
                                            </div>

                                        </div>
                                </form>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
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


<?php
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// ******* Here Update query *******

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++         
?>