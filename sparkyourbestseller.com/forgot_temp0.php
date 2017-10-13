<?php
include_once("check_login_status.php");
// If user is already logged in, header that weenis away
if($user_ok == true){
	header("location: user.php?u=".$_SESSION["username"]);
    exit();
}
?><?php
// AJAX CALLS THIS CODE TO EXECUTE
// $db_conx = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
$db_conx = mysqli_connect("localhost", "root", "", "spark");
if(isset($_POST["e"])){
	$e = mysqli_real_escape_string($db_conx, $_POST['e']);
	$sql = "SELECT id, username FROM users WHERE email='$e' LIMIT 1";
	$query = mysqli_query($db_conx, $sql);
	$numrows = mysqli_num_rows($query);
	if($numrows > 0){
		while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
			$id = $row["id"];
			$u = $row["username"];
		}
		$emailcut = substr($e, 0, 4);
		$randNum = rand(10000,99999);
		$tempPass = "$emailcut$randNum";
		$hashTempPass = md5($tempPass);
		$sql = "UPDATE users SET temp_pass='$hashTempPass' WHERE username='$u' LIMIT 1";
	    $query = mysqli_query($db_conx, $sql);
		
        
        include("PHPMailer/PHPMailer/class.phpmailer.php");

            $account="sparkyourbestseller@gmail.com";
            $password="Spark@1(($";
            $to= $e;
            $from="sparkyourbestseller@gmail.com";
            $from_name="Spark Your Bestseller";
            $msg='<h2>Hello '.$u.'</h2><p>This is an automated message from yoursite. If you did not recently initiate the Forgot Password process, please disregard this email.</p><p>You indicated that you forgot your login password. We can generate a temporary password for you to log in with, then once logged in you can change your password to anything you like.</p><p>After you click the link below your password to login will be:<br /><b>'.$tempPass.'</b></p><p><a target="_blank" href="http://test.sparkthebestseller.com/next.php?u='.$u.'&e='.$e.'&p='.$hashTempPass.'">Click here now to apply the temporary password shown below to your account</a></p><p>If you do not click the link in this email, no changes will be made to your account. In order to set your login password to the temporary password you must click the link above.</p>';
            // $msg='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>'; // HTML message
            $subject="#SparkYourBestseller";

            // echo "now assigning variables<br>";

            $mail = new PHPMailer();
            $mail->IsSMTP();
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

           

            $mail->send();

      echo "success";  
			
			exit();
		} 
	else {
        echo "no_exist";
    }
    exit();
}
?><?php
// EMAIL LINK CLICK CALLS THIS CODE TO EXECUTE
if(isset($_GET['u']) && isset($_GET['p'])){
	$u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
	$temppasshash = preg_replace('#[^a-z0-9]#i', '', $_GET['p']);
	/*if(strlen($temppasshash) < 10){
		exit();
	}*/
	$sql = "SELECT id FROM users WHERE username='$u' AND temp_pass='$temppasshash' LIMIT 1";
	$query = mysqli_query($db_conx, $sql);
	$numrows = mysqli_num_rows($query);
	if($numrows == 0){
		header("location: message.php?msg=There is no match for that username with that temporary password in the system. We cannot proceed.");
    	exit();
	} 
	else {
		echo $temppasshash;
		echo $u;
		$row = mysqli_fetch_row($query);
		$id = $row[0];
		//$sql = "UPDATE users SET password='$temppasshash' WHERE username='$u' LIMIT 1";
	    //$query = mysqli_query($db_conx, $sql);
		$sql = "UPDATE users SET temp_pass='' WHERE username='$u' LIMIT 1";
	    $query = mysqli_query($db_conx, $sql);
	    header("location: login.php");
        exit();
    }
}
?>






























<!DOCTYPE html>
<html>
    <head>
    <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
    <meta name="author" content="#Sparkyourbestseller">
        <title>
            Login - SignUp | SparkYourBestseller
        </title>



<script src="js/main.js"></script>
<script src="js/ajax.js"></script>
   
<script>
function forgotpass(){
  var e = _("email").value;
  if(e == ""){
    _("status").innerHTML = "Type in your email address";
  } else {
    _("forgotpassbtn").style.display = "none";
    _("status").innerHTML = 'please wait ...';
    var ajax = ajaxObj("POST", "forgot_pass.php");
        ajax.onreadystatechange = function() {
          if(ajaxReturn(ajax) == true) {
        // var response = ajax.responseText;
        if(ajax.responseText.includes("success")){
        // if(response == "success"){
          _("forgotpassform").innerHTML = '<p><h3><font color="white">Step 2. Check your email inbox in a few minutes</font></h3></p>';
        } else if(ajax.responseText.includes("no_exist")){
          _("status").innerHTML = "Sorry that email address is not in our system";
        } else if(ajax.responseText.includes("email_send_failed")){
          _("status").innerHTML = "Mail function failed to execute";
        } else {
          _("status").innerHTML = "An unknown error occurred";
        }
          }
        }
        ajax.send("e="+e);
  }
}
</script>


        
        <style type="text/css">
                  






             @font-face {
    font-family: dejavu;
    src: url(fonts/dejavu-sans/DejaVuSans.ttf);
    /*font-weight: bold;*/
}     

            @font-face {
    font-family: dejavu_extralight;
    src: url(fonts/dejavu-sans/DejaVuSans-ExtraLight.ttf);
    /*font-weight: bold;*/
}     




    *,
                   *:before,
                   *:after {
                    box-sizing: border-box;
                   }

                   html {
                    overflow-y: scroll;
                   }

                   body {
                    background: #c1bdba;
                    font-family: 'Titillium Web', sans-serif;
                   }

                   a {
                    text-decoration: none;
                    color: #1ab188;
                    -webkit-transition: .5s ease;
                    transition: .5s ease;
                   }
                   a:hover {
                    color: #179b77;
                   }

                   .form {
                    background: rgba(19, 35, 47, 0.9);
                    padding: 40px;
                    max-width: 600px;
                    margin: 40px auto;
                    border-radius: 4px;
                    box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
                   }

                   .tab-group {
                    list-style: none;
                    padding: 0;
                    margin: 0 0 40px 0;
                   }
                   .tab-group:after {
                    content: "";
                    display: table;
                    clear: both;
                   }
                   .tab-group li a {
                    display: block;
                    text-decoration: none;
                    padding: 15px;
                    background: rgba(160, 179, 176, 0.25);
                    color: #a0b3b0;
                    font-size: 20px;
                    float: left;
                    width: 50%;
                    text-align: center;
                    cursor: pointer;
                    -webkit-transition: .5s ease;
                    transition: .5s ease;
                   }
                   .tab-group li a:hover {
                    background: #179b77;
                    color: #ffffff;
                   }
                   .tab-group .active a {
                    background: #1ab188;
                    color: #ffffff;
                   }

                   .tab-content > div:last-child {
                    display: none;
                   }

                   h1 {
                    text-align: center;
                    color: #ffffff;
                    font-weight: 300;
                    margin: 0 0 40px;
                   }

                   label {
                    position: absolute;
                    -webkit-transform: translateY(6px);
                            transform: translateY(6px);
                    left: 13px;
                    color: rgba(255, 255, 255, 0.5);
                    -webkit-transition: all 0.25s ease;
                    transition: all 0.25s ease;
                    -webkit-backface-visibility: hidden;
                    pointer-events: none;
                    /*font-size: 22px;*/
                    font-size: 123%;
                    margin: -1% 0% 0% 0%;
                   }
                   label .req {
                    margin: 2px;
                    color: #1ab188;
                   }

                   label.active {
                    -webkit-transform: translateY(-30px);
                            transform: translateY(-30px);
                    left: 2px;
                    font-size: 14px;
                   }
                   label.active .req {
                    opacity: 0;
                   }

                   label.highlight {
                    color: #ffffff;
                   }

                   input,
                   textarea {
                    font-size: 22px;
                    display: block;
                    width: 100%;
                    height: 100%;
                    padding: 5px 10px;
                    background: none;
                    background-image: none;
                    border: 1px solid #a0b3b0;
                    color: #ffffff;
                    border-radius: 0;
                    -webkit-transition: border-color .25s ease, box-shadow .25s ease;
                    transition: border-color .25s ease, box-shadow .25s ease;
                   }
                   input:focus,
                   textarea:focus {
                    outline: 0;
                    border-color: #1ab188;
                   }

                   textarea {
                    border: 2px solid #a0b3b0;
                    resize: vertical;
                   }

                   .field-wrap {
                    position: relative;
                    margin-bottom: 40px;
                   }

                   .top-row:after {
                    content: "";
                    display: table;
                    clear: both;
                   }
                   .top-row > div {
                    float: left;
                    width: 48%;
                    margin-right: 4%;
                   }
                   .top-row > div:last-child {
                    margin: 0;
                   }

                   .button {
                    border: 0;
                    outline: none;
                    border-radius: 0;
                    padding: 15px 0;
                    font-size: 2rem;
                    font-weight: 600;
                    text-transform: uppercase;
                    letter-spacing: .1em;
                    background: #1ab188;
                    color: #ffffff;
                    -webkit-transition: all 0.5s ease;
                    transition: all 0.5s ease;
                    -webkit-appearance: none;
                   }
                   .button:hover, .button:focus {
                    background: #179b77;
                   }

                   .button-block {
                    display: block;
                    width: 100%;
                   }

                   .forgot {
                    margin-top: -20px;
                    text-align: right;
                   }




        </style>




      
    </head>
    <body  style="background-color: #fff;  ">

 <header>
      <?php include_once("menu.php");?>
    </header>

        



<div  class="form"  style="max-width: 400px;border-radius: 0px; margin: 20px auto; font-family: dejavu;  "   >
            <!-- <ul class="tab-group">
                <li class="tab active">
                    <a href="#forgotpass">Forgot Passowrd</a>
                   
                </li>

                <li class="tab">
                     <a href="#signup">Sign Up</a>
                </li>
            </ul> -->

          <!--   <div class="tab-content">
 -->

                <div id="forgotpass">
                    <h1 style="font-family: dejavu_extralight;">
                        Forgot Passowrd
                    </h1>

                    <form id="forgotpassform" onsubmit="return false;" style="margin: 15% 0% 0% 0%;">
                        <div class="field-wrap">
                            <label>Email Address<span class="req">*</span></label> <input autocomplete="on" required="required" type="email" id="email"  onfocus="_('status').innerHTML=''; maxlength="88">
                        </div>

                        <!-- <div class="field-wrap">
                            <label>Password<span class="req">*</span></label> <input autocomplete="on" required="required" type="password" id="password" onfocus="emptyElement('status')" maxlength="100">
                        </div> -->

                        <p class="forgot">
                            <a href="login4.php">Login!</a>
                        </p>
                        <button class="button button-block"  name="submit" id="forgotpassbtn" onclick="forgotpass()"  >Next</button>
                        <p style="align-content: center;text-align: center;font-size: 130%;color: #fff;" id="status"></p>
                    </form>
                </div>

               <!--  <div id="signup">
                    <h1 style="font-family: dejavu_extralight;">
                        Sign Up for Free
                    </h1>

                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" style="margin: 15% 0% 0% 0%;"  >
                        <div class="">
                            <div class="field-wrap">
                                <label>Name<span class="req">*</span></label> <input autocomplete="on" type="text" name="username" required="required">
                            </div>

                        </div>

                        <div class="field-wrap">
                            <label>Email Address<span class="req">*</span></label> <input autocomplete="on" type="email" name="email"  required="required">
                        </div>

                        <div class="field-wrap">
                            <label>Set A Password<span class="req">*</span></label> <input autocomplete="on" type="password" name="password"  required="required">
                        </div>
                        <button class="button button-block" type="submit" name="signup" value="signup" >Get Started</button>
                    </form>
                </div> -->

                
           <!--  </div> -->
            <!-- tab-content -->
        </div>
        <!-- /form -->



        






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script type="text/javascript">
                      $('.form').find('input, textarea').on('keyup blur focus', function (e) {
                    
                    var $this = $(this),
                        label = $this.prev('label');

                        if (e.type === 'keyup') {
                              if ($this.val() === '') {
                            label.removeClass('active highlight');
                          } else {
                            label.addClass('active highlight');
                          }
                      } else if (e.type === 'blur') {
                          if( $this.val() === '' ) {
                              label.removeClass('active highlight'); 
                              } else {
                              label.removeClass('highlight');   
                              }   
                      } else if (e.type === 'focus') {
                        
                        if( $this.val() === '' ) {
                              label.removeClass('highlight'); 
                              } 
                        else if( $this.val() !== '' ) {
                              label.addClass('highlight');
                              }
                      }

                   });

                   $('.tab a').on('click', function (e) {
                    
                    e.preventDefault();
                    
                    $(this).parent().addClass('active');
                    $(this).parent().siblings().removeClass('active');
                    
                    target = $(this).attr('href');

                    $('.tab-content > div').not(target).hide();
                    
                    $(target).fadeIn(600);
                    
                   });
        </script>





    </body>
</html>



















