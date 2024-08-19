<?php
include "config.php";
$m=$_GET['z'];
$qry= "DELETE FROM employee_leave WHERE Leave_Id='$m'";
$res=mysqli_query($conn,$qry);
if (isset($res)){
    header("Location:Manage_Leave.php");
}
?>