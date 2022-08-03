<?php
$id = $_GET['id'];
session_start();
?>
 <?php
$conn = mysqli_connect("localhost","root","","dog") or die("connection_failed");
 
 //  include_once("\config.php");

if(isset($_POST['submit'])){
  $_SESSION['id']=$id;
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $contactnumber=$_POST['contactnumber'];
    $location=$_POST['location'];
    $message=$_POST['message'];
 $sqlQuery="INSERT INTO `findlostdog` ( `id`,`name`, `email`, `contactnumber`, `location`, `message`)values('$id','$name','$email','$contactnumber','$location','$message')";
if(mysqli_query($conn,$sqlQuery)){
    echo"<script>alert('Stored pet details')</script>";
}
    else{
        echo" Error:" . $sqlQuery."<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
*{
  margin: 0;  
  font-family: 'Poppins',sans-serif;
}
body{
  display: flex;justify-content: center;align-items: center;padding: 10px;background: url(images/bg.jpg);
}
#maintable{width:1000px;height:auto;background:#fff;margin-left:160px;box-shadow:5px 5px 5px #400040;border:2px solid #400040;margin-top:10%;}

#maintable h1{text-align:center;color:#fff;background:#F26419;border-radius:4px;border:2px solid #fff;}
#maintable table{margin-left:200px;}
#maintable table tr td{font-size:25px;padding:5px;font-weight:bold;}
#maintable table tr td input{font-size:20px;padding:5px;width:300px;height:40px;border-radius:4px;border:2px solid #F26419;margin-left:50px;}
#maintable table tr td textarea{font-size:20px;padding:5px;width:300px;height:90px;border-radius:4px;border:2px solid #F26419;margin-left:50px;}

</style>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="remarksfindlostdog.php?id=<?php echo $id; ?>">
<div id="maintable">
  <h1> Your Information</h1>
  <table>
  <tr>
  <td>Id :</td>
  <td><input type="text" name="id" value="<?php echo $id; ?>"  required></td>
  </tr>
  <tr>
  <td>Enter Your Full Name :</td>
  <td><input type="text" name="name" placeholder="Enter your full name" required></td>
  </tr>
  <tr>
  <td>Enter  Email :</td>
  <td><input type="email" name="email" placeholder="Enter your email" required></td>
  </tr>
  <tr>
  <td>Enter Phone Number :</td>
  <td><input type="text" name="contactnumber" placeholder="Enter your number" required></td>
  </tr>
  <tr>
  <td>Enter Location :</td>
  <td><input type="text" name="location" placeholder="Enter location" required></td>
  </tr>
 
  <tr>
  <td> Write the Message:</td>
  <td><textarea rows = "5" cols = "40" name = "message" >
          
      </textarea>
  </td>
  </tr>
  
  </table>
  <!-- <form action="#" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
    <input type="checkbox" required name="checkbox" value="check" id="agree" style="margin-left:13rem;"/> I have read and agree to the Terms and Conditions and Privacy Policy -->
    <button  type="submit" onclick="my_function()" href="remarksfindlostdog.php" name="submit" value="Add Details" style="margin-top:20px;margin-bottom:20px;font-size:20px;margin-left:500px;text-align:center;padding:5px;border-radius:none;background:#F26419;color:#fff;">Add Detail</button></a>
  <!-- </form> -->
</div>

</form>
<?php require 'footer\footer.php';?>

</body>

</html>
