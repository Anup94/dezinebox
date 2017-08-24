<?php include_once 'site-initial.php';?>
<html>
<head>

<meta name="HandheldFriendly" content="true" />
<title>Product Partner</title>
<link type="text/css" rel="stylesheet" href="form.css" />
<link type="text/css" rel="stylesheet" href="nova.css" />
<link type="text/css" rel="stylesheet" href="theme.css"/>

<link rel="stylesheet" href="bootstrap.min.css">  <!-- nav -->
<link rel="stylesheet" href="main.css"> <!-- nav -->



</head>
<body class="supernova">
<?php include_once 'menu-includes.php';?>
<form class="jotform-form" id="productPartnerForm" name="productPartnerForm" action="validate.php?task=product_partner_submit" enctype="multipart/form-data" method="post">

  <div class="form-all col-xs-12">
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group ">
          <div class="header-text httal htvam">
            <h1   class="form-header" >
              Product Partner
            </h1>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
        Name of the Enterprise
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="text"  name="entName" class="form-textbox " size="30" value="" required>
        </div>
      </li>
       <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
          E-mail
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="email" id="input_5" name="email" class="form-textbox validate[required, Email]" size="30" value="" placeholder="ex: myname@example.com" data-component="email" required />
        </div>
      </li>
            <li class="form-line" data-type="control_phone" id="id_6">
        <label class="form-label form-label-top" id="label_6" for="input_6_area"> Phone Number </label>
        <div id="cid_6" class="form-input-wide jf-required">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top;">
              <input type="tel" id="input_6_area" name="mobile" class="form-textbox" size="3" value="" data-component="areaCode" />
              <span class="phone-separate">
                 -
              </span>
              <label class="form-sub-label" for="input_6_area" id="sublabel_area" style="min-height:13px;"> Area Code </label>
            </span>
            <span class="form-sub-label-container" style="vertical-align:top;">
              <input type="tel" id="input_6_phone" name="q6_phoneNumber[phone]" class="form-textbox" size="8" value="" data-component="phone" required="" />
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
          <input type="text"  name="linkedInProfile" class="form-textbox " size="30" value="" required="" >
        </div>
      </li>
         <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
        Years of Experience
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
        Address
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
        Website URL
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="text"  name="website" class="form-textbox" size="30" value="" required="" >
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
          <input type="text"  name="googleDrive" class="form-textbox validate[required, Email]" size="30" value="" >
        </div>
      </li>
     
      <li class="form-line jf-required" data-type="control_email" id="id_5">
        <label class="form-label form-label-top" id="label_5" for="input_5">
        Product Catalog
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="file"  name="catalog" class="form-textbox" size="30" value="" >
        </div>
      </li>
          <li class="form-line jf-required" >
    
        <div id="cid_5" class="form-input-wide jf-required">
          <input type="checkbox" required="">I Agree &nbsp <a target="_blank" href="conditions.php">Terms &amp; Conditions</a>
        </div>
      </li>
      <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="text-align:left;" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button" data-component="button">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
 
 

</form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><footer class="footer-widgets">



<!-- Copyright -->
<div class="copyright">
<div class="container">
<div class="row">




<div class="widget about-widget">

<ul class="social-links">
<li><a href="https://www.facebook.com/dezine.box"><i class="fa fa-facebook" style="color: "></i></a></li>
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
</body>

<!-- Mirrored from form.jotform.co/72333260344852 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2017 06:03:15 GMT -->
</html>
