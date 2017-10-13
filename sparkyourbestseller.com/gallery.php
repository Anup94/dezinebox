<?php include 'analyticstracking.php' ?>

<?php
//error_reporting(E_ERROR | E_PARSE);
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<head>
		<meta charset="UTF-8" />
        <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
        <meta name="author" content="#Sparkyourbestseller">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="cssh/styles.css">
        <link rel="stylesheet" type="text/css" href="csseffect/default.css" />
		<link rel="stylesheet" type="text/css" href="csseffect/component.css" />
        <link rel="stylesheet" type="text/css" href="fonts/font.css" />
		
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans+Condensed:300|Rajdhani|Roboto+Slab:700|Source+Sans+Pro:700|Yanone+Kaffeesatz:300,400,700" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="cssh/ie.css">
    <![endif]-->
    <script src="jsh/responsive-nav.js"></script>
		<link rel="stylesheet" type="text/css" href="css3d/default.css" />
		<link rel="stylesheet" type="text/css" href="css3d/component.css" />
		<script src="js3d/modernizr.custom.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="http://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
        <script src="bootbox.min.js"></script>
        <script>
$(document).ready(function(){

	
var element = $("#html-content-holder"); // global variable
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
<script type="text/javascript">
$(document).ready(function(){

//Check if the current URL contains '#' 
if(document.URL.indexOf("#")==-1)
{
// Set the URL to whatever it was plus "#".
url = document.URL+"#";
location = "#";

//Reload the page
location.reload(true);

}
});
</script>         
<script language=" JavaScript" >
<!-- 
function LoadOnce() 
{ 
window.location.reload(); 
} 
//-->
</script>        
    
        <style>
            
            
            
            
        @media only screen and (max-width: 350px){
    .container{
        margin-left: -37px;
        margin-top: 30px;
    }
            #previewImage{
                margin-left: -8%;
            }
            
} 
            
            
         @media only screen and (max-width: 480px){

                 #previewImage{
                    margin-left: -8%;
                }
            }
               @media only screen and (max-width: 350px){
               body{
                   -moz-transform:scale(0.6,0.6);
                   zoom:0.6;
                   zoom:60%;
               }
            }         
/*
            @media screen and (max-width: 320px){  

                .container{
                    width: 30%;
                }
}  
*/
            
            .container{
                padding-top:8%;
            padding-left: 10%;}
        
            #logo1{
            position:absolute;
            margin-top: -405px;
            
        }
         #logo3{
            position:absolute;
             margin-top: -245px;
            
        }
            #pic{
                margin-top: 72px;
                margin-left: 34px;
            }
            #logo4{
            position:absolute;
             margin-top: -238px;
            
        }
            a:link {color:white;
            text-decoration: none;}
            
             #fontl2{
                margin-top: 30px;
                margin-left: 0px;
                 text-transform: uppercase;
            }
            #font1l{
                margin-left: 2000px;   
            }
            #font2{
                margin-top: -120px;
                text-transform: uppercase;
                font-weight: 900;
                width: 250px;
                line-height: 400;
                transform:scale(1,3); /* W3C */
-webkit-transform:scale(1,3); /* Safari and Chrome */
-moz-transform:scale(1,3); /* Firefox */
-ms-transform:scale(1,3); /* IE 9 */
-o-transform:scale(1,3); 
            }
            
            #font1l{
                margin-left: 100px;   
            }
            
            
            
            #fontl3{           
    margin-top: 65px;
    margin-left: 35px;
    position: absolute;
    text-align: center;
    text-align-last: center;
    word-break: keep-all;
    font-weight: 500;
    font-family: 'Yanone Kaffeesatz', sans-serif;
            }
            
            #font3{
                margin-top: 20px;
                margin-left: 24px;
                font-weight: 500;
                width: 270px;
                text-align: center;
                word-break: keep-all;
                
                /*transform:scale(1,2); 
                -webkit-transform:scale(1,2); 
                -moz-transform:scale(1,2); 
                -ms-transform:scale(1,2); 
                -o-transform:scale(1,2); */
                text-transform: uppercase;
/*                font-family: 'Palanquin Dark', sans-serif;*/
                font-family: 'Yanone Kaffeesatz', sans-serif;
                position: absolute;

            }
            
            #font31{
                margin-top: -15px;
                margin-left: 10%;
                position: absolute;
                font-family: 'Rajdhani', sans-serif;
    
            }
            
            
            #font4{
                margin-top: -20px;
                position: absolute;
                margin-left: 50px;
                width:300px;
                text-transform: uppercase;
                border-style: solid;
               font-family: 'Yanone Kaffeesatz', sans-serif; 
            }
            #font41{
                position: absolute;
                margin-left: 20%;
                margin-top: 120px;
                border-style: solid;
                font-family: 'Rajdhani', sans-serif;
            }
            #fontl4{
                position: absolute;
                margin-top: 60px;
                margin-left: 20%;
                border-style: solid;
                font-weight: 700;
                font-family: 'Yanone Kaffeesatz', sans-serif;
                
            }
            
            .bl{
                margin-top: -3%;
            }
            
             #fonta{
                 position: absolute;
                 margin-top: -30px;
                margin-bottom: -20px;
                margin-left: 15%;
                 font-weight: 600;
                text-transform: uppercase;
                 width: 250px;
                font-weight: bolder;
                 font-family: 'Rajdhani', sans-serif;
                 letter-spacing: -0.1px;
                 text-align:right;
            }
             #fontt{
                margin-top: -140px;
                 position: absolute;
                 margin-left: 95px;
                 font-family: 'Source Sans Pro', sans-serif;
/*                 text-shadow: 2px 2px 2px white;*/
/*                 font-family: "CaviarDreams_Bold", sans-serif;*/
/*                 font-weight:300;*/
                 word-break: keep-all;
                 text-align:right;
                 width: 200px;
/*                 font-stretch: ultra-expanded;*/
                 text-transform: uppercase;
            }
            #fontg{
                margin-top: -280px;
                position: absolute;
                margin-left: 65%;
                width: 100px;
                font-family: 'Open Sans Condensed', sans-serif;
/*                font-family: 'Abel', sans-serif;*/
                text-align: right
            }
            #grays{
-webkit-filter: grayscale(1);
            filter: grayscale(1);
          opacity: 1;
}           
            #pcl{
                margin-left: -5%;
            }
            
/*
            #portal-logo img {
   width: 33%;
   max-width: 180px;
}
*/
            
            
            
/*
            @media all and (max-width: 480px) {
    #previewImage{width: 30%;}
}
            
            
            
            
            @media (min-width: 200px) {
  #previewImage {
    width: 50px;  }
}
            #previewImage{
                    width: 100vh;
                width: 100px;
}
*/    
            
            .input-control{padding:10px;width:100%;}
.input-group{margin-top:10px;}
#success_message{
    background:black;
}
.ajax_response {
    padding: 10px 20px;
    border: 0;
    display: inline-block;
    margin-top: 20px;
    cursor: pointer;
	display:none;
	color:#555;
}

            
            </style>
            <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="047bfc03-c24c-493e-a6b3-459e51995a39";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>			

        <script>
            
            $("#error_message").html("").hide();
		$.ajax({
				$('#success_message').fadeIn().html(data);
				setTimeout(function() {
					$('#success_message').fadeOut("slow");
				}, 2000 );

			});

print "Message is Saved!";
</script>
	</head>
	<body onLoad="JavaScript:checkRefresh();">
        
        
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=109779186239170";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        
        
        
        <header>
        <?php include_once("menu.php"); ?>
     </header><br><br><br><br>
		<div class="container" style="padding-top: 30px;">	

			<div class="main" style="padding:0px;">
				<ul id="bk-list" class="bk-list clearfix">
				<?php
                $connect= mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable where temp_id='$id' ORDER BY id DESC LIMIT 1 ");
                while($r= mysqli_fetch_array($res))
                {
                    session_start();
                        $temp_id=$id;
                        $_SESSION['temp_id'] = $temp_id;
                    if($id==1)
                    {
                        //echo $_SESSION['temp_id'];
                        echo '<li>';
						echo '<div class="bk-book book-1 bk-bookdefault">
							
                            <div class="bk-front">
									
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder">
                                
                            <img src="'.($r['name'] ).'" width="250px" height="400px">
                                    <div id="logo1"><img src="img/b1b.png" width="300px" height="400px"></div>
                                    <div id ="fontg"><span><font size="3" color="black">'.$r["sname"].'</font></span></div>
                                    <div id ="fontt"><span><font size="6em" color="black"><b>'.$r["title"].'</b></font></span></div>
                                   <div id="fonta"><span><font size="2.8" color="black">'.$r["aname"].'</font></span></div>
								</div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Title: '.$r["title"].'</p>
                                    <p>Goal: '.$r["goal"].'</p>
                                    <p>Author Name: '.$r["aname"].'</p>
                                    <p>Sub Head: '.$r["sname"].'</p>
								</div>
							</div>
							<div class="bk-back">
								<p>Template 1</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>'.$r["title"].'</span>
									
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="md-trigger md-setperspective" id="btn-Preview-Image" value="Preview"/><a id="btn-Convert-Html2Image" href="#">Download</a></button>
                            <button class="bk" href="template.php"><a href="template.php">Add New</a></button>
                            <br><br><button class="bk" class="alert alert-success alert-dismissable fade in"><a href="save.php?id='.$r["id"].'">Save</a></button>
                           <div class="fb-share-button" data-href="http://sparkthebestseller.com/gallery.php?id='.$id.'" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsparkthebestseller.com%2Fgallery.php%3Fid%3D%2524id&amp;src=sdkpreparse">Share</a></div>
                            
                            </div>';
					echo '</li>';
                
                    }
                    
                    if($id==2)
                    {
                    echo '<li>';
						echo '<div class="bk-book book-2 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder"><div id="grays">
									<img src="'.($r['name'] ).'" width="300px" height="400px"></div>
                                    <div id="logo1"><img src="img/p1.png" width="300px" height="400px"></div>
									<center><h2>
                                   <div id ="font2"><span><font size="4" face="Helvetica">'.$r["title"].'</font></span></div>
								    <div id="fontl2"><span><font size="4" face="Helvetica">'.$r["sname"].'</font></span></div>
									</h2></center>
								</div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Title: '.$r["title"].'</p>
                                    <p>Goal: '.$r["goal"].'</p>
                                    <p>Author Name: '.$r["aname"].'</p>
                                    <p>Sub Head: '.$r["sname"].'</p>
								</div>
							</div>
							<div class="bk-back">
								<img src="images/.png" alt="cat"/>
								<p>Template 2</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>'.$r["title"].'</span>
								    
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="md-trigger md-setperspective" id="btn-Preview-Image" value="Preview"/><a id="btn-Convert-Html2Image" href="#">Download</a></button>
                            <button class="bk"><a href="template.php">Add New</a></button>
                            <br><br><button class="bk"><a href="save.php?id='.$r["id"].'">Save</a></button>
                            
                            
                            <div class="fb-share-button" data-href="http://sparkthebestseller.com/gallery.php?id='.$id.'" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsparkthebestseller.com%2Fgallery.php%3Fid%3D%2524id&amp;src=sdkpreparse">Share</a></div>
                            
                            
						</div>';
					echo '</li>';
                    }               
                    if($id==3)
                    {
                    
					echo '<li>';
						echo '<div class="bk-book book-3 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder">
								      <img src="'.($r['name'] ).'" width="300px" height="240px">
								
                                    <div id="logo3"><img src="img/blue.png" width="300px" height="400px"></div>
                                  	
                                    <div id ="font31"><span><font color="white" size="3"><b>'.$r["aname"].'</b></font></span></div>
                                    <div id ="font3"><span><font size="6" color="white">'.$r["title"].'</font></span></div>
                                    <div id="fontl3"><span><font size="3" color="black">'.$r["sname"].'</font></span>
                                    </div>
									
								</div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Title: '.$r["title"].'</p>
                                    <p>Goal: '.$r["goal"].'</p>
                                    <p>Author Name: '.$r["aname"].'</p>
                                    <p>Sub Head: '.$r["sname"].'</p>
								</div>
							</div>
							<div class="bk-back">
								<img src="images/3.png" alt="cat"/>
								<p>Template 3</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>'.$r["title"].'</span>
						
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="md-trigger md-setperspective" id="btn-Preview-Image" value="Preview"/><a id="btn-Convert-Html2Image" href="#">Download</a></button>
                            <button class="bk"><a href="template.php">Add New</a></button>
                            <br><br><button class="bk"><a href="save.php?id='.$r["id"].'">Save</a></button><div id="success_message" class="ajax_response" style="float:left"></div>
                            
                            <div class="fb-share-button" data-href="http://sparkthebestseller.com/gallery.php?id='.$id.'" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsparkthebestseller.com%2Fgallery.php%3Fid%3D%2524id&amp;src=sdkpreparse">Share</a></div>
                            
						</div>';
					echo '</li>';
                    }
                    if($id==4)
                    {
                    
					echo '<li>';
						echo '<div class="bk-book book-4 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder"><div id="pic">
								      <img src="'.($r['name'] ).'" width="160px" height="160px" style="border-radius:100px;">
								        </div>
                                    <div id="logo4"><img src="img/yellowcircle.png" width="300px" height="400px"></div>
                                  	
                                    <div id ="font41"><span><font color="white">'.$r["aname"].'</font></span></div>
                                    <div id ="font4"><span><font size="6" color="black"><b>'.$r["title"].'</b></font></span></div>
                                    <div id="fontl4"><span><font size="2" color="black">'.$r["sname"].'</font></span>
                                    </div>
									
								</div>
							</div>
							<div class="bk-page">
								<div class="bk-content bk-content-current">
									<p>Title: '.$r["title"].'</p>
                                    <p>Goal: '.$r["goal"].'</p>
                                    <p>Author Name: '.$r["aname"].'</p>
                                    <p>Sub Head: '.$r["sname"].'</p>
								</div>
							</div>
							<div class="bk-back">
								<img src="images/3.png" alt="cat"/>
								<p>Template </p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>'.$r["title"].'</span>
								    
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="md-trigger md-setperspective" id="btn-Preview-Image" value="Preview"/><a id="btn-Convert-Html2Image" href="#">Download</a></button>
                            <button class="bk"><a href="template.php">Add New</a></button>
                            <br><br><button class="bk"><a href="save.php?id='.$r["id"].'">Save</a></button>
                            
                            
                            <div class="fb-share-button" data-href="http://sparkthebestseller.com/gallery.php?id='.$id.'" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsparkthebestseller.com%2Fgallery.php%3Fid%3D%2524id&amp;src=sdkpreparse">Share</a></div>
                            
                            
						</div>';
					echo '</li>';
                    }
                }
                ?>
				</ul>
			</div>
		</div><!-- /container -->
        

        
        
        
        
        <div class="md-overlay"></div><!-- the overlay element -->
        <div class="md-modal md-effect-16" id="modal-16">
			<div class="md-content">
				<h3>Are you sure you want to download</h3>
				<div>
                        <br/><div id="pcl">
                            <div id="previewImage" >
                        </div></div>
                    <a id="btn-Convert-Html2Image" href="#">Yes,Download</a>
					<button class="md-close" onClick="window.location.reload();">No</button>
				</div>
			</div>
		</div>
        
    
       
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js3d/books1.js"></script>
		<script>
			$(function() {

				Books.init();

			});
		</script>
        <script src="jsh/fastclick.js"></script>
    <script src="jsh/scroll.js"></script>
    <script src="jsh/fixed-responsive-nav.js"></script>
      
		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="jseffect/classie.js"></script>
		<script src="jseffect/modalEffects.js"></script>
    
		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
			</body>
</html>