<?php include 'analyticstracking.php' ?>

<?php

$targ_w = $_POST['w'];
$targ_h = $_POST['h'];

// quality
$jpeg_quality = 100;
// photo path
$src = $_POST['photo_url'];

//// test file format
//$photo_format = exif_imagetype($src) ;
//// create new image based on the target sizes
//if ($photo_format == IMAGETYPE_JPEG) {
//$img_r = imagecreatefromjpeg($src);
//} elseif ($photo_format == IMAGETYPE_PNG) {
//$img_r = imagecreatefrompng($src);
//} elseif ($photo_format == IMAGETYPE_GIF) {
//$img_r = imagecreatefromgif($src);
//} else {
//echo 'error format';
//exit;
//}




// create new jpeg image based on the target sizes
$img_r = imagecreatefromjpeg($src);
$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
// crop photo
imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'], $targ_w,$targ_h,$_POST['w'],$_POST['h']);
// create the physical photo
imagejpeg($dst_r,$src,$jpeg_quality);

// display the  photo - "?time()" to force refresh by the browser
//echo '<img src="'.$src.'?'.time().'">';

$con = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}

include_once("check_login_status.php");
if($user_ok == true){
session_start();

 $connect = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
                $sq=mysqli_query($connect,"SELECT * FROM users WHERE  username='$log_username' LIMIT 1");
                while($s=mysqli_fetch_array($sq))
                {   $email=$s['email'];
                 session_start();
                 $_SESSION['email']=$email;
                }
    
$temp_id= $_SESSION['id'];
$email=$_SESSION['email'];
//$goal=$_SESSION['goal'];
$title=$_SESSION['title'];
$sname=$_SESSION['sname'];
$aname=$_SESSION['aname'];

    

header('Location:gallery1.php?id='.$_SESSION['id']);
    mysqli_close($con);   
   session_destroy();

}
else{
session_start();
    
$temp_id= $_SESSION['id'];
$email=$_SESSION['email'];
//$goal=$_SESSION['goal'];
$title=$_SESSION['title'];
$sname=$_SESSION['sname'];
$aname=$_SESSION['aname'];
$phone=$_SESSION['phone'];
	
header('Location:gallery1.php?id='.$_SESSION['id']);
    mysqli_close($con);   
   session_destroy();
}

?>