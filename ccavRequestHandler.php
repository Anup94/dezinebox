<html>
<head>
<title> Custom Form Kit </title>
</head>
<body>
<center>

<?php include('crypto.php');
	error_reporting(0);
include ('config-payment.php');
$PGConfig = new PGConfig();
	
	$merchant_data='';
	$working_key=$PGConfig->working_key;//Shared by CCAVENUES
	$access_code=$PGConfig->access_code;//Shared by CCAVENUES
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.urlencode($value).'&';
	}

	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

?>
<form method="post" name="redirect" action="https://test.ccavenue.com/transaction/transaction.do?command=initiateTransaction "> 
<?php
echo "<input type=hidden name=encRequest value=$encrypted_data>";
echo "<input type=hidden name=access_code value=$access_code>";
?>
</form>
</center>
<script language='javascript'>document.redirect.submit();</script>
</body>
</html>

