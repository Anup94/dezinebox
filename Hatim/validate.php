<?php

	$myemail = "srinath.chinchole@qleverlabs.com";
	$mypass = "123456789";

			if(isset($_POST['login'])) 
			{
				$email = $_POST['email'];
				$pass = $_POST['password'];
				if( $email == $myemail and $pass == $mypass ) 
				{
					if( isset($_POST['remember'])) 
					{
						setcookie('email', $email, time()+60*60*7);
						setcookie('pass', $pass, time()+60*60*7);
					}

					session_start();
					$_SESSION['email'] = $email;
					header("location:welcome.php");
				} else {
					echo "Email or password is Invalid. <br> click here to 
					<a href='try.php'>try again </a>";
						}

			} 
			else {header("location:try.php");}

?>