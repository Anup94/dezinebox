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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="The journey of a 1000 miles begins with a single step. I have taken the first step of articulating my inspirational and stretch goal as a bestseller. Spark your bestseller on www.sparkyourbestseller.com">
	<meta name="author" content="#Sparkyourbestseller">
	<link rel="shortcut icon" href="cssbook/images/favicon.ico" />
	<link rel="stylesheet" href="cssbook/style.css" type="text/css" media="all" />
	<script type="text/javascript" src="jsbook/jquery-1.6.2.min.js"></script>
	<script type="text/javascript" src="jsbook/jquery.jcarousel.min.js"></script>
	<!--[if IE 6]>
		<script type="text/javascript" src="js/png-fix.js"></script>
	<![endif]-->
	<style>
    #logo1{
            position:absolute;
            margin-top: -165px;
            
        }
    </style>
  
</head>
<body>

    <!--?php
        
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
        <!?php
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
  </nav><!?php
        }
        ?-->
    <div id="main" class="shell">
		<!-- Sidebar -->
		<div id="sidebar">
			<ul class="categories">
				<li>
					<h4>Titles</h4>
					<ul>
						
                <?php
                $connect = mysqli_connect("localhost", "root", "", "test");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable");
                while($r= mysqli_fetch_array($res))
                {
                
                        echo '<li><a href="#">'.$r["title"].'</a></li>';
                }
                ?>
						
					</ul>
				</li>
				<li>
					<h4>Authors</h4>
					<ul>
						<?php
                $connect = mysqli_connect("localhost", "root", "", "test");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable");
                while($r= mysqli_fetch_array($res))
                {
                
                        echo '<li><a href="#">'.$r["aname"].'</a></li>';
                }
                ?>
				
					</ul>
				</li>
			</ul>
		</div>
		<!-- End Sidebar -->
		<!-- Content -->
		<div id="content">
			<!-- Products -->
			<div class="products">
				<h3>Books</h3>
				<ul>
					
                    
                  <?php
                $connect = mysqli_connect("localhost", "root", "", "test");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable ORDER BY id DESC ");
                while($r= mysqli_fetch_array($res))
                {
                    if($r[temp_id]==1)
                    {
                    echo '<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="'.($r['name'] ).'">
                                    <div id="logo1"><img src="img/b1b.png"></div>
									<span class="book-name">Title '.$r["title"].'</span>
									<span class="author">by '.$r["aname"].'</span>
                                    <span class="author">Email '.$r["email"].'</span>
                                    <span class="author">Date '.$r["whenneed"].'</span>
								</span>
							</a>
							<a href="#" class="buy-btn">Delete</a>
						</div>
					</li>';
                    }
                    if($r[temp_id]==2)
                    {
                    echo '<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="'.($r['name'] ).'">
                                    <div id="logo1"><img src="img/b2b.jpg"></div>
									<span class="book-name">Title '.$r["title"].'</span>
									<span class="author">by '.$r["aname"].'</span>
                                    <span class="author">Email '.$r["email"].'</span>
                                    <span class="author">Date '.$r["whenneed"].'</span>
								</span>
							</a>
							<a href="#" class="buy-btn">Delete</a>
						</div>
					</li>';
                    }
                    if($r[temp_id]==3)
                    {
                    echo '<li>
						<div class="product">
							<a href="#" class="info">
								<span class="holder">
									<img src="'.($r['name'] ).'" height="10px">
                                    <div id="logo1"><img src="img/greeen.png"></div>
									<span class="book-name">Title '.$r["title"].'</span>
									<span class="author">by '.$r["aname"].'</span>
                                    <span class="author">Email '.$r["email"].'</span>
                                    <span class="author">Date '.$r["whenneed"].'</span>
									
								</span>
							</a>
							<a href="#" class="buy-btn">Delete</a>
						</div>
					</li>';
                    }
                }
                ?>
                    
                    
					
				</ul>
			<!-- End Products -->
			</div>
			<div class="cl">&nbsp;</div>
			
			<!-- End Best-sellers -->
		</div>
		<!-- End Content -->
		<div class="cl">&nbsp;</div>
	</div>
	<!-- End Main -->
	
	<!-- End Footer -->
</body>
</html>