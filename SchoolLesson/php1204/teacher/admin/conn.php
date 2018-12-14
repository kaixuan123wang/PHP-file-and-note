<?php 
header("Content-type:text/html;charset=utf-8");
//连接mysql服务器，通过域名或IP地址，输入口令和密码。
$lk = mysql_connect("localhost","root","root") or die("数据库连接失败，请联系管理员！");
//选择数据库
$sdb = mysql_select_db("db_news",$lk) or die("找不到数据库!");
mysql_query("set names utf8");  //设置数据操作的字符集
?>
