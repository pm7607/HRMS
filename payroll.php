<?php
include('Config.php');
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Payroll Management</title>
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

    <!-- <body data-layout="horizontal"> -->
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
                            <h4 class="mb-sm-0 font-size-18">MANAGE PAYROLL</h4>



                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body p-4">
                                <form action="" method="post" id="add_tax">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Employee:</label>
                                                    <select class="form-select" id="Employee_Id" name="Employee_Id" onchange="employee_id(this.options[this.selectedIndex].value)">
                                                        <option value="">select Employee</option>
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






                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-month-input" class="form-label">Month:</label>
                                                    <input class="form-control" type="month" name="Salary_month">
                                                </div>
                                                <!-- <div class="d-flex justify-content-end">
                                                    <button type="submit" name="submit"
                                                        class="btn btn-primary w-md">Submit</button>
                                                </div> -->



                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Salary:</label>
                                                    <input class="form-control" type="text" name="Salary" id="Salary" placeholder="Enter Salary">

                                                </div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                                </div>



                                            </div>
                                        </div>


                                    </div>
                                </form>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">PAYROLL DETAILS</h4>
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
                                                    <th>NO.</th>
                                                    <th>Employee</th>
                                                    <th>Month</th>
                                                    <th>Salary</th>
                                                    <th>Tax</th>
                                                    <th>Total Payble Amount</th>

                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <?php
                                            include "config.php";
                                            $sql = "select employee.Employee_Name,payroll_management.Salary,payroll_management.Salary_month,payroll_management.tax,payroll_management.Total_Amount,payroll_management.id   from employee inner join payroll_management on employee.Employee_Id  = payroll_management.Employee_Id;";
                                            $result = $conn->query($sql);
                                            $i = 1;
                                            ?>

                                            <tbody>
                                                <?php
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {

                                                ?>

                                                        <tr>
                                                            <td><?php echo $row['id'] ?></td>
                                                            <td><?php echo $row['Employee_Name'] ?></td>
                                                            <td><?php echo $row['Salary_month'] ?></td>
                                                            <td><?php echo $row['Salary'] ?></td>
                                                            <td><?php echo $row['tax'] ?></td>
                                                            <td><?php echo $row['Total_Amount'] ?></td>



                                                            <td>
                                                                <a href="delete_payroll.php?z=<?php echo $row['id'] ?>"><i class='fas fa-trash'></i></a>&nbsp;&nbsp;&nbsp;
                                                                <!-- <a href="pdf.php?z=<?php echo $row['id'] ?>&acton=download"><i class='fas fa-download'></i></a> -->
                                                            </td>
                                                        </tr>
                                                <?php       }
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
                <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

                <script>
                    function employee_id(id) {
                        // alert(id);
                        jQuery.ajax({
                            url: 'payroll_salaryfetch.php',
                            type: 'post',
                            data: 'id=' + id,
                            success: function(result) {
                                // alert(result);
                                $('#Salary').val(result);

                            }
                        });
                    }
                </script>
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
<?php
include('Config.php');
?>

<?php
if (isset($_POST['submit'])) {
    $Employee_Id = $_POST['Employee_Id'];
    $Salary = $_POST['Salary'];
    $Salary_month = $_POST['Salary_month'];


    $fetch_tax = "SELECT * FROM employee_tax";
    $fetch_tax_res = mysqli_query($conn, $fetch_tax);
    while ($fetch_tax_r = mysqli_fetch_array($fetch_tax_res)) {
        if ($Salary >= $fetch_tax_r[1] && $Salary <= $fetch_tax_r[2]) {
            $tax = $fetch_tax_r[3];
        }
        // else
        // {
        //     $tax = 0;
        // }
    }
    $percentage_without_symbol = str_replace("%", " ", $tax);
    $numeric_value = $percentage_without_symbol / 100;
    $demo = $numeric_value * $Salary;
    $total_salary = $Salary - $demo;
    $qry = "INSERT INTO `payroll_management`(`Employee_Id`, `Salary`,`Salary_month` ,`tax`, `Total_Amount`) VALUES ('$Employee_Id','$Salary','$Salary_month','$tax','$total_salary')";
    $result = mysqli_query($conn, $qry);
    if ($result) {
        echo "<script>alert('success')</script>";
        //  header("Location:manage_employee.php");
    } else {
        echo "<script>alert('Data not inserted')</script>";
    }
}
?>