<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
$dbConnect = new dbConnect();
$query="SELECT * FROM box_types";
$result=$dbConnect->conn->query($query);
$boxes=array();
if(mysqli_num_rows($result)>0) {
	$boxes=$result;
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
	<title>Box - <?php echo SITE_TITLE;?></title>
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/css.php";?>
	<link rel="stylesheet" type="text/css" href="/css/coupons.css?<?php echo RANDOM_NO;?>">
</head>
<body>
	<div class="site-content">
		<section class="main-content">
			<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/navs.php";
			$i = 0;
			?>
			<div class="wrapper container-fluid">
				<div class="fit-main-content">
					<div class="clearfix">
						<form name="couponForm" method="post" action="validate.php?task=price_change" enctype="multipart/form-data">
						<div class="col-md-9">

							<div class="panel panel-default" style="margin-top:25px;">
								<div class="panel-heading clearfix">
									<h4 class="panel-title pull-left">Boxes</h4>
									<div class="pull-right">
										<!-- <button type="button" data-toggle="modal" data-target="#couponForm" class="btn btn-info btn-xs">Add Coupon</button> -->
									</div>
								</div>
				                <table class="table table-bordered" id="vendorsTable">
				                    <thead>
				                        <tr class="text-uppercase text-nowrap">
				                        	<th>Box Id</th>
				                            <th>Box Type</th>
				                            <th>Base Fare</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<?php foreach ($boxes as $row) {
				                    		

				                    		?>
				                    		<tr>
				                    			<td><?php echo $row['boxTypeId'];?></td>
				                    			<td><?php echo $row['boxType'];?></td>
				                    			<td><input type="text" name="demo[]" id='<?php echo $i++ ?>' value="<?php echo $row['baseFare'];?>">
				                    			<input type="hidden" value="<?php echo $row['boxTypeId'];?>" name="idv[]">
				                    			
				                    			</td>
				                    		</tr>
				                    		<?php
				                    	}
				                    	?>
				                    </tbody>
				                </table>

			            	</div>
	
			            	<br><br><button type="submit" style="padding: 12px;float: right;"  class="btn btn-info btn-xs" >Save</button>
			            
						</div>
					</div>
					</form>
	            </div>
			</div>
		</section>
	</div>

	<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/scripts.php";?>
	<script type="text/javascript" src="js/coupons.js"></script>
</body>
</html>