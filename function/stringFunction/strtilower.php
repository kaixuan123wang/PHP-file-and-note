<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 20:17
 */
header("Content-type:text/html;charset=utf-8");
//strtolower($str);
//将字符串转换为全小写
$str = "aBC 123 dEf 456 hij";
$str1 = strtolower($str);
echo $str1."<br>";
//strtoupper($str);
//将字符串转换为全大写
$str2 = strtoupper($str);
echo $str2."<br>";
//ucfirst($str);
//将字符串的第一个字符转换为大写
$str3 = ucfirst($str);
echo $str3."<br>";
//ucwords($str);
//将字符串中每个单词的首字母都转换为大写
$str4 = ucwords($str);
echo $str4;
