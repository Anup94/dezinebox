<?php 

if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])) {
	$email = $_COOKIE['email'];
	$pass = $_COOKIE['pass'];
	echo "<script>
	document.getElementById('email').value = '$email';
	document.getElementById('pass').value = '$pass';
	</script>";
}


?>



<html>
<table cellpadding="5" cellspacing="10" align="center">
<h3>Login form using session and cookies with remember me</h3>
<form method="post" action="validate.php">
	<tr><th>Email</th><td><input type="text" id="email" name="email"></td></tr>
	<tr><th>Password</th><td><input type="Password" id="pass" name="password"></td></tr>
	<tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1" checked>Remember me</td></tr>
	<tr><td colspan="2" align="center"><input type="submit" value="login" name="login"></td></tr>
	</form></table>



</html>
