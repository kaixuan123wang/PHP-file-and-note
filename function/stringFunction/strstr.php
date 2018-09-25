<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 16:19
 */
header("Content-Type:text/html;charset=utf-8");
//strstr($str1,$str2);
//从$str（第一个位置）搜索$str2并从他开始截取到结束字符串；
//若没有则返回FALSE;
$str = "123abc456def789";
$str1 = "abc";
$str2 = strstr($str,$str1);
echo $str2."<br>";//abc456def789;从$str中查找到了abc并且返回abc到结束的字符串;
//stristr($str1,$str2);
//同strstr但不区分大小写
$str3 = "AbC";
$str4 = stristr($str,$str3);
echo $str4;//结果与strstr函数相同
