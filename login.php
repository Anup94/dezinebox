<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Login to Dezine Box</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/login-form.css">
<style>
.position { margin-top:9%; float:right; right:4%;} 
@media only screen and (max-width: 800px) {
    .position {
        margin-top:9%;
		float: none;
		right: 0%;  }
} 
</style>
</head>

<body>

<div class="form position" style="">
  <div class="thumbnail"><img src="http://dezinebox.io/assets/images/logo.png"/></div>
  <form class="register-form" action="validate.php?task=submit_signup" method="post" >
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="password"/>
    <input type="text" name="email" placeholder="email address"/>
    <button>create</button>
    <p class="message">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form class="login-form" action="validate.php?task=login" method="post">
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="password"/>
    <button>login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>

<br><br></form>
<form method="post" action="validate.php?task=facebook-login" style="display: inline-block;">
<button  class="social-signin facebook"> <i class="fa fa-facebook"></i></button></form>
<form method="post" action="validate.php?task=google-login" style="display: inline-block;"> <a href="validate.php?task=google-login"  ><button class="social-signin google"><i class="fa fa-google-plus"></i></button></a></form>
<form method="post" action="validate.php?task=twitter-login" style="display: inline-block;"> <a href="validate.php?task=twitter-login" ><button class="social-signin twitter"><i class="fa fa-twitter"  ></i></button> </a>

</form>
    

  
</div></div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
