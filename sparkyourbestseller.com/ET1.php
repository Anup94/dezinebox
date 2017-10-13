<?php include 'analyticstracking.php' ?>
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
  <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
  <meta name="author" content="#Sparkyourbestseller">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">	
    <link rel="stylesheet" href="cssc/style.css" />
<!-- <link rel="stylesheet" href="cssc/jquery.Jcrop.min.css" type="text/css" />
<script type="text/javascript" src="jsc/jquery.min.js"></script>

 
<script src="jsc/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="jsc/script.js"></script>   -->  

<!-- crop -->
<!-- <link rel="stylesheet" href="cssc1/style.css" /> -->
<script type="text/javascript" src="jsc/script.js"></script>

<!-- <link rel="stylesheet" href="cropp/crop/css/style.css" /> -->

<link rel="stylesheet" href="cropp/crop/css/jquery.Jcrop.min.css" type="text/css" />
<!-- <script type="text/javascript" src="cropp/crop/js/jquery.min.js"></script> -->
<script src="cropp/crop/js/jquery.Jcrop.min.js"></script>
<!-- <script type="text/javascript" src="cropp/crop/js/script.js"></script> -->

<!-- crop -->


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

         <div class="" id="book_tab2" style="margin-top: 50%">
         </div>

         </div>




        <div class="col-xs-7" style="padding-right: 0px;text-align: left;margin-left: 2px;" >

                  <div class="row">
                       <div style="color: #ffffff;font-size: 20px;padding-top: 10px;margin-left:1%">
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
			  <label><font color="white">Title</font></label>
                   <input type="text" name="title">
                   
                   <label><font color="white">SubTitle</font></label>
                   <input type="text" name="sname">
            
                   <label><font color="white">Author</font></label>
                   <input type="text" name="aname">

                
                <br><br>
                   
                   <span class="upload_btn" onClick="show_popup('popup_upload')">Upload Image</span>
            <div id="photo_container" style="padding: 5px;">
            </div>
                   
        <div id="popup_upload">
        <div class="form_upload">
            <span class="close" onClick="close_popup('popup_upload')">x</span>
            <h2>Upload Image</h2>
            <input type="file" name="photo" id="photo" class="file_input">
                <div id="loading_progress"></div>
                <input type="submit" value="Upload" id="upload_btn">
            <iframe name="upload_frame" class="upload_frame"></iframe>
        </div>
    </div>
                
           
                    <!--button type="submit" name="submit" value="submit" id="submit">Submit</button-->
            </form>

            
            <?php
        }
            else{
            
         ?>
                    
            
             <form action="upload_photo1.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" target="upload_frame" onSubmit="submit_photo()" class="form">
			   
                    <label><font color="white">Title</font></label>
                   <input type="text" name="title">
                   
                   <label><font color="white">SubTitle</font></label>
                   <input type="text" name="sname">
            
                   <label><font color="white">Author</font></label>
                   <input type="text" name="aname">
                
                <br><br>
                  <span class="upload_btn" onClick="show_popup('popup_upload')">Upload Image</span>
            <div id="photo_container" style="padding: 5px;">
            </div>
           
                <div id="popup_upload">
        <div class="form_upload">
            <span class="close" onClick="close_popup('popup_upload')">x</span>
            <h2>Upload Image</h2>
            <input type="file" name="photo" id="photo" class="file_input" style="margin-left: -18px" onfocus="onfocus_file()" onchange="document.getElementById('upload_btn').click()" >
<!--            <input type="file"  name="photo" id="photo" class="file_input" value="" onfocus="onfocus_file()" onchange="document.getElementById('upload_btn').click()" >-->
                <div id="loading_progress"></div>
                <input type="submit" value="Upload" id="upload_btn" style="display:none;">
            <iframe name="upload_frame" class="upload_frame"></iframe>
        </div>
    </div>
                
           
                    <!--button type="submit" name="submit" value="submit" id="submit">Submit</button-->
                

            </form>
  <?php
        }
        ?>  
            
            
             
         
             <div id="popup_crop">
        <div class="form_crop">
            <span class="close" onClick="close_popup('popup_crop')">x</span>
            <h2>Crop Image</h2>
            <!-- This is the image we're attaching the crop to -->
            <img id="cropbox"/>
            
            <!-- This is the form that our event handler fills -->
            <form>
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />
                <input type="hidden" id="photo_url" name="photo_url" />
            <a  href="crop_photo.php?id=<?php echo $id;?>"> <input type="button" value="Crop Image" id="crop_btn" onClick="crop_photo()" /></a>
            </form>
        </div>
    </div>
            
            
            
            
            
            
         </div>
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

         <a href="#"><img src="img/1.png" class="section1_icon yk_top_margin15"></a>

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="#"><img src="img/6.png" class="section1_icon yk_top_margin15"></a>

       </div>

     </div>

   </div>
 </div>
</body>
</html>
