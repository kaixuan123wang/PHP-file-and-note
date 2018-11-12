<?php 
	session_start();
	$randCode = rand(1000,9999);
	$_SESSION["code"] = $randCode;
	$width = 100;
	$height = 30;
	$img = imagecreatetruecolor($width, $height);
	$bg = imagecolorallocate($img, 255, 255, 0);
	$fg = imagecolorallocate($img,255, 0, 0);
	imagefill($img, 0, 0, $bg);
	imagestring($img, 3, 0, 2, $_SESSION["code"], $fg);
	header("Content-Type:image/png");
	imagepng($img);
 ?>