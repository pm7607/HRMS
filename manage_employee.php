
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Employee Table</title>
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
                            <h4 class="mb-sm-0 font-size-18">EMPLOYEE DETAILS</h4>

                            <!-- <div class="page-title-right"> -->
                            <!-- <ol class="breadcrumb m-0"> -->
                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li> -->
                            <!-- <li class="breadcrumb-item active">DataTables</li> -->
                            <!-- </ol> -->
                            <!-- </div> -->

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-header"> -->
                            <!-- <h4 class="card-title">Default Datatable</h4> -->
                            <!-- <p class="card-title-desc">DataTables has most features enabled by -->
                            <!-- default, so all you need to do to use it with your own tables is to call -->
                            <!-- the construction function: <code>$().DataTable();</code>. -->
                            <!-- </p> -->
                            <!-- </div> -->
                            <div class="card-body">
                                <table id="datatable" class="">
                                    <div style="overflow-x:auto;">
                                        <table id="example" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Mo.Number</th>
                                                    <th>Birthdate</th>
                                                    <th>Gender</th>
                                                    <th>Department</th>
                                                    <th>Password</th>
                                                    <th>joinning Date</th>
                                                    <th>Address</th>
                                                    <th>Employee Code</th>
                                                    <th>Education & Experinece</th>
                                                    <th>parents Number</th>
                                                    <th>Salary</th>
                                                    <th>Profile Picture</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php
                                                include "config.php";
                                                $sql = "SELECT department.Department_Name, employee.* FROM employee INNER JOIN department ON employee.Department = department.Department_Id";
                                                $res = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_assoc($res)) {

                                                ?>

                                                    <tr>
                                                        <td><?php echo $row['Employee_Name']; ?></td>
                                                        <td><?php echo $row['Email']; ?></td>
                                                        <td><?php echo $row['Mobile_Number']; ?></td>
                                                        <td><?php echo $row['Birthdate']; ?></td>
                                                        <td><?php echo $row['Gender']; ?></td>
                                                        <td><?php echo $row['Department_Name']; ?></td>
                                                        <td><?php echo $row['Password']; ?></td>
                                                        <td><?php echo $row['Joinning_Date']; ?></td>
                                                        <td><?php echo $row['Address']; ?></td>
                                                        <td><?php echo $row['Employee_Username']; ?></td>
                                                        <td><?php echo $row['Education_Experience']; ?></td>
                                                        <td><?php echo $row['Parents_Number']; ?></td>
                                                        <td><?php echo $row['Salary']; ?></td>
                                                        <td><img src="Employee_Photo/<?php echo $row['Employee_Photo']; ?>" width="100px" height="100px" ></td>
                                                        <td><a href="Edit_Employee.php?z=<?php echo $row['Employee_Id']; ?>"><i class='fas fa-edit'></i></a> &nbsp; &nbsp; &nbsp;
                                                            <a href="delete_employee.php?z=<?php echo $row['Employee_Id'] ?>"><i class='fas fa-trash'></i></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <footer class="footer">
        <div class="container-fluid">
            <div class="row">

            </div>
        </div>
        </div>
    </footer>
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
    <!-- <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script> -->

    <!-- Datatable init js -->
    <!-- <script src="assets/js/pages/datatables.init.js"></script> -->

    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                scrollX: true,
            });
        });
    </script>

</body>

</html>