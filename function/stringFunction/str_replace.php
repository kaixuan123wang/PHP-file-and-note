<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 16:38
 */
header("Content-type:text/html;charset=utf-8");
//str_replace(search,replace,$str);
//从$str中查找search用replace来替换
$str = "123abc456def7891";
$str1 = str_replace("1","找到",$str);
echo $str1;
//str_ireplace(search,replace,$str);
//同str_replace()函数，但不区分大小写
$str2 = str_ireplace("A","找到",$str);
echo $str2;