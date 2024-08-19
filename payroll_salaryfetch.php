<?php
include('Config.php');


    $emp_id = $_POST['id'];
    
    // $salary_q = "SELECT * FROM employee WHERE `Employee_Id`='$emp_id' ";
    // $salary_res = mysqli_query($)
    // echo $emp_id;
    $fetch_salary_q = "SELECT * FROM employee WHERE Employee_Id='$emp_id' ";
    $fetch_salary_res = mysqli_query($conn,$fetch_salary_q);
    while($fetch_salary_r = mysqli_fetch_array($fetch_salary_res))
    {
        echo $fetch_salary_r['13'];
    }

?>