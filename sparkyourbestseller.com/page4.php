<?php include 'analyticstracking.php' ?>
<?php

$id=$_GET['id'];
 
$email=$_GET['email'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
  <meta name="author" content="#Sparkyourbestseller">
    <title>#Sparkyourbestseller</title>
    <link rel="stylesheet" href="css/w3.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://developer.mozilla.org/en-US/docs/Template:CustomSampleCSS?raw=1" />
  
    <script src="js/croppie.js"></script>


    <style>
        div.container {
            margin-top: 5px;
             width: 60%;
            height: 200px;
            margin-left: 150px;
            margin-right: 150px;
            margin-bottom: 75px;
        }
        .container{
            height: 20px;
        }
        #s{
	padding-left:1200px;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	font-size:20px;
	}
        
        #sh{
            margin-top:200px;
            margin-left: 500px;
        }
        
        #logo{
            position: absolute;
        }
        #logo1{
            position:absolute;
            margin-top: -500px;
            opacity: 0.65;
        }
		#l{
			margin-left: 800px;
		}
	
    </style>

</head>
<body>
    <center>
     <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" style="height: 188%;"></a>
      </div>
      <ul class="nav navbar-nav navbar-right">

        <li style="font-size: 26px;font-weight: 900;"><a href="#">Login</a></li>
      </ul>
    </div>
  </nav>
    <div class="container">

        <div class="w3-container w3-light-grey">
            <!--Left Div-->
            <!--Form Setup-->
            <div class="w3-left w3-light-grey">
                
            </div>

            <!--Right Div-->
            <div class="w3-display-container w3-right w3-light-grey hoverable"  id="down" style="margin-top:20px;margin-bottom:20px;">
                <?php
                $connect = mysqli_connect("localhost", "root", "", "test");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable where email='$email' ORDER BY id DESC ");
                while($r= mysqli_fetch_array($res))
                {
                    if($id==1)
                    {
                     echo '<img src="data:image/jpg;base64,'.base64_encode($r['name'] ).'" height="500" width="350"/><p style="position: absolute; top: 300px; width: 500px; margin-left: -20%; z-index:5; color:#FFF">
                     <font face="Century Gothic" size="10" color="white">' .$r["title"].'</font><br><br><font size="+3" face="Comic Sans MS">'.$r["aname"].'
                     </font></p>';
                        echo '<div id="logo1"><img src="img/bookcover3.jpg" width="350px" height="500px" z-index:-1;></div>';
                    }
                     if($id==2)
                                                              {
                                                              
                                                             echo '<img src="data:image/jpg;base64,'.base64_encode($r['name'] ).'" height="500" width="350"/><p style="position: absolute; top: 350px; width: 500px; margin-left: -20%; z-index:5; color:#FFF">
                     <font face="Century Gothic" size="10" color="white">' .$r["title"].'</font><br><br><font size="+3" face="Comic Sans MS">'.$r["aname"].'
                     </font></p>';
                        echo '<div id="logo1"><img src="img/bookcover2.jpg" width="350px" height="500px" z-index:-1;></div>';
                                                              }
                                                              if($id==3)
                                                              {     
        
                                                              echo '<img src="img/3.jpg" id="book_tab2_photo" width="200" height="200">';
                                                            
                                                              }
                                                           if($id==4)
                                                            {
                                                            
                                                                echo '<img src="img/13.jpg" id="book_tab2_photo" width="200" height="200">';

                                                             
                                                                }
                                                            if($id==5)
                                                            {
                                                              
                                                                    echo '<img src="img/book5.jpg" id="book_tab2_photo" width="200" height="200">';
                                                            
                                                            }

                                                            if($id==6)
                                                            {
                                                              
                                                                    echo '<img src="img/book6.jpg" id="book_tab2_photo" width="200" height="200">';
    
                                                            }

                     
                }

         

                ?>

                
                <!--img class="responsive-img" src="1.jpg" width="350" height="500"  /-->
                <!--<div></div>

                <div class="w3-padding w3-display-right"> Hello</div>-->
            </div>
            <div id="sh">
                <!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
        </div>
            </div>
    </div>
        </center>
</body>
</html>

    
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
 
                <!--?php
  $con=mysqli_connect("localhost","root","","test");
mysqli_query($con, "truncate table temp");
      mysqli_close($con);
   
                ?-->
<div id="l">
	<input id="btn-Preview-Image" type="button" value="Preview"/>
    <a id="btn-Convert-Html2Image" href="#">download</a>
    <br/>
    <div id="down">
    </div>
<div id="cover"> </div>
</div>

<script>
$(document).ready(function(){

	
var element = $("#down"); // global variable
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