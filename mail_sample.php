<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHPMailer - SMTP test</title>
</head>
<body>
<?php

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'library/class.phpmailer.php';
require 'config/mail_config.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->IsSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug  = 2;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host       = $smtp_hostname;
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port       = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth   = true;
//Username to use for SMTP authentication
$mail->Username   = $smtp_username;
//Password to use for SMTP authentication
$mail->Password   = $smtp_password;
//Set who the message is to be sent from
$mail->SetFrom($smtp_frommail, $smtp_fromname);
//Set who the message is to be sent to
$mail->AddAddress('replace_this@mail.com', 'Saravanan Jayabalan');
//Set the subject line
$mail->Subject = 'PHPMailer SMTP test';
//Read an HTML message body from an external file, convert referenced images to embedded, convert HTML into a basic plain-text alternative body
$mail->MsgHTML("<b>Sample <i>HTML</i> Text</b>");
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->AddAttachment('images/phpmailer_mini.gif');

//Send the message, check for errors
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
?>
</body>
</html>