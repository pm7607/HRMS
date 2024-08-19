<?php
include "config.php";
$m=$_GET['z'];
$qry= "DELETE FROM payroll_management WHERE id='$m'";
$res=mysqli_query($conn,$qry);
if (isset($res)){
    header("Location:payroll.php");
}
?>