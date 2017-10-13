<?php
//sleep(10);
if(isset($_POST['img'])){
	$id = $_POST['id'];
	$tid = $_POST['tid'];
    $img = $_POST['img'];//getting post img data
    $img = substr(explode(";",$img)[1], 7);//converting the data 
    $target='sparkbook'.$id.'-'.$tid.'.png';//making file name
    file_put_contents('img/'.$target, base64_decode($img));//converting the $img with base64 and putting the image data in uploads/$target file name  
    //header('Location:sgallery.php?id='.$id);
 }
 ?>