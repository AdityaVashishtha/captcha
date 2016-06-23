<?php
// Create image instances
$dest = imagecreatefrompng('sample.png');
//$dest = imagecon
$src = imagecreatefromjpeg('sample.jpg');

$i = getimagesize('sample.png');
$color = imagecolorallocate($dest, 10, 50, 25);

imageline($dest, 15, 15, 700, 15, $color);
imageline($dest, 15, 15, 15, 80, $color);
imageline($dest, 15, 80, 700, 80, $color);
imageline($dest, 700, 15, 700, 80, $color);
imagettftext($dest, 15, 0, 15, 115, $color, 'TAILLE.ttf', "Aditya ne ye file hack kar li he".$color);


/*
line of code used to creat new image from old one


$image = imagecreatetruecolor(imagesx($dest), imagesx($dest));
imagecolorallocate($image, 255,255, 255);


for ($i=0; $i < imagesx($dest); $i++) { 
	for ($j=0; $j < imagesy($dest); $j++) { 
		$c = imagecolorat($dest, $i, $j);
		imagesetpixel($image, $i, $j, $c);
	}
}
*/


// Copy and merge
imagecopymerge($dest, $src, $i[0] - imagesx($src), $i[1] - imagesy($src), 0, 0, imagesx($src), imagesy($src), 55);

// Output and free from memory
header('Content-Type: image/jpeg');
imagejpeg($dest);

imagedestroy($dest);
imagedestroy($src);

?>
<?php
/*
// Create image instances
$dest = imagecreatefromgif('http://ftp.ntu.edu.tw/tmp/php/images/php.gif');
$src = imagecreatefromgif('http://ftp.ntu.edu.tw/tmp/php/images/php.gif');

// Copy and merge
imagecopymerge($dest, $src, 10, 10, 0, 0, 100, 47, 75);

// Output and free from memory
header('Content-Type: image/gif');
imagegif($dest);

imagedestroy($dest);
imagedestroy($src);
*/?>