<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/login-check.php';
require_once($_SERVER['DOCUMENT_ROOT']."/classes/db.class.php");
$dbConnect=new dbConnect();
$enqId=@$_GET['id'];
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
$query="SELECT * FROM architecture_enquiries WHERE enqId='".$dbConnect->conn->real_escape_string($enqId)."'";
$result=$dbConnect->conn->query($query);
if(mysqli_num_rows($result)>0) {
  $result=$result->fetch_object();
} else {
  header("Location:order-completed.php");
}



//$query="SELECT * FROM architecture_enquiries WHERE enqId='".$dbConnect->conn->real_escape_string($enqId)."'";

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Dezinebox – “your dream space, at your own pace” | a unique online architectural and Interior Design service provider empowering you to decor your own space | Get your Box today|</title>
  <meta name="description" content="">
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
   <script type="text/javascript" src="backfix.min.js"></script>

<script type="text/javascript">
  bajb_backdetect.OnBack = function()
  {
    alert("Press the back button once again to go back .\nIf you go back all your changes might be lost..!");
  }
  </script>
  <style type="text/css">
  .myTable {
    color: #333;
    max-width: 500px;
    margin: 50px auto;
  }
  .myTable td {
    text-align: left;
  }
  </style>

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

  
       <?php include_once 'menu-includes.php';?>



  <!-- ========== Hero Cover ========== -->



  <!-- ========== Services ========== -->
  <?php if($result->selectedArea == "5000+" ){ ?>
  <div class="gray-bg">
    <section id="services" class="container ft-cards">
      <div class="row section">

        <header class="sec-heading"><BR><BR>
          <h2>Select your Box</h2><BR><BR>
          <form name="archChooseBox" action="free.php" method="post">
            <input type="hidden" name="enqId" value="<?php echo $enqId;?>"/>
            <!-- Item 1 -->
<label class="col-lg-4 col-md-6 mb-sm-50 portfolio-item" style="width: 25.5%; margin-left:8%; margin-right:2%">     <h4>Terra</h4> <br><div href="payment.html">
                <div class="ft-item wow fadeInUpp-wrapper hover-default" data-wow-duration="1s" >
                  <img src="images/fire.png" style="width: 55px; height: 55px; margin-left: auto;margin-right: auto;display: block;"> <br><br><br><br><br><br>
              
                  <div class="p-hover">
                    <div class="p-content">
                   <h5 style="color: #FF5100;">

      • Detailed Drawings <br>
      •    3D Drawing <br>
      •    e-Shopping list  <br>
      •    Estimate <br>
      •    Project Map <br>
      •    Design Checklist<br>
      •    Design Tips<br> <br>
</h5>
                     
                    </div>
                  </div>
             
                </div>     </div>
                <input type="radio" name="boxTypeId" value="3"/ style="display: none;">
              </label>

              <!-- Item 2 -->
              <label class="col-lg-4 col-md-6 mb-sm-50 portfolio-item" style="width: 25.5%; margin-left:2%; margin-right:2%">  <h4>Zephyr</h4><br> <div>
                <div class="ft-item wow fadeInUpp-wrapper hover-default" data-wow-duration="1s" data-wow-delay=".6s">
                 <img src="images/space.png" style="width: 55px; height: 55px; margin-left: auto;margin-right: auto;display: block;">
                 
                    <br><br><br><br><br><br>
            <div class="p-hover">
                    <div class="p-content">
<h5 style="color: #FF5100;">

      •    Detailed Drawings <br>
      •    3D Drawing <br>
      •    e-Shopping list  <br>
      •    Estimate <br>
      •    Project Map <br>
      •    Design Checklist<br>
      •    Design Tips <BR>

      <font color="#FFF">•  One Revision </font>
</h5>
                     
                    </div>
                  </div>
                </div> </div>
                <input type="radio" name="boxTypeId" value="4"/ style="display: none;">
              </label>

              <!-- Item 3 -->
              <label class="col-lg-4 col-md-6 mb-sm-50 portfolio-item" style="width: 25.5%; margin-left:2%; margin-right:2%"> <h4>Ether</h4><br><div>
                 <div class="ft-item wow fadeInUpp-wrapper hover-default" data-wow-duration="1s" data-wow-delay=".3s">
                  <img src="images/earth.png" style="width: 55px; height: 55px; margin-left: auto;margin-right: auto;display: block;">
                  
                   
                   <br><br><br><br><br><br>
                   <div class="p-hover">
                    <div class="p-content">
                     <h5 style="color: #FF5100;">•  Traditional & <br> &nbsp  Personalized <br> &nbsp Consultancy<br> &nbsp Services<br>
•         Consultation from <br> &nbsp DeZine Partners <br> <br><br>


</h5>
                     
                    </div>
                  </div>
                </div></div>
                <input type="radio" name="boxTypeId" value="5"/ style="display: none;">
              </label>          </form>
         
        </div><!-- / .row -->
        <div style="height:250px"></div>
      </section>
    </div><!-- / .gray-bg -->


<?php }else{

  ?>
  <div class="gray-bg">
    <section id="services" class="container ft-cards">
      <div class="row section">

        <header class="sec-heading"><BR><BR>
          <h2>Select your Box</h2><BR><BR>
          <form name="archChooseBox" action="validate.php?task=submit_arch_box" method="post">
            <input type="hidden" name="enqId" value="<?php echo $enqId;?>"/>
            <!-- Item 1 -->
<label class="col-lg-4 col-md-6 mb-sm-50 portfolio-item" style="width: 25.5%; margin-left:8%; margin-right:2%">     <h4>Terra</h4> <br><div href="payment.html">
                <div class="ft-item wow fadeInUpp-wrapper hover-default" data-wow-duration="1s" >
                  <img src="images/fire.png" style="width: 55px; height: 55px; margin-left: auto;margin-right: auto;display: block;"> <br><br><br><br><br><br>
              
                  <div class="p-hover">
                    <div class="p-content">
                   <h5 style="color: #FF5100;">

      • Detailed Drawings <br>
      •    3D Drawing <br>
      •    e-Shopping list  <br>
      •    Estimate <br>
      •    Project Map <br>
      •    Design Checklist<br>
      •    Design Tips<br> <br>
</h5>
                     
                    </div>
                  </div>
             
                </div>     </div>
                <input type="radio" name="boxTypeId" value="3"/ style="display: none;">
              </label>

              <!-- Item 2 -->
              <label class="col-lg-4 col-md-6 mb-sm-50 portfolio-item" style="width: 25.5%; margin-left:2%; margin-right:2%">  <h4>Zephyr</h4><br> <div>
                <div class="ft-item wow fadeInUpp-wrapper hover-default" data-wow-duration="1s" data-wow-delay=".6s">
                 <img src="images/space.png" style="width: 55px; height: 55px; margin-left: auto;margin-right: auto;display: block;">
                 
                    <br><br><br><br><br><br>
            <div class="p-hover">
                    <div class="p-content">
<h5 style="color: #FF5100;">

      •    Detailed Drawings <br>
      •    3D Drawing <br>
      •    e-Shopping list  <br>
      •    Estimate <br>
      •    Project Map <br>
      •    Design Checklist<br>
      •    Design Tips <BR>

      <font color="#FFF">•  One Revision </font>
</h5>
                     
                    </div>
                  </div>
                </div> </div>
                <input type="radio" name="boxTypeId" value="4"/ style="display: none;">
              </label>

              <!-- Item 3 -->
              <label class="col-lg-4 col-md-6 mb-sm-50 portfolio-item" style="width: 25.5%; margin-left:2%; margin-right:2%"> <h4>Ether</h4><br><div>
                 <div class="ft-item wow fadeInUpp-wrapper hover-default" data-wow-duration="1s" data-wow-delay=".3s">
                  <img src="images/earth.png" style="width: 55px; height: 55px; margin-left: auto;margin-right: auto;display: block;">
                  
                   
                   <br><br><br><br><br><br>
                   <div class="p-hover">
                    <div class="p-content">
                     <h5 style="color: #FF5100;">•  Traditional & <br> &nbsp  Personalized <br> &nbsp Consultancy<br> &nbsp Services<br>
•         Consultation from <br> &nbsp DeZine Partners <br> <br><br>


</h5>
                     
                    </div>
                  </div>
                </div></div>
                <input type="radio" name="boxTypeId" value="5"/ style="display: none;">
              </label>          </form>
         
        </div><!-- / .row -->
        <div style="height:250px"></div>
      </section>
    </div><!-- / .gray-bg -->

  <?php

}

?>    


    
    


    
    


    

    



    
    


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
      <script type="text/javascript">
      $("[name='boxTypeId']").change(function() {
        $(this).closest("form").submit();
      });
      </script>
    </body>


    </html>
