<?php
//error_reporting(E_ERROR | E_PARSE);
$u=$_GET['u'];

session_start();
$email=$_SESSION['email'];
//echo $email;


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
	$u = preg_replace('#^%20#', ' ', $_GET['u']);
} 
else {
    //$u = preg_replace('#[^a-z0-9]#i', '', $_SESSION['username']);
    $u = preg_replace('#^%20#', ' ', $_SESSION['username']);
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
//if($u == $log_username && $user_ok == true){
if($user_ok == true){
	$isOwner = "yes";
	$profile_pic_btn = '<a href="#" onclick="return false;" onmousedown="toggleElement(\'avatar_form\')">Toggle Avatar Form</a>';
	$avatar_form  = '<form id="avatar_form" enctype="multipart/form-data" method="post" action="php_parsers/photo_system.php">';
	$avatar_form .=   '<h4>Change your avatar</h4>';
	$avatar_form .=   '<input type="file" name="avatar" required>';
	$avatar_form .=   '<br><p><input type="submit" value="Upload"></p>';
	$avatar_form .= '</form>';
}
else{
	header("Location:login4.php");
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
        <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
        <meta name="author" content="#Sparkyourbestseller">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="cssh/styles.css">
        <link rel="stylesheet" type="text/css" href="csseffect/default.css" />
		<link rel="stylesheet" type="text/css" href="csseffect/component.css" />
        
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans+Condensed:300|Rajdhani|Roboto+Slab:700|Source+Sans+Pro:700|Yanone+Kaffeesatz:300,400,700" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="cssh/ie.css">
    <![endif]-->
   	<link rel="stylesheet" type="text/css" href="css3d/default.css" />
		<link rel="stylesheet" type="text/css" href="css3d/component1.css" />
		<script src="js3d/modernizr.custom.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
        <script src="bootbox.min.js"></script>
        <script src="html2canvas.js"></script>
        
<!--
        <script src="script.js">
	</script>
        
-->
     
        
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

                $(".link").click(function () {
                    debugger;
                    var element = $(this).parent().prev('div');
                    var getCanvas;
                    html2canvas(element, {
                        onrendered: function (canvas) {
                        
                            $("#previewImage").append(canvas);
                            getCanvas = canvas;
                            var a = document.createElement('a');
                            a.href = getCanvas.toDataURL("image/jpg").replace(/^data:image\/jpg/, "data:application/octet-stream");
                            a.download = 'MyBestSeller.jpg';
                            a.click();
                            
                        
                        }
                        
                    });


                });
            });
</script>
        
        
<!--
<script type="text/javascript">
	$(document).ready(function(){	   
	var element = $("#html-content-holder"); // global variable
	var getCanvas; // global variable

	   $("#btn-Convert-Html2Image").click( function () {

	        html2canvas(element, {
	        onrendered: function (canvas) {
	               $("#previewImage").append(canvas);
	               getCanvas = canvas;
		
	            }
	        });
			
			
			var imgageData = getCanvas.toDataURL("image/jpg");
	            
	   // Now browser starts downloading it instead of just showing it
	   var newData = imgageData.replace(/^data:image\/jpg/, "data:application/octet-stream");
	   $(this).attr("download", "MyBestSeller.jpg").attr("href", newData);
	
	   });
	     document.getElementById("btn-Convert-Html2Image").click(); 
	   });
    </script>        
-->
        
        
<script language=" JavaScript" >
<!-- 
function LoadOnce() 
{ 
window.location.reload(); 
} 
//-->
</script>        
    
       
        
        <style>
            
            
            /*@media only screen and (max-width: 480px){
               body{
                   -moz-transform:scale(0.6,0.6);
                   zoom:0.6;
                   zoom:60%;
               }
            }*/
            
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
            /* #logo5{
            position:absolute;
             margin-top: 180px;
            margin-left: 50px;    
        }*/
            
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
            margin-top:-136%;
            
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
            
            #font1l{
                margin-left: 2000px;   
            }
           
            
           #font1l{
                margin-left: 100px;   
            }
            
            #fontl2{
/*                padding: 4px;*/
	           margin-top: -36px;
    margin-left: 94px;
    font-size: 25px;
    position: absolute;
    text-transform: uppercase;
    font-family: 'Yanone Kaffeesatz', sans-serif; 
    font-weight: 400;
    width: 212px;
    height: 24px;
    text-align: center;
    overflow: hidden;
    line-height: initial;
    color: white;
               }
	         
	           #font2{               
                 margin-top: -162px;
    margin-left: 64px;
    text-transform: uppercase;
    color: white;
    position: absolute;
    font-weight: 700;
    font-size: 45px;
    font-family: 'Yanone Kaffeesatz';
    width: 272px;
    text-align: center;
    text-align-last: center;
    line-height: 0.89em;
    height: 115px;
    overflow: hidden;   
	           }
	            
            
            #fontl3{           
                margin-top: 68px;
                    margin-left: 45px;
                    position: absolute;
                    font-size: 22px;
                    text-align: center;
                    /* text-align-last: center; */
                    word-break: keep-all;
                    font-weight: 500;
                     color: #bbdefb;
                     overflow: hidden;
                    font-family: 'Yanone Kaffeesatz',sans-serif;
                   width: 336px;
                   height: 97px;
                   text-transform: capitalize;
                   line-height: 1em; 
	           }
	           
	           #font3{
	            margin-top: 20.5px;
    margin-left: 43px;
    overflow: hidden;
    font-weight: 600;
    width: 339px;
    color: white;
    font-size: 36px;
    text-align: center;
    word-break: keep-all;
    height: 35px;
    text-transform: uppercase;
    font-family: 'Yanone Kaffeesatz', sans-serif;
    position: absolute;
	           }
	           
	           #font31{
	             margin-top: -41px;
    margin-left: 44px;
    position: absolute;
    font-size: 20px;
    color: white;
    width: 300px;
    height: 29px;
    text-align: left;
    overflow: hidden;
    text-transform: uppercase;
    font-family: 'Rajdhani', sans-serif;
	           }
	           
            
            
            #font4{
	                margin-top: 8px;
                    position: absolute;
                    margin-left: 70px;
                    line-height: 48px;
                    font-size: 50px;
                    width: 317px;
                    height: 97px;
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
    width: 313px;
    height: 25px;
    text-transform: uppercase;
    font-family: 'Rajdhani', sans-serif;
    overflow: hidden;
    color: white;
	           }
	           #fontl4{
	                position: absolute;
                    margin-top: 116px;
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
    margin-left: 74px;
    font-size: 19px;
    color: black;
    text-transform: uppercase;
    width: 318px;
    height: 31px;
    font-weight: bolder;
    font-family: 'Rajdhani', sans-serif;
    letter-spacing: -0.1px;
    text-align: right;
    overflow: hidden;
	           }
	            #fontt{
	                margin-top: -219px;
    position: absolute;
    margin-left: 143px;
    font-family: 'Source Sans Pro', sans-serif;
    text-shadow: 2px 2px 2px #919191;
    word-break: keep-all;
    text-align: right;
    width: 247px;
    text-transform: uppercase;
    overflow: hidden;
    height: 183px;
	           }
	           #fontg{
	               margin-top: -407px;
    position: absolute;
    margin-left: 268px;
    width: 122px;
    height: 197px;
    font-family: 'Open Sans Condensed', sans-serif;
    text-align: right;
    overflow: hidden;
	           }
            #grays{
/*
-webkit-filter: grayscale(1);
            filter: grayscale(1);
          opacity: 1;
*/
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
        
        <!-- <link rel="stylesheet" href="cssfooter/footerindex.css">
    <style>
    @media screen and (max-width: 320px) {
        #myFooter .footer-copyright {
    background-color: white;
    padding-top: 3px;
    font-size: 13px;
    padding-bottom: 3px;
    text-align: center;
    width: 100%;
        }
        #col{
            margin-top: -10%;
        }
    }
         @media screen and (max-height: 480px) {
            body{
            height:100%;
        }}
    </style> -->
        
<!--
            <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="047bfc03-c24c-493e-a6b3-459e51995a39";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>			
-->
	</head>
	<body style="line-height: normal;">
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=114942558697662";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        
<!--       
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=109779186239170";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        
-->
        
        <header>
        <?php include_once("menu.php"); ?>
     </header><br><br><br><br>
		<div class="container" style="padding-top: 60px;">
			<div class="main" style="padding:0px;">
				<ul id="bk-list" class="bk-list clearfix">  
				<?php
                $connect = mysqli_connect("localhost", "root", "", "sparklive");
               

                    $res=mysqli_query($connect,"SELECT * FROM scollable where email='$email' and save='1' ORDER BY id DESC");
                    $res1="SELECT * FROM scollable where email='$email' and save='1' ORDER BY id DESC";
                    //echo $sql;
               
                   if ($result=mysqli_query($connect,$res1))
                      {
                      // Return the number of rows in result set
                      $rowcount=mysqli_num_rows($result);
                      
                       if($rowcount>0){
                     
                           
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
                                
                             <img src="'.($r['name'] ).'" width="275px" height="540px">
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
                               <a id="btn-Convert-Html2Image" href="#" class="link"><img src="img/d1.png" width="180px" height="40px" title="Download" style="margin-left: 15px;"></img></a>

                                
							 <a href="delete.php?id='.$r["id"].'">                            
                            <img src="img/delete.png" width="180px" height="40px" title="Delete Template" style="margin-left: 15px;">
                            </a>
                            
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
                                    <div id="logo1"><img src="img/p1.png" width="400px" height="540px"></div>
									<center>
                                   <div id ="font2">'.$r["title"].'</div>
								    <div id="fontl2">'.$r["aname"].'</div>
								</center>
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
                        
                         <a id="btn-Convert-Html2Image" href="#" class="link"><img src="img/d1.png" width="180px" height="40px" title="Download" style="margin-left: 15px;"></img></a>
                         
                           
							                           
                            <a href="delete.php?id='.$r["id"].'">
                            <img src="img/delete.png" width="180px" height="40px" title="Delete Template" style="margin-left: 15px;">
                            </a>
                           
                            
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
                        <a id="btn-Convert-Html2Image" href="#" class="link"><img src="img/d1.png" width="180px" height="40px" title="Download" style="margin-left: 15px;"></img></a>
                        
                        
                             <a href="delete.php?id='.$r["id"].'">
                            <img src="img/delete.png" width="180px" height="40px" title="Delete Template" style="margin-left: 15px;">
                            </a>
                            
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
                       <a id="btn-Convert-Html2Image" href="#" class="link"><img src="img/d1.png" width="180px" height="40px" title="Download" style="margin-left: 15px;"></img></a>
                       
                           
                            <a href="delete.php?id='.$r["id"].'">
                            <img src="img/delete.png" width="180px" height="40px" title="Delete Template" style="margin-left: 15px;">
                            </a> 
                            
						</div>
<!--  
                        <div class="fb-share-button" data-href="http://sparkthebestseller.com/gallery1.php?id='.$r["id"].'" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsparkthebestseller.com%2Fgallery1.php%3Fid%3D'.$r["id"].'&amp;src=sdkpreparse">Share</a></div>
                        
                        <div class="g-plusone" data-size="medium" data-annotation="inline" data-width="300"></div>
                        <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                        <script type="IN/Share" data-url="http://sparkthebestseller.com/gallery1.php?id='.$r["id"].'#" data-counter="top"></script>
                        <a class="twitter-share-button" href="https://twitter.com/intent/tweet">Tweet</a>
                        <a href="whatsapp://send" data-text="#SparkYourBestSeller" data-href="" class="wa_btn wa_btn_s" style="display:none">Share</a>
      -->                  
                        ';
					echo '</li>';
                        
                    }
                            
                        }
                       
                       echo '<li><br>
						<div class="bk-book">
                                     <a href="goal.php"><img src="img/cn.png" width="400px" height="165px" style=" margin-top: 110px; padding: 43px; margin-left: 0px; "></a>
								</div>
							<div class="bk-top"></div>
							<div class="bk-bottom" style="background-color: rgba(255, 255, 255, 0);"></div>
					</li>';
                       
                       }
                    else{
                       echo '<br>';
						echo "<center><h2><div style='margin-left:-60px;'>Your bookshelf is currently empty! It's about time you spark your own bestseller.</div></h2></center><br><br>";
                        echo '<div style="padding-right: 10%;" >    
            <a href="goal.php"><button type="button" style="font-family: Abel;float:right;font-size: 18px;margin-right:0%;
            color:white;background-color: #203864;" class="btn btn-primary yk_button_spark">Spark Now!</button></a>
            </div><br><br><br>';
	                    }
                }
                
                //session_destroy();
                ?>
<!--
                    <li><br>
						<div class="bk-book">
                                     <a href="goal.php"><img src="img/plus.png" width="200px" height="200px" style=" margin-top: 110px; padding: 43px; margin-left: 40px; "></a>
								</div>
							<div class="bk-top"></div>
							<div class="bk-bottom" style="background-color: rgba(255, 255, 255, 0);"></div>
					</li>
-->
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
         <script src="jsh/scroll.js"></script>
  		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="jseffect/classie.js"></script>
		<script src="jseffect/modalEffects.js"></script>
    
		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
<!-- Script for Google Plus Plugin -->
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
<!-- Script for Twitter Plugin -->
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));
</script>
<!-- Script for Whatsapp Plugin -->
<script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="whatsapp-button.js";h.appendChild(s);}</script>
        
    <!--     
        
        <footer style="margin-top:2%;position:fixed;bottom:0;width: 100%;">
         <footer id="myFooter">
        <div class="footer-copyright">
        <font color="black"><B>Powered by Buzz<sup>R</sup>&nbspLabs | Privacy Policy | <a href="contact.php">Contact Us</a></B></font>
        </div>
    </footer>
    
        </footer> -->  

  <footer style="margin: 0% 0% 10% 0%; z-index: 10000000; ">
    <?php include_once("footer0.php");?>
  </footer>



        
		</body>
</html>