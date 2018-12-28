<?php
session_start();
$_SESSION["code"] = rand(1000,9999);
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
        li{
            list-style: none;
            height: 30px;
            margin:10px auto;
            line-height: 30px;
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
        .all .code{
            vertical-align:bottom
        }
    </style>
</head>
<body>
<div class="all">
    <h2>管理员账户登录</h2>
    <form action="loginBack_finish.php" method="post" name="frm" onsubmit="return chkFrm();">
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
                <span class="code">
                    <label for="">验证码：</label>
                    <input type="text" name="code" id="code">
                </span>
                <img src="../code.php" alt="验证码" style="vertical-align:bottom">
            </li>
            <li>
                <input type="submit" value="登录" name="loginBack_sbt">
                <input type="reset" value="重置">
            </li>
        </ul>
    </form>
    <script>
    function trim(str){ //删除左右两端的空格
　　     return str.replace(/(^\s*)|(\s*$)/g, "");
　　 }
        function chkFrm(){
            if(trim(frm.user.value) == ""){
                alert("账号名不能为空");
                return false;
            }
            if(frm.pwd.value == ""){
                alert("密码不能为空");
                return false;
            }
            if(frm.code.value != <?php echo $_SESSION["code"]?>){
                alert("验证码错误！");
                return false;
            }
        }
    </script>
</div>
</body>
</html>