<?php
include "config.php";
$m=$_GET['z'];
$qry= "DELETE FROM employee_salary WHERE Salary_Id='$m'";
$res=mysqli_query($conn,$qry);
if (isset($res)){
    header("Location:Salary.php");
}
?>