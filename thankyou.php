<!doctype html>
<html class="no-js" lang="en">
 
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Dezinebox – “your dream space, at your own pace” | a unique online architectural and Interior Design service provider empowering you to decor your own space | Get your Box today|</title>
        <meta name="description" content="We are world’s first online Architectural and Interior Design Solution provider which empowers you with ‘execution capabilities’ to décor your residential & commercial spaces, at your convenience & at affordable rates. We also provide an ‘Opportunity Platform’ to ‘Product' Providers’, ‘Interior Designers’ & ‘Architects’ to showcase their skills & aim to create a comprehensive ‘Design Ecosystem’ across Geographies.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="favbox.png">
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
              <a class="navbar-brand" href="home.php"><img src="assets/images/logo.png"  alt="DeZinebox"></a>
            </div><!-- / .navbar-header -->

            <!-- Navbar Links -->
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">

                <!-- Home -->
         <li class="dropdown mega-fw"><a href="home.php"><span class="linea-arrows-slim-left"></span> &nbsp    Go to the Home page</a></li>
       


      
                  <!-- / .nav .navbar-nav .navbar-right -->

            </div><!--/.navbar-collapse -->
          </div><!-- / .container -->
        </nav><!-- / .navbar -->



        <!-- ========== Services ========== -->

     

<?php

use Aws\S3\Exception\S3Exception;
		use Aws\S3\S3Client;
include('crypto.php')
?> <?php
	require 'vendor/autoload.php';
    error_reporting(0);
    require_once($_SERVER['DOCUMENT_ROOT']."/classes/db.class.php");
    $workingKey='FD31F459452C6C94CDCE55A44E071F38';     //Working Key should be provided here.
    $encResponse=$_POST["encResp"];         //This is the response sent by the CCAvenue Server
    $rcvdString=decrypt($encResponse,$workingKey);      //Crypto Decryption used as per the specified working key.
    $order_status="";
    $decryptValues=explode('&', $rcvdString);
    $dataSize=sizeof($decryptValues);
    echo "<center>";
 
    for($i = 0; $i < $dataSize; $i++) 
    {
        $information=explode('=',$decryptValues[$i]);
		if($i == 0) $id=$information[1];
        if($i==3)   $order_status=$information[1];
		if($i == 26) $boxType = $information[1];
		if($i == 27) $iora = $information[1];
		if($i == 28) $promocode = $information[1];
		if($i == 1) $tracking_id = $information[1];
		if($i == 2) $bankRefNo = $information[1];
		if($i == 5) $paymentMode = $information[1];
		if($i == 10) $amount = $information[1];
		if($i == 11) $name = $information[1];
		if($i == 12) $add = $information[1];
		if($i == 14) $state = $information[1];
		if($i == 15) $zip = $information[1];
		if($i == 17) $tel = $information[1];
		if($i == 18) $email = $information[1];
		if($i == 40) $date = $information[1];
    }
	$dbConnect=new dbConnect();
	
			$info = array();
			$key = md5(uniqid());
			$tmp_file_name = "classes/uploads/$key.html";
			$myfile = fopen($tmp_file_name,"w");
			 for($i = 0; $i < $dataSize; $i++) 
			{
				$information=explode('=',$decryptValues[$i]);
					
					$info[$i] = urldecode($information[1]);
					
			}
	
			
			$txt = "
			
			<html>
<head><title>Order Details</title>

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
       
    </head>
    <body id='page-top' style='color:black'>

              <div class='col-lg-3'></div>
              <div class='col-lg-6 col-md-6 mb-sm-50'>
               <h2 style='text-align: center;'>BILL SUMMARY</h2><br>
             
                <table class='table' style='text-align: center;'>
                  <thead>
                   
                  </thead>
                  <tbody>
				   <tr><td>Order ID</td><td>$info[0]</td></tr>
                    <tr><td>Tracking ID</td><td>$info[1]</td></tr>
                    <tr><td>Bank Reference Number</td><td>$info[2]</td></tr>
					<tr><td>Promo Code</td><td>$info[28]</td></tr>
                    <tr><td>Order Status</td><td>$info[3]</td></tr>
                    <tr><td>Failure Message</td><td>$info[4]</td></tr>
                    <tr><td>Payment Mode</td><td>$info[5]</td></tr>
                    <tr><td>Card Name</td><td>$info[6]</td></tr>
                    <tr><td>Status Code</td><td>$info[7]</td></tr>
                    <tr><td>Status Message</td><td>$info[8]</td></tr>
                    <tr><td>Box Type</td><td>$info[26]</td></tr>
                    <tr><td>Category</td><td>$info[27]</td></tr>
                    <tr><td>Currency</td><td>$info[9]</td></tr>
                    <tr><td>Amount</td><td>$info[10]</td></tr>
                    <tr><td>Billing Name</td><td>$info[11]</td></tr>
                    <tr><td>Billing Address</td><td>$info[12]</td></tr>
					<tr><td>Billing City</td><td>$info[13]</td></tr>
                    <tr><td>Billing State</td><td>$info[14]</td></tr>
                    <tr><td>Billing Zip Code</td><td>$info[15]</td></tr>
                    <tr><td>Billing Country</td><td>$info[16]</td></tr>
                    <tr><td>Billing Telephone</td><td>$info[17]</td></tr>
                    <tr><td>Email</td><td>$info[18]</td></tr>
                     <tr><td>Delivery Name</td><td>$info[19]</td></tr>
                    <tr><td>Delivery Address</td><td>$info[20]</td></tr>
					<tr><td>Delivery City</td><td>$info[21]</td></tr>
                    <tr><td>Delivery State</td><td>$info[22]</td></tr>
                    <tr><td>Delivery Zip Code</td><td>$info[23]</td></tr>
                    <tr><td>Delivery Country</td><td>$info[24]</td></tr>
                    <tr><td>Delivery Telephone</td><td>$info[25]</td></tr>
                    <tr><td>Vault</td><td>$info[31]</td></tr>
                    <tr><td>Offer Type</td><td>$info[32]</td></tr>
                    <tr><td>Offer Code</td><td>$info[33]</td></tr>
                    <tr><td>Discount Value</td><td>$info[34]</td></tr>
                    <tr><td>Merchant Amount</td><td>$info[35]</td></tr>
                    <tr><td>ECI Value</td><td>$info[36]</td></tr>
                    <tr><td>Retry</td><td>$info[37]</td></tr>
                    <tr><td>Response Code</td><td>$info[38]</td></tr>
                    <tr><td>Billing Notes</td><td>$info[39]</td></tr>
                    <tr><td>Date</td><td>$info[40]</td></tr>
                    <tr><td>Country</td><td>$info[41]</td></tr>
</tbody>
                </table><!-- / .table -->
           
              </div>
</body>
</html>
			
			";
			
			
			
			
			
	
	
	
	
			fwrite($myfile, $txt);
			fclose($myfile);


			
			$s3 = S3Client::factory([
    		'version'=>'latest',
			'region' => "ap-south-1",
			'credentials' => [
        'key'    => 'AKIAI3DLLJVA7SQSAIPQ',
        'secret' => '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',
			],
		'endpoint' => 'https://s3.ap-south-1.amazonaws.com',
		'signature' => 'v4'
    
			]);		
			
			$link = 'https://s3.ap-south-1.amazonaws.com/dezinebox/uploads/'.$key.'.html';
			
				$s3->putObject(array(
					
					'Bucket'=> 'dezinebox',
					'Key'=> "uploads/$key.html",
					'Body' => fopen($tmp_file_name, "rb"),
					'ACL' => 'public-read'
				));
				//$s3->setEnd
				unlink($tmp_file_name);
				
				
	
	
	
	
	
	
    if($order_status==="Success")
    {	
		
		if($promocode != ""){
		$query = "SELECT * FROM coupons WHERE couponCode= '$promocode'";
		$result=$dbConnect->conn->query($query);
		$result=$result->fetch_object();
		
		
		if($result->usageTimes == 1){
			echo "$promocode";
			$query = "DELETE FROM coupons WHERE couponCode= '$promocode'";
			$result=$dbConnect->conn->query($query);
			
		}else{
			echo "$promocode";
			$t = $result->usageTimes;
			echo $t;
			$t = $t-1;
			echo $t;
			$query = "UPDATE coupons SET usageTimes=$t WHERE couponCode= '$promocode'";
			$result=$dbConnect->conn->query($query);
		}
		
		
		}
		
		
		if($iora == 'i'){
			$query = "UPDATE interior_enquiries SET Paid= 'YES', status='$order_status', payment_doc='$link' WHERE enqId='$id'";
			$result=$dbConnect->conn->query($query);
				}
				if($iora == 'a'){
					$query = "UPDATE architecture_enquiries SET Paid= 'YES', status='$order_status', payment_doc='$link' WHERE enqId='$id'";
			$result=$dbConnect->conn->query($query);
					
				}
		
		
		?>
		
            <div class="row section">

              <header class="sec-heading">
              <img src="img/tick.png" style="width:230px;">
                <h2>Payment Successful</h2>
               <h4>DeZineBox.io will contact you shortly.</h4>
              </header>
              
              <!-- Item 1 -->
        <br><br> <br><br>
                </div>
              </div>
              <!-- Item 2 -->
              

            </div>


		
        <?php
    }
 
 
 
  else if($order_status==="Failure")
    {
		
		
			if($iora == 'i'){
			$query = "UPDATE interior_enquiries SET Paid= 'NO', status='$order_status', payment_doc='$link' WHERE enqId='$id'";
			$result=$dbConnect->conn->query($query);
				}
				if($iora == 'a'){
					$query = "UPDATE architecture_enquiries SET Paid= 'NO', status='$order_status', payment_doc='$link' WHERE enqId='$id'";
			$result=$dbConnect->conn->query($query);
					
				}
		
		
		
		?>
       <div class="row section">

              <header class="sec-heading">
              <img src="img/cross.png" style="width:230px;">
                <h2>Payment Unsuccessful</h2>
               <h4>Your order could not be placed.</h4>
              </header>
              
              <!-- Item 1 -->
        <br><br> <br><br>
                </div>
              </div>
              <!-- Item 2 -->
              

            </div>

		
		<?php
    }
	
	
	
    echo "<br><br>";
 
 
	
    echo "<table cellspacing=4 cellpadding=4>";
   
 
    echo "</table><br>";
    echo "</center>";
?>
 <div class="gray-bg">
          <section id="services" class="container ft-cards">
            <div class="row section">
 <br> <br> 
              <header class="sec-heading">
                <h2>Bill Summary</h2>
        
              </header>
              
              <!-- Item 1 -->
              <div class="col-lg-2"></div>
              <div class="col-lg-8 col-md-6 mb-sm-50" style="margin:auto;">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                 <div class="table-responsive">
                <table class="table" style= "color: black";>
                  <thead>
                   
                  </thead>
                  <tbody>
				  <?php
						
						if($iora == "a") $category = "Architecture";
						if($iora == "i") $category = "Interior";
						
				  echo"
                    <tr><td>Order ID</td><td>$id</td></tr>
                    <tr><td>Tracking ID</td><td>$tracking_id</td></tr>
                    <tr><td>Bank Reference Number</td><td>$bankRefNo</td></tr>
                    <tr><td>Order Status</td><td>$order_status</td></tr>
					<tr><td>Promo Code</td><td>$promocode</td></tr>
                    <tr><td>Payment Mode</td><td>$paymentMode</td></tr>
                    <tr><td>Box Type</td><td>$boxType</td></tr>
                    <tr><td>Category</td><td>$category</td></tr>
                    <tr><td>Amount</td><td>$amount</td></tr>
                    <tr><td>Billing Name</td><td>$name</td></tr>
                    <tr><td>Billing Address</td><td>$add</td></tr>
                    <tr><td>Billing State</td><td>$state</td></tr>
                    <tr><td>Zip Code</td><td>$zip</td></tr>
                    <tr><td>Telephone</td><td>$tel</td></tr>
                    <tr><td>Email</td><td>$email</td></tr>
                    <tr><td>Date</td><td>$date</td></tr>

						" ?>

                  </tbody>
                </table><!-- / .table -->
              </div><!-- / .table-responsive -->
                </div>
              </div>
              <!-- Item 2 -->
              

            </div><!-- / .row --><br><br><br><br><br><br>  <br><br><br>
          </section>
        </div><!-- / .gray-bg -->
        


        
       


        
        


        

        



       
       


        <!-- ========== Footer ========== -->
        
      <footer class="footer-widgets">
        


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

        <!-- Google Maps -->
        <script src="assets/js/gmap.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOcd7o0W0r846FC_GoHSK56xeAvP8fV4s"></script>

        <!-- Definity JS -->
        <script src="assets/js/main.js"></script>
    </body>


</html>
