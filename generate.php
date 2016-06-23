<?php
	session_start();
	header('Content-type: image/jpeg');

	$text = $_SESSION['secure'];

	$text = "Aditya";

	$image_width = 200;
	$image_height = 60;

	$font_size = 30;

	$image = imagecreate($image_width,$image_height);
	$red = 200;
	$green = 200;
	$blue = 200;
	$color = imagecolorallocate ($image ,  $red ,  $green ,  $blue );
	$black = imagecolorallocate($image, 250, 50, 90);
	$white = imagecolorallocate ($image , 250, 120 , 100 );
	
	/*for ($i=0; $i < 150 ; $i++) { 
		imageline($image, rand(1,220), rand(1,100), rand(100,250), rand(100,350), $black);
	}*/

	imagettftext($image, $font_size, 0, 65, 40, $white, 'TAILLE.ttf' , $text);	

	imagejpeg($image, 'simpletext1.jpeg');
	imagedestroy($image);
?>