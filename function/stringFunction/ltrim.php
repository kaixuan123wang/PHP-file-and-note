<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 19:40
 */
header("Center-type:text/html;charset=utf-8");
//ltrim     去除字符串前面的空格
$str = "    abc123    ";
$str1 = ltrim($str);
echo "<pre>";
echo $str1."<br>";
//rtrim     去除字符串后面的空格
$str2 = rtrim($str);
echo $str2."<br>";
//trim      去除字符串两边的空格
$str3 = trim($str);
echo $str3."<br>";