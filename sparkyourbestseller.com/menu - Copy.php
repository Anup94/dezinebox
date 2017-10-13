
<?php include 'analyticstracking.php' ?>

<!DOCTYPE html>
<html>
<meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
  <meta name="author" content="#Sparkyourbestseller">
<title>#SparkYourBestSeller</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>

<div class="w3-bar">
    <a href="index.php" class="w3-bar-item"><img style="margin-left: -4%;margin-top: -4%;" src="img/logo.png" height="40px" width="225px"></a>
    
    
     <?php
    include_once("check_login_status.php");
        if($user_ok == true){
	?>
    
  <a href="logout.php" class="w3-bar-item w3-right w3-hide-small" style="text-decoration: none;margin-top: -2px;font-size: 22px;">Logout</a>
    <a href="3dbook.php" class="w3-bar-item w3-right w3-hide-small" style="text-decoration: none;margin-top: -2px;font-size: 22px;">MyBestSeller</a>
    <?php
        }else{
            
         ?>
     <a href="login.php" class="w3-bar-item w3-right w3-hide-small" style="text-decoration: none;margin-top: -2px;font-size: 22px;">Login</a>
    <?php
        }
        ?>
  <a href="objective.php" class="w3-bar-item w3-right w3-hide-small" style="text-decoration: none;margin-top: -2px;font-size: 22px;">How it Works</a>
  
  <!--
  <a href="#" class="w3-bar-item w3-button w3-right w3-hide-small">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-right w3-hide-small">Link 3</a>
  -->
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" style="font-size: 22px;color:#od47a1;" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-right w3-hide w3-hide-large w3-hide-medium" style="background-color:#203864;font-size: 22px;">
     <?php
    include_once("check_login_status.php");
        if($user_ok == true){
	?>
  <a href="objective.php" class="w3-bar-item" style="color: white;text-decoration: none;font-size: 22px;">How it Works</a>
  <a href="3dbook.php" class="w3-bar-item" style="color: white;text-decoration: none;font-size: 22px;">MyBestSeller</a>
  <a href="logout.php" class="w3-bar-item" style="color: white;text-decoration: none;font-size: 22px;">Logout</a>
    <?php
        }else{
         ?>
    <a href="objective.php" class="w3-bar-item" style="color: white;text-decoration: none;font-size: 22px;">How it Works</a>
  <a href="login.php" class="w3-bar-item" style="color: white;text-decoration: none;font-size: 22px;">Login</a>
    <?php
        }
        ?>
  <!--<a href="#" class="w3-bar-item w3-button">Link 3</a>-->
</div>

<div class="w3-container">
  
</div>

<script>
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
