<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
$dbConnect = new dbConnect();
$query="SELECT *,u.userId as userId FROM users u
LEFT JOIN users_type_map utm ON u.userId=utm.userId
LEFT JOIN design_partners dp ON dp.userId=u.userId
WHERE utm.userTypeId='".$dbConnect->const->userTypeId->designPartners."'";
$result=$dbConnect->conn->query($query);
$users=array();
if(mysqli_num_rows($result)>0) {
	$users=$result;
}
$projects=array();
$query="SELECT * FROM designer_experience";
$result=$dbConnect->conn->query($query);
if(mysqli_num_rows($result)>0) {
	foreach ($result as $row) {
		$projects[$row['userId']][]=$row;
	}
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
	<title>Design Partners - <?php echo SITE_TITLE;?></title>
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/css.php";?>
	<link rel="stylesheet" type="text/css" href="css/users.css?<?php echo RANDOM_NO;?>">
	<script type="text/javascript">
	var projects=<?php echo json_encode($projects);?>
	</script>
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
	                            <th>Years of Experience</th>
	                            <th>Profession</th>
	                             <th>Drive Link</th>
	                            <th>Company Name</th>
	                            <th>Company Address</th>
	                            <th>Website</th>
	                            <th>Hear From</th>
	                            <th>Projects</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php foreach ($users as $row) {
	                    		?>
	                    		<tr data-user="<?php echo $row['userId'];?>">
	                    			<td><?php echo $row['name'];?></td>
	                    			<td><?php echo $row['email'];?></td>
	                    			<td><?php echo $row['mobile'];?></td>
	                    			<td><?php echo $row['experience'];?></td>
	                    			<td><?php echo implode(", ",explode(",", $row['profession']));?></td>
	                    			<td><?php echo $row['driveLink'];?></td>
	                    			<td><?php echo $row['companyName'];?></td>
	                    			<td><?php echo $row['companyAddress'];?></td>
	                    			<td><?php echo $row['website'];?></td>
	                    			<td><?php echo $row['hearFrom'];?></td>
	                    			<td>
	                    				<?php if(!empty($projects[$row['userId']])):?>
	                    					<button type="button" onclick="showProjects(this)" class="btn btn-sm btn-info">Show Projects</button>
	                    				<?php endif;?>
	                    			</td>
	                    		</tr>
	                    		<?php
	                    	}
	                    	?>
	                    </tbody>
	                </table>
	            </div>
			</div>
		</section>
		<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Projects</h4>
					</div>
					<div class="modal-body no-padding">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Area</th>
									<th>Highlight</th>
									<th>Description</th>
									<th>Portfolio</th>
									<th>Linkedin</th>
								</tr>
								<tbody></tbody>
							</thead>
						</table>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/scripts.php";?>
	<script type="text/javascript" src="js/design-partners.js?<?php echo RANDOM_NO;?>"></script>
</body>
</html>
