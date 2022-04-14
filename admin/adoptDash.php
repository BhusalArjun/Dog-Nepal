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
                <li><a class="active" href="admin/adoptDash.php">Donate Dashboard</a></li>
                <li><a href="#">Adopt</a></li>
                <li><a href="#">Lost Dog</a></li>
                <li><a href="../adminentry/login.php">Sign out</a></li>
            </ul>
        </nav>
    <div class="title">
        <h1>Dog Donor Information</h1>
    </div>

    <div class="main">
    <table class="content-table">
        <thead>
        <tr>
                    <th>S.N</th>
                    <th>Dog Image1</th>
                    <th>Dog Image2</th>
                    <th>Dog Image3</th>
                    <th>Dog Image4</th>
                    <th>Dog Name</th>
                    <th>Dog Breed</th>
                    <th>Dog Age</th>
                    <th>Dog Gender</th>
                    <th>Dog Color</th>
                    <th>Dog Size</th>
                    <th>Location</th>
                    <th>Owner Name</th>
                    <th>Owner Email</th>
                    <th>Owner Number</th>
                    <th>Desciption</th>
                    <th>Action</th>
                </tr>
        </thead>
    </div>

    <?php
        include "../config.php";
        $selectQuery = "SELECT * FROM adopt";

        $result = mysqli_query($conn, $selectQuery);  //

       

        if(mysqli_num_rows($result)){
            $i = 1;
            while($row = mysqli_fetch_assoc($result)){
        
   ?>
    <tbody>
    <tr>
        <!-- <td><?php echo $i;?></td> -->
       <td><?php echo $row['id'];?></td>
        <td><img style="width:50%;height:auto;" src="../dogphotos/<?php echo $row['dog_image1']?>"></td>
        <td><img style="width:50%;height:auto;" src="../dogphotos/<?php echo $row['dog_image2']?>"></td>
        <td><img style="width:50%;height:auto;" src="../dogphotos/<?php echo $row['dog_image3']?>"></td>
        <td><img style="width:50%;height:auto;" src="../dogphotos/<?php echo $row ['dog_image4']?>"></td>
        <td><?php echo $row ['dog_name']?></td>
        <td><?php echo $row ['dog_breed']?></td>
        <td><?php echo $row ['dog_age']?></td>
        <td><?php echo $row ['dog_gender']?></td>
        <td><?php echo $row ['dog_color']?></td>
        <td><?php echo $row ['dog_size']?></td>
        <td><?php echo $row ['location']?></td>
        <td><?php echo $row ['owner_name']?></td>
        <td><?php echo $row ['owner_email']?></td>
        <td><?php echo $row ['owner-number']?></td>
        <td><?php echo $row ['describ']?></td>
        <td>
            
            
            <button ><a href="mailto:" style="background-color:#F26419; color:white;">Approve</a></button>
            <br><br> <hr> <br>
            <button><a style="background-color:#F26419; color:white;" href="../delete.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this')">Delete</a></button><br><br> <hr> <br>
            <button style="background-color:#F26419; color:white;" > Contact</button>

        </td>
    </tr>
        <?php
        $i++;
        }
    }
        ?>
    </tbody>
    </table>
  
    <!-- <script>
function del(id)
	{
		if(confirm("You want to delete ?"))
		{
		window.location.href='delete.php?id='id;	
		}
	}
</script>
    -->
</body>
</html>