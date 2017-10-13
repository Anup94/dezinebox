<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
      <link rel="stylesheet" href="gallery/css/style.css">

 <style> 
@media screen and (max-width: 480px) {
.ul{
    width: 200px; 
}
    .img{
     width: 30px;
        height: 30px;
    }
}</style>
</head>

<body>
  <ul>
  
<?php
$files = glob("../../img/*.*");
for ($i = 1; $i < count($files); $i++) {
    $image = $files[$i];
    $supported_file = array(
        'png'
    );
 
    $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    if (in_array($ext, $supported_file)) {
//        echo basename($image).'</br>';
echo '<li><img src="' . $image . '" alt="Random image"/></li>';
} else {
continue;
}
}
?>

</ul>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="gallery/js/index.js"></script>

</body>
</html>
