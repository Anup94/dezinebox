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
if(isset($_GET['delpost'])){ 
	define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','dezine');

$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);

	$stmt = $db->prepare('DELETE FROM users WHERE userId = :userId') ;
	$stmt->execute(array(':userId' => $_GET['delpost']));

	header('Location: users.php?action=deleted');
	exit;
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
	  <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
	  if (confirm("Are you sure you want to delete '" + name + "'"))
	  {
	  	window.location.href = 'users.php?delpost=' + id;
	  }
  }
  </script>
</head>
<body>
	<div class="site-content">
		<section class="main-content">
			<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/navs.php";?>
			<div class="wrapper container-fluid">
				<div class="fit-main-content">
				<div class="table-responsive">
	                <table class="table table-bordered" id="vendorsTable">
	                    <thead>
	                        <tr class="text-uppercase text-nowrap">
	                            <th>Name</th>
	                            <th>Email</th>
	                            <th>Mobile</th>
	                            <th>Username</th>
	                            <th>Action</th>
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
	                    		<td>	<a href="javascript:delpost('<?php echo $row['userId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>

	                    		</tr>
	                    		<?php
	                    	}
	                    	?>
	                    </tbody>
	                </table>
	                </div>
	            </div>
			</div>
		</section>
	</div>
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/scripts.php";?>

</body>
</html>