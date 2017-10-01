<?php

$db = mysqli_connect('localhost','root', '','registration');

if(isset($_POST['register'])) {

	$email = mysql_real_escape_string($_POST['email_1']);
	$password_1 = mysql_real_escape_string($_POST['password_1']);
	
	if ($password_1 != $password_2){
		array_push($error , "The two password do not match");
	}

	$password = md5($password_1);

	$sql = "INSERT INTO users (username , email , password) VALUES ('$username', '$email', '$password')"; 
	mysqli_query($db,$sql);

	header('location: index.php');
}

?>
