<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 19:53
 */
header("Content-type:text/html;charset=utf-8");
$str = <<<DD
a
b
c
d
1
2
3
4
DD;
echo "<pre>";
echo $str."<br>";
echo nl2br($str);
