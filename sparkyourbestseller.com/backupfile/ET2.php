<?php

$id=$_GET['id'];
include_once("check_login_status.php");

$u=$_GET['u'];
//echo $log_username;
if(isset($_GET["u"])){
	$u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" type="text/css" href="csstext/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="csstext/demo.css" />
		<link rel="stylesheet" type="text/css" href="csstext/set2.css" />
		
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
	  
	  $('#a').hide();
	  
	 $('#b').hide();
	 $('#c').hide();
	   $("#name").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>=25){
		$('#a').show();
		}
		else if(len<=24){
		$('#a').hide();
		}
		
	 });
	  $("#name1").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>=45){
		$('#b').show();
		}
		else if(len<=44){
		$('#b').hide();
		}		
	 });
	  $("#name2").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>=20){
		$('#c').show();
		}
		else if(len<=19){
		$('#c').hide();
		}
		
	 });
	   
	  });
	 
	 
	 
	 
	 </script>
	
    
  <style>
      .container{
          padding-top:1%;
      }
  </style>
</head>
<body>
   <header>
      <?php include_once("menu.php");?>
    </header>

  <div class="container">


    <div class="col-xs-12 yk_panel_background">


<div id="tab2">
            <div class="row">
                    <div class="col-xs-3" id="book_tab2_maindiv" style="float:right;">

         <div class="" id="book_tab2" style="margin-top: 125px;">

             
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




        <div class="col-xs-7" style="padding-right: 0px;text-align: left;margin-left: 2px;" >

                  <div class="row">
                       <div style="color: #ffffff;font-size: 20px;padding-top: 10px;">
                         <strong style="color: orange;font-size: 24px;">Details</strong>
                       </div>                
                  </div>
            
   <?php
            include_once("check_login_status.php");
            session_start();
                $connect = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
                $sq=mysqli_query($connect,"SELECT * FROM users WHERE  username='$log_username' LIMIT 1");
                while($s=mysqli_fetch_array($sq))
                {   $email=$s['email'];
                 session_start();
                 $_SESSION['email']=$email;
                 //echo $_SESSION['email'];
                }
    
        if($user_ok == true){
        
	?>     
               <form action="upload_photo1.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" target="upload_frame" onSubmit="submit_photo()" class="form">
			   <p class='field required'>
                   
                   <span class="input input--nao">
					<input class="input__field input__field--nao" type="text" id='name' name='title' maxlength="30" required tabindex='1'/>
					<label class="input__label input__label--nao" for="input-1">
						<span class="input__label-content input__label-content--nao">What will be the name of your 'bestseller'?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
                   
    <!--input class='text-input' id='name' name='title'  title="What will be the name of your 'bestseller'?"  maxlength="30" required tabindex='1' type='text' value="What will be the name of your 'bestseller'?"  onclick='javascript: this.value = ""'-->
  </p>
			   
           
  
    <div id="a" class="alert alert-success alert-dismissable fade in">
   
    Pick a 2-3 word creative name. Go ahead, inspire the world!
  </div>
   
   
   <p class='field required'>
       <span class="input input--nao">
					<input class="input__field input__field--nao" type="text" id='name1' name='sname' maxlength="30" required tabindex='1'/>
					<label class="input__label input__label--nao" for="input-2">
						<span class="input__label-content input__label-content--nao">What will be the sub-title that will explain the context?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
       
    <!--input class='text-input' id='name1' name='sname' title="What will be the sub-title that will explain the context?" maxlength="45" required tabindex='1' value="What will be the sub-title that will explain the context?" type='text'  onclick='javascript: this.value = ""'-->
  </p>
  <div id="b" class="alert alert-success alert-dismissable fade in">
   
    The 4–5 word sub-title can shine the spotlight your dream goal!
  </div>
  
   <p class='field required'>
       <span class="input input--nao">
					<input class="input__field input__field--nao" type="text" id='name2' name='aname' maxlength="30" required tabindex='1'/>
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">What will be the sub-title that will explain the context?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
    <!--input class='text-input' id='name2' name='aname' maxlength="30" title="What will be the author name of the book?" required tabindex='1' type='text' value="What will be the author name of the book?"  onclick='javascript: this.value = ""'-->
  </p>
  <div id="c" class="alert alert-success alert-dismissable fade in">
   
    Pick a 2-3 word creative name
  </div>
                   
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

            
            <?php
        }
            else{
            
         ?>
                    
            
             <form action="upload_photo1.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" target="upload_frame" onSubmit="submit_photo()" class="form">
			   <p class='field required'>
                   <span class="input input--nao">
					<input class="input__field input__field--nao" type="text" id='name' name='title' maxlength="30" required tabindex='1' type='text'/>
					<label class="input__label input__label--nao" for="input-2">
						<span class="input__label-content input__label-content--nao">What will be the title that will explain the context?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
<!--    <label class='label required' for='name' style="font-size:10px">What will be the name of your 'bestseller'?</label><br>-->
    <!--input class='text-input' id='name' name='title'  title="What will be the name of your 'bestseller'?"  maxlength="30" required tabindex='1' type='text' value="What will be the name of your 'bestseller'?" onclick='javascript: this.value = ""'-->
  </p>
			   
    <div id="a" class="alert alert-success alert-dismissable fade in">
   
    Pick a 2-3 word creative name. Go ahead, inspire the world!
  </div>
   
   
   <p class='field required'>
       <span class="input input--nao">
					<input class="input__field input__field--nao" type="text" id='name1' name='sname' maxlength="30" required tabindex='1'/>
					<label class="input__label input__label--nao" for="input-2">
						<span class="input__label-content input__label-content--nao">What will be the sub-title that will explain the context?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
<!--   <label class='label required' for='name' style="font-size:10px">What will be the sub-title ?</label><br>-->
    <!--input class='text-input' id='name1' name='sname' title="What will be the sub-title ?" maxlength="45" required tabindex='1' type='text' value="What will be the sub-title ?" onclick='javascript: this.value = ""'-->
  </p>
  <div id="b" class="alert alert-success alert-dismissable fade in">
   
     The 4–5 word sub-title can shine the spotlight your dream goal!
  </div>
  
   <p class='field required'>
       <span class="input input--nao">
					<input class="input__field input__field--nao" type="text" id='name2' name='aname' maxlength="30" required tabindex='1'/>
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">What will be the name of the author?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
<!--    <label class='label required' for='name' style="font-size:10px">What will be the author name of the book?</label><br>-->
    <!--input class='text-input' id='name2' name='aname' maxlength="30" title="What will be the author name of the book?" required tabindex='1' type='text' value="What will be the author name of the book?" onclick='javascript: this.value = ""'-->
  </p>
  <div id="c" class="alert alert-success alert-dismissable fade in">
   
   Pick a 2-3 word creative name
  </div>
                   
   <p class='field half'>
       <span class="input input--nao">
					<input class="input__field input__field--nao" type="text" id='nam3' name='email' maxlength="30" required tabindex='1'/>
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">Your Email Id?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
<!--   <label class='label required' for='name' style="font-size:10px">Enter your Email Id?</label><br>-->
    <!--input class='text-input' id='nam3' name='email' title="Enter your Email Id?" maxlength="40" required tabindex='1' type='email' value="Enter your Email Id?" onclick='javascript: this.value = ""'-->
  </p>
   <p class='field half'>
       
       <span class="input input--nao">
					<input class="input__field input__field--nao" type="text"  id='name4' name='phone' maxlength="30" required tabindex='1'  pattern="[0-9]{10}" required tabindex='1'/>
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">Your Phone Number?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
<!--   <label class='label required' for='name' style="font-size:10px">Enter your Mobile Number?</label><br>-->
    <!--input class='text-input' id='name4' name='phone' title="Enter your Mobile Number? " maxlength="10"  pattern="[0-9]{10}" required tabindex='1' type='text' value="Enter your Mobile Number?" onclick='javascript: this.value = ""'-->
  </p>

                
                
                
             <div class="row" style="margin-top: 10px;">
               <div id="popup_upload">
        <div class="form_upload">
            <span class="close" onClick="close_popup('popup_upload')">x</span>
            <h2>Crop and Upload Image </h2>
            <input type="file" name="photo" id="photo" class="file_input">
                <div id="loading_progress"></div>
                <input type="submit" value="Upload photo" id="upload_btn">
            <iframe name="upload_frame" class="upload_frame"></iframe>
        </div>
    </div>
             </div>
                
                
                
           
                    <!--button type="submit" name="submit" value="submit" id="submit">Submit</button-->
                

            </form>
  <?php
        }
        ?>
            
            
            
            
            
            
            <span class="upload_btn" onClick="show_popup('popup_upload')">Upload Image</span>
            <div id="photo_container" style="padding: 5px;">
            </div>

            
         </div>

        <!--div class="col-xs-2" style="padding-left: 0px">
          <div id="next_book_section2"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 17%">navigate_next</i></a></div> 
         </div-->

      
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
            <a  href="gallery.php?id=<?php echo $id;?>"> <input type="button" value="Crop Image" id="crop_btn" onClick="crop_photo()" /></a>
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

    </div></div>
</div>

    <div class="col-xs-12 yk_panel_bottom_background">
      <div class="row">


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="template.php"><img src="img/8.png" class="section1_icon yk_top_margin15"></a>

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
    <script src="jstext/classie.js"></script>
		<script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();
		</script>
</body>
</html>
