<?php
session_start();
$con=mysqli_connect("localhost","root","","sparklive");

if(isset($_GET['submitted']) && $_GET['submitted'] == 1)
{
    session_start();
$a=$_GET['area'];
if($a == "Other"){
	$a = $_GET['other_area'];
}
$b=$_GET['goal'];
$_SESSION['goal']=$b;
    //echo $_SESSION['email'];

$d=$_GET['phone'];

$r=mysqli_query($con,"INSERT INTO goal(area,goal,email) values('$a','$b','$_SESSION[email]')");

if($r)
{
	echo 1;
 //header("location:template.php");
}
else
{
echo"error";
}
}

?>