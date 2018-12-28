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
    <title>个人信息--IT之猿</title>
    <link rel="stylesheet" href="css/information.css">
    <meta http-equiv="keywords" content="IT,论坛,程序员,前端,后端">
    <meta name="description" content="此网站主要用于作品展示，实时更新最新作品，包括HTML代码、CSS代码、JavaScript代码、PHP代码、H5+Css3代码及网站原型，供本行业人士参考借鉴，以达到与本行业其他人员更加亲近的交流与分享的目的。" />
<link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
    <?php
        if(isset($_GET["id"])){
            include ("head.php");
            include ("admin/conn.php");
            $id = $_GET["id"];
            $sql = "select * from touristUser where uid = '$id'";
            $result = mysql_query($sql);
            if($result){
                if(mysql_num_rows($result) > 0){
                    $arr = mysql_fetch_array($result);
                }else{
                    echo "<script>alert('未发现此用户');location.href='index.php';</script>";
                }
            }
        }else{
            echo "<script>location.href='index.php';</script>";
        }
    ?>
    <div class="info">
        <h2>基本信息</h2>
        <ul>
            <li><span>用户名:</span><?php echo $arr["user"];?></li>
            <li><span>昵称:</span><?php echo $arr["nickName"];?></li>
            <li><span>头像:</span><img src=<?php echo $arr["image"];?> alt="头像"></li>
            <li><span>性别:</span><?php echo $arr["sex"];?></li>
            <li><span>个性签名:</span><?php echo $arr["explains"];?></li>
            <li><span>电子邮箱:</span><?php echo $arr["email"];?></li>
            <li><span>QQ:</span><?php echo $arr["qq"];?></li>
        </ul>
        <div class="modifi">
            <button onclick="window.location.href='index.php'">返回首页</button>
        <?php
        if(isset($_SESSION["uid"])){
            if($_GET["id"] == $_SESSION["uid"]){
        ?>
                    <button onclick="window.location.href='modifi.php?id=<?php echo $id;?>'">修改信息</button>
                </div>
        <?php }}?>
    </div>
</body>
</html>