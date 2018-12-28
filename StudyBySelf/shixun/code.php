<?php 
	session_start();
	$width = 100;
	$height = 30;
	$img = imagecreatetruecolor($width, $height);
	$yellow = imagecolorallocate($img, 255, 255, 0);
    $green = imagecolorallocate($img,0,255,0);
	$red = imagecolorallocate($img,255, 0, 0);
    $blue = imagecolorallocate($img,0,0,255);
	imagefill($img, 0, 0, $yellow);
	for($i=0;$i<20;$i++){
	    $x0 = rand(0,100);
	    $y0 = rand(0,30);
	    $x1 = rand(0,100);
	    $y1 = rand(0,30);
	    if($i%3 == 0){
	        $color = $red;
        }elseif($i%3 == 1){
	        $color = $green;
        }else{
	        $color = $blue;
        }
        imageline($img,$x0,$y0,$x1,$y1,$color);
    }
	for($i=0;$i<50;$i++){
        $x0 = rand(0,100);
        $y0 = rand(0,30);
        if($i%3 == 0){
            $color = $red;
        }elseif($i%3 == 1){
            $color = $green;
        }else{
            $color = $blue;
        }
        imagesetpixel($img,$x0,$y0,$color);
    }

	imagestring($img, 10, 30, 8, $_SESSION["code"], $red);
	header("Content-Type:image/png");
	imagepng($img);
 ?>