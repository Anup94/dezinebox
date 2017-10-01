<? php include ('server.php') ?>
<html>
<head>
<title>Website</title>
</head>
<body>
	<div class="header">
	<h2>Register</h2>
	</div>

	<form method="post" action="server.php">
	<div class="input-group">
	<label>Username</label>
	<input type="text" name="username" required>
	</div>

	<div class="input-group">
	<label>email</label>
	<input type="email" name="email" required>
	</div>

	<div class="input-group">
	<label>Password</label>
	<input type="password" name="password_1" required>
	</div>

	<div class="input-group">
	<label>Password</label>
	<input type="password" name="password_2" required>
	</div>

	<div class="input-group">
	<button type="submit" name="register" class="btn">Register</button>
	</div>

	<p>
	Already a remember? <a href="login.php">Login </a>
	</p>


	</form>
</body>