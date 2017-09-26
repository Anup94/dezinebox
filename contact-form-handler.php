<?php
require 'PHPMailer/PHPMailerAutoload.php';

require_once $_SERVER['DOCUMENT_ROOT']."/classes/validate.class.php";
$validateClass=new validateClass();

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'srinath.chinchole@qleverlabs.com';          // SMTP username
$mail->Password = '9867613282'; // SMTP password
$mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                 // TCP port to connect to

$mail->setFrom('srinath.chinchole@qleverlabs.com', 'shrinath');
$mail->addReplyTo('contact@dezinebox.io', 'Rishab Sahay');
$mail->addAddress('contact@dezinebox.io');   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Enquiry from dEZINEbOX Website</h1>';
$bodyContent .= '<p>Finaly Now I can send mail <b>offline</b></p>';
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$number = $_POST['number'];
$message = $_POST['message']; 
$mail->Subject = 'Enquiry from Dezinebox Website';
$mail->Body    =     " Here are the details:\n Name: $name <br><br> \n Email: $email_address <br><br> \n Number: $number \n Message: \n $message";

if(!$mail->send()) {
   // echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
	$validateClass->send_as_json("0");
} else {
   
   $validateClass->send_as_json("1");
   //header('Location: home.php');

}
?>