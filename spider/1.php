<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/17
 * Time: 19:31
 */
header("content-type:text/type;charset=utf8");
$file = fopen("http://47.93.218.213","r");
$return = fread($file,5000);
$url = "/\<img(.*)\>/iU";
preg_match_all($url,$return,$arr);
print_r($arr);