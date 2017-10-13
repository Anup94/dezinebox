<?php include 'analyticstracking.php' ?>
<?php
include("db_conc.php");
if($_POST)
{
$user=$_POST["user"];

$r=mysqli_query($db_conx,"INSERT INTO usertest values('$user')");

if($r)
{
    echo "inserted";
}
else
{
echo"error";
}
}

?>
<html>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <input type="text" name="user"><br>
    <input type="submit" value="submit">
</form>
</html>