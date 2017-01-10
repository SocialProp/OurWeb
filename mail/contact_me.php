<?php
require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
<<<<<<< HEAD
//$mail->SMTPDebug = 3;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->setFrom( $_POST['your-email'], $_POST['your-name']);
$mail->addAddress('hernanman_1@hotmail.com');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

=======

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@barbudastudio.com';                 // SMTP username ACA VA NUESTRO MAIL
$mail->Password = 'nomelaacuerdo';                           // SMTP password CONTRA DEL MAIL
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom( $_POST['your-email'], $_POST['your-name']);
$mail->addAddress('hernanman_1@hotmail.com');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Mail de la web!' ;
$mail->Body    = $_POST['your-message'];
$mail->AltBody = $_POST['your-message'];


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
