<?php 
session_start();
if (isset($_POST['submit'])) {
require "./config.php";
$id = $_GET['id'];
$sqlQuery = "UPDATE uploadlostdog SET remarks = 'PENDING' WHERE id = '$id'";
$executeQuery = mysqli_query($conn,$sqlQuery);
if($executeQuery){
    header("Location: lostdog/lostdog.php");
}
}
?>