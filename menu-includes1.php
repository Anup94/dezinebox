<nav class="navbar-default navbar-fixed-top mega navbar-trans navbar-trans-dark trans-helper">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Logo -->
      <a class="navbar-brand" href="/"><img src="assets/images/logo.png"  alt="DeZinebox"></a>
    </div><!-- / .navbar-header -->

    <!-- Navbar Links -->
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">

       <li class="dropdown mega-fw"><a href="/">Home</a></li>
       <li class="dropdown mega-fw"><a href="/#box">Get your box</a></li>

       <li class="dropdown mega-fw" ><a href="partners.php">Be our Partner</a></li><!-- / Pages -->
       <!-- / Elements -->
       <li class="dropdown mega-fw"><a href="/#contact">Contact Us</a></a></li><!-- / Pages -->


      <?php if(empty($userSession)):?>
      <li>
        <a data-toggle="modal" data-target="#login-form" class="dropdown mega-fw" style="cursor: pointer; letter-spacing: 6px;">
           Sign In / up
        </a>
      </li>
      <?php else:?>
        <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false" style="color:#FF5100;">
        <div style="max-width:100px;overflow:hidden;text-overflow:ellipsis;" title="<?php echo $userSession->name;?>">
          <?php echo $userSession->name;?>
        </div>
       </a>
          <ul class="dropdown-menu" >
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      <?php endif;?>

      </ul>
    </div>
  </div>
</nav>
<!-- END: MEGA MENU -->
<!-- END: LAYOUT/HEADERS/MEGA-MENU -->
<!-- END: HOR NAV -->

<!-- END: HEADER -->
<!-- END: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<?php include_once 'authentication-includes.php';?>