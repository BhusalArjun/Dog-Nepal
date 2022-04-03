<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Adoption</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <style>
      .content{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: var(--red); 
    z-index: -1;
    text-align: center;
  }
  .content .header{
    font-size: 45px;
    font-weight: 600;
  }
  .content p{
    font-size: 30px;
    font-weight: 500;
  }
  .title{
      padding-top: 100px;
      text-align: center;
  }
  .main{
      display: flex;
      justify-content: center;
      /* margin-left: 10px;
      font-size: 20px;
      padding: 100px 10px; */
  }
  .content-table{
      border-collapse: collapse;
      margin: 25px 0;
      font-size: 0.9em;
      min-width: 400px;
      border-radius: 5px 5px 0 0;
      overflow: hidden;
      box-shadow: 0 0 20px rgb(0,0,0,0.15);
  }
  
  .content-table thead tr{
      background-color: var(--red);
      color: #ffffff;
      text-align: left;
      font-weight: bold;
  }
  
  .content-table th,
  .content-table td{
      padding: 12px 15px;
      word-wrap: break-word;
  }
  
  .content-table tbody tr{
      border-bottom: 1px solid #dddddd;
  }
  .content-table tbody tr:last-of-type{
      border-bottom: 2px solid var(--red); 
  }
  footer{
      background: url("../images/bg.jpg");
      text-align: center;
      display: flex;
      justify-content: center;
      flex-direction: column;
      height:120%;
      width: 100%;
      font-size: 20px;
  }
  footer p{
    color: var(--red);
  }
      </style>
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
        <li><a  href="../index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
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
                    <th>Dog Image</th>
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
        <td><?php echo $i;?></td>
        <!-- <td><?php echo $row ['Id'];?></td> -->
        <td><?php echo $row ['dog_image']?></td>
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
            <button><a href="mailto:">Get</a></button>
           
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