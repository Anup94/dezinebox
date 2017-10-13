<?php 

include 'db_conc.php';
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if(isset($_POST['email'])){
	$email = $_POST['email'];
	$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
	$query = mysqli_query($db_conx, $sql);
	$numrows = mysqli_num_rows($query);
	if($numrows > 0){
		$activation = generateRandomString();
		mysql_query($db_conx, "INSERT INTO tempotp (code, email) VALUES ('$activation', '$email')");
		echo $activation.' otp stored into database.';
		include("PHPMailer/PHPMailer/class.phpmailer.php");

            $account="sparkyourbestseller@gmail.com";
            $password="Spark@1(($";
            $to= $email;
            $from="sparkyourbestseller@gmail.com";
            $from_name="Spark Your Bestseller";
            $msg='<p><b>Password Reset,</b></p><br /><p>Click on the following link to change password.</p><br /><a href="http://test.sparkthebestseller.com/interntest/activation.php?u='.$activation.'>http://test.sparkthebestseller.com/interntest/activation.php?u='.$activation;
            // $msg='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>'; // HTML message
            $subject="#SparkYourBestseller";

            // echo "now assigning variables<br>";

            $mail = new PHPMailer();
            //$mail->IsSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth= true;
            $mail->Port = 587; // Or 587 or 465
            $mail->Username= $account;
            $mail->Password= $password;
            $mail->SMTPSecure = 'ssl';
            $mail->From = $from;
            $mail->FromName= $from_name;
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $msg;
            $mail->addAddress($to);

            // echo "now  mailig <br>";

            $mail->send();

	}
}
else{
	echo "Do something";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>
<form action="#" method="post">
<input type="email" name="email">
<input type="submit" name="forgot_password" value="submit">
</form>
</body>
</html>