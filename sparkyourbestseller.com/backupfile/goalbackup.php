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
	 
	 <script src="js/jquery-3.1.1.min (1).js"></script>
	 
	 <script language="javascript" type="text/javascript">
	 
	 
	 $(document).ready(function(){
	 
	 
	 
	                    $('#goal').hide();
						$('#email').hide();
						$('#phone').hide();
						$('#bravo').hide();
						$('#spark').hide();
				
				
		
	 
	 $("#a").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>2){
		$('#goal').show('slow');
		
		}
		
	 });
	 
	  $("#b").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>2){
		$('#email').show('slow');
		
		}
	 });
	 
	  $("#c").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len>2){
		$('#phone').show('slow');
		
		}
	 });
	 
	  $("#d").on('keyup',function(){
	 	var my=$(this).val();
		var len=my.length;
		if(len==10){
		$('#bravo').show('slow');
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




    

                  <div class="row">
                       <div class="col-xs-8 " style="color: #FFCC66;font-size: 24px;padding-top: 30px; padding-right:300px;" >
                         Goal Setting
                       </div>                
                  </div>
            
            
            
			
			
			   <form  method="post" enctype="multipart/form-data" >
           

             <div class="row" style="margin-top: 10px; padding-top:20px;">
               <div class="col-xs-4"><img src="img/magnifier_white.png" height="50px" width="50px"></div>
               <div class="col-xs-8" style="margin-right:150px; margin-top:-40px;">
			  
<input  id="a"  type="text"  name="area" list="area" maxlength="30"   style="width:30%;margin-top: 3px;margin-left:90px;" placeholder="Enter your Area" required />
			   </div>
             </div>
                
                
                <div id="goal" class="row" style="margin-top: 10px; padding-top:20px;">
               <div class="col-xs-4"><img src="img/ruler_white.png" height="50px" width="50px"></div>
               <div class="col-xs-8" style="margin-right:150px;margin-top:-40px;"  ><input id="b" type="text" name="goal" maxlength="50" style="width: 30%;margin-top: 3px;margin-left:90px;" placeholder="Enter your Goal" required></div>
             </div>
             <div id="email" class="row" style="margin-top: 10px; padding-top:20px;">
               <div class="col-xs-4"><img src="img/user_white.png" height="50px" width="50px"></div>
               <div class="col-xs-8" style="margin-right:150px; margin-top:-40px;" ><input id="c" type="email" name="email"  maxlength="50"  style="width: 30%;margin-top: 3px;margin-left:90px;" placeholder="Email Address" required></div>
			   
 </div>
 
<div id="phone" class="row" style="margin-top: 10px; padding-top:20px;">
              
               <div class="col-xs-8" style="margin-right:150px; margin-top:-40px;" ><input id="d" type="text" name="phone"  maxlength="12" style="width: 30%;margin-top: 3px;margin-left:90px;" placeholder="Mobile Number" pattern="[0-9]{10}" title="add only integer" required></div>
			   
 </div>
			 
			 
			   
             <div id="bravo" class="row" style="margin-top: 10px;margin-bottom: 5px; padding-top:20px;">
             <div class="col-xs-4"><img src="img/trophy-cup-on-lectern-of-podium_white.png" height="50px" width="50px"></div>
               <div class="col-xs-8" style="background-color:#FFFFFF; margin-left:-8%; "><h6>Bravo! Now, visualize you have achieved your goal and have started the journey of penning a bestseller</h6>
</div>
             </div>
                
                   
                

            

          

            
       
</div>

</div>
        
       
        
 
<a href="template.php"><input id="spark" type="submit" class="btn btn-primary yk_button_spark" name="sub" value="Spark Now!"></a>
 
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
