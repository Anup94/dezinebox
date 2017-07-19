<header  id="site-header">
  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed navbar-toggle-always" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Snap App</a>
      </div>
      <div class="site-nav-right">
        <?php if(!empty($siteNavRight)) {include_once $siteNavRight;}?>
      </div>
    </div><!-- /.container-fluid -->
  </nav>
</header>
<aside class="side-nav white fixed" id="side-nav">
  <div class="side-nav-wrapper">
    <div class="sidebar-profile text-center">
      <div class="sidebar-profile-image">
        <img src="/images/profile-image.png" class="circle" alt="">
      </div>
      <div class="sidebar-profile-info">
          <p><?php echo $_SESSION['userSession']->name;?></p>
      </div>
    </div>
    <ul class="sidebar-menu" id="sidebar-menu" data-collapsible="accordion" >
      <!-- <li>
        <a href="index.php">
          <i class="fa fa-bar-chart"></i>
          Dashboard
        </a>
      </li> -->
      <li>
        <a href="#">
          <i class="fa fa-file-text-o"></i>
          Bookings
          <i class="nav-drop-icon fa fa-angle-right"></i>
        </a>
        <div class="collapsible-body" style="">
          <ul>
            <li><a href="bookings.php?status=1">Open Bookings</a></li>
            <li><a href="bookings.php?status=0">Closed Bookings</a></li>
          </ul>
        </div>
      </li>
      <li>
        <a href="tickets.php">
          <i class="fa fa-file-text-o"></i>
          Tickets
        </a>
      </li>
      <li>
        <a href="materials.php">
          <i class="fa fa-file-text-o"></i>
          Materials
        </a>
      </li>
      <li>
        <a href="logout.php">
          <i class="fa fa-sign-out"></i>
          Log out
        </a>
      </li>
    </ul>
  </div>
</aside>