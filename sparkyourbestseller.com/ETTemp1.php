<?php
include_once("analytics.php");
?><?php
$id=$_GET['id'];
// include_once("check_login_status.php");

// $u=$_GET['u'];
// //echo $log_username;
// if(isset($_GET["u"])){
// 	$u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
// } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js" type="text/javascript"></script>
  <meta charset="utf-8">
  <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
  <meta name="author" content="#Sparkyourbestseller">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" type="text/css" href="csstext/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="csstext/demo.css" />
		<link rel="stylesheet" type="text/css" href="csstext/set3et.css" />
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
		
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato'>

    
      <link rel="stylesheet" href="css/styleform1.css">

    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- <link rel="stylesheet" href="cssc1/style.css" />
<link rel="stylesheet" href="cssc1/jquery.Jcrop.min.css" type="text/css" />

 
<script src="jsc/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="jsc/script1.js"></script> -->    

    <link rel="stylesheet" href="css/slim.min.css">

<!-- crop -->
<link rel="stylesheet" href="cssc1/style.css" />
<script type="text/javascript" src="jsc/script1.js"></script>

<!-- <link rel="stylesheet" href="cropp/crop/css/style.css" /> -->

<link rel="stylesheet" href="cropp/crop/css/jquery.Jcrop.min.css" type="text/css" />
<!-- <script type="text/javascript" src="cropp/crop/js/jquery.min.js"></script> -->
<script src="cropp/crop/js/jquery.Jcrop.min.js"></script>
<!-- <script type="text/javascript" src="cropp/crop/js/script.js"></script> -->

<!-- crop -->


    
    
   <script language="javascript" type="text/javascript">

   //IMAGE SIzE AND TYPE VALIDATION 

   function showFileSize() {
        var input, file;
        if (!window.FileReader) {
            alert("The file API isn't supported on this browser yet.");
            return;
        }

        input = document.getElementById('photo');

            file = input.files[0];
            if(file.size>10000000){
              bootbox.alert({
                      message: "File size cannot be greater than 10MB. Please choose another file.",
                      backdrop: true,
                      className: 'modal-style',
                  });
              file.input = '';
            }
            else{
              document.getElementById("upload_btn").click();
        }
    }

    function fileValidation(){
        var fileInput = document.getElementById('photo');
        var filePath = fileInput.value;
        var allowedExtensions = /(\.jpg|\.jpeg)$/i;
        if(!allowedExtensions.exec(filePath)){
            bootbox.alert({
                      message: "File extension is not compatible. Please select a .jpg or .jpeg image",
                      backdrop: true,
                      className: 'modal-style',
                  });
            fileInput.value = '';
        }else{
            showFileSize();
        }
    }

    
    $(document).ready(function(){
    
    $('#a').hide();
    $('#b').hide();
    $('#c').hide();
          
//          $('#aex').hide();
          
          
     $("#name").on('keyup',function(){
    var my=$(this).val();
    var len=my.length;
    if(len>=3){
    $('#a').show();
    }
    else if(len<=2){
    $('#a').hide();
    }
   });
          
    $("#name1").on('keyup',function(){
    var my=$(this).val();
    var len=my.length;
    if(len>=3){
    $('#b').show();
    }
    else if(len<=2){
    $('#b').hide();
    }   
   });
    $("#name2").on('keyup',function(){
    var my=$(this).val();
    var len=my.length;
    if(len>=30){
    $('#c').show();
    }
    else if(len<=29){
    $('#c').hide();
    }
    
   });
     
    });  
   </script>
  
    
  <style>
      .container{
/*          padding-top:1%;*/
      }
      .modal-style {
          font-size: 20px;
          font-family: 'Rubik', sans-serif;
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

         <div class="" id="book_tab2" style="margin-top: 50%">

             
<?php
  if($id==1)
  {
  ?>
  <img src="img/b1.png" id="book_tab2_photo" style="height:auto;">
  <?php
  }
  if($id==2)
  {
  ?>
  <img src="img/b2.png" id="book_tab2_photo"  style="height:auto;">
  <?php
  }
  if($id==3)
  {
  ?>
  <img src="img/b3b.png" id="book_tab2_photo"  style="height:auto;">
  <?php
  }
if($id==4)
{
  ?>
        <img src="img/b4.png" id="book_tab2_photo"  style="height:auto;">
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
                       <div style="color: #ffffff;font-size: 20px;padding-top: 10px;margin-left:1%">
                         <strong style="color: orange;font-size: 24px;">Details</strong>
                       </div>                
                  </div>
            
   <?php
            // include_once("check_login_status.php");
                @session_start();
                //$connect = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
                $connect = mysqli_connect("localhost", "root", "", "sparklive");
                $sq=mysqli_query($connect,"SELECT * FROM users WHERE  username='$log_username' LIMIT 1");
                while($s=mysqli_fetch_array($sq))
                {   $email=$s['email'];
                 @session_start();
                 $_SESSION['email']=$email;
                 //echo $_SESSION['email'];
                }
    
        if($user_ok == true){
        
	?>     
               <form action="upload_photo1.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" target="upload_frame" onSubmit="submit_photo()" class="form">
			   <p class='field required'>
                   
                   <span class="input input--nao">
					<input  style="" class="input__field input__field--nao" type="text" id='name' name='title' maxlength="40" tabindex='1'/>
					<label class="input__label input__label--nao" for="input-1">
                        <span class="input__label-content input__label-content--nao">Craft a title that will capture your journey to conquer the goal</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
                  </p>
                   <div style="margin-top:-20px;width:280px;color:white;" class="titlelogin" id="a">
                     Pick a 2-3 word creative name. Go ahead, inspire the world!
                   </div>  
    <!--input class='text-input' id='name' name='title'  title="What will be the name of your 'bestseller'?"  maxlength="30" required tabindex='1' type='text' value="What will be the name of your 'bestseller'?"  onclick='javascript: this.value = ""'-->

			   
<!--
<div id="aex" class="titlelog" style="margin-top:-20px;width:280px;">
   <b>You are out of characters Please pick a 2-3 word creative name!</b>
  </div>
-->
   
   
   <p class='field required'>
       <span class="input input--nao">
					<input style="" class="input__field input__field--nao" type="text" id='name1' name='sname' maxlength="80" onfocus="onfocus_subtitle()" tabindex='1'/>
					<label class="input__label input__label--nao" for="input-2">
						<span class="input__label-content input__label-content--nao">What will be the sub-title that will define the context?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span></p>
         <div style="margin-top:-20px;width:280px;color:white;" id="b">Pick up 5–7 word sub-title that will shine the spotlight on your goal!</div>
             
  
   <p class='field required'>
       <span class="input input--nao">
					<input  class="input__field input__field--nao" type="text" id='name2' name='aname' maxlength="30" onfocus="onfocus_subtitle()" tabindex='1'/>
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">What will be the name of the author?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span></p>
        <div style="margin-top:-20px;width:280px;color:white;" id="c">You have exceeded the character limit. Come up with something snappy</div>
  
                 
  
        
             
    <div class="slim" data-service="async.php">
        <input type="file"/>
    </div>     <p style="color: #fff">Max Size: 101MB</p>  
            <input type="file" name="photo" id="photo" class="file_input" style="color: white;margin-left: -15px" required  onfocus="onfocus_email()" onchange="fileValidation()">
            <!-- onchange="document.getElementById('upload_btn').click()" -->
                <div id="loading_progress" style="color:white;"></div>
                <input type="submit" value="Submit" id="upload_btn" style="
                                                                           display:none;
    background-color: white;
    margin-bottom: 10px;
                                                                        
">
            <iframe name="upload_frame" class="upload_frame"></iframe>

            </form>
            <script type="text/javascript">
              function validateEmail(email) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
              }

              function onfocus_subtitle(){
                var title = document.getElementById('name').value;
                if(title==''){
                  bootbox.alert({
                      message: "Would you read a book without a title? Please enter an inspirational title",
                      backdrop: true,
                      className: 'modal-style',
                      callback: function () {
                        document.getElementById('name').focus();
                    }
                  });
                }
              }

              function onfocus_email(){
                var title = document.getElementById('name').value;
                var author = document.getElementById('name2').value;
                if(title==''){
                  bootbox.alert({
                      message: "Would you read a book without a title? Please enter an inspirational title",
                      backdrop: true,
                      className: 'modal-style',
                      callback: function () {
                        document.getElementById('name').focus();
                    }
                  });
                }
                else{
                  if(author==''){
                    bootbox.alert({
                        message: "​​You don’t want credit for your bestseller? Kindly fill the author name",
                        backdrop: true,
                        className: 'modal-style',
                        callback: function () {
                          document.getElementById('name2').focus();
                      }
                    });
                  }
                }
              }

              function onfocus_number(){
                var title = document.getElementById('name').value;
                var author = document.getElementById('name2').value;
                var email = document.getElementById('nam3').value;
                if(title==''){
                  bootbox.alert({
                      message: "Would you read a book without a title? Please enter an inspirational title",
                      backdrop: true,
                      className: 'modal-style',
                      callback: function () {
                        document.getElementById('name').focus();
                    }
                  });
                }
                else{
                  if(author==''){
                    bootbox.alert({
                        message: "​​You don’t want credit for your bestseller? Kindly fill the author name",
                        backdrop: true,
                        className: 'modal-style',
                        callback: function () {
                          document.getElementById('name2').focus();
                      }
                    });
                  }
                  else{
                    if(email=='' ){
                      bootbox.alert({
                          message: "Kindly enter valid email address.",
                          backdrop: true,
                          className: 'modal-style',
                          callback: function () {
                            document.getElementById('nam3').focus();
                        }
                      });   
                    }
                  }
                }
              }



              function validateNumber(number){
                var phoneno = /^\d{10}$/;
                if((number.value.match(phoneno))){
                  return true;
                }
                else{
                  return false;
                }
              }

              function onfocus_file(){
                var title = document.getElementById('name').value;
                var author = document.getElementById('name2').value;
                var email = document.getElementById('nam3').value;
                var number = document.getElementById('name4').value;
                if(title==''){
                  bootbox.alert({
                      message: "Would you read a book without a title? Please enter an inspirational title",
                      backdrop: true,
                      className: 'modal-style',
                      callback: function () {
                        document.getElementById('name').focus();
                    }
                  });
                }
                else{
                  if(author==''){
                    bootbox.alert({
                        message: "​​You don’t want credit for your bestseller? Kindly fill the author name",
                        backdrop: true,
                        className: 'modal-style',
                        callback: function () {
                          document.getElementById('name2').focus();
                      }
                    });
                  }
                  else{
                  if(email=='' ){
                      bootbox.alert({
                          message: "Kindly enter valid email address.",
                          backdrop: true,
                          className: 'modal-style',
                          callback: function () {
                            document.getElementById('nam3').focus();
                        }
                      });   
                    }
                    else{
                      // if(number==''){
                      //   bootbox.alert({
                      //       message: "Kindly enter valid mobile number.",
                      //       backdrop: true,
                      //       className: 'modal-style',
                      //       callback: function () {
                      //         document.getElementById('name4').focus();
                      //     }
                      //   });
                      // }
                    }
                  }
                }
              }
 
            </script>

            
            <?php
        }
            else{
            
         ?>
                    
            
             <form action="upload_photo1.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" target="upload_frame" onSubmit="submit_photo()" class="form">
			   <p class='field required'>
                   <span class="input input--nao">
					<input style="" class="input__field input__field--nao" type="text" id='name' name='title' maxlength="40" tabindex='1' type='text' />
					<label class="input__label input__label--nao" for="input-2">
						<span class="input__label-content input__label-content--nao"> Craft a title that will capture your journey to conquer the goal</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
                     </p>
    <div id="a" style="margin-top:-20px;width:280px;color:white;">
                  Pick a 2-3 word creative name. Go ahead, inspire the world !
                 </div>  
   <p class='field required'>
       <span class="input input--nao">
					<input style="" class="input__field input__field--nao" type="text" id='name1' name='sname' maxlength="55" tabindex='1' onfocus="onfocus_subtitle()" />
					<label class="input__label input__label--nao" for="input-2">
						<span class="input__label-content input__label-content--nao">What will be the sub-title that will define the context?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>    
         <div id="b" style="margin-top:-20px;width:280px;color:white;">
   Pick up 5–7 word sub-title that can shine the spotlight your dream goal !
  </div>
  </p>
   <p class='field required'>
       <span class="input input--nao">
					<input class="input__field input__field--nao" type="text" id='name2' name='aname' maxlength="30" tabindex='1' onfocus="onfocus_subtitle()" />
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">What will be the name of the author?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
        <div id="c" style="margin-top:-20px;width:280px;color:white;" > You have exceeded the character limit. Come up with something snappy</div>
  </p>
                   
   <p class='field half'>
       <span class="input input--nao">
					<input class="input__field input__field--nao" type="text" id='nam3' name='email' maxlength="30" onfocus="onfocus_email()" tabindex='1'/>
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">Email Id?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
  </p>
   <p class='field half'>
       
       <span class="input input--nao">
					<input class="input__field input__field--nao" type="text"  id='name4' name='phone' maxlength="12"  tabindex='1' pattern="[0-9]{10}"  tabindex='1' onfocus="onfocus_number()" />
					<label class="input__label input__label--nao" for="input-3">
						<span class="input__label-content input__label-content--nao">Mobile Number?</span>
					</label>
					<svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
						<path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
					</svg>
				</span>
  </p>

                
                
             <p style="color: #fff">Max Size: 110MB</p>   
            <input type="file" name="photo" id="photo" class="file_input" style="color: white;margin-left: -18px" onfocus="onfocus_file()" onchange="fileValidation()" >
            
            <!-- onchange="document.getElementById('upload_btn').click()" -->
                <div id="loading_progress" style="color:white;"></div>

                <input type="submit" value="Submit" id="upload_btn" style="
                                                                           display:none;
    background-color: white;
                   
">
            
            <iframe name="upload_frame" class="upload_frame"></iframe>
            </form>
            <script type="text/javascript">
              function validateEmail(email) {
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
              }

              function onfocus_subtitle(){
                var title = document.getElementById('name').value;
                if(title==''){
                  bootbox.alert({
                      message: "Would you read a book without a title? Please enter an inspirational title",
                      backdrop: true,
                      className: 'modal-style',
                      callback: function () {
                        document.getElementById('name').focus();
                    }
                  });
                }
              }

              function onfocus_email(){
                var title = document.getElementById('name').value;
                var author = document.getElementById('name2').value;
                if(title==''){
                  bootbox.alert({
                      message: "Would you read a book without a title? Please enter an inspirational title",
                      backdrop: true,
                      className: 'modal-style',
                      callback: function () {
                        document.getElementById('name').focus();
                    }
                  });
                }
                else{
                  if(author==''){
                    bootbox.alert({
                        message: "​​You don’t want credit for your bestseller? Kindly fill the author name",
                        backdrop: true,
                        className: 'modal-style',
                        callback: function () {
                          document.getElementById('name2').focus();
                      }
                    });
                  }
                }
              }

              function onfocus_number(){
                var title = document.getElementById('name').value;
                var author = document.getElementById('name2').value;
                var email = document.getElementById('nam3').value;
                if(title==''){
                  bootbox.alert({
                      message: "Imagine a book without a title !",
                      backdrop: true,
                      className: 'modal-style',
                      callback: function () {
                        document.getElementById('name').focus();
                    }
                  });
                }
                else{
                  if(author==''){
                    bootbox.alert({
                        message: "​Really, you don’t want credit for your bestseller ! Please fill the author name",
                        backdrop: true,
                        className: 'modal-style',
                        callback: function () {
                          document.getElementById('name2').focus();
                      }
                    });
                  }
                  else{
                    if(email=='' ){
                      bootbox.alert({
                          message: "Kindly enter valid email address.",
                          backdrop: true,
                          className: 'modal-style',
                          callback: function () {
                            document.getElementById('nam3').focus();
                        }
                      });   
                    }
                  }
                }
              }



              function validateNumber(number){
                var phoneno = /^\d{10}$/;
                if((number.value.match(phoneno))){
                  return true;
                }
                else{
                  return false;
                }
              }

              function onfocus_file(){
                var title = document.getElementById('name').value;
                var author = document.getElementById('name2').value;
                var email = document.getElementById('nam3').value;
                var number = document.getElementById('name4').value;
                if(title==''){
                  bootbox.alert({
                      message: "Would you read a book without a title? Please enter an inspirational title",
                      backdrop: true,
                      className: 'modal-style',
                      callback: function () {
                        document.getElementById('name').focus();
                    }
                  });
                }
                else{
                  if(author==''){
                    bootbox.alert({
                        message: "​​You don’t want credit for your bestseller? Kindly fill the author name",
                        backdrop: true,
                        className: 'modal-style',
                        callback: function () {
                          document.getElementById('name2').focus();
                      }
                    });
                  }
                  else{
                    if(email=='' ){
                      bootbox.alert({
                          message: "Kindly enter valid email address.",
                          backdrop: true,
                          className: 'modal-style',
                          callback: function () {
                            document.getElementById('nam3').focus();
                        }
                      });   
                    }
                    else{
                      // if(number==''){
                      //   bootbox.alert({
                      //       message: "Kindly enter valid mobile number.",
                      //       backdrop: true,
                      //       className: 'modal-style',
                      //       callback: function () {
                      //         document.getElementById('name4').focus();
                      //     }
                      //   });
                      // }
                    }
                  }
                }
              }

              // function Validate(){
              //   var title = document.getElementById('name').value;
              //   var author = document.getElementById('name2').value;
              //   var email = document.getElementById('nam3').value;
              //   var number = document.getElementById('name4').value;
              //   if(title==''){
              //     bootbox.alert({
              //         message: "Would you read a book without a title? Please enter an inspirational title",
              //         backdrop: true,
              //         className: 'modal-style',
              //         callback: function () {
              //           document.getElementById('name').focus();
              //       }
              //     });
              //   }
              //   else{
              //     if(author==''){
              //       bootbox.alert({
              //           message: "​​You don’t want credit for your bestseller? Kindly fill the author name",
              //           backdrop: true,
              //           className: 'modal-style'
              //       });
              //     }else{
              //       if(email=='' || !(validateEmail(email))){
              //         bootbox.alert({
              //             message: "Enter a valid email address.",
              //             backdrop: true,
              //             className: 'modal-style'
              //         });
              //       }
              //       else{
              //         if(number=='' || !(validateNumber(number))){
              //           bootbox.alert({
              //               message: "Enter a valid phone number.",
              //               backdrop: true,
              //               className: 'modal-style'
              //           });
              //         }
              //       }
              //     }
              //   }
              // }  
            </script>

  <?php
        }
        ?>

            
         </div>

        <!--div class="col-xs-2" style="padding-left: 0px">
          <div id="next_book_section2"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 17%">navigate_next</i></a></div> 
         </div-->

      
     <div id="popup_crop">
        <div class="form_crop">
            <span class="close" onclick="close_popup('popup_crop')">x</span>
            <h2>Crop photo</h2>
          
            <img id="cropbox" />
            
            <form>
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />
                <input type="hidden" id="photo_url" name="photo_url" />
                <input type="button" value="SUBMIT" id="crop_btn" onclick="crop_photo()" />
            </form>
        </div>
    </div>



<!--  <div id="popup_crop">
        <div class="form_crop">
            <span class="close" onClick="close_popup('popup_crop')">x</span>
            <h2>Crop Image</h2>
            <img id="cropbox"/>
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />
                <input type="hidden" id="photo_url" name="photo_url" />
                
                  <input type="button" value="SUBMIT" id="crop_btn" onClick="crop_photo()">
                
        </div>
    </div>
 -->










    </div></div>
<!--          <a href="gallery1.php?id=<?php echo $id;?>" vlink="#808080" alink="#FF0000"><input type="button" value="Go to Gallery"></a><br>-->
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

         <a href="#"><img src="img/1.png" class="section1_icon yk_top_margin15"></a>

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="#"><img src="img/6.png" class="section1_icon yk_top_margin15"></a>

       </div>

     </div>

   </div>
 </div><script src="js/slim.kickstart.min.js"></script>
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
