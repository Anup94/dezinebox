<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/classes/validate.class.php";
$validateClass=new validateClass();
$task="";
$input=json_encode(@$_POST);
$err_resp=array("status"=>"0","msg"=>"Invalid request");
// print_r($input);
try {
	$input=json_decode($input);
} catch (exception $e) {
	json_exit($err_resp);
}
if(!empty(@$_GET['task'])) {
	$task=$_GET['task'];
	// echo $task;
}
if($task=="login") {
	$resp=$validateClass->login($input);
	if(!empty($resp->status)) {
		$_SESSION["adminSession"]=$resp->user;
	}
	// unset($resp["user"]);
	$validateClass->send_as_json($resp,true);
} else if($task=="add_coupon") {
	$resp=$validateClass->add_coupon($input);
	$validateClass->send_as_json($resp,true);
}
 


 $farray=$_POST["demo"];

 $idarray=$_POST["idv"];


 $countd=count($farray);


$query='';
 for($i=0;$i<$countd;$i++)
 {


 	$val='';
 	$val=$farray[$i];


 	$id='';
 	$id=$idarray[$i];

 	$query .="UPDATE `box_types` SET  `baseFare`='$val' WHERE `boxTypeId`='$id' ;";
 }



$con=mysqli_connect("localhost","root","root","dezine_box");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


  if (mysqli_multi_query($con,$query))
{

header('Location:box.php');

}


else

{

	echo "error";
}

mysqli_close($con);
 
?>