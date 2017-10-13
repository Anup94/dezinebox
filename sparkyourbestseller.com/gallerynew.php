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
                        
/*
            @media screen and (max-width: 320px){  

                .container{
                    width: 30%;
                }
}  
*/
            
            .container{
                padding-top:8%;}
        
            #logo1{
            position:absolute;
            margin-top: -400px;
            
        }
         #logo3{
            position:absolute;
             margin-top: -240px;
            
        }
            #pic{
                margin-top: 72px;
                margin-left: 34px;
            }
            #logo4{
            position:absolute;
             margin-top: -232px;
            
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
                margin-top: 64px;
                margin-left: 100px;
                position: absolute;
            }
            
            #font3{
                margin-top: 22px;
                margin-left: 10%;
                font-weight: 600;
                width: 270px;
                transform:scale(1,2); /* W3C */
                -webkit-transform:scale(1,2); /* Safari and Chrome */
                -moz-transform:scale(1,2); /* Firefox */
                -ms-transform:scale(1,2); /* IE 9 */
                -o-transform:scale(1,2); 
                text-transform: uppercase;
                font-family: 'Palanquin Dark', sans-serif;
                position: absolute;
            }
            
            #font31{
                margin-top: -25px;
                margin-left: 10%;
                position: absolute;
            }
            
            
            #font4{
                margin-top: -150px;
                margin-left: 0px;
                
            }
            #font41{
                padding-top: 280px;
                margin-left: -15%;
            }
            #fontl4{
                margin-top: 40px;
                margin-left: 10px;
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
    
            .hidden{
                display:none;
            }

        .unhidden{
            display:block;
        }

            
            
        </style>
            <script type="text/javascript">
            window.$crisp=[];
            window.CRISP_WEBSITE_ID="047bfc03-c24c-493e-a6b3-459e51995a39";
            (function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
	</head>
	<body>

        <header>
        <?php include_once("menu.php"); ?>
     </header><br>
		<div class="container">	

			<div class="main">
				<ul id="bk-list" class="bk-list clearfix">
					
                        
                                                <?php
                $connect= mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable where temp_id='$id' ORDER BY id DESC LIMIT 1 ");
                while($r= mysqli_fetch_array($res))
                {
                    if($id==1)
                    {
                        session_start();
                        $temp_id=$id;
                        $_SESSION['temp_id'] = $temp_id;
                        echo $_SESSION['temp_id'];
                        
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
									<span>'.$r["aname"].'</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="md-trigger md-setperspective" data-modal="modal-16" id="btn-Preview-Image" value="Preview"/>Preview</button>
                            <button class="bk"><a href="template.php">Add New</a></button>
                            <br><br><button class="bk"><a href="save.php?id='.$r["id"].'">Save</a></button>
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
								    <span>'.$r["sname"].'</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="md-trigger md-setperspective" data-modal="modal-16" id="btn-Preview-Image" value="Preview"/>Preview</button>
                            <button class="bk"><a href="template.php">Add New</a></button>
                            <br><br><button class="bk"><a href="save.php?id='.$r["id"].'">Save</a></button>
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
                                  	
                                    <div id ="font31"><span><font color="white"><b>'.$r["aname"].'</b></font></span></div>
                                    <div id ="font3"><span><font size="4.5" color="white">'.$r["title"].'</font></span></div>
                                    <div id="fontl3"><span>'.$r["goal"].'</span>
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
								    <span>'.$r["sname"].'</span>
								</h2>
							</div>
							<div class="bk-top"></div>
							<div class="bk-bottom"></div>
						</div>
						<div class="bk-info">
							<button class="md-trigger md-setperspective" data-modal="modal-16" id="btn-Preview-Image" value="Preview"/>Preview</button>
                            <button class="bk"><a href="template.php">Add New</a></button>
                            <br><br><button class="bk"><a href="save.php?id='.$r["id"].'">Save</a></button>
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
							<button class="md-trigger md-setperspective" data-modal="modal-16" id="btn-Preview-Image" value="Preview"/>Preview</button>
                            <button class="bk"><a href="template.php">Add New</a></button>
                            <br><br><button class="bk"><a href="save.php?id='.$r["id"].'">Save</a></button>
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
				<h3>Download Your Image</h3>
				<div>
                        <br/><div id="pcl">
                            <div id="previewImage" >
                        </div></div>
                    <a id="btn-Convert-Html2Image" href="#">Download</a>
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
      
		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="jseffect/classie.js"></script>
		<script src="jseffect/modalEffects.js"></script>
    
		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
			</body>
</html>