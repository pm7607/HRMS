<?php
include('Config.php');
?>
<?php
if(isset($_POST['submit'])){
$project_name = $_POST['Project_Id'];
$Employee_Id = $_POST['Employee_Id'];
$Task_Name=$_POST['Task_Name'];
$Task_Start_Date=$_POST['Task_Start_Date'];
$Task_End_Date=$_POST['Task_End_Date'];
$Task_Details=$_POST['Task_Details'];
$Task_Status=$_POST['Task_Status'];
$qry= "INSERT INTO project_task(project,Employee_Id,Task_Name,Task_Start_Date,Task_End_Date,Task_Details,Task_Status) VALUES ('$project_name','$Employee_Id','$Task_Name','$Task_Start_Date','$Task_End_Date','$Task_Details','$Task_Status')";
$res=mysqli_query($conn,$qry);
if($res){
    header("Location:manage_project.php");
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
    <title>Add Project Task</title>
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
                            <h4 class="mb-sm-0 font-size-18">ADD TASKS</h4>
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
                                <form action="" method="post" id="add_task" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Project Title:</label>
                                                     <select class="form-select" id="Project_Id" name="Project_Id">
													 <option>Select project</option>
                                                    <?php
                                                    $emp = $conn->query('select * from project');
                                                    while ($result_emp = $emp->fetch_assoc()) {
                                                    ?>
                                                        <option value="<?php echo $result_emp['project_Id'] ?>"><?php echo $result_emp['project_name'];?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                    
                                                </div>
                                                <!-- <div class="mb-3"> -->
                                                <!-- <label for="example-date-input" class="form-label">Enter Email:</label> -->
                                                <!-- <input class="form-control" type="email"  id="email" placeholder="Enter email" required> -->
                                                <!-- </div> -->
                                                
                                                <!-- <div class="mb-3"> -->
                                                <!-- <label for="example-date-input" class="form-label">Birthdate:</label> -->
                                                <!-- <input class="form-control" type="date"  id="birthdate" placeholder="Enter birthdate" required> -->
                                                <!-- </div> -->
												<div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Task Title:</label>
                                                    <input class="form-control" type="text" name="Task_Name" id="Task_Name" placeholder="Enter Task Here">
                                                    
                                                </div>
												 <div class="mb-3">
                                                    <label for="example-textare-input" class="form-label">Assign employee:</label>
                                                    <select class="form-select" id="Employee_Id" name="Employee_Id">
													<option selected>select employee</option>
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
                                                    <label for="example-date-input" class="form-label">Task Start Date:</label>
                                                    <input class="form-control" type="date" name="Task_Start_Date" id="Task_Start_Date" placeholder="Enter Number Here">
                                                </div>
												
												
												
                                                
                                              
                                               
                                                
                                                <div>
                                                    <input type="hidden" name="Hidden_Add_Employee" id="Hidden_Add_Employee" value="Yes" />
                                                    <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-3 mt-lg-0">
											<!--<div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Project Start Date:</label>
                                                    <input class="form-control" type="date" name="project_start_date" id="project_start_date" placeholder="Enter Number Here">
                                                </div>
                                               
                                                 <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Project End Date:</label>
                                                    <input class="form-control" type="date" name="project_end_date" id="project_end_date" value="Male" >
                                                    
                                                </div>-->
												<div class="mb-3">
                                                    <label for="example-textare-input" class="form-label">Task Details:</label>
                                                    <textarea class="form-control" name="Task_Details" id="Task_Details" rows="5"></textarea>
                                                </div>
												<div class="mb-3">
                                                    <label for="example-email-input" class="form-label"> Task Status:</label>
                                                    <select class="form-select" id="Task_Status" name="Task_Status">
                                                        <option selected>Select</option>
                                                        <option>completed</option>
                                                        <option>running</option>
                                                        <option>cancel</option>
                                                       
                                                    </select>
                                               
                                                </div>
												<div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Task End Date:</label>
                                                    <input class="form-control" type="date" name="Task_End_Date" id="Task_End_Date">
                                                    
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