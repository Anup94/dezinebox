<?php include 'analyticstracking.php' ?>
<?php
  $id=$_GET['id'];
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://developer.mozilla.org/en-US/docs/Template:CustomSampleCSS?raw=1" />
  <style>
      .container{
          padding-top:2%;
      }
  </style>
</head>
<body>
 <?php
    include_once("check_login_status.php");
        if($user_ok == true){
	?>
     <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" style="height: 188%;"></a>
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
        <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" style="height: 188%;"></a>
      </div>
      <ul class="nav navbar-nav navbar-right">

        <li style="font-size: 26px;font-weight: 900;"><a href="logout.php">Login</a></li>
      </ul>
    </div>
  </nav><?php
        }
        ?>



  <div class="container">


    <div class="col-xs-12 yk_panel_background">


<div id="tab2">
            <div class="row">
                    <div class="col-xs-3" id="book_tab2_maindiv" style="float:right;">

         <div class="" id="book_tab2" style="margin-top: 25px;">

             
<?php
  if($id==1)
  {
  ?>
  <img src="img/b1.jpg" id="book_tab2_photo">
  <?php
  }
  if($id==2)
  {
  ?>
  <img src="img/b2.jpg" id="book_tab2_photo">
  <?php
  }
  if($id==3)
  {
  ?>
  <img src="img/3.jpg" id="book_tab2_photo">
  <?php
  }
if($id==4)
{
  ?>
        <img src="img/13.jpg" id="book_tab2_photo">
  
  <?php
    }
if($id==5)
{
  ?>
        <img src="img/book5.jpg" id="book_tab2_photo">
  <?php
}

if($id==6)
{
  ?>
        <img src="img/book6.jpg" id="book_tab2_photo">
  
<?php
}
 ?>            
             
             
             
         <!--img src="img/book1.jpg" class="" id="book_tab2_photo"-->
         </div>

         </div>

        <div class="col-xs-2">
            <div id="prev_book_section"><a href="index.html#3rdpage"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 50%;  -ms-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);">navigate_next</i></a></div> 
         </div>



        <div class="col-xs-7" style="padding-right: 0px" >

                  <div class="row">
                       <div class="col-xs-8 " style="color: #ffffff;font-size: 20px;padding-top: 30px">
                         <strong style="color: orange;font-size: 24px">Details : </strong>
                       </div>                
                  </div>
            <form action="p3.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
              

             <div class="row" style="margin-top: 10px;">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px">Goal</div>
               <div class="col-xs-8"><input type="text" name="goal" style="width: 50%;margin-top: 3px;" required></div>
             </div>
             <div class="row" style="margin-top: 10px;">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px">Image</div>
               <div class="col-xs-8"><input type="file" name="image" style="width: 50%;margin-top: 3px;" required></div>
             </div>
             <div class="row" style="margin-top: 10px;">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px">Title</div>
               <div class="col-xs-8"><input type="text" name="title" style="width: 50%;margin-top: 3px;" required></div>
             </div>
             <div class="row" style="margin-top: 10px;">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px">Sub-Head</div>
               <div class="col-xs-8"><input type="text" name="sname" style="width: 50%;margin-top: 3px;" required></div>
             </div>
             <div class="row" style="margin-top: 10px;margin-bottom: 5px">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px; margin-bottom: 5px">Author Name</div>
               <div class="col-xs-8"><input type="text" name="aname" style="width: 50%;margin-top: 3px;" required></div>   
             </div>
                <div class="row" style=";margin-bottom: 5px">
               <div class="col-xs-4" style="color: #ffffff;font-size: 19px; margin-bottom: 25px">Email Id</div>
               <div class="col-xs-8"><input type="text" name="email" style="width: 50%;margin-top: 3px;" required></div>
                 
             </div>
                    <button type="submit" name="submit" value="submit" id="submit">Submit</button>
                

            </form>

         </div>

        <!--div class="col-xs-2" style="padding-left: 0px">
          <div id="next_book_section2"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 17%">navigate_next</i></a></div> 
         </div-->

            
         

       </div>
    
    <?php
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


</div>




<div id="tab3" style="display: none">
      
     <br>
       <div class="row">

         <div class="col-xs-1" style="padding-left: 0px">
            <div id="prev_book_section3"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 110%;  -ms-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);">navigate_next</i></a></div>
         </div>


        <div class="col-xs-9" style="padding-right: 0px" >

                  <div class="row">
                               <div class="col-xs-12 " style="padding-left: 30px; padding-top: 15px">
                                 <strong style="color: orange;font-size: 24px">Coaching </strong>
                               </div>                          
                  </div>

                  <div class="row">
                               <div class="col-xs-12 " style="padding-left: 30px; padding-top: 15px">
                                 <i style="color: #ffffff;font-size: 16px">Answer a set of 8 pre-defined questions across the ABSOLUTE parameters to ensure your goal is optimally crafted as per the key principles of Neuroscience</i><br><br>
                                 

                               </div>                          
                  </div>


                  <form id="questionform">
                  <div class="row" id="question1">
                               <div class="col-xs-12 " style="color: #ffffff;font-size: 16px;padding-left: 30px; padding-top: 15px">
                                 <div style="color: #ffffff;font-size: 18px">Would you want to consider reworking your goal to look at the big picture?</div><br>
                                 <i id="yes1"><label class="radio-inline"><input type="radio" name="answer_q1">Yes</label></i>
                                 <i id="no1"><label class="radio-inline"><input type="radio" id="no1" name="answer_q1">No</label></i>
                               </div>                          
                  </div>

                  <div class="row" id="question2" style="display: none">
                               <div class="col-xs-12 " style="color: #ffffff;font-size: 16px;padding-left: 30px; padding-top: 15px">
                                 <div style="color: #ffffff;font-size: 18px">Does Your Goal Capture the big picture instead of gettin struck in the micro?</div><br>
                                 <i id="yes2"><label class="radio-inline"><input type="radio" name="answer_q2">Yes</label></i>
                                 <i id="no2"><label class="radio-inline"><input type="radio" id="no1" name="answer_q2">No</label></i>
                               </div>                          
                  </div>

                  </form>

         </div>


         <div class="col-xs-1 col-xs-offset-1" style="padding-left: 0px">
            <div id="next_book_section3"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 120%; margin-left: -30px">navigate_next</i></a></div> 
         </div>

       </div>

</div>




<div id="tab4" style="display: none">
      
     <br>
     
       <div class="row">

         <div class="col-xs-1" style="padding-left: 0px">
            <div id="prev_book_section4"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 110%;  -ms-transform:rotate(180deg); -webkit-transform:rotate(180deg); transform:rotate(180deg);">navigate_next</i></a></div>
         </div>


        <div class="col-xs-10" style="padding-right: 0px" >

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

</div>
    </div>
      
    <div class="col-xs-12 yk_panel_bottom_background">
      <div class="row">


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="index.html"><img src="img/8.png" class="section1_icon yk_top_margin15"></a>

       </div>
          
          <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom active ">

         <img src="img/2.png" class="section1_icon yk_top_margin15 invert" style="color: rgba(0, 0, 0, 0.54)">

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="p3.php?id=<?php echo $id;?>"><img src="img/1.png" class="section1_icon yk_top_margin15"></a>

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom ">

         <a href="p5.php?id=<?php echo $id;?>"><img src="img/6.png" class="section1_icon yk_top_margin15"></a>

       </div>

     </div>

   </div>
 </div>

</body>
 <script src="jquery-2.2.4.min.js" type="text/javascript"></script>
 <script src="javascript.js" type="text/javascript"></script>
</html>
