
<?php
include "config.php";
?>
<?php
$query = "SELECT project_status, count(*) as number from project GROUP BY project_status";
$result = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- preloader css -->
        <link rel="stylesheet" href="assets/css/preloader.min.css" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['project_status', 'number'],
          <?php
          while($row = mysqli_fetch_array($result))
          {
            echo "['".$row["project_status"]."',".$row["number"]."],";
          }
          ?>
        ]);

        var options = {
          title: 'Project Status',
          
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
	 

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
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <!-- <div class="page-title-right"> -->
                                        <!-- <ol class="breadcrumb m-0"> -->
                                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li> -->
                                            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
                                        <!-- </ol> -->
                                    <!-- </div> -->

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span></span>
                                                <span class="text-muted mb-3 lh-2 d-block text-truncate"><i class='fas fa-user-alt'></i>&nbsp; &nbsp;  Employee</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="10">0</span>
                                                </h4>
                                            </div>

                                            <div class="col-6">
                                                <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <a href="manage_employee.php"><span class="badge bg-soft-success text-success">view details</span></a>
                                            <!-- <span class="ms-1 text-muted font-size-13">Since last week</span> -->
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-2 d-block text-truncate"><i class='fas fa-dice-d6'></i>&nbsp; &nbsp; Projects</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="8">0</span>
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <a href="manage_project.php"><span class="badge bg-soft-success text-success">view details</span></a>
                                            
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col-->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-2 d-block text-truncate"><i class='fas fa-clock'></i>&nbsp; &nbsp; Attendance</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="10">0</span>
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <a href="Attendance.php"><span class="badge bg-soft-success text-success">view details</span></a>
                                            
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-muted mb-3 lh-2 d-block text-truncate"><i class='fas fa-calendar-alt'></i>&nbsp; &nbsp;Leave</span>
                                                <h4 class="mb-3">
                                                    <span class="counter-value" data-target="12">0</span>
                                                </h4>
                                            </div>
                                            <div class="col-6">
                                                <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <a href="Manage_Leave.php"><span class="badge bg-soft-success text-success">view details</span></a>
                                            
                                        </div>
                                    </div><!-- end card body -->
                                </div><!-- end card -->
                            </div><!-- end col -->    
                        </div><!-- end row-->

                         <div class="row"> 
                         <div class="col-xl-5">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2"></h5>
                                            <div class="ms-auto">
                                                
                                            </div>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-sm">
                                            <div id="piechart"style="width: 400px; height: 300px;"></div>
                                            <div class="col-sm align-self-center">
                                                <div class="mt-4 mt-sm-0">
                                                    
    
                                                    
    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>
							
							</div>
							<div class="col-xl-7">
                                <div class="row">
                                    <div class="col-xl-8">
                                        <!-- card -->
                                        <div class="card card-h-100">
                                            <!-- card body -->
                                            <div class="card-body">
											<h5 class="">Holidays</h5>
											<div class="table-responsive">
											
                                        <table class="table mb-0">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Holiday</th>
                                                    <th>Date</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="table-light">
                                                    <th scope="row">1</th>
                                                    <td>Makar Sankrati</td>
                                                    <td>14-01-2023</td>
                                                    
                                                </tr>

                                                <tr class="table-success">
                                                    <th scope="row">2</th>
                                                    <td>Republic Day</td>
                                                    <td>26-01-2023</td>
                                                    
                                                </tr>

                                                <tr class="table-info">
                                                    <th scope="row">3</th>
                                                    <td>Holi</td>
                                                    <td>08-03-2023</td>
                                                    
                                                </tr>

                                                <tr class="table-warning">
                                                    <th scope="row">4</th>
                                                    <td>Independance Day</td>
                                                    <td>15-08-2023</td>
                                                    
                                                </tr>

                                                <tr class="table-danger">
                                                    <th scope="row">5</th>
                                                    <td>RakshaBandhan</td>
                                                    <td>30-08-2023</td>
                                                    
                                                </tr>
												<tr class="table-light">
                                                    <th scope="row">6</th>
                                                    <td>Janmashtami</td>
                                                    <td>07-09-2023</td>
                                                    
                                                </tr>
												<tr class="table-success">
                                                    <th scope="row">7</th>
                                                    <td>Mahatma Gandhi Jayanti</td>
                                                    <td>02-10-2023</td>
                                                    
                                                </tr>
												<tr class="table-info">
                                                    <th scope="row">8</th>
                                                    <td>Dussera</td>
                                                    <td>24-10-2023</td>
                                                    
                                                </tr>
												<tr class="table-warning">
                                                    <th scope="row">9</th>
                                                    <td>Dipavali</td>
                                                    <td>12-11-2023</td>
                                                    
                                                </tr>
												<tr class="table-danger">
                                                    <th scope="row">10</th>
                                                    <td>Chirstmas</td>
                                                    <td>25-12-2023</td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    
                                                
            
                                               </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4">
                                        <!-- card -->
                              <div class="card bg-primary text-white shadow-primary card-h-100">
                                            <!-- card body -->
                                            <div class="card-body p-0">
                                                <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">                                                   
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-bitcoin widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Mobile Application</b>
                                                                <p class="text-white-50 font-size-13">Mobile application development with us can give great standard mobile applications of any class. We have worked with different brands, associations, new companies, and people to make incredible applications from a brilliant thought. From the start of mobile application development, our developers give broad application improvement support, examining thoughts, getting project plans and knowledge, and keeping you educated with day-by-day reports Industry Specific. </p>
                                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                        <div class="carousel-item">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Web Devlopment</b>
                                                                <p class="text-white-50 font-size-13">Providing Web app development solutions, we generally make powerful, secure, custom web applications with high versatility. As per the need for a product, we utilize open source innovation to foster an item with top-notch standards. We help you hang out in this computerized world by giving bespoke web app development solutions. </p>
                                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                        <div class="carousel-item">
                                                            <div class="text-center p-4">
                                                                <i class="mdi mdi-litecoin widget-box-1-icon"></i>
                                                                <div class="avatar-md m-auto">
                                                                    
                                                                </div>
                                                                <h4 class="mt-3 lh-base fw-normal text-white"><b>Enterprise Solution</b>
                                                                <p class="text-white-50 font-size-13">We as an enterprise solutions provider, answer the present issues, expects the upcoming necessities, and work on cutting-edge arrangements. Our experts work at the crossing point of innovation, procedure, execution, and endeavor capacities to make or re-engineer the most appropriate enterprise solutions. </p>
                                                                <button type="button" class="btn btn-light btn-sm">View details <i class="mdi mdi-arrow-right ms-1"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- end carousel-item -->
                                                    </div>
                                                    <!-- end carousel-inner -->
                                                    
                                                    <div class="carousel-indicators carousel-indicators-rounded">
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                                                            aria-current="true" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                    </div>
                                                    <!-- end carousel-indicators -->
                                                </div>
                                                <!-- end carousel -->
                                            </div>
                                            <!-- end card body -->
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
							</div>
							

                                        
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                
            </div>
            <!-- end main content-->

        
        <!-- END layout-wrapper -->

        
        <!-- Right Sidebar -->
       
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

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Plugins js-->
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
        <!-- dashboard init -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

</html>