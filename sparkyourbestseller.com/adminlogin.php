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
    $sql = "SELECT id, username, password FROM admin WHERE email='$e' LIMIT 1";
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

//      $_SESSION['userid'] = $db_id;
//      $_SESSION['email'] = $e;
//      $_SESSION['username'] = $db_username;
//      $_SESSION['password'] = $db_pass_str;
//        setcookie("id", $db_id, strtotime( '+30 days' ), "/", "", "", TRUE);
//        setcookie("email", $e, strtotime( '+30 days' ), "/", "", "", TRUE);
//        setcookie("user", $db_username, strtotime( '+30 days' ), "/", "", "", TRUE);
//        setcookie("pass", $db_pass_str, strtotime( '+30 days' ), "/", "", "", TRUE); 
//      // UPDATE THEIR "IP" AND "LASTLOGIN" FIELDS
//      $sql = "UPDATE users SET ip='$ip', lastlogin=now() WHERE username='$db_username' LIMIT 1";
//            $query = mysqli_query($db_conx, $sql);
//      echo $db_username;
//        exit();
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
          window.location = "admin/pages/index.php";
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
            </ul>

            <div class="tab-content">


                <div id="login">
                    <h1 style="font-family: 'Abel', sans-serif;">
                        Admin Login!
                    </h1>

                    <form id="loginform" onsubmit="return false;" style="margin: 15% 0% 0% 0%;">
                        <div class="field-wrap">
                            <label>Email Address<span class="req">*</span></label> <input autocomplete="off" required="required" type="email" id="email" onfocus="emptyElement('status')" maxlength="88">
                        </div>

                        <div class="field-wrap">
                            <label>Password<span class="req">*</span></label> <input autocomplete="off" required="required" type="password" id="password" onfocus="emptyElement('status')" maxlength="100">
                        </div>

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