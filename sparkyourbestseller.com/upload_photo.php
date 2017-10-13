<?php include 'analyticstracking.php' ?>
<?php

$temp_id=$_GET['id'];
// get the tmp url
$photo_src = $_FILES['photo']['tmp_name'];
// test if the photo realy exists
if (is_file($photo_src)) {
	// photo path in our example
	$photo_dest = 'imagespic/photo_'.time().'.jpg';
	// copy the photo from the tmp path to our path
	copy($photo_src, $photo_dest);
	// call the show_popup_crop function in JavaScript to display the crop popup
	echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';

$targ_w = $_POST['targ_w'];
$targ_h = $_POST['targ_h'];

// quality
$jpeg_quality = 100;
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
}
?>

<?php
if($_POST){
$con = mysqli_connect("localhost","root","","spark");
//    $connect = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}
      
session_start();
    
$temp_id=$_GET['id'];
 //$goal=$_POST['goal'];
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


  // mysqli_query($con, "INSERT INTO scollable (temp_id,goal,title,sname,aname,name,email) VALUES ('$temp_id','$goal','$title','$sname','$aname','$src','$email')");
 //mysqli_query($con, "INSERT INTO tempep (email) VALUES ('$email')");
    
	//echo '<script>alert("Image Inserted into Database")</script>';
	
   //mysqli_query($con, "INSERT INTO im (image) VALUES ('$src')");
//	echo '<script>alert("Image Inserted into Database")</script>';

   mysqli_close($con);
}   }
?>