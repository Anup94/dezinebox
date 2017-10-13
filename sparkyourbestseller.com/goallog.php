<?php include 'analyticstracking.php' ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
  <meta name="author" content="#Sparkyourbestseller">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="csst/style.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
          <li style="font-size: 26px;font-weight: 900;"><a href="table.php">Books</a></li>
          <li style="font-size: 26px;font-weight: 900;"><a href="userlog.php">Users</a></li>
          <li style="font-size: 26px;font-weight: 900;"><a href="goallog.php">Goals</a></li>
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
          <li style="font-size: 26px;font-weight: 900;"><a href="table.php">Books</a></li>
          <li style="font-size: 26px;font-weight: 900;"><a href="userlog.php">Users</a></li>
          <li style="font-size: 26px;font-weight: 900;"><a href="goallog.php">Goals</a></li>
        <li style="font-size: 26px;font-weight: 900;"><a href="logout.php">Login</a></li>
      </ul>
    </div>
  </nav><?php
        }
        ?>

  <section>
  <!--for demo wrap-->
  <h1>Goal Logs</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Area</th>
          <th>Goal</th>
          <th>Email id</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content" style="height:auto;">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
            <?php
                $connect = mysqli_connect("localhost","root","","sparklive");
                
                $res = mysqli_query($connect, "SELECT * FROM goal");
                while($r= mysqli_fetch_array($res))
                {
            
          echo '<tr>';
                    echo '<td>'.$r["area"].'</td>';
          echo '<td>'.$r["goal"].'</td>';
          echo '<td>'.$r["email"].'</td>';
         
                    echo '</tr>';
                }?>
      </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->
<div class="made-with-love">
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="jst/index.js"></script>

</body>
</html>
