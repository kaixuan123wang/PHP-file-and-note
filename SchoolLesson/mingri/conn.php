<?php
	header("Content-Type:text/html;charset=utf8");
	$db = mysql_connect("localhost","root","w19980915") or die("数据库连接失败");
$sdb = mysql_select_db("wang") or die("无法找到数据库");
?>