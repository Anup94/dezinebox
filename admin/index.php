<?php
    require_once $_SERVER["DOCUMENT_ROOT"].'/initial-includes.php';
    require_once $_SERVER["DOCUMENT_ROOT"].'/admin/login-check.php';
    require_once $_SERVER["DOCUMENT_ROOT"].'/classes/db.class.php';
    $dbConnect = new dbConnect();
    $query="SELECT * FROM architecture_enquiries aq
    LEFT JOIN users u ON aq.userId=u.userId
    LEFT JOIN construction_types ct ON ct.constTypeId=aq.constTypeId
    ORDER BY aq.entryTime DESC
    ";
    $result=$dbConnect->conn->query($query);
    $users=array();
    if(mysqli_num_rows($result)>0) {
        $users=$result;
    }
    $formEle=array(
					"constTypeId"=>"Category",
                   "categoryOption"=>"Sub Category",
				   "subCategoryOption"=>"Theme",
                   "selectedArea"=>"AREA (SQ-FEET)",
                   //"projectType"=>"File",
                   "plotArea"=>" Plot Area",
                   "siteLocation"=>"Site Location",
                  
                   "details"=>"Details",
                   "price"=>"Price",
				   "Paid"=>"Paid",
					  "status"=>"Status",
					  "payment_doc"=>"Payment Doc"
                   );
   if(isset($_GET['delpost'])){ 
	define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','dezine');

$db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);

	$stmt = $db->prepare('DELETE FROM architecture_enquiries WHERE enqId = :enqId') ;
	$stmt->execute(array(':enqId' => $_GET['delpost']));

	header('Location: index.php?action=deleted');
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
<link rel="stylesheet" type="text/css" href="/css/home.css?<?php echo RANDOM_NO;?>">
		  <script language="JavaScript" type="text/javascript">
  function delpost(id, title)
  {
	  if (confirm("Are you sure you want to delete "))
	  {
	  	window.location.href = 'index.php?delpost=' + id;
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
  <th>Action</th>
<th>Date</th>
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
<?php foreach ($users as $row)
	                    		if($row['Paid'] == "YES"){
								?>
								
	                    		<tr style="background-color:#7fdd7f;">
	                    		<td>	<a href="javascript:delpost('<?php echo $row['userId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>
	                    			<td><?php echo $row['entryTime'];?></td>
	                    			<td><?php echo $row['enqId'];?></td>
	                    			<td><?php echo $row['name'];?></td>
	                    			<td><?php echo $row['email'];?></td>
	                    			<td><?php echo $row['mobile'];?></td>
	                    			 <?php foreach ($formEle as $key => $value) {
										 if($value == "Payment Doc"){
											 echo "<td><a href='".$row[$key]."' target='_blank'>Open</a></td>";
											 
										 }else if($value == "Category"){
											 if($row[$key] == '1')echo "<td>Residential</td>";
											 if($row[$key] == '2')echo "<td>Commercial</td>";
											 if($row[$key] == '3')echo "<td>Hospitality</td>";
											 if($row[$key] == '4')echo "<td>Institutional</td>";
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
										<td><a href="javascript:delpost('<?php echo $row['enqId'];?>')"><button type="button" class="btn btn-info btn-xs">Delete</button></a></td>
									<td><?php echo $row['entryTime'];?></td>
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
										 }else if($value == "Category"){
											 if($row[$key] == '1')echo "<td>Residential</td>";
											 if($row[$key] == '2')echo "<td>Commercial</td>";
											 if($row[$key] == '3')echo "<td>Hospitality</td>";
											 if($row[$key] == '4')echo "<td>Institutional</td>";
										 }else{
		                            	echo "<td>".$row[$key]."</td>";
										 }
		                            }
		                            ?>
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
