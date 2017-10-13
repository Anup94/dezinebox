<?php include 'db_conc.php';

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}

?>

  <!DOCTYPE html>
  <html>
  <head>
    <title>Messages</title>

     <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
          
  </head>
  <body>
    <nav>
    <div class="nav-wrapper">
      <a href="" class="brand-logo">  Happ Coach</a>
      <!-- <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a> -->
     <!--  <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul> -->
    </div>
  </nav>

     <table class="striped highlight responsive-table">
        <thead>
          <tr>
              <th>Email</th>
              <th>Subject</th>
              <th>Message</th>
          </tr>
        </thead>

        <tbody>

        <?php
        $msg_fetch = $db_conx->query("SELECT * FROM ContactPageData");

        while($row=$msg_fetch->fetch_assoc()){
          $email = $row['email'];
          $subject = $row['subject'];
          $message = $row['message'];
        


        ?>
          <tr>
            <td><?php echo $email;?></td>
            <td><?php echo $subject;?></td>
            <td><?php echo $message;?></td>
            
          </tr>

          <?php
          }
          ?>
        </tbody>
      </table>
            
  </body>
  </html>