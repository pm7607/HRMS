<?php
require_once "Config.php";
$m = $_GET['z'];
$qry = "SELECT * FROM admin WHERE id='" . $m . "'";
$res = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($res);
?>
<?php
if (isset($_POST['submit'])) {

    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $birthdate = $_POST["birthdate"];
    $gender = $_POST["gender"];
    $bloodgroup = $_POST["bloodgroup"];
    $birthdate = $_POST["birthdate"];
    $number = $_POST["number"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $bio = $_POST["bio"];
    $skill = $_POST["skill"];
    $education_experience = $_POST["education_experience"];
    $website = $_POST["website"];
    $language = $_POST["language"];
    $tagline = $_POST["tagline"];
    $username = $_POST["username"];

    if ($_FILES['profile_pic']['name'] != "") {
        $File = $_FILES['profile_pic']['name'];
        move_uploaded_file($_FILES['profile_pic']['tmp_name'], 'profile_pic/' . $File);
    } else {
        $File = $_POST['old_image'];
    }
    $qry = "UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', email='$email', password='$password', birthdate='$birthdate',gender='$gender', bloodgroup='$bloodgroup', number='$number', address='$address', city='$city', bio='$bio', skill='$skill', education_experience='$education_experience', website='$website', language='$language', tagline='$tagline',profile_pic='" . $File . "', username='$username'  WHERE id='$m'";
    $res = mysqli_query($conn, $qry);
    if (!isset($res)) {
        echo "Data Not Updated";
    } else {
        header("Location: profile.php");
    }
}
?>





<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Edit Profile</title>
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
                            <h4 class="mb-sm-0 font-size-18">EDIT PROFILE</h4>



                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body p-4">
                                <form action="" method="post" id="" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">First Name:</label>
                                                    <input class="form-control" type="text" name="firstname" id="firstname" value="<?php echo $row['firstname']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Mobile Number:</label>
                                                    <input class="form-control" type="text" name="number" id="number" value="<?php echo $row['number']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Birthdate:</label>
                                                    <input class="form-control" type="date" name="birthdate" id="birthdate" value="<?php echo $row['birthdate']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Address:</label>
                                                    <input class="form-control" type="text" name="address" id="address" value="<?php echo $row['address']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Education& Experience:</label>
                                                    <input class="form-control" type="text" name="education_experience" id="education_experience" value="<?php echo $row['education_experience']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Portfolio Website:</label>
                                                    <input class="form-control" type="text" name="website" id="website" value="<?php echo $row['website']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Username</label>
                                                    <input class="form-control" type="text" name="username" id="website" value="<?php echo $row['username']; ?>">
                                                </div>






                                            </div>

                                        </div>
                                        <div class="col-lg-4">
                                            <div class="mt-3 mt-lg-0">
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Middle Name:</label>
                                                    <input class="form-control" type="text" name="middlename" id="middlename" value="<?php echo $row['middlename']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Email Id:</label>
                                                    <input class="form-control" type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Blood Group:</label>
                                                    <input class="form-control" type="text" name="bloodgroup" id="bloodgroup" value="<?php echo $row['bloodgroup']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">City:</label>
                                                    <input class="form-control" type="text" name="city" id="city" value="<?php echo $row['city']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Skills:</label>
                                                    <input class="form-control" type="text" name="skill" id="skill" value="<?php echo $row['skill']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Tagline:</label>
                                                    <input class="form-control" type="text" name="tagline" id="tagline" value="<?php echo $row['tagline']; ?>">
                                                </div>




                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-3">
									<div>
                                                    <div class="mb-3">
                                                        <label for="example-year-input" class="form-label">Year:</label>
                                                        <input class="form-control" type="year-input" name="Salary_Year" id="Salary_Year" placeholder="Enter Year">
                                                    </div>
													
																										 
																										
                                                    
                                                </div>
                                                
                                    </div> -->
                                        <div class="col-lg-4">
                                            <div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Last Name:</label>
                                                    <input class="form-control" type="text" name="lastname" id="lastname" value="<?php echo $row['lastname']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Password:</label>
                                                    <input class="form-control" type="text" name="password" id="password" value="<?php echo $row['password']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-check-input" class="form-label">Gender:</label>&nbsp; &nbsp; &nbsp;
                                                    <input class="form-check-input" type="radio" name="gender" id="Male" value="Male" <?php
                                                                                                                                        if ($row['gender'] == "Male") {
                                                                                                                                            echo "checked";
                                                                                                                                        }




                                                                                                                                        ?> required>

                                                    <label class="form-check-label" for="formRadios1">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="example-date-input" class="form-label">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                                                    <input class="form-check-input" type="radio" name="gender" id="Female" value="Female" <?php
                                                                                                                                            if ($row['gender'] == "Female") {
                                                                                                                                                echo "checked";
                                                                                                                                            }




                                                                                                                                            ?> required>
                                                    <label class="form-check-label" for="formRadios1">
                                                        Female
                                                    </label>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email-input" class="form-label">Language:</label>
                                                    <select class="form-select" id="language" name="language">
                                                        <option value="">Select</option>
                                                        <option value="English" <?php
                                                                                if ($row["language"] == 'English') {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>English</option>
                                                        <option value="Hindi" <?php
                                                                                if ($row["language"] == 'Hindi') {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>HIndi</option>
                                                        <option value="Gujrati" <?php
                                                                                if ($row["language"] == 'Gujrati') {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>Gujrati</option>




                                                    </select>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Bio:</label>
                                                    <input class="form-control" type="text" name="bio" id="bio" value="<?php echo $row['bio']; ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Photo:</label>
                                                    <img src="profile_pic/<?php echo $row['profile_pic']; ?>" width="60" height="60" style="border-radius: 50%;">
                                                    <input type="hidden" name="old_image" value="<?php echo $row['profile_pic']; ?>">
                                                    <input class="form-control" type="file" name="profile_pic" id="profile_pic">
                                                </div>






                                            </div>

                                        </div>
                                        <div>
                                            <button type="submit" name="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </div>
                                </form>
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