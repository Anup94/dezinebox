<?php include 'analyticstracking.php' ?>
<?php
//session_start();
$id=$_GET['id'];
 //$email=$_POST['email'];
//echo $email;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
  <meta name="author" content="#Sparkyourbestseller">
    <meta property="og:url"           content="http://www.sparkyourbestseller.com" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />
<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=58e7b5389355230011ae64a5&product=inline-share-buttons"></script>
    <title></title>
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
            margin-top: -555px;
        }
        #logo2{
            position:absolute;
            margin-top: -235px;
            opacity: 0.8;
            margin-left: 25%;
        }
		#l{
			margin-left: 800px;
		}
        #logot2{
            position:absolute;
            margin-top: -495px;
        }
         #logot3{
            position:absolute;
            margin-top: -495px;
        }
          #grays{
-webkit-filter: grayscale(1);
            filter: grayscale(1);
          opacity: 1;
}
    </style>


     
    
</head>
<body>
    
    
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=109779186239170";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    
    
    
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
        <a class="navbar-brand" href="new.php"><img src="img/logo.png" class="logo" style="height: 188%;"></a>
      </div>
      <ul class="nav navbar-nav navbar-right">

        <li style="font-size: 26px;font-weight: 900;"><a href="login.php">Login</a></li>
      </ul>
    </div>
  </nav><?php
        }
        ?>
    <center>
    <div class="container">

       

            <!--Right Div-->
            <div class="w3-display-container w3-right"  id="down" style="margin-top:20px;margin-bottom:20px;">
                <?php
                $connect = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable where temp_id='$id' ORDER BY id DESC LIMIT 1 ");
                while($r= mysqli_fetch_array($res))
                {
                    if($id==1)
                    {
                     echo '<img src="'.($r['name'] ).'" height="500" width="350"/><p style="position: absolute; top: 260px; width: 150px; margin-left: 45%; z-index:5; color:#FFF"><font face="Century Gothic" size="6.8" color="black"><b>' .$r["title"].'</b></font></p><br><br><p style="position: absolute; top: 450px; width: 150px; margin-left: 60%; z-index:5; color:#FFF"><font size="4" face="Comic Sans MS" color="black">'.$r["aname"].'
                     </font></p><br><br><p style="position: absolute; top: 120px;width: 100px; margin-left: 70%; z-index:3; color:#FFF"><font size="4" face="Comic Sans MS" color="black">'.$r["goal"].'
                     </font></p><div id="logo1"><img src="img/b1b.png" width="350px" height="500px"></div>';
                    }
                     if($id==2)
                    {
//                         echo '<img src="'.($r['name'] ).'" height="120" width="120" style="border-radius:50%;margin-left:70%;margin-top:100%;opacity:1;"/><p style="position: absolute; top: 280px; width: 500px; margin-left: -25%; z-index:8; color:#FFF">
//                     <font face="Century Gothic" size="6.5" color="white"><b>' .$r["title"].'</b></font><br><br><font size="+3" face="Comic Sans MS">'.$r["aname"].'
//                     </font></p>';
//                        echo '<div id="logo2"><img src="img/b2b.jpg" width="350px" height="500px" z-index:-1;></div>';
                        echo '<div id="grays"><img src="'.($r['name'] ).'" height="500" width="350"/></div><p style="position: absolute; top: 400px; width: 200px; margin-left: 20%; z-index:5; color:#FFF">
                     <font face="Century Gothic" size="5" color="white">' .$r["title"].'</font><br><br><font size="3" face="Comic Sans MS">'.$r["aname"].'
                     </font></p>';
                        echo '<div id="logot2"><img src="img/p1.png" width="350px" height="500px"></div>';
                     }
                                                                      if($id==3)
                                                              {     
        
                                                            echo '<img src="'.($r['name'] ).'" height="500" width="350"/><p style="position: absolute; top: 320px; width: 500px; margin-left: -20%; z-index:5; color:#FFF">
                     <font face="Century Gothic" size="6.8" color="white">' .$r["title"].'</font><br><br><font size="3" color="white" face="Comic Sans MS">'.$r["goal"].'
                     </font></p><p style="position: absolute; top: 280px; width: 100px; margin-left: 10%; z-index:5; color:#FFF">
                     <font face="Century Gothic" size="3" color="white"><b>' .$r["aname"].'<b></font></p>';
                        echo '<div id="logot2"><img src="img/blue.png" width="350px" height="500px"></div>';
                                                            
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
<!--div class="a2a_kit a2a_kit_size_32 a2a_default_style">
<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.chillyfacts.com%2F&layout=button&size=small&mobile_iframe=true&appId=1907555382807342&width=58&height=20" width="58" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    

    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
 



 



    
    
    
<!--a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
</div-->
                
                
                
                
                
                
                
<script async src="https://static.addtoany.com/menu/page.js"></script>
        </div>
            </div>
    
        </center>
		
		<div class="sharethis-inline-share-buttons"></div>
    
    
    
    
    
    <div class="fb-share-button" data-href="http://localhost/fullscreenwithimg/share.php" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Ffullscreenwithimg%2Fshare.php&amp;src=sdkpreparse">Share</a></div>
		
</body>
    
    
    <div class="fb-share-button" data-href="http://localhost/fullscreenwithimg/share.php" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Ffullscreenwithimg%2Fshare.php&amp;src=sdkpreparse">Share</a></div>
    
    
    
    
    
  <!-- Your share button code -->
  <div class="fb-share-button" 
    data-href="http://localhost/fullscreenwithimg/share.php" 
    data-layout="button_count">
  </div>
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