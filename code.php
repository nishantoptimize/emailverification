<?php
include ('conn.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'D:\xamp\htdocs\emailVerification\vendor\autoload.php'; 




function sendemail_verify($name,$email,$verify_token) {

         $mail = new PHPMailer(true);
         $mail->isSMTP();
         $mail->Host       = 'smtp.gmail.com';
         $mail->SMTPAuth   = true;
         $mail->Username   = 'nishant.optimize@gmail.com'; // Your Gmail email address
         $mail->Password   = '@Nishant123'; // Your Gmail password or an app-specific password if 2-factor authentication is enabled
         $mail->SMTPSecure = 'ssl'; // Enable SSL encryption
         $mail->Port       = 465;                                 //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
         $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                                            
         $mail->setFrom('nishant.netzoptimize@gmail.com', $name);
         $mail->addAddress($email);    

         $mail->isHTML(true);                                  
         $mail->Subject = 'Here is the subject';

         $email_template = "
         <h2>You have register with netzoptimize</h2>
         <h5>Verify your email</h5>
         <br><br>
         <a href='http://localhost/emailVerification/verify-email.php?token=$verify_token'>Click me</a>
         ";

         $mail->Body = $email_template;
         $mail->send();
         //echo "Message has been sent";


}
if (isset($_POST['register_btn'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $verify_token = md5(rand());
    sendemail_verify("$name","$email","$verify_token");
    echo "sent or not";
   //   $check_email_query = "SELECT email FROM users Where email = '$email' LIMIT 1 ";
   //   $check_email_query_run = mysqli_query($conn,$check_email_query);

   //   if (mysqli_num_rows($check_email_query_run) > 0) {
   //      $_SESSION['status'] = "Email id already exists";
   //      header('location:registration.php');
   //   }
   //   else{
   //      $query = "INSERT INTO users (name,phone,email,password,verify_token) Value ('$name','$phone','$email','$password','$verify_token')";
   //      $query_run = mysqli_query($conn,$query);
   //   }
   //   if ($query_run){
   //      sendemail_verify("$name","$email","$verify_token");
   //      $_SESSION['status'] = "Registration Done! Please verify your email";
   //      header('location:registration.php');
   //   }
}

 ?>