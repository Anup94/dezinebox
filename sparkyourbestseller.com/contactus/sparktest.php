<?php include 'db_conc.php';

if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
    exit();
}
if(isset($_POST['SubmitButton'])){
	$email = mysqli_real_escape_string($db_conx, $_POST['email']);
	$subject = mysqli_real_escape_string($db_conx, $_POST['subject']);
	$message = mysqli_real_escape_string($db_conx, $_POST['message']);

	if(mysqli_query($db_conx,"INSERT INTO ContactPageData (email,subject,message) VALUES ('$email','$subject','$message')")){
		header('Location: http://sparkthebestseller.com/');
	}
	else{
		echo "There was some error";
	}
}
else{
	header( 'Location: index.html' );
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