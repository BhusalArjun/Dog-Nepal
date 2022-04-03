<?php 
include('../config.php');
$id=$_GET['id'];
$sql=mysqli_query($conn,"select * from adopt where id='$id' ");
$res=mysqli_fetch_assoc($sql);
if(mysqli_query($conn,"delete from adopt where id='$id' "))
{
header('location:adoptDash.php');	
}

?>