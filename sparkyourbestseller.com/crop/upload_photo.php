<?php
// get the tmp url
$photo_src = $_FILES['photo']['tmp_name'];
// test if the photo realy exists
if (is_file($photo_src)) {
	// photo path in our example
	$photo_dest = 'images/photo_'.time().'.jpg';
	// copy the photo from the tmp path to our path
	copy($photo_src, $photo_dest);
	// call the show_popup_crop function in JavaScript to display the crop popup
	echo '<script type="text/javascript">window.top.window.show_popup_crop("'.$photo_dest.'")</script>';
}
?>
<?php
if($_POST){
$con = mysqli_connect("mysql.hostinger.in","u755609940_felix","felix@123","u755609940_book");
if (mysqli_connect_errno()) {
    throw new Exception(mysqli_connect_error(), mysqli_connect_errno());
}
      
session_start();
    
$title=$_POST['title'];
    $_SESSION['title'] = $title;
    
//  mysqli_query($con, "INSERT INTO scollable (title,name) VALUES ('{$_SESSION['title']}','$src')");
//    
//    echo $_SESSION['title'];
 //mysqli_query($con, "INSERT INTO tempep (email) VALUES ('$email')");
    
	//echo '<script>alert("Image Inserted into Database")</script>';
	
   //mysqli_query($con, "INSERT INTO im (image) VALUES ('$src')");
//	echo '<script>alert("Image Inserted into Database")</script>';

   mysqli_close($con);
}   
?>
