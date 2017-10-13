<?php
include_once("check_login_status.php");
// If user is already logged in, header that weenis away
if($user_ok == true){
	header("location: 3dbook1.php?u=".$_SESSION["username"]);
    exit();
}
?>
<?php
// AJAX CALLS THIS LOGIN CODE TO EXECUTE
if(isset($_POST["e"])){
	// CONNECT TO THE DATABASE
	include_once("db_conc.php");
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
    $e = mysqli_real_escape_string($db_conx, $_POST['e']);

    $try=$_POST['e'];

     session_start();
    $_SESSION['email']=$try;

	$p = md5($_POST['p']);
	// GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
	// FORM DATA ERROR HANDLING
	if($e == "" || $p == ""){
		echo "login_failed";
        exit();
	} 
    
else {
	// END FORM DATA ERROR HANDLING
		$sql = "SELECT id, username, password FROM users WHERE email='$_SESSION[email]'";
        $query = mysqli_query($db_conx, $sql);
        $row = mysqli_fetch_row($query);
		$db_id = $row[0];
		$db_username = $row[1];
        $db_pass_str = $row[2];
		if($p != $db_pass_str){
			echo "login_failed";
            exit();
		} else {
        
			// CREATE THEIR SESSIONS AND COOKIES
			$_SESSION['userid'] = $db_id;
			$_SESSION['username'] = $db_username;
			$_SESSION['password'] = $db_pass_str;
			setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
			setcookie("user", $db_username, strtotime( '+30 days' ), "/", "", "", TRUE);
    		setcookie("pass", $db_pass_str, strtotime( '+30 days' ), "/", "", "", TRUE); 
			// UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
			$sql = "UPDATE users SET ip='$ip', lastlogin=now() WHERE username='$db_username' LIMIT 1";
            $query = mysqli_query($db_conx, $sql);
			echo $db_username;
		    exit();
		}
	}
	exit();
}
?>
<?php
$con=mysqli_connect("localhost", "root", "", "spark");
 
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}
if(isset($_POST['sign'])) {
   $con=mysqli_connect("localhost", "root", "", "spark");

    
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}

    

  //mysql_select_db("test", $con);
if(isset($_POST['submitted']) && $_POST['submitted'] == 1){

  $username = filter_var($_POST['username'],FILTER_SANITIZE_STRING);
  $username = strtolower($username);
  $unLength = strlen($username);

  $password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);

  $password1=md5($password); 

  $con=mysqli_connect("localhost", "root", "", "spark");
  $q = mysqli_query($con,"select username from users where username='$username'");

  if($unLength < 4 || $unLength > 30){
    echo '<div align="center" style="color:#E02020">Username must contain minimum 4 and mamimum 30 characters.</div>
          <div align="center" style="color:#3A5AE0">Redirecting...</div>';    
  }
  // elseif (mysqli_num_rows($q)>0){
  //   echo '<div align="center" style="color:#E02020">Username already exists! Please type a different username.</div>
  //         <div align="center" style="color:#3A5AE0">Redirecting...</div>';
  // }
  elseif (strlen($password) < 6) {
    echo '<div align="center" style="color:#E02020">Password must contain minimum 6 characters.</div>
          <div align="center" style="color:#3A5AE0">Redirecting...</div>'; 
  }
  elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    echo '<div align="center" style="color:#E02020">Invalid email ID given. Please enter a valid email id.</div>
          <div align="center" style="color:#3A5AE0">Redirecting...</div>';
  }
  else{
    $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
    $q = mysqli_query($con,"select email from users where email='$email'");
    if(mysqli_num_rows($q)>0)
    {
        echo '<div align="center" style="color:#E02020">Email already registered. Please enter another one!</div>';
        echo '<div align="center" style="color:#3A5AE0">Redirecting...</div>';
    }	
    else{
       mysqli_query($con, "INSERT INTO users(username,password,email) VALUES ('$username','$password1','$email')");

        echo '<div align="center" style="color:#E02020">Thank you for registering with us.</div>';
        echo '<div align="center" style="color:#3A5AE0">Redirecting...</div>';
    }
  }
  echo '<script>setTimeout(function(){
                window.location = "login.php";
              },3500)
              </script>';
  die();
}

  // require_once("PHPMailer/PHPMailerAutoload.php");
		
	// 	$mail=new PHPMailer();
	// 	$mail->IsSMTP();
	// 	$mail->SMTPDebug=false;
	// 	$mail->SMTPAuth=true;
	// 	$mail->SMTPSecure = 'ssl';
	// 	$mail->Host ="smtp.gmail.com";
	// 	$mail->Port =465;

	// 	$mail->Username ="sparkyourbestseller@gmail.com";                 // SMTP username
	// 	$mail->Password ="Spark@1(($";                           // SMTP password
	// 	$mail->SetFrom("sparkyourbestseller@gmail.com");
	// 	$mail->AddAddress($email);
	// 	$mail->Subject="SparkYourBestSeller ";
	// 	$mail->Body='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>';
	// 	$mail->IsHTML(true);
	// 	$mail->send();
	// 	//	echo "success";
	// 		exit();
 //echo "email via gmail...class<br>";


            include("PHPMailer/PHPMailer/class.phpmailer.php");

            $account="sparkyourbestseller@gmail.com";
            $password="Spark@1(($";
            $to= $email;
            $from="sparkyourbestseller@gmail.com";
            $from_name="Spark Your Bestseller";
            $msg='<p>Dear <b>'.$username.'</b>,</p><p>Thank you for registering with #SparkYourBestseller, a unique coach-tech product to unleash the best version of yourself.</p><p>Feel free to get in touch with us for any assistance </p><p>Cheers,</p><p>Team Happ Coach</p><a href="www.sparkyourbestseller.com">www.sparkyourbestseller.com</a>';
            // $msg='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>'; // HTML message
            $subject="#SparkYourBestseller";

            // echo "now assigning variables<br>";

            $mail = new PHPMailer();
            //$mail->IsSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth= true;
            $mail->Port = 587; // Or 587 or 465
            $mail->Username= $account;
            $mail->Password= $password;
            $mail->SMTPSecure = 'ssl';
            $mail->From = $from;
            $mail->FromName= $from_name;
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $msg;
            $mail->addAddress($to);

            // echo "now  mailig <br>";

            $mail->send();

            // if(!$mail->send()){
            // echo "Mailer Error: " . $mail->ErrorInfo;
            // }
            // else
            // {
            // echo "E-Mail has been sent";
            // }


            // echo "script ends<br>";

        echo "<meta http-equiv='refresh' content='0'>";


   mysqli_close($con);
    }
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
  <meta name="author" content="#Sparkyourbestseller">
  <title>#SparkYourBestseller</title>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
  
   <link rel="stylesheet" href="style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="bootbox.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <link rel="stylesheet" href="css/style.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
#loginform{
	margin-top:24px;	
}
#loginform > div {
	margin-top: 12px;	
}
#loginform > input {
	width: 200px;
	padding: 3px;
	background: #F3F9DD;
}
#loginbtn {
	font-size:15px;
	padding: 10px;
}
</style>
<script src="js/main.js"></script>
<script src="js/ajax.js"></script>
    
    <link rel="stylesheet" href="cssh/styles.css">
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <!--Boosttrap-->
  <link rel="stylesheet" href="nav.css">
  
    
    
<script>
function emptyElement(x){
	_(x).innerHTML = "";
}
function login(){
	var e = _("email").value;
	var p = _("password").value;
	if(e == "" || p == ""){
		_("status").innerHTML = "Fill out all of the form data";
	} else {
		_("loginbtn").style.display = "none";
		_("status").innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "login.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText == "login_failed"){
					_("status").innerHTML = "Login unsuccessful, please try again.";
					_("loginbtn").style.display = "block";
				} else {
					window.location = "3dbook1.php?u="+ajax.responseText;
				}
	        }
        }
        ajax.send("e="+e+"&p="+p);
	}
}

function validSignup () {
  var name = $('#regname').val();
  var pass = $('#regpass').val();
  var email = $('#regemail').val();
  if(name == ""){
    bootbox.alert('Username cannot be empty!');
    return false;
  }
  else if(name.length < 5 || name.length > 30){
    bootbox.alert('Your name must contain minimum 5 and mamimum 30 characters.');
    return false;
  }
  else if(pass == ""){
    bootbox.alert('Password cannot be empty!');
    return false;
  }
  else if(pass.length < 6){
    bootbox.alert('Password must contain minimum 6 characters.');
    return false;
  }
  else if(email == ""){
    bootbox.alert('Email id cannot be empty!');
    return false;
  }
  else{
    return true;
  }
}
</script>

<style>
    a {
    text-decoration: none !important;
}
  </style>
  
</head>

<body>
        
    <header>
      <?php include_once("menu.php");?>
    </header>

    
  <center>
  <p class="tip"></p>
<div class="cont">
  <div class="form sign-in">
  <form id="loginform" onsubmit="return false;" style="margin-right:20%;"> 
    <h2>Welcome back,</h2><br/>
    <label>
      <span>Email Id</span>
      <input type="text" id="email" onfocus="emptyElement('status')" maxlength="88"/>
    </label>
    <label>
      <span>Password</span>
      <input type="password" id="password" onfocus="emptyElement('status')" maxlength="100"/>
    </label>
<!--    <p class="forgot-pass">Forgot password?</p>-->
	  <button class="submit" name="submit" id="loginbtn" onclick="login()" style="background: #032f5c;color: white;">Sign In</button> 
      <p id="status"></p>
	  <!--button class="fb-btn"><a href="guest.php">Try Out As a Guest</a></button><br-->
<!--    <button type="button" class="fb-btn">Connect with <span>facebook</span></button>-->
	</form>    
  </div>
    
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" onSubmit="return validSignup()">
      <h2>Time to feel like home,</h2><br/>
      <label>
        <span>Your Name</span>
        <input type="text" name="username" id="regname"/>
      </label>
        <label>
        <span>Password</span>
        <input type="password" name="password" id="regpass"/>
      </label>
      <label>
        <span>Email</span>
        <input type="email" name="email" id="regemail"/>
      </label>
      <button class="submit" name="sign" value="sign" style="background: #032f5c;color: white;">Sign Up</button>
      <input type="hidden" name="submitted" value="1" />
<!--      <button type="button" class="fb-btn">Join with <span>facebook</span></button>-->
        </form>
    </div>
  </div>
</div>
<!--
<a href="https://dribbble.com/shots/3306190-Login-Registration-form" target="_blank" class="icon-link">
  <img src="http://icons.iconarchive.com/icons/uiconstock/socialmedia/256/Dribbble-icon.png">
</a>
<a href="https://twitter.com/NikolayTalanov" target="_blank" class="icon-link icon-link--twitter">
  <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-128.png">
</a>
  
-->
    <script src="js/index.js"></script>
    </center>
</body>
    
</html>

