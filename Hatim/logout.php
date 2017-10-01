<?php
 session_start();
 session_destroy();

 echo "You have sucessfully logged out. Click here to <a href='try.php'> login again</a>";
 ?>