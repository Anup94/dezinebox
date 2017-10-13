<?php
//error_reporting(E_ERROR | E_PARSE);
$u=$_GET['u'];
include_once("check_login_status.php");
if(isset($_GET["u"])){
	$u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
} 
else {
    header("location: login.php");
    exit();	
}

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="cssh/styles.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="cssh/ie.css">
    <![endif]-->
    <script src="jsh/responsive-nav.js"></script>
     <link rel="stylesheet" type="text/css" href="csseffect/default.css" />
		<link rel="stylesheet" type="text/css" href="csseffect/editcompo.css" />
        
		<link rel="stylesheet" type="text/css" href="css3d/default.css" />
		<link rel="stylesheet" type="text/css" href="css3d/component.css" />
		<script src="js3d/modernizr.custom.js"></script>
        

        
        <style>
            @-ms-viewport{
  width: device-width;
}
            
            .container{
                padding-top:8%;
                    }
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
            
            a:link {color:white;
            text-decoration: none;}
            
             #fontl2{
                margin-top: 40px;
                margin-left: 10px;
            }
            #font1l{
                margin-left: 2000px;   
            }
            #font2{
                margin-top: -140px;
                
            }
            #fontt{
                margin-top: -140px;
                 position: absolute;
                 margin-left: 95px;
                 font-family: 'Source Sans Pro', sans-serif;
                 text-shadow: 2px 2px 2px white;
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
            
            #fontl3{
                margin-top: 80px;
                margin-left: 10px;
            }
            #font1l{
                margin-left: 100px;   
            }
            #font3{
                margin-top: 40px;
                float: left;
            }
            #font31{
                padding-top: 150px;
                margin-left: -55%;
            }
             #grays{
-webkit-filter: grayscale(1);
            filter: grayscale(1);
          opacity: 1;
}
             #font4{
                margin-top: -140px;
                margin-left: 0px;
            }
            #font41{
                padding-top: 300px;
                margin-left: -15%;
            }
            #fontl4{
                margin-top: 40px;
                margin-left: 10px;
            }
            #logo4{
            position:absolute;
             margin-top: -238px;
            
        }
           #logo5{
            position:absolute;
             margin-top: 80px;
            margin-left: 20px;    
        }
            

            @media only screen and (max-width: 350px){
    .container{
        margin-left: -37px;
        margin-top: 30px;
    }
        #previewImage{
                margin-left: -8%;
            }
         .md-modal md-effect-16{
                margin-top: -120%;
            }
                #model-16{
                    margin-top: -120%;
                }
} 
             @media only screen and (max-width: 480px){

                 #previewImage{
                    margin-left: -8%;
                }
                 .md-modal md-effect-16{
                margin-top: -120%;
            }
                #model-16{
                    margin-top: -120%;
                }
            }
        

            </style>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="http://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>
       
        <script>
$(document).ready(function(){

	
var element = $("#html-content-holder1"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image1").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage1").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image1").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image1").attr("download", "your_pic_name.png").attr("href", newData);
	});

});

</script>
  <script>
$(document).ready(function(){

	
var element = $("#html-content-holder2"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image2").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage2").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image2").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image2").attr("download", "your_pic_name.png").attr("href", newData);
	});

});

</script>
	  <script>
$(document).ready(function(){

	
var element = $("#html-content-holder3"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image3").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage3").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image3").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image3").attr("download", "your_pic_name.png").attr("href", newData);
	});

});

</script>
	  <script>
$(document).ready(function(){

	
var element = $("#html-content-holder4"); // global variable
var getCanvas; // global variable
 
    $("#btn-Preview-Image4").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                $("#previewImage4").append(canvas);
                getCanvas = canvas;
             }
         });
    });

	$("#btn-Convert-Html2Image4").on('click', function () {
    var imgageData = getCanvas.toDataURL("image/png");
    // Now browser starts downloading it instead of just showing it
    var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
    $("#btn-Convert-Html2Image4").attr("download", "your_pic_name.png").attr("href", newData);
	});

});

</script>
	       <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="047bfc03-c24c-493e-a6b3-459e51995a39";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script> 
        
	</head>
    <header>
      <?php include_once("menu.php");?>
    </header>

	<body>
       
		<div class="container">	

			<div class="main">
				<ul id="bk-list" class="bk-list clearfix">
					
                
                                                <?php
                $connect = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
                
                $sq=mysqli_query($connect,"SELECT * FROM users WHERE  username='$u'");
                while($s=mysqli_fetch_array($sq))
                {
                $res = mysqli_query($connect, "SELECT * FROM scollable where email='$s[email]' and save='1' ORDER BY id DESC ");
                }
                while($r= mysqli_fetch_array($res))
                {
                    if($r[temp_id]==1)
                    {
                        echo '<li>';
						echo '<div class="bk-book book-1 bk-bookdefault">
                <div class="bk-front">								
                    <div class="bk-cover-back"></div>                        
                    <div class="bk-cover" id="html-content-holder1" style="margin-top:-5px;">
                                <img src="'.($r['name'] ).'" width="250px" height="400px">
                                    <div id="logo1"><img src="img/b1b.png" width="300px" height="400px"></div>
                                    <div id="fontt"><span><font size="4" color="black">'.$r["title"].'</font></span></div>
                                    <div id="fonta"><span><font size="2.5" color="black" style="margin-left:50%; width:100px;">'.$r["aname"].'</font></span></div>
                                  <div id ="fontg"><span><font size="3" color="black">'.$r["sname"].'</font></span></div>
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
							<button class="bk-bookview">View inside</button>
                            <button class="bk">Edit</button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            <button class="md-trigger md-setperspective" data-modal="modal-16" id="btn-Preview-Image1" value="Preview"/>Preview</button>
                            							
						</div>';
					echo '</li>';
                
                    }
                    
                    if($r[temp_id]==2)
                    {
                    echo '<li>';
						echo '<div class="bk-book book-2 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder2">
									<div id="grays"><img src="'.($r['name'] ).'" width="300px" height="400px"></div>
                                    <div id="logo1"><img src="img/p1.png" width="300px" height="400px"></div>
									<center><h2>
                                   <div id ="font2"><span><font size="5">'.$r["title"].'</font></span></div>
								    <div id="fontl2"><span>'.$r["sname"].'</span>
                                    </div>
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
								    <span>'.$r["sname"].'</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookview">View inside</button>
                            <button class="bk">Edit</button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            <button class="md-trigger md-setperspective" data-modal="modal-16" id="btn-Preview-Image2" value="Preview"/>Preview</button>
                            
						</div>';
					echo '</li>';
                    }               
                    
                    if($r[temp_id]==3)
                    {
                    
					echo '<li>';
						echo '<div class="bk-book book-3 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder3">
									<img src="'.($r['name'] ).'" width="300px" height="240px">
                                    <div id="logo3"><img src="img/blue.png" width="300px" height="400px"></div>
									<center><h2>
                                    <div id ="font31"><span><font color="white">'.$r["aname"].'</font></span></div>
                                    <div id ="font3"><span><font size="4">'.$r["title"].'</font></span></div>
                                    <div id="fontl3"><span>'.$r["goal"].'</span>
                                    </div>
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
								<img src="images/3.png" alt="cat"/>
								<p>Template 3</p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>'.$r["title"].'</span>
								    <span>'.$r["sname"].'</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookview">View inside</button>
                            <button class="bk">Edit</button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            <button class="md-trigger md-setperspective" data-modal="modal-16" id="btn-Preview-Image3" value="Preview"/>Preview</button>
                            
						</div>';
					echo '</li>';
                    }
                    if($r[temp_id]==4)
                    {
                    
					echo '<li>';
						echo '<div class="bk-book book-4 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder4"><div id="pic">
								      <img src="'.($r['name'] ).'" width="160px" height="160px" style="border-radius:100px;">
								        </div>
                                    <div id="logo4"><img src="img/yellowcircle.png" width="300px" height="400px"></div>
                                  	<center><h2>
                                    <div id ="font41"><span><font color="white">'.$r["aname"].'</font></span></div>
                                    <div id ="font4"><span><font size="4" color="black" width="200px;"><b>'.$r["title"].'</b></font></span></div>
                                    <div id="fontl4"><span><font size="2" color="black">'.$r["goal"].'</font></span>
                                    </div>
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
								<img src="images/3.png" alt="cat"/>
								<p>Template </p>
							</div>
							<div class="bk-right"></div>
							<div class="bk-left">
								<h2>
									<span>'.$r["title"].'</span>
								    <span>'.$r["sname"].'</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="bk-bookview">View inside</button>
                            <button class="bk">Edit</button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            <button class="md-trigger md-setperspective" data-modal="modal-16" id="btn-Preview-Image4" value="Preview"/>Preview</button>
                            
						</div>';
					echo '</li>';
                    }
                }
                
                ?>
                    
                 <li>
						<div class="bk-book">
                                     <div id="logo5"><a href="template.php"><img src="img/plus.png" width="200px" height="200px"></a></div>
								</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
					</li>
                    
				</ul>
			</div>
		</div><!-- /container -->
        <div class="md-overlay"></div><!-- the overlay element -->
        <div class="md-modal md-effect-16" id="modal-16">
			<div class="md-content">
				<h3>Download Your Image</h3>
				<div>
                        <br/><div id="pcl">
                            <div id="previewImage1" >
                        </div></div>
                    <a id="btn-Convert-Html2Image1" href="#">Download</a>
					<button class="md-close" onClick="window.location.reload();">Close me!</button>
				</div>
			</div>
		</div>
		
        <div class="md-modal md-effect-16" id="modal-16">
			<div class="md-content">
				<h3>Download Your Image</h3>
				<div>
                        <br/><div id="pcl">
                            <div id="previewImage2" >
                        </div></div>
                    <a id="btn-Convert-Html2Image2" href="#">Download</a>
					<button class="md-close" onClick="window.location.reload();">Close me!</button>
				</div>
			</div>
		</div>
		
        <div class="md-modal md-effect-16" id="modal-16">
			<div class="md-content">
				<h3>Download Your Image</h3>
				<div>
                        <br/><div id="pcl">
                            <div id="previewImage3" >
                        </div></div>
                    <a id="btn-Convert-Html2Image3" href="#">Download</a>
					<button class="md-close" onClick="window.location.reload();">Close me!</button>
				</div>
			</div>
		</div>
		
        <div class="md-modal md-effect-16" id="modal-16">
			<div class="md-content">
				<h3>Download Your Image</h3>
				<div>
                        <br/><div id="pcl">
                            <div id="previewImage4" >
                        </div></div>
                    <a id="btn-Convert-Html2Image4" href="#">Download</a>
					<button class="md-close" onClick="window.location.reload();">Close me!</button>
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
        <script src="jseffect/classie.js"></script>
		<script src="jseffect/modalEffects.js"></script>
    
	</body>
</html>