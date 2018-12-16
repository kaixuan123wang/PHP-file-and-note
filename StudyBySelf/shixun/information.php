<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .info h2{
            text-align: center;
            font-size: 20px;
        }
        .info ul li{
            display: flex;
            flex-flow: row nowrap;
            justify-content: space-between;
            margin:20px 10%;
        }
        .info img{
            width: 50px;
            height: 50px;
        }
        .info .modifi{
            display: flex;
            flex-flow: row nowrap;
            justify-content: center;
        }
        .info button{
            margin:10px;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_GET["id"])){
            include ("head.php");
            $id = $_GET["id"];
            $sql = "select * from touristUser where uid = '$id'";
            $result = mysql_query($sql);
            $arr = mysql_fetch_array($result);
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
            if($_GET["id"] == $_SESSION["uid"]){
        ?>
                    <button onclick="window.location.href='modifi.php?id=<?php echo $id;?>'">修改信息</button>
                </div>
        <?php }?>
    </div>
</body>
</html>