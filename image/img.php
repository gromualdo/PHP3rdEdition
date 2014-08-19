<?php
$image = imagecreate(120,120);

$lightred = imagecolorallocate($image, 0x88, 0x00,0x00);
$yellow = imagecolorallocate($image, 0xFF, 0xFF, 0x00);
$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
imagefilledrectangle($image, 40, 40, 80, 80, $black);


$rotated = imagerotate($image, 45, 1);

imagestring($rotated, 5, 5, 140, "Ito ay subok laang", $yellow);

header("Content-type: image/png");
imagepng($rotated);

?>