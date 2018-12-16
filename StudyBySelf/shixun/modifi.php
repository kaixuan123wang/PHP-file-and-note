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
        .info input{
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
}
?>
<div class="info">
    <h2>基本信息</h2>
    <form action="modifi_finish.php" method="post" enctype="multipart/form-data">
    <ul>
        <li><span>用户名:</span><?php echo $arr["user"];?></li>
        <li><span>昵称:</span><input type="text" name="nickName" required value=<?php echo $arr["nickName"];?>></li>
        <li><span>头像:</span><a href="updateImg.php"><img src=<?php echo $arr["image"]?> alt="头像"></a></li>
        <li>
            <span>性别:</span>
            <select name="sex" id="sex">
                <option value="男" <?php if($arr["sex"] == "男"){echo "checked='checked'";} ?>>男</option>
                <option value="女" <?php if($arr["sex"] == "女"){echo "checked='checked'";} ?>>女</option>
            </select>
        </li>
        <li>
            <span>个性签名:</span>
            <textarea name="explains" id="explains" cols="30" rows="10"><?php echo $arr["explains"];?></textarea>
        </li>
        <li>
            <span>电子邮箱:</span>
            <input type="email" name="email" value=<?php echo $arr["email"];?>>
        </li>
        <li>
            <span>QQ:</span>
            <input type="number" name="qq" value=<?php echo $arr["qq"];?>>
        </li>
        <li class="modifi">
            <input type="submit" value="保存信息" name="modifi_sbt">
            <input type="reset" value="默认信息">
        </li>
    </ul>
    </form>
</div>
</body>
</html>