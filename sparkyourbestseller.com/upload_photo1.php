<?php

$temp_id=$_GET['id'];
// get the tmp url
$photo_src = $_FILES['photo']['tmp_name'];
// test if the photo realy exists
if (is_file($photo_src)) {

    $photo_format = exif_imagetype($photo_src) ;
if ($photo_format == IMAGETYPE_GIF or $photo_format == IMAGETYPE_JPEG or $photo_format == IMAGETYPE_PNG) {

//	// photo path in our example
	$photo_dest = 'imagespic/photo_'.time().'.jpg';
//	// copy the photo from the tmp path to our path
	copy($photo_src, $photo_dest);
//	// call the show_popup_crop function in JavaScript to display the crop popup
//	echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';
//
//
//$targ_w = $_POST['targ_w'];
//$targ_h = $_POST['targ_h'];
//// quality
$jpeg_quality = 100;
//// photo path
//$src = $_POST['photo_url'];
//// create new jpeg image based on the target sizes
//$img_r = imagecreatefromjpeg($src);
//$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
//// crop photo
//imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'], $targ_w,$targ_h,$_POST['w'],$_POST['h']);
//// create the physical photo
//imagejpeg($dst_r,$src,$jpeg_quality);
//// display the  photo - "?time()" to force refresh by the browser
//echo '<img src="'.$src.'?'.time().'">';
    
    
    
    // minimize photo ++++++++++++++++++++
$size = getimagesize($photo_dest);	
$src_w = $size[0];	
$src_h = $size[1];
$dst_w =300;
$dst_h=700;
$dst_h = floor(($dst_w * $src_h ) / $src_w);
// create new jpeg image based on the target sizes
$img_r = imagecreatefromjpeg($photo_dest);
$dst_r = ImageCreateTrueColor( $dst_w, $dst_h );
// resize photo
imagecopyresampled($dst_r,$img_r,0,0,0,0, $dst_w,$dst_h,$src_w,$src_h);
// create the physical photo
imagejpeg($dst_r,$photo_dest,$jpeg_quality);
// call the show_popup_crop function in JavaScript to display the crop popup
echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';
    
}
else{
   echo '<script type="text/javascript">window.top.window.upload_error()</script>';
}
}
























?>








<?php
/*
* Author : Ali Aboussebaba
* Email : bewebdeveloper@gmail.com
* Website : http://www.bewebdeveloper.com
* Subject : Crop photo using PHP and jQuery
*/

// get the tmp url




// $photo_src = $_FILES['photo']['tmp_name'];
// // test if the photo realy exists
// if (is_file($photo_src)) {
//     // photo path in our example
//     $photo_dest = 'crop/images/photo_'.time().'.jpg';
//     // copy the photo from the tmp path to our path
//     copy($photo_src, $photo_dest);
//     // call the show_popup_crop function in JavaScript to display the crop popup
//     echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';
// }
?>
















<?php
if($_POST){
//$con = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
$con = mysqli_connect("localhost","root","","sparklive");
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}
session_start();

include_once("check_login_status.php");
if($user_ok == true){
 //$connect = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
    $connect = mysqli_connect("localhost","root","","sparklive");
                $sq=mysqli_query($connect,"SELECT * FROM users WHERE  username='$log_username' LIMIT 1");
                while($s=mysqli_fetch_array($sq))
                {   $email=$s['email'];
                 session_start();
                 $_SESSION['email']=$email;
                 //echo $_SESSION['email'];
                }    
$temp_id=$_GET['id'];
$title=$_POST['title'];
$sname=$_POST['sname'];
$aname=$_POST['aname'];
$email=$_SESSION['email'];
    
$_SESSION['id'] = $temp_id;
$_SESSION['email'] = $email;
$_SESSION['title'] = $title;
$_SESSION['sname'] = $sname;
$_SESSION['aname'] = $aname;
$image=$_POST['image'];


// Email to be sent after a logged in user creates a book

// include("PHPMailer/PHPMailer/class.phpmailer.php");

//             $account="reachout@happcoach.com";
//             $password="CoachHapp99";
//             $to= $email;
//             $from="reachout@happcoach.com";
//             $from_name="Spark Your Bestseller";
//             $msg='<p>Dear user</b>,</p><p>Thank you for creating a book with #SparkYourBestseller, a unique coach-tech product to unleash the best version of yourself.</p><p>Feel free to get in touch with us for any assistance </p><p>Cheers,</p><p>Team Happ Coach</p><a href="www.sparkyourbestseller.com">www.sparkyourbestseller.com</a>';
//             // $msg='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>'; // HTML message
//             $subject="#SparkYourBestseller";

//             // echo "now assigning variables<br>";

//             $mail = new PHPMailer();
//             $mail->IsSMTP();
//             $mail->CharSet = 'UTF-8';
//             $mail->Host = "smtp.gmail.com";
//             $mail->SMTPAuth= true;
//             $mail->Port =587; // Or 587 or 465
//             $mail->Username= $account;
//             $mail->Password= $password;
//             $mail->SMTPSecure = 'tls';
//             $mail->From = $from;
//             $mail->FromName= $from_name;
//             $mail->isHTML(true);
//             $mail->Subject = $subject;
//             $mail->Body = $msg;
//             $mail->addAddress($to);

//             // echo "now  mailig <br>";

//             $mail->send();

}

    else{
        $temp_id=$_GET['id'];
$title=$_POST['title'];
$sname=$_POST['sname'];
$aname=$_POST['aname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
    
$_SESSION['id'] = $temp_id;
$_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
$_SESSION['title'] = $title;
$_SESSION['sname'] = $sname;
$_SESSION['aname'] = $aname;
$image=$_POST['image'];

// Email to be sent after a logged out user creates a book

// include("PHPMailer/PHPMailer/class.phpmailer.php");

//             $account="reachout@happcoach.com";
//             $password="CoachHapp99";
//             $to= $email;
//             $from="reachout@happcoach.com";
//             $from_name="Spark Your Bestseller";
//             $msg='<p>Dear user</b>,</p><p>Thank you for creating a boook with #SparkYourBestseller, a unique coach-tech product to unleash the best version of yourself.</p><p>Feel free to get in touch with us for any assistance </p><p>Cheers,</p><p>Team Happ Coach</p><a href="www.sparkyourbestseller.com">www.sparkyourbestseller.com</a>';
//             // $msg='<h2>Hello <b>'.$username.'</b></h2><p>Thank you for signing into <b>#SPARKYOURBESTSELLER.</b></p>'; // HTML message
//             $subject="#SparkYourBestseller";

//             // echo "now assigning variables<br>";

//             $mail = new PHPMailer();
//             $mail->IsSMTP();
//             $mail->CharSet = 'UTF-8';
//             $mail->Host = "smtp.gmail.com";
//             $mail->SMTPAuth= true;
//             $mail->Port =587; // Or 587 or 465
//             $mail->Username= $account;
//             $mail->Password= $password;
//             $mail->SMTPSecure = 'tls';
//             $mail->From = $from;
//             $mail->FromName= $from_name;
//             $mail->isHTML(true);
//             $mail->Subject = $subject;
//             $mail->Body = $msg;
//             $mail->addAddress($to);

//             // echo "now  mailig <br>";

//             //echo $email.'<br>'.$msg;

//             $mail->Send();


    }
//   mysqli_query($con, "INSERT INTO scollable (temp_id,goal,title,sname,aname,name,email) VALUES ('$temp_id','$goal','$title','$sname','$aname','$src','$email')");
// mysqli_query($con, "INSERT INTO tempep (email) VALUES ('$email')");
//    
//	echo '<script>alert("Image Inserted into Database")</script>';
//	
//   mysqli_query($con, "INSERT INTO im (image) VALUES ('$src')");
//	echo '<script>alert("Image Inserted into Database")</script>';
  

   mysqli_close($con);
} 

?>