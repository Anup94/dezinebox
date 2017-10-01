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
  $budet=0;
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
    "subCategoryOption"=>"Sub Category Option",
    "driveLink"=>"Drive Link"
    );
  foreach ($formEle as $key => $value) {
    $message.="<tr style='background: #eee;'><td><strong>".$value."</strong></td><td>".$result->$key."</td></tr>";
  }
  $message .= "</table>";
  $message .= "</body></html>";
  //$result=mail($to, $subject, $message, $headers);
  if(!$result) {
    return 'Message could not be sent.';
    return 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    return '1';
  }
}

$pricee=0;
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
  WHERE constTypeId='".$result->constTypeId."' AND categoryOption='".$result->selectedArea."'
  ";

  $pricingResult=$dbConnect->conn->query($query);
  if(mysqli_num_rows($pricingResult)>0) {
    $pricingResult=$pricingResult->fetch_object();
    if(!empty($pricingResult->multiplier)) {
      $data = new stdClass();
      $data->enqId=$result->enqId;
      $data->price = $pricingResult->multiplier* 0 + $boxTypeArr[$result->boxTypeId]['baseFare'];
      $result->price=$data->price;
      $dbConnect->updateObject("architecture_enquiries",$data,"enqId");
    }
  }
}
// if( $result->boxTypeId == 3 ) { 
//                 $result->price=5000;           }
// else if($result->boxTypeId == 4) { 
//                   $result->price=7000;              }                    
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
        <link href="css/vidbck.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="favbox.png">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/styles/interior-bootstrap.css">
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
        <link rel="stylesheet" href="assets/styles/main2.css">
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
       <!--  <style type="text/css">
        .myTable {
          color: #333;
          max-width: 500px;
          margin: 50px auto;
        }
        .myTable td {
          text-align: left;
        }
        </style> -->
  <style>
    label {
    background-color: #FFF;
    padding:4px;
    width: 60px;
    text-align: center;
    color: #000;
    border: 1px solid #000;
}
 input {
    background-color: #FFF;
    padding:4px;
    width: 60px;
    text-align: center;
    color: #000;
    border: 1px solid #000;
}
p{
  text-align: left ;
  padding: 1px;
}
@media only screen and (max-width: 500px) {
    .spacing {
       display: none;
    }
}
</style>
    </head>
    <body id="page-top">
        <!-- Google Tag Manager -->
 
       


        <!-- ========== Preloader ========== -->

        <div class="preloader">
          <img src="assets/images/loader.svg" alt="Loading...">
        </div>


        
        <!-- ========== Navigation ========== -->

        <?php include_once 'menu-includes.php';?>





        <!-- ========== Hero Cover ========== -->

<br><br><br>
    <div class="container section">
    <?php mailOrder($result,$constTypeArr,$boxTypeArr);?>
          <div class="row">
          <h2>Order Summary</h2><HR>

            <!-- Checkout Table -->
            <div class="col-lg-7" style="color: #000;"><br>
             <p style="font-size: 1.3em"><strong> <?php echo $userSession->name;?> </strong> </p><p>
| <?php $formEle=array("siteLocation"=>"");
                  foreach ($formEle as $key => $value) {
                    echo "<tr><td>".$value."</td><td>".$result->$key."</td></tr>";
                  }
                
                ?>| <br>
|<?php echo $userSession->mobile;?> |
<a  style="color: #b76ea1"><u> 
                  <?php 
                  $formEle=array("driveLink"=>"");
                  foreach ($formEle as $key => $value) {
                    echo "<tr><td>".$value."</td><td>".$result->$key."</td></tr>";
                  }
                  
                ?> </u> | </P>


<?php
switch ($result->boxTypeId)
{
    case 3:echo "<img src='images/fire2.png' width='75px' height='75px'>" ; break;
    case 4:echo "<img src='images/space2.png'  width='75px' height='75px'>" ; break;
    case 5:echo "<img src='images/earth2.png'  width='75px' height='75px'>" ; break;
}?>  </div>  <div class="col-lg-5"></div>
<div class="col-lg-8" style="color: #000;">
<p style="font-size: 1.3em"><strong><?php echo empty($boxTypeArr[$result->boxTypeId])?'':$boxTypeArr[$result->boxTypeId]['boxType'];?></strong><BR> </p><p>
|Architecture | <?php echo empty($constTypeArr[$result->constTypeId])?'':$constTypeArr[$result->constTypeId]['constType'];?> |  <?php 
                  $formEle=array("categoryOption"=>"");
                  foreach ($formEle as $key => $value) {
                    echo "<tr><td>".$value."</td><td>".$result->$key."</td></tr>";
                  }
                  
                ?>| <BR>
| <?php 
                  $formEle=array("subCategoryOption"=>"");
                  foreach ($formEle as $key => $value) {
                    echo "<tr><td>".$value."</td><td>".$result->$key."</td></tr>";
                  }
                  
                ?>|  <?php 
                  $formEle=array("selectedArea"=>"Sq. ft ");
                  foreach ($formEle as $key => $value) {
                    echo "<tr><td>".$value."</td><td>".$result->$key."</td></tr>";
                  }
                  
                ?>|  <?php 
                  $formEle=array("plotArea"=>"Built Up Area  ");
                  foreach ($formEle as $key => $value) {
                    echo "<tr><td>".$value."</td><td>".$result->$key."</td></tr>";
                  }
                  
                ?>|
                 <?php 
                  $formEle=array("budget"=>"Budget   ");
                  foreach ($formEle as $key => $value) {
                    echo "<tr><td>".$value."</td><td>".$result->$key."</td></tr>";
                  }
                  
                ?>|</p>

            </div><!-- / .col-lg-9 -->
            

            <!-- Totals Table -->
               <div class="col-lg-4 totals-group">
             
               <div class="totals-content">
                <div class="subtotal-group">
                <h6 style="color: #000">INR <font color="#FF5100"> 


 <?php echo ($result->price);
                ?>
                  

                </font> X Price Multiplier <font color="#FF5100">
<?php

switch ($result->selectedArea)
{   case '0-1000':echo "1 " ; break;
    case '1000-2000':echo "2 " ; break;
     case '2000-3000':echo "3 " ; break;
      case '3000-4000':echo "4 " ; break;
       case '4000-5000':echo "5 " ; break;
        case '5000+': header('location : /free.php') ; break;
}?> 
                </font>  </h6>
                  <!-- <input type="text" style="width:100px;"  readonly; > -->
                  <label style="float: right"> <?php 
                //  $formEle=array("price"=>" ");
                  //foreach ($formEle as $key => $value) {
                   
                    switch ($result->selectedArea)

{   case '0-1000':$pricee=$result->price*1 ; echo ($result->price*1)  ; break;
    case '1000-2000':$pricee=$result->price*2 ; echo ($result->price*2)  ; break;
     case '2000-3000':$pricee=$result->price*3 ;echo ($result->price*3)  ; break;
      case '3000-4000':$pricee=$result->price*4 ; echo ($result->price*4) ; break;
       case '4000-5000':$pricee=$result->price*5 ; echo ($result->price*5)  ; break;
        case '5000+':$pricee=$result->price*6 ; echo ('On request')  ; break;
}
                //  }
                  
                ?></label>
                </div>
               
              </div><!-- / .totals-content -->
            </div><!-- / .col-md-3 -->

          </div><!-- / .row --><hr>
        </div><!-- / .container -->




        <!-- ========== Related Items - (products section) ========== -->

        
          <div class="container">

            <div class="row">
             

              <!-- Shop Product -->
              <div class="col-lg-8">
                <h3 style="color: #000">Order No - <?php echo $result->enqId;?> </h3><br><br><br>
                
              </div>
             
              
              
              <!-- / .col-lg-7 -->
              
              <div class="col-lg-4 col-md-12 totals-group">
                <div class="totals-content">
                <div class="subtotal-group">
                  <h6><span class="spacing"> &nbsp &nbsp &nbsp &nbsp &nbsp  </span>&nbsp &nbsp &nbsp   Total <small>( before  taxes )</small>&nbsp </h6>
                <span class="spacing"></span>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <label style="float: right"> <?php 
                   echo   $pricee  ;
                  // $formEle=array("price"=>"");
//                   foreach ($formEle as $key => $pricee) {
                   
//                     switch ($result->selectedAr)
// {   case '0-250':echo ($result->price*1)  ; break;
//     case '250-500':echo ($result->price*2)  ; break;
//      case '500-1000':echo ($result->price*3)  ; break;
//       case '1000-1500':echo ($result->price*4) ; break;
//        case '1500-2000':echo ($result->price*5)  ; break;
//         case '2000+':echo ($result->price*6)  ; break;
// }
//                   }
                  
                ?></label><div><div class="subtotal-group">
                  <h6><span class="spacing">  &nbsp &nbsp &nbsp &nbsp &nbsp </span>  (+) Taxes <small> ( GST @18%)</small></small>

                 &nbsp &nbsp  </h6>
                   &nbsp &nbsp &nbsp <label style="float: right"> <?php echo $pricee*0.18;
//                   $formEle=array("price"=>"");
//                   foreach ($formEle as $key => $value) {
                   
//                     switch ($result->selectedArea)
// {   case '0-250':echo ($result->price*0.18)  ; break;
//     case '250-500':echo ($result->price*2*0.18)  ; break;
//      case '500-1000':echo ($result->price*3*0.18)  ; break;
//       case '1000-1500':echo ($result->price*4*0.18) ; break;
//        case '1500-2000':echo ($result->price*5*0.18)  ; break;
//         case '2000+':echo ($result->price*6*0.18)  ; break;
// }
//                   }
                  
                ?></label><br><br>
              <span class="spacing">   &nbsp &nbsp &nbsp &nbsp &nbsp  </span> 
                  <h6>&nbsp  (-) Promo  Code:</h6><span class="spacing"> &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp</span> <input type="text" name="pcode" id="pcode" style="float: right"><div class="col-lg-10"></div>&nbsp<div class="col-lg-1">
                  <br><button id="pcheck" class="btn checkout-btn" style="padding: 5px;">&nbsp Apply &nbsp </button></div><br>
                </div>
				
				<script src="js/jquery.min.js"></script>
				<script>
				$('#pcheck').click(function(){
					var code = $('#pcode').val();
					if(!code){
						return alert("Please enter the code!");
					}else{
						console.log(code);
						$.post('/validate.php?task=validate-promo', {"code":code}, function(res){
							//console.log(res);
							if(res == "Invalid Code")alert ("The code is invalid!!");
							else {
								$('#pcheck').prop('disabled',true);
								$('#pcode').prop('disabled',true);
								console.log(res);
								alert("Promo code applied");
								var discount = parseInt(res);
								var finalPrice = parseInt( $('#final-amt').val());
								
								var finalPriceAfterPromoCode = finalPrice - (finalPrice*discount)/100;
								
								console.log("Hi this is pranoy",finalPriceAfterPromoCode);
								$('#final-amt').val(finalPriceAfterPromoCode);
								$('#fp').html(finalPriceAfterPromoCode);
								$('#mp3').val(code);
							}
						});
					}
					
				})
				</script>
                </div>
              </div><!-- / .col-lg-5 -->

              <!-- Shop Product -->
           
            </div><!-- / .row -->
             <hr>
          </div><!-- / .container -->  


          <div class="container ">

            <div class="row">
             

              <!-- Shop Product -->
              <div class="col-lg-8"><br><br><br>
              <p style="color: #000;">GST Registration No:- 27AETPA2229J1ZE</p>
             <p style="color: #000;" >  Need Help? Contact on <font color="#b76ea1"> <u>contact@dezinebox.io</u> </font>  </p>
               <p style="color: #000;"><font color="#000">  Click to know </font><a href="dpm.pdf"><u>PRICE MULTIPYER</u> </a></p>
            	</div><!-- / .col-lg-8 -->
                
                
              <div class="col-lg-4 totals-group">
                <div class="totals-content">
                <div class="subtotal-group" style="color: #000;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                  <h6>Net Total</h6>
                  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                 <label id='fp' style="float: right" > <?php   $finalPrice = $pricee+$pricee*0.18; echo "$finalPrice";
//                   $formEle=array("price"=>"");
//                   foreach ($formEle as $key => $value) {
                   
//                     switch ($result->selectedArea)
// {   case '0-250':echo($result->price*1) + ($result->price*1*0.18)  ; break;
//     case '250-500':echo ($result->price*2) + ($result->price*2*0.18)  ; break;
//      case '500-1000':echo ($result->price*3) + ($result->price*3*0.18)  ; break;
//       case '1000-1500':echo($result->price*4) + ($result->price*4*0.18) ; break;
//        case '1500-2000':echo ($result->price*5) + ($result->price*5*0.18)  ; break;
//         case '2000+':echo ($result->price*6) + ($result->price*6*0.18) ; break;
// }
//                   }
                  
                ?></label><br><br>
                  <HR>
                 </div></div></div>
                   <div class="col-lg-8">
              </div><!-- / .col-lg-8 -->
               <div class="col-lg-4 totals-group">
                <div class="totals-content">
                <div class="subtotal-group">
                   <div class="checkout-btn-wrapper" style="margin-top: -50px;">
                   <form method="POST" name="customerData" action="ccavRequestHandler.php">
                        <input type="hidden" name="merchant_id" value="133278"/>
                        <input type="hidden" name="order_id" value="000<?php echo $result->enqId;?>"/>
                        <input type="hidden" name="amount" id="final-amt" value="<?php echo $finalPrice; ?>"/>
                        <input type="hidden" name="currency" value="INR"/>
                        <input type="hidden" name="redirect_url" value="http://www.dezinebox.io/thankyou.php"/>
                        <input type="hidden" name="cancel_url" value="http://www.dezinebox.io/home.php"/>
                        <input type="hidden" name="language" value="EN"/>
						
						<input type="hidden" name ="merchant_param1" value="<?php  echo $boxTypeArr[$result->boxTypeId]['boxType'] ?>" />
						<input type="hidden" name ="merchant_param2" value="a" />
						<input type="hidden" name ="merchant_param3" id="mp3" value="None"/>
                        <button type="submit" class="btn checkout-btn">Proceed for Payment</button>
                      </form>
                <!--   <a href="#" class="btn checkout-btn">PROCEED FOR PAYMENT</a> -->
                </div>
                </div>
                </div>
              </div><!-- / .col-lg-5 -->

              <!-- Shop Product -->
              <hr>
            </div><!-- / .row -->
          </div><!-- / .container -->
      

        <!-- ========== Services ========== -->

                  
                  <?php 
                  $formEle=array(
                    "categoryOption"=>"Category Option",
                    "subCategoryOption"=>"Sub Category Option",
                    "selectedArea"=>"AREA (SQ-FEET)",
      "moreDetails"=>"Tell Us More",
      "budget"=>"Budget",
      "siteLocation"=>"Site Location",
      "driveLink"=>"Drive Link",
      "specificDetails"=>"Any Specific Detail"
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
