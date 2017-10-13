<?php include 'analyticstracking.php' ?>
<?php
error_reporting(E_ERROR | E_PARSE);
  $id=$_GET['id'];
?>
<?php
if($_POST) {
   $con=mysqli_connect("localhost","root","","test");
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}


  //mysql_select_db("test", $con);
$temp_id=$_GET['id'];
 $goal=$_POST['goal'];
$title=$_POST['title'];
$sname=$_POST['sname'];
$aname=$_POST['aname'];
$email=$_POST['email'];    
//$image=$_POST['image'];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));


   mysqli_query($con, "INSERT INTO scollable (temp_id,goal,title,sname,aname,name,email) VALUES ('$temp_id','$goal','$title','$sname','$aname','$file','$email')");
   mysqli_query($con, "INSERT INTO tempep (email) VALUES ('$email')");
    
	echo '<script>alert("Image Inserted into Database")</script>';
	echo "<meta http-equiv='refresh' content='0'>";
    
    
    
    
        $emailcut = substr($email, 0, 4);
		$randNum = rand(10000,99999);
		$tempPass = "$emailcut$randNum";
		//$hashTempPass = md5($tempPass);
        $hashTempPass = md5($tempPass);
		$sql = "UPDATE tempep SET temppass='$hashTempPass' WHERE email='$email' LIMIT 1";
        $query = mysqli_query($con, $sql);
		require_once("PHPMailer/PHPMailerAutoload.php");
		
		$mail=new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug=false;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure = 'ssl';
		$mail->Host ="smtp.gmail.com";
		$mail->Port =465;

		$mail->Username ="hima.mone11@gmail.com";                 // SMTP username
		$mail->Password ="YOUR GMAIL PASSWORD";                           // SMTP password
		$mail->SetFrom("hima.mone11@gmail.com");
		$mail->AddAddress($email);
		$mail->Subject="Together Temporary Password";
		$mail->Body='<h2>Hello</h2><p>This is an automated message from yoursite. If you did not recently initiate the Forgot Password process, please disregard this email.</p><p>Your temporary password is <b>'.$tempPass.'</b></p>';
		$mail->IsHTML(true);
		$mail->send();
			echo "success";
			exit();

   mysqli_close($con);
    }
?>
    

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
	<meta name="author" content="#Sparkyourbestseller">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
      .container{
          padding-top:2%;
      }
      
  </style>
    
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
		$('#yes2').hide();
		$('#yes3').hide();
		$('#yes4').hide();
		$('#yes5').hide();
		$('#yes6').hide();
		$('#yes7').hide();
		$('#yes8').hide();
		$('#yes9').hide();
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
				
			window.location.replace("p5.php?id=<?php echo $id;?>");}); 
	});
		
</script> 

    
    
    <link rel="stylesheet" href="interactive/cssh/styles.css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="cssh/ie.css">
    <![endif]-->
    <script src="interactive/jsh/responsive-nav.js"></script>
       <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--Boosttrap-->
    <script src="interactive/js/bootstrap.min.js"></script>

    <script src="interactive/js/jquery.min.js"></script>
    <!--FullPage Scrolling-->
    <link rel="stylesheet" type="text/css" href="interactive/css/javascript.fullPage.css" />
    <link rel="stylesheet" href="interactive/css/font-awesome.min.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="interactive/style.css">
  	 
	 <script src="interactive/jquery-3.1.1.min (1).js"></script>    
    
    

</head>
<body>
  <header>
      <?php include_once("menu.php");?>
    </header>

  <div class="container">


    <div class="col-xs-12 yk_panel_background">


<!--div id="tab1" >
      <div class="row">

                       <div class="col-xs-8 " style="color: #ffffff;font-size: 20px; padding-left: 30px; padding-top: 45px">
                         <strong style="color: orange;font-size: 24px">Template : </strong>Pick an Option
                       </div>                       

       </div>
     <br>
       <div class="row">

        <div class="col-xs-10" style="padding-right: 0px" >
         
		<form id="myForm">

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book1">
         <a href="p2.php?id=1">
         <img src="img/book1.jpg" class="bookcover" id="book1"></a>
         </div>

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book2">
          <a href="p2.php?id=2">
              <img src="img/book2.jpg" class="bookcover" id="book2"></a>
         </div>

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book3">
          <a href="p2.php?id=3">
              <img src="img/book3.jpg" class="bookcover" id="book3"></a>
         </div>

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book4">
          <a href="p2.php?id=4">
              <img src="img/book4.jpg" class="bookcover" id="book4"></a>
         </div>

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book5">
          <a href="p2.php?id=5">
              <img src="img/book5.jpg" class="bookcover" id="book5"></a>
         </div>

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book6">
          <a href="p2.php?id=6">
              <img src="img/book6.jpg" class="bookcover" id="book6"></a>
         </div>
         

      </form>


         </div>

         <div class="col-xs-2" style="padding-left: 0px">
          <div id="next_book_section"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 17%">navigate_next</i></a></div> 
         </div>

       </div>

</div>



<!--div id="tab2" style="display: none">
     

     <br>

     <div class="row" id="error_book_notselected" style="display: block">
       <div class="col-xs-12">
         <div class="col-xs-8 " style=" padding-left: 30px; padding-top: 30px">
                         <strong style="color: red;font-size: 30px">Please select the book first! </strong>
                       </div>
       </div>
     </div>


       <div class="row">

         <div class="col-xs-3" id="book_tab2_maindiv" style="float: right" >

         <div class="" id="book_tab2" style="margin-top: 25px;">

         <img src="img/bookcover.png" class="" id="book_tab2_photo">
         </div>

         </div>



        <div class="col-xs-2" style="padding-left: 0px">
            <div id="prev_book_section"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 50%;  -ms-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);">navigate_next</i></a></div> 
         </div>



        <div class="col-xs-7" style="padding-right: 0px" >

                  <div class="row">
 <!--?php echo $id;?>
                       <div class="col-xs-8 " style="color: #ffffff;font-size: 20px;padding-top: 30px">
                         <strong style="color: orange;font-size: 24px">Details : </strong>
                       </div>                
                  </div>
            <form action="<!--?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
              

             <div class="row" style="margin-top: 10px;">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px">Goal</div>
               <div class="col-xs-8"><input type="text" name="goal" style="width: 100%;margin-top: 3px;"></div>
             </div>
             <div class="row" style="margin-top: 10px;">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px">Image</div>
               <div class="col-xs-8"><input type="file" name="image" style="width: 100%;margin-top: 3px;"></div>
             </div>
             <div class="row" style="margin-top: 10px;">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px">Title</div>
               <div class="col-xs-8"><input type="text" name="title" style="width: 100%;margin-top: 3px;"></div>
             </div>
             <div class="row" style="margin-top: 10px;">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px">Sub-Head</div>
               <div class="col-xs-8"><input type="text" name="sname" style="width: 100%;margin-top: 3px;"></div>
             </div>
             <div class="row" style="margin-top: 10px;margin-bottom: 5px">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px; margin-bottom: 25px">Author Name</div>
               <div class="col-xs-8"><input type="text" name="aname" style="width: 100%;margin-top: 3px;"></div>
                 
             </div>
                    <button type="submit" name="submit" value="submit" id="submit">Submit</button>
                

            </form>

         </div>

        <div class="col-xs-2" style="padding-left: 0px">
          <div id="next_book_section2"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 17%">navigate_next</i></a></div> 
         </div>

            
         

       </div>
    
    <!--?php
if($_POST) {
   $con=mysqli_connect("localhost","root","","test");
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}


  //mysql_select_db("test", $con);

 $goal=$_POST['goal'];
$title=$_POST['title'];
$sname=$_POST['sname'];
$aname=$_POST['aname'];
//$image=$_POST['image'];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));


   mysqli_query($con, "INSERT INTO scollable (goal,title,sname,aname,name) VALUES ('$goal','$title','$sname','$aname','$file')");
	echo '<script>alert("Image Inserted into Database")</script>';
	echo "<meta http-equiv='refresh' content='0'>";

   mysqli_close($con);
    }
?>
    

<script>
 $(document).ready(function(){
      $('#submit').click(function(){
           var image_name = $('#image').val();
           if(image_name == '')
           {
                alert("Please Select Image");
                return false;
           }
           else
           {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                     alert('Invalid Image File');
                     $('#image').val('');
                     return false;
                }
           }
      });
 });
 </script>


</div-->




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

           
        <div class="col-xs-10" style="padding-left:0px" >
                <font color="white" size="+1">
<h4 id="q1">1.)&nbsp;&nbsp;&nbsp;Does your goal entail an audacious stretch as opposed to being an<br />easy target to achieve?</h4>
<h4 id="q2">2.)&nbsp;&nbsp;&nbsp;Does your goal capture the big picture instead of getting stuck in the micro?</h4>
<h4 id="q3">3.)&nbsp;&nbsp;&nbsp;Are you committed to create a solution-focused and structured roadmap to achieve your goal?</h4>

<h4 id="q4">4.)&nbsp;&nbsp;&nbsp;Would achieving to milestones along the way to accomplishing you goal <br /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;be a source of abundant happiness? </h4>

<h4 id="q5">5.)&nbsp;&nbsp;&nbsp;Are you willing to listen to feedback from your stakeholders and well-wishers in your<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pursuit to achieving the goal?<br /><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR<br /><br>Are you willing to listen and pay heed to your inner voice during the pirsuit to<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; achieving the goal?</h4>

<h4 id="q6">6.)&nbsp;&nbsp;&nbsp;Are you confident and harnessing your unique strenghts in custom-creating your<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 'best-fit' strategy to achieve the goal?  </h4>

<h4 id="q7">7.)&nbsp;&nbsp;&nbsp;Do you trust yourself to accomplish the goal in the desired time frame?</h4>

<h4 id="q8">8.)&nbsp;&nbsp;&nbsp;Do you feel capable of demonstrating executive control and not giving in to distractions<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; and temptations in achieving your goal?</h4>

<h3 id="q9"> Would you want to rework on your goal?</h3>


               </font>
			   
			   
        </div>

         <div class="col-xs-1 col-xs-offset-1" style="padding-left: 85%">
            <div id="next_book_section3"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top:-1200219029120921091202109209000px; margin-left: -30px">navigate_next</i></a></div> 
         </div>

       </div>
<div   style="height:100px; width:100px;"><h4 style="margin-left:300px; color:#FFFFFF;">Yes</h4></div>
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
<div style="margin-top:-30px;" ><input   type="radio" id="no16" value="NO" id="no" name="shiva" /></div>
                            
           
     
</div>




<!--div id="tab4" style="display: none">
      
     <br>
     
       <div class="row">

         <div class="col-xs-1" style="padding-left: 0px">
            <div id="prev_book_section4"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 110%;  -ms-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);">navigate_next</i></a></div>
         </div>


        <div class="col-xs-10" style="padding-right: 0px" >

                  <div class="row">
                               <div class="col-xs-3 " style="padding-left: 30px; padding-top: 15px">
                                 <strong style="color: orange;font-size: 24px">Preview </strong>
                               </div> 

                               <div  id="error_book_notselected2" style="display: block">
                                 <div class="col-xs-7">
                                   <div class="col-xs-12 " style=" padding-top: 15px">
                                     <strong style="color: red;font-size: 30px">Please select the book first! </strong>
                                   </div>
                                 </div>
                               </div>                         
                  </div>


                    <div class="row">

                     <div class="col-xs-3 col-xs-offset-2 " id="book_tab4_maindiv" >

                       <div class="" id="book_tab4 yk_books_photos" style="margin-top: 25px; ">
                         <img src="img/bookcover.png" class="" id="book_tab4_photo" style=" width: 200px; margin-bottom: 25px;margin-top: -55px;">
                       </div>

                     </div>

                     <div class="col-xs-7 yk_last_icons">

                     <div class="col-xs-2 ">
                       <img src="img/2.png" class="section1_icon  invert">
                     </div>

                     <div class="col-xs-2 ">
                       <img src="img/3.png" class="section1_icon  invert">
                     </div>


                     <div class="col-xs-2 ">
                       <img src="img/9.png" class="section1_icon  invert">
                     </div>


                     <div class="col-xs-2 ">
                       <img src="img/5.png" class="section1_icon  invert">
                     </div>
                     </div>

                   </div>

         </div>
       </div>

</div-->

    </div>
          
      <div class="col-xs-12 yk_panel_bottom_background">
      <div class="row">

        <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="new.php"><img src="img/8.png" class="section1_icon yk_top_margin15"></a>

       </div>



       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="p2new.php?id=<?php echo $id;?>"><img src="img/2.png" class="section1_icon yk_top_margin15"></a>

       </div>

          <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom active ">

         <img src="img/1.png" class="section1_icon yk_top_margin15 invert" style="color: rgba(0, 0, 0, 0.54)">

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="gallery.php?id=<?php echo $id;?>"><img src="img/6.png" class="section1_icon yk_top_margin15"></a>

       </div>

     </div>

   </div>      
</div>
</body>
 <script src="jquery-2.2.4.min.js" type="text/javascript"></script>
 <script src="javascript.js" type="text/javascript"></script>
</html>
