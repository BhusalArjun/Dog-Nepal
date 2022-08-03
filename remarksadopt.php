<?php 
session_start();
if (isset($_POST['submit'])) {
require "./config.php";
$id = $_GET['id'];
$sqlQuery = "UPDATE adopt SET remarks = 'PENDING' WHERE id = '$id'";
$executeQuery = mysqli_query($conn,$sqlQuery);
if($executeQuery){
    header("Location:Adoption/adopt.php");
}
}
?>