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
    <title>用户注册--IT之猿</title>
    <link rel="stylesheet" href="css/register.css">
    <meta http-equiv="keywords" content="IT,论坛,程序员,前端,后端">
    <meta name="description" content="此网站主要用于作品展示，实时更新最新作品，包括HTML代码、CSS代码、JavaScript代码、PHP代码、H5+Css3代码及网站原型，供本行业人士参考借鉴，以达到与本行业其他人员更加亲近的交流与分享的目的。" />
<link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
<?php
include ("head.php");
?>
    <div class="all">
        <h2>用户注册</h2>
        <form action="register_finish.php" method="post" name="frm" onsubmit="return chkFrm();">
            <ul>
                <li>
                    <label for="user">账户名：</label>
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
                    <span class="code">
                        <label for="">验证码：</label>
                        <input type="text" name="code" id="code">
                    </span>
                    <img src="code.php" alt="验证码" style="vertical-align:bottom">
                </li>
                <li>
                    <input type="submit" value="创建" name="register_sbt">
                    <input type="reset" value="重置">
                </li>
            </ul>
        </form>

    </div>
    <script>
     function trim(str){ //删除左右两端的空格
　　     return str.replace(/(^\s*)|(\s*$)/g, "");
　　 }
        function chkFrm(){
            if(trim(frm.user.value) == ""){
                alert("用户名不能为空！");
                return false;
                }
            if(frm.pwd.value == ""){
                alert("密码不能为空！");
                return false;
                }
            if(frm.pwd.value != frm.repwd.value){
                alert("密码与重复密码不相同");
                return false;
            }
            if(trim(frm.answer.value) == ""){
                alert("密保答案不能为空！");
                return false;
            }
            if(frm.code.value == ""){
                alert("验证码不能为空！");
                return false;
            }
            if(frm.code.value != <?php echo $_SESSION["code"]?>){
                alert("验证码错误！请重新输入");
                return false;
            }
        }
    </script>
</body>
</html>