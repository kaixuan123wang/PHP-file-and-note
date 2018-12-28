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
    <title>重要公告--IT之猿</title>
    <link rel="stylesheet" href="css/noticeSee.css">
    <meta http-equiv="keywords" content="IT,论坛,程序员,前端,后端">
    <meta name="description" content="此网站主要用于作品展示，实时更新最新作品，包括HTML代码、CSS代码、JavaScript代码、PHP代码、H5+Css3代码及网站原型，供本行业人士参考借鉴，以达到与本行业其他人员更加亲近的交流与分享的目的。" />
<link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
    <div class="all">
        <?php
            include("head.php");
            if(isset($_GET["id"])){
                include ("admin/conn.php");
                $id = $_GET["id"];
                $sql = "select * from notice where id = $id";
                $result = mysql_query($sql);
                if(mysql_num_rows($result) < 1){
                    echo "<script>alert('未找到此公告')</script>";
                }else{
                    $arr = mysql_fetch_array($result);
                    $title = $arr["title"];
                    $content = $arr["content"];
                    $time = $arr["time"];
                }
            }else{
                echo "<script>location.href='index.php';</script>";
            }
        ?>
        <div class="up">
            <div class="left">
                <p>
                    <img src="images/logo.png" alt="头像">
                </p>
                <p>管理员</p>
            </div>
            <div class="right">
                <div class="header">
                    <h2><?php echo $title;?></h2>
                    <time><?php echo $time;?></time>
                </div>
                <div class="content">
                    <?php echo $content;?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>