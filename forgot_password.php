<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


$msg="";
include ('ConnexionBD.php');

if (isset($_POST['submit'])){
        $email=$_POST['email'];
        if ($email=='')
                $msg="Please fill up your inputs!";
        else{
                $mail = new PHPMailer();

try {

                        //Server settings
                        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                        $mail->isSMTP();                                            //Send using SMTP
                        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                        $mail->Username   = 'rayenfadhel7@gmail.com';                     //SMTP username
                        $mail->Password   = 'rayenfadhel7gmail';                               //SMTP password
                        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
                        //Recipients
                        $mail->setFrom('rayenfadhel7@gmail.com', 'EduCasa');
                        $mail->addAddress($email);     //Add a recipient
                        //Content
                        $mail->isHTML(true);                                  //Set email format to HTML
                        $mail->Subject = 'reset password';
                        $mail->Body    = "
                        Please click on the link below:<br><br>
                        <a href='http://localhost:8000/newpw.php?email=$email'>Click Here</a>
                    ";     

                    $mail->send();
                    $msg = "You have been registered! Please verify your email!";
                } catch (Exception $e) {
                        $msg = "Something wrong happened! Please try again!: {$mail->ErrorInfo}";
                
                }
                
                }
        }


?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site web</title>
  </head>
  <body>
    <h2>Forgot password</h2>
    <form method="post">
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" >
        <button type="submit" name="submit">Send password</button>
      </div>
    </form>
  </body>
</html>
