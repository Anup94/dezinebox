<?php include 'analyticstracking.php' ?>
<?php
  $id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
  <meta name="author" content="#Sparkyourbestseller">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://developer.mozilla.org/en-US/docs/Template:CustomSampleCSS?raw=1" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato'>

      <link rel="stylesheet" href="css/styleform1.css">
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="cssc/style.css" />
<link rel="stylesheet" href="cssc/jquery.Jcrop.min.css" type="text/css" />
<script type="text/javascript" src="jsc/jquery.min.js"></script>



<script src="jsc/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="jsc/script.js"></script>    
    
	  
	 <script language="javascript" type="text/javascript">
	  $(document).ready(function(){
	  
	   $("#name").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>=15){
		alert("you are increasing your limits..!");
		
		}
		
	 });
	  $("#name1").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>=20){
		alert("you are increasing your limits..!");
		
		}
		
	 });
	  $("#name2").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>=7){
		alert("you are increasing your limits..!");
		
		}
		
	 });
	   $("#name3").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>=15){
		alert("you are increasing your limits..!");
		
		}
		
	 });
	  });
	 
	 
	 
	 
	 </script>
	
    
  <style>
      .container{
          padding-top:2%;
      }
  </style>
</head>
<body>
 <?php
 error_reporting (0);
    include_once("check_login_status.php");
        if($user_ok == true){
	?>
     <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" style="height: 188%;"></a>
      </div>
      <ul class="nav navbar-nav navbar-right">

        <li style="font-size: 26px;font-weight: 900;"><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </nav>
        <?php
        }else{
            
         ?>
        <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" style="height: 188%;"></a>
      </div>
      <ul class="nav navbar-nav navbar-right">

        <li style="font-size: 26px;font-weight: 900;"><a href="logout.php">Login</a></li>
      </ul>
    </div>
  </nav><?php
        }
        ?>



  <div class="container">


    <div class="col-xs-12 yk_panel_background">


<div id="tab2">
            <div class="row">
                    <div class="col-xs-3" id="book_tab2_maindiv" style="float:right;">

         <div class="" id="book_tab2" style="margin-top: 25px;">

             
<?php
  if($id==1)
  {
  ?>
  <img src="img/b1.png" id="book_tab2_photo">
  <?php
  }
  if($id==2)
  {
  ?>
  <img src="img/b2.jpg" id="book_tab2_photo">
  <?php
  }
  if($id==3)
  {
  ?>
  <img src="img/b3b.png" id="book_tab2_photo">
  <?php
  }
if($id==4)
{
  ?>
        <img src="img/b4.jpg" id="book_tab2_photo">
  
  <?php
    }
if($id==5)
{
  ?>
        <img src="img/book5.jpg" id="book_tab2_photo">
  <?php
}

if($id==6)
{
  ?>
        <img src="img/book6.jpg" id="book_tab2_photo">
  
<?php
}
 ?>            
             
             
             
         <!--img src="img/book1.jpg" class="" id="book_tab2_photo"-->
         </div>

         </div>

        <div class="col-xs-2">
            <div id="prev_book_section"><a href="template.php"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 50%;  -ms-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);">navigate_next</i></a></div> 
         </div>



        <div class="col-xs-7" style="padding-right: 0px" >

                  <div class="row">
                       <div class="col-xs-8 " style="color: #ffffff;font-size: 20px;padding-top: 30px">
                         <strong style="color: orange;font-size: 24px">Details : </strong>
                       </div>                
                  </div>
            
            
               <form action="upload_photo.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" target="upload_frame" onSubmit="submit_photo()" class="form">
			   
            <p class='field required'>
    <label class='label required' for='name' style="font-size:10px">Enter your Name?</label><br>
    <input class='text-input' id='name' name='goal' maxlength="20" title="add  20 alphabets " required tabindex='1' type='text'>
  </p>
  
   
   
   
   <p class='field required'>
   <label class='label required' for='name' style="font-size:10px">What will be the sub-title that will explain the context?</label><br>
    <input class='text-input' id='name1' name='title' title="add  upto 30 alphabets " maxlength="30" required tabindex='1' type='text'>
  </p>
  
   <p class='field required'>
    <label class='label required' for='name' style="font-size:10px">What will be the name of your 'bestseller'?</label><br>
    <input class='text-input' id='name2' name='aname'  title="add  10 alphabets "  maxlength="10" required tabindex='1' type='text'>
  </p>
   <p class='field half'>
   <label class='label required' for='name' style="font-size:10px">Enter your Email Id?</label><br>
    <input class='text-input' id='nam3' name='email' title="add  20 alphabets " maxlength="20" required tabindex='1' type='email'>
  </p>
   <p class='field half'>
   <label class='label required' for='name' style="font-size:10px">Enter your Mobile Number?</label><br>
    <input class='text-input' id='name4' name='phone' title="add  only integers " maxlength="10"  pattern="[0-9]{10}" required tabindex='1' type='text'>
  </p>

                
                
                
             <div class="row" style="margin-top: 10px;">
               <div id="popup_upload">
        <div class="form_upload">
            <span class="close" onClick="close_popup('popup_upload')">x</span>
            <h2>Upload photo</h2>
            <input type="file" name="photo" id="photo" class="file_input">
                <div id="loading_progress"></div>
                <input type="submit" value="Upload photo" id="upload_btn">
            <iframe name="upload_frame" class="upload_frame"></iframe>
        </div>
    </div>
             </div>
                
                
                
           
                    <!--button type="submit" name="submit" value="submit" id="submit">Submit</button-->
                

            </form>

            <span class="upload_btn" onClick="show_popup('popup_upload')">Click to upload photo</span>
            <div id="photo_container">
            </div>

            
         </div>

        <!--div class="col-xs-2" style="padding-left: 0px">
          <div id="next_book_section2"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 17%">navigate_next</i></a></div> 
         </div-->

            
         

       </div>
    <div id="popup_crop">
        <div class="form_crop">
            <span class="close" onClick="close_popup('popup_crop')">x</span>
            <h2>Crop photo</h2>
            <!-- This is the image we're attaching the crop to -->
            <img id="cropbox"/>
            
            <!-- This is the form that our event handler fills -->
            <form>
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />
                <input type="hidden" id="photo_url" name="photo_url" />
            <a  href="p5.php?id=<?php echo $id;?>"> <input type="button" value="Crop Image" id="crop_btn" onClick="crop_photo()" /></a>
            </form>
        </div>
    </div>

    
    
<script>
 $(document).ready(function(){
      $('#submit').click(function(){
           var image_name = $('#image').val();
           if(image_name == '')
           {
                alert("Please Select Image");
                return false;
           }
           else
           {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                     alert('Invalid Image File');
                     $('#image').val('');
                     return false;
                }
           }
      });
 });
 </script>


</div>




<div id="tab3" style="display: none">
      
     <br>
       <div class="row">

         <div class="col-xs-1" style="padding-left: 0px">
            <div id="prev_book_section3"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 110%;  -ms-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);">navigate_next</i></a></div>
         </div>


        <div class="col-xs-9" style="padding-right: 0px" >

                  <div class="row">
                               <div class="col-xs-12 " style="padding-left: 30px; padding-top: 15px">
                                 <strong style="color: orange;font-size: 24px">Coaching </strong>
                               </div>                          
                  </div>

                  <div class="row">
                               <div class="col-xs-12 " style="padding-left: 30px; padding-top: 15px">
                                 <i style="color: #ffffff;font-size: 16px">Answer a set of 8 pre-defined questions across the ABSOLUTE parameters to ensure your goal is optimally crafted as per the key principles of Neuroscience</i><br><br>
                                 

                               </div>                          
                  </div>


                  <form id="questionform">
                  <div class="row" id="question1">
                               <div class="col-xs-12 " style="color: #ffffff;font-size: 16px;padding-left: 30px; padding-top: 15px">
                                 <div style="color: #ffffff;font-size: 18px">Would you want to consider reworking your goal to look at the big picture?</div><br>
                                 <i id="yes1"><label class="radio-inline"><input type="radio" name="answer_q1">Yes</label></i>
                                 <i id="no1"><label class="radio-inline"><input type="radio" id="no1" name="answer_q1">No</label></i>
                               </div>                          
                  </div>

                  <div class="row" id="question2" style="display: none">
                               <div class="col-xs-12 " style="color: #ffffff;font-size: 16px;padding-left: 30px; padding-top: 15px">
                                 <div style="color: #ffffff;font-size: 18px">Does Your Goal Capture the big picture instead of gettin struck in the micro?</div><br>
                                 <i id="yes2"><label class="radio-inline"><input type="radio" name="answer_q2">Yes</label></i>
                                 <i id="no2"><label class="radio-inline"><input type="radio" id="no1" name="answer_q2">No</label></i>
                               </div>                          
                  </div>

                  </form>

         </div>


         <div class="col-xs-1 col-xs-offset-1" style="padding-left: 0px">
            <div id="next_book_section3"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 120%; margin-left: -30px">navigate_next</i></a></div> 
         </div>

       </div>

</div>




<div id="tab4" style="display: none">
      
     <br>
     
       <div class="row">

         <div class="col-xs-1" style="padding-left: 0px">
            <div id="prev_book_section4"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 110%;  -ms-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);">navigate_next</i></a></div>
         </div>


        <div class="col-xs-10" style="padding-right: 0px" >

                    <div class="row">

                     <div class="col-xs-3 col-xs-offset-2 " id="book_tab4_maindiv" >

                       <div class="" id="book_tab4 yk_books_photos" style="margin-top: 25px; ">
                         <img src="img/bookcover.png" class="" id="book_tab4_photo" style=" width: 200px; margin-bottom: 25px;margin-top: -55px;">
                       </div>

                     </div>

                     <div class="col-xs-7 yk_last_icons">

                     <div class="col-xs-2 ">
                       <img src="img/2.png" class="section1_icon  invert">
                     </div>

                     <div class="col-xs-2 ">
                       <img src="img/3.png" class="section1_icon  invert">
                     </div>


                     <div class="col-xs-2 ">
                       <img src="img/9.png" class="section1_icon  invert">
                     </div>


                     <div class="col-xs-2 ">
                       <img src="img/5.png" class="section1_icon  invert">
                     </div>
                     </div>

                   </div>

         </div>
       </div>

</div>
    </div>
      
    <div class="col-xs-12 yk_panel_bottom_background">
      <div class="row">


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="new.php"><img src="img/8.png" class="section1_icon yk_top_margin15"></a>

       </div>
          
          <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom active ">

         <img src="img/2.png" class="section1_icon yk_top_margin15 invert" style="color: rgba(0, 0, 0, 0.54)">

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="p3.php?id=<?php echo $id;?>"><img src="img/1.png" class="section1_icon yk_top_margin15"></a>

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="p5.php?id=<?php echo $id;?>"><img src="img/6.png" class="section1_icon yk_top_margin15"></a>

       </div>

     </div>

   </div>
 </div>

<script src='http://mobilemarkup.com/javascripts/libs/jquery.customSelect.min.js'></script>

    <script src="js/form.js"></script>
</body>
 <script src="javascript.js" type="text/javascript"></script>
</html>
