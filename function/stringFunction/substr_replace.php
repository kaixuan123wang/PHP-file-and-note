<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 16:52
 */
//substr_replace($str,$rep,$start[,length]);
//$str为原始字符串,$rep为替换后的新字符串,$start为起始位置,$length为替换长度;
$str = "123abc456def789";
$str1 = "abc123def456ghi";
$str2 = substr_replace($str,$str1,3);
echo $str2;