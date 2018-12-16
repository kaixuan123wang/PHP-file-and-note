<?php
header("content-type:text/html;charset=utf8");
session_start();
if(isset($_POST["modifi_sbt"])){
    include ("admin/conn.php");
    $uid = $_SESSION["uid"];
    $nickName = $_POST["nickName"];
    $sex = $_POST["sex"];
    $explains = $_POST["explains"];
    $email = $_POST["email"];
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













