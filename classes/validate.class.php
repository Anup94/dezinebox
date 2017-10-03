<?php

		use Aws\S3\Exception\S3Exception;
		use Aws\S3\S3Client;


	   use Facebook\FacebookSession;
	   use Facebook\FacebookRedirectLoginHelper;
	   use Facebook\FacebookRequest;
	   use Facebook\FacebookResponse;
	   use Facebook\FacebookSDKException;
	   use Facebook\FacebookRequestException;
	   use Facebook\FacebookAuthorizationException;
	   use Facebook\GraphObject;
	   use Facebook\Entities\AccessToken;
	   use Facebook\HttpClients\FacebookCurlHttpClient;
	   use Facebook\HttpClients\FacebookHttpable;

		
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once ('libraries-google/Google/autoload.php');
require_once($_SERVER['DOCUMENT_ROOT']."/classes/db.class.php");
require_once 'resp.class.php';
//require_once ('vendor-facebook-login/autoload.php');
require "twitteroauth-master/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//require 'app/start.php';
require 'vendor/autoload.php';
//$config = require('classes/app/config.php');

 
		

class validateClass extends dbConnect {

	function deleteCoupon($input){
		$resp = new resp();
		$code = $input->code;
		$query = "DELETE FROM coupons WHERE couponCode='$code'";
		$this->setQuery($query);
		$result=$this->conn->query($query);
		$resp->msg="Yes";
		return $resp;
	}
	function validatePromoCode($input){
		$resp = new resp();
		//$data = json_decode($input);
		$code = $input->code;
		$query = "SELECT * FROM coupons WHERE couponCode='$code'";
		$this->setQuery($query);
		$result=$this->conn->query($query);
		if(mysqli_num_rows($result)==0){
			$resp->msg="Invalid Code";
		}else{
			$code=$result->fetch_object();
			$discount = $code->discount;
			$resp->msg="Yes";
			$resp->discount=$discount;
		}
		return $resp;
	}

	function login($input) {
		$resp=new resp();
		if(empty($input) || !isset($input->username) || !isset($input->password)) {
			$resp->msg="Some fields are missing.";
			return $resp;
		}
		$allowedUserTypes=array($this->const->userTypeId->admin,$this->const->userTypeId->customer);
		$query="SELECT u.userId,u.name,u.mobile,u.username,u.email FROM users u
		LEFT JOIN users_type_map um ON um.userId=u.userId
		WHERE u.username=".$this->escQuote($input->username)." AND password=Password(".$this->escQuote($input->password).")
		AND um.userTypeId IN (".implode(",",$allowedUserTypes).")";
		$this->setQuery($query);
		$result=$this->conn->query($query);
		// $resp["query"]=$query;
		if(mysqli_num_rows($result)==0) {
			$resp->msg="Invalid login.";
			
			return $resp;
		}
		$user=$result->fetch_object();
		$resp->user=$user;
		$resp->msg="Login successful";
		$resp->status="1";
	
			//header('Location:get-your-box.php');
				return $resp;
	}
	function google_login(){
		$resp=new resp();
	// $client_id = ; 
	// $client_secret = ';
	// $redirect_uri = 'http://localhost/';
	
	$client = new Google_Client();
	$client->setClientId('688774722159-rjhbdfuit4n3cb9a0bfo3tq920g0lkkn.apps.googleusercontent.com');
	$client->setClientSecret('w71q5kBlps_QeOiDeVoNEZ4x');

	$client->setRedirectUri('http://dezinebox.io/validate.php?task=google-login');

	
	$client->addScope("email");
	$client->addScope("profile");
	
	$service = new Google_Service_Oauth2($client);
	
	
	$authUrl = $client->createAuthUrl();
	if(!isset($_GET['code'])){
	header("Location: ". $authUrl);
	}else{



		
		$client->authenticate($_GET['code']);
		$token = $client->getAccessToken();
		//header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
		//exit;
		
	}

	if(isset($token)){
		$g_user = $service->userinfo->get();

		$query = "SELECT * FROM users WHERE username='".$this->conn->real_escape_string($g_user->id)."'";
		$this->setQuery($query);
		$result = $this->conn->query($query);
		//echo($result->fetch_object()->usercount);
		if(mysqli_num_rows($result) == 0){
		$newUser = new stdClass();
		$newUser->username=$g_user->id;
		$newUser->name=$g_user->name;
		$newUser->email=$g_user->email;
		//$newUser->mobile=$input->mobile;

		$userId=$this->insertObject("users",$newUser);
		$result = $this->conn->query($query);

		$user=$result->fetch_object();
		$resp->user=$user;
		$resp->msg="Login successful";
		$resp->status="1";
		return $resp;
			header('Location:index.php');

		}
		else{
		$query = "SELECT * FROM users WHERE username='".$this->conn->real_escape_string($g_user->id)."'";
		
		$result = $this->conn->query($query);
		$user=$result->fetch_object();
		//echo($user);
		$resp->user=$user;
		$resp->msg="Login successful";
		$resp->status="1";
		return $resp;
			header('Location:index.php');
		}

	
	}
	
	}

	function facebook_login(){
	 $resp = new resp();
	

	 
	  	require_once 'fb-login/autoload.php';
		//require_once 'autoload.php';
	  FacebookSession::setDefaultApplication('1571301269586732','7ddb33639eec1ec4066cb4af701653c1');

	  $helper = new FacebookRedirectLoginHelper('http://dezinebox.io/validate.php?task=facebook-login');
	  echo('hey1');

	  if(!isset($_GET['code'])){
	  $loginUrl = $helper->getLoginUrl();
	  //echo($loginUrl);
	  header('Location:'.$loginUrl);
	  }
	  //echo '<a href="' . $loginUrl . '">Login with Facebook</a>';
	 // 
	 else{
	  $helper = new FacebookRedirectLoginHelper("http://dezinebox.io/validate.php?task=facebook-login");
	  try{
	  $session = $helper->getSessionFromRedirect();
		// var_dump($helper);
	  }catch( FacebookRequestException $ex ){
		echo('hey2');
	  }catch(Exception $ex){
		echo('hey3');
	  }
	 // echo($session);
	  echo('hey5');
	  if(isset($session)){
		$request = new FacebookRequest($session, 'GET', '/me' );
		$response = $request->execute();
		echo('hey6');
		$graphObject = $response->getGraphObject();
		$fbid = $graphObject->getProperty('id');           // To Get Facebook ID
		$fbfullname = $graphObject->getProperty('name');   // To Get Facebook full name
		$fbmail = $graphObject->getProperty('email'); 
		//echo($fbid. $fbfullname. $fbmail);
		$query = "SELECT * FROM users WHERE username='".$fbid."'";
		$this->setQuery($query);
		$result = $this->conn->query($query);
		echo("this".$fbid);
		echo($fbfullname);
		if(mysqli_num_rows($result) == 0){
		$newUser = new stdClass();
		$newUser->username=$fbid;
		$newUser->name=$fbfullname;
		$newUser->email=$fbmail;
		//$newUser->mobile=$input->mobile;
		
		$userId=$this->insertObject("users",$newUser);
		$result = $this->conn->query($query);

		$user=$result->fetch_object();
		$resp->user=$user;
		$resp->msg="Login successful";
		$resp->status="1";
		return $resp;
			header('Location:index.php');
		}
		else{
		$user=$result->fetch_object();
		//var_dump($user);
		$resp->user=$user;
		$resp->msg="Login successful";
		$resp->status="1";
		return $resp;
			header('Location:index.php');
		}


 
}

	  }
	}
	
	function twitter_login(){
		$resp=new resp();
		//echo(isset($_SESSION['oauth_token']));
if($_GET['oauth_token']){
  $oauth_token=$_SESSION['oauth_token'];unset($_SESSION['oauth_token']);
  $consumer_key = 'EZKOfyBB9m47ACMDiOGQLAprs';
  $consumer_secret = 'E3d80PxNn7Y3SfRhu3amPKLcunDX6rlxlfCwLGYlffAqabo6BM';
  $connection = new TwitterOAuth($consumer_key, $consumer_secret);
 //necessary to get access token other wise u will not have permision to get user info
  $params=array("oauth_verifier" => $_GET['oauth_verifier'],"oauth_token"=>$_GET['oauth_token']);
  $access_token = $connection->oauth("oauth/access_token", $params);
  //now again create new instance using updated return oauth_token and oauth_token_secret because old one expired if u dont u this u will also get token expired error
  $connection = new TwitterOAuth($consumer_key, $consumer_secret,
  $access_token['oauth_token'],$access_token['oauth_token_secret']);
  $content = $connection->get("account/verify_credentials");
  //print_r($content);
  $user_id=$content->id;
  $name=$content->name;
  $email=$content->email;

		$query = "SELECT * FROM users WHERE username='".$user_id."'";
		$this->setQuery($query);
		$result = $this->conn->query($query);
		//echo($result->fetch_object()->usercount);
		if(mysqli_num_rows($result) == 0){
		$newUser = new stdClass();
		$newUser->username=$user_id;
		$newUser->name=$name;
		$newUser->email=$email;
		//$newUser->mobile=$input->mobile;
		
		$userId=$this->insertObject("users",$newUser);
		$result = $this->conn->query($query);

		$user=$result->fetch_object();
		$resp->user=$user;
		$resp->msg="Login successful";
		$resp->status="1";
		return $resp;
		header('Location:index.php');
		}
		else{
		$user=$result->fetch_object();
		var_dump($user);
		$resp->user=$user;
		$resp->msg="Login successful";
		$resp->status="1";
		return $resp;
			header('Location:index.php');
		}


  session_destroy();
}else{
  $consumer_key = 'EZKOfyBB9m47ACMDiOGQLAprs';
  $consumer_secret = 'E3d80PxNn7Y3SfRhu3amPKLcunDX6rlxlfCwLGYlffAqabo6BM';
  //this code will return your valid url which u can use in iframe src to popup or can directly view the page as its happening in this example

  $connection = new TwitterOAuth($consumer_key, $consumer_secret);
  $temporary_credentials = $connection->oauth('oauth/request_token', array("oauth_callback" =>'http://dezinebox.io/validate.php?task=twitter-login'));
  $_SESSION['oauth_token']=$temporary_credentials['oauth_token'];       $_SESSION['oauth_token_secret']=$temporary_credentials['oauth_token_secret'];$url = $connection->url("oauth/authorize", array("oauth_token" => $temporary_credentials['oauth_token']));
// REDIRECTING TO THE URL
  header('Location: ' . $url); 




}
	}
	
	function newPassword($input){
		$resp = new resp();
		$newpassword = $input->password;
		$email = $input->email;
		
		if(strlen($newpassword)<5 || strlen($newpassword)>10) {
			$resp->msg="Password should be 5-10 characters.";
			return $resp;	
		}
		
		$query1 = "UPDATE users SET password=password('".$newpassword."') WHERE email='".$this->conn->real_escape_string($email)."'";
		$query2 = "UPDATE users SET tempResetPass='no' WHERE email='".$this->conn->real_escape_string($email)."'";
		$result1 = $this->conn->query($query1);
		$result2 = $this->conn->query($query2);
		$resp->status='1';
		$resp->msg="Your password has been reset sucessfully!";
		echo "done";
		
	}
	function forgotPassword($input){
	$resp = new resp();
	if(empty($input)){
	$resp->msg="Enter all mandatory fields";
	$resp->msg=$input->email;
	return $resp;
	}else{
	$email= $input->email;
	$query="SELECT * FROM users WHERE email='".$this->conn->real_escape_string($email)."'";
		$result=$this->conn->query($query);
		if(mysqli_num_rows($result)>0){
		$user=$result->fetch_object();
		$tempResetPass = $user->tempResetPass;
		if($tempResetPass == "no"){
		$str = "UPDATE users SET tempResetPass='yes' WHERE email = '".$this->conn->real_escape_string($email)."'";
		$result=$this->conn->query($str);
		
		
		
		require $_SERVER["DOCUMENT_ROOT"].'/PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                                   // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                            // Enable SMTP authentication
		$mail->Username = 'srinath.chinchole@qleverlabs.com';          // SMTP username
		$mail->Password = '9867613282'; // SMTP password
		$mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                 // TCP port to connect to

		$mail->setFrom('srinath.chinchole@qleverlabs.com', 'DeZinebox');
		$mail->addReplyTo($user->email);
		$mail->addAddress($user->email);   // Add a recipient
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		$mail->isHTML(true);  // Set email format to HTML


		$name = $user->name;
		$email_address = $user->email;
		$link = "http://dezinebox.io/resetform.php?email=$email_address";
		$message = "Thank you for registering, welcome to deZine Box! We are really happy to have you here. deZine Box is an online architectural and interior design solution that transforms the way you design your spaces. It is one-of-a-kind solution to provide you with design execution capabilities";
		$mail->Subject ='Password Reset';
		$mail->Body ="Dear $name, click on the link below to reset yout password <br> $link";
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} 	
		$resp->status='1';
		$resp->msg="Your Password reset link has been sent to the email $email";
		return $resp;
		
	
	}
	else{
		$resp->msg="Link has been already sent to the email";
		return $resp;
			
			
		}
		
		
		}	
		$resp->msg="No accounts registered to this email";
		return $resp;
		
	}
	
	
	}

	function submit_signup($input) {
		$resp=new resp();
		if(empty($input) || !isset($input->username) || !isset($input->password) || !isset($input->email)) {
			$resp->msg="Enter all the mandatory fields.";
			return $resp;
		}
		if(strlen($input->username)<5 || strlen($input->username)>10) {
			$resp->msg="Username should be 5-10 characters.";
			return $resp;	
		}
		if(strlen($input->password)<5 || strlen($input->password)>10) {
			$resp->msg="Password should be 5-10 characters.";
			return $resp;	
		}
		
		$sql="SELECT * FROM users WHERE email ='".$this->conn->real_escape_string($input->email)."'";
		$rslt = $this->conn->query($sql);
		if(mysqli_num_rows($rslt)>0) {
			$resp->msg="Email already exist";
			return $resp;	
		}
		$query="SELECT * FROM users WHERE username='".$this->conn->real_escape_string($input->username)."'";
		$result=$this->conn->query($query);
		if(mysqli_num_rows($result)>0) {
			$resp->msg="Username already exists. please login.";
			return $resp;	
		}
		$newUser = new stdClass();
		$newUser->username=$input->username;
		 $newUser->name=$input->name;
		$newUser->email=$input->email;
		$newUser->mobile=$input->mobile;
		$newUser->tempResetPass="no";
		//$resp->msg="SignUp successful";
		//$resp->status="1";
		//$this->insertObject("users",$newUser);
		//return $resp;	

		$userId=$this->insertObject("users",$newUser);

		// if(!empty($newUser->email)) {
		// 	mail($newUser->email, 'Thankyou for register', 'Welcome to deZine Box! We�re really happy to have you here. deZine Box is an online architectural and interior design solution that transforms the way you design your spaces. It is one-of-a-kind solution to provide you with design execution capabilities.');
		// 	$resp->msg="SignUp successful";
		// 	//return $resp;
		// }

		require $_SERVER["DOCUMENT_ROOT"].'/PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		$mail->isSMTP();                                   // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                            // Enable SMTP authentication
		$mail->Username = 'srinath.chinchole@qleverlabs.com';          // SMTP username
		$mail->Password = '9867613282'; // SMTP password
		$mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                 // TCP port to connect to

		$mail->setFrom('srinath.chinchole@qleverlabs.com', 'DeZinebox');
		$mail->addReplyTo($input->email, $input->username);
		$mail->addAddress($input->email);   // Add a recipient
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		$mail->isHTML(true);  // Set email format to HTML


		$name = $input->username;
		$email_address = $input->email; 
		$message = "Thank you for registering, welcome to deZine Box! We are really happy to have you here. deZine Box is an online architectural and interior design solution that transforms the way you design your spaces. It is one-of-a-kind solution to provide you with design execution capabilities";
		$mail->Subject = 'New SignUp';
		$mail->Body    = 	"<p style=font-size:17px>Hi <b>$name</b>,<br>Thank you for registering, welcome to deZine Box! We are really happy to have you here. deZine Box is an online architectural and interior design solution that transforms the way you design your spaces. It is one-of-a-kind solution to provide you with design execution capabilities.</p>"; 

		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} 	
		
		
		
		
		
		if(!$userId) {
			$resp->msg="Unable to register. please contact us.";
			return $resp;
		}
		$query="UPDATE users SET password=Password('".$this->conn->real_escape_string($input->password)."') WHERE userId='".$userId."'";
		$this->conn->query($query);

		$data = new stdClass();
		$data->userId=$userId;
		$data->userTypeId=$this->const->userTypeId->customer;
		$this->insertObject("users_type_map",$data);
		$resp->status='1';


			//header('Location:login.php');
		return $resp;
	}
	function submit_design_partner($input) {
		$resp=new resp();
		$newUser = new stdClass();
		$newUser->name=isset($input->name)?$input->name:NULL;
		$newUser->email=isset($input->email)?$input->email:NULL;
		$newUser->mobile=isset($input->mobile)?$input->mobile:NULL;
		$resp->user=$input;
		$userId=$this->insertObject("users",$newUser);
		if(!$userId) {
			$resp->msg="Err adding user.";
			return $resp;
		}
		$data = new stdClass();
		$data->userId=$userId;
		$data->userTypeId=$this->const->userTypeId->designPartners;
		$this->insertObject("users_type_map",$data);
		$resp->status="1";

		$newDesigner = new stdClass();
		$newDesigner->userId=$userId;
		$newDesigner->profession=isset($input->profession)?(is_array($input->profession)?implode(",", $input->profession):$input->profession):NULL;
		$newDesigner->companyName=isset($input->companyName)?$input->companyName:NULL;
		$newDesigner->companyAddress=isset($input->companyAddress)?$input->companyAddress:NULL;
		$newDesigner->website=isset($input->website)?$input->website:NULL;
		$newDesigner->hearFrom=isset($input->hearFrom)?$input->hearFrom:NULL;
		$newDesigner->experience=isset($input->experience)?$input->experience:NULL;
		$newDesigner->driveLink=isset($input->driveLink)?$input->driveLink:NULL;

		// if(!empty($newUser->email)) {
		// 	mail($newUser->email, 'Thankyou for registering', 'Welcome to deZine Box! We�re really happy to have you here. deZine Box is an online architectural and interior design solution that transforms the way you design your spaces. It is one-of-a-kind solution to provide you with design execution capabilities.');
		// }

		// if(!empty($newUser->email)) {
		// 	mail($newUser->email, 'Thankyou for registering', 'Welcome to deZine Box! We�re really happy to have you here. deZine Box is an online architectural and interior design solution that transforms the way you design your spaces. It is one-of-a-kind solution to provide you with design execution capabilities.');
		// }


		$designerId=$this->insertObject("design_partners",$newDesigner);

		/*$projectNameArr=@$_POST['projectName'];
		$projectArea=@$_POST['projectArea'];
		$projectHighLight=@$_POST['projectHighLight'];
		$projectDesc=@$_POST['projectDesc'];
		$projectLinkedin=@$_POST['projectLinkedin'];*/

		$projectNameArr=isset($input->projectName)?$input->projectName:'';
		$projectArea=isset($input->projectArea)?$input->projectArea:'';
		$projectHighLight=isset($input->projectHighLight)?$input->projectHighLight:'';
		$projectDesc=isset($input->projectDesc)?$input->projectDesc:'';
		$projectLinkedin=isset($input->projectLinkedin)?$input->projectLinkedin:'';

		$imgsUploaded=array();
		$target_dir = $_SERVER['DOCUMENT_ROOT']."classes/uploads/";
		if(isset($_FILES['file'])){

			$file = $_FILES['file'];

			$name = $file['name'];
			$tmp_name = $file['tmp_name'];
			$extension = explode('.', $name);
			$extension = strtolower(end($extension));

			$key = md5(uniqid());
			$tmp_file_name = "{$key}.{$extension}";
			$tmp_file_path = $_SERVER['DOCUMENT_ROOT']."/classes/uploads/{$tmp_file_name}";

			move_uploaded_file($tmp_name, $tmp_file_path);
			$s3 = S3Client::factory([
    		'version'=>'latest',
			'region' => "ap-south-1",
			'credentials' => [
        'key'    => 'AKIAI3DLLJVA7SQSAIPQ',
        'secret' => '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',
			],
		'endpoint' => 'https://s3.ap-south-1.amazonaws.com',
		'signature' => 'v4'
    
			]);		
			
			$link = 'https://s3.ap-south-1.amazonaws.com/dezinebox/uploads/'.$tmp_file_name;
			
				$s3->putObject(array(
					
					'Bucket'=> 'dezinebox',
					'Key'=> "uploads/{$tmp_file_name}",
					'Body' => fopen($tmp_file_path, "rb"),
					'ACL' => 'public-read'
				));
				//$s3->setEnd
				unlink($tmp_file_path);
			
		}





		// if(isset($_FILES['projectPortFolio'])) {
		// 	foreach( $_FILES[ 'projectPortFolio' ][ 'tmp_name' ] as $index => $tmpName ) {
		// 		$filename=time().basename($_FILES["projectPortFolio"]["name"][$index]);
		// 		$target_file = $target_dir .$filename ;
		// 		$imageFileCheck = 1;
		// 		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// 			// Check if image file is a actual image or fake image
		// 			error_log("the the the the thet et ete thet eht eth");
		// 		$check = getimagesize($_FILES["projectPortFolio"]["tmp_name"][$index]);
		// 		if($check !== false) {
		// 			error_log("File is an image - " . $check["mime"] . ".");
		// 			$imageFileCheck = 1;
		// 		} else {
		// 			error_log("File is not an image.");
		// 			$imageFileCheck = 0;
		// 			continue;
		// 		}
		// 			// Allow certain file formats
		// 		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		// 			error_log("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
		// 			$imageFileType=0;
		// 			$resp->status = "0";
		// 			continue;
		// 		}
		// 			// Check if $resp->status is set to 0 by an error
		// 		if (!empty($imageFileCheck)) {
		// 			if (move_uploaded_file($_FILES["projectPortFolio"]["tmp_name"][$index], $target_file)) {
		// 				error_log("The file ". basename( $_FILES["projectPortFolio"]["name"][$index]). " has been uploaded.");
		// 				$imgsUploaded[]=$filename;
		// 			} else {
		// 				$imgsUploaded[]=NULL;
		// 			}
		// 		}
		// 	}
		// }

		if(is_array($projectNameArr)) {
			foreach ($projectNameArr as $index=>$projectName) {
				if(empty($projectName)) {
					continue;
				}
				$newProject = new stdClass();
				$newProject->projectName=$projectName;
				$newProject->projectArea=isset($projectArea[$index])?$projectArea[$index]:NULL;
				$newProject->projectHighLight=isset($projectHighLight[$index])?$projectHighLight[$index]:NULL;
				$newProject->projectDesc=isset($projectDesc[$index])?$projectDesc[$index]:NULL;
				$newProject->projectLinkedin=isset($projectLinkedin[$index])?$projectLinkedin[$index]:NULL;
				$newProject->projectPortFolio=isset($link)?$link:NULL;
				$newProject->userId=$userId;
				$this->insertObject("designer_experience",$newProject);
			}
		}

		return $resp;
	}
	function product_partner_submit($input) {
		$resp=new resp();
		$newUser = new stdClass();
		$newUser->name='';
		$newUser->email=isset($input->email)?$input->email:NULL;
		$newUser->mobile=isset($input->mobile)?$input->mobile:NULL;
		$resp->user=$input;
		$userId=$this->insertObject("users",$newUser);
		if(!$userId) {
			$resp->msg="Err adding user.";
			return $resp;
		}
		$data = new stdClass();
		$data->userId=$userId;
		$data->userTypeId=$this->const->userTypeId->productPartners;
		$this->insertObject("users_type_map",$data);
		$resp->status="1";


		$newPartner = new stdClass();
		$newPartner->userId=$userId;
		$newPartner->productType=isset($input->productType)?(is_array($input->productType)?implode(",", $input->productType):$input->productType):NULL;
		$newPartner->entName=isset($input->entName)?$input->entName:NULL;
		$newPartner->experience=isset($input->experience)?$input->experience:NULL;
		$newPartner->address=isset($input->address)?$input->address:NULL;
		$newPartner->website=isset($input->website)?$input->website:NULL;
		$newPartner->googleDrive=isset($input->googleDrive)?$input->googleDrive:NULL;
		$newPartner->linkedInProfile=isset($input->linkedInProfile)?$input->linkedInProfile:NULL;
		// if(!empty($newUser->email)) {
		// 	mail($newUser->email, 'Thankyou for registering', 'You are successfully registered as product partner');			
		// }
		
		if(isset($_FILES['catalog'])){

			$file = $_FILES['catalog'];

			$name = $file['name'];
			$tmp_name = $file['tmp_name'];
			$extension = explode('.', $name);
			$extension = strtolower(end($extension));

			$key = md5(uniqid());
			$tmp_file_name = "{$key}.{$extension}";
			$tmp_file_path = $_SERVER['DOCUMENT_ROOT']."/classes/uploads/{$tmp_file_name}";

			move_uploaded_file($tmp_name, $tmp_file_path);
			$s3 = S3Client::factory([
    		'version'=>'latest',
			'region' => "ap-south-1",
			'credentials' => [
        'key'    => 'AKIAI3DLLJVA7SQSAIPQ',
        'secret' => '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',
			],
		'endpoint' => 'https://s3.ap-south-1.amazonaws.com',
		'signature' => 'v4'
    
			]);		
			
			$link = 'https://s3.ap-south-1.amazonaws.com/dezinebox/uploads/'.$tmp_file_name;
			
				$s3->putObject(array(
					
					'Bucket'=> 'dezinebox',
					'Key'=> "uploads/{$tmp_file_name}",
					'Body' => fopen($tmp_file_path, "rb"),
					'ACL' => 'public-read'
				));
				//$s3->setEnd
				unlink($tmp_file_path);

				$newPartner->catalog=isset($link)?$link:NULL;
			
		}


		// if(isset($_FILES['catalog'])) {
		
		// 	$thisDate=date("Y-m-d");
		// 	$target_dir = "uploads/";
		// 	$filename=time().basename($_FILES["catalog"]["name"]);
		// 	$target_file = $target_dir .$filename ;
		// 	$imageFileCheck = 1;
		// 	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// 	// Check if image file is a actual image or fake image
		// 	$check = getimagesize($_FILES["catalog"]["tmp_name"]);
		// 	if($check !== false) {
		// 		error_log("File is an image - " . $check["mime"] . ".");
		// 		$imageFileCheck = 1;
		// 	} else {
		// 		error_log("File is not an image.");
		// 		$imageFileCheck = 0;
		// 	}
		// 	// Allow certain file formats
		// 	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
		// 		error_log("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
		// 		$imageFileType=0;
		// 		// $resp->status = "0";
		// 	}
		// 	// Check if $resp->status is set to 0 by an error
		// 	if (!empty($imageFileCheck)) {
		// 		if (move_uploaded_file($_FILES["catalog"]["tmp_name"], $target_file)) {
		// 			$newPartner->catalog=$filename;
		// 		} else {
		// 			error_log("Sorry, there was an error uploading your file.");
		// 		}
		// 	}
		// }
		

		$this->insertObject("product_partners",$newPartner);
		

		return $resp;	
	}
	function submit_architecture_enquiry($input) {
		if($_FILES['file'][size] > 0){

			$file = $_FILES['file'];

			$name = $file['name'];
			$tmp_name = $file['tmp_name'];
			$extension = explode('.', $name);
			$extension = strtolower(end($extension));

			$key = md5(uniqid());
			$tmp_file_name = "{$key}.{$extension}";
			$tmp_file_path = $_SERVER['DOCUMENT_ROOT']."/classes/uploads/{$tmp_file_name}";

			move_uploaded_file($tmp_name, $tmp_file_path);
			$s3 = S3Client::factory([
    		'version'=>'latest',
			'region' => "ap-south-1",
			'credentials' => [
        'key'    => 'AKIAI3DLLJVA7SQSAIPQ',
        'secret' => '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',
			],
		'endpoint' => 'https://s3.ap-south-1.amazonaws.com',
		'signature' => 'v4'
    
			]);		
			
			$link = 'https://s3.ap-south-1.amazonaws.com/dezinebox/uploads/'.$tmp_file_name;
			
				$s3->putObject(array(
					
					'Bucket'=> 'dezinebox',
					'Key'=> "uploads/{$tmp_file_name}",
					'Body' => fopen($tmp_file_path, "rb"),
					'ACL' => 'public-read'
				));
				//$s3->setEnd
				unlink($tmp_file_path);

				//$newPartner->catalog=isset($link)?$link:NULL;
			
		}
		
		$formEle=array("fname","femail","fmobile","selectedArea",
			"projectType",
			"plotArea",
			"siteLocation",
			"budget",
			"fsiAvailable",
			"zone",
			"requirement",
			"area",
			"subCategoryOption",
			"categoryOption",
			"constTypeId",
			"details",
			"entryTime",
			"driveLink");
		$newEntry=new stdClass();
		foreach ($formEle as $key) {
			if(isset($input->$key)) {
				$newEntry->$key=$input->$key;
			}
		}
		$userSession=$_SESSION['userSession'];
		$newEntry->userId=$userSession->userId;
		$newEntry->moreDetails=isset($link)?$link:NULL;
		$enqId=$this->insertObject("architecture_enquiries",$newEntry);
		return $enqId;
	}
	function submit_interior_enquiry($input) {
		
		if($_FILES['file'][size] > 0){

			$file = $_FILES['file'];

			$name = $file['name'];
			$tmp_name = $file['tmp_name'];
			$extension = explode('.', $name);
			$extension = strtolower(end($extension));

			$key = md5(uniqid());
			$tmp_file_name = "{$key}.{$extension}";
			$tmp_file_path = $_SERVER['DOCUMENT_ROOT']."/classes/uploads/{$tmp_file_name}";

			move_uploaded_file($tmp_name, $tmp_file_path);
			$s3 = S3Client::factory([
    		'version'=>'latest',
			'region' => "ap-south-1",
			'credentials' => [
        'key'    => 'AKIAI3DLLJVA7SQSAIPQ',
        'secret' => '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',
			],
		'endpoint' => 'https://s3.ap-south-1.amazonaws.com',
		'signature' => 'v4'
    
			]);		
			
			$link = 'https://s3.ap-south-1.amazonaws.com/dezinebox/uploads/'.$tmp_file_name;
			
				$s3->putObject(array(
					
					'Bucket'=> 'dezinebox',
					'Key'=> "uploads/{$tmp_file_name}",
					'Body' => fopen($tmp_file_path, "rb"),
					'ACL' => 'public-read'
				));
				//$s3->setEnd
				unlink($tmp_file_path);

				//$newPartner->catalog=isset($link)?$link:NULL;
			
		}
		
		$formEle=array("fname","email","mobile","selectedArea",
			"moreDetails",
			"siteLocation",
			"driveLink",
			"budget",
			"specificDetails",
			"categoryOption",
			"subCategoryOption",
			"constTypeId",
			"details");
		$newEntry=new stdClass();
		foreach ($formEle as $key) {
			if(isset($input->$key)) {
				$newEntry->$key=$input->$key;
			}
		}
		//return $newEntry;
		$userSession=$_SESSION['userSession'];
		$newEntry->userId=$userSession->userId;
		$newEntry->moreDetails=isset($link)?$link:NULL;
		$enqId=$this->insertObject("interior_enquiries",$newEntry);
		return $enqId;
	}
		function submit_arch_box($input) {
		$data = new stdClass();
		$data->enqId=$input->enqId;
		$data->boxTypeId=$input->boxTypeId;
		$this->updateObject("architecture_enquiries",$data,"enqId");
		return $input->enqId;
	}
	function submit_interior_box($input) {
		$data = new stdClass();
		$data->enqId=$input->enqId;
		$data->boxTypeId=$input->boxTypeId;
		$this->updateObject("interior_enquiries",$data,"enqId");
		return $input->enqId;	
	}
	function add_coupon($input) {
		$resp= new resp();
		$data = new stdClass();
		$data->couponCode=$input->couponCode;
		$data->discount=$input->discount;
		$data->usageTimes=$input->usageTimes;
		$couponId=$this->insertObject("coupons",$data);
		if(!$couponId) {
			$resp->msg='Coupon code exists already.';
		} else {
			$resp->msg="Coupon added successfully";
			$resp->status='1';
		}
		return $resp;
	}
	
	
}