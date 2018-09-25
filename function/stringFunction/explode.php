<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 17:44
 */
header("Content-type:text/html;charset=utf-8");
//explode(search,$str[,int]);
//把$str按search字符进行分割返回数组，int是分割几次,后面将不分割
$str = "a|b|c|1|2|3|d|e|f";
$arr = explode("|",$str);
print_r($arr);