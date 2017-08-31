<?php include_once 'site-initial.php';?>
<html>
<head>

<meta name="HandheldFriendly" content="true" />
<title>Designer Partner</title>
<link type="text/css"  rel="stylesheet" href="assets/styles/form.css" />
<link type="text/css"  rel="stylesheet" href="assets/styles/nova.css" />
<link type="text/css"  rel="stylesheet" href="assets/styles/theme.css"/> 
<link rel="stylesheet" href="assets/styles/bootstrap.min.css">  <!-- nav -->
<link rel="stylesheet" href="assets/styles/main.css"> <!-- nav -->






</style>
</head>
<body class="supernova">
<?php include_once 'menu-includes.php';?>
<form class="jotform-form" id="productPartnerForm" name="productPartnerForm" action="validate.php?task=submit_design_partner" enctype="multipart/form-data" method="post">
 

       
                  
                      
                        <div class="tab-content" role="tabpanel">
                           
                                    <div class="form-all col-xs-12 tab-pane fade in active" id="tab-1">
                                        <ul class=" c-tab-items form-section page-section" style="background: #fff">
                                          <li  class="form-input-wide" data-type="control_head">
                                            <div class="form-header-group ">
                                              <div class="header-text httal htvam">
                                                <h1   class="form-header" >
                                                     <font style="color: #000">Dezine</font> <font style="color: #FF5100"> Partner</font>
                                                </h1>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="form-line jf-required" data-type="control_email">
                                            <label class="form-label form-label-top">
                                            Name 
                                              <span class="form-required">
                                                *
                                              </span>
                                            </label>
                                            <div id="cid_5" class="form-input-wide jf-required">
                                              <input type="text"  name="name" class="form-textbox " size="30" value="" required>
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
                                                  <input type="tel" id="input_6_area" name="mobilepre" class="form-textbox" size="3" value="" data-component="areaCode" />
                                                  <span class="phone-separate">
                                                     -
                                                  </span>
                                                  <label class="form-sub-label" for="input_6_area" id="sublabel_area" style="min-height:13px;"> Area Code </label>
                                                </span>
                                                <span class="form-sub-label-container" style="vertical-align:top;">
                                                  <input type="tel" id="input_6_phone" name="mobile" class="form-textbox" size="8" value="" data-component="phone" required="" />
                                                  <label class="form-sub-label" for="input_6_phone" id="sublabel_phone" style="min-height:13px;"> Phone Number </label>
                                                </span>
                                              </div>
                                            </div>
                                          </li>
                                             <li class="form-line jf-required" data-type="control_email" id="id_5">
                                            <label class="form-label form-label-top" id="label_5" for="input_5">
                                            Firms Name
                                              <span class="form-required">
                                                *
                                              </span>
                                            </label>
                                            <div  class="form-input-wide">
                                              <input type="text"  name="companyName" class="form-textbox"  required="" >
                                            </div>
                                          </li>
                                             <li class="form-line jf-required" >
                                            <label class="form-label form-label-top">
                                            Address
                                              <span class="form-required">
                                                *
                                              </span>
                                            </label>
                                            <div id="cid_5" class="form-input-wide jf-required">
                                              <input type="text"  name="companyAddress" class="form-textbox" size="30" value="" required="" >
                                            </div>
                                          </li>
                                        
                                          </li>
                                             <li class="form-line jf-required" data-type="control_email" id="id_5">
                                            <label class="form-label form-label-top" id="label_5" for="input_5">
                                            Website URL
                                              <span class="form-required">
                                                *
                                              </span>
                                            </label>
                                            <div  class="form-input-wide jf-required">
                                              <input type="text"  name="website" class="form-textbox" required="" >
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
                                              <input type="text"  name="projectLinkedin[]" class="form-textbox validate[required, Email]" size="30" value="" >
                                            </div>
                                          </li>
                                         
                                          <li class="form-line jf-required" data-type="control_email" id="id_5">
                                            <label class="form-label form-label-top" id="label_5" for="input_5">
                                            Years of experience
                                              <span class="form-required">
                                                *
                                              </span>
                                            </label>
                                            <div id="cid_5" class="form-input-wide jf-required">
                                              <input type="text"  name="experience" class="form-textbox" size="30" value="" >
                                            </div>
                                          </li>
                                              <li class="form-line jf-required" >
                                        
                                            <div id="cid_5" class="form-input-wide jf-required">
                                        <select class="form-control text-height form_group_data" mandatory="true" error_message="Please select" name="hearFrom" id="user_hear_from"><option value="">How did you hear about us</option>
                                              <option value="Facebook">Facebook</option>
                                              <option value="Google">Google</option>
                                              <option value="Friends &amp; Family">Friends &amp; Family</option>
                                              <option value="Other Sources">Other Sources</option></select>
                                            </div>
                                          </li>
                                          <li class="form-line" data-type="control_button" id="id_2">
                                            <div id="cid_2" class="form-input-wide">
                                              <div style="text-align:left;" class="form-buttons-wrapper">

                                <a href="#tab-2" role="tab" data-toggle="tab">

<button class="btn-ghost" style="display: block; margin: 0 auto;">Next</button></a><br>
                                              
                                              </div>
                                            </div>
                                          </li>
                                </ul>
                            </div>
                           
                                    <div class="tab-pane fade form-all col-xs-12 " id="tab-2" role="tabpanel">
                                        <ul class="form-section page-section c-tab-items">
                                          <li id="cid_1" class="form-input-wide" data-type="control_head">
                                            <div class="form-header-group ">
                                              <div class="header-text httal htvam">
                                                <h2   class="form-header" >
                                               <font style="color: #000">Proffessional</font> <font style="color: #FF5100"> Experience </font>
                                                </h2>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="form-line jf-required" data-type="control_email" id="id_5">
                                            <label class="form-label form-label-top" id="label_5" for="input_5">
                                            Name of the Project
                                              <span class="form-required">
                                                *
                                              </span>
                                            </label>
                                            <div id="cid_5" class="form-input-wide jf-required">
                                              <input type="text"  name="projectName[]" class="form-textbox " size="30" value="" required>
                                            </div>
                                          </li>
                                           <li class="form-line jf-required" >
                                            <label class="form-label form-label-top" >
                                              Area of the project
                                              <span class="form-required">
                                                *
                                              </span>
                                            </label>
                                            <div id="cid_5" class="form-input-wide jf-required">
                                              <input type="text" id="input_5" name="projectArea[]" class="form-textbox"  required />
                                            </div>
                                          </li>
                                               
                                             <li class="form-line jf-required" data-type="control_email" id="id_5">
                                            <label class="form-label form-label-top" id="label_5" for="input_5">
                                            Highlight of the project
                                              <span class="form-required">
                                                *
                                              </span>
                                            </label>
                                            <div id="cid_5" class="form-input-wide jf-required">
                                              <input type="text"  name="projectHighLight[]" class="form-textbox " size="30" value="" required="" >
                                            </div>
                                          </li>
                                             <li class="form-line jf-required" data-type="control_email" id="id_5">
                                            <label class="form-label form-label-top" id="label_5" for="input_5">
                                            Description
                                              <span class="form-required">
                                                *
                                              </span>
                                            </label>
                                            <div id="cid_5" class="form-input-wide jf-required">
                                              <input type="text"  name="projectDesc[]" class="form-textbox" size="30" value="" required="" >
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
                                              <input type="text"  name="driveLink" class="form-textbox validate[required, Email]" size="30" value="" >
                                            </div>
                                          </li>
                                         
                                          <li class="form-line jf-required" data-type="control_email" id="id_5">
                                            <label class="form-label form-label-top" id="label_5" for="input_5">
                                            Upload a portfolio
                                              <span class="form-required">
                                                *
                                              </span>
                                            </label>
                                            <div id="cid_5" class="form-input-wide jf-required">
                                              <input type="file"  name="file" class="form-textbox" size="30" value="" >
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
                                              

                                <a href="#tab-1" role="tab" data-toggle="tab">
                                                    
                                      <button class="btn-ghost" style="display: block; margin: 0 auto; float: left;">Back &nbsp</button></a></div>
                                                 <div class="col-lg-6">
                                      <button class="btn-ghost" style="display: block; margin: 0 auto;float: right">Submit</button></div>
                                              </div>
                                              <br><br>
                                            </div>
                                          </li>
                                </ul>
                            </div>
                            
                           
                         
                          
                        
                         </div>
         

</form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="footer">
<footer class="footer-widgets">



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

</footer><!-- / .footer-widgets --><!-- / .footer-widgets -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
</body>

<!-- Mirrored from form.jotform.co/72333260344852 by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2017 06:03:15 GMT -->
</html>
