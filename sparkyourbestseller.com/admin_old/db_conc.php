<?php
//$db_conx = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
$db_conx = mysqli_connect("localhost", "root", "", "sparklive");
     // $con= mysqli_connect("localhost", "root", "", "sparklive");
// Evaluate the connection
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
} 
