<?php 
require "./config.php";
$id=$_GET['id'];
$sqlQuery = "UPDATE uploadlostdog SET status = 'APPROVE' WHERE id = '$id'";
$executeQuery = mysqli_query($conn,$sqlQuery);
if($executeQuery){
    header("Location: admin/uploadlostdogdash.php");
}
?>