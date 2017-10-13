<?php include 'analyticstracking.php' ?>
<?php
error_reporting(E_ERROR | E_PARSE);

$email=$_GET['email'];
$e=$_SESSION['email'];
$u=$_GET['u'];

echo $email;
echo $e;
//echo $u;
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
    <meta name="author" content="#Sparkyourbestseller">
    <title>#Sparkyourbestseller</title>
    <link rel="stylesheet" href="css/w3.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://files.codepedia.info/uploads/iScripts/html2canvas.js"></script>
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://developer.mozilla.org/en-US/docs/Template:CustomSampleCSS?raw=1" />
  
    <script src="js/croppie.js"></script>

<style>
    #logo1{
            position:absolute;
            margin-top: -295px;
            opacity: 0.65;
        display: block;
        }
    #space{
        display: block;
        margin-left: 200px;
    }
    
    </style>
</head>
<body>
    <center>
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

        <div class="w3-container w3-light-grey">
        

           
                <?php
                $connect = mysqli_connect("localhost", "root", "", "test");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable where email='$u' ORDER BY id DESC ");
                while($r= mysqli_fetch_array($res))
                {
                    if($r[temp_id]==1)
                    {
                     echo ' <div class="w3-display-container w3-right w3-light-grey hoverable"><img src="'.($r['name'] ).'" height="300" width="300"/><p style="position: absolute; top: 200px; width: 500px; margin-left: -30%; z-index:5; color:#FFF">
                     <font face="Century Gothic" size="5" color="white">' .$r["title"].'</font><br><br><font size="+1" face="Comic Sans MS">'.$r["aname"].'
                     </font></p>';
                        echo '<div id="logo1"><img src="img/b1b.png" width="300px" height="300px" z-index:-1;></div>';
                        echo '</div>';
                        echo '<div id="space"></div>';
                    }
                     if($r[temp_id]==2)
                      {
                       echo '<div class="w3-display-container w3-right w3-light-grey hoverable"><img src="'.($r['name'] ).'" height="300" width="300"/><p style="position: absolute; top: 210px; width: 300px; margin-left:0%; z-index:5; color:#FFF">
                     <font face="Century Gothic" size="5" color="white">' .$r["title"].'</font><br><br><font size="+1" face="Comic Sans MS">'.$r["aname"].'
                     </font></p>';
                        echo '<div id="logo1"><img src="img/b2b.jpg" width="300px" height="300px" z-index:1;></div>';
                         echo '</div>';
                        echo '<div id="space"></div>';
                                                              }
                                                              if($id==3)
                                                              {     
        
                                                              echo '<img src="img/3.jpg" id="book_tab2_photo" width="200" height="200">';
                                                            
                                                              }
                                                           if($id==4)
                                                            {
                                                            
                                                                echo '<img src="img/13.jpg" id="book_tab2_photo" width="200" height="200">';

                                                             
                                                                }
                                                            if($id==5)
                                                            {
                                                              
                                                                    echo '<img src="img/book5.jpg" id="book_tab2_photo" width="200" height="200">';
                                                            
                                                            }

                                                            if($id==6)
                                                            {
                                                              
                                                                    echo '<img src="img/book6.jpg" id="book_tab2_photo" width="200" height="200">';
    
                                                            }

                     
                }

         

                ?>

                <!--img class="responsive-img" src="1.jpg" width="350" height="500"  /-->
                <!--<div></div>

                <div class="w3-padding w3-display-right"> Hello</div>-->
            </div>
        
        </div>
            
        </center>
</body>
</html>

    
