<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
$dbConnect = new dbConnect();
$query="SELECT * FROM interior_enquiries aq
LEFT JOIN users u ON aq.userId=u.userId
LEFT JOIN construction_types ct ON ct.constTypeId=aq.constTypeId
ORDER BY aq.enqId
";
$result=$dbConnect->conn->query($query);
$users=array();
if(mysqli_num_rows($result)>0) {
	$users=$result;
}
$formEle=array(
                    "categoryOption"=>"Category Option",
                    "subCategoryOption"=>"Sub Category",
                    "selectedArea"=>"AREA (SQ-FEET)",
      "moreDetails"=>"Tell Us More",
      "budget"=>"Budget",
      "siteLocation"=>"Site Location",
      "driveLink"=>"Drive Link",
      "specificDetails"=>"Any Specific Detail",
      "price"=>"Price",
	  "Paid"=>"Paid",
	  "status"=>"Status",
	  "payment_doc"=>"Payment Doc"
      );
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
	<link rel="stylesheet" type="text/css" href="/css/home.css?<?php echo RANDOM_NO;?>">
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
	                        	<th>Order Id</th>
	                            <th>Name</th>
	                            <th>Email</th>
	                            <th>Mobile</th>
	                            <?php foreach ($formEle as $key => $value) {
	                            	echo "<th>".$value."</th>";
	                            }
	                            ?>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    	<?php foreach ($users as $row) {
	                    		if($row['Paid'] == "YES"){
								?>
								
	                    		<tr style="background-color:#7fdd7f;">
	                    			<td><?php echo $row['enqId'];?></td>
	                    			<td><?php echo $row['name'];?></td>
	                    			<td><?php echo $row['email'];?></td>
	                    			<td><?php echo $row['mobile'];?></td>
	                    			 <?php foreach ($formEle as $key => $value) {
										 if($value == "Payment Doc"){
											 echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
											 
										 }else{
		                            	echo "<td>".$row[$key]."</td>";
										 }
		                            }
		                            ?>
	                    		</tr>
								
								
	                    		<?php
								}else{
									?>
									
									
									<tr>
	                    			<td><?php echo $row['enqId'];?></td>
	                    			<td><?php echo $row['name'];?></td>
	                    			<td><?php echo $row['email'];?></td>
	                    			<td><?php echo $row['mobile'];?></td>
	                    			 <?php foreach ($formEle as $key => $value) {
										 if($value == "Payment Doc"){
											 if($row[$key]){
											 echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
											 }else{
												 echo "<td></td>";
												 
											 }
										 }else{
		                            	echo "<td>".$row[$key]."</td>";
										 }
		                            }
		                            ?>
	                    		</tr>
								
									
									
									<?php
									
								}
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