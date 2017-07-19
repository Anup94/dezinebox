<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
$dbConnect = new dbConnect();
$query="SELECT * FROM users
LEFT JOIN users_type_map utm ON users.userId=utm.userId
WHERE utm.userTypeId='".$dbConnect->const->userTypeId->customer."'";
$result=$dbConnect->conn->query($query);
$users=array();
if(mysqli_num_rows($result)>0) {
	$users=$result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Dashboard - <?php echo SITE_TITLE;?></title>
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/css.php";?>
	<link rel="stylesheet" type="text/css" href="css/users.css?<?php echo RANDOM_NO;?>">
</head>
<body>
	<div class="site-content">
		<section class="main-content">
			<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/navs.php";?>
			<div class="wrapper container-fluid">
				<div class="fit-main-content">
	                <table class="table table-bordered" id="vendorsTable">
	                    <thead>
	                        <tr class="text-uppercase text-nowrap">
	                            <th>Name</th>
	                            <th>Email</th>
	                            <th>Mobile</th>
	                            <th>Username</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php foreach ($users as $row) {
	                    		?>
	                    		<tr>
	                    			<td><?php echo $row['name'];?></td>
	                    			<td><?php echo $row['email'];?></td>
	                    			<td><?php echo $row['mobile'];?></td>
	                    			<td><?php echo $row['username'];?></td>
	                    		</tr>
	                    		<?php
	                    	}
	                    	?>
	                    </tbody>
	                </table>
	            </div>
			</div>
		</section>
	</div>
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/scripts.php";?>
</body>
</html>