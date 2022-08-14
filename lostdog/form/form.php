<?php
 
$conn = mysqli_connect("localhost","root","","dog") or die("connection_failed");
 
 //  include_once("\config.php");

if(isset($_POST['submit'])){
    $dogimage1=$_FILES['dog_image1']['name'];
      $dog_image1_temp=$_FILES['dog_image1']['tmp_name'];
    
    
    
    
    move_uploaded_file($dog_image1_temp,"../../dogphotos/$dogimage1");
    $dogimage2=$_FILES['dog_image2']['name'];
      $dog_image2_temp=$_FILES['dog_image2']['tmp_name'];
    
    
    
    
    move_uploaded_file($dog_image2_temp,"../../dogphotos/$dogimage2");
    $dogimage3=$_FILES['dog_image3']['name'];
    $dog_image3_temp=$_FILES['dog_image3']['tmp_name'];
  
  
  
  
  move_uploaded_file($dog_image3_temp,"../../dogphotos/$dogimage3");
    $dog_name=$_POST['dog_name'];
    $dog_breed=$_POST['dog_breed'];
    $dog_age=$_POST['dog_age'];
    $dog_gender=$_POST['dog_gender'];
    $describ=$_POST['describ'];
    $location=$_POST['location'];
    $reward=$_POST['reward'];
    $owner_name=$_POST['owner_name'];
    $owner_email=$_POST['owner_email'];
    $owner_number=$_POST['owner_number'];

$sqlQuery="INSERT INTO `lostdogowner`( `id`, `dog_image1`, `dog_image2`, `dog_image3`, `dog_name`, `dog_breed`, `dog_age`, `dog_gender`, `describ`, `location`, `reward`, `owner_name`, `owner_email`, `owner_number`,`status`,`remarks`) VALUES ('','$dogimage1','$dogimage2','$dogimage3','$dog_name','$dog_breed','$dog_age','$dog_gender','$describ','$location','$reward','$owner_name','$owner_email','$owner_number','REQUEST','AVAILABLE')";

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
  display: flex;justify-content: center;align-items: center;padding: 10px;background: url(imgs/bg.jpg);
}
#maintable{width:1000px;height:auto;background:#fff;margin-left:160px;box-shadow:5px 5px 5px #400040;border:2px solid #400040;}

#maintable h1{text-align:center;color:#fff;background:#F26419;border-radius:4px;border:2px solid #fff;}
#maintable table{margin-left:200px;}
#maintable table tr td{font-size:25px;padding:5px;font-weight:bold;}
#maintable table tr td input{font-size:20px;padding:5px;width:300px;height:40px;border-radius:4px;border:2px solid #F26419;margin-left:50px;}
#maintable table tr td textarea{font-size:20px;padding:5px;width:300px;height:90px;border-radius:4px;border:2px solid #F26419;margin-left:50px;}

</style>
</head>
<body>
<form method="post" enctype="multipart/form-data">
<div id="maintable">
  <h1>Upload</h1>
  <table>
  <tr>
  <td>Enter Owner Full Name :</td>
  <td><input type="text" name="owner_name" placeholder="Enter your full name" required></td>
  </tr>
  <tr>
  <td>Enter Owner Email :</td>
  <td><input type="email" name="owner_email" placeholder="Enter your email" required></td>
  </tr>
  <tr>
  <td>Enter Owner Phone Number :</td>
  <td><input type="text" name="owner_number" placeholder="Enter your number" required></td>
  </tr>
  <tr>
  <td>Enter Location :</td>
  <td><input type="text" name="location" placeholder="Enter location" required></td>
  </tr>
  <tr>
  <td>Enter Dog Name  :</td>
  <td><input type="text" name="dog_name" placeholder="Enter dog name" ></td>
  </tr>
  <td>Enter Dog Breed  :</td>
  <td><input type="text" name="dog_breed" placeholder="Enter breed of dog"></td>
  </tr>
  <tr>
  <td>Enter Dog Age  :</td>
  <td><input type="number" name="dog_age" placeholder="Enter guessing age"></td>
  </tr>
  <tr>
  <td>Enter Dog Gender  :</td>
  <td><input type="text" name="dog_gender" placeholder="Enter gender of dog" required></td>
  </tr>
  <tr>
  <td>Enter Reward  :</td>
  <td><input type="text" name="reward" placeholder="Enter reward for dogfinder" required></td>
  </tr>
  <tr>
  <td>Other Information  :</td>
  <td><textarea rows = "5" cols = "40" name = "describ" placeholder=" Other information like.." > </textarea>
  </td>
  </tr>
  <tr>
  <td>Enter Dog image One  :</td>
  <td><input type="file" name="dog_image1" required></td>
  </tr>
  <tr>
  <td>Enter Dog image Two  :</td>
  <td><input type="file" name="dog_image2" required></td>
  </tr>
  <tr>
  <td>Enter Dog image Three  :</td>
  <td><input type="file" name="dog_image3" required></td>
  </tr>
  </table>
    <input type="submit" name="submit" value="Add Details" style="margin-top:20px;margin-bottom:20px;font-size:20px;margin-left:500px;text-align:center;padding:5px;border-radius:none;background:#F26419;color:#fff;">
</div>

</form>
</body>
</html>
