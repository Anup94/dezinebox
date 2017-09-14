<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101096447-2', 'auto');
  ga('send', 'pageview');

</script>
<nav class="navbar navbar-default navbar-fixed-top mega navbar-trans ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapse spanbutton" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- Logo -->
      <a class="navbar-brand" href="/"><img src="assets/images/logo.png" style="margin-left: -50%"   alt="DeZinebox"></a>
    </div><!-- / .navbar-header -->

    <!-- Navbar Links -->

      <ul class="nav navbar-nav " style=" width: 300px; float: right; margin-right: 10%;" >

       <li class="dropdown mega-fw"><a href="/">Home</a></li>
       <li class="dropdown mega-fw"><a href="get-your-box.php">Get your box</a></li>

     <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Be our Partner<span class="caret"></span></a>
         <ul class="dropdown-menu">
         
            <li><a href="designer.php">Design Partner</a></li>
            <li><a href="productpartner.php">Product Partner</a></li>
          </ul>
          </li>
       <!-- / Elements -->
       <li class="dropdown mega-fw"><a href="/#contact">Contact Us</a></a></li><!-- / Pages -->


      <?php if(empty($userSession)):?>
      <li>
        <a href="login.php" class="dropdown mega-fw" style="cursor: pointer; letter-spacing: 6px;">
           Sign In / up
        </a>
      </li>
      <?php else:?>
        <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false" style="color:#FF5100;">
        <div style="max-width:100px;overflow:hidden;text-overflow:ellipsis;" title="<?php echo $userSession->name;?>">
          <?php echo $userSession->username;?>
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
<?php include_once 'authentication-includes.php';?>