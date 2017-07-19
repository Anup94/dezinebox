<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"].'/login-check.php';
require_once($_SERVER['DOCUMENT_ROOT']."/classes/db.class.php");
require_once($_SERVER['DOCUMENT_ROOT']."/config-payment.php");
require_once($_SERVER['DOCUMENT_ROOT']."/PHPMailer/PHPMailerAutoload.php");


$PGConfig = new PGConfig();
function mailOrder($result,$constTypeArr,$boxTypeArr) {
  $to = 'orders@dezinebox.io';
  $subject = 'New Order -  Interior - (ID : '.$result->enqId.")";
  $headers = "From: " . strip_tags('orders@dezinebox.io') . "\r\n";
  $headers .= "Reply-To: ". strip_tags('saravthedev@gmail.com') . "\r\n";
  $headers .= "CC: dezineboxindia@gmail.com,saravanan41191@gmail.com\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  $message = '<html><body>';
  $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
  $message.="<tr style='background: #eee;'><td><strong>Category</strong></td><td>Interior</td></tr>";
  $message.="<tr style='background: #eee;'><td><strong>Construction Type</strong></td><td>".(empty($constTypeArr[$result->constTypeId])?'':$constTypeArr[$result->constTypeId]['constType'])."</td></tr>";
  $message.="<tr style='background: #eee;'><td><strong>Box Type</strong></td><td>".(empty($boxTypeArr[$result->boxTypeId])?'':$boxTypeArr[$result->boxTypeId]['boxType'])."</td></tr>";
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
$subPricee=0;
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
$query="SELECT * FROM interior_enquiries WHERE enqId='".$dbConnect->conn->real_escape_string($enqId)."'";
$result=$dbConnect->conn->query($query);
if(mysqli_num_rows($result)>0) {
  $result=$result->fetch_object();
} else {
  header("Location:get-your-box.php");
}
$result->boxTypeId;
if(!empty($result->boxTypeId) && !empty($result->constTypeId) && !empty($result->selectedArea)
   && !empty($boxTypeArr[$result->boxTypeId])
  ) {
  if($result->constTypeId=='1') {
    $selectedArea='Living';
  } else {
    $selectedArea=$result->selectedArea;
  }
  $query="SELECT * FROM pricing 
  WHERE constTypeId='".$result->constTypeId."' AND categoryOption='".$selectedArea."'
  ";

  $pricingResult=$dbConnect->conn->query($query);
  if(mysqli_num_rows($pricingResult)>0) {
    $pricingResult=$pricingResult->fetch_object();
    if(!empty($pricingResult->multiplier)) {
      $data = new stdClass();
      $data->enqId=$result->enqId;
      $data->price = $pricingResult->multiplier* 0 + $boxTypeArr[$result->boxTypeId]['baseFare'];
      $result->price=$data->price;
      $dbConnect->updateObject("interior_enquiries",$data,"enqId");
    }
  }
}
?>
<?php
$hello=0;
$numberOFrooms=array("categoryOption");
$hello=count('$categoryOption')+2;

echo(" sxmskjxn".$categoryOption);
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
        <link rel="stylesheet" href="assets/styles/main2.css">
        <link rel="stylesheet" href="assets/styles/responsive.css">

        <!-- JS -->
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

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
    background-color: #FF5100;
    padding:4px;
    width: 60px;
    text-align: center;
    color: #000;
    border: 1px solid #a2a2a2;
}
 input {
    background-color: #FF5100;
    padding:4px;
    width: 60px;
    text-align: center;
    color: #000;
    border: 1px solid #a2a2a2;
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

<br><br><br>
    <div class="container section">
    <?php mailOrder($result,$constTypeArr,$boxTypeArr);?>
          <div class="row">
          <h2>ORDER SUMMARY</h2><HR>

            <!-- Checkout Table -->
            <div class="col-lg-7" style="color: #a2a2a2;"><br>
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
                  
                ?> </u> | </P><br><br>


<?php
switch ($result->boxTypeId)
{
    case 3:echo "<img src='images/fire2.png'>" ; break;
    case 4:echo "<img src='images/space2.png'>" ; break;
    case 5:echo "<img src='images/earth2.png'>" ; break;
}?> <br><br> </div>  <div class="col-lg-5"></div>
<div class="col-lg-8" style="color: #a2a2a2;">
<p style="font-size: 1.3em"><strong><?php echo empty($boxTypeArr[$result->boxTypeId])?'':$boxTypeArr[$result->boxTypeId]['boxType'];?></strong><BR> </p><p>
|INTERIOR | <?php echo empty($constTypeArr[$result->constTypeId])?'':$constTypeArr[$result->constTypeId]['constType'];?> |  <?php 
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
                  $formEle=array("selectedArea"=>"");
                  foreach ($formEle as $key => $value) {
                    echo "<tr><td>".$value."</td><td>".$result->$key."</td></tr>";
                  }
                  
                ?>|  <?php 
                  $formEle=array("budget"=>"BUDGET   ");
                  foreach ($formEle as $key => $value) {
                    echo "<tr><td>".$value."</td><td>".$result->$key."</td></tr>";
                  }
                  
                ?>|</p>

            </div><!-- / .col-lg-9 -->
            

            <!-- Totals Table -->
            <div class="col-lg-4 totals-group">
             
               <div class="totals-content">
                <div class="subtotal-group">
                  <h6 style="color: #a2a2a2">INR <font color="#FF5100"> 



 <?php
error_log($result->constTypeId.$result->categoryOption.$result->boxTypeId);
            if($result->constTypeId == 1 && $result->categoryOption == 'Living'  && $result->boxTypeId == 3 ) { 
                  echo ($subPricee=$result->price);                
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Dining'  && $result->boxTypeId == 3 ) { 
               
              echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Kitchen'  && $result->boxTypeId == 3 ) { 
                    echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Master+Bed' && $result->boxTypeId == 3 ) { 
                    echo ($subPricee=$result->price);             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Kid%27s+Bedroom'  && $result->boxTypeId == 3 ) { 
                 echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Worship+Space'  && $result->boxTypeId == 3 ) { 
                   echo ($subPricee=$result->price);             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Guest+Room'  && $result->boxTypeId == 3 ) { 
          
                    echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Toilet'  && $result->boxTypeId == 3 ) { 
                   echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 2 && $result->categoryOption == 'OFFICE'  && $result->boxTypeId == 3 ) { 
               echo ($subPricee=$result->price);             }
             else if($result->constTypeId == 2 && $result->categoryOption == 'RETAIL'  && $result->boxTypeId == 3 ) { 
                echo ($subPricee=$result->price);             }
            else  if($result->constTypeId == 2 && $result->categoryOption == 'BANK'  && $result->boxTypeId == 3 ) { 
                     echo ($subPricee=$result->price);             }
             else if($result->constTypeId == 2 && $result->categoryOption == 'CO-WORKING+SPACES'  && $result->boxTypeId == 3 ) { 
                    echo ($subPricee=$result->price);             }
            else if($result->constTypeId == 3 && $result->categoryOption == 'RESTAURANT'  && $result->boxTypeId == 3 ) { 
                   echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 3 && $result->categoryOption == 'HOTEL'  && $result->boxTypeId == 3 ) { 
                    echo ($subPricee=$result->price);             }
              else if($result->constTypeId == 3 && $result->categoryOption == 'WELLNESS'  && $result->boxTypeId == 3 ) { 
                   echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 3 && $result->categoryOption == 'CLUB+HOUSE'  && $result->boxTypeId == 3 ) { 
                   echo ($subPricee=$result->price);             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'SCHOOL'  && $result->boxTypeId == 3 ) { 
                      echo ($subPricee=$result->price);             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'COLLEGE'  && $result->boxTypeId == 3 ) { 
                     echo ($subPricee=$result->price);             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'CLINIC'  && $result->boxTypeId == 3 ) { 
           echo ($subPricee=$result->price);             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'HOSPITAL'  && $result->boxTypeId == 3 ) { 
                     echo ($subPricee=$result->price);             }
             
            else if($result->constTypeId == 1 && $result->categoryOption == 'Living'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Dining'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Kitchen'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Master+Bed' && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Kid%27s+Bedroom'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Worship+Space'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Guest+Room'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Toilet'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 2 && $result->categoryOption == 'OFFICE'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 2 && $result->categoryOption == 'RETAIL'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
            else  if($result->constTypeId == 2 && $result->categoryOption == 'BANK'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 2 && $result->categoryOption == 'CO-WORKING+SPACES'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
            else if($result->constTypeId == 3 && $result->categoryOption == 'RESTAURANT'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 3 && $result->categoryOption == 'HOTEL'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 3 && $result->categoryOption == 'WELLNESS'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 3 && $result->categoryOption == 'CLUB+HOUSE'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'SCHOOL'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'COLLEGE'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'CLINIC'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'HOSPITAL'  && $result->boxTypeId == 4 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Living'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Dining'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
               else if($result->constTypeId == 1 && $result->categoryOption == 'Kitchen'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Master+Bed' && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Kid%27s+Bedroom'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Worship+Space'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Guest+Room'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 1 && $result->categoryOption == 'Toilet'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 2 && $result->categoryOption == 'OFFICE'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 2 && $result->categoryOption == 'RETAIL'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
            else  if($result->constTypeId == 2 && $result->categoryOption == 'BANK'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
             else if($result->constTypeId == 2 && $result->categoryOption == 'CO-WORKING+SPACES'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
            else if($result->constTypeId == 3 && $result->categoryOption == 'RESTAURANT'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 3 && $result->categoryOption == 'HOTEL'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 3 && $result->categoryOption == 'WELLNESS'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 3 && $result->categoryOption == 'CLUB+HOUSE'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'SCHOOL'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'COLLEGE'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'CLINIC'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
              else if($result->constTypeId == 4 && $result->categoryOption == 'HOSPITAL'  && $result->boxTypeId == 5 ) { 
                     echo ($subPricee=$result->price);
             }
            else   echo ($subPricee=$result->price);
             ?>
              

                </font> X PRICE MULTIPER <font color="#FF5100">
<?php



              if($result->constTypeId == 1 )
                {echo $hello ;}
else{
switch ($result->selectedArea)
{   case '0-250':echo "1 " ; break;
    case '250-500':echo "2 " ; break;
     case '500-1000':echo "3 " ; break;
      case '1000-1500':echo "4 " ; break;
       case '1500-2000':echo "5 " ; break;
        case '2000+':echo "6 " ; break;
}
}?> 


                </font> = </h6>
                  <!-- <input type="text" style="width:100px;"  readonly; > -->
                  <label > <?php 
                //  $formEle=array("price"=>" ");
                  //foreach ($formEle as $key => $value) {
                   
                    switch ($result->selectedArea)

{   case '0-250':$pricee=$result->price*1 ; echo ($result->price*1)  ; break;
    case '250-500':$pricee=$result->price ; echo ($result->price)  ; break;
     case '500-1000':$pricee=$result->price*2 ;echo ($result->price*2)  ; break;
      case '1000-1500':$pricee=$result->price*2.5 ; echo ($result->price*4) ; break;
       case '1500-2000':$pricee=$result->price*3 ; echo ($result->price*5)  ; break;
        case '2000+':$pricee=$result->price*6 ; echo "on request" ; break;
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
              <div class="col-lg-8" >
                <h3 style="color: #a2a2a2">Order No - <?php echo $result->enqId;?> </h3><br><br><br>
                <p style="color: #a2a2a2;">GST REGISTRATION No:- 27AETPA2229J1ZE</p>
              </div><!-- / .col-lg-7 -->
              <div class="col-lg-4 totals-group">
                <div class="totals-content">
                <div class="subtotal-group">
                  <h6> &nbsp &nbsp &nbsp &nbsp &nbsp  TOTAL <small>(before  taxes)</small>&nbsp </h6>
                   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <label for="male"> <?php 
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
                  
                ?></label>
                  <h6>  &nbsp &nbsp &nbsp &nbsp &nbsp  (+) TAXES <small> (GST @18%)</small></small>

                 &nbsp &nbsp &nbsp  </h6>
                   &nbsp &nbsp  <label for="male"> <?php echo $pricee*0.18;
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
                 &nbsp &nbsp &nbsp &nbsp &nbsp   
                  <h6>&nbsp (-) PROMO  CODE:</h6> &nbsp &nbsp &nbsp &nbsp &nbsp   &nbsp &nbsp &nbsp <input>
                </div>
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
             <p style="color: #000;" >  Need Help? Contact on <font color="#b76ea1"> <u>contact@dezinebox.io</u> </font>  </p>
               <p style="color: #000;"><font color="#000">  Click to know </font><a "><u>PRICE MULTIPLYER</u> </a></p>
            
              </div><!-- / .col-lg-8 -->
              <div class="col-lg-4 totals-group">
                <div class="totals-content">
                <div class="subtotal-group" style="color: #000;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                  <h6>NET TOTAL</h6>
                  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
                 <label > <?php echo $pricee+$pricee*0.18;
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
                        <input type="hidden" name="tid" id="tid" value="<?php echo time();?>" readonly />
                        <input type="hidden" name="merchant_id" value="<?php echo $PGConfig->merchant_id;?>"/>
                        <input type="hidden" name="order_id" value="INTE_<?php echo $result->enqId;?>"/>
                        <input type="hidden" name="amount" value="<?php echo $totalWithTax;?>"/>
                        <input type="hidden" name="currency" value="<?php echo $PGConfig->currency;?>"/>
                        <input type="hidden" name="redirect_url" value="<?php echo $PGConfig->success_url;?>"/>
                        <input type="hidden" name="cancel_url" value="<?php echo $PGConfig->cancel_url;?>"/>
                        <input type="hidden" name="language" value="<?php echo $PGConfig->language;?>"/>
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
