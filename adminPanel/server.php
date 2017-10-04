<?php

$db = mysqli_connect('localhost','root', '','registration');

if(isset($_POST['register'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password_1 = mysql_real_escape_string($_POST['password_1']);
	$password_2 = mysql_real_escape_string($_POST['password_2']);

	if ($password_1 != $password_2){
		array_push($error , "The two password do not match");
	}

	$password = md5($password_1);

	$sql = "INSERT INTO users (username , email , password) VALUES ('$username', '$email', '$password')"; 
	mysqli_query($db,$sql);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "you are now logged in";
	header('location: register.php');
}


if(isset ($_POST['login'])) {
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	$password = md5($password);
	$query = "SELECT * FROM users WHERE email='$email' AND password='$password' ";
	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result)==1) {
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are logged in";
		header('location: register.php');
	}
	else{
		echo "dont act smart bro";
	}
}


?>