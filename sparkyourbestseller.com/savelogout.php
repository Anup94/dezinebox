<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style type="text/css">
	.bs-example{
		margin: 20px;
	}
</style>
</head>
<?php
include_once("check_login_status.php");
$con=mysqli_connect("localhost", "root", "", "spark");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id']; // $id is now defined
$tid = $_GET['tid']; 
//$temp_id=$_GET
// or assuming your column is indeed an int
// $id = (int)$_GET['id'];
session_start();
$temp_id= $_SESSION['temp_id'];

mysqli_query($con,"update scollable set save='1' WHERE id='".$tid."'");
header("Refresh:2;url=sgallery.php?id=".$id."&tid=".$tid);
//echo '<script type="text/javascript">alert("Your Template is Saved");</script>';
//header("location: gallery1.php?id=".$temp_id);

echo '<div class="bs-example">
    <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Congratulations!</strong> Your bestseller now holds pride of place in the library of your dreams and ambition. Visit ‘My Bestseller’ section.
    </div>
</div>';    
    
session_destroy();
mysqli_close($con);
?> 
