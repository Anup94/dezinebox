<?php include 'analyticstracking.php' ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
  <meta name="author" content="#Sparkyourbestseller">
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 

  <style>
   
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      padding-left: 200000px;
  }
      
  </style>

  </head>
  <body>

    <header>
      <div class="navbar-header">
        <a class="navbar-brand" href="new.php"><img src="img/logo.png" class="logo" style="height: 188%;"></a>
      </div>
      <nav class="nav-collapse">
        <ul>
          <li class="menu-item"><a href="#home" data-scroll>Home</a></li>
          <li class="menu-item active"><a href="new1.php" data-scroll>How It Works</a></li>
        <?php
    include_once("check_login_status.php");
        if($user_ok == true){
	?>

          <li class="menu-item"><a href="logout.php" data-scroll>Logout</a></li>
            
        <?php
        }else{
            
         ?>    
             <li class="menu-item"><a href="login.php" data-scroll>Login</a></li>
            <?php
        }
        ?>  <!--li class="menu-item"><a href="#blog" data-scroll>Blog</a></li>
          <li class="menu-item"><a href="http://www.google.com" target="_blank">Google</a></li-->
        </ul>
      </nav>
    </header>

            <section id="projects">
      
        
                  <div class="container">


    <div class="col-xs-12 yk_panel_background">


<div id="tab1" >
      <div class="row">

                       <div class="col-xs-8 " style="color: #ffffff;font-size: 20px; padding-left: 30px; padding-top: 45px">
                         <strong style="color: orange;font-size: 24px">Template : </strong>Pick an Option
                       </div>                       

       </div>
     <br><br>
       <div class="row">

        <div class="col-xs-10" style="padding-right: 0px" >
         
		<form id="myForm">

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book1">
         <a href="p2new.php?id=1">
         <img src="img/b1.png" class="bookcover" id="book1"></a>
         </div>

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book2">
          <a href="p2new.php?id=2">
              <img src="img/b2.jpg" class="bookcover" id="book2"></a>
         </div>

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book3">
          <a href="p2new.php?id=3">
              <img src="img/b3b.png" class="bookcover" id="book3"></a>
         </div>

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book4">
          <a href="p2new.php?id=4">
              <img src="img/b4.jpg" class="bookcover" id="book4"></a>
         </div>

         <!--div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book5">
          <a href="p2.php?id=5">
              <img src="img/book5.jpg" class="bookcover" id="book5"></a>
         </div>

         <div class="col-lg-2 col-md-2 col-xs-3 yk_books_photos" id="book6">
          <a href="p2.php?id=6">
              <img src="img/book6.jpg" class="bookcover" id="book6"></a>
         </div-->
         

      </form>


         </div>

         <!--div class="col-xs-2" style="padding-left: 0px">
          <div id="next_book_section"><a href="#"><i class="material-icons" style="color: #ffffff; font-size: 87px;margin-top: 17%">navigate_next</i></a></div> 
         </div-->

       </div>

</div>




    </div>
    <div class="col-xs-12 yk_panel_bottom_background">
      <div class="row">

        <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom active " id="yk_button_panel_bottom_1">

         <img src="img/8.png" class="section1_icon yk_top_margin15 invert" style="color: rgba(0, 0, 0, 0.54)">

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom " id="yk_button_panel_bottom_2">

         <img src="img/2.png" class="section1_icon yk_top_margin15">

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom " id="yk_button_panel_bottom_3">

         <img src="img/1.png" class="section1_icon yk_top_margin15">

       </div>


       <div class="col-lg-2 col-md-2 col-xs-3  yk_button_panel_bottom " id="yk_button_panel_bottom_4">

         <img src="img/6.png" class="section1_icon yk_top_margin15">

       </div>

     </div>

   </div>

</div>
          
    </section>
    
  </body>
</html>
