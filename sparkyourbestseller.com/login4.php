<?php
include_once("analytics.php");
?><?php
include_once("check_login_status.php");
// If user is already logged in, header that weenis away
$user_alert =0;
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
    $p = md5($_POST['p']);
  // GET USER IP ADDRESS
    //$ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));

    if (!empty($_SERVER["HTTP_CLIENT_IP"]))
    {
     //check for ip from share internet
     $ip = $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
    {
     // Check for the Proxy User
     $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    else
    {
     $ip = $_SERVER["REMOTE_ADDR"];
    }



// This will print user's real IP Address
// does't matter if user using proxy or not.




  // FORM DATA ERROR HANDLING
  if($e == "" || $p == ""){
    echo "​Unsuccessful login. Please try again";
        exit();
  } 
    
else {
  // END FORM DATA ERROR HANDLING
    $sql = "SELECT id, username, password FROM users WHERE email='$e' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
        $row = mysqli_fetch_row($query);
    $db_id = $row[0];
    $db_username = $row[1];
        $db_pass_str = $row[2];
    if($p != $db_pass_str){
       $alert_user =3;
      // echo "login_failed";
            exit();
    } else {
        
      // CREATE THEIR SESSIONS AND COOKIES

      $_SESSION['userid'] = $db_id;
      $_SESSION['email'] = $e;
      $_SESSION['username'] = $db_username;
      $_SESSION['password'] = $db_pass_str;
        setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
        setcookie("email", $e, strtotime( '+30 days' ), "/", "", "", TRUE);
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



<!-- signup start -->
<?php

  $alert_user = 0;

    // $con=mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
     
    // if (mysqli_connect_errno()) {
    //     throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
    // }

    if(isset($_POST['signup'])) {
       // $con=mysqli_connect("localhost", "root", "", "spark");
        $con = mysqli_connect("localhost", "root", "", "sparklive");
       // $con=mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");

        
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }


          //mysql_select_db("test", $con);

        $username=$_POST['username'];
        $email=$_POST['email'];

        $password=$_POST['password'];
        $password1=md5($password);
        
        $run=mysqli_query($con, "SELECT * from users where email='$email'");
        //if email already registeerd
        if(mysqli_num_rows($run)>0)
        {
//echo "zala na ekdaaa";
         $alert_user = 1;
        } 
        else{
           mysqli_query($con, "INSERT INTO users(username,password,email) VALUES ('$username','$password1','$email')");
           
          // echo "<meta http-equiv='refresh' content='0'>";
           

           // echo "signed up";
        



// echo "mailing";
        // mailing
         
            include("PHPMailer/PHPMailer/PHPMailerAutoload.php");

            $account="reachout@happcoach.com";
            $password="CoachHapp99";
            $to= $email;

            $from="reachout@happcoach.com";
            $from_name="Happ Coach";
            $msg='<!DOCTYPE html><html><head><title></title></head><body><table><tbody><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" id="" style="font-family:&quot;Arial&quot;;background-color:#34495e;padding:30px 30px 0 30px" width="600"><tbody><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" height="50" id="" style="font-family:&quot;Arial&quot;;padding:0 0 20px 0;font-size:13px" width="100%"><tbody><tr><td align="left" class="" id="" style="margin:0;padding:0" valign="middle"><a class="" data-saferedirecturl="" href="" style="text-decoration:none;color:#fff" target="_blank"><img alt="" class="" src="http://sparkyourbestseller.com/img/logo.png" style="max-width: 45%; border-radius: 5px; "></a></td></tr></tbody></table></td></tr><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="0" id="" style="font-family:&quot;Arial&quot;;background-color:#fff;font-size:13px;color:#46535e;border-radius:3px" width="100%"><tbody><tr><td align="left" valign="top"><p></p><table cellpadding="0" cellspacing="0" class="m_4434876126266125253padding-top-20 m_4434876126266125253center-content" style="font-family:&quot;Arial&quot;;font-size:14px!important;line-height:24px;color:#46535e;padding:0 20px 5px" width="100%"><tbody><tr><td>Dear <b>'.$username.'</b>,</td></tr><tr><td>&nbsp;</td></tr><tr><td>Thank you for registering with <a href="http://sparkyourbestseller.com/">#SparkYourBestseller</a>, a unique coach-tech product to unleash the best version of yourself.<br>Feel free to get in touch with us for any assistance.</td></tr><tr><td>&nbsp;</td></tr><tr><td height="10"></td></tr><tr><td class="">Cheers,</td></tr><tr><td>Team Happ Coach</td></tr></tbody></table><a data-saferedirecturl="" href="" style="text-decoration:none" target="_blank"><img class="" src=""></a></td></tr></tbody></table></td></tr><tr><td align="center" valign="top"><table border="0" cellpadding="0" cellspacing="20" id="" style="font-family:&quot;Arial&quot;;font-size:12px;color:#666" width="100%"><tbody style="color: #fff; "><tr><td align="center" valign="top">Show us some love. Like &amp; Follow us. Spread the word about SparkTheBestseller!<br><a href="https://www.facebook.com/happcoach"><img alt="Facebook" class="" src="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png" style="margin:10px 10px 0 0; height: 36px; width: 36px;"></a> <a href="https://twitter.com/happcoach" style="text-decoration:none" target="_blank"><img alt="Twitter" src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Twitter_bird_logo_2012.svg/1259px-Twitter_bird_logo_2012.svg.png" style="margin:10px 10px 0 0;height: 36px; width: 36px;"></a><a href="https://www.linkedin.com/company-beta/13195949/" style="text-decoration:none" target="_blank"><img alt="LinkedIN" src="https://cdn0.iconfinder.com/data/icons/social-flat-rounded-rects/512/linkedin-512.png" style="margin:10px 10px 0 0; height: 36px; width: 36px;"></a></td></tr><tr><td align="center" class="" id="" style="font-size: 120%;color: #fff; padding-top:10px; font-weight: bold;" valign="bottom">Powered by:<br><img src="http://sparkyourbestseller.com/img/happcoach.png"></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></body></html>';
            // $msg='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>'; // HTML message
            $subject="#SparkYourBestseller";

            // echo "now assigning variables<br>";

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth= true;
            $mail->Port =587; // Or 587 or 465
            $mail->Username= $account;
            $mail->Password= $password;
            $mail->SMTPSecure = 'tls';
            $mail->From = $from;
            $mail->FromName= $from_name;
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $msg;
            $mail->addAddress($to);

            // echo "now  mailig <br>";

            //echo $email.'<br>'.$msg;

            $mail->Send();

// echo "mail done";
          /*  
            if(!$mail->Send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
                exit;
            }
            echo 'Message has been sent';

*/
            // echo "script ends<br>";




// echo "logging inn";
// logging in nowww
  // CONNECT TO THE DATABASE
  include_once("db_conc.php");
  // GATHER THE POSTED DATA INTO LOCAL VARIABLES AND SANITIZE
    $e = $email;
    $p = $password1;
  // GET USER IP ADDRESS
    //$ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));

    if (!empty($_SERVER["HTTP_CLIENT_IP"]))
    {
     //check for ip from share internet
     $ip = $_SERVER["HTTP_CLIENT_IP"];
    }
    elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
    {
     // Check for the Proxy User
     $ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
    }
    else
    {
     $ip = $_SERVER["REMOTE_ADDR"];
    }
// echo "ip done";


// This will print user's real IP Address
// does't matter if user using proxy or not.




  // FORM DATA ERROR HANDLING
  if($e == "" || $p == ""){
    // echo "login_failed";
        //exit();
    // echo "e and p empty";
  } 
    
else {

  // echo "to login";
  // END FORM DATA ERROR HANDLING
    $sql = "SELECT id, username, password FROM users WHERE email='$e' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
        $row = mysqli_fetch_row($query);
    $db_id = $row[0];
    $db_username = $row[1];
        $db_pass_str = $row[2];
    if($p != $db_pass_str){
      $alert_user =3;
    } else {
        
      // CREATE THEIR SESSIONS AND COOKIES

      $_SESSION['userid'] = $db_id;
      $_SESSION['email'] = $e;
      $_SESSION['username'] = $db_username;
      $_SESSION['password'] = $db_pass_str;
      $_SESSION['signup']=1;
        setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
        setcookie("email", $e, strtotime( '+30 days' ), "/", "", "", TRUE);
        setcookie("user", $db_username, strtotime( '+30 days' ), "/", "", "", TRUE);
        setcookie("pass", $db_pass_str, strtotime( '+30 days' ), "/", "", "", TRUE); 

// echo "sessioms done";

      // UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
      $sql = "UPDATE users SET ip='$ip', lastlogin=now() WHERE username='$db_username' LIMIT 1";
            $query = mysqli_query($db_conx, $sql);
      // echo $db_username;
$alert_user = 2;
            header("location: 3dbook1.php?u=".$_SESSION["username"]);


        // exit();
    }
  }
}
  // exit();

      // echo "<meta http-equiv='refresh' content='0'>";

        mysqli_close($con);  

}


    
?>
<!-- signupend -->


<!DOCTYPE html>
<html>
    <head>
    <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
    <meta name="author" content="#Sparkyourbestseller">
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <script type="text/javascript">
      function alert_user(msg){
        bootbox.alert({
          message: msg,
          backdrop: true,
          className: 'modal-style',
          callback: function () {
            document.getElementById('username').focus();
          }
        });
      }
      if(<?php echo $alert_user ?>==1){
        $(document).ready(function(){
          alert_user('This Email ID is already registered.Kindly use another EMail ID.');
        })
      }
      if(<?php echo $alert_user ?>==2){
        $(document).ready(function(){
          alert_user('Thank you for signing up!');
        })
      }
      if(<?php echo $alert_user ?>==3){
        $(document).ready(function(){
          alert_user('​Unsuccessful login.Kindly check your Email ID and/or paassword');
        })
      }
    </script>
          <title>
            Login - SignUp | #SparkYourBestseller
        </title>
        <style type="text/css">
                  
          .modal-style {
            font-size: 20px;
           font-family: 'Abel', sans-serif;
          }





             @font-face {
   font-family: 'Abel', sans-serif;
    src: url('https://fonts.googleapis.com/css?family=Abel');
    /*font-weight: bold;*/
}     

            @font-face {
    font-family: 'Abel', sans-serif;
    src: url('https://fonts.googleapis.com/css?family=Abel');
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
                    font-family: 'Abel', sans-serif;
                   }

                   a {
                    text-decoration: none;
                    color: white;
                    -webkit-transition: .5s ease;
                    transition: .5s ease;
                   }
                   a:hover {
                    /*color: #179b77;*/
                   }

                   .form {
                    background: #203864;
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
                    background: #017eff;
                    color: #ffffff;
                   }
                   .tab-group .active a {
                    background: #017eff;
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
                    color:  #017eff;
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
                    border-color:  #017eff;
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
                    background: #017eff;
                    color: #ffffff;
                    -webkit-transition: all 0.5s ease;
                    transition: all 0.5s ease;
                    -webkit-appearance: none;
                   }
                   /*.button:hover, .button:focus {
                    background: #179b77;
                   }*/

                   .button-block {
                    display: block;
                    width: 100%;
                   }

                   .forgot {
                    margin-top: -20px;
                    text-align: right;
                   }
        </style>


<script src="js/main.js"></script>
<script src="js/ajax.js"></script>
    
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
    //_("loginbtn").style.display = "none";
    _("status").innerHTML = 'Please wait ...';
    var ajax = ajaxObj("POST", "login.php");
        ajax.onreadystatechange = function() {
          if(ajaxReturn(ajax) == true) {
              if(ajax.responseText.includes("login_failed")){
          //_("status").innerHTML = "Login unsuccessful, please try again.";
          alert_user('​Unsuccessful login.Kindly check your Email ID and/or password');
          _("loginbtn").style.display = "block";
          emptyElement("status");
        } else {
          window.location = "index.php?u="+ajax.responseText;
        }
          }
        }
        ajax.send("e="+e+"&p="+p);
  }
}

// function login(){
//   $.post("login.php", {
//     e: document.getElementById('e').value,
//     p: document.getElementById('p').value
//   },
//   function(data, response){
//     if(response=="login_failed"){
//       alert_user("Login unsuccessful. Please try again.");
//     }
//     else{
//       window.location = " index.php?u="+response;
//     }
//   }, "text");
// }
</script>






      
    </head>
    <body  style="background-color: #fff;  ">

 <header>
      <?php include_once("menu.php");?>
    </header>

        



<div  class="form"  style="max-width: 320px;border-radius: 0px; margin: 20px auto; font-family: 'Abel', sans-serif;  "   >
            <ul class="tab-group">
                <li class="tab active">
                    <a style="padding: 10px;" href="#login">Insider</a>
                   
                </li>

                <li class="tab">
                     <a style="padding: 10px;" href="#signup">New Here</a>
                </li>
            </ul>

            <div class="tab-content">


                <div id="login">
                    <h1 style="font-family: 'Abel', sans-serif;">
                        Welcome Back!
                    </h1>

                    <form id="loginform" onsubmit="return false;" style="margin: 15% 0% 0% 0%;">
                        <div class="field-wrap">
                            <label>Email Address<span class="req">*</span></label> <input autocomplete="off" required="required" type="email" id="email" onfocus="emptyElement('status')" maxlength="88">
                        </div>

                        <div class="field-wrap">
                            <label>Password<span class="req">*</span></label> <input autocomplete="off" required="required" type="password" id="password" onfocus="emptyElement('status')" maxlength="100">
                        </div>

                        <p class="forgot">
                            <a href="forgot_pass.php">Forgot Password?</a>
                        </p>
                        <button style="width: 50%; margin: 0% 0% 0% 50%; padding: 10px 0; font-size: 110%" class="button button-block" name="submit" id="loginbtn" onclick="login()">Log In</button>
                        <p style="align-content: center;text-align: center;font-size: 130%;color: #fff;" id="status"></p>
                    </form>
                </div>



                <div id="signup">
                    <h1 style="font-family: 'Abel', sans-serif;">
                        Sign Up for Free
                    </h1>

                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" style="margin: 15% 0% 0% 0%;"  >
                        <div class="">
                            <div class="field-wrap">
                                <label>Name<span class="req">*</span></label> <input autocomplete="off" type="text" name="username" required="required" id="username">
                            </div>

                        </div>

                        <div class="field-wrap">
                            <label>Email Address<span class="req">*</span></label> <input autocomplete="off" type="email" name="email"  required="required">
                        </div>

                        <div class="field-wrap">
                            <label>Set A Password<span class="req">*</span></label> <input autocomplete="off" type="password" name="password"  required="required">
                        </div>
                        <button style="width: 50%; margin: 0% 0% 0% 50%; padding: 10px 0;font-size: 110%;" class="button button-block" type="submit" name="signup" value="signup" >Get Started</button>
                    </form>
                </div>

                
            </div>
            <!-- tab-content -->
        </div>
        <!-- /form -->



        






<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->

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


  

  <footer style="margin: 0% 0% 10% 0%">
    <?php include_once("footer0.php");?>
  </footer>





    </body>
</html>