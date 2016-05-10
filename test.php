
<?php
// File and new size
$filename = './real/img/1462864635.jpg';
/*$percent = 0.5;*/

/*// Content type
header('Content-Type: image/jpeg');*/

// Get new sizes
list($width, $height) = getimagesize($filename);

echo $height;
/*$newwidth = 400;
$newheight = 300;

// Load
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filename);

// Resize
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

// Output
imagejpeg($thumb);*/
?>
