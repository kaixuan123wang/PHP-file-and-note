<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        .head {
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-between;
            width: 100%;
            height: 100px;
            background: #999;
        }

        .head .logo img {
            width: 100px;
            height: 100px;
        }

        .head .login {
            height: 66px;
            margin-right: 10px;
        }

        .head .login form {
            border-right: 1px solid #999999;
            line-height: 22px;
        }

        .head input {
            width: 100px;
            margin-right: 10px;
        }

        .head .login form .sbt {
            width: 185px;
            text-align: right;
        }

        .head .login form .sbt input {
            width: 70px;
            height: 25px;
            margin-top: 5px;
        }

        .head .login form p label {
            display: inline-block;
            width: 65px;
            margin-top: 10px;
            text-align: right;
        }
        .head .logined{
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-around;
            width: 15%;
        }
        .head .logined .user{
            height: 100px;
            line-height: 30px;
            margin-top: 20px;
        }
        .head .logined .user span{
            color:#ccc;
        }
        .head .logined .user p{
            text-decoration: underline;
        }
        .head .logined .headImage{
            margin-top:10px;
        }
        .head .logined .headImage img{
            width: 80px;
            height: 80px;
        }
        .head .logined .quit{
            color:#00f;
            margin-left: 10px;
        }
    </style>
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
                <input type="text" name="user" id="user">
                <a href="alter.php">修改密码</a>
            </p>
            <p>
                <label for="pwd">密 码： </label>
                <input type="password" name="pwd" id="pwd">
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
</body>
</html>