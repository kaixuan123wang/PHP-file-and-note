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
    <title>修改个人信息--IT之猿</title>
    <link rel="stylesheet" href="css/modifi.css">
    <meta http-equiv="keywords" content="IT,论坛,程序员,前端,后端">
    <meta name="description" content="此网站主要用于作品展示，实时更新最新作品，包括HTML代码、CSS代码、JavaScript代码、PHP代码、H5+Css3代码及网站原型，供本行业人士参考借鉴，以达到与本行业其他人员更加亲近的交流与分享的目的。" />
<link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
<?php
include ("head.php");
if(isset($_GET["id"]) and $_GET["id"] == $_SESSION["uid"]){
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
    <form action="modifi_finish.php" method="post" name="frm" onsubmit="return chkFrm();">
    <ul>
        <li><span>用户名:</span><?php echo $arr["user"];?></li>
        <li><span>昵称:</span><input type="text" name="nickName" value=<?php echo $arr["nickName"];?>></li>
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
<script>
     function trim(str){ //删除左右两端的空格
　　     return str.replace(/(^\s*)|(\s*$)/g, "");
　　 }
        function chkFrm(){
            if(trim(frm.nickName.value) == ""){
                alert("昵称不能为空");
                return false;
                }
        }
    </script>
</body>
</html>