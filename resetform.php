<?php


require_once($_SERVER['DOCUMENT_ROOT']."/classes/db.class.php");
$dbConnect=new dbConnect();

?>










<!doctype html>
<html class="no-js" lang="en">
 
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>Dezinebox – “your dream space, at your own pace” | a unique online architectural and Interior Design service provider empowering you to decor your own space | Get your Box today|</title>
        <meta name="description" content="We are world’s first online Architectural and Interior Design Solution provider which empowers you with ‘execution capabilities’ to décor your residential & commercial spaces, at your convenience & at affordable rates. We also provide an ‘Opportunity Platform’ to ‘Product' Providers’, ‘Interior Designers’ & ‘Architects’ to showcase their skills & aim to create a comprehensive ‘Design Ecosystem’ across Geographies.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/styles/vendor/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="assets/fonts/et-lineicons/css/style.css">
        <link rel="stylesheet" href="assets/fonts/linea-font/css/linea-font.css">
        <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
        <!-- Slider -->
        <link rel="stylesheet" href="assets/styles/vendor/slick.css">
        <!-- Lightbox -->
        <link rel="stylesheet" href="assets/styles/vendor/magnific-popup.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="assets/styles/vendor/animate.css">


        <!-- Definity CSS -->
        <link rel="stylesheet" href="assets/styles/main.css">
        <link rel="stylesheet" href="assets/styles/responsive.css">

        <!-- JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
		
		



    </head>
    <body id="page-top">
        <!-- Google Tag Manager -->
        <noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-MH7TSF"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-MH7TSF');</script>
       


        <!-- ========== Preloader ========== -->

        <div class="preloader">
          <img src="assets/images/loader.svg" alt="Loading...">
        </div>


        
        <!-- ========== Navigation ========== -->

           <nav class="navbar navbar-default navbar-fixed-top mega navbar-trans navbar-trans-dark trans-helper">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <!-- Logo -->
              <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png"  alt="DeZinebox"></a>
            </div><!-- / .navbar-header -->

            <!-- Navbar Links -->
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">

                <!-- Home -->
                <li class="dropdown mega-fw"><a href="index.html">Home</a></li>
          
                  <!-- / .nav .navbar-nav .navbar-right -->

            </div><!--/.navbar-collapse -->
          </div><!-- / .container -->
        </nav><!-- / .navbar -->



        <!-- ========== Hero Cover ========== -->



        <!-- ========== Services ========== -->

        <div class="gray-bg">
          <section id="services" class="container ft-cards">
            <div class="row section">
 <br> <br> 
             
              <!-- Item 1 -->
			  
			  
			  <?php
			  if(!$_GET['email']){
			?>
			
		<header class="sec-heading">
                <h2>Not Authorized</h2>
                          </header>
			<?php
			}else{
				
				$email = $_GET['email'];
			$query="SELECT * FROM users WHERE email='".$email."'";
			$result=$dbConnect->conn->query($query);
			$user=$result->fetch_object();
			if($user){
			if($user->tempResetPass == "yes"){

			  ?>
			  <header class="sec-heading">
                <h2>Submit</h2>
                          </header>
              
              <div class="col-lg-4 col-md-6 mb-sm-50" style="left: 33%;">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                  <span class="linea-basic-cards-diamonds"></span>
         			 <div class="form-group">
                 	<label for="inpt-name-forms">Enter your new password</label>
					
					<input type="hidden" id="email" value="<?php echo $_GET['email'] ?> " >
                  <input type="password" class="form-control" id="password1" >                  
                </div>
                	 <div class="form-group">
                 	<label for="inpt-name-forms">Confirm your new password</label>
                  <input type="password" class="form-control" id="password2" >                  
                </div>
                    <button class="btn-ghost" type="submit" id="bttn">NEXT</button>             
                </div>
              </div>
			  </form>
              <!-- Item 2 -->
			<?php }}else{   
			
			?>
			<header class="sec-heading">
                <h2>Link Expired</h2>
                          </header>
			<?php }}
			 ?>

            </div><!-- / .row --><br><br><br><br><br><br>  <br><br><br>
          </section>
        </div><!-- / .gray-bg -->



        


        
       


        
        


        

        



       
       


        <!-- ========== Footer ========== -->
        <footer class="footer-widgets" style="position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
 
  text-align: center;">
        


          <!-- Copyright -->
          <div class="copyright">
            <div class="container">
              <div class="row">
                
                

             
                <div class="widget about-widget">
                 
                  <ul class="social-links">
                    <li><a href="https://www.facebook.com/dezine.box"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/DezineBox"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/company-beta/17970956/"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/dezinebox/"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://plus.google.com/101485144759189925017"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div><!-- / .widget -->
      


          

              </div><!-- / .row -->
            </div><!-- / .container -->
          </div><!-- / .copyright -->

        </footer><!-- / .footer-widgets -->

     

        <!-- ========== Scripts ========== -->
		
        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/vendor/google-fonts.js"></script>
        <script src="assets/js/vendor/jquery.easing.js"></script>
        <script src="assets/js/vendor/jquery.waypoints.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/vendor/smoothscroll.js"></script>
        <script src="assets/js/vendor/jquery.localScroll.min.js"></script>
        <script src="assets/js/vendor/jquery.scrollTo.min.js"></script>
        <script src="assets/js/vendor/jquery.stellar.min.js"></script>
        <script src="assets/js/vendor/jquery.parallax.js"></script>
        <script src="assets/js/vendor/slick.min.js"></script>
        <script src="assets/js/vendor/jquery.easypiechart.min.js"></script>
        <script src="assets/js/vendor/countup.min.js"></script>
        <script src="assets/js/vendor/isotope.min.js"></script>
        <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <script src="assets/js/vendor/jquery.mb.YTPlayer.min.js"></script>
        <script src="assets/js/vendor/jquery.ajaxchimp.js"></script>
		
		
		<script>
		 $("#bttn").click(function(){
			console.log("hey"); 
			
			var pass1 = $('#password1').val();
			var pass2 = $('#password2').val(); 
			var email = $('#email').val();
			console.log(email);
			
			if(pass1== "" || pass2 == "")
				return(alert("Empty fields"));
			if(pass1 === pass2){
			if(pass1.length > 5 && pass1.length < 11){
			
			$.post("validate.php?task=in_pass",{password:pass1, email:email}, function(doc){
				console.log(doc,"Igot this");
				if(doc == "done"){
					alert("Your Password has been changed! Please click OK to log in");
					window.location.href = "/";
				}
			});
				
			}else{
				alert("password length should be more than 5 and less than 10");
				
			}
			
			}else{
			alert("Password do not match");
			}
		 });
		 
		 
		 
		 
		</script>
		
		
        <!-- Google Maps -->
        <script src="assets/js/gmap.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOcd7o0W0r846FC_GoHSK56xeAvP8fV4s"></script>

        <!-- Definity JS -->
        <script src="assets/js/main.js"></script>
    </body>


</html>
