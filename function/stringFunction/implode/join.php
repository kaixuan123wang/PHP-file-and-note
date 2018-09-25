<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/9/25
 * Time: 20:25
 */
//implode(str,$arr);
//join(str,$arr);
//将数组按指定字符连接成字符串
header("Content-type:text/html;charset=utf-8");
//implode(str,$arr);
//把数组用str连接成一个字符串
$arr = array('123','abc','456','def');
$str = implode("~",$arr);
echo $str;