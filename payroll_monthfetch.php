<?php
include('Config.php');


    $emp_id = $_POST['id'];
    
    // $salary_q = "SELECT * FROM employee WHERE `Employee_Id`='$emp_id' ";
    // $salary_res = mysqli_query($)
    // echo $emp_id;
    $fetch_month_q = "SELECT * FROM employee_salary WHERE Employee_Id='$emp_id' ";
    $fetch_month_res = mysqli_query($conn,$fetch_month_q);
    
    //_______________________-working Code-___________________________
    // while($fetch_salary_r = mysqli_fetch_array($fetch_salary_res))
    // {
    //     $responce = array(
    //         'salary' => $fetch_salary_r[2],
    //         'month' => $fetch_salary_r[1],
    //     );
    //     header('Content-type: application/json');
    //     echo json_encode($responce);
    // }
    //_______________________-working Code-___________________________

    echo "<option value=''>select Month</option>";
    while($fetch_month_r = mysqli_fetch_array($fetch_month_res))
    {
        echo "<option value='".$fetch_month_r[1]."'>".$fetch_month_r[1]."</option>";   
    }

?>



<?php 

// $emp_month = $_POST['month'];


// // echo $emp_month;

// $fetch_salary_q = "SELECT * FROM employee_salary WHERE Salary_Month='$emp_month'";
//     $fetch_salary_res = mysqli_query($conn,$fetch_salary_q);
    
//     while($fetch_salary_r = mysqli_fetch_array($fetch_salary_res))
//     {
//         echo $fetch_salary_r[2];
//     }
?>    