<?php include "../config.php";
$id=$_GET['id'];
$delQuery = "DELETE FROM lostdogowner WHERE id=$id";
if(mysqli_query($conn, $delQuery)){
    echo "<script>alert('successfully deleted');</script>";
}
else{
    echo "<script>alert('Unable to delete');</script>";
}
header("location: ../admin/uploadlostdogDash.php");?>