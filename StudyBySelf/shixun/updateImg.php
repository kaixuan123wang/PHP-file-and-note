<?php
header("Last-Modified: " . gmdate( "D, d M Y H:i:s" ) . "GMT" );  
header("Cache-Control: no-cache, must-revalidate" );  
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>头像修改--IT之猿</title>
    <link rel="stylesheet" href="css/updateImg.css">
    <meta http-equiv="keywords" content="IT,论坛,程序员,前端,后端">
    <meta name="description" content="此网站主要用于作品展示，实时更新最新作品，包括HTML代码、CSS代码、JavaScript代码、PHP代码、H5+Css3代码及网站原型，供本行业人士参考借鉴，以达到与本行业其他人员更加亲近的交流与分享的目的。" />
<link rel="icon" href="images/logo.png" type="image/png">
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