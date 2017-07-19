<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
$dbConnect = new dbConnect();
$query="SELECT *,u.userId as userId FROM users u
LEFT JOIN users_type_map utm ON u.userId=utm.userId
LEFT JOIN product_partners pp ON pp.userId=u.userId
WHERE utm.userTypeId='".$dbConnect->const->userTypeId->productPartners."'";
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
	<title>Product Partners - <?php echo SITE_TITLE;?></title>
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
	                            <th>Enterprise Name</th>
	                            <th>Email</th>
	                            <th>Mobile</th>
	                            <th>LinkedIn Profile </th>
	                            <th>Product Type</th>
	                            <th>Experience</th>
	                            <th>Address</th>
	                            <th>Website</th>
	                            <th>Catalog</th>
	                            <th>Google Drive</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php foreach ($users as $row) {
	                    		?>
	                    		<tr data-user="<?php echo $row['userId'];?>">
	                    			<td><?php echo $row['entName'];?></td>
	                    			<td><?php echo $row['email'];?></td>
	                    			<td><?php echo $row['mobile'];?></td>
	                    			<td><?php echo $row['linkedInProfile'];?></td>
	                    			<td><?php echo implode(", ",explode(",", $row['productType']));?></td>
	                    			<td><?php echo $row['experience'];?></td>
	                    			<td><?php echo $row['address'];?></td>
	                    			<td><?php echo $row['website'];?></td>
	                    			<td>
	                    				<?php if(!empty($row['catalog'])):?>
	                    					<a href=<?php echo $row['catalog'];?> target="_blank">View Catalog</a>
	                    				<?php endif;?>
	                    			</td>
	                    			<td><?php echo $row['googleDrive'];?></td>
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
