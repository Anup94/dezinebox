<?php include 'analyticstracking.php' ?>
<?php include "check_login_status.php";

$email = "";
$username = "";
$id ="";
$password = "";
$phone ="";


if($user_ok!=1){
	header("Location: login4.php");
	//echo "user_ok= ".$user_ok; 
}
else{
	include 'db_conc.php';

	$email = $_SESSION['email'];
	$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
	$query = mysqli_query($db_conx, $sql);
    $numrows = mysqli_num_rows($query);
	if($numrows == 0){
		echo "The user with ".$email." doesn't exist.";
	}
	else{
		while($row = $query->fetch_assoc()) {
			$email = $row['email'];
			$id = $row['id'];
			$username = $row['username'];
			$password = $row['password'];
    	}
    	$phonesql = "SELECT `phone` FROM scollable WHERE email='$email' LIMIT 1";
    	$phonequery = mysqli_query($db_conx, $phonesql);
    	$phonerows = mysqli_num_rows($phonequery);
    	if($phonerows == 0){
    		$phone = "Not available";
    	}
    	else{
    		while($row = $phonequery->fetch_assoc()){
    			if($row['phone'] == ""){
    				$phone = "Not available";
    			}else{
    				$phone = $row['phone'];
    			}
    		}
    	}
    }
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Account</title>
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
	 <style>
		.demo-card-square.mdl-card {
		  width: 420px;
		  height: 640px;
		}
		.demo-card-square > .mdl-card__title {
		  color: #000;
		}
		#info {
			border: 0px solid black;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			padding: 15px;
			margin-top: 20px;
			margin-bottom: 10px;
			color: #fff;
			background-color: #203864;
			font-family: 'Abel', sans-serif;
			font-size: 25px;
			max-width: 500px;
			text-align: left;
		}
		#info > p {
			margin-right: 5px;
		}
		.button {
            border: 0;
            outline: none;
            border-radius: 0;
            padding: 5px 3px;
            font-size: 1.3rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: .1em;
            background: #1ab188;
            color: #ffffff;
            -webkit-transition: all 0.5s ease;
            transition: all 0.5s ease;
            -webkit-appearance: none;
        }
        .button-block {
            display: block;
            max-width: 200px;
        }
	</style>
</head>
<body>
<?php include "menu.php" ?>
<div class="container">
<center>
<div id="info">
<p>Email: <?php echo $email; ?></p><br />
<p>Username: <?php echo $username; ?></p><br />
<p>User_ID: <?php echo $id; ?></p><br />
<p>Phone: <?php echo $phone; ?></p><br />
<button class="button button-block" name="submit" id="loginbtn" onclick="javascript:location.href='3dbook1.php'">View your templates</button>

</div>
</center>
</div>
  

  <footer style="margin: 0% 0% 10% 0%">
    <?php include_once("footer0.php");?>
  </footer>



</body>
</html>
