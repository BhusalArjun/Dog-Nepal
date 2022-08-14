<?php
include("../config.php");
session_start();
$msg = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$email=$_POST['email'];
	$password= md5($_POST['password']);
	// $password = ($_POST['password']);

    $sql = "SELECT * FROM admin WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    $count = mysqli_num_rows($result);

    if($count == 1) {
        $email = $row['email'];
        $_SESSION['email'] = $email;

        header("location: ../admin/adminDash.php");
    }else {
		// echo '<script>alert("Your Login Name or Password is invalid")</script>';
		$msg = "Your Login Name or Password is invalid...";
    }
}
?>
<html>
	<head>
		<title> Dogs Nepal </title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<div class="homePage">
        <a href="../index.php">
            <button>Go to home page</button>
        </a>
    </div>
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
			<span style="color:white;"><?php echo $msg;?></span>
			
		</form>
		
	</div>
</html>



