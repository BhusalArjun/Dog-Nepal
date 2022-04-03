<?php
 
$conn = mysqli_connect("localhost","root","","dloogin") or die("connection_failed");
 
 //  include_once("\config.php");

if(isset($_POST['submit'])){
    $dog_image=$_POST['dog_image'];
    $dog_name=$_POST['dog_name'];
    $dog_breed=$_POST['dog_breed'];
    $dog_age=$_POST['dog_age'];
    $dog_gender=$_POST['dog_gender'];
    $dog_color=$_POST['dog_color'];
    $dog_size=$_POST['dog_size'];
    $describ=$_POST['describ'];
    $location=$_POST['location'];
    $owner_name=$_POST['owner_name'];
    $owner_email=$_POST['owner_email'];
    $owner_number=$_POST['owner_number'];

 $sqlQuery="INSERT INTO `lostdog` (`dog_image`, `dog_name`, `dog_breed`, `dog_age`, `dog_gender`, `dog_color`, `dog_size`, `describ`, `location`, `owner_name`, `owner_email`, `owner-number`)values('$dog_image','$dog_name','$dog_breed','$dog_age','$dog_gender','$dog_color','$dog_size','$describ','$location','$owner_name','$owner_email','$owner_number')";

if(mysqli_query($conn,$sqlQuery)){

    echo '<script>alert("Inserted")</script>';
}
    else{
        echo" Error:" . $sqlQuery."<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html >
  <head>
    <link rel="stylesheet" href="style.css">
   </head>
<body>



  <div class="container">
    <div class="title">Upload</div>
    <div class="content">
      <form action="" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details"> Owner Full Name</span>
            <input type="text" name="owner_name" placeholder="Enter your full name" required>
          </div>
           <div class="input-box">
            <span class="details">Owner Email</span>
            <input type="email" name="owner_email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details"> Owner Phone Number</span>
            <input type="text" name="owner_number"  placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Location</span>
            <input type="text" name="location"  placeholder="Enter Location" required>
          </div>
         <div class="input-box">
            <span class="details">Dog Name</span>
            <input type="text" name="dog_name" placeholder="Enter dog name" required>
          </div>
          <div class="input-box">
            <span class="details">Dog Breed</span>
            <input type="text" name="dog_breed" placeholder="Enter breed of dog" required>
          </div>
           <div class="input-box">
            <span class="details">Dog Age</span>
            <input type="number" name="dog_age" placeholder="Enter age of dog" required>
          </div>
           <div class="input-box">
            <span class="details">Dog Gender</span>
            <input type="text" name="dog_gender" placeholder="Enter gender of dog" required>
          </div>
           <div class="input-box">
            <span class="details">Dog Color</span>
            <input type="text" name="dog_color" placeholder="Enter color of dog" required>
          </div>
          <div class="input-box">
            <span class="details">Dog Size</span>
            <input type="text" name="dog_size" placeholder="Enter size of dog" required>
          </div>
          <div class="input-box">
            <span class="details">Other Information</span>
            <!-- <input type="text" style="height: 100%;width: 100%;" placeholder="Enter other Informationabout dog" required> -->
             <textarea rows = "5" cols = "66" name = "describ">
            Enter description here...
         </textarea>
          </div>
          <div class="input-box">
            <span class="details">Dog Image</span>
            <input type="file" name="dog_image" style="height:76%;width: 100%;"placeholder="Provide image of dog" >
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
