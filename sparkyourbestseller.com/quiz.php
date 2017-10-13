<?php include 'analyticstracking.php' ?>
<?php
error_reporting(E_ERROR | E_PARSE);
$id=$_GET['id'];
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
	<meta name="author" content="#Sparkyourbestseller">
    <title>Spark your best seller</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="cssh/styles.css">
	<link rel="stylesheet" href="css/button.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="cssh/ie.css">
    <![endif]-->
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style4.css">
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 
	 <script src="jq/jquery-3.1.1.min (1).js"></script>
<script language="javascript" type="text/javascript">
	
		$(document).ready(function(){

		$('#q2').hide();
		$('#q3').hide();
		$('#q4').hide();
		$('#q5').hide();
		
		$('#q6').hide();
		$('#q7').hide();
		$('#q8').hide();
		$('#q9').hide();
		/*---------- yes radio button hide -------*/
		$('#yes2').hide();
		$('#yes3').hide();
		$('#yes4').hide();
		$('#yes5').hide();
		$('#yes6').hide();
		$('#yes7').hide();
		$('#yes8').hide();
		$('#yes9').hide();
		
		/*-----no rdio button hide ---------*/
		$('#no2').hide();
		$('#no3').hide();
		$('#no4').hide();
		$('#no5').hide();
		$('#no6').hide();
		$('#no7').hide();
		$('#no8').hide();
		$('#no9').hide();
		$('#no10').hide();
		$('#no11').hide();
		$('#no12').hide();
		$('#no13').hide();
		$('#no14').hide();
		$('#no15').hide();
		$('#no16').hide();
		
		/*-----for yes ---------*/
		
						$('#yes1').click(function(){
						$('#yes1').hide();
						$('#no1').hide();
						$('#yes2').show();
						$('#no2').show();
						
						$('#q1').hide('slow',function(){
						$('#q2').show('slow');
						});
						
						
						});
						
							$('#yes2').click(function(){
						$('#yes2').hide();
						$('#no2').hide();
						$('#yes3').show();
						$('#no3').show();
						
						$('#q2').hide('slow',function(){
						$('#q3').show('slow');
						});
						
						
						});
						
						
						$('#yes3').click(function(){
						$('#yes3').hide();
						$('#no3').hide();
						$('#yes4').show();
						$('#no4').show();
						
						$('#q3').hide('slow',function(){
						$('#q4').show('slow');
						});
						
						
						});
						
						$('#yes4').click(function(){
						$('#yes4').hide();
						$('#no4').hide();
						$('#yes5').show();
						$('#no5').show();
						
						$('#q4').hide('slow',function(){
						$('#q5').show('slow');
						});
						
						
						});
						
						
						$('#yes5').click(function(){
						$('#yes5').hide();
						$('#no5').hide();
						$('#yes6').show();
						$('#no6').show();
						
						$('#q5').hide('slow',function(){
						$('#q6').show('slow');
						});
						
							});
						
						$('#yes6').click(function(){
						$('#yes6').hide();
						$('#no6').hide();
						$('#yes7').show();
						$('#no7').show();
						
						$('#q6').hide('slow',function(){
						$('#q7').show('slow');
						});
						
						
						});
						
						
						
						$('#yes7').click(function(){
						$('#yes7').hide();
						$('#no7').hide();
						$('#yes8').show();
						$('#no8').show();
						
						$('#q7').hide('slow',function(){
						$('#q8').show('slow');
						});
						
						
						});
						
						
						
						$('#yes8').click(function(){
						
						
						
						});
						
						
						
					
		    $('#no1').click(function(){
			$('#yes1').hide();
			$('#yes2').hide();
		$('#yes3').hide();
		$('#yes4').hide();
		$('#yes5').hide();
		$('#yes6').hide();
		$('#yes7').hide();
		$('#yes8').hide();
		$('#yes9').show();
			
				$('#no1').hide();
				$('#no9').show();
				$('#q1').hide('slow',function(){
				$('#q9').show('slow');
				});
				});
				
				
					
			$('#no9').click(function(){
			$('#yes9').hide();
			$('#yes1').show();

				$('#no9').hide();
				$('#no1').show();
				$('#q9').hide('slow',function(){
				$('#q1').show('slow');
				});
				});
				
				
				$('#no2').click(function(){
				
				$('#yes1').hide();
			$('#yes2').hide();
		$('#yes3').hide();
		$('#yes4').hide();
		$('#yes5').hide();
		$('#yes6').hide();
		$('#yes7').hide();
		$('#yes8').hide();
		$('#yes9').show();

					
				$('#no2').hide();
				$('#no10').show();
				$('#q2').hide('slow',function(){
				$('#q9').show('slow');
				});
				});
		
		
			
			$('#no10').click(function(){
		$('#yes9').hide();
			$('#yes2').show();
			
				$('#no10').hide();
				$('#no2').show();
				$('#q9').hide('slow',function(){
				$('#q2').show('slow');
				});
				});
		
		
		
			$('#no3').click(function(){
				$('#yes1').hide();
			$('#yes2').hide();
		$('#yes3').hide();
		$('#yes4').hide();
		$('#yes5').hide();
		$('#yes6').hide();
		$('#yes7').hide();
		$('#yes8').hide();
		$('#yes9').show();

			
				$('#no3').hide();
				$('#no11').show();
				$('#q3').hide('slow',function(){
				$('#q9').show('slow');
				});
				});
		
		
		$('#no11').click(function(){
			$('#yes9').hide();
		$('#yes3').show();
			
				$('#no11').hide();
				$('#no3').show();
				$('#q9').hide('slow',function(){
				$('#q3').show('slow');
				});
				});
		
		
				$('#no4').click(function(){
				
				$('#yes1').hide();
			$('#yes2').hide();
		$('#yes3').hide();
		$('#yes4').hide();
		$('#yes5').hide();
		$('#yes6').hide();
		$('#yes7').hide();
		$('#yes8').hide();
		$('#yes9').show();
			
				$('#no4').hide();
				$('#no12').show();
				$('#q4').hide('slow',function(){
				$('#q9').show('slow');
				});
				});
		
		
		$('#no12').click(function(){
		
		$('#yes9').hide();
		$('#yes4').show();
			
				$('#no12').hide();
				$('#no4').show();
				$('#q9').hide('slow',function(){
				$('#q4').show('slow');
				});
				});
		
		
		
		
		
			$('#no5').click(function(){
			$('#yes1').hide();
			$('#yes2').hide();
		$('#yes3').hide();
		$('#yes4').hide();
		$('#yes5').hide();
		$('#yes6').hide();
		$('#yes7').hide();
		$('#yes8').hide();
		$('#yes9').show();
			
			
			
				$('#no5').hide();
				$('#no13').show();
				$('#q5').hide('slow',function(){
				$('#q9').show('slow');
				});
				});
		
		$('#no13').click(function(){
		
		$('#yes9').hide();
		$('#yes5').show();
			
				$('#no13').hide();
				$('#no5').show();
				$('#q9').hide('slow',function(){
				$('#q5').show('slow');
				});
				});
		
		
			
			
			
			
			$('#no6').click(function(){
			
				$('#yes1').hide();
			$('#yes2').hide();
		$('#yes3').hide();
		$('#yes4').hide();
		$('#yes5').hide();
		$('#yes6').hide();
		$('#yes7').hide();
		$('#yes8').hide();
		$('#yes9').show();
			
			
				$('#no6').hide();
				$('#no14').show();
				$('#q6').hide('slow',function(){
				$('#q9').show('slow');
				});
				});
		
		
			$('#no14').click(function(){
			$('#yes9').hide();
		$('#yes6').show();
			
				$('#no14').hide();
				$('#no6').show();
				$('#q9').hide('slow',function(){
				$('#q6').show('slow');
				});
				});
		
		
			
			
			
			$('#no7').click(function(){
			
			$('#yes1').hide();
			$('#yes2').hide();
		$('#yes3').hide();
		$('#yes4').hide();
		$('#yes5').hide();
		$('#yes6').hide();
		$('#yes7').hide();
		$('#yes8').hide();
		$('#yes9').show();
			
				$('#no7').hide();
				$('#no15').show();
				$('#q7').hide('slow',function(){
				$('#q9').show('slow');
				});
				});
		
		$('#no15').click(function(){
		
		$('#yes9').hide();
		$('#yes7').show();
			
				$('#no15').hide();
				$('#no7').show();
				$('#q9').hide('slow',function(){
				$('#q7').show('slow');
				});
				});
		
		
		
		
		
			$('#no8').click(function(){
			
			$('#yes1').hide();
			$('#yes2').hide();
		$('#yes3').hide();
		$('#yes4').hide();
		$('#yes5').hide();
		$('#yes6').hide();
		$('#yes7').hide();
		$('#yes8').hide();
		$('#yes9').show();
			
			
				$('#no8').hide();
				$('#no16').show();
				$('#q8').hide('slow',function(){
				$('#q9').show('slow');
				});
				});
		
		
		$('#no16').click(function(){
		$('#yes9').hide();
		$('#yes8').show();
			
				$('#no16').hide();
				$('#no8').show();
				$('#q9').hide('slow',function(){
				$('#q8').show('slow');
				});
				});
				
				
				
				
				$("#yes9").click(function(){
				
	window.location.replace("p2new.php?id='.$id.'");}); //please add your full path here
                
		
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
      <?php include_once("menu.php");?>
    </header>


   <section id="about">
      
        
        
        <div class="container">


    <div class="col-xs-12 yk_panel_background">




<div id="tab3">
    
    <div class="row">

                       <div class="col-xs-8 col-xs-offset-2" style="color: orange;font-size: 34px;padding-top:20px;">
                        Questions
                       </div>
       </div>
    <br>
       <div class="row">
	   
	   

         <div class="col-xs-1" style="padding-left: 0px">
            <div id="prev_book_section2"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top:20px;  -ms-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);">navigate_next</i></a></div>
         </div>
		
		
			   
			   
        
 
		 
		
<form action="index.html" method="post">
      
       
        
        <legend><span class="number">1</span>Title</legend>
      <label for="name"><h4 id="q1" style=" font-style: oblique; font-size-adjust:inherit; font-stretch: inherit;">1.)&nbsp;&nbsp;&nbsp;Does your goal entail an audacious stretch as opposed to being an<br />easy target to achieve?</h4>
 <h4 id="q2" style=" font-style: oblique; font-size-adjust:inherit; font-stretch: inherit;" >2.)&nbsp;&nbsp;&nbsp;Does your goal capture the big picture instead of getting stuck in the micro?</h4>
 <label for="name"><h4 id="q3" style=" font-style: oblique; font-size-adjust:inherit; font-stretch: inherit;" >3.)&nbsp;&nbsp;&nbsp;Are you committed to create a solution-focused and structured roadmap to achieve your goal?</h4>

 <h4 id="q4" style=" font-style: oblique; font-size-adjust:inherit; font-stretch: inherit;" >4.)&nbsp;&nbsp;&nbsp;Would achieving to milestones along the way to accomplishing you goal <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be a source of abundant happiness? </h4>

 <h4 id="q5" style=" font-style: oblique; font-size-adjust:inherit; font-stretch: inherit;" >5.)&nbsp;&nbsp;&nbsp;Are you willing to listen to feedback from your stakeholders and well-wishers in your<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pursuit to achieving the goal?</h4>

 <h4 id="q6" style=" font-style: oblique; font-size-adjust:inherit; font-stretch: inherit;" >6.)&nbsp;&nbsp;&nbsp;Are you confident and harnessing your unique strenghts in custom-creating your<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 'best-fit' strategy to achieve the goal?  </h4>

 <h4 id="q7" style=" font-style: oblique; font-size-adjust:inherit; font-stretch: inherit;" >7.)&nbsp;&nbsp;&nbsp;Do you trust yourself to accomplish the goal in the desired time frame?</h4>

 <h4 id="q8" style=" font-style: oblique; font-size-adjust:inherit; font-stretch: inherit;" >8.)&nbsp;&nbsp;&nbsp;Do you feel capable of demonstrating executive control and not giving in to distractions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; and temptations in achieving your goal?</h4>

 <h3 id="q9"  style=" font-style: oblique; font-size-adjust:inherit; font-stretch: inherit;" > Would you want to rework on your goal?</h3></label>


</form>






<!--<div class="col-xs-10" style="padding-left:0px; margin-left:150px;"  >
</div>
			   
		 
         <div class="col-xs-1 col-xs-offset-1" style="padding-left: 85%">
            <div id="next_book_section3"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top:-1200219029120921091202109209000px; margin-left: -30px">navigate_next</i></a></div> 
         </div>-->


       </div>
	   
	   <button class="button button1" id="yes1" value="Yes">Yes</button>
	   <button class="button button1" id="yes2" value="Yes">Yes</button>
	   <button class="button button1" id="yes3" value="Yes">Yes</button>
	   <button class="button button1" id="yes4" value="Yes">Yes</button>
	   <button class="button button1" id="yes5" value="Yes">Yes</button>
	   <button class="button button1" id="yes6" value="Yes">Yes</button>
	   <button class="button button1" id="yes7" value="Yes">Yes</button>
	   <button class="button button1" id="yes8" value="Yes">Yes</button>
	   <button class="button button1" id="yes9" value="Yes">Yes</button>
 <button class="button button2" id="no1" value="NO" id="no">No</button>
<button class="button button2" id="no2" value="NO" id="no">No</button>
<button class="button button2" id="no3" value="NO" id="no">No</button>
<button class="button button2" id="no4" value="NO" id="no">No</button>
<button class="button button2" id="no5" value="NO" id="no">No</button>
<button class="button button2" id="no6" value="NO" id="no">No</button>
<button class="button button2" id="no7" value="NO" id="no">No</button>
<button class="button button2" id="no8" value="NO" id="no">No</button>
<button class="button button2" id="no9" value="NO" id="no">No</button>
<button class="button button2" id="no10" value="NO" id="no">No</button>
<button class="button button2" id="no11" value="NO" id="no">No</button>
<button class="button button2" id="no12" value="NO" id="no">No</button>
<button class="button button2" id="no13" value="NO" id="no">No</button>
<button class="button button2" id="no14" value="NO" id="no">No</button>
<button class="button button2" id="no15" value="NO" id="no">No</button>
<button class="button button2" id="no16" value="NO" id="no">No</button>

<!--<div   style="height:100px; width:100px;"><h4 style="margin-left:400px; color:#FFFFFF;">Yes</h4></div>
<div style="height:100px; width:100px; margin-top:-100px;"><input style="margin-left:370px;" type="radio" id="yes1" value="Yes"   name="shiva" /></div>
<div style="height:100px; width:100px; margin-top:-100px;"><input style="margin-left:370px;" type="radio" id="yes2" value="Yes"   name="shiva" /></div>
<div style="height:100px; width:100px; margin-top:-100px;"><input style="margin-left:370px;" type="radio" id="yes3" value="Yes"   name="shiva" /></div>
<div style="height:100px; width:100px; margin-top:-100px;"><input style="margin-left:370px;" type="radio" id="yes4" value="Yes"   name="shiva" /></div>
<div style="height:100px; width:100px; margin-top:-100px;"><input style="margin-left:370px;" type="radio" id="yes5" value="Yes"   name="shiva" /></div>
<div style="height:100px; width:100px; margin-top:-100px;"><input style="margin-left:370px;" type="radio" id="yes6" value="Yes"   name="shiva" /></div>
<div style="height:100px; width:100px; margin-top:-100px;"><input style="margin-left:370px;" type="radio" id="yes7" value="Yes"   name="shiva" /></div>
<div style="height:100px; width:100px; margin-top:-100px;"><input style="margin-left:370px;" type="radio" id="yes8" value="Yes"   name="shiva" /></div>
<div style="height:100px; width:100px; margin-top:-100px;"><input style="margin-left:370px;" type="radio" id="yes9" value="Yes"   name="shiva" /></div>

<div ><h4 style="margin-left:100px; margin-top:-100px;color:#FFFFFF;">No</h4></div>

<div style="margin-top:-30px;" ><input   type="radio" id="no1" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no2" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no3" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no4" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no5" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no6" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no7" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no8" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no9" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no10" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no11" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no12" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no13" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no14" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no15" value="NO" id="no" name="shiva" /></div>
<div style="margin-top:-30px;" ><input   type="radio" id="no16" value="NO" id="no" name="shiva" /></div>-->

</div>

    </div>

    <div class="col-xs-12 yk_panel_bottom_background">
      <div class="row">

        <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom " id="yk_button_panel_bottom_1">

            <a href="template.php"><img src="img/4.png" class="section1_icon yk_top_margin15"></a>

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom " id="yk_button_panel_bottom_2">

           <a href="p2new.php?id=<?php echo $id;?>"><img src="img/7.png" class="section1_icon yk_top_margin15"></a>

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom active" id="yk_button_panel_bottom_3">

         <img src="img/3.png" class="section1_icon yk_top_margin15 invert" style="color: rgba(0, 0, 0, 0.54)">

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom " id="yk_button_panel_bottom_4">

           <a href="gallery.php?id=<?php echo $id;?>"><img src="img/5.png" class="section1_icon yk_top_margin15"></a>

       </div>

     </div>

   </div>

 </div>
        
        
        
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
