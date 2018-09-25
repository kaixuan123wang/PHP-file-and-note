<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 16:28
 */
//strrchr()
//从最后一次搜索到的字符出返回;
//用处：取路径中文件名
header("Content-type: text/html; charset=utf-8");
$str = "C:\Users\ASUS\Desktop\本地查询手册和css预处理";
$str1 = strrchr($str,"\\");
echo $str1;