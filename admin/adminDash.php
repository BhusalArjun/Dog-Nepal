<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="adminDashboard.css">
    </head>
    <body>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Dogs Nepal</label>
            <ul>
                <li><a class="active" href="../admin/adminDash.php">Home</a></li>
                <li><a href="../admin/donorDash.php">Donate </a></li>
                <li><a href="../admin/adoptDash.php">Adopt </a></li>
                <li><a href="../gmailContact/index.php">Gmail Conatct</a></li>
                <li><a href="../admin/uploadlostdogDash.php">Lost Dog</a></li>
                <!-- <li><a href="../admin/findlostdogdash.php">Dog Finder</a></li> -->
                <li><a href="../adminentry/login.php">Sign out</a></li>
            </ul>
    </nav>
        <div class="content">
        
            <div class="header">
                Hello,
            </div>
            <p>
                Welcome to Admin Dashboard
            </p>
        </div>
        <?php include '../footer/footer.php'?>
    </body>
</html>