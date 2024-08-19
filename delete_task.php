<?php
include "config.php";
$m=$_GET['z'];
$qry= "DELETE FROM project_task WHERE Task_Id='$m'";
$res=mysqli_query($conn,$qry);
if (isset($res)){
    header("Location:manage_project.php");
}
?>