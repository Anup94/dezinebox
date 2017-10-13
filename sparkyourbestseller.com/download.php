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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://developer.mozilla.org/en-US/docs/Template:CustomSampleCSS?raw=1" />
    
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
    
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
    
    
  <style>
      .container{
          padding-top:2%;
      }
      .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
     

  #logo1{
            position: absolute;
            margin-left: 35%;
            opacity: 1;
        }
      #layout{
          margin-top: 40%;
          margin-left: 35%;
      }

      .yk_panel_background{
	background-color: #203864;
	min-height:500px;
}
      
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>
    
</head>
<body>
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="img/logo.png" class="logo" style="height: 188%;"></a>
      </div>
      <ul class="nav navbar-nav navbar-right">

        <li style="font-size: 26px;font-weight: 900;"><a href="#">Login</a></li>
      </ul>
    </div>
  </nav>

         
        <?php
                if($_POST){
                session_start();
                $email=$_POST['email'];
                $_SESSION['logname']=$email;
                $email=$_POST['email'];
                        
                $connect = mysqli_connect("localhost", "root", "", "sparklive");
               // $id=$_GET['id'];
                $res = mysqli_query($connect, "SELECT * FROM scollable where email='$email' ORDER BY id DESC LIMIT 1  ");
                while($r= mysqli_fetch_array($res))
                {
                    
                                                            if($id==1)
                                                              {
                                                            
                                                                echo '<div id="downimage"><div id="logo1"><img src="img/bookcover3.jpg" id="book_tab2_photo" width="400" height="500" style="z-index:8;"><img src="data:image/jpg;base64,'.base64_encode($r['name'] ).'" width="400" height="350" style="margin-left:-50%;margin-top:-12%; opacity:0.8;"/><p style="position: absolute;z-index:5; color:#black; margin-left:18%;margin-top:-18%;">
                     <font face="Century Gothic" size="10" color="black">' .$r["title"].'</font><br><br><font size="+3" face="Comic Sans MS">'.$r["aname"].'</font></p></div></div>';
                                                                
                                                                }
                                                            else if($id==2)
                                                              {
                                                              
                                                              echo '<div id="logo1"><img src="img/bookcover2.jpg" id="book_tab2_photo" width="500" height="500"><img src="data:image/jpg;base64,'.base64_encode($r['name'] ).'" width="400" height="350" style="margin-left:-50%;margin-top:-10%;"/><p style="position: absolute;z-index:5; color:#black; margin-left:22%;margin-top:-15%;">
                     <font face="Century Gothic" size="10" color="black">' .$r["title"].'</font><br><br><font size="+3" face="Comic Sans MS">'.$r["aname"].'</font></p></div>';
                                                              }
                                                              else if($id==3)
                                                              {     
        
                                                              echo '<img src="img/3.jpg" id="book_tab2_photo" width="200" height="200">';
                                                            
                                                              }
                                                           else if($id==4)
                                                            {
                                                            
                                                                echo '<img src="img/13.jpg" id="book_tab2_photo" width="200" height="200">';

                                                             
                                                                }
                                                            else if($id==5)
                                                            {
                                                              
                                                                    echo '<img src="img/book5.jpg" id="book_tab2_photo" width="200" height="200">';
                                                            
                                                            }

                                                            else if($id==6)
                                                            {
                                                              
                                                                    echo '<img src="img/book6.jpg" id="book_tab2_photo" width="200" height="200">';
    
                                                            }

                    
       
                    }
                }
            ?>
             
<div id="layout">

    <input id="btn-Preview-Image" type="button" value="Preview"/>
    <a id="btn-Convert-Html2Image" href="#">Download</a>
    <br/>
    <h3>Preview :</h3>
    <div id="downimage">
    </div>
</div>

    
    
    
   <script>
$(document).ready(function(){

	
var element = $("#downimage"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
	});

});

</script>   
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="html2canvas.js"></script>
    
    </body>
</html>
