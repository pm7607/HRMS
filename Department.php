<?php
include('Config.php');
if(isset($_POST['submit'])){
$dname=$_POST['Department_Name'];
$qry= "INSERT INTO department(Department_Name) VALUES ('$dname')";
$res=mysqli_query($conn,$qry);
    if ($res) {
        header("Location:department.php");
    } else {
        echo "<script>alert('Data not inserted')</script>";
    }
}
?>


<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Leave Table</title>
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

    <!-- <body data-layout="horizontal"> -->

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
                                    <h4 class="mb-sm-0 font-size-18">ADD DEPARTMENT</h4>

                                    

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
                                            <div class="col-lg-3">
											<div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Department Name:</label>
                                                        <input class="form-control" type="text" name="Department_Name" id="Department_Name" placeholder="Enter here..">
                                                    </div>
													
													
                                                   
											

                                           
                                        </div>
                                                
												</div>
													<input type="hidden" name="Hidden_Salary" id="Hidden_Salary" value="Yes"/>
													<div>
                                                    <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
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
                                    <h4 class="mb-sm-0 font-size-18">ALL DEPARTMENT</h4>
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
                                                <th>Department_Id </th>
                                                <th>Department</th>
                                              
                                                <th>Action</th>
                                                
                                            </tr>
                                            </thead>
											
        
                                            <tbody>
											<?php
											$sql="select * from department";
                                            $res=mysqli_query($conn,$sql);
                                            while($row=mysqli_fetch_assoc($res)){
											?>
                                            <tr>
                                                <td><?php echo $row['Department_Id'] ?></td>
												<td><?php echo $row['Department_Name'] ?></td>
                                               
                                                
                                               
                                                <td><a href="edit_department.php?z=<?php echo $row['Department_Id']?>"><i class='fas fa-edit'></i> &nbsp; &nbsp; &nbsp;
													<a href="delete_department.php?z=<?php echo $row['Department_Id']?>"><i class='fas fa-trash'></i></a>
												</td>
                                            </tr>
											<?php  
											}

            

        ?>
                                            </tbody>
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
