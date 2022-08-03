<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if(isset($_POST["send"])){
  $usermail = $_POST['email'];
  $mail = new PHPMailer(true);


  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'rhythemechristthelion@gmail.com'; // Your gmail
  $mail->Password = 'oufgpntmdjolfaal'; // Your gmail app password
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('rhythemechristthelion@gmail.com'); // Your gmail

  $mail->addAddress($usermail);

  $mail->isHTML(true);

  $mail->Subject = $_POST["subject"];
  $mail->Body = $_POST["message"];

  $mail->send();

  echo
  "
  <script>
  alert('Sent Successfully');
  document.location.href = 'index.php';
  </script>
  ";
}
?>