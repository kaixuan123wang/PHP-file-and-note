<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/head.css">
    <meta http-equiv="keywords" content="IT,论坛,程序员,前端,后端">
    <meta name="description" content="此网站主要用于作品展示，实时更新最新作品，包括HTML代码、CSS代码、JavaScript代码、PHP代码、H5+Css3代码及网站原型，供本行业人士参考借鉴，以达到与本行业其他人员更加亲近的交流与分享的目的。" />
<link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
<div class="head">
    <div class="logo">
        <a href="index.php">
            <img src="images/logo.png" alt="logo">
        </a>
    </div>
    <?php
    if(!isset($_SESSION["uid"])){
    ?>
    <div class="login">

        <form action="login.php" method="post">
            <p>
                <label for="user">用户名：</label>
                <input type="text" name="user" id="user" required>
                <a href="alter.php">修改密码</a>
            </p>
            <p>
                <label for="pwd">密 码： </label>
                <input type="password" name="pwd" id="pwd" required>
                <a href="register.php">免费注册</a>
            </p>
            <p class="sbt">
                <input type="submit" value="登录" name="login_sbt">
            </p>
        </form>
    </div>
        <?php
            }else{
                include ("admin/conn.php");
                $id = $_SESSION["uid"];
                $sql = "select * from touristUser where uid = '$id'";
                $result = mysql_query($sql);
                $arr = mysql_fetch_array($result);
                if(strlen($arr["nickName"]) > 4){
                    $arr["nickName"] = substr($arr["nickName"],0,12);
                }
                ?>
            <div class="logined">
                <div class="headImage">
                    <a href="updateImg.php"><img src=<?php echo ($arr["image"])?> alt="头像"></a>
                </div>
                <div class="user">
                    <p>
                        <a href=<?php echo "information.php?id=".$id;?>><?php echo ($arr["nickName"])?></a>
                        <a href="quit.php" class="quit">退出登录</a>
                    </p>
                    <span><?php echo ($arr["user"])?></span>
                </div>
            </div>
        <?php }?>

</div>
<div class="nav">
    <ul>
        <li><a href="index.php?column=all">综合</a></li>
        <li><a href="index.php?column=question">问题求助</a></li>
        <li><a href="index.php?column=exchange">技术交流</a></li>
        <li><a href="index.php?column=show">作品展示</a></li>
        <li><a href="index.php?column=share">资源分享</a></li>
        <li><a href="index.php?column=course">系列教程</a></li>
        <li><a href="index.php?column=note">学习笔记</a></li>
    </ul>
</div>
</body>
</html>