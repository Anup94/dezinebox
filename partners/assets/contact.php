<?php
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                           echo ' issmtp'        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';            echo ' true '        // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                    echo ' true '        // Enable SMTP authentication
$mail->Username = 'srinath.chinchole@qleverlabs.com';   echo ' my mail id'      // SMTP username
$mail->Password = '9867613282'; echo ' password ' // SMTP password 
$mail->SMTPSecure = 'tls';   echo ' tls '                      // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;            echo ' port number '                     // TCP port to connect to

$mail->setFrom('srinath.chinchole@qleverlabs.com', 'shrinath'); echo ' setfrom line '
$mail->addReplyTo('srinath.chinchole@qleverlabs.com', 'Rishab Sahay');	echo ' addreply to '
$mail->addAddress('srinath.chinchole@qleverlabs.com');   echo 'addaddress' // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true); echo ' ishtml ka true ' // Set email format to HTML

$Fname = $_POST['Fname']; echo ' first name input '

$email_address = $_POST['email']; echo 'email input '
$number = $_POST['number']; echo ' number input '
$message = $_POST['message']; echo ' message input '
$mail->Subject = 'Enquiry from Qleverlabs Website';  echo ' Subject input'
$mail->Body    = 	" Here are the details:\n FName: $Fname <br><br>  \n Email: $email_address <br><br> \n number: $number  \n Message: \n $message"; 
				echo ' all inputs in body'

if(!$mail->send()) echo ' if line ' {
    echo 'Message could not be sent.'; echo ' message not sent'
    echo 'Mailer Error: ' . $mail->ErrorInfo; echo ' Mailer error '
} else echo ' ifelse statement '
 {
    echo 'Message has been sent'; echo ' last line '
	// visit our site www.studyofcs.com for more learning
}
?>
