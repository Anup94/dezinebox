<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from steelcoders.com/alpha/v1.2/table-data.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Feb 2017 06:30:01 GMT -->
<head>
        
        <!-- Title -->
        <title>Books | Admin_#SparkYourBestseller</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

        	
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
       
    </head>
    <body>
        <div class="loader-bg"></div>
        <div class="loader">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-spinner-teal lighten-1">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                    </div><div class="circle-clipper right">
                    <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mn-content fixed-sidebar">
            <header class="mn-header navbar-fixed">
                <nav class="cyan darken-1">
                    <div class="nav-wrapper row">
                        <section class="material-design-hamburger navigation-toggle">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                                <span class="material-design-hamburger__layer"></span>
                            </a>
                        </section>
                        <div class="header-title col s9">      
                           <span class="chapter-title">Admin #SparkYourBestseller</span>
                        </div>
                        <ul class="right col s9 m3 nav-right-menu">
                            <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                            <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i></a></li>
                            <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
                        </ul>
                        
                       
                    </div>
                </nav>
            </header>
            
            


           
            <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                            <a href="javascript:void(0);" class="account-settings-link">
                                <p>Spark_Admin</p>
                                <span>Spark_Email<i class="material-icons right">arrow_drop_down</i></span>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-account-settings">
                        <ul>
                            
                            <li class="divider"></li>
                            <li class="no-padding">
                                <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                            </li>
                        </ul>
                    </div>
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                   <li class="no-padding "><a class="waves-effect waves-grey" href="index.php"><i class="material-icons">settings_input_svideo</i>Users</a>
                    </li>
                    <li class="no-padding "><a class="waves-effect waves-grey" href="a_goal.php"><i class="material-icons">settings_input_svideo</i>Goals</a>
                    </li>
                    <li class="no-padding active"><a class="waves-effect waves-grey" href="a_books.php"><i class="material-icons">settings_input_svideo</i>Books</a>
                    </li>
                    <li class="no-padding "><a class="waves-effect waves-grey" href="a_book_details.php"><i class="material-icons">settings_input_svideo</i>Books Details</a>
                    </li>
                  
                  
                   
                </ul>
                <div class="footer">
                    <p class="copyright">SparkYourBestseller ©</p>
                    <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
                </div>
                </div>
            </aside>
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">Data Tables</div>
                    </div>
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">

                <?php
                    $connect = mysqli_connect("localhost","root","","sparklive");
                
                    $res1 = mysqli_query($connect, "SELECT * FROM scollable");
                    while($r= mysqli_fetch_array($res1))
                    {
                    $rowcount=mysqli_num_rows($res1);
                    }
                ?>

                                <span class="card-title"><?php  echo "<h5>Total number of books <b><u>".$rowcount."</u></b></h5>"; ?></span>
                               <!--  <p>DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code></p> -->
                               <br>








                                <table id="example" class="display responsive-table datatable-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                             <th>Title</th>
                                            <th>Author Name</th>
                                              <th>Sub title</th>
                                            
                                              <th>Number</th>
                                              <th>Date</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Id</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                             <th>Title</th>
                                            <th>Author Name</th>
                                              <th>Sub title</th>
                                            
                                              <th>Number</th>
                                              <th>Date</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>



 <?php
                $connect = mysqli_connect("localhost","root","","sparklive");
                
                $res = mysqli_query($connect, "SELECT * FROM scollable");
                while($r= mysqli_fetch_array($res))
                {

                     $user_query= "SELECT * FROM users where email= '".$r['email']."' ";

                   
                     $res_user = mysqli_query($connect, $user_query );

                     $row=mysqli_fetch_assoc($res_user);

            
                echo '<tr>';
                    echo '<td>'.$r["id"].'</td>';
                    echo '<td>'.$row["username"].'</td>';
                    echo '<td><a href="a_book_details.php?email='.$r["email"].'">'.$r["email"].'</a></td>';

                    echo '<td>'.$r["title"].'</td>';
                    echo '<td>'.$r["aname"].'</td>';
                    echo '<td>'.$r["sname"].'</td>';

                    echo '<td>'.$r["phone"].'</td>';
                    echo '<td>'.$r["whenneed"].'</td>';
                echo '</tr>';
                }?>





                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div class="page-footer">
        
            </div>
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/table-data.js"></script>
        
    </body>

</html>