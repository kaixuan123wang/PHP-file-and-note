<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/21
 * Time: 19:20
 */
//创建画布 ---资源类型 ---高度宽度
$img = imagecreatetruecolor(200,200);
//$img2 = imagecreate();


//绘制图像 ---矩形，圆，点，线段，扇形，字
    //制定各种颜色
$red = imagecolorallocate($img,255,0,0);
$yellow = imagecolorallocate($img,255,255,0);
$green = imagecolorallocate($img,0,255,0);
$blue = imagecolorallocate($img,0,0,255);
    //绘制图形
imagefill($img,0,0,$yellow);//填充背景颜色
imagefilledrectangle($img,10,10,80,80,$green);//填充矩形
imagerectangle($img,90,10,190,80,$green);//边框矩形
imageline($img,0,0,200,80,$red);//线
imagesetpixel($img,50,50,$red);//点
imageellipse($img,100,100,100,100,$green);//边框圆
imagefilledellipse($img,100,100,10,10,$red);//填充圆
imagefilledarc($img,50,60,100,100,-160,40,$red,IMG_ARC_PIE);//扇形
imagechar($img,5,100,100,"A",$red);//单个字
imagecharup($img,5,100,105,"B",$blue);//竖向单个字
imagestring($img,5,10,10,"ABCD",$blue);//字符串
imagestringup($img,5,10,20,"EFG",$red);//竖向字符串
//imagefttext($img,25,60,150,150,$red,"","中文");//自定义字体字符串
//输出图像/保存图像
//imagejpeg();
//imagegif();
//imagepng();
//img src = 1.php
header("Content-Type:image/gif");
imagegif($img);
//释放资源
imagedestroy($img);