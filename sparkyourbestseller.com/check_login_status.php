<?php
@session_start();
include_once("db_conc.php");
// Files that inculde this file at the very top would NOT require 
// connection to database or session_start(), be careful.
// Initialize some vars
$user_ok = false;
$log_id = "";
$log_username = "";
$log_password = "";
$log_email="";
// User Verify function
function evalLoggedUser($conx,$id,$u,$p, $e){
	$sql = "SELECT * FROM users WHERE  email='$e' AND password='$p' LIMIT 1";
    $query = mysqli_query($conx, $sql);
    $numrows = mysqli_num_rows($query);
	if($numrows > 0){
		return true;
	}
}
if(isset($_SESSION["userid"]) && isset($_SESSION["username"]) && isset($_SESSION["password"])) {
	$log_id = preg_replace('#[^0-9]#', '', $_SESSION['userid']);
    $log_username = $_SESSION['username'];
//	$log_username = preg_replace('#[^a-z0-9]#i', '', $_SESSION['username']);
	$log_password = preg_replace('#[^a-z0-9]#i', '', $_SESSION['password']);
    $log_email =$_SESSION['email'];
	// Verify the user
	$user_ok = evalLoggedUser($db_conx,$log_id,$log_username,$log_password, $log_email);
} else if(isset($_COOKIE["id"]) && isset($_COOKIE["user"]) && isset($_COOKIE["pass"]) && isset($_COOKIE["email"])){
	$_SESSION['userid'] = preg_replace('#[^0-9]#', '', $_COOKIE['id']);
//    $_SESSION['username'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['user']);
     $_SESSION['username'] = $_COOKIE['user'];
    $_SESSION['email']=$_COOKIE["email"];

    $_SESSION['password'] = preg_replace('#[^a-z0-9]#i', '', $_COOKIE['pass']);
	$log_id = $_SESSION['userid'];
	$log_username = $_SESSION['username'];
	$log_password = $_SESSION['password'];
    $log_email =$_SESSION['email'];        
        
	// Verify the user
	$user_ok = evalLoggedUser($db_conx,$log_id,$log_username,$log_password, $log_email);
	if($user_ok == true){
		// Update their lastlogin datetime field
		$sql = "UPDATE users SET lastlogin=now() WHERE id='$log_id' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
	}
}
?>