<?php

/* ---------------------------------------------------------
| This script generates a graphic image in png format
| from text specified. It uses a TrueTye font specified.
|
| Author: http://www.dissident-designs.co.uk
| -------------------------------------------------------- */

/* Specify the size and location and mame of the TrueType font file that you want to use
(an abosulute or relative link, e.g. = "myfont.ttf" if the font you wish to use is in the 
same folder os this script or = "http://www.mydomain.com/fonts/myfont.ttf") */

$font = "storm.TTF";
$font_size = 18;



$text = $_REQUEST['text'];
 
// angle of the font in degrees
$font_angle = 0;
// the weight of the font stroke
$stroke = 2;
// the position of the font
$startx = 10;
$starty = 30;
 
$im = imagecreate(100,40);
 
// define the colours that we will be using
$white = imagecolorallocate($im, 255, 255, 255);
$blue1 = imagecolorallocate($im, 175, 188, 199);
$blue2 = imagecolorallocate($im, 64, 99, 122);
 
imagefilltoborder($im, 0, 0, $blue1, $blue1);
 
// now draw out the outline (stroke) on the text
for ($ox = -$stroke; $ox <= $stroke; $ox++) {
  for ($oy = -$stroke; $oy <= $stroke; $oy++) {
    imagettftext($im, $font_size, $font_angle, $startx+$ox, $starty+$oy, 
    $blue2, $font, $text);
  }
}
 
imagettftext($im, $font_size, $font_angle, $startx, $starty, $white, $font, $text);
 
// set the correct HTTP header for a PNG image
header("Content-type: image/png");
 
imagepng($im);
 
// remember to free up the memory used on the server to create the image!
imagedestroy($im);
 
?>
