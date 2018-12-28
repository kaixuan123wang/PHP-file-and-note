<?php
session_start();
$randCode = rand(1000,9999);
$_SESSION["code"] = $randCode;
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
        .all li{
            list-style: none;
            margin:10px auto;
            text-align: center;
        }
        .all{
            width: 100vw;
            margin:5px auto;
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
            vertical-align:bottom;
        }
    </style>
</head>
<body>
    <div class="all">
        <form action="addAdmin_finish.php" method="post" name="frm" onsubmit="return chkFrm();">
            <ul>
                <li>
                    <label for="user">账号名：</label>
                    <input type="text" maxlength="15" name="user" id="user" required>
                </li>
                <li>
                    <label for="">密码：</label>
                    <input type="password" name="pwd" id="pwd" required>
                </li>
                <li>
                    <label for="">重复密码：</label>
                    <input type="password" name="repwd" id="repwd" required>
                </li>
                <li>
                    <label for="user">账号所有者：</label>
                    <input type="text" maxlength="15" name="nickName" id="nickName" required>
                </li>
                <li>
                    <span class="code">
                        <label for="">验证码：</label>
                        <input type="text" name="code" id="code">
                    </span>
                    <img src="../code.php" alt="验证码" style="vertical-align:bottom">
                </li>
                <li>
                    <input type="submit" value="创建" name="add_sbt">
                    <input type="reset" value="重置">
                </li>
            </ul>
        </form>

    </div>
    <script>
        if (window.top==self){
            location.href='./backStage.php';
        }
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
            if(frm.pwd.value != frm.repwd.value){
                alert("新密码与重复密码不相同");
                return false;
            }
        }

    </script>
</body>
</html>