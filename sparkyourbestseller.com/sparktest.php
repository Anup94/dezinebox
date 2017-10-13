<?php 
include_once("db_conc.php");
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
if($_POST){
	$email = mysqli_real_escape_string($db_conx, $_POST['email']);
	$subject = mysqli_real_escape_string($db_conx, $_POST['subject']);
	$message = mysqli_real_escape_string($db_conx, $_POST['message']);

	if(mysqli_query($db_conx,"INSERT INTO feedback (email,subject,message) VALUES ('$email','$subject','$message')")){
        include("PHPMailer/PHPMailer/PHPMailerAutoload.php");

            $account="reachout@happcoach.com";
            $password="CoachHapp99";
            $to= "reachout@happcoach.com";

            $from=$email;
            $from_name=$email;
             $msg='<p>Email id : '.$email.'</p>Subject : '.$subject.'</p><p>Message : '.$message.'';
            // $msg='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>'; // HTML message
            $subject=$subject;

            // echo "now assigning variables<br>";

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth= true;
            $mail->Port =587; // Or 587 or 465
            $mail->Username= $account;
            $mail->Password= $password;
            $mail->SMTPSecure = 'tls';
            $mail->From = $from;
            $mail->FromName= $from_name;
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $msg;
            $mail->addAddress($to);

            // echo "now  mailig <br>";

            //echo $email.'<br>'.$msg;

            $mail->Send();

		header("Location:index.php");
	}
	else{
		echo "There was some error";
	}
}
else{
	header("Location:contact.php");
	die();
}

// $sql = 

// $sql = "CREATE TABLE ContactPageData ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, email VARCHAR(30) NOT NULL, subject VARCHAR(150) NOT NULL, message VARCHAR(1000) )";

// if(mysqli_query($db_conx, $sql)){  
//          echo "Table created successfully";  
//          } else {  
//             echo "Table is not created successfully ";  
//          }  
//          mysqli_close($conn); 

?>