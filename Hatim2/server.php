<?php

$db = mysqli_connect('localhost','root', '','registration');

if(isset($_POST['register'])) {
	$username = mysql_real_escape_string($_POST['username']);
	$email = mysql_real_escape_string($_POST['email']);
	$password_1 = mysql_real_escape_string($_POST['password_1']);
	$password_2 = mysql_real_escape_string($_POST['password_2']);

	if ($password_1 == $password_2){

		$password = md5($password_1);
		$sql = "INSERT INTO users (username , email , password) VALUES ('$username', '$email', '$password')"; 
			mysqli_query($db,$sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "you are now logged in";
			header('location: register.php');
	}

	else{
			
			echo 'The two passwords do not match';
	}
}


if(isset ($_POST['login'])) {
	session_start();
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$password = md5($password);
	$query = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
	$result = mysqli_query($db, $query);
	
	if(mysqli_num_rows($result)==1) {
		
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are logged in";
		header('location: index.php');
		

	}
	else{
		echo "dont act smart bro";
	}
}


?>