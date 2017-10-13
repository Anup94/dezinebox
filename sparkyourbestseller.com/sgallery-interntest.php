<?php include 'analyticstracking.php' ?>
<?php
$id = $_GET['id'];
$tid = $_GET['tid'];
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta content="width=device-width,height=device-height,initial-scale=1.0" name="viewport">
	<meta charset="UTF-8">
	<meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
	<meta name="author" content="#Sparkyourbestseller">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name="viewport">
    <meta content="true" name="HandheldFriendly">

    <meta name="og:type" content="website" />
	<meta name="og:image" content="http://test.sparkthebestseller.com/img/sparkbook<?php echo $id; ?>-<?php echo $tid; ?>.png"/>
	<meta name="og:title" content="SparkTheBestSeller" />
	<meta name="og:description" content="Let's Spark. Create your own books." />
	<meta name="og:url" content="http://test.sparkthebestseller.com/gallery1.php?id=<?php echo $id; ?>&tid=<?php echo $tid; ?>"/>
    
<!--    css   -->
	<link href="cssh/styles.css" rel="stylesheet">
	<link href="csseffect/default.css" rel="stylesheet" type="text/css">
	<link href="csseffect/component.css" rel="stylesheet" type="text/css">
    <link href="css3d/default.css" rel="stylesheet" type="text/css">
	<link href="css3d/component1.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<!--    fonts   -->
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans+Condensed:300|Rajdhani|Roboto+Slab:700|Source+Sans+Pro:700|Yanone+Kaffeesatz:300,400,700" rel="stylesheet">
	
<!--  js  -->
    <script src="jsh/responsive-nav.js"></script>
    <script src="js3d/modernizr.custom.js"></script>
	<script src="https:ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="bootbox.min.js"></script>
    
	<!--script src="http://code.jquery.com/jquery-1.10.2.js">
	</script-->
    
    <script src="js/base64.js"></script>
	<script src="js/canvas2image.js"></script>
	<script src="js/html2canvas.js"></script>
    <!--script src="js/jquery.min.js"></script-->
	<script src="js/jquery.plugin.html2canvas.js"></script>
    
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
    
<!--    Reload  -->
                <script language="JavaScript">
                function LoadOnce() 
                { 
                window.location.reload(); 
                } 

                </script>
                <script type="text/javascript">
                function save_alert(){
                	bootbox.alert('Inorder to save template please login!');
                }
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
	           margin-top: -88.7%;
	           
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
                    overflow: hidden;
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
                    overflow: hidden;
	           }
	           #fontg{
	                  margin-top: -408px;  
                        position: absolute;
                        margin-left: 271px;
	               width: 120px;
	               font-family: 'Open Sans Condensed', sans-serif;
	/*                font-family: 'Abel', sans-serif;*/
	               text-align: right;
                   overflow: hidden;
	           }
	           #grays{
	-webkit-filter: grayscale(1);
	           filter: grayscale(1);
	         opacity: 1;
	}           
	           #pcl{
	               margin-left: -5%;
	           }
	           #font2{               
    margin-top: -36%;
    margin-left: 19%;
    text-transform: uppercase;
    position: absolute;
    color: white;
/*    font-weight: 700;*/
    font-size: 20px;
    width: 241px;
    line-height: 0.9;
    height: 34px;
    overflow: hidden;
    transform: scale(1,3);
    -webkit-transform: scale(1,3);
    -moz-transform:scale(1,3); /* Firefox */
	-ms-transform:scale(1,3); /* IE 9 */
	-o-transform:scale(1,3); 
                   
	           }
	           #fontl2{
	                margin-top: -17%;
                    margin-left: 27.5%;
                    width: 190px;
                    height: 57px;
                  overflow: hidden;
                    position: absolute;
                    text-transform: uppercase;
                    padding-top: 10px;
                    font-size: 23.5px;
                    color: white;
                    
               }
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
    
<!--
    
	<script type="text/javascript">
	window.$crisp=[];window.CRISP_WEBSITE_ID="047bfc03-c24c-493e-a6b3-459e51995a39";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.im/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
	</script>
    
-->
   
</head>
    <body>
	<header>
		<?php include_once("menu.php"); ?>
	</header>
        <br>	<br>	<br>	<br>
	<div class="container" style="padding-top: 30px;">
		<div class="main" style="padding:0px;">
			<ul class="bk-list clearfix" id="bk-list">
				<?php
					require_once('check_login_status.php');
				                $connect= mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
				                
				                $res = mysqli_query($connect, "SELECT * FROM scollable where temp_id='$id' and id='$tid' ORDER BY id DESC LIMIT 1 ");
				                while($r= mysqli_fetch_array($res))
				                {
				                    echo '<li>';

			                        echo '<div class="bk-book book-'.$id.' bk-bookdefault">
			                            	<div class="bk-front">
				                                <div class="bk-cover" id="html-content-holder">
                                                <div id="">
				                                    <img src="img/sparkbook'.$id.'-'.$tid.'.png" width="400px" height="540px">
                                                    </div>
				                                    <div id="logo1"><img src="img/p1.png" width="400px" height="540px"></div>
				                                    <center>
                                                    
				                                   <div id ="font2">'.$r["title"].'</div>
				                                    <div id="fontl2">'.$r["aname"].'</div>
				                                    </center>
				                                </div>
				                            </div>';

				                    if($id==1)
				                    {
				                        echo '<div class="bk-page">
				                                <div class="bk-content bk-content-current">
				                                    <p>Title: '.$r["title"].'</p>
				                                    <p>Goal: '.$r["goal"].'</p>
				                                    <p>Author Name: '.$r["aname"].'</p>
				                                    <p>Sub Head: '.$r["sname"].'</p>
				                                </div>
				                            </div>
				                            <div class="bk-right"></div>
				                            <div class="bk-left">
				                                <h2>
				                                    <span>'.$r["title"].'</span>
				                                    
				                                </h2>
				                            </div>
				                            <div class="bk-top"></div>
				                            <div class="bk-bottom"></div>';
				                    }

				                    if($id==2)
				                    {
				                        echo '<div class="bk-page">
				                                <div class="bk-content bk-content-current">
				                                    <p>Title: '.$r["title"].'</p>
				                                    <p>Goal: '.$r["goal"].'</p>
				                                    <p>Author Name: '.$r["aname"].'</p>
				                                    <p>Sub Head: '.$r["sname"].'</p>
				                                </div>
				                            </div>
				                            <div class="bk-back">
				                                
				                            </div>
				                            <div class="bk-right"></div>
				                            <div class="bk-left">
				                                <h2>
				                                    <span>'.$r["title"].'</span>
				                                    
				                                </h2>
				                            </div>
				                            <div class="bk-top"></div>
				                            <div class="bk-bottom"></div>';
				                    }
				                    if($id==3)
				                    { 
				                        echo '<div class="bk-page">
				                                <div class="bk-content bk-content-current">
				                                    <p>Title: '.$r["title"].'</p>
				                                    <p>Goal: '.$r["goal"].'</p>
				                                    <p>Author Name: '.$r["aname"].'</p>
				                                    <p>Sub Head: '.$r["sname"].'</p>
				                                </div>
				                            </div>
				                            <div class="bk-back">
				                           
				                            </div>
				                            <div class="bk-right"></div>
				                            <div class="bk-left">
				                                <h2>
				                                    <span>'.$r["title"].'</span>
				                        
				                                </h2>
				                            </div>
				                            <div class="bk-top"></div>
				                            <div class="bk-bottom"></div>';
				                    }
				                    if($id==4)
				                    {
				                    	echo '<div class="bk-page">
				                                <div class="bk-content bk-content-current">
				                                    <p>Title: '.$r["title"].'</p>
				                                    <p>Goal: '.$r["goal"].'</p>
				                                    <p>Author Name: '.$r["aname"].'</p>
				                                    <p>Sub Head: '.$r["sname"].'</p>
				                                </div>
				                            </div>
				                            <div class="bk-back">
				                                 <p>Template </p>
				                            </div>
				                            <div class="bk-right"></div>
				                            <div class="bk-left">
				                                <h2>
				                                    <span>'.$r["title"].'</span>
				                                    
				                                </h2>
				                            </div>
				                            <div class="bk-top"></div>
				                            <div class="bk-bottom"></div>';
				                    }
									$save_opt = "";
									if($user_ok != true){
										$save_opt = 'href="#" onclick="save_alert();"';
									}else{
										$save_opt = 'href="save.php?id='.$id.'&tid='.$r["id"].'"';
									}

				                    echo   '</div>
				                        	<div class="bk-info">

                                    		<br><br>
                                        
				                           <a download="mysparkbook.png" id="btn-Convert-Html2Image" href="img/sparkbook'.$id.'-'.$tid.'.png"> <img src="icons/download-button.png" width="40px" height="40px" title="Download" style="margin-left: 15px;"></img></a>
                                            
				                            <a href="goal.php"><img src="icons/add-button.png" width="40px" height="40px" title="Add Template" style="margin-left: 15px;"></img></a>
				                            
                                            <a '.$save_opt.'><img src="icons/save.png" width="40px" height="40px" title="Save" style="margin-left: 15px;"></img></a>
                                            </div>';

				                    echo '</li>';
				                }
				                ?>
                
                
<!--
                FaceBookSharing Code
<div class="fb-share-button" data-href="http://sparkthebestseller.com/gallery.php?id='.$id.'" data-layout="button_count" data-size="large" data-mobile-iframe="true">
                                            
                                           
                                          <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsparkthebestseller.com%2Fgallery.php%3Fid%3D%2524id&amp;src=sdkpreparse">
                                          <img src="icons/facebook-logo.png" width="80px" height="80px" title="Share"> 
                                            </img>
                                            </a></div>
				                            
-->
            </ul>
			
		</div>


<!--div class="sharethis-inline-share-buttons"></div-->
	</div>
    
    <!-- /container -->
	<div class="md-overlay"></div><!-- the overlay element -->
	<div class="md-modal md-effect-16" id="modal-16">
		<div class="md-content">
			<h3>Are you sure you want to download</h3>
			<div>
				<br>
				<div id="pcl">
					<div id="previewImage"></div>
				</div><a href="#" id="btn-Convert-Html2Image">Yes,Download</a> <button class="md-close" onclick="window.location.reload();">No</button>
			</div>
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
	</script> 
	<script src="js3d/books1.js">
	</script> 
	<script>
	           $(function() {

	               Books.init();

	           });
	</script> 
<!--
	<script src="jsh/fastclick.js">
	</script> 
-->
	<script src="jsh/scroll.js">
	</script> 
	<!--script src="jsh/fixed-responsive-nav.js">
	</script> <classie.js by @desandro: https://github.com/desandro/classie -->
	 
	<script src="jseffect/classie.js">
	</script>
<!-- Addthis Social Plugins API -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5915b363c0f28fa3"></script> 
</body>
</html>