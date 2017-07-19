<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo SITE_TITLE;?> - Login</title>
    <?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/css.php";?>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container">
        <form class="loginContainer" id="loginForm" action="validate.php?task=login" method="post">
            <div class="panel">
                <div class="panel-heading">
                    <img src="/assets/images/logo.png" class="img-responsive"/>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="username">Username / Email</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="username" class="form-control" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username">Password</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="password" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label><input type="checkbox" name="keepLogin" value="1"/>Keep me logged in</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-block btn-lg text-uppercase">Log In</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/scripts.php";?>
	<script type="text/javascript" src="js/login.js"></script>
</body>
</html>