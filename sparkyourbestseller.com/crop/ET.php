<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Lato'>

    
      
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/jquery.Jcrop.min.css" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>

 
<script src="js/jquery.Jcrop.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>    
    
    
   
    
  <style>
      .container{
          padding-top:1%;
      }
  </style>
</head>
<body>
  <div class="container">
      <div class="col-xs-12 yk_panel_background">


<div id="tab2">
            <div class="row">
                
        <div class="content">
            <span class="upload_btn" onclick="show_popup('popup_upload')">Click to upload photo</span>
            <div id="photo_container">
            </div>
        </div>   
        
        

    </div></div>
</div>

            <h2>Upload photo</h2>
            <form action="upload_photo.php" method="post" enctype="multipart/form-data" target="upload_frame" onsubmit="submit_photo()">
              
                    Title: <input type="text" name="title"><br>
                <input type="file" name="photo" id="photo" class="file_input">
                <div id="loading_progress"></div>
                <input type="submit" value="Upload photo" id="upload_btn">
            </form>
            <iframe name="upload_frame" class="upload_frame"></iframe>
       
    

    <!-- The popup for crop the uploaded photo -->
    <div id="popup_crop">
        <div class="form_crop">
            <span class="close" onclick="close_popup('popup_crop')">x</span>
            <h2>Crop photo</h2>
            <!-- This is the image we're attaching the crop to -->
            <img id="cropbox" />
            
            <!-- This is the form that our event handler fills -->
            <form>
                <input type="hidden" id="x" name="x" />
                <input type="hidden" id="y" name="y" />
                <input type="hidden" id="w" name="w" />
                <input type="hidden" id="h" name="h" />
                <input type="hidden" id="photo_url" name="photo_url" />
                <input type="button" value="Crop Image" id="crop_btn" onclick="crop_photo()" />
            </form>
        </div>
    </div>
      
      
      
    <div class="col-xs-12 yk_panel_bottom_background">
      <div class="row">


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="template.php"><img src="../img/8.png" class="section1_icon yk_top_margin15"></a>

       </div>
          
          <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom active ">

         <img src="../img/2.png" class="section1_icon yk_top_margin15 invert" style="color: rgba(0, 0, 0, 0.54)">

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="#"><img src="../img/1.png" class="section1_icon yk_top_margin15"></a>

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="#"><img src="../img/6.png" class="section1_icon yk_top_margin15"></a>

       </div>

     </div>

   </div>
 </div>
    
</body>
</html>
