<?php include ('server.php'); ?>
<html>
<head>
<title>Website</title>
</head>
<body>
	<div class="header">
	<h2>Login</h2>
	</div>

	<form method="post" action="server.php">
	

	<div class="input-group">
	<label>email</label>
	<input type="email" name="email" required>
	</div>

	<div class="input-group">
	<label>Password</label>
	<input type="password" name="password" required>
	</div>



	<div class="input-group">
	<button type="submit" name="login" class="btn">Login</button>
	</div>

	
	<p>
	Not a member yet? <a href="register.php">Sign Up </a>
	</p>


	</form>
</body>