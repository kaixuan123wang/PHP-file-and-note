<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 16:13
 */
header("Countent-Type:text/html;charset=utf-8");
//submit($str,int start[,int length]);
//从$str中strat位置开始提取[length长度的字符串];
$str = "123abc456def789";
$str1 = substr($str,2,3);
echo $str1;