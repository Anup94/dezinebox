<?php
error_reporting(E_ERROR | E_PARSE);
$u=$_GET['u'];


include_once("check_login_status.php");
// Initialize any variables that the page might echo
$u = "";
$sex = "Male";
$userlevel = "";
$profile_pic = "";
$profile_pic_btn = "";
$avatar_form = "";
$country = "";
$joindate = "";
$lastsession = "";
// Make sure the _GET username is set, and sanitize it
if(isset($_GET["u"])){
	$u = preg_replace('#[^a-z0-9]#i', '', $_GET['u']);
} 
else {
    header("location: login.php");
    exit();	
}
// Select the member from the users table
$sql = "SELECT * FROM users WHERE username='$u' LIMIT 1";
$user_query = mysqli_query($db_conx, $sql);
// Now make sure that user exists in the table
$numrows = mysqli_num_rows($user_query);
//if($numrows < 1){
//	echo "That user does not exist or is not yet activated, press back";
//    exit();	
//}
$isOwner = "no";
if($u == $log_username && $user_ok == true){
	$isOwner = "yes";
	$profile_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'avatar_form\')">Toggle Avatar Form</a>';
	$avatar_form  = '<form id="avatar_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$avatar_form .=   '<h4>Change your avatar</h4>';
	$avatar_form .=   '<input type="file" name="avatar" required>';
	$avatar_form .=   '<br><p><input type="submit" value="Upload"></p>';
	$avatar_form .= '</form>';
}
else{
	header("Location:login.php");
}
// Fetch the user row from the query above
while ($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)) {
	$profile_id = $row["id"];
	$gender = $row["gender"];
	$country = $row["country"];
	//$userlevel = $row["userlevel"];
	$avatar = $row["avatar"];
	$signup = $row["signup"];
	$lastlogin = $row["lastlogin"];
	$joindate = strftime("%b %d, %Y", strtotime($signup));
	$lastsession = strftime("%b %d, %Y", strtotime($lastlogin));
}
if($gender == "f"){
	$sex = "Female";
}
$profile_pic ='<img src="user/'.$u.'/'.$avatar.'" alt="'.$u.'">';
if($avatar == NULL){
	$profile_pic = '<img src="images/avatardefault.jpg">';
}
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<head>
		<meta charset="UTF-8" />
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
		<link rel="stylesheet" type="text/css" href="css3d/component1.css" />
		<script src="js3d/modernizr.custom.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="http://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
        <script src="bootbox.min.js"></script>
        <script src="script.js">
	</script>
        
     <script>	$(document).ready(function(){	   
	var element = $("#html-content-holder"); // global variable
	var getCanvas; // global variable

	   $("#btn-Convert-Html2Image").click( function () {

	        html2canvas(element, {
	        onrendered: function (canvas) {
	               $("#previewImage").append(canvas);
	               getCanvas = canvas;
		
	            }
	        });
			
			
			var imgageData = getCanvas.toDataURL("image/png");
	            
	   // Now browser starts downloading it instead of just showing it
	   var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
	   $(this).attr("download", "templates.png").attr("href", newData);
	
	   });
	     document.getElementById("btn-Convert-Html2Image").click(); 
	   });</script>    
        
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
            
            
            
            
        @media only screen and (max-width: 320px){
    .container{
        margin-left: -37px;
        margin-top: 10px;
        width: 320px;
        height: 480px;
    }
            #previewImage{
                margin-left: -8%;
            }
            
            .bk-list li .bk-front,
.bk-list li .bk-back,
.bk-list li .bk-front > div
            .img{
                width: 50px;
                height: 50px;
            }
            
} 
             #logo5{
            position:absolute;
             margin-top: 180px;
            margin-left: 50px;    
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
            margin-top:-3%;
            padding-left: 10%;}
        
            #logo1{
            position:absolute;
            margin-top:-136.2%;
            
        }
         #logo3{
            position:absolute;
        
            
        }
            #pic{
                margin-top: 28%;
                margin-left: 16%;
            }
            #logo4{
            position:absolute;
             margin-top: -74%;
            
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
                     margin-top: 57px;
                    margin-left: 45px;
                    position: absolute;
                    font-size: 22px;
                    text-align: center;
                    /* text-align-last: center; */
                    word-break: keep-all;
                    font-weight: 500;
                     color: #bbdefb;
                     overflow: hidden;
                    font-family: 'Yanone Kaffeesatz', sans-serif;
                   width: 336px;
                   height: 97px;
                   text-transform: capitalize;
    
                   
	           }
	           
	           #font3{
	               margin-top: 10px;
	               margin-left: 43px;
                   overflow: hidden;
	               font-weight: 600;
	               width:  339px;
                   color: white;
                 
                   font-size: 36px;
	               text-align: center;
	               word-break: keep-all;
                       height: 49px;
	               
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
	            margin-top: -44px;
                margin-left: 44px;
                position: absolute;
                font-size: 20px;
                color: white;
                   text-transform: uppercase;
                font-family: 'Rajdhani', sans-serif;
	           }
	           
            
            
            #font4{
	                margin-top: 1px;
                    position: absolute;
                    margin-left: 70px;
                    line-height: 55px;
                    font-size: 51px;
                    width: 317px;
                    height: 103px;
                    overflow: hidden;
                    text-transform: uppercase;
	                font-family: 'Yanone Kaffeesatz', sans-serif; 
	           } 
	           #font41{
                        position: absolute;
                        margin-left: 75px;
                        margin-top: 197px;
                        font-weight: 600;
                        text-shadow: 1px 1px #868686;
                        border-style: solid;
                        font-size: 18px;
                        text-transform: uppercase;
                        font-family: 'Rajdhani', sans-serif;
                         overflow: hidden;
                       color: white;
	           }
	           #fontl4{
	                position: absolute;
                    margin-top: 109px;
                    width: 310px;
                    height: 87px;
                    overflow: hidden;
                    margin-left: 74px;
                    border-style: solid;
                    font-size: 19px;
                   text-shadow:  1px 1px 1px black;
                    font-weight: 300;
                       text-transform: capitalize;
                    font-family: 'Yanone Kaffeesatz', sans-serif;

	           }
            
            .bl{
                margin-top: -3%;
            }
            
             #fonta{
	                position: absolute;
	                    margin-top: -38px;
                        margin-bottom: -20px;
                        margin-left: 140px;
                    font-size: 22px;
	                font-weight: 600;
                    color: black;
	               text-transform: uppercase;
	                width: 250px;
	               font-weight: bolder;
	                font-family: 'Rajdhani', sans-serif;
	                letter-spacing: -0.1px;
	                text-align:right;
	           }
	            #fontt{
	                margin-top: -219px;
                    position: absolute;
                    margin-left: 143px;
	                font-family: 'Source Sans Pro', sans-serif;
	/*                 text-shadow: 2px 2px 2px white;*/
	/*                 font-family: "CaviarDreams_Bold", sans-serif;*/
	/*                 font-weight:300;*/
	                word-break: keep-all;
	                text-align:right;
	                width: 250px;
	/*                 font-stretch: ultra-expanded;*/
	                text-transform: uppercase;
	           }
	           #fontg{
	                  margin-top: -408px;  
                        position: absolute;
                        margin-left: 271px;
	               width: 120px;
	               font-family: 'Open Sans Condensed', sans-serif;
	/*                font-family: 'Abel', sans-serif;*/
	               text-align: right;
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
                 
                        //echo $_SESSION['temp_id'];
                        echo '<li>';
						echo '<div class="bk-book book-1 bk-bookdefault">
							
                            <div class="bk-front">
									
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder">
                                
                             <img src="'.($r['name'] ).'" width="250px" height="540px">
                                    <div id="logo1"><img src="img/b1b.png" width="400px" height="540px"></div>
                                    <div id ="fontg"><span><font size="5" color="black">'.$r["sname"].'</font></span></div>
				                                    <div id ="fontt"><span><font size="6" color="black"><b>'.$r["title"].'</b></font></span></div>
				                                   <div id="fonta"><span>'.$r["aname"].'</span></div>
                                   
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
                       <a id="btn-Convert-Html2Image" href="#">Download</a>
                       <button class="bk-bookview">View inside</button>
                            <button class="bk"><a href="template.php">Edit</a></button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            </div>';
					echo '</li>';
                
                    }
                    
                    if($r[temp_id]==2)
                    {
                    echo '<li>';
						echo '<div class="bk-book book-2 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder2"><div id="grays">
									<img src="'.($r['name'] ).'" width="400px" height="540px"></div>
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
                        <button id="btn-Preview-Image2" value="Preview"/><a id="btn-Convert-Html2Image2" href="#">Download</a></button>
							<button class="bk-bookview">View inside</button>
                            <button class="bk"><a href="template.php">Edit</a></button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            
						</div>';
					echo '</li>';
                    }               
                    if($r[temp_id]==3)
                    {
                    
					echo '<li>';
						echo '<div class="bk-book book-3 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder">
								     <div id="logo3"><img src="img/blue.png" width="400px" height="540px"></div>
                                  	 <img src="'.($r['name'] ).'" width="400px" height="350px">
								
                                    
                                    <div id ="font31"><span><b>'.$r["aname"].'</b></span></div>
				                                    <div id ="font3"><span>'.$r["title"].'</span></div>
				                                    <div id="fontl3"><span>'.$r["sname"].'</span> </div>
									
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
                        <a id="btn-Convert-Html2Image" href="#">Download</a>
                        <button class="bk-bookview">View inside</button>
                            <button class="bk"><a href="template.php">Edit</a></button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
						</div>';
					echo '</li>';
                    }
                    if($r[temp_id]==4)
                    {
                    
					echo '<li>';
						echo '<div class="bk-book book-4 bk-bookdefault">
							<div class="bk-front">
								<div class="bk-cover-back"></div>
								<div class="bk-cover" id="html-content-holder"><div id="pic">
								      <img src="'.($r['name'] ).'" width="180px" height="180px" style="border-radius:100px;">
								        </div>
                                    <div id="logo4"><img src="img/yellowcircle.png" width="400px" height="540px"></div>
                                  	
                                   <div id ="font41"><span>'.$r["aname"].'</span></div>
				                                    <div id ="font4"><span><b>'.$r["title"].'</b></span></div>
				                                    <div id="fontl4"><span>'.$r["sname"].'</span></div>	
									
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
                       <a id="btn-Convert-Html2Image" href="#">Download</a>
							<button class="bk-bookview">View inside</button>
                            <button class="bk"><a href="template.php">Edit</a></button>
							<br><br><button class="bk"><a href="delete.php?id='.$r["id"].'">Delete</a></button>
                            
                            
						</div>';
					echo '</li>';
                    }
                }
                ?>
                    <li><br>
						<div class="bk-book">
                                     <a href="template.php"><img src="img/plus.png" width="200px" height="200px"></a>
								</div>
							<div class="bk-top"></div>
							<div class="bk-bottom" style="background-color: rgba(74,74,102,0);"></div>
					</li>
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