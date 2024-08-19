<?php
include "config.php";
$sql = "SELECT * FROM admin";
$res = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($res)) {
?>


    <!doctype html>
    <html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Profile </title>
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                                <h4 class="mb-sm-0 font-size-18">Profile</h4>



                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm order-2 order-sm-1">
                                            <div class="d-flex align-items-start mt-3 mt-sm-0">
                                                <div class="flex-shrink-0">
                                                    <div class="avatar-xl me-3">
                                                        <img src="profile_pic/<?php echo $row['profile_pic']; ?>" width="80px" height="80px" style="border-radius: 50%;">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div>
                                                        <h5 class="font-size-16 mb-1"><span><?php echo $row['username']; ?></span></h5>
                                                        <p class="text-muted font-size-13"><?php echo $row['tagline']; ?></p>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto order-1 order-sm-2">
                                            <div class="d-flex align-items-start justify-content-end gap-2">
                                                <div>
                                                    <a href="Edit_Profile.php?z=<?php echo $row['id'] ?>"><button type="button" class="btn btn-soft-light"><i class="me-1"></i>Edit Profile</button></a>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="Add_Profile.php"><button class="btn btn-link font-size-16 shadow-none text-muted">
                                                            <i class="fa fa-plus" style="font-size:24px"></i>
                                                        </button></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview" role="tab">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab">About</a>
                                        </li>

                                    </ul>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="tab-content">
                                <div class="tab-pane active" id="overview" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Overview</h5>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <div class="pb-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">Bio :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['bio']; ?></p>
                                                                <p class="mb-0"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">Education & Experience:</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <div class="text-muted">
                                                                <p><?php echo $row['education_experience']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">Skills :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['skill']; ?></p>
                                                                <p class="mb-0"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">Portfolio Website :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['website']; ?></p>
                                                                <p class="mb-0"></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->


                                    <!-- end card -->
                                </div>
                                <!-- end tab pane -->

                                <div class="tab-pane" id="about" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">About</h5>
                                        </div>
                                        <div class="card-body">
                                            <div>
                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">Name :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['firstname']; ?>&nbsp; <span><?php echo $row['middlename']; ?></span>&nbsp; <span><?php echo $row['lastname']; ?></span></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">Email Address :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['email']; ?></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">Mobile Number :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['number']; ?></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">BirthDate :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['birthdate']; ?></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">BloodGroup :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['bloodgroup']; ?></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">Gender :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['gender']; ?></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">Address :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['address']; ?></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-3">
                                                    <div class="row">
                                                        <div class="col-xl-2">
                                                            <div>
                                                                <h5 class="font-size-15">City :</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl">
                                                            <div class="text-muted">
                                                                <p class="mb-2"><?php echo $row['city']; ?></p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                </div>
                                <!-- end tab pane -->


                            </div>
                            <!-- end tab content -->
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->



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

    </body>


    </html>
<?php
}
?>