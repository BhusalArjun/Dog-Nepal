<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Adoption</title>
    <link rel="stylesheet" href="loststyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <section id="landing__area">
   <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">Dogs Nepal</label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
      </ul>
    </nav>
            <div class="landing__content ">
                <center>
                <div class="landing__info ">
                    <h1>
                        Helping animals,
                        Saving lives.
                    </h1>
                    <p>Want To Give For Adoption</p>
                    
                    <button class="upload_button"><a href="form\form.php">Upload</a></button>

                </div>
                </center>
                <div class="image__pet"></div>
            </div>
        </section>
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
                        $selectQuery = "SELECT * FROM lostdog";

                        $result = mysqli_query($conn, $selectQuery);  //

                        if(mysqli_num_rows($result)){
                            $i = 1;
                            while($row = mysqli_fetch_assoc($result)){
                        
                  ?>
    <tbody>
    <tr>
        <td><?php echo $i;?></td>
        <!-- <td><?php echo $row['id'];?></td> -->
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
            <button><a href="mailto:">Got Dog</a></button>
           
        </td>
    </tr>
        <?php
        $i++;
        }
    }
        ?>
    </tbody>
    </table>
        <!-- <footer>
                <p>2022 &copyDogsNepal</p>
        </footer> -->
  </body>
</html>