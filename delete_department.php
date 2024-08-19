<?php
include "config.php";
$m=$_GET['z'];
$qry= "DELETE FROM department WHERE Department_Id='$m'";
$res=mysqli_query($conn,$qry);
if (isset($res)){
    header("Location:Department.php");
}
?>