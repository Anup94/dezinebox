<?php include ('server.php') ?>
<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <title>Hatim</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN: PAGE STYLES -->
        <link href="assets/plugins/ilightbox/css/ilightbox.css" rel="stylesheet" type="text/css" />
        <!-- END: PAGE STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="assets/base/css/plugins.css" rel="stylesheet" type="text/css" />
        <link href="assets/base/css/components.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="assets/base/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css" />
        <link href="assets/base/css/custom.css" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

    <body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen">
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <header class="c-layout-header c-layout-header-4 c-bordered c-layout-header-default-mobile c-header-transparent-dark" data-minimize-offset="80">
            <div class="c-navbar">
                <div class="container">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="index-2.html" class="c-logo">
                                <img src="assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo">
                                <img src="assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo-inverse">
                                <img src="assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-mobile-logo"> </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <button class="c-search-toggler" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                            <button class="c-cart-toggler" type="button">
                                <i class="icon-handbag"></i>
                                <span class="c-cart-number c-theme-bg">2</span>
                            </button>
                        </div>
                        <!-- END: BRAND -->
                        <!-- BEGIN: QUICK SEARCH -->
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                        <!-- END: QUICK SEARCH -->
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- BEGIN: MEGA MENU -->
                        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                     
<?php 

if ($_SESSION){ ?>

     <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-theme c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li class="c-active">
                                    <a href="#" class="c-link dropdown-toggle">Home
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                 
                                </li>
                                
                                
                                
                                
                            
                           
                                <li class="c-menu-type-classic">
                                    <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-white c-btn-circle c-btn-uppercase c-btn-sbold">
                                        <i class="icon-user"></i> Signed In</a>
                                         <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                        <li class="dropdown-submenu">
                                            <a href="">Logout
                                                <span class="c-arrow c-toggler"></span>
                                            </a>
                                         <?php   session_destroy();  ?>
                                            
                                        </li>
                                     
                                     
                                       
                                      
                                        
                                    </ul>
                                </li>
                              
                            </ul>
                        

<?php } else { ?>
     <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                             <li class="c-active">
                                    <a href="#" class="c-link dropdown-toggle">Home
                                        <span class="c-arrow c-toggler"></span>
                                    </a>
                                 
                                </li>
            <li> 
                                    <a href="javascript:;" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold">
                                        <i class="icon-user"></i> Sign In</a>
                                </li>        </ul>
    </div> 
<?php }
?>
                                
                            </ul>
                        </nav>
                        <!-- END: MEGA MENU -->
                        <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->
                    </div>
                    <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                    <!-- BEGIN: CART MENU -->
                    
                    <!-- END: CART MENU -->
                    <!-- END: LAYOUT/HEADERS/QUICK-CART -->
                </div>
            </div>
        </header>
        <!-- END: HEADER -->
        <!-- END: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Password Recovery</h3>
                        <p>To recover your password please fill in your email address</p>
                        <form>
                            <div class="form-group">
                                <label for="forget-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" id="forget-email" placeholder="Email"> </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Submit</button>
                                <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Back To Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->
        <!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
        <div class="modal fade c-content-login-form" id="signup-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Create An Account</h3>
                        <p>Please fill in below form to create an account with us</p>
                        <form method="POST" action="server.php">
                            <div class="form-group">
                                <label for="signup-email" class="hide">Email</label>
                                <input type="email" class="form-control input-lg c-square" name="email" placeholder="Email"> </div>
                            <div class="form-group">
                                <label for="signup-username" class="hide">Username</label>
                                <input type="text" class="form-control input-lg c-square" name="username" placeholder="Username"> </div>
                            <div class="form-group">
                                <label for="signup-fullname" class="hide">Password</label>
                                <input type="password" class="form-control input-lg c-square" name="password_1" placeholder="Password"> </div>
                            <div class="form-group">
                                <label for="signup-country" class="hide">Password</label>
                              <input type="password" class="form-control input-lg c-square" name="password_2" placeholder="Password Confirm"> </div>
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login" name="register">Signup</button>
                                <a href="javascript:;" class="c-btn-forgot" name="login" data-toggle="modal"  data-target="#login-form" data-dismiss="modal" >Back To Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/SIGNUP-FORM -->
        <!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
        <div class="modal fade c-content-login-form" id="login-form" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content c-square">
                    <div class="modal-header c-no-border">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3 class="c-font-24 c-font-sbold">Good Afternoon!</h3>
                        <p>Let's make today a great day!</p>
                        <form method="POST" action="server.php">
                            <div class="form-group">
                                <label for="login-email" class="hide">Username</label>
                                <input type="text" class="form-control input-lg c-square" name="username" placeholder="username"> </div>
                            <div class="form-group">
                                <label for="login-password" class="hide">Password</label>
                                <input type="password" class="form-control input-lg c-square" name="password" placeholder="Password"> </div>
                          
                            <div class="form-group">
                                <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login" name="login">Login</button>
                                <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Forgot Your Password ?</a>
                            </div>
                            <div class="clearfix">
                                <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                                    <span>or signup with</span>
                                </div>
                                <ul class="c-content-list-adjusted">
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                            <i class="fa fa-twitter"></i> Twitter </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                            <i class="fa fa-facebook"></i> Facebook </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-block c-btn-square btn-social btn-google">
                                            <i class="fa fa-google"></i> Google </a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer c-no-border">
                        <span class="c-text-account">Don't Have An Account Yet ?</span>
                        <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Signup!</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: CONTENT/USER/LOGIN-FORM -->
        <!-- BEGIN: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
        
        <!-- END: LAYOUT/SIDEBARS/QUICK-SIDEBAR -->
        <!-- BEGIN: PAGE CONTAINER -->
        <div class="c-layout-page">
            <!-- BEGIN: PAGE CONTENT -->
            <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-11 -->
            <section class="c-layout-revo-slider c-layout-revo-slider-11" dir="ltr">
                <div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile c-arrow-darken" data-bullets-pos="center">
                    <div class="tp-banner rev_slider" data-version="5.0">
                        <ul>
                            <!--BEGIN: SLIDE #1 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" src="assets/base/img/content/backgrounds/bg-78.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                    <h3 class="c-main-title c-font-48 c-font-bold c-font-center  c-font-dark c-block">  
									<span> 

											<?php 

if ($_SESSION){ ?>
     <?php echo "welcome  " . $_SESSION['username']; ?>
<?php } else { ?>
   <?php echo "welcome"  ?>
<?php }
?>



									   </span> </h3>
                                </div>
                                <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="140" data-speed="900" data-start="2000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:900;e:Expo.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:900;e:Expo.easeInOut;">
                                    <a href="#" class="c-action-btn btn btn-xlg c-btn-border-2x c-btn-square c-theme-btn c-btn-bold c-btn-uppercase">Learn More</a>
                                </div>
                            </li>
                            <!--END -->
                            <!--BEGIN: SLIDE #2 -->
                            <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                                <img alt="" src="assets/base/img/content/backgrounds/bg-90.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                                <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:500;e:Back.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                                data-endspeed="600">
                                    <h3 class="c-main-title c-font-48 c-font-bold c-font-center c-font-uppercase c-font-dark c-block"> CHOOSE JANGO
                                        <br>FOR EVERY DEVELOPMENT </h3>
                                </div>
                                <div class="tp-caption lft" data-x="center" data-y="center" data-voffset="130" data-speed="900" data-start="2000" data-transform_in="x:0;y:0;z:0;rotationX:0.5;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:900;e:Expo.easeInOut;"
                                data-transform_out="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;s:900;e:Expo.easeInOut;">
                                    <a href="#" class="c-action-btn btn btn-xlg c-btn-border-2x c-btn-square c-btn-dark c-btn-bold c-btn-uppercase">Learn More</a>
                                </div>
                            </li>
                            <!--END -->
                        </ul>
                    </div>
                </div>
            </section>
            <!-- END: LAYOUT/SLIDERS/REVO-SLIDER-11 -->
            <!-- BEGIN: CONTENT/FEATURES/FEATURES-9 -->
            <div class="c-content-box c-size-md c-bg-parallax" style="background-image: url(assets/base/img/content/backgrounds/bg-87.jpg)">
                <div class="container">
                    <div class="c-content-feature-9">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-center c-font-bold">What we can do</h3>
                            <div class="c-line-center c-theme-bg"></div>
                            <p class="c-font-center">Lorem ipsum dolor consetuer elit</p>
                        </div>
                        <!-- End-->
                        <ul class="c-list">
                            <li class="wow animate fadeInUp">
                                <div class="c-card">
                                    <i class="icon-rocket c-font-blue-1-5 c-font-22 c-bg-white c-float-left"></i>
                                    <div class="c-content c-content-left">
                                        <h3 class="c-theme-font c-font-uppercase c-font-bold">Full Sass Support</h3>
                                        <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow animate fadeInUp">
                                <div class="c-card">
                                    <i class="icon-user c-font-blue-1-5 c-font-27 c-bg-white c-float-left"></i>
                                    <div class="c-content c-content-left">
                                        <h3 class="c-theme-font c-font-uppercase c-font-bold">Group Tasks</h3>
                                        <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow animate fadeInUp">
                                <div class="c-card">
                                    <i class="icon-basket c-font-blue-1-5 c-font-27 c-bg-white c-float-left"></i>
                                    <div class="c-content c-content-left">
                                        <h3 class="c-theme-font c-font-uppercase c-font-bold">Responsive UI</h3>
                                        <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="c-list">
                            <li class="wow animate fadeInUp">
                                <div class="c-card">
                                    <i class="icon-bulb c-font-blue-1-5 c-font-22 c-bg-white c-float-left"></i>
                                    <div class="c-content c-content-left">
                                        <h3 class="c-theme-font c-font-uppercase c-font-bold">Easy Management</h3>
                                        <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow animate fadeInUp">
                                <div class="c-card">
                                    <i class="icon-pie-chart c-font-blue-1-5 c-font-27 c-bg-white c-float-left"></i>
                                    <div class="c-content c-content-left">
                                        <h3 class="c-theme-font c-font-uppercase c-font-bold">Quick Reports</h3>
                                        <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                    </div>
                                </div>
                            </li>
                            <li class="wow animate fadeInUp">
                                <div class="c-card">
                                    <i class="icon-trophy c-font-blue-1-5 c-font-27 c-bg-white c-float-left"></i>
                                    <div class="c-content c-content-left">
                                        <h3 class="c-theme-font c-font-uppercase c-font-bold">Great Support</h3>
                                        <p> Lorem ipsum dolor consetuer adipicing sed diam ticidut erat votpat dolore </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/FEATURES/FEATURES-9 -->
            <!-- BEGIN: CONTENT/APPS/APP-1 -->
            <!-- BEGIN: PARALLAX 1 - OPTION 3 -->
            <div class="c-content-box c-size-md c-bg-img-top" style="background-image: url(assets/base/img/content/backgrounds/bg-84.jpg)">
                <div class="container">
                    <div class="c-content-app-1">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1">
                            <h3 class="c-font-uppercase c-center c-font-white c-font-bold">Latest App Features</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                        <!-- End-->
                        <div class="c-diagram">
                            <div class="c-lines-1" style="background-image: url(assets/base/img/content/apps/app-line1.png)"></div>
                            <div class="c-wireframe" style="background-image: url(assets/base/img/content/apps/app-phone1.png)"></div>
                            <div class="c-phone-img" style="background-image: url(assets/base/img/content/apps/app-phone-img.jpg)"></div>
                            <div class="c-point-1 c-box c-app-left wow animate fadeInLeft">
                                <h3 class="c-font-uppercase c-font-white">Easy Management</h3>
                                <p class="c-font-grey-1">Lorem ipsum dolor amet consecetuer adipising dolore</p>
                            </div>
                            <div class="c-point-2 c-box c-app-right wow animate fadeInRight">
                                <h3 class="c-font-uppercase c-font-white">Group Tasks</h3>
                                <p class="c-font-grey-1">Lorem ipsum dolor amet consecetuer adipising dolore</p>
                            </div>
                            <div class="c-point-3 c-box c-app-left wow animate fadeInLeft">
                                <h3 class="c-font-uppercase c-font-white">Mobile Ready</h3>
                                <p class="c-font-grey-1">Lorem ipsum dolor amet consecetuer adipising dolore</p>
                            </div>
                            <div class="c-point-4 c-box c-app-right wow animate fadeInRight">
                                <h3 class="c-font-uppercase c-font-white">Quick Reports</h3>
                                <p class="c-font-grey-1">Lorem ipsum dolor amet consecetuer adipising dolore</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: PARALLAX 1 - OPTION 3 -->
            <!-- END: CONTENT/APPS/APP-1 -->
            <!-- BEGIN: CONTENT/TILES/TILE-2 -->
            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="c-content-tile-grid c-bs-grid-reset-space" data-auto-height="true">
                    <div class="c-content-title-1">
                        <h3 class="c-font-uppercase c-center c-font-bold">Services We Do</h3>
                        <div class="c-line-center"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="c-content-tile-1">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-bg-white c-arrow-left c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="#">
                                                        <i class="icon-link"></i>
                                                    </a>
                                                    <a href="assets/base/img/content/stock/12_grey.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                                        <i class="icon-magnifier"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="c-image c-overlay-object" data-height="height" style="background-image: url(assets/base/img/content/stock/12_grey.jpg)"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-bg-white c-content-v-center" data-height="height">
                                            <div class="c-wrapper">
                                                <div class="c-body c-center">
                                                    <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold"> LEARN MORE ABOUT JANGO </h3>
                                                    <a href="#" class="btn btn-sm c-btn-grey-2 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c-content-tile-1">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-bg-white c-arrow-left c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="#">
                                                        <i class="icon-link"></i>
                                                    </a>
                                                    <a href="assets/base/img/content/stock/38_grey.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                                        <i class="icon-magnifier"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="c-image c-overlay-object" data-height="height" style="background-image: url(assets/base/img/content/stock/38_grey.jpg)"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-bg-white c-content-v-center" data-height="height">
                                            <div class="c-wrapper">
                                                <div class="c-body c-center">
                                                    <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold"> The Future </h3>
                                                    <p class="c-tile-body">Lorem ipsum consectetuer elit sit amet, sit adipiscing amet, coectetuer adipiscing elit sit ame.</p>
                                                    <a href="#" class="btn btn-sm c-btn-grey-2 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c-content-tile-1">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-bg-white c-content-v-center" data-height="height">
                                            <div class="c-wrapper">
                                                <div class="c-body c-center">
                                                    <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold"> Nothing is impossible for JANGO. Highly Flexible, always growing </h3>
                                                    <a href="#" class="btn btn-sm c-btn-grey-2 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-bg-white c-arrow-right c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="#">
                                                        <i class="icon-link"></i>
                                                    </a>
                                                    <a href="assets/base/img/content/stock/21_grey.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                                        <i class="icon-magnifier"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="c-image c-overlay-object" data-height="height" style="background-image: url(assets/base/img/content/stock/21_grey.jpg)"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="c-content-tile-1">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-bg-white c-content-v-center" data-height="height">
                                            <div class="c-wrapper">
                                                <div class="c-body c-center">
                                                    <h3 class="c-tile-title c-font-25 c-line-height-34 c-font-uppercase c-font-bold"> Web Design </h3>
                                                    <p class="c-tile-body">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, nonummy nibh euismod tincidunt.</p>
                                                    <a href="#" class="btn btn-sm c-btn-grey-2 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="c-tile-content c-bg-white c-arrow-right c-content-overlay">
                                            <div class="c-overlay-wrapper">
                                                <div class="c-overlay-content">
                                                    <a href="#">
                                                        <i class="icon-link"></i>
                                                    </a>
                                                    <a href="assets/base/img/content/stock/22_grey.jpg" data-lightbox="fancybox" data-fancybox-group="gallery-4">
                                                        <i class="icon-magnifier"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="c-image c-overlay-object" data-height="height" style="background-image: url(assets/base/img/content/stock/22_grey.jpg)"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/TILES/TILE-2 -->
            <!-- BEGIN: CONTENT/ISOTOPE/GALLERY-5 -->
            <div id="c-isotope-anchor-2" class="c-content-box c-size-md c-bg-img-center" style="background-image: url(assets/base/img/content/backgrounds/bg-84.jpg)">
                <div class="c-content-title-1">
                    <h3 class="c-center c-font-uppercase c-font-bold c-font-white">Our Passion</h3>
                    <div class="c-line-center c-theme-bg"></div>
                </div>
                <div class="c-content-isotope-filter-2 c-center">
                    <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom c-active" data-filter="*">Show all</button>
                    <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-web">Web</button>
                    <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-brand">Brand</button>
                    <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-design">Design</button>
                    <button class="c-isotope-filter-btn c-font-white c-theme-border-bottom" data-filter=".c-isotope-photo">Photo</button>
                </div>
                <div class="c-content-isotope-gallery c-opt-5">
                    <div class="c-content-isotope-item c-isotope-photo">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="assets/base/img/content/stock/13.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-5" href="assets/base/img/content/stock/13.jpg" data-options="thumbnail:'assets/base/img/content/stock/13.jpg'" data-caption="<h4>The River</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-power-off c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-isotope-design">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="assets/base/img/content/stock/81.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-5" href="assets/base/img/content/stock/81.jpg" data-options="thumbnail:'assets/base/img/content/stock/81.jpg'" data-caption="<h4>Speedy City</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-power-off c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-isotope-web">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="assets/base/img/content/stock/63.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-5" href="assets/base/img/content/stock/63.jpg" data-options="thumbnail:'assets/base/img/content/stock/63.jpg'" data-caption="<h4>The Workstation</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-power-off c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-item-size-double c-isotope-photo">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="assets/base/img/content/stock/48.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-5" href="assets/base/img/content/stock/48.jpg" data-options="thumbnail:'assets/base/img/content/stock/48.jpg'" data-caption="<h4>Exploring the Ice</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-power-off c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-isotope-brand">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="assets/base/img/content/stock/33.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-5" href="assets/base/img/content/stock/33.jpg" data-options="thumbnail:'assets/base/img/content/stock/33.jpg'" data-caption="<h4>Music is the way of life</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-power-off c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-item-size-double c-isotope-photo">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="assets/base/img/content/stock4/36.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-5" href="assets/base/img/content/stock/36.jpg" data-options="thumbnail:'assets/base/img/content/stock4/36.jpg'" data-caption="<h4>Reflection</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-power-off c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-isotope-design c-isotope-brand">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="assets/base/img/content/stock5/7.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-5" href="assets/base/img/content/stock5/7.jpg" data-options="thumbnail:'assets/base/img/content/stock5/7.jpg'" data-caption="<h4>The Stationary</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-power-off c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-item-size-double c-isotope-photo c-isotope-web">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="assets/base/img/content/stock4/16.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-5" href="assets/base/img/content/stock/16.jpg" data-options="thumbnail:'assets/base/img/content/stock/36.jpg'" data-caption="<h4>The Clock</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-power-off c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-isotope-design c-isotope-brand">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="assets/base/img/content/stock/11.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-5" href="assets/base/img/content/stock/11.jpg" data-options="thumbnail:'assets/base/img/content/stock/11.jpg'" data-caption="<h4>The Poster</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-power-off c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-content-isotope-item c-isotope-photo">
                        <div class="c-content-isotope-image-container">
                            <img class="c-content-isotope-image" src="assets/base/img/content/stock/85.jpg" />
                            <div class="c-content-isotope-overlay c-ilightbox-image-5" href="assets/base/img/content/stock/85.jpg" data-options="thumbnail:'assets/base/img/content/stock/85.jpg'" data-caption="<h4>The Ruler</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum nibh pharetra ligula rhoncus, nec iaculis nulla semper.</p>">
                                <div class="c-content-isotope-overlay-icon">
                                    <i class="fa fa-power-off c-font-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/ISOTOPE/GALLERY-5 -->
            <!-- BEGIN: CONTENT/MISC/SERVICES-4 -->
            <div class="c-content-box c-size-md c-bg-img-top c-bg-parallax" style="background-image: url(assets/base/img/content/backgrounds/bg-63.jpg)">
                <div class="container">
                    <div class="c-content-feature-11">
                        <div class="row">
                            <div class="col-md-6 c-grid" data-auto-height="true" data-related="#c-video-card-3">
                                <ul class="c-grid-row">
                                    <li>
                                        <div class="c-bg-opacity-1 c-card" data-height="height">
                                            <h3 class="c-font-uppercase c-font-bold">SASS Support</h3>
                                            <p> Lorem niam ipsum dolor eli et suit ipsum dolore </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="c-bg-opacity-1 c-card" data-height="height">
                                            <h3 class="c-font-uppercase c-font-bold">Group Tasks</h3>
                                            <p> Lorem niam ipsum dolor eli et suit ipsum dolore </p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="c-grid-row">
                                    <li>
                                        <div class="c-bg-opacity-1 c-card" data-height="height">
                                            <h3 class="c-font-uppercase c-font-bold">Management</h3>
                                            <p> Lorem niam ipsum dolor eli et suit ipsum dolore </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="c-bg-opacity-1 c-card" data-height="height">
                                            <h3 class="c-font-uppercase c-font-bold">Quick Report</h3>
                                            <p> Lorem niam ipsum dolor eli et suit ipsum dolore </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 c-video">
                                <div id="c-video-card-3" class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/75608357?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/MISC/SERVICES-4 -->
            <!-- BEGIN: CONTENT/MISC/LATEST-ITEMS-1 -->
            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="container">
                    <div class="row" data-auto-height="true">
                        <div class="col-md-4 c-margin-b-30 wow animate fadeInDown">
                            <div class="imagecontour effect2">
                                <img class="img-responsive" src="assets/base/img/content/stock3/18.jpg" alt="service" /> </div>
                            <!--							
				<div class="c-content-media-1" data-height="height">
					<div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">Blog</div>
					<a href="#" class="c-title c-font-uppercase c-font-bold c-theme-on-hover">Take the web by storm with JANGO</a>
					<p>Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat</p>
					<div class="c-author">
						<div class="c-portrait" style="background-image: url(assets/base/img/content/team/team1.jpg)"></div>
						<div class="c-name c-font-uppercase">Jack Nilson</div>
					</div>
				</div> --></div>
                        <div class="col-md-4 c-margin-b-30 wow animate fadeInDown" data-wow-delay="0.2s">
                            <div class="c-content-media-1" data-height="height">
                                <div class="c-content-label c-font-uppercase c-font-bold c-theme-bg">News</div>
                                <a href="#" class="c-title c-font-uppercase c-font-bold c-theme-on-hover">The Multi-purpose HTML5 Theme</a>
                                <p>Lorem ipsum dolor sit amet, coectetuer diam nonummy adipiscing elit sit amet, sit amet, coectetuer adipiscing elit adipiscing consectetuer </p>
                                <div class="c-date"> 27 Jan 2015 </div>
                            </div>
                        </div>
                        <div class="col-md-4 c-margin-b-30 wow animate fadeInDown" data-wow-delay="0.4s">
                            <div class="c-content-media-1 c-content-v-center c-theme-bg" data-height="height">
                                <div class="c-wrapper">
                                    <div class="c-body c-center">
                                        <h3 class="c-font-25 c-line-height-34 c-font-white c-font-uppercase c-font-bold"> Nothing is impossible for JANGO. Highly Flexible, always growing</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 wow animate fadeInLeft">
                            <div class="c-content-media-2-slider" data-slider="owl">
                                <div class="c-content-label c-font-uppercase c-font-bold">Latest Uploads</div>
                                <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-auto-play="4000" data-rtl="false">
                                    <div class="item">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/content/stock3/18.jpg); min-height: 360px;">
                                            <div class="c-panel">
                                                <div class="c-fav">
                                                    <i class="icon-heart c-font-thin"></i>
                                                    <p class="c-font-thin">16</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/content/stock3/22.jpg); min-height: 360px;">
                                            <div class="c-panel">
                                                <div class="c-fav">
                                                    <i class="icon-heart c-font-thin"></i>
                                                    <p class="c-font-thin">24</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="c-content-media-2 c-bg-img-center" style="background-image: url(assets/base/img/content/stock3/32.jpg); min-height: 360px;">
                                            <div class="c-panel">
                                                <div class="c-fav">
                                                    <i class="icon-heart c-font-thin"></i>
                                                    <p class="c-font-thin">19</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 wow animate fadeInRight">
                            <div class="c-content-testimonial-2-slider" data-slider="owl">
                                <div class="c-title c-font-uppercase c-theme-bg">Testimonials</div>
                                <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-auto-play="6000" data-rtl="false">
                                    <div class="item">
                                        <div class="c-content-testimonial-2" style="min-height: 360px;">
                                            <div class="c-testimonial c-font-bold c-font-uppercase">JANGO the best HTML theme I've purchased in months!</div>
                                            <div class="c-author">
                                                <div class="c-portrait" style="background-image: url(assets/base/img/content/team/team13.jpg)"></div>
                                                <div class="c-name c-font-uppercase">Jim Cook</div>
                                                <p class="c-position c-theme c-font-uppercase">Orange Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="c-content-testimonial-2" style="min-height: 360px;">
                                            <div class="c-testimonial c-font-bold c-font-uppercase">Quick and extremely easy to use with awesome customer support</div>
                                            <div class="c-author">
                                                <div class="c-portrait" style="background-image: url(assets/base/img/content/team/team6.jpg)"></div>
                                                <div class="c-name c-font-uppercase">Jane Smith</div>
                                                <p class="c-position c-theme c-font-uppercase">Loop Inc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/MISC/LATEST-ITEMS-1 -->
            <!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-11 -->
            <div class="c-content-box c-size-lg c-bg-parallax" style="background-image: url(assets/base/img/content/backgrounds/bg-51.jpg)">
                <div class="container">
                    <!-- Begin: testimonials 4 component -->
                    <div class="c-content-testimonials-4 c-icon-white" data-slider="owl">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold c-font-white">Let's See What Our Customers Say</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                        <!-- End-->
                        <!-- Begin: Owlcarousel -->
                        <div class="owl-carousel c-theme c-owl-nav-center" data-single-item="true" data-slide-speed="5000" data-navigation-label="true" data-rtl="false">
                            <div class="item">
                                <div class="c-content-testimonial-4">
                                    <div class="c-content c-font-white"> Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat diam dolor sit amet consectetuer adipiscing elit </div>
                                    <div class="c-person">
                                        <img src="assets/base/img/content/team/team7.jpg" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name c-font-white">Mike Benson</h4>
                                            <p class="c-position c-font-bold c-theme-font">CFO, Loop Inc</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="c-content-testimonial-4">
                                    <div class="c-content c-font-white"> Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat diam dolor sit amet consectetuer adipiscing elit </div>
                                    <div class="c-person">
                                        <img src="assets/base/img/content/team/team3.jpg" class="img-responsive">
                                        <div class="c-person-detail c-font-uppercase">
                                            <h4 class="c-name c-font-white">John Doe</h4>
                                            <p class="c-position c-font-bold c-theme-font">CTO, Google Inc</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End-->
                    </div>
                    <!-- End-->
                </div>
            </div>
            <!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-11 -->
            <!-- BEGIN: CONTENT/PRODUCTS/PRODUCT-1 -->
            <div class="c-content-box c-size-md c-bg-white c-no-bottom-padding">
                <div class="container">
                    <div class="c-content-product-1 c-opt-1">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Learn More About JANGO</h3>
                            <div class="c-line-center"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 wow animate slideInUp">
                                <div class="c-media">
                                    <img src="assets/base/img/content/misc/jango-intro-3.png" alt="" /> </div>
                            </div>
                            <div class="col-md-8">
                                <div class="c-body">
                                    <ul class="c-row">
                                        <li class="wow animate fadeInUp">
                                            <h4>Code Quality</h4>
                                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
                                        </li>
                                        <li class="wow animate fadeInUp">
                                            <h4>Angular JS Support</h4>
                                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
                                        </li>
                                    </ul>
                                    <ul class="c-row">
                                        <li class="wow animate fadeInUp">
                                            <h4>Every Growing Unique Layouts</h4>
                                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
                                        </li>
                                        <li class="wow animate fadeInUp">
                                            <h4>Fully Mobile Optimized</h4>
                                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod</p>
                                        </li>
                                    </ul>
                                    <button type="button" class="btn btn-md c-btn-border-2x c-btn-square c-btn-regular c-btn-uppercase c-btn-bold c-margin-b-100">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/PRODUCTS/PRODUCT-1 -->
            <!-- BEGIN: CONTENT/PRICING/PRICING-1 -->
            <div class="c-content-box c-size-md c-bg-grey-1">
                <div class="container">
                    <div class="c-content-pricing-1">
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Purchase a Package</h3>
                            <div class="c-line-center"></div>
                        </div>
                        <div class="c-tile-container">
                            <div class="c-tile c-tile-small wow animate fadeInLeft">
                                <div class="c-label c-theme-bg">Standard</div>
                                <p class="c-price">59
                                    <sup>$</sup>
                                </p>
                                <p class="c-font-uppercase">1000 Copies</p>
                                <p class="c-font-uppercase">Unlimited Data</p>
                                <p class="c-font-uppercase">Unlimited Users</p>
                                <p class="c-font-uppercase">For 7 days</p>
                                <a href="#" class="btn btn-md c-btn-square c-btn-border-2x c-btn-regular c-btn-uppercase c-btn-bold">Purchase</a>
                            </div>
                            <div class="c-tile wow animate fadeInUp">
                                <div class="c-label c-theme-bg">Business</div>
                                <p class="c-price">99
                                    <sup>$</sup>
                                </p>
                                <p class="c-font-uppercase">10,000 Copies</p>
                                <p class="c-font-uppercase">Unlimited Data</p>
                                <p class="c-font-uppercase">Unlimited Users</p>
                                <p class="c-font-uppercase">For 30 days</p>
                                <button type="button" class="btn btn-md c-btn-square c-btn-border-2x c-btn-regular c-btn-uppercase c-btn-bold">Purchase</button>
                            </div>
                            <div class="c-tile c-tile-small wow animate fadeInRight">
                                <div class="c-label c-theme-bg">Expert</div>
                                <p class="c-price">199
                                    <sup>$</sup>
                                </p>
                                <p class="c-font-uppercase">Unlimited Copies</p>
                                <p class="c-font-uppercase">Unlimited Data</p>
                                <p class="c-font-uppercase">Unlimited Users</p>
                                <p class="c-font-uppercase">For 1 Year</p>
                                <button type="button" class="btn btn-md c-btn-square c-btn-border-2x c-btn-regular c-btn-uppercase c-btn-bold">Purchase</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: CONTENT/PRICING/PRICING-1 -->
            <!-- BEGIN: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
            <div class="c-content-box c-size-md c-bg-white">
                <div class="container">
                    <!-- Begin: Testimonals 1 component -->
                    <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
                        <!-- Begin: Title 1 component -->
                        <div class="c-content-title-1">
                            <h3 class="c-center c-font-uppercase c-font-bold">Happy Customers</h3>
                            <div class="c-line-center c-theme-bg"></div>
                        </div>
                        <!-- End-->
                        <!-- Begin: Owlcarousel -->
                        <div class="owl-carousel owl-theme c-theme owl-bordered1 c-owl-nav-center" data-items="6" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="2" data-slide-speed="5000" data-rtl="false">
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client1.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client2.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client3.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client4.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client6.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client5.jpg" alt="" />
                                </a>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/base/img/content/client-logos/client6.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- End-->
                    </div>
                    <!-- End-->
                </div>
            </div>
            <!-- END: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
            <!-- END: PAGE CONTENT -->
        </div>
        <!-- END: PAGE CONTAINER -->
        <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-8 -->
        <a name="footer"></a>
        <footer class="c-layout-footer c-layout-footer-4 c-bg-footer-8" id="footer">
            <div class="c-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 c-footer-4-p-right">
                            <div class="c-content-title-1">
                                <h3 class="c-font-uppercase c-font-bold c-font-white c-border">JAN
                                    <span class="c-theme-font">GO</span>
                                </h3>
                            </div>
                            <p class="c-about"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed elit diam nonummy ad minim veniam quis nostrud exerci et tation diam nisl ut aliquip exit commodo consequat euismod tincidunt ut laoreet dolore magna aluam. </p>
                            <div class="c-links">
                                <ul class="c-nav">
                                    <li>
                                        <a class="c-active c-theme-border c-theme-font" href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Work</a>
                                    </li>
                                    <li>
                                        <a href="#">Careers</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <p class="c-contact"> 25, Lorem Lis Street, Orange C, California, US
                                <br> Phone: 800 123 3456
                                <br> Fax: 800 123 3456
                                <br> Skype: jango.inc </p>
                            <ul class="c-socials">
                                <li>
                                    <a href="#">
                                        <i class="icon-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-social-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-social-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 c-footer-4-p-left">
                            <div class="c-feedback">
                                <h3 class="c-font-thin">Contact Us</h3>
                                <form action="#">
                                    <input type="text" placeholder="Your Name" class="form-control">
                                    <input type="text" placeholder="Your Email" class="form-control">
                                    <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control"></textarea>
                                    <button type="submit" class="btn c-btn-white c-btn-border-2x c-btn-uppercase btn-lg c-btn-bold c-btn-square">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: LAYOUT/FOOTERS/FOOTER-8 -->
        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END: LAYOUT/FOOTERS/GO2TOP -->
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
	<script src="../assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
        <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery.easing.min.js" type="text/javascript"></script>
        <script src="assets/plugins/reveal-animate/wow.js" type="text/javascript"></script>
        <script src="assets/base/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
        <script src="assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
        <script src="assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
        <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script src="assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="assets/base/js/components.js" type="text/javascript"></script>
        <script src="assets/base/js/components-shop.js" type="text/javascript"></script>
        <script src="assets/base/js/app.js" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- BEGIN: PAGE SCRIPTS -->
        <script src="assets/base/js/scripts/revo-slider/slider-11.js" type="text/javascript"></script>
        <script src="assets/plugins/isotope/isotope.pkgd.min.js" type="text/javascript"></script>
        <script src="assets/plugins/isotope/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="assets/plugins/isotope/packery-mode.pkgd.min.js" type="text/javascript"></script>
        <script src="assets/plugins/ilightbox/js/jquery.requestAnimationFrame.js" type="text/javascript"></script>
        <script src="assets/plugins/ilightbox/js/jquery.mousewheel.js" type="text/javascript"></script>
        <script src="assets/plugins/ilightbox/js/ilightbox.packed.js" type="text/javascript"></script>
        <script src="assets/base/js/scripts/pages/isotope-gallery.js" type="text/javascript"></script>
        <!-- END: PAGE SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-64667612-1', 'themehats.com');
  ga('send', 'pageview');
</script>


<script>
	$(document).ready(function () {
    $("#flash-msg").delay(3000).fadeOut("slow");
});
</script>
</body>



<!-- Mirrored from themehats.com/themes/jango/home-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 May 2017 04:58:47 GMT -->
</html>