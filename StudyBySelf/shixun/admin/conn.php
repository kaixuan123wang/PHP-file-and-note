<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/12/9
 * Time: 18:48
 */
//连接mysql服务器，通过域名或IP地址，输入口令和密码。
$lk = mysql_connect("localhost", "root", "w19980915") or die("数据库连接失败，请联系管理员！");
//选择数据库
$sdb = mysql_select_db("shixun", $lk) or die("找不到数据库!");
mysql_query("set names utf8");  //设置数据操作的字符集
