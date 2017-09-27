<?php
    require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
    require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
    require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
	require_once $_SERVER["DOCUMENT_ROOT"].'/adminpanel/config.php'; 
    


if(isset($_GET['delpost'])){ 

	$stmt = $db->prepare('DELETE FROM blog_posts WHERE postID = :postID') ;
	$stmt->execute(array(':postID' => $_GET['delpost']));

	header('Location: index.php?action=deleted');
	exit;
} 

?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from colorlib.com/polygon/gentelella/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 08:19:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Panel </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
      <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + title + "'"))
	  {
	  	window.location.href = 'index.php?delpost=' + id;
	  }
  }
  </script>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <!-- top navigation -->
        <?php include_once 'navbar.php';?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top blue"><i class="fa fa-twitter"></i> Followers</span>
              <div class="count blue"><?php 
require_once('TwitterAPIExchange.php'); //get it from https://github.com/J7mbo/twitter-api-php

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
'oauth_access_token' => "808916059763998721-48fmzNRyxA63IESzhZSGqFBis2De4Cx",
'oauth_access_token_secret' => "TuUGBhWpy6DSW6iWShB6EjWbatAvY1XfAAdzpOaLD5tyO",
'consumer_key' => "gLKwyLuL7kdWSEXy5vIFF1rJe",
'consumer_secret' => "leIkOyWCdeaDepegSwb9ojceFNWF5ug1kWtPaELW4U1GQI8yDM"
);

$ta_url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=DezineBox';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$follow_count=$twitter->setGetfield($getfield)
->buildOauth($ta_url, $requestMethod)
->performRequest();
$data = json_decode($follow_count, true);
$followers_count=$data[0]['user']['followers_count'];

echo $followers_count;
?></div>

              <span class="count_bottom"><i class="red">DEZINEBOX</i></span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
              <div class="count">7,325</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
      

              

                <div class="col-md-7 col-sm-9 col-xs-12">
                 <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vToNV8fVubEejTab0KjEeii32Yla8pD1X0AEDjFR-c7P0TxcjbIN11vIYjGZAcOxYNMOh4DgYx7SFgU/pubchart?oid=918190397&amp;format=interactive"></iframe>

                </div>
                

             

          </div>
          <br />

          <div class="row">
<div class="col-md-7">
 <iframe width="600" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vToNV8fVubEejTab0KjEeii32Yla8pD1X0AEDjFR-c7P0TxcjbIN11vIYjGZAcOxYNMOh4DgYx7SFgU/pubchart?oid=675401131&amp;format=interactive"></iframe></div>

          </div><br />


          <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="x_panel"  style="height: 403px;">
                    <div class="x_title">
                      <h2>Daily active users <small>Sessions</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                          </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="temperature"><b>Monday</b>, 07:30 AM
                            <span>F</span>
                            <span><b>C</b></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="weather-icon">
                            <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <div class="weather-text">
                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="weather-text pull-right">
                          <h3 class="degrees">23</h3>
                        </div>
                      </div>

                      <div class="clearfix"></div>

                      <div class="row weather-days">
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Mon</h2>
                            <h3 class="degrees">25</h3>
                            <canvas id="clear-day" width="32" height="32"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Tue</h2>
                            <h3 class="degrees">25</h3>
                            <canvas height="32" width="32" id="rain"></canvas>
                            <h5>12 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Wed</h2>
                            <h3 class="degrees">27</h3>
                            <canvas height="32" width="32" id="snow"></canvas>
                            <h5>14 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Thu</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="sleet"></canvas>
                            <h5>15 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Fri</h2>
                            <h3 class="degrees">28</h3>
                            <canvas height="32" width="32" id="wind"></canvas>
                            <h5>11 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="col-sm-2">
                          <div class="daily-weather">
                            <h2 class="day">Sat</h2>
                            <h3 class="degrees">26</h3>
                            <canvas height="32" width="32" id="cloudy"></canvas>
                            <h5>10 <i>km/h</i></h5>
                          </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>

                </div>
            

            <div class="col-md-7 col-sm-8 col-xs-12">



              <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel"  style="height: 403px;">
                    <div class="x_title">
                      <h2>Visitors location <small>geo-presentation</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                      
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <div class="dashboard-widget-content">
            
                        <iframe width="100%" height="371" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vToNV8fVubEejTab0KjEeii32Yla8pD1X0AEDjFR-c7P0TxcjbIN11vIYjGZAcOxYNMOh4DgYx7SFgU/pubchart?oid=1920767198&amp;format=interactive"></iframe>
                    </div>
                  </div>
                </div>

              </div>
              <div class="row">


                <!-- Start to do list -->
               
                    
                    
                
                <!-- start of weather widget -->
                
                <!-- end of weather widget -->
              </div>

     </div></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                     <div class="x_title">
                      <h2>Your Blogs</h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a href="add-post.php"><button type="button" class="btn btn-primary btn-xs">
                                <i class="fa fa-user"> </i> Add blog
                              </button></a>
                        </li>
                        
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                      </div>

                      <div class="clearfix"></div>
                      <?php
		try {

			$stmt = $db->query('SELECT postID, postTitle, postDate, postImage FROM blog_posts ORDER BY postID DESC');
			while($row = $stmt->fetch()){ 

                 echo'<div class="col-md-4 col-sm-4 col-xs-12 profile_details">';
                    echo '<div class="well profile_view">';
                      echo '<div class="col-sm-12">';
                            echo '<h4 class="brief"><i></i></h4>';
                           echo '<div class="left col-xs-7">';
                           echo'<h2>'.$row['postTitle'].'</h2>' ;
                           echo'<p><strong>Date: </strong> '.date('jS M Y', strtotime($row['postDate'])).' </p>';
                             
                          echo '</div>';
                            echo '<div class="right col-xs-5 text-center">';
                          echo '<img src="images/'.$row['postImage'].'" alt="" class="img-circle img-responsive" style="height:130px; width:130px">';
                          echo '</div>';
                          echo '</div>';
                          echo '<div class="col-xs-12 bottom ">'; ?>
                        
                            <div class="col-xs-12 col-sm-12 emphasis">
                           <a href="edit-post.php?id=<?php echo $row['postID'];?>">   <button type="button" class="btn btn-success btn-xs">
                                 <i class="fa fa-edit"></i>  Edit </button></a>
                            <a href="javascript:delpost('<?php echo $row['postID'];?>','<?php echo $row['postTitle'];?>')"">  <button type="button" class="btn btn-danger btn-xs">
                                <i class="fa fa-user"> </i> Delete
                              </button></a>
                            </div>
                        
                       
                        <?php echo'</div></div></div>'; ?>
                        		<?php 
			

			}

		} catch(PDOException $e) {
		    echo $e->getMessage();
		}
	?>

                      

                     
                   

                      

                   
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Designed by <a href="Qleverlabs.com">Qleverlabs</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-23581568-13', 'auto');
ga('send', 'pageview');

</script>
	
  </body>

<!-- Mirrored from colorlib.com/polygon/gentelella/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 08:19:26 GMT -->
</html>
