<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;

echo 'hola';

<<<<<<< HEAD
//$mail->SMTPDebug = 3;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->setFrom( $_POST['email'], $_POST['name']);
$mail->addAddress('hernanman_1@hotmail.com');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

=======

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'manuelkir90@gmail.com';                 // SMTP username ACA VA NUESTRO MAIL
$mail->Password = 'blindado';                           // SMTP password CONTRA DEL MAIL
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom( $_POST['email'], $_POST['name']);
$mail->addAddress('hernanman_1@hotmail.com');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Mail de la web!' ;
$mail->Body    = $_POST['message'];
$mail->AltBody = $_POST['message'];


 if(!$mail->send()) {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
   header('Location: index.php');
   exit;
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  header('Location: index.php');
  exit;
}
