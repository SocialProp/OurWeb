<?php
require 'vendor/phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
//$mail->SMTPDebug = 3;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->setFrom( $_POST['your-email'], $_POST['your-name']);
$mail->addAddress('Palomatati@hotmail.com');               // Name is optional

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Mail de la web!' ;
$mail->Body    = $_POST['your-message'];
$mail->AltBody = $_POST['your-message'];

 if(!$mail->send()) {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
   header('Location: index.html');
   exit;
}
