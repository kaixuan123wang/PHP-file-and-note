<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 20:02
 */
header("Content-type:text/html;charset=utf-8");
//strip_tags($str[,'<p>']);
//去除$str字符串中除p标签以外的标记
$str = "<p>你好世界</p>";
$str1 = strip_tags($str);
echo $str1;