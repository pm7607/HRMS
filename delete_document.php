<?php
include "config.php";
$m=$_GET['z'];
$qry= "DELETE FROM employee_document WHERE Document_Id='$m'";
$res=mysqli_query($conn,$qry);
if (isset($res)){
    header("Location:manage_document.php");
}
?>