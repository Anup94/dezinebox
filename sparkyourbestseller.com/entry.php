
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
      <div class="navbar-header">
        <a class="navbar-brand" href="new.php"><img src="img/logo.png" class="logo" style="height: 188%;"></a>
      </div>
      
    </header>

    <section id="home">
        
        
        
        
  <div id="myCarousel" class="carousel slide">
          <div class="main_box" style="background-color: #203864">
             <div class="carousel-inner" role="listbox" style="min-height: 280px; margin-bottom: 15px">
                <div class="item active">
                  <div class="row">

                       <div class="col-xs-8 col-xs-offset-2" style="color: orange;font-size: 20px; padding-top: 70px">
                         “I dont have a story to tell”
                       </div>

                       <div class="col-xs-3 col-xs-offset-8" style="color: #ffffff;font-size: 18px; padding-top: 34px">
                         - Said No One Ever
                       </div>

                     </div>
                </div>

                
              </div>


          </div>

  </div>


 <button type="button" class="btn btn-primary yk_button_spark" id="myBtn">Pre-register</button>


        
        
        
        
        
        
        <html>
<head>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>
<body>



<!-- Trigger/Open The Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <center><h1><font color="black">Enter Your Email ID</font></h1><br><br><br>
                    <label><font color="black">Email id</font></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" autofocus><br><br><br>
                <!--label>Temp Password </label>&nbsp;&nbsp;&nbsp;<input type="text" name="temppass"><br><br><br-->
                <button name="submit">submit</button></center></form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
        
        
        
        
        
        
        
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
      
      <?php
if(isset($_POST['submit']))
{ 
    $email=$_POST['email'];
    $con=mysqli_connect("localhost","root","","test");
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}

//echo $email;    
mysqli_query($con, "INSERT INTO data(email,whenpost) VALUES ('$email',now())");
echo "<script>alert('Thank you for pre-registering. Your ‘bestseller' is just a few days away!')</script>";

}
?>
