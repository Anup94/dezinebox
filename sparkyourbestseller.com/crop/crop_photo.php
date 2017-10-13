<?php

// Target siz
$targ_w = $_POST['targ_w'];
$targ_h = $_POST['targ_h'];
// quality
$jpeg_quality = 90;
// photo path
$src = $_POST['photo_url'];
// create new jpeg image based on the target sizes
$img_r = imagecreatefromjpeg($src);
$dst_r = ImageCreateTrueColor( $targ_w, $targ_h );
// crop photo
imagecopyresampled($dst_r,$img_r,0,0,$_POST['x'],$_POST['y'], $targ_w,$targ_h,$_POST['w'],$_POST['h']);
// create the physical photo
imagejpeg($dst_r,$src,$jpeg_quality);
// display the  photo - "?time()" to force refresh by the browser
echo '<img src="'.$src.'?'.time().'">';


$con = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}

session_start();
    
$title=$_SESSION['title'];

mysqli_query($con, "INSERT INTO scollable (title,name) VALUES ('{$_SESSION['title']}','$src')");
	
echo $_SESSION['title'];
echo '<script>alert("Image Inserted into Database")</script>';


   mysqli_close($con);
?>