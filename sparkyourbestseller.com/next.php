<?php
$db_conx = mysqli_connect("localhost", "root", "", "spark");
session_start();
$u=$_GET['u'];
$tempPass=$_GET['p'];
session_start();
$e=$_GET['e'];
$_SESSION['email']=$e;

//echo $_SESSION['email'];
//echo $u.'<br>';
//echo $hashTempPass;
	if(isset($_POST['submit']))
	{
		$u=$_GET['u'];
		$tempPass=$_GET['p'];
		$tpass=$_POST['tpass'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		$encrypt_password=md5($password);
		$encrypt_password1=md5($cpassword);
        $tpass1=md5($tpass);
		//echo $encrypt_password;
		//echo '<br>';
		//echo $encrypt_password1;
		//echo $hashTempPass;
		if($tempPass == $tpass1)
		{
		if($password == $cpassword)
		{
			mysqli_query($db_conx,"UPDATE users SET password='$encrypt_password' WHERE username='$u' and email='$e'");
      $alert_user =11;
			// echo "<script type='text/javascript'>alert('Your Password has been updated!')</script>";
      // sleep(10);
			header("Refresh:2;url=login4.php");
		}
		else
		{
			echo "<script type='text/javascript'>alert('Passwords are not same!')</script>";
		}
	}
		else{
			echo "<script type='text/javascript'>alert('Temporary Passwords are not same!')</script>";
		}
}
?>













<!DOCTYPE html>
<html>
    <head>
    <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
    <meta name="author" content="#Sparkyourbestseller">
        <title>
           Change Password | SparkYourBestseller
        </title>

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

      if(<?php echo $alert_user ?>==11){
        $(document).ready(function(){
          alert_user('Your Password has been successfully changed. Please Login to continue');
        })
      }
     
    </script>



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
                    color: #1ab188;
                    -webkit-transition: .5s ease;
                    transition: .5s ease;
                   }
                   a:hover {
                    color: #179b77;
                   }

                   .form {
                    background: #203864;
/*                    background: rgba(19, 35, 47, 0.9);*/
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
                    /*height: 100%;*/
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
                    border-color: #017eff;
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
                   .button:hover, .button:focus {
                    background: #017eff;
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

        



<div  class="form"  style="max-width: 400px;border-radius: 0px; margin: 20px auto;font-family: 'Abel', sans-serif; "   >
          


                <div id="login">
                    <h1 style="font-family: 'Abel', sans-serif;">
                       Change Password
                    </h1>

                    <form id="loginform" method="post" action="next.php?u=<?php echo $u;?>&e=<?php echo $e;?>&p=<?php echo $tempPass;?>" style="margin: 15% 0% 0% 0%;">
                        <div class="field-wrap">
                            <label>Enter Temp Password: <span class="req">*</span></label> <input autocomplete="on" required="required" type="password" id="email" name="tpass" onfocus="emptyElement('status')" maxlength="88">
                        </div>

                        <div class="field-wrap">
                            <label>Enter Password<span class="req">*</span></label> <input autocomplete="on" required="required" type="password" id="password" name="password" onfocus="emptyElement('status')" maxlength="100">
                        </div>

                        <div class="field-wrap">
                            <label>Re-Enter the Password<span class="req">*</span></label> <input autocomplete="on" required="required" type="password" id="cpassword" name="cpassword"  onfocus="emptyElement('status')" maxlength="100">
                        </div>

<!--
                        <p class="forgot">
                            <a href="login4.php">Login!</a>
                        </p>
-->
                        <button class="button button-block"  name="submit" id="loginbtn"  >Change Password</button>
                        <!-- <p style="align-content: center;text-align: center;font-size: 130%;color: #fff;" id="status"></p> -->
                    </form>
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