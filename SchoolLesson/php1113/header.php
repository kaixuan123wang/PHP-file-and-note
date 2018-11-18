<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/header.css">
    </head>
    <body>
    <header>
            <h1></h1>
            <ul>
                <li><a href="#"><?php date_default_timezone_set("Asia/Shanghai"); echo date("Y-m-d H-i-s")?></a></li>
                <li><a href="browse.php">浏览数据</a></li>
                <li><a href="index.php">添加图书</a></li>
                <li><a href="#">简单查询</a></li>
                <li><a href="#">高级查询</a></li>
                <li><a href="#">分组统计</a></li>
                <li><a href="#">退出系统</a></li>
            </ul>
    </header>
    </body>
</html>