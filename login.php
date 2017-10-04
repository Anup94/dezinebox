<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login to Dezine Box</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/login-form.css">
<link rel="stylesheet" href="assets/styles/pnotify.custom.min.css">

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
  <div class="thumbnail"><a href="home.php"><img src="http://dezinebox.io/assets/images/logo.png"/></a></div>



<div id="myDIV" style="display:none">
<form id="forgot"  action="validate.php?task=forgot" method="post" >
   <input type="text" name="username" placeholder="Username"/>
    <input type="email" name="email" placeholder="email address"/>
    <button id="reg">Submit</button><br><br>
   <p class="message" onclick="create()">Not registered? <a href="#">Create an account</a></p><br>
  </form>
</div>
  <form id="register-form" class="register-form" action="validate.php?task=submit_signup" method="post" >
    <input type="text" name="name" placeholder="Name"/>
    <input type="text" name="username" placeholder="Username"/>
    <input type="email" name="email" placeholder="email address"/>
     <input type="text" name="mobile" placeholder="number"/>
    <input type="password" name="password" placeholder="password"/>
    
    <button id="reg">create</button>

    <p class="message" onclick="create2()">Already registered? <a href="#">Sign In</a></p>
  </form>
  <form id="login-form" class="login-form" action="validate.php?task=login" method="post">
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="password"/>
    <button >login</button>
        <p class="message">Not registered? <a href="#">Create an account</a></p>
     
      <p class="message" onclick="myFunction()">Forgot password?</p>

<br></form>

          
<!-- 
<form method="post" action="validate.php?task=facebook-login" style="display: inline-block;">
<button  class="social-signin facebook"> <i class="fa fa-facebook"></i></button></form>
<form method="post" action="validate.php?task=google-login" style="display: inline-block;"> <a href="validate.php?task=google-login"  ><button class="social-signin google"><i class="fa fa-google-plus"></i></button></a></form>
<form method="post" action="validate.php?task=twitter-login" style="display: inline-block;"> <a href="validate.php?task=twitter-login" ><button class="social-signin twitter"><i class="fa fa-twitter"  ></i></button> </a>

</form> -->
    

  
</div></div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="assets/js/pnotify.custom.min.js"></script>
<script>
function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
      var y = document.getElementById("login-form");
          y.style.display = "none";
}
</script>
<script>
function create() {
    var x = document.getElementById("login-form");

        x.style.display = "none";

}
</script>
<script>
function create2() {
    var x = document.getElementById("myDIV");

        x.style.display = "none";

}
</script>
<script>

  $('#register-form').submit(function(e){
  console.log("inside");
  e.preventDefault();
  $.post('validate.php?task=submit_signup', $('#register-form').serialize(), function(res) {
    console.log(res);
    if(res.status == 0){
      new PNotify({
       title: 'Error!',
       text: res.msg,
       type: 'error'          
   });
    }else {
      new PNotify({
       title: 'Success!',
       text: res.msg,
       type: 'success'          
   });

      setTimeout(function(){
        window.location.href = 'get-your-box.php';
      },10);
    }
  });
});




  $('#login-form').submit(function(e){
  console.log("inside");
  e.preventDefault();
  $.post('validate.php?task=login', $('#login-form').serialize(), function(res) {
    console.log(res);
    if(res.status == 0){
      new PNotify({
       title: 'Error!',
       text: res.msg,
       type: 'error'          
   });


    }else {
      new PNotify({
       title: 'Success!',
       text: res.msg,
       type: 'success'          
   });
      setTimeout(function(){
        window.location.href = 'get-your-box.php';
      },1000);
    }
  });
});
</script>
    <script src="js/index.js"></script>

</body>
</html>
