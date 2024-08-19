<?php

include('Config.php');
session_start();

if(!isset($_SESSION["username"])){
	header("Location: Admin_Leave.php");
  }
else{

$eid = $_GET['eid'];
$descr = $_GET['descr'];

$add_to_db = mysqli_query($conn,"UPDATE leaves SET status='Rejected' WHERE eid='".$eid."' AND descr='".$descr."'");
	
			if($add_to_db){	
			  echo "Saved!!";
			  header("Location: Admin_Leave.php");
			}
			else{
			  echo "Query Error : " . "UPDATE leaves SET status='Rejected' WHERE eid='".$eid."' AND descr='".$desc."'" . "<br>" . mysqli_error($conn);
			}
	}

	ini_set('display_errors', true);
	error_reporting(E_ALL);  
		 
?>