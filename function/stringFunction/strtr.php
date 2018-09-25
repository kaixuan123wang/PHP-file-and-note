<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 16:42
 */
header("Content-type:text/html;charset=utf-8");
//strtr($str,search,replace);
//从$str中查找search并替换为replace
$str = "123abc456def789e";
$str1 = strtr($str,"ef7","差");
echo $str1;//注意：替换字节必须相同否则会出现乱码（因为装不下。。。）
