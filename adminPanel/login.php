<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from colorlib.com/polygon/gentelella/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 08:19:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="loginForm" action="validate.php?task=login" method="post">
          <div class="panel-heading">
                    <img src="/assets/images/logo.png" class="img-responsive"/ style="margin-right: auto; margin-left: auto;">
                </div><br><br>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
               <div class="form-group">
                        <div class="checkbox">
                            <label><input type="checkbox" name="keepLogin" value="1"/>Keep me logged in</label>
                        </div>
                    </div>
              <div>
             <button type="submit" class="btn btn-primary">Log in </button>
              
              </div>

              <div class="clearfix"></div>

              <div class="separator">
               

                <div class="clearfix"></div>
                <br />

                <div>
                  
                  <p>©2017 All Rights Reserved. <a href="qleverlabs.com">Qleverlabs</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      
      </div>
    </div>
    
  <?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/scripts.php";?>
      <script type="text/javascript" src="js/login.js"></script>
  </body>

<!-- Mirrored from colorlib.com/polygon/gentelella/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 08:19:49 GMT -->
</html>
