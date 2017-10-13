<?php include 'analyticstracking.php' ?>
<?php session_start();

$Username= $_POST['username'];
$Password= $_POST['password'];

include("db_connect.php");

$con = mysql_connect("localhost","root","")or die('Could not connect:'.mysql_error())
$db = mysql_select_db("mydb") or die(mysql_error());

$select1 = "SELECT * FROM admin WHERE username='$Username' and password='$Password'"; 
$result1 = mysql_query($select1)or die(mysql_error());
$num1 = mysql_num_rows($result1); 
if($num1>0){
    $row = mysql_fetch_row($result1);
    $Username = $row[0];

    $select2 = "SELECT * FROM admin WHERE username='$Username'"; 
    $result2 = mysql_query($select2)or die(mysql_error());
    $row2 = mysql_fetch_row($result2);
    $username = $row2[1];
    $_SESSION['logname'] = $Username;
    mysql_close($con);
    header("Location: admin1.php");
}else{
	mysql_close($con);
}
?>