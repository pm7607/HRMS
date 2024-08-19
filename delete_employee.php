<?php
include "config.php";
$m=$_GET['z'];
$qry= "DELETE FROM employee WHERE Employee_Id='$m'";
$res=mysqli_query($conn,$qry);
if (isset($res)){
    header("Location:manage_employee.php");
}
?>