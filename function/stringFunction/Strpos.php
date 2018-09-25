<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 16:03
 */
header("Content-Type:text/html;charset=UTF-8");
//strpos($str,search,[int]);
//查找search在$str中的第一次位置从int开始;
$str = "123abc456def789abc";
$str1 = strpos($str,"abc");
echo $str1;//3;从第三位开始为要查找字符第一个;
//strrpos($str,search,[int]);
//查找search在$str中的最后一次出现的位置从int开始;
$str2 = strrpos($str,"abc");
echo $str2;//15;从第十五位开始为要查找的字符最后一个;
