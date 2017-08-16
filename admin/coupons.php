<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
$dbConnect = new dbConnect();
$query="SELECT * FROM coupons";
$result=$dbConnect->conn->query($query);
$coupons=array();
if(mysqli_num_rows($result)>0) {
	$coupons=$result;
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
	<title>Coupons - <?php echo SITE_TITLE;?></title>
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/css.php";?>
	<link rel="stylesheet" type="text/css" href="/css/coupons.css?<?php echo RANDOM_NO;?>">
</head>
<body>
	<div class="site-content">
		<section class="main-content">
			<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/navs.php";?>
			<div class="wrapper container-fluid">
				<div class="fit-main-content">
					<div class="clearfix">
						<div class="col-md-9">
							<div class="panel panel-default" style="margin-top:25px;">
								<div class="panel-heading clearfix">
									<h4 class="panel-title pull-left">Coupons</h4>
									<div class="pull-right">
										<button type="button" data-toggle="modal" data-target="#couponForm" class="btn btn-info btn-xs">Add Coupon</button>
									</div>
								</div>
				                <table class="table table-bordered" id="vendorsTable">
				                    <thead>
				                        <tr class="text-uppercase text-nowrap">
				                        	<th>Coupon Id</th>
				                            <th>Code</th>
				                            <th>Usage Times</th>
				                            <th>Discount %</th>
											<th>options</th>
				                        </tr>
				                    </thead>
				                    <tbody>
				                    	<?php foreach ($coupons as $row) {
				                    		?>
				                    		<tr>
				                    			<td><?php echo $row['couponId'];?></td>
				                    			<td><?php echo $row['couponCode'];?></td>
				                    			<td><?php echo $row['usageTimes'];?></td>
												<td><?php echo $row['discount'];?></td>
				                    			<input type="hidden" id="<?php echo $row['couponId'];?>" value="<?php echo $row['couponCode'];?>">
												<td><button type="button" class="btn btn-info btn-xs" id="delete" onclick="deleteThis('<?php echo $row['couponId'];?>')">Delete</button></td>
				                    		</tr>
				                    		<?php
				                    	}
				                    	?>
				                    </tbody>
				                </table>
			            	</div>
						</div>
					</div>
	            </div>
			</div>
		</section>
	</div>
	<script src="js\thirdparty\0_jquery.min.js"></script>
	<script>
	
	
	function deleteThis(id){
		
		
		var r = confirm("Do you really want to delete this coupon??");
if (r == true) {
   var cId = $('#'+id).val();
   console.log(cId);
		$.post('/admin/validate.php?task=deleteCoupon', {"code":cId}, function(res){
			$("#vendorsTable").load(location.href + " #vendorsTable");
		});
}
}
	</script>
	
	<form name="couponForm" id="couponForm" class="modal fade" tabindex="-1" role="dialog" method="post" action="validate.php?task=add_coupon">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Add Coupon</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Code</label>
						<input type="text" class="form-control" name="couponCode" required/>
					</div>
					<div class="form-group">
						<label>Usage Times</label>
						<input type="number" value="1" min="1" class="form-control" name="usageTimes" required/>
					</div>
					<div class="form-group">
						<label>Discount %</label>
						<input type="number" max="100" min="0.1" class="form-control" name="discount" required/>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Add Coupon</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<?php include_once $_SERVER['DOCUMENT_ROOT']."/includes/scripts.php";?>
	<script type="text/javascript" src="js/coupons.js"></script>
</body>
</html>