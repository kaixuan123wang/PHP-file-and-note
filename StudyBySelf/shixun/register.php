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
        li{
            list-style: none;
            margin:10px auto;
        }
        .all{
            width: 300px;
            margin:5px auto;
            border:1px solid #000;
        }
        .all h2{
            text-align: center;
            background: #0c0;
            color:#fff;
        }
        .all label{
            display: inline-block;
            width: 100px;
            text-align: right;
        }
        .all #code{
            width: 50px;
        }
    </style>
</head>
<body>
<?php
include ("head.php");
?>
    <div class="all">
        <h2>用户注册</h2>
        <form action="register_finish.php" method="post">
            <ul>
                <li>
                    <label for="user">账户名：</label>
                    <input type="text" maxlength="15" name="user" id="user">
                </li>
                <li>
                    <label for="">密码：</label>
                    <input type="password" name="pwd" id="pwd">
                </li>
                <li>
                    <label for="protect">密保问题：</label>
                    <select name="protect" id="protect">
                        <option value="你的妈妈叫什么">您的妈妈叫什么</option>
                        <option value="你的爸爸叫什么">您的爸爸叫什么</option>
                        <option value="家庭住址">您的家庭住址是哪里</option>
                        <option value="您的生日是多少">您的生日是多少</option>
                        <option value="您叫什么名字">您叫什么名字</option>
                    </select>
                </li>
                <li>
                    <label for="answer">答案：</label>
                    <input type="text" name="answer">
                </li>
                <li>
                    <label for="">验证码：</label>
                    <input type="text" name="code" id="code">
                    <img src="code.php" alt="验证码">
                </li>
                <li>
                    <input type="submit" value="创建" name="register_sbt">
                    <input type="reset" value="重置">
                </li>
            </ul>
        </form>

    </div>
</body>
</html>