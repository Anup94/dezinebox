<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once($_SERVER['DOCUMENT_ROOT']."/classes/db.class.php");
$dbConnect=new dbConnect();
if(!empty($_SESSION['adminSession'])) {
	$adminSession=$_SESSION['adminSession'];
	if(!empty($adminSession->userId)) {
		$query="SELECT u.userId,u.name,u.mobile,u.username,u.email FROM #__users u 
		LEFT JOIN users_type_map um 
		ON um.userId=u.userId WHERE u.userId='".$adminSession->userId."'";
		$dbConnect->setQuery($query);
		$result=$dbConnect->conn->query($query);
		if(mysqli_num_rows($result)==0) {
			unset($_SESSION['adminSession']);
			header("Location:login.php");
		} else {
			$_SESSION["adminSession"]=$result->fetch_object();
		}
	} else {
		unset($_SESSION['adminSession']);
		header("Location:login.php");
	}
} else {
	header("Location:login.php");
}
?>