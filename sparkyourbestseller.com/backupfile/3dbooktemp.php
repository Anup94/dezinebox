<?php
error_reporting(E_ERROR | E_PARSE);
$u=$_GET['u'];
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="cssh/styles.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="cssh/ie.css">
    <![endif]-->
    <script src="jsh/responsive-nav.js"></script>
    
		<link rel="stylesheet" type="text/css" href="css3d/default.css" />
		<link rel="stylesheet" type="text/css" href="css3d/component.css" />
		<script src="js3d/modernizr.custom.js"></script>
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
        
        
        <style>
            
            .container{
                padding-top:2%;}
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
            #logo4{
            position:absolute;
             margin-top: -232px;
            
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
                $("#previewImage").append(canvas);
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
                $("#previewImage").append(canvas);
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
                $("#previewImage").append(canvas);
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
                $("#previewImage").append(canvas);
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
	        
        
	</head>
	<body>
       <?php
    include_once("check_login_status.php");
        if($user_ok == true){
	?>
     <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="logo" style="height:188%;"></a>
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

        <li style="font-size: 26px;font-weight: 900;"><a href="logout.php">Login</a></li>
      </ul>
    </div>
  </nav><?php
        }
        ?>

		<div class="container">	

			<div class="main">
				<ul id="bk-list" class="bk-list clearfix">
					
                        
                                                <?php
                $connect = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable where email='$u' ORDER BY id DESC ");
                while($r= mysqli_fetch_array($res))
                {
                    if($r[temp_id]==1)
                    {
                        echo '<li>';
						echo '<div class="bk-book book-1 bk-bookdefault">
							<div class="bk-front">
									
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder1">
                                
                            <img src="'.($r['name'] ).'" width="300px" height="400px">
                                    <div id="logo1"><img src="img/b1b.png" width="300px" height="400px"></div>
									<h2><div id="font1l">
                                            <span><font size="4" color="black">'.$r["title"].'</font></span>
								<span><font size="2.5" color="black" style="margin-left:50%; width:100px;">'.$r["sname"].'</font></span></div>
									</h2>
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
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
                            <button class="bk">Edit</button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            <br><br><button class="bk"> <input id="btn-Preview-Image1" type="button" value="Preview"/>
    <a id="btn-Convert-Html2Image1" href="#">Download</a>
    <br/>
    <div id="html-content-holder1">
    </div></button>
							
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
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
                            <button class="bk">Edit</button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            <br><br><button class="bk"> <input id="btn-Preview-Image2" type="button" value="Preview"/>
    <a id="btn-Convert-Html2Image2" href="#">Download</a>
    <br/>
    <div id="html-content-holder2">
    </div></button>
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
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
                            <button class="bk">Edit</button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            <br><br><button class="bk"> <input id="btn-Preview-Image3" type="button" value="Preview"/>
    <a id="btn-Convert-Html2Image3" href="#">Download</a>
    <br/>
    <div id="html-content-holder3">
    </div></button>
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
							<button class="bk-bookback">Flip</button>
							<button class="bk-bookview">View inside</button>
                            <button class="bk">Edit</button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            <br><br><button class="bk"><input id="btn-Preview-Image4" type="button" value="Preview"/>
    <a id="btn-Convert-Html2Image4" href="#">Download</a>
    <br/>
    <div id="html-content-holder4">
    </div></button>
						</div>';
					echo '</li>';
                    }
                }
                ?>
				</ul>
			</div>
		</div><!-- /container -->
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
	</body>
</html>