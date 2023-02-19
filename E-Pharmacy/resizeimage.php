<?php
//source & destination image files
$source = "./uploads/";
$dest = "./uploads/1672136802.jpg";



//rezise to
$resize = "0.5"; //50%
$rwidth = ceil(400);
$rheight = ceil(400);

//open original image
$original = imagecreatefromjpeg($source);

//resize image
$resized = imagecreatetruecolor($rwidth, $rheight);
imagealphablending($resized, false);
imagesavealpha($resized, true);
imagecopyresampled(
    $resized, $original,
    0, 0, 0, 0,
    $rwidth, $rheight,
    $width, $height
);

// save resized image
imagejpeg($resized, $dest);
echo "ok";

// optional clean up
imagedestroy($original);
imagedestroy($resized);