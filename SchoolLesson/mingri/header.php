<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <style>
			*{
				margin: 0;
				padding: 0;
			}
            header{
                margin-top: 10px;
            }
			header h1{
				width: 100%;
				height: 206px;
				background: url(banner.jpg) no-repeat;
                -webkit-background-size: 100%;
                background-size: 100%;
			}
            header ul{
				display: flex;
				flex-flow: row nowrap;
				justify-content: center;
				width: 100%;
			}
			header ul li{
				list-style: none;
				width: 15%;
                border: 1px solid #000;
                border-collapse: collapse;
			}
			header ul li a{
				display: inline-block;
				width: 100%;
				height: 20px;
				line-height: 20px;

				text-align: center;
				text-decoration: none;
				color: #000;
			}
        </style>
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