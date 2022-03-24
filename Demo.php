







<form method="POST" action="" enctype="multipart/form-data">

<input type="file" name="choosefile" value="" />


<div>

<button type="submit" name="uploadfile">UPLOAD

</button>

</div>

</form>
<?php

if (isset($_POST['uploadfile'])) {

$filename = $_FILES["choosefile"]["name"];

$tempname = $_FILES["choosefile"]["tmp_name"];  

$folder = "images/".$filename;
}

  // connect with the database

// $db = mysqli_connect("localhost", "root", "", "Image_upload");

//     // query to insert the submitted data

//     $sql = "INSERT INTO image (filename) VALUES ('$filename')";

//  // function to execute above query

//     mysqli_query($db, $sql);       

//     // Add the image to the "image" folder"

//     if (move_uploaded_file($tempname, $folder)) {

//         $msg = "Image uploaded successfully";

//     }else{

//         $msg = "Failed to upload image";

// }

// }

// $result = mysqli_query($db, "SELECT * FROM image");

?> 
