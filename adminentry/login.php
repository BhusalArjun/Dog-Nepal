<?php
include("../config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email=$_POST['email'];
	$password=$_POST['password'];

    $sql = "SELECT * FROM admin WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $email = $row['email'];
        $_SESSION['email'] = $email;

        header("location: ../admin/adminDash.php");
    }else {
        $error = "Your Login Name or Password is invalid";
        echo $error;
    }
}
?>
<html>
	<head>
		<title> Dogs Nepal </title>
		<link rel="stylesheet" href="style.css">
	

	</head>
	<body>
	<div class="loginBox">
		
		<img src="imgs/user.png" class="user">
		<h2>Log In Here</h2>
		<!-- <?php echo $error ?> -->
		<form method = "post">
			<p>Email</p>
			<input type="text" name = "email" placeholder="Enter Email" required>
			<p>Password</p>
			<input type="password" name = "password" placeholder="Enter Password" required>
			<input type="submit" name = "submit" value="sign In">
			
		</form>
	</div>
	</body>
</html>



