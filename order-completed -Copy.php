<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/login-check.php';
require_once($_SERVER['DOCUMENT_ROOT']."/classes/db.class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/config-payment.php");
$PGConfig = new PGConfig();
function mailOrder($result,$constTypeArr,$boxTypeArr) {
  $to = 'orders@dezinebox.io';
  $subject = 'New Order -  Architecture - (ID : '.$result->enqId.')';
  $headers = "From: " . strip_tags('orders@dezinebox.io') . "\r\n";
  $headers .= "Reply-To: ". strip_tags('saravthedev@gmail.com') . "\r\n";
  $headers .= "CC: dezineboxindia@gmail.com,saravanan41191@gmail.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $message = '<html><body>';
  $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
  $message.="<tr style='background: #eee;'><td><strong>Category</strong></td><td>Architecture</td></tr>";
  $message.="<tr style='background: #eee;'><td><strong>Construction Type</strong></td><td>".(empty($constTypeArr[$result->constTypeId])?'':$constTypeArr[$result->constTypeId]['constType'])."</td></tr>";
  $message.="<tr style='background: #eee;'><td><strong>Box Type</strong></td><td>".(empty($boxTypeArr[$result->boxTypeId])?'':$boxTypeArr[$result->boxTypeId]['boxType'])."</td></tr>";
  $formEle=array(
    "categoryOption"=>"Category Option",
    "selectedArea"=>"AREA (SQ-FEET)",
    "projectType"=>"Project Name",
    "plotArea"=>" Plot Area",
    "siteLocation"=>"Site Location",
    "fsiAvailable"=>"FSI Available",
    "zone"=>"Zone",
    "requirement"=>"Requirement",
    "details"=>"Details",
    "budget"=>"Budget",
    );
  foreach ($formEle as $key => $value) {
    $message.="<tr style='background: #eee;'><td><strong>".$value."</strong></td><td>".$result->$key."</td></tr>";
  }
  $message .= "</table>";
  $message .= "</body></html>";
  $result=mail($to, $subject, $message, $headers);
  if(!$result) {
    return 'Message could not be sent.';
    return 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    return '1';
  }
}
$dbConnect=new dbConnect();
$enqId=@$_GET['id'];
$categoryArr=array();
$constTypeArr=array();
$boxTypeArr=array();
$query="SELECT * FROM design_categories";
$result=$dbConnect->conn->query($query);
if(mysqli_num_rows($result)>0) {
  foreach ($result as $row) {
    $categoryArr[$row['categoryId']]=$row;
  }
}
$query="SELECT * FROM box_types";
$result=$dbConnect->conn->query($query);
if(mysqli_num_rows($result)>0) {
  foreach ($result as $row) {
    $boxTypeArr[$row['boxTypeId']]=$row;
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
  header("Location:get-your-box.php");
}
if(!empty($result->boxTypeId) && !empty($result->constTypeId) && !empty($result->selectedArea)
   && !empty($boxTypeArr[$result->boxTypeId])
  ) {
  $query="SELECT * FROM pricing 
  WHERE constTypeId='".$result->constTypeId."' AND categoryOption='".$selectedArea."'
  ";

  $pricingResult=$dbConnect->conn->query($query);
  if(mysqli_num_rows($pricingResult)>0) {
    $pricingResult=$pricingResult->fetch_object();
    if(!empty($pricingResult->multiplier)) {
      $data = new stdClass();
      $data->enqId=$result->enqId;
      $data->price = $pricingResult->multiplier*$boxTypeArr[$result->boxTypeId]['baseFare'];
      $result->price=$data->price;
      $dbConnect->updateObject("architecture_enquiries",$data,"enqId");
    }
  }
}

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dezin Box</title>
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

  <div class="gray-bg">
    <section id="services" class="container ft-cards">
      <div class="row section">
        <?php mailOrder($result,$constTypeArr,$boxTypeArr);?>
        <header class="sec-heading">
          <h2>Your Order Details</h2>
          <table class="table table-stirped myTable">
            <tbody>
              <tr><td>Category</td><td>Architecture</td></tr>
              <tr><td>Construction Type</td><td><?php echo empty($constTypeArr[$result->constTypeId])?'':$constTypeArr[$result->constTypeId]['constType'];?></td></tr>
              <tr><td>Box Type </td><td><?php echo empty($boxTypeArr[$result->boxTypeId])?'':$boxTypeArr[$result->boxTypeId]['boxType'];?></td></tr>
              <?php 
              $formEle=array(
                "categoryOption"=>"Category Option",
                "selectedArea"=>"AREA (SQ-FEET)",
                "projectType"=>"Project Name",
                "plotArea"=>" Plot Area",
                "siteLocation"=>"Site Location",
                "fsiAvailable"=>"FSI Available",
                "zone"=>"Zone",
                "budget"=>"Budget",
                "requirement"=>"Requirement",
                "details"=>"Details"
                );
              foreach ($formEle as $key => $value) {
                echo "<tr><td>".$value."</td><td>".$result->$key."</td></tr>";
              }
              if(!empty($result->price)) {
                $totalWithTax=$result->price+($result->price*15/100);
                echo "<tr><td>Price</td><td>Rs. ".$dbConnect->moneyFormatIndia($result->price)."</td></tr>";
                echo "<tr><td>Tax</td><td>15%</td></tr>";
                echo "<tr><td>Total</td><td>".$dbConnect->moneyFormatIndia($totalWithTax)."</td></tr>";
                ?>
                <tr>
                  <td colspan="2">
                    <div class="text-center">
                      <form method="POST" name="customerData" action="ccavRequestHandler.php">
                        <input type="hidden" name="tid" id="tid" value="<?php echo time();?>" readonly />
                        <input type="hidden" name="merchant_id" value="<?php echo $PGConfig->merchant_id;?>"/>
                        <input type="hidden" name="order_id" value="ARCH_<?php echo $result->enqId;?>"/>
                        <input type="hidden" name="amount" value="<?php echo $totalWithTax;?>"/>
                        <input type="hidden" name="currency" value="<?php echo $PGConfig->currency;?>"/>
                        <input type="hidden" name="redirect_url" value="<?php echo $PGConfig->success_url;?>"/>
                        <input type="hidden" name="cancel_url" value="<?php echo $PGConfig->cancel_url;?>"/>
                        <input type="hidden" name="language" value="<?php echo $PGConfig->language;?>"/>
                        <button type="submit" class="btn-ghost btn-large" onclicsk="alert('this site is under maintainence');">Proceed for Payment</button>
                      </form>
                    </div>
                  </td>
                </tr>

                <?php
              } else {
                ?>
                <tr>
                <td colspan="2"><div class="text-center"><button type="button" class="btn-ghost btn-large">Request Quote</button></div></td></tr>
                <?php
              }
              ?>
              </tbody>
            </table>
          </header>
        </div><!-- / .row -->
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
