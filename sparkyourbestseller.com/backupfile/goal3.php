<?php
$con=mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");

if(isset($_REQUEST['sub']))
{
$a=$_POST['area'];
$b=$_POST['goal'];
$c=$_POST['email'];
$d=$_POST['phone'];

$r=mysqli_query($con,"INSERT INTO goal(area,goal,email,phone) values('$a','$b','$c','$d')");
if($r)
{
 header("location:template.php");
}
else
{
echo"error";
}
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Spark your best seller</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="cssh/styles.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="cssh/ie.css">
    <![endif]-->
    <script src="jsh/responsive-nav.js"></script>
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <!--Boosttrap-->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.min.js"></script>
    <!--FullPage Scrolling-->
    <link rel="stylesheet" type="text/css" href="css/javascript.fullPage.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />

<link rel="stylesheet" href="cssc/style.css" />
<link rel="stylesheet" href="cssc/jquery.Jcrop.min.css" type="text/css" />
    
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <script src="jquery-3.1.1.min (1).js"></script>
	 
	 <script language="javascript" type="text/javascript">
	 
	 
	  
	 
	 
	 
	 $(document).ready(function(){
	 
	 
	 
	                    $('#goal').hide();
						
					
						$('#phone').hide();
						$('#spark').hide();
				
				
				
		
		
		 
			
			
	 
	 $("#Field1").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>2)
		$('#goal').show('slow');
		
		
		
	 });
	 
	  $("#Field3").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>2){
		$('#phone').show('slow');
		$('#spark').show('slow');
		
		}
	 });
	 
	 
			


		
});
		
	  
	 </script>
 

  <style>
  body {
    overflow:hidden;
}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      padding-left: 200000px;
  }
      
  </style>
	
	 
	 
	
 

  <style>
  body {
    overflow:hidden;
}
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      padding-left: 200000px;
  }
  
  * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}



form > div {
  clear: both;
  overflow: hidden;
  padding: 1px;
  margin: 0 0 10px 0;
}
form > div > fieldset > div > div {
  margin: 0 0 5px 0;
}
form > div > label,
legend {
	width: 25%;
  float: left;
  padding-right: 10px;
}
form > div > div,
form > div > fieldset > div {
  width: 75%;
  float: right;
}
form > div > fieldset label {
	font-size: 90%;
}
fieldset {
	border: 0;
  padding: 0;
}

input[type=text],
input[type=email],
input[type=url],
input[type=password],
textarea {
	width: 100%;
  border-top: 1px solid #ccc;
  border-left: 1px solid #ccc;
  border-right: 1px solid #eee;
  border-bottom: 1px solid #eee;
}
input[type=text],
input[type=email],
input[type=url],
input[type=password] {
  width: 50%;
}
input[type=text]:focus,
input[type=email]:focus,
input[type=url]:focus,
input[type=password]:focus,
textarea:focus {
  outline: 0;
  border-color: #4697e4;
}

@media (max-width: 600px) {
  form > div {
    margin: 0 0 15px 0; 
  }
  form > div > label,
  legend {
	  width: 100%;
    float: none;
    margin: 0 0 5px 0;
  }
  form > div > div,
  form > div > fieldset > div {
    width: 100%;
    float: none;
  }
  input[type=text],
  input[type=email],
  input[type=url],
  input[type=password],
  textarea,
  select {
    width: 100%; 
  }
}
@media (min-width: 1200px) {
  form > div > label,
	legend {
  	text-align: center;
  }
}
      
  </style>

  </head>
  <body>

    <header>
	
      <?php 
	  error_reporting (0);
	  include_once("menu.php");?>
	  
    </header> 
	
	
	
	
	<section id="projects">
	<div class="container">


    <div class="col-xs-12 yk_panel_background">



<form action="#" method="post" enctype="multipart/form-data">

 <div>
	<label class="desc" id="title1" for="Field1" style="color: #FFCC66;font-size: 24px;">Goal Setting</label>
    </div>
  
  
   <br />
    <div >
	<label class="desc" id="title1" for="Field1"><img src="New folder/magnifier_white.png" height="50px" width="50px"></label>
    <div>
	 <input id="Field1"  style="margin-right:200px;" name="area" type="text" class="field text fn" value=""  tabindex="1" placeholder="Enter your Area" maxlength="15" required>
      
    </div>
  
    </div> <br />
  
   <div id="goal">
   <label class="desc" id="title3" for="Field3">
      <img src="New folder/ruler_white.png" height="50px" width="50px">
    </label>
    <div>
      <input id="Field3" style="margin-right:200px;"   name="goal" type="text" spellcheck="false" value=""   tabindex="3" placeholder="Enter your Goal" maxlength="20" required> 
   </div>
  
    </div> <br />
	
	
	
	
	<div id="phone">
   <label class="desc" id="title3" for="Field3">
      <img src="New folder/trophy-cup-on-lectern-of-podium_white.png" height="50px" width="50px">
    </label>
    <div>
      <h4 style="background-color:#FFFFFF;" >Bravo! Now, visualize you have achieved your goal and have started the journey of penning a bestseller...!</h4>
   </div>
  
   
	
	</div>

</div>
        
       
        
 
<input id="spark" type="submit" class="btn btn-primary yk_button_spark" name="sub" value="Spark Now!">
 
</form>

        
        
        
    </section>

    
    <!--section id="blog">
      <h1>Blog</h1>
    </section-->

    <script src="jsh/fastclick.js"></script>
    <script src="jsh/scroll.js"></script>
    <script src="jsh/fixed-responsive-nav.js"></script>
       <script src="jquery-2.2.4.min.js" type="text/javascript"></script>
 <script src="javascript1.js" type="text/javascript"></script>
       <script type="text/javascript" src="js/javascript.fullPage.js"></script>
   <script type="text/javascript">
        fullpage.initialize('#fullpage', {
            anchors: ['firstPage', 'secondPage','3rdPage'],
            menu: '#menu',
            css3: true
        });

    </script>

  </body>
</html>
