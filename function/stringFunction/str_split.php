<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 17:39
 */
header("Content-type:text/html;charset=utf-8");
//str_split($str,len);
//把$str按len长度进行分割返回数组;
$str = "123abc456def789";
$arr = str_split($str,3);
print_r($arr);