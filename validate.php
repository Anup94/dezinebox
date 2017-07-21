<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT']."/classes/validate.class.php";
$validateClass=new validateClass();
$task="";
$multiPartTask=array("submit_design_partner","product_partner_submit","submit_architecture_enquiry");
if(empty($_FILES) && in_array(@$_POST['task'], $multiPartTask)) {
	$input=@file_get_contents('php://input');
} else {
	$input=json_encode($_POST);
}
$err_resp=array("status"=>"0","msg"=>"Invalid request");
// print_r($input);
$input=json_decode($input);
if(!empty(@$_GET['task'])) {
	$task=$_GET['task'];
	// echo $task;
}

if($task == "validate-promo"){
	$resp = $validateClass->validatePromoCode($input);
	if($resp->msg == "Yes"){
		$msg = $resp->msg;
		$discount = $resp->discount;
		echo "$resp->discount";
	}else 
		echo "$resp->msg";
	
	
	
}

if($task == "in_pass"){
$resp = $validateClass->newPassword($input);
return $resp;
}
if($task == "random"){
	$resp=$validateClass->updateBaseFare($input);
	if($resp == "ok"){
		echo ("finished");
	}
}

if($task == "forgot"){
	$resp = $validateClass->forgotPassword($input);
	$validateClass->send_as_json($resp,true);
}

if($task=="login") {
	$resp=$validateClass->login($input);
	if(!empty($resp->status)) {
		$_SESSION["userSession"]=$resp->user;
	}
	// unset($resp["user"]);
	$validateClass->send_as_json($resp,true);
}else if($task == "google-login"){
	$resp = $validateClass->google_login();
	if(!empty($resp->status)){
		$_SESSION["userSession"] = $resp->user;
	}
	//$validateClass->send_as_json($resp,true);
	if($resp)
	header("Location:/get-your-box.php");
}else if($task == "facebook-login"){
	$resp = $validateClass->facebook_login();
	if(!empty($resp->status)){
		$_SESSION["userSession"] = $resp->user;
	}
	//$validateClass->send_as_json($resp,true);
	if($resp)
	header("Location:/get-your-box.php");
	}
else if($task == "twitter-login"){
	$resp = $validateClass->twitter_login();
	if(!empty($resp->status)){
		$_SESSION["userSession"] = $resp->user;
	}
	//$validateClass->send_as_json($resp,true);
	if($resp)
	header("Location:/get-your-box.php");
}
else if($task=="submit_signup") {
	$resp=$validateClass->submit_signup($input);
	if(isset($resp->user)) {
		$_SESSION["userSession"]=$resp->user;
		unset($resp->user);
	}
	$validateClass->send_as_json($resp);
}
else if($task=="submit_design_partner") {
	$resp=$validateClass->submit_design_partner($input);
	$validateClass->send_as_json($resp);
}
else if($task=="product_partner_submit") {
	$resp=$validateClass->product_partner_submit($input);
	$validateClass->send_as_json($resp);	
} else if($task=="submit_architecture_enquiry") {
	$enqId=$validateClass->submit_architecture_enquiry($input);
	header("Location:architecture-choose-box.php?id=".$enqId);
} else if($task=="submit_interior_enquiry") {
    
	$enqId=$validateClass->submit_interior_enquiry($input);
	header("Location:interior-choose-box.php?id=".$enqId);
} else if($task=="submit_arch_box") {
	$enqId=$validateClass->submit_arch_box($input);
	header("Location:order-completed.php?id=".$enqId);
} else if($task=="submit_interior_box") {
	$enqId=$validateClass->submit_interior_box($input);
	header("Location:interior-order-completed.php?id=".$enqId);
}

?>