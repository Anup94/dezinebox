<html>
<head>
<title> Custom Form Kit </title>
</head>
<body>
<center>
<?php include('crypto.php') ?>
<?php
	error_reporting(0);
	
	$merchant_data='';
	$working_key='FD31F459452C6C94CDCE55A44E071F38';//Shared by CCAVENUES
	$access_code='AVUC70EE68AU36CUUA'	;//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.urlencode($value).'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>

 <?php

	$amount = '';
	$servername = "localhost";
$username = "root";
$password = "";
$db = "dezine";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<?php

	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.urlencode($value).'&';
	
		if($key=='amount'){

			$amount = $value;

		}
		if($key=="order_id")
		{
			$order_id=$value;
		}
			


	}
	
			$sql = "UPDATE architecture_enquiries SET price=$amount WHERE enqId=$order_id";
		
if ($conn->query($sql) === TRUE) {

} else {
  
}
$sql = "UPDATE interior_enquiries SET price=$amount WHERE enqId=$order_id";
		
if ($conn->query($sql) === TRUE) {

} else {
  
}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.
		
?>
<form method="post" name="redirect" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

