<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="adoptDash.css">
    </head>
    <body>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Dogs Nepal</label>
            <ul>
                <li><a  href="../admin/adminDash.php">Home</a></li>
                <li><a  href="../admin/donorDash.php">Donate </a></li>
                <li><a class="active" href="../admin/adoptDash.php">Adopt </a></li>
                <li><a href="../gmailContact/index.php">Gmail Conatct</a></li>
                <li><a href="../admin/uploadlostdogDash.php">Lost Dog</a></li>
                <!-- <li><a href="../admin/findlostdogdash.php">Dog Finder</a></li> -->
                <li><a href="../adminentry/login.php">Sign out</a></li>
            </ul>
        </nav>
    <div class="title">
        <h1>Dog Adopter Information</h1>
    </div>

    <div class="main">
    <table class="content-table">
        <thead>
            <tr>
                <th>I.D</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Location</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
    </div>

    <?php
        include "../config.php";
        $selectQuery = "SELECT * FROM adopter";

        $result = mysqli_query($conn, $selectQuery);  

       

        if(mysqli_num_rows($result)){
            $i = 1;
            while($row = mysqli_fetch_assoc($result)){
        
   ?>
    <tbody>
    <tr>
        <!-- <td><?php echo $i;?></td> -->
       <td><?php echo $row['id'];?></td>
        <td><?php echo $row ['name']?></td>
        <td><?php echo $row ['email']?></td>
        <td><?php echo $row ['contactnumber']?></td>
        <td><?php echo $row ['location']?></td>
        <td><?php echo $row ['message']?></td>
        <td>
            
            
            <!-- <button ><a href="../approve.php" style="background-color:#F26419; color:white;">Approve</a></button>
             --><br> <hr> <br>
            <button><a style="background-color:#F26419; color:white;" href="../delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this')">Delete</a></button><br><br> <hr> <br>

        </td>
    </tr>
        <?php
        $i++;
        }
    }
        ?> 
    </tbody>
    </table>
    <?php require '../footer/footer.php';?>
</body>
</html>