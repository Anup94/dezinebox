<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/login-check.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/classes/db.class.php");
$dbConnect=new dbConnect();
$categoryArr=array();
$constTypeArr=array();
$query="SELECT * FROM design_categories";
$result=$dbConnect->conn->query($query);
if(mysqli_num_rows($result)>0) {
  foreach ($result as $row) {
    $categoryArr[$row['categoryId']]=$row;
  }
}

$query="SELECT * FROM construction_types";
$result=$dbConnect->conn->query($query);
if(mysqli_num_rows($result)>0) {
  foreach ($result as $row) {
    $constTypeArr[$row['constTypeId']]=$row;
  }
}


$categoryId=@$_GET['categoryId'];
$constTypeId=@$_GET['constTypeId'];
$categoryOption=@$_GET['categoryOption'];
$subCategoryOption=@$_GET['subCategoryOption'];
if(empty($categoryArr[$categoryId])) {
  $categoryId=NULL;
}
if(empty($constTypeArr[$constTypeId])) {
  $constTypeId=NULL;
}
?>
<!doctype html>
<html class="no-js" lang="en">
 
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dezinebox – “your dream space, at your own pace” | a unique online architectural and Interior Design service provider empowering you to decor your own space | Get your Box today|</title>
                <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/vidbck.css" rel="stylesheet" type="text/css">
        
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
        <link rel="stylesheet" href="assets/styles/main3.css">
        <link rel="stylesheet" href="assets/styles/responsive.css">

        <!-- JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <script type="text/javascript" src="backfix.min.js"></script>

<script type="text/javascript">
	bajb_backdetect.OnBack = function()
	{
		alert("Press the back button once again to go back .\nIf you go back all your changes might be lost..!");
	}
	</script>
    </head>
    <style>
    h2{
    	text-transform: none;
    }
    </style>
  


        <!-- ========== Preloader ========== -->

<body id="page-top">


        <div class="preloader">
          <img src="assets/images/loader.svg" alt="Loading...">
        </div>


        
        <!-- ========== Navigation ========== -->

       <?php include_once 'menu-includes.php';?>

        <!-- ========== Hero Cover ========== -->



        <!-- ========== Services ========== -->

        <div class="">
          <section id="services" class="container ft-cards">
            <div class="row section">

              <header class="sec-heading"> <br>
              <?php if((!empty($categoryId)) && !empty($constTypeId) && !empty($categoryOption)  && !empty($subCategoryOption) ) { 
		             echo "<h2>Fill the form </h2> <br>";
		         }
		         else if((!empty($categoryId)) && !empty($constTypeId) && !empty($categoryOption)) { 
		             echo "<h2>Select A Theme Of Your Choice </h2> <br>";
		         }
		         else if((!empty($categoryId=='2')) && !empty($constTypeId=='1')) { 
		             echo "<h2>Select Your  Room/s </h2> <br>";
		         }
		         
		           else if((!empty($categoryId)) && !empty($constTypeId)) { 
		             echo "<h2>Select Your Sub Category </h2> <br>";
		         }
		           else if(!empty($categoryId)) { 
		             echo "<h2>Select Your  Category </h2> <br>";
		         }
		         else
		         {
		         	 echo "<h2>Get Your Box</h2><br>";

		         }




		         ?>
              
              </header>
              <?php if(empty($categoryId)):?> <!-- category if -->
                <?php include_once 'includes/tmpl/category-list.php';?>
              <?php else:?>
              <?php if(empty($constTypeId)): 
                 if($categoryId=='1'):
                  include_once 'includes/tmpl/architecture-const-types.php';
                else:
                  include_once 'includes/tmpl/interior-const-types.php';
                endif;
              else:
                if($categoryId=='1') {
                  if(empty($categoryOption)) {
                    if($constTypeId=='1') {
                      include_once 'includes/tmpl/architecture/residential.php';
                    } else if($constTypeId=='2') {
                      include_once 'includes/tmpl/architecture/commercial.php';
                    } else if($constTypeId=='3') {
                      include_once 'includes/tmpl/architecture/hospitality.php';
                    } else {
                      include_once 'includes/tmpl/architecture/institutional.php';
                    }
                  }
                  else if(empty($subCategoryOption)) {
                    ?>
                    <style type="text/css">
                    .divSeparator {
                      display: none;
                    }


                    </style>
                    <?php
                    if($constTypeId=='1') {
                        include_once 'includes/tmpl/architecture/themes/residential.php';
                      } else if($constTypeId=='2') {
                        include_once 'includes/tmpl/architecture/themes/commercial.php';
                      } else if($constTypeId=='3') {
                        include_once 'includes/tmpl/architecture/themes/hospitality.php';
                      } else {
                        include_once 'includes/tmpl/architecture/themes/institutional.php';
                      }
                  } else {
                    include_once 'includes/tmpl/architecture/enquiry2.php';
                  }
                } else {
                  //interior  
                  if(empty($categoryOption)) {
                      if($constTypeId=='1') {
                        include_once 'includes/tmpl/interior/residential.php';
                      } else if($constTypeId=='2') {
                        include_once 'includes/tmpl/interior/commercial.php';
                      } else if($constTypeId=='3') {
                        include_once 'includes/tmpl/interior/hospitality.php';
                      } else {
                        include_once 'includes/tmpl/interior/institutional.php';
                      }
                  } else if(empty($subCategoryOption)) {
                    ?>
                    <style type="text/css">
                    .divSeparator {
                      display: none;
                    }
                    </style>
                    <?php
                    if($constTypeId=='1') {
                        include_once 'includes/tmpl/interior/themes/residential.php';
                      } else if($constTypeId=='2') {
                        include_once 'includes/tmpl/interior/themes/commercial.php';
                      } else if($constTypeId=='3') {
                        include_once 'includes/tmpl/interior/themes/hospitality.php';
                      } else {
                        include_once 'includes/tmpl/interior/themes/institutional.php';
                      }
                  } else {
                    include_once 'includes/tmpl/interior/enquiry1.php';
                  }
                }
              endif;//const type end
              endif; //category end
              ?>
            </div><!-- / .row -->
            <div class="clearfix divSeparator" style="height:250px"></div>
          </section>
        </div><!-- / .gray-bg -->


        <!-- ========== Footer ========== -->
        
       <!-- ========== Footer Widgets ========== -->
        
        <footer class="footer-widgets">
        


          <!-- Copyright -->
          <div class="copyright">
            <div class="container">
              <div class="row">
                
                

             
                <div class="widget about-widget">
                  <ul class="social-links">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
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

        <!-- Google Maps 
        <script src="assets/js/gmap.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOcd7o0W0r846FC_GoHSK56xeAvP8fV4s"></script>
        -->

        <!-- Definity JS -->
        <script src="assets/js/main.js"></script>
        <script type="text/javascript"></script>
    </body>


</html>
