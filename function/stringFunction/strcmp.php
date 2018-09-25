<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 17:13
 */
header("Content-type:text/html;charset=utf-8");
//strcmp($str1,$str2);
//对比$str1>=<$str2分别为正1,0,-1;
$str = "123abc456def789";
$str1 = "123456";
echo strcmp($str,$str1);
//strcasecmp($st1,$str2);
//同strcmp()函数，但不区分大小写
$str2 = "ABCDEF";
echo strcasecmp($str1,$str2);