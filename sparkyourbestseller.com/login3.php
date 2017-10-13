<?php include 'analyticstracking.php' ?>






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
    echo "login_failed";
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
      echo "login_failed";
            exit();
    } else {
        
      // CREATE THEIR SESSIONS AND COOKIES
    $_SESSION['email'] = $e;
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



<!-- signup start -->
<?php



    // $con=mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
     
    // if (mysqli_connect_errno()) {
    //     throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
    // }

    if(isset($_POST['signup'])) {
       $con=mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");

        
        if (mysqli_connect_errno()) {
            throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
        }


          //mysql_select_db("test", $con);

        $username=$_POST['username'];
        $email=$_POST['email'];

        $password=$_POST['password'];
        $password1=md5($password);

        $run=mysqli_query($con, "SELECT * from users where email='$email'");
        if(mysqli_num_rows($run)>0)
        {
         echo '<script>alert("Email already register...Please enter other one..!")</script>';

        } 
        else{
           mysqli_query($con, "INSERT INTO users(username,password,email) VALUES ('$username','$password1','$email')");
          echo '<script>alert("Thank You for Signing Up")</script>';
          // echo "<meta http-equiv='refresh' content='0'>";
        }
          // require_once("PHPMailer/PHPMailerAutoload.php");
            
          //  $mail=new PHPMailer();
          //  $mail->IsSMTP();
          //  $mail->SMTPDebug=false;
          //  $mail->SMTPAuth=true;
          //  $mail->SMTPSecure = 'ssl';
          //  $mail->Host ="smtp.gmail.com";
          //  $mail->Port =465;

          //  $mail->Username ="sparkyourbestseller@gmail.com";                 // SMTP username
          //  $mail->Password ="Spark@1(($";                           // SMTP password
          //  $mail->SetFrom("sparkyourbestseller@gmail.com");
          //  $mail->AddAddress($email);
          //  $mail->Subject="Welcome to Spark Your BestSeller ";
          //  $mail->Body='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>';
          //  $mail->IsHTML(true);
          //  $mail->send();
          //  //  echo "success";
          //    exit();


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






// var e = _("email").value;
//   var p = _("password").value;
//   if(e == "" || p == ""){
//     _("status").innerHTML = "Fill out all of the form data";
//   } else {
//     _("loginbtn").style.display = "none";
//     _("status").innerHTML = 'please wait ...';
//     var ajax = ajaxObj("POST", "login0.php");
//         ajax.onreadystatechange = function() {
//           if(ajaxReturn(ajax) == true) {
//               if(ajax.responseText == "login_failed"){
//           _("status").innerHTML = "Login unsuccessful, please try again.";
//           _("loginbtn").style.display = "block";
//         } else {
//           window.location = "index.php?u="+ajax.responseText;
//         }
//           }
//         }
//         ajax.send("e="+e+"&p="+p);
//   }



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



// This will print user's real IP Address
// does't matter if user using proxy or not.




  // FORM DATA ERROR HANDLING
  if($e == "" || $p == ""){
    // echo "login_failed";
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
      // echo "login_failed";
            exit();
    } else {
        session_start();
      // CREATE THEIR SESSIONS AND COOKIES
        $_SESSION['email'] = $e;
      $_SESSION['userid'] = $db_id;
      $_SESSION['username'] = $db_username;
      $_SESSION['password'] = $db_pass_str;
        setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
        setcookie("user", $db_username, strtotime( '+30 days' ), "/", "", "", TRUE);
        setcookie("pass", $db_pass_str, strtotime( '+30 days' ), "/", "", "", TRUE); 
      // UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
      $sql = "UPDATE users SET ip='$ip', lastlogin=now() WHERE username='$db_username' LIMIT 1";
            $query = mysqli_query($db_conx, $sql);
      // echo "username=".$db_username;

// echo '<script>window.location("index.php?u="+.$db_username.)</script>'
header("Location: index.php");


        exit();
    }
  }
  exit();
















        // echo "<meta http-equiv='refresh' content='0'>";

        mysqli_close($con);

    


}


    
?>
<!-- signupend -->










<!DOCTYPE html>
<html>
    <head>


        <title>
            Login - SignUp | SparkYourBestseller
        </title>
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


<!-- <script src="js/main.js"></script>
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
    _("loginbtn").style.display = "none";
    _("status").innerHTML = 'please wait ...';
    var ajax = ajaxObj("POST", "login2.php");
        ajax.onreadystatechange = function() {
          if(ajaxReturn(ajax) == true) {
              if(ajax.responseText == "login_failed"){
          _("status").innerHTML = "Login unsucessful, please try again.";
          _("loginbtn").style.display = "block";
        } else {
          window.location = "index.php?u="+ajax.responseText;
        }
          }
        }
        ajax.send("e="+e+"&p="+p);
  }
}
</script>

 -->





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
    _("loginbtn").style.display = "none";
    _("status").innerHTML = 'please wait ...';
    var ajax = ajaxObj("POST", "login0.php");
        ajax.onreadystatechange = function() {
          if(ajaxReturn(ajax) == true) {
              if(ajax.responseText == "login_failed"){
          _("status").innerHTML = "Login unsuccessful, please try again.";
          _("loginbtn").style.display = "block";
        } else {
          window.location = "index.php?u="+ajax.responseText;
        }
          }
        }
        ajax.send("e="+e+"&p="+p);
  }
}
</script>









      
    </head>
    <body  style="background-color: #fff;  ">

 <header>
      <?php include_once("menu.php");?>
    </header>

        



<div  class="form"  style="max-width: 400px;border-radius: 0px; margin: 20px auto; font-family: dejavu;  "   >
            <ul class="tab-group">
                <li class="tab active">
                    <a href="#login">Log In</a>
                   
                </li>

                <li class="tab">
                     <a href="#signup">Sign Up</a>
                </li>
            </ul>

            <div class="tab-content">


                <div id="login">
                    <h1 style="font-family: dejavu_extralight;">
                        Welcome Back!
                    </h1>

                    <form id="loginform" onsubmit="return false;" style="margin: 15% 0% 0% 0%;">
                        <div class="field-wrap">
                            <label>Email Address<span class="req">*</span></label> <input autocomplete="on" required="required" type="email" id="email" onfocus="emptyElement('status')" maxlength="88">
                        </div>

                        <div class="field-wrap">
                            <label>Password<span class="req">*</span></label> <input autocomplete="on" required="required"" type="password" id="password" onfocus="emptyElement('status')" maxlength="100">
                        </div>

                        <p class="forgot">
                            <a href="#">Forgot Password?</a>
                        </p>
                        <button class="button button-block"  name="submit" id="loginbtn" onclick="login()"  >Log In</button>
                        <p style="align-content: center;text-align: center;font-size: 130%;color: #fff;" id="status"></p>
                    </form>
                </div>



                <div id="signup">
                    <h1 style="font-family: dejavu_extralight;">
                        Sign Up for Free
                    </h1>

                    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" style="margin: 15% 0% 0% 0%;"  >
                        <div class="">
                            <div class="field-wrap">
                                <label>Name<span class="req">*</span></label> <input autocomplete="on" type="text" name="username" required="required">
                            </div>

                            <!-- <div class="field-wrap">
                                <label>Last Name<span class="req">*</span></label> <input autocomplete="on" required="" type="text">
                            </div> -->
                        </div>

                        <div class="field-wrap">
                            <label>Email Address<span class="req">*</span></label> <input autocomplete="on" type="email" name="email"  required="required">
                        </div>

                        <div class="field-wrap">
                            <label>Set A Password<span class="req">*</span></label> <input autocomplete="on" type="password" name="password"  required="required">
                        </div>
                        <button class="button button-block" type="submit" name="signup" value="signup" >Get Started</button>
                    </form>
                </div>

                
            </div>
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