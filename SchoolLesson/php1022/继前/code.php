<?php 
	session_start();
	$width = 100;
	$height = 30;
	$img = imagecreatetruecolor($width, $height);//创建画布
	$bg = imagecolorallocate($img, 255, 255, 0);//设置背景颜色
	$fg = imagecolorallocate($img,255, 0, 0);//设置字体颜色
	imagefill($img, 0, 0, $bg);//填充背景
	imagestring($img, 3, 0, 2, $_SESSION["code"], $fg);//填充文字
	header("Content-Type:image/png");//确定图片格式
	imagepng($img);//输出图片
 ?>