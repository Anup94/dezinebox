<?php

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

<html>
<head>

<meta name="HandheldFriendly" content="true" />
<title>Product Partner</title>
<link type="text/css"  rel="stylesheet" href="assets/styles/form.css" />
<link type="text/css"  rel="stylesheet" href="assets/styles/nova.css" />
<link type="text/css"  rel="stylesheet" href="assets/styles/theme.css"/> 

<link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/styles/bootstrap.min.css">  <!-- nav -->
<link rel="stylesheet" href="assets/styles/main22.css"> <!-- nav -->

<style>
@media (max-width: 400px)
{
  .navbar-nav > li > .dropdown-menu {
    margin-top: 0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    margin-left: 50px;
}
.link1 {
    width: 21%;
    float: right;
    margin: 2% 0 0 0;
    font-size: 1.2em;
    text-align: center;
    display: none;
}
</style>


</head>
<body class="supernova" style="background-image:url(images/Product-Partner.jpg)">
<?php include_once 'menu-includes.php';?>
<form class="jotform-form" id="productPartnerForm" name="productPartnerForm" action="validate.php?task=product_partner_submit" enctype="multipart/form-data" method="post">

  <div class="form-all col-xs-12">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h1   class="form-header" >
              <font style="color: #000">Product</font> <font style="color: #FF5100"> Partner</font>
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
        Name of the Enterprise *
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="text"  name="entName" class="form-textbox " size="30" value="" required>
        </div>
      </li>
       <li class="form-line jf-required" >
                                        
                                            <div id="cid_5" class="form-input-wide jf-required">
                                              <input type="text" class="form-textbox" placeholder="Product" name="productType" list="cityname">
<datalist id="cityname">
   <option value="Décor & furnishes">Décor & furnishes</option>
                                              <option value="Wall coverings & wall finishes">Wall coverings & wall finishes</option>
                                              <option value="Security & safety">Security & safety</option>
                                              <option value="Tiles, stones, other floorings/dado finishes"></option>
                                              <option value="Hardware & fittings">Hardware & fittings</option>
                                              <option value="Sanitary fixtures & fittings">Sanitary fixtures & fittings</option>
                                              <option value="CP fittings">CP fittings</option>
                                              <option value="Electrical fixtures, Lamps, Lightings">Electrical fixtures, Lamps, Lightings</option>
                                              <option value="Landscapes & gardens"> </option>
                                              <option value="Home Appliances">Home Appliances</option>
                                              <option value="Office Appliances">Office Appliances</option>
                                              <option >Other</option></datalist>
                                       
                                            </div>
                                          </li>
       <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
          E-mail *
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="email" id="input_5" name="email" class="form-textbox validate[required, Email]" size="30" value="" placeholder="ex: myname@example.com" data-component="email" required />
        </div>
      </li>
            <li class="form-line" data-type="control_phone" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6_area"> Phone Number * </label>
        <div id="cid_6" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top;">
              <input type="tel" id="input_6_area" name="mobilepre" class="form-textbox" size="3" maxlength="3" minlength="3" value="" data-component="areaCode" />
              <span class="phone-separate">
                 -
              </span>
              <label class="form-sub-label" for="input_6_area" id="sublabel_area" style="min-height:13px;"> Area Code </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top;">
              <input type="tel" id="input_6_phone" name="mobile" class="form-textbox" size="10" value="" data-component="phone" maxlength="10" minlength="8" required="" />
              <label class="form-sub-label" for="input_6_phone" id="sublabel_phone" style="min-height:13px;"> Phone Number </label>
            </span>
          </div>
        </div>
      </li>
         <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
        LinkedIn
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="text"  name="linkedInProfile" class="form-textbox " size="30" value=""  >
        </div>
      </li>
         <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
        Years of Experience *
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="text"  name="experience" class="form-textbox" size="30" value="" required="" >
        </div>
      </li>
        <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
        Address *
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="text"  name="address" class="form-textbox" size="200" value="" required="" >
        </div>
      </li>
         <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
        Website URL *
          <span class="form-required">
            *
          </span>
        </label>
        <div  class="form-input-wide jf-required">
          <input type="url"  name="website" value="http://" class="form-textbox" required="" >
        </div>
      </li>
         <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
       Share your drive
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="text"  name="googleDrive" class="form-textbox validate[required, Email]" size="30" value="http://" >
        </div>
      </li>
     
      <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
        Product Catalog *
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="file"  name="catalog" class="form-textbox" size="30" value="" required>
        </div>
      </li>
          <li class="form-line jf-required" >
    
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="checkbox" required="">I Agree &nbsp <a target="_blank" href="conditions.php">Terms &amp; Conditions</a> | <a target="_blank" href="privacy.php">Privacy Policy</a> 
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:left;" class="form-buttons-wrapper">
       

              <button id="submit" class="btn-ghost" type="submit" style="display: block; margin: 0 auto;">Submit</button><br>
              <p id="loading" style="display: none;padding: 8px 25px;"> Loading.. </p>
          </div>
        </div>
      </li>
<p style="color: #FF5100;text-align: center;">Alternatively you can reach us at  <a href="mailto:partnership@dezinebox.io" style="display: inline-block;color: #19476f;">partnership@dezinebox.io".</a> for registration </p>
    </ul>
  </div>
 
 

</form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="footer">
<footer class="footer-widgets">



<!-- Copyright -->
<div class="copyright">
<div class="container">
<div class="row">




<div class="widget about-widget">

<ul class="social-links">
<li><a href="https://www.facebook.com/dezine.box"><i class="fa fa-facebook" style="color: #fff;"></i></a></li>
<li><a href="https://twitter.com/DezineBox"><i class="fa fa-twitter" style="color: #fff"></i></a></li>
<li><a href="https://www.linkedin.com/company-beta/17970956/"><i class="fa fa-linkedin" style="color: #fff"></i></a></li>
<li><a href="https://www.instagram.com/dezinebox/"><i class="fa fa-instagram" style="color: #fff"></i></a></li>
<li><a href="https://plus.google.com/101485144759189925017"><i class="fa fa-google-plus" style="color: #fff"></i></a></li>
<li><a href="#"><i class="fa fa-youtube"></i></a></li>
</ul>
</div><!-- / .widget -->





</div><!-- / .row -->
</div><!-- / .container -->
</div><!-- / .copyright -->

</footer><!-- / .footer-widgets -->
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<script type="text/javascript">
  
  $('#productPartnerForm').submit(function(e) {
   e.preventDefault();

   var form = $('#productPartnerForm')[0];
   var data = new FormData(form);

   $('#submit').css('display', 'none');
   $('#loading').css('display', 'block');
       $.ajax({
           type: "POST",
           enctype: 'multipart/form-data',
           url: "validate.php?task=product_partner_submit",
           data: data,
           processData: false,
           contentType: false,
           cache: false,
           timeout: 600000,
           success: function (res) {
              console.log(res);
              if(res.status == 1) {
                swal("Thank You", "Your request have been saved", "success");
                   $('#submit').css('display', 'block');
                  $('#loading').css('display', 'none');
                  $('#productPartnerForm')[0].reset()
              }
              else {
                swal("Error", "Some Error occured !", "error");
                  $('#submit').css('display', 'block');
                  $('#loading').css('display', 'none');
              }
            },
           error: function (e) {

            console.log(e);


           }
       });

});

</script>
</body>

</html>
