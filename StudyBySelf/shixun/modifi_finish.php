<?php
header("content-type:text/html;charset=utf8");
session_start();
if(isset($_POST["modifi_sbt"])){
    include ("admin/conn.php");
    $uid = $_SESSION["uid"];
    $nickName = trim(htmlentities($_POST["nickName"],ENT_QUOTES,"UTF-8"));
    $sex = $_POST["sex"];
    $explains = trim(htmlentities($_POST["explains"],ENT_QUOTES,"UTF-8"));  
    $email = htmlentities($_POST["email"],ENT_QUOTES,"UTF-8");
    $qq = $_POST["qq"];
    $sql = "update touristUser set nickName = '$nickName',sex = '$sex',explains = '$explains',email = '$email',qq = '$qq' where uid = '$uid'";
    $result = mysql_query($sql);
    if($result){
        echo "<script>alert('保存信息成功！');location.href='information.php';</script>";
    }else{
        echo "<script>alert('保存信息失败');location.href='information.php';</script>";
    }
}else{
    echo "<script>location.href='index.php';</script>";
}













