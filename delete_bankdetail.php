<?php
include "config.php";
$m=$_GET['z'];
$qry= "DELETE FROM employee_bank_detail WHERE Bank_id='$m'";
$res=mysqli_query($conn,$qry);
if (isset($res)){
    header("Location:Manage_BankDetail.php");
}
?>