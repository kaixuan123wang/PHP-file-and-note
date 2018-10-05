<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/26
 * Time: 17:44
 */
header("Content-type:text/html;charset=utf-8");
$pattern = "/[^a-z]/";
$string = "asass";
if(preg_match($pattern,$string)){
    echo "正则表达式 $pattern 和字符串 $string 匹配成功";
}else{
    echo "<font color='red'>正则表达式 $pattern 和字符串 $string 匹配失败</font>";
}