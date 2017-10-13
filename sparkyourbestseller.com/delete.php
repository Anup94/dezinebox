<?php include 'analyticstracking.php' ?>

<?php
include_once("check_login_status.php");
$con=mysqli_connect("localhost", "root", "", "sparklive");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($con,"DELETE FROM scollable WHERE id='".$id."'");
mysqli_close($con);
header("location: 3dbook1.php?u=".$_SESSION["username"]);
?> 