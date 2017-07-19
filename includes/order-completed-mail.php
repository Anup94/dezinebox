<?php
require_once($_SERVER['DOCUMENT_ROOT']."/classes/db.class.php");
$dbConnect=new dbConnect();
$categoryArr=array();
$constTypeArr=array();
$boxTypeArr=array();
$query="SELECT * FROM design_categories";
$result=$dbConnect->conn->query($query);
if(mysqli_num_rows($result)>0) {
  foreach ($result as $row) {
    $categoryArr[$row['categoryId']]=$row;
  }
}
$query="SELECT * FROM box_types";
$result=$dbConnect->conn->query($query);
if(mysqli_num_rows($result)>0) {
  foreach ($result as $row) {
    $boxTypeArr[$row['boxTypeId']]=$row;
  }
}
$query="SELECT * FROM construction_types";
$result=$dbConnect->conn->query($query);
if(mysqli_num_rows($result)>0) {
  foreach ($result as $row) {
    $constTypeArr[$row['constTypeId']]=$row;
  }
}
function mailOrder($result) {
	$to = 'orders@dezinebox.io';
	$subject = 'New Order -  Architecture - '.$result->enqId;
	$headers = "From: " . strip_tags('orders@dezinebox.io') . "\r\n";
	$headers .= "Reply-To: ". strip_tags('saravthedev@gmail.com') . "\r\n";
	$headers .= "CC: saravanan41191@gmail.com\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$message = '<html><body>';
	$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
	$message.="<tr style='background: #eee;'><td><strong>Category</strong></td><td>Architecture</td></tr>";
	$message.="<tr style='background: #eee;'><td><strong>Construction Type</strong></td><td>".(empty($constTypeArr[$result->constTypeId])?'':$constTypeArr[$result->constTypeId]['constType'])."</td></tr>";
	$message.="<tr style='background: #eee;'><td><strong>Box Type</strong></td><td>".(empty($boxTypeArr[$result->boxTypeId])?'':$boxTypeArr[$result->boxTypeId]['boxType'])."</td></tr>";
	$formEle=array(
		"categoryOption"=>"Category Option",
		"selectedArea"=>"AREA (SQ-FEET)",
		"projectType"=>"Project Name",
		"plotArea"=>" Plot Area",
		"siteLocation"=>"Site Location",
		"fsiAvailable"=>"FSI Available",
		"zone"=>"Zone",
		"requirement"=>"Requirement",
		"details"=>"Details"
		);
	foreach ($formEle as $key => $value) {
		$message.="<tr style='background: #eee;'><td><strong>".$value."</strong></td><td>".$result->$key."</td></tr>";
	}
	$message .= "</table>";
	$message .= "</body></html>";
	$result=mail($to, $subject, $message, $headers);
	if(!$result) {
		return 'Message could not be sent.';
		return 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		return '1';
	}
}