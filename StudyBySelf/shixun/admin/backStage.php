<?php
session_start();
    if(!isset($_SESSION["key"])){
        echo "<script>location.href='login.php';</script>";
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        ul{
            list-style-type: none;
        }
        a{
            color: #000;
        }
        .head{
            width: 100%;
            height: 100px;
            background: #000;
            color:#fff;
        }
        .head h1{
            line-height: 100px;
            margin-left: 10px;
        }
        .content{
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
            width: 100%;
            margin-top:10px;
        }
        .content .left{
            width: 200px;
            border:1px solid #000;
        }
        .content .right{
            border:1px solid #000;
        }
        .content ul li details{
            margin:10px;
        }
        .content ul li details li{
            margin:5px;
        }
    </style>
</head>
<body>
    <div class="all">
        <div class="head">
            <h1>后台管理界面</h1>
        </div>
        <div class="content">
            <div class="left">
                <ul>
                    <li>
                        <details>
                            <summary>游客账户管理</summary>
                            <ul>
                                <li><a href="TouristList.php" target="mainFrame">游客账户列表</a></li>
                                <li><a href="changeTourist.php" target="mainFrame">更改游客账户</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>管理员账户管理</summary>
                            <ul>
                                <li><a href="adminList.php" target="mainFrame">管理员账户列表</a></li>
                                <li><a href="addAdmin.php" target="mainFrame">增加管理员账户</a></li>
                                <li><a href="changeAdmin.php" target="mainFrame">修改管理员账户</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>文章管理</summary>
                            <ul>
                                <li><a href="showArticle.php" target="mainFrame">文章列表</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>评论管理</summary>
                            <ul>
                                <li><a href="showObserve.php" target="mainFrame">评论列表</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>公告管理</summary>
                            <ul>
                                <li><a href="showNotice.php" target="mainFrame">公告列表</a></li>
                                <li><a href="addNotice.php" target="mainFrame">发布公告</a></li>
                            </ul>
                        </details>
                    </li>
                    <li>
                        <details>
                            <summary>个人中心</summary>
                            <ul>
                                <li><a href="showInfo.php" target="mainFrame">个人信息</a></li>
                                <li><a href="resetInfo.php" target="mainFrame">完善信息</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
            <div class="right">
                <iframe src="welcome.php" frameborder="0" width="1240" height="500" name="mainFrame"></iframe>
            </div>
        </div>
    </div>
</body>
</html>