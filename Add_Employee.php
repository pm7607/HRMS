<?php
include('Config.php');
?>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['Employee_Name'];
    $number = $_POST['Mobile_Number'];
    $gender = $_POST['Gender'];
    $password = $_POST['Password'];
    $address = $_POST['Address'];
    $education = $_POST['Education_Experience'];
    $salary = $_POST['Salary'];
    $email = $_POST['Email'];
    $birthdate = $_POST['Birthdate'];
$department = $_POST['Department_Id'];

    $joinning = $_POST['Joinning_Date'];
    $Employee_Username = $_POST['Employee_Username'];
    $parents = $_POST['Parents_Number'];
    $File = $_FILES['Employee_Photo']['name'];
    move_uploaded_file($_FILES['Employee_Photo']['tmp_name'], 'Employee_Photo/' . $File);
    $qry = "insert into employee(Employee_Name, Email, Mobile_Number, Birthdate, Gender, Department, Password, Joinning_Date, Address, Employee_Username, Education_Experience, Parents_Number, Salary, Employee_Photo)
    values('$name','$email','$number','$birthdate','$gender','$department','$password','$joinning','$address','$Employee_Username','$education','$parents','$salary','" . $File . "')";
    $result = mysqli_query($conn, $qry);
    if ($result) {
        echo "success";
         header("Location:manage_employee.php");
    } else {
        echo "<script>alert('Data not inserted')</script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add Employee Documents</title>
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
                            <h4 class="mb-sm-0 font-size-18">ADD EMPLOYEE</h4>
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
                                                    <label for="example-text-input" class="form-label">Enter Name:</label>
                                                    <input class="form-control" type="text" name="Employee_Name" id="emp_name" placeholder="Enter Name Here">
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
                                                    <input class="form-control" type="tel" maxlength="10" name="Mobile_Number" id="Mobile_Number" placeholder="Enter Number Here">
                                                    <p id="p2"></p>

                                                </div>
                                                <!-- <div class="mb-3"> -->
                                                <!-- <label for="example-date-input" class="form-label">Birthdate:</label> -->
                                                <!-- <input class="form-control" type="date"  id="birthdate" placeholder="Enter birthdate" required> -->
                                                <!-- </div> -->
												<div>
                                                <div class="mb-3">
                                                    <label for="example-check-input" class="form-label">Gender:</label>
                                                    <input class="form-check-input" type="radio" name="Gender" id="Male" value="Male">
                                                    <label class="form-check-label" for="formRadios1">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="example-date-input" class="form-label">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </label>
                                                    <input class="form-check-input" type="radio" name="Gender" id="Female" value="Female">
                                                    <label class="form-check-label" for="formRadios1">
                                                        Female
                                                    </label>
                                                </div>
												<p id="p3"></p>
												</div>
                                                <div class="mb-3">
                                                    <label for="example-url-input" class="form-label">Password:</label>
                                                    <input class="form-control" type="text" name="Password" id="Password" placeholder="Enter Password Here">
                                                    <p id="p4"></p>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Address:</label>
                                                    <input class="form-control" type="text" name="Address" id="Address" placeholder="Enter Address Here" >
													<p id="p5"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Education & Experience:</label>
                                                    <input class="form-control" type="text" name="Education_Experience" id="Education_Experience" placeholder="Enter Education & Experience Here">
													<p id="p6"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Salary Per Month:</label>
                                                    <input class="form-control" type="text" name="Salary" id="Salary" placeholder="Enter Salary Here">
													<p id="p7"></p>
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
                                                    <label for="example-date-input" class="form-label">Enter Email:</label>
                                                    <input class="form-control" type="text" name="Email" id="Email" placeholder="Enter Email Here">
                                                    <p id="p8"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Birthdate:</label>
                                                    <input class="form-control" type="date" name="Birthdate" id="Birthdate">
                                                    <p id="p9"></p>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-email-input" class="form-label">Department:</label>
                                                    <select class="form-select" id="Department_Id" name="Department_Id">
    <option value="">Select Department</option>
    <?php
    $dept = $conn->query('select * from department');
    while ($result_dept = $dept->fetch_assoc()) {
    ?>
        <option value="<?php echo $result_dept['Department_Id'] ?>"><?php echo $result_dept['Department_Name']; ?></option>
    <?php
    }
    ?>
</select>

													<p id="p10"></p>
													
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-time-input" class="form-label">Joinning Date:</label>
                                                    <input class="form-control" type="date" name="Joinning_Date" id="Joinning_Date" >
                                                    <p id="p11"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Employee Username:</label>
                                                    <input type="text" class="form-control" name="Employee_Username" id="Employee_Username" placeholder="Enter Username Here" >
													<p id="p12"></p>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-text-input" class="form-label">Parents Mobile Number:</label>
                                                    <input class="form-control" type="tel" maxlength="10" name="Parents_Number" id="Parents_Number" placeholder="Enter Number Here">
                                                    <p id="p13"></p>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="example-file-input" class="form-label">Photo:</label>
                                                    <input class="form-control" type="file" name="Employee_Photo" id="Employee_Photo" accept=".jpg, .png, .gif">
													<p id="p14"></p>
                                                </div>
                                                <div class="row justify-content-end">
                                                    <div class="col-sm-3">
                                                    </div>
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
            <script>
                function valid()
                {
                    var bday = document.getElementById('Birthdate').value;

// Convert the entered birthdate string to a Date object
var inputDate = new Date(bday);

// Get the current date
var currentDate = new Date();

// Calculate the minimum allowed birthdate (18 years ago)
var validMinDate = new Date(
    currentDate.getFullYear() - 18,
    currentDate.getMonth(),
    currentDate.getDate()
);

// Perform the comparison
if (inputDate < validMinDate) {
    // The entered birthdate is valid (older than 18 years)
    return true;
} else {
    // The entered birthdate is not valid (less than 18 years old)
    var x = "Minimum age must be 18 years";
    document.getElementById('p9').innerHTML = x;
    document.getElementById('p9').style.color = 'red';
    return false;
}

                    var us = document.getElementById('emp_name').value;
                    var mno=document.getElementById('Mobile_Number').value;
                    var pmno=document.getElementById('Parents_Number').value;
                    var pwd=document.getElementById('Password').value;
                    var em=document.getElementById('Email').value;
                    //var bday=document.getElementById('Birthdate').value;
                    var join=document.getElementById('Joinning_Date').value;
                    var add=document.getElementById('Address').value;
                    var edu_exp=document.getElementById('Education_Experience').value;
                    var salary=document.getElementById('Salary').value;
                    var empcode=document.getElementById('Employee_Code').value;
                    
					var department=document.getElementById('Department_Id').value;                    
					var photo=document.getElementById('Employee_Photo').value;
					var radios = document.querySelectorAll('input[type="radio"][name="Gender"]');
                    var radioSelected = Array.prototype.slice.call(radios).some(function(radio) {
                        return radio.checked;
                    });
					 if (!radioSelected) {
                        var vgender="false";
                        var x="please select your Gender";
                        document.getElementById('p3').innerHTML=x;
                        document.getElementById('p3').style.color='red';
                    } else {
                        var vgender="true";
                        var x="";
                        document.getElementById('p3').innerHTML=x;
                    }
                    
					if(us=="")
                    {
                        // alert('hello');
                        var vem1="false";
                        var x="Name field is empty please enter your Name";
                        document.getElementById('p1').innerHTML=x;
                        document.getElementById('p1').style.color='red';
                    }
                    else
                    {
                        var b1=/^[A-Za-z]{2,20}$/;
                        var a1=b1.test(us);
                        if(a1==false)
                        {
                            var vem1="false";
                            var x="Username field must contain only alphabet and char limie 2-20(No space)";
                            document.getElementById('p1').innerHTML=x;
                            document.getElementById('p1').style.color='red';
                        }
                        else
                        {
                            vem1="true";
                            var x="";
                            document.getElementById('p1').innerHTML=x;
                        }
                    }
					if(mno=="")
                    {
                        var vmno="false";
                        var x="Moblie number field is empty please enter your moblie number";
                        document.getElementById('p2').innerHTML=x;
                        document.getElementById('p2').style.color='red';
                    }
                    else
                    {
                        var c=/^[0-9]{10}$/;
                        var d=c.test(mno);
                        if(d==false)
                        {
                            var vmno="false";
                            var x="Please Enter Valid Mobile No";
                            document.getElementById('p2').innerHTML=x;
                            document.getElementById('p2').style.color='red';
                        }
                        else
                        {
                            var vmno="true";
                            var x="";
                            document.getElementById('p2').innerHTML=x;
                        }
                    }
					if(pwd=="")
                    {
                        var x="Password field is empty please enter Password";
                        document.getElementById('p4').innerHTML=x;
                        document.getElementById('p4').style.color='red';
                        var vpwd="false";
                    }
                    else
                    {
                        re = /[0-9]/;
                        re1 = /[a-z]/;
                        re2 = /[A-Z]/;
                        re3=/[!@#\$%\^\&*+=._-]/;
                        var a1=pwd.length<7;
                        var a2=pwd.length>15;
                        var a3=re.test(pwd);
                        var a4=re1.test(pwd);
                        var a5=re2.test(pwd);
                        var a6=re3.test(pwd);
                        if(a1==true||(a2==true)||(a3==false)||(a4==false)||(a5==false)||(a6==false))
                        {
                            var x="Password length must be 7 to 15 charachters and must contain one small and capital letter a digit and special character";
                            document.getElementById('p4').innerHTML=x;
                            document.getElementById('p4').style.color='red';
                            var vpwd="false";
                            //alert(vpwd);
                        }
                        else
                        {
                            var x="";
                            document.getElementById('p4').innerHTML=x;
                            vpwd="true";
                        }
                    }
					if(add=="")
					{
						var vadd="false";
                        var x="Address field is empty please enter your Address";
						document.getElementById('p5').innerHTML=x;
                        document.getElementById('p5').style.color='red';
					}
					else
                        {
                            vadd="true";
                            var x="";
                            document.getElementById('p5').innerHTML=x;
                        }
					if(edu_exp=="")
					{
						var vedu_exp="false";
						var x="Education&Experience field is empty please enter your Education&Experience";
						document.getElementById('p6').innerHTML=x;
                        document.getElementById('p6').style.color='red';
						
					}
					else
                        {
                            vedu_exp="true";
                            var x="";
                            document.getElementById('p6').innerHTML=x;
                        }
					if(salary=="")
					{
						var vsalary="false";
						var x="Salary field is empty please enter your Salary";
						document.getElementById('p7').innerHTML=x;
                        document.getElementById('p7').style.color='red';
					}
					else
                        {
                            vsalary="true";
                            var x="";
                            document.getElementById('p7').innerHTML=x;
                        }
					if(em=="")
                    {
                        var vem="false";
                        var x="Email field is empty please enter your email";
                        document.getElementById('p8').innerHTML=x;
                        document.getElementById('p8').style.color='red';
                    }
                    else
                    {
                        var b=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,7})$/;
                        var a=b.test(em);
                        if(a==false)
                        {
                            var vem="false";
                            var x="Please Enter Valid Email";
                            document.getElementById('p8').innerHTML=x;
                            document.getElementById('p8').style.color='red';
                        }
                        else
                        {
                            vem="true";
                            var x="";
                            document.getElementById('p8').innerHTML=x;
                        }
                    }
					
					 if(department=="")
                    {
                        // alert('hello');
                        var vdepartment="false";
                        var x="please select your Department";
                        document.getElementById('p10').innerHTML=x;
                        document.getElementById('p10').style.color='red';
                    }
                    else
                    {
                        vdepartment="true";
                            var x="";
                            document.getElementById('p10').innerHTML=x;
                    } 
						
					
					


                    if(join=="")
                    {
                        // alert('hello');
                        var vjoin="false";
                        var x="Joinning Date field is empty please enter your Joinning Date";
                        document.getElementById('p11').innerHTML=x;
                        document.getElementById('p11').style.color='red';
                    }
                    else
                    {
                        const inputDate = new Date(join);
                        const currentDate = new Date();
                        if (inputDate < currentDate) {
                            vjoin="true";
                            var x="";
                            document.getElementById('p11').innerHTML=x;
                        } 
                        else 
                        {
                            var vjoin="false";
                            var x="future date is not allow";
                            document.getElementById('p11').innerHTML=x;
                            document.getElementById('p11').style.color='red';
                        }

                    } 
					if(empcode=="")
					{
						var vcode="false";
						var x="Employee code field is empty please enter your Employee code";
						document.getElementById('p12').innerHTML=x;
                        document.getElementById('p12').style.color='red';
					}
					else
                        {
                            vcode="true";
                            var x="";
                            document.getElementById('p12').innerHTML=x;
                        }
                    
                    
						
						
						
                        

                    
					


                    

                    if(pmno=="")
                    {
                        var vpmno="false";
                        var x="Moblie number field is empty please enter your moblie number";
                        document.getElementById('p13').innerHTML=x;
                        document.getElementById('p13').style.color='red';
                    }
                    else
                    {
                        var c=/^[0-9]{10}$/;
                        var d=c.test(pmno);
                        if(d==false)
                        {
                            var vpmno="false";
                            var x="Please Enter Valid Mobile No";
                            document.getElementById('p13').innerHTML=x;
                            document.getElementById('p13').style.color='red';
                        }
                        else
                        {
                            var vpmno="true";
                            var x="";
                            document.getElementById('p13').innerHTML=x;
                        }
                    }

                    


                    
					
					
					
						
					
					
					if(photo=="")
					{
						var vphoto="false";
						var x="please select the photo";
						document.getElementById('p14').innerHTML=x;
                        document.getElementById('p14').style.color='red';
					}
					else{
							var vphoto="true";
                            var x="";
                            document.getElementById('p14').innerHTML=x;
					}
					
						
					
					
						
						
						
					
				
                    

                    if(vem1=="true" && vmno=="true" && vpwd=="true" && vem=="true" && vbday=="true" && vjoin=="true" && vpmno=="true" && vadd=="true" && vedu_exp=="true" && vsalary=="true" && vcode=="true" &&vgender=="true" &&vdepartment=="true" &&vphoto=="true" )
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }              
                }
            </script>
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