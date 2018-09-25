<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 17:28
 */
header("Content-type:text/html;charset=utf-8");
//strnatcmp($str1,$str2);
//按自然排序比较字符串
echo strnatcmp("4","14");
//strnatcasecmp()
//同strnatcmp(),但区分大小写
echo strnatcasecmp("4","14");
