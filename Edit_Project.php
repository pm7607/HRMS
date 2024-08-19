<?php
include("Config.php");
$m = $_GET['z'];
$qry = "SELECT department.Department_Name, project.* FROM project INNER JOIN department ON project.Department = department.Department_Id  WHERE project_Id ='".$m."'";
$res = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($res);
?>
<?php
if(isset($_POST['submit'])){
    $project_name=$_POST['project_name'];
    $project_start_date=$_POST['project_start_date'];
    $project_end_date=$_POST['project_end_date'];
    $Department_Id=$_POST['Department_Id'];
    $project_details=$_POST['project_details'];
    $project_status=$_POST['project_status'];
    $qry= "UPDATE project SET project_name='$project_name',project_start_date='$project_start_date',project_end_date='$project_end_date',Department='$Department_Id',project_details='$project_details',project_status='$project_status' WHERE project_Id='$m'";
    $res=mysqli_query($conn,$qry);
    if (!isset($res)) {
        echo "Data Not Updated";
    } else {
        header("Location: manage_project.php");
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Update Project</title>
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
                            <h4 class="mb-sm-0 font-size-18">UPDATE PROJECTS</h4>
                        </div>
                    </div>
                </div>
				<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-header"> -->
                            <!-- <h4 class="card-title">Textual inputs</h4> -->
                            <!-- <p class="card-title-desc">Here are examples of <code>.form-control</code> applied to each -->
                            <!-- textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p> -->
                            <!-- </div> -->
                            <div class="card-body p-4">
                                <form action="" method="post" id="add_data" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Project Title:</label>
                                                    <input class="form-control" type="text" name="project_name" id="project_name" value="<?php echo $row['project_name'] ?>" >
                                                    <!-- <div class="valid-feedback">Valid.</div> -->
                                                    <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                                                </div>
                                                <!-- <div class="mb-3"> -->
                                                <!-- <label for="example-date-input" class="form-label">Enter Email:</label> -->
                                                <!-- <input class="form-control" type="email"  id="email" placeholder="Enter email" required> -->
                                                <!-- </div> -->
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Project Start Date:</label>
                                                    <input class="form-control" type="date" name="project_start_date" id="project_start_date" value="<?php echo $row['project_start_date'] ?>" >
                                                </div>
                                                <!-- <div class="mb-3"> -->
                                                <!-- <label for="example-date-input" class="form-label">Birthdate:</label> -->
                                                <!-- <input class="form-control" type="date"  id="birthdate" placeholder="Enter birthdate" required> -->
                                                <!-- </div> -->
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Project End Date:</label>
                                                    <input class="form-control" type="date" name="project_end_date" id="project_end_date" value="<?php echo $row['project_end_date'] ?>" >
                                                    
                                                    </label>
                                                </div>
                                               
                                                
                                                <div>
                                                    <input type="hidden" name="Hidden_Add_Employee" id="Hidden_Add_Employee" value="Yes" />
                                                    <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
											<div class="mb-3">
                                                    <label for="example-email-input" class="form-label">Department:</label>
                                                    <select class="form-select" id="Department_Id" name="Department_Id">
									                                                        <?php
                                                                                            $dept = $conn->query('select * from department');
                                                                                            while ($result_dept = $dept->fetch_assoc()) {
                                                                                            ?>
									                                                            <option value="<?php echo $result_dept['Department_Id']; ?>" <?php if ($row['Department'] == $result_dept['Department_Id']) {
                                                                                                                                                                    echo "selected";
                                                                                                                                                                } ?>> <?php echo $result_dept['Department_Name']; ?> </option>


									                                                        <?php
                                                                                            }
                                                                                            ?>
									                                                    </select>
													
													
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-textare-input" class="form-label">Details:</label>
                                                    <textarea class="form-control" name="project_details" id="project_details"><?php echo $row['project_details']?></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email-input" class="form-label">Status:</label>
                                                    <select class="form-select" id="project_status" name="project_status">
                                                        <option value = "">Select</option>
                                                        <option value ="upcoming"<?php
														if($row["project_status"]=='upcoming')
														{
															echo "selected";
														}
														?> 
														>upcoming</option>
                                                        <option value ="running"<?php
														if($row["project_status"]=='running')
														{
															echo "selected";
														}
														?>
														>running</option>
                                                        <option value ="completed"<?php
														if($row["project_status"]=='completed')
														{
															echo "selected";
														}
														?>
														>completed</option>
                                                       
                                                    </select>
                                               
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