<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 19:46
 */
header("Content-type:text/html;charset=utf-8");
//chunk_split($str,num,*);
//在$str字符串中每隔num个字符添加一个*;
$str = "abc123";
$str1 = chunk_split($str,2,".");
echo $str1;