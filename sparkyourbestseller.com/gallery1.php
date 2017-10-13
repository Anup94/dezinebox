<?php
//error_reporting(E_ERROR | E_PARSE);
$id=$_GET['id'];

?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta content="width=100%, initial-scale=1.0" name="viewport">
	<meta charset="UTF-8">
	<meta name="author" content="#Sparkyourbestseller">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">


    <meta name="og:type" content="website" />
	<meta name="og:image" content="http://sparkyourbestseller.com/img/sparkbook<?php echo $id; ?>.png"/>
	<meta name="og:title" content="#SparkYourBestSeller" />
	<meta name="og:description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com" />
	<meta name="og:url" content="http://sparkyourbestseller.com/gallery1.php?id=<?php echo $id; ?>"/>
    
<!--    css   -->
	<link href="cssh/styles.css" rel="stylesheet">
	<link href="csseffect/default.css" rel="stylesheet" type="text/css">
	<link href="csseffect/component.css" rel="stylesheet" type="text/css">
    <link href="css3d/default.css" rel="stylesheet" type="text/css">
	<link href="css3d/component1.css" rel="stylesheet" type="text/css">
<!--    fonts   -->
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Palanquin+Dark" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans+Condensed:300|Rajdhani|Roboto+Slab:700|Source+Sans+Pro:700|Yanone+Kaffeesatz:300,400,700" rel="stylesheet">
	
<!--  js  -->
    <script src="jsh/responsive-nav.js"></script>
    <script src="js3d/modernizr.custom.js"></script>
	<script src="https:ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="bootbox.min.js"></script>
    
	<!--script src="http://code.jquery.com/jquery-1.10.2.js">
	</script-->
    <script type="text/javascript" src="analyticstracking.js"></script>    

    <script src="js/base64.js"></script>
	<script src="js/canvas2image.js"></script>
	<script src="js/html2canvas.js"></script
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
<!--    Download  -->
                <!--script>	
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
                        var imgageData = getCanvas.toDataURL("image/png");

                   // Now browser starts downloading it instead of just showing it
                   var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
                   $(this).attr("download", "templates.png").attr("href", newData);
                       });
                     document.getElementById("btn-Convert-Html2Image").click(); 
                   });
                </script-->
    
    
                <script>	
                $(document).ready(function(){	   
                var element = $("#html-content-holder"); // global variable
                var getCanvas; // global variable
                 window.onload = function () {
                        html2canvas(element, {
                        onrendered: function (canvas) {
                               $("#previewImage").append(canvas);
                               getCanvas = canvas;
                               var imgageData = getCanvas.toDataURL("image/jpg");
                               var id = <?php echo $id; ?>;
                               var tid = $('#tid').html();
                               $.ajax({
				                    type: 'POST',
						            async: true,
						            cache: false,
				                    url: "save_img.php",//path to send this image data to the server site api or file where we will get this data and convert it into a file by base64
				                    data:{
				                    	"id":id,
				                    	"tid":tid,
				                        "img":imgageData
				                    },
						            beforeSend: function() {
						               $('.main').html('<div style="width:600px"><div style="margin:auto; width:100%"><img src="img/loader.gif" /></div><h2 style="top:200px">Saving and redirecting, please wait..</h2><br /></div>');
						            },
				                    success:function(data){
				                    	 window.location = 'sgallery.php?id='+id+'&tid='+tid;
				                    	//alert('Success!');
				                    }
				              });
                            }
                        });

                       }
                       
                       //var imgageData = getCanvas.toDataURL("image/png");

	                   // Now browser starts downloading it instead of just showing it
                       /*
                       var imgageData = getCanvas.toDataURL("image/png");
	                   var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
	                   $(this).attr("download", "templates.png").attr("href", newData);
	                   document.getElementById("btn-Convert-Html2Image").click(); 
	                   */
                   });
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
	 @media only screen and (max-width: 480px){
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
	           margin-top:-3%;
	           padding-left: 10%;}
	       
	           #logo1{
	           position:absolute;
	           margin-top:-135.5%;
	           
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
	             #font1l{
	               margin-left: 2000px;   
	           }
	            #fontl2 {
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
	margin-top: -144px;
    margin-left: 64px;
    text-transform: uppercase;
    color: white;
    position: absolute;
    font-weight: 700;
    font-size: 50px;
    font-family: 'Yanone Kaffeesatz';
    width: 272px;
    text-align: center;
    text-align-last: center;
    line-height: 50px;
    height: 97px;
    overflow: hidden;
}


                   
	           
	           
	           #font1l{
	               margin-left: 100px;   
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
                    font-family: 'Yanone Kaffeesatz', sans-serif;
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
	                margin-top: 4px;
                    position: absolute;
                    margin-left: 70px;
                    line-height: 48px;
                    font-size: 50px;
                    width: 317px;
                    height: 97px;
                    overflow: hidden;
                    text-transform: uppercase;
	                font-family: 'Yanone Kaffeesatz', sans-serif;
	                color:black; 
	           } 
	           #font41{
                        position: absolute;
    margin-left: 75px;
    margin-top: 197px;
    font-weight: 600;
    text-shadow: 1px 2px 4px #000000;
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
                    margin-top: 114px;
                    width: 310px;
                    height: 87px;
                    overflow: hidden;
                    margin-left: 74px;
                    border-style: solid;
                    font-size: 19px;
                   /*text-shadow:  1px 1px 1px black;*/
                    font-weight: 300;
                    color:black;
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
    margin-left: 275px;
    width: 116px;
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
    <body style="line-height: normal; ">
		<!-- Individual Social Plugins disabled and added common plugin at the end

    	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=114942558697662";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		-->
    	<!--
	<div id="fb-root"></div>
            <script>
            (function(d, s, id) {
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) return;
             js = d.createElement(s); js.id = id;
             js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=109779186239170";
             fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>
        -->
	<header>
		<?php include_once("menu.php"); ?>
	</header><br><br><br>
	<div class="container" style="padding-top: 80px;">
		<div class="main" style="padding:0px;">
			<ul class="bk-list clearfix" id="bk-list">
				<?php
				                //$connect= mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
				                $connect = mysqli_connect("localhost", "root", "", "sparklive");
				                $res = mysqli_query($connect, "SELECT * FROM scollable where temp_id='$id' ORDER BY id DESC LIMIT 1 ");
				                while($r= mysqli_fetch_array($res))
				                {
				                	echo '<span id="tid" style="display:none">'.$r['id'].'</span>';
				                    @session_start();
				                        $temp_id=$id;
				                        $_SESSION['temp_id'] = $temp_id;
				                    if($id==1)
				                    {
				                        //echo $_SESSION['temp_id'];
				                        echo '<li>';
				                        echo '<div class="bk-book book-1 bk-bookdefault">
				                            
				                            <div class="bk-front">
				                                <div class="bk-cover" id="html-content-holder">
				                                
				                            <img src="'.($r['name'] ).'" width="275px" height="538px">
				                                    <div id="logo1"><img src="img/b1b.png" width="400px" height="540px"></div>
				                                    <div id ="fontg"><span><font size="5" color="black">'.$r["sname"].'</font></span></div>
				                                    <div id ="fontt"><span><font size="6" color="black"><b>'.$r["title"].'</b></font></span></div>
				                                   <div id="fonta"><span>'.$r["aname"].'</span></div>
				                                </div>
				                            </div>
				                            <div class="bk-page">
				                                
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

                                    		<br><br>
                                        
				                           <a id="btn-Convert-Html2Image" href="#"> <img src="img/d1.png" width="120px" height="40px" title="Download" style="margin-left: 15px;"></img></a>
                                            
				                            <a href="goal.php"><img src="img/d3.png" width="120px" height="40px" title="Add Template" style="margin-left: 15px;"></img></a>
				                            
                                            <a href="save.php?id='.$r["id"].'"><img src="img/d2.png" width="120px" height="40px" title="Save" style="margin-left: 15px;"></img></a>
                                            </div>';


				                    echo '</li>';
				                
				                    }
				                    
				                    if($id==2)
				                    {
				                    echo '<li>';
				                        echo '<div class="bk-book book-2 bk-bookdefault">
				                            <div class="bk-front">
				                                <div class="bk-cover" id="html-content-holder">
                                                <div id="grays">
				                                    <img src="'.($r['name'] ).'" width="400px" height="540px">
                                                    </div>
				                                    <div id="logo1"><img src="img/p1.png" width="400px" height="540px"></div>
				                                    <center>
				                                   <div id ="font2">'.$r["title"].'</div>
				                                    <div id="fontl2">'.$r["aname"].'</div>
				                                    </center>
				                                </div>
				                            </div>
				                            <div class="bk-page">
				                                
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
				                            <div class="bk-bottom"></div>
				                        </div>
				                        <div class="bk-info">
				                            <a id="btn-Convert-Html2Image" href="#"> <img src="img/d1.png" width="120px" height="40px" title="download" style="margin-left: 15px;"></a></img>
                                            
				                            <a href="goal.php"><img src="img/d3.png" width="120px" height="40px" title="add template" style="margin-left: 15px;"></img></a>
				                            
                                            <a href="save.php?id='.$r["id"].'"><img src="img/d2.png" width="120px" height="40px" title="Save" style="margin-left: 15px;" ></img></a>
				                            
				                        </div>';
				                    echo '</li>';
				                    }               
				                    if($id==3)
				                    {
				                    
				                    echo '<li>';
				                        echo '<div class="bk-book book-3 bk-bookdefault">
				                            <div class="bk-front">
				                                <div class="bk-cover" id="html-content-holder">
				                                     <img src="'.($r['name'] ).'" width="400px" height="350px">
				                                    <div id="logo3"><img src="img/blue.png" width="400px" height="540px"></div>
				                                     
				                                
				                                    <div id ="font31"><span><b>'.$r["aname"].'</b></span></div>
				                                    <div id ="font3"><span>'.$r["title"].'</span></div>
				                                    <div id="fontl3"><span>'.$r["sname"].'</span> </div>
				                                    
				                                </div>
				                            </div>
				                            <div class="bk-page">
				                               
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
				                            <div class="bk-bottom"></div>
				                        </div>
				                        <div class="bk-info">
                                        
				                         <a id="btn-Convert-Html2Image" href="#"> <img src="img/d1.png" width="120px" height="40px" title="download" style="margin-left: 15px;"></a></img>
                                            
				                            <a href="goal.php"><img src="img/d3.png" width="120px" height="40px" title="add template" style="margin-left: 15px;"></img></a>
				                            
                                            <a href="save.php?id='.$r["id"].'"><img src="img/d2.png" width="120px" height="40px" title="Save" style="margin-left: 15px;" ></img></a>
				                                 
				                        </div>';
				                    echo '</li>';
				                    }
				                    if($id==4)
				                    {
				                    
				                    echo '<li>';
				                        echo '<div class="bk-book book-4 bk-bookdefault">
				                            <div class="bk-front">
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
				                            <div class="bk-bottom"></div>
				                        </div>
				                        <div class="bk-info">
            
				                           <a id="btn-Convert-Html2Image" href="#"> <img src="img/d1.png" width="120px" height="40px" title="Download" style="margin-left: 15px;"></a></img>
                                            
				                            <a href="goal.php"><img src="img/d3.png" width="120px" height="40px" title="Add Template" style="margin-left: 15px;"></img></a>
				                            
                                            <a href="save.php?id='.$r["id"].'"><img src="img/d2.png" width="130px" height="40px" title="Save" style="margin-left: 15px;"></img></a>
				                                                    
				                        </div>';
				                    echo '</li>';
				                    }
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
			
			<!-- Start of social plugins. -->
			<!-- Individual Social Plugins disabled and added common plugin at the end -->

            <?php
            //$img_url = 'http://test.sparkthebestseller.com/img/sparkbook'.$id.'.png';
            //$in_url = 'http://www.linkedin.com/shareArticle?mini=true&url=http://test.sparkthebestseller.com/gallery1.php?id=3&title=Check%20my%20book%20here&summary=create%20your%20own%20books&source=sparksthebestseller.com';
            ?>
            <!--
			<div class="fb-share-button" data-href="<?php echo $img_url; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftest.sparkthebestseller.com%2Fimg%2Fsparkbook<?php echo $id; ?>.png&amp;src=sdkpreparse">Share</a></div>
            
			<div class="g-plus" data-action="share"></div>

			<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
			<script type="IN/Share" data-url="" data-counter="top"></script>

			<a href="<?php echo $in_url; ?>">In</a>
			<a class="twitter-share-button" href="https://twitter.com/intent/tweet?status=[My Book]+[<?php echo $img_url; ?>]">Tweet</a>

			<a href="whatsapp://send" data-text="#SparkYourBestSeller" data-href="" class="wa_btn wa_btn_s" style="display:none">Share</a>
			-->
			<!-- End of social plugins. -->
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
	<!--script src="jseffect/modalEffects.js">
	</script> <for the blur effect -->
	 <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->


<!-- Individual Social Plugins disabled and added common plugin at the end -->
<!-- Script for Google Plus Plugin -->
<!--
<script type="text/javascript">
 /* (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })(); */
</script>
-->
<!-- Script for Twitter Plugin -->
<!--
<script>window.twttr = (function(d, s, id) {
/*  var js, fjs = d.getElementsByTagName(s)[0],
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
}(document, "script", "twitter-wjs")); */
</script>
-->
<!-- Script for Whatsapp Plugin -->
<!--
<script type="text/javascript">if(typeof wabtn4fg==="undefined"){wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");s.type="text/javascript";s.src="whatsapp-button.js";h.appendChild(s);}</script>
-->
<!-- Addthis Social Plugins API -->
<!--script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5915b363c0f28fa3"></script--> 
  

  <footer style="margin: 0% 0% 10% 0%">
    <?php include_once("footer0.php");?>
  </footer>



</body>
</html>