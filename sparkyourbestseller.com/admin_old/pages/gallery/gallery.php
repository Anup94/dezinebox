<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Rollover CSSS Blur Filter Image Gallery</title>
  
  
  
      <link rel="stylesheet" href="gallery/css/style.css">

  
</head>

<body>
  <ul>
  <?php
$directory = "img";
$images = glob($directory . "*.png");

foreach($images as $image)
{
  echo $image;
}
?>
</ul>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="gallery/js/index.js"></script>

</body>
</html>
