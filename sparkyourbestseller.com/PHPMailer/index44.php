<?php
require_once("PHPMailerAutoload.php");
$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug=1;
$mail->SMTPAuth=true;
$mail->SMTPSecure = 'ssl';

$mail->Host ="smtp.gmail.com";
$mail->Port =465;
$mail->IsHTML(true);
$mail->Username ="hima.mone11@gmail.com";                 // SMTP username
$mail->Password ="SNEHAsuhas11";                           // SMTP password
$mail->SetFrom("hima.mone11@gmail.com");
$mail->Subject="Together Account Activation";
$mail->Body='<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Together Message</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="index.php"><img src="images/to.jpg" width="36" height="30" alt="SocialSite" style="border:none; float:left;"></a>Together Account Activation</div><div style="padding:24px; font-size:17px;">Hello '.$u.',<br /><br />Click the link below to activate your account when ready:<br /><br /><a href="activation.php?id='.$uid.'&u='.$u.'&e='.$e.'&p='.$p_hash.'">Click here to activate your account now</a><br /><br />Login after successful activation using your:<br />* E-mail Address: <b>'.$e.'</b></div></body></html>';

$mail->AddAddress("hima.mone11@gmail.com");
if(!$mail->send())
{
	echo "mailer error".$mail->ErrorInfo;
}                 
else
{
	echo "msg has been sent";
}
?>