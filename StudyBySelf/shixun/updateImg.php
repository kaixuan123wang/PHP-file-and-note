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
        .image,.update{
            width: 300px;
            margin:10px auto;
            text-align: center;
        }
        .image img{
            width: 300px;
            height: 300px;
            margin-top: 10px;
        }
        .update p{
            margin:10px auto;
        }
    </style>
</head>
<body>
<?php
include ("head.php");
include ("admin/conn.php");
$uid = $_SESSION["uid"];
$sql = "select * from touristUser where uid = '$uid'";
$result = mysql_query($sql);
$arr = mysql_fetch_array($result);
?>
<div class="image">
    <h2>当前头像</h2>
    <img src=<?php echo $arr["image"]?> alt="头像">
</div>
<div class="update">
    <form action="updateImg_finish.php" method="post" enctype="multipart/form-data">
        <p><input type="file" name="file" id="file"></p>
        <p><input type="submit" value="更换头像" name="updateImg_sbt"></p>
    </form>
</div>
</body>
</html>