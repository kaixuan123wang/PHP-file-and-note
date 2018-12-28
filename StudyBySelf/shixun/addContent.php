<?php
header("content-type:text/html;charset=utf8");
session_start();
if(isset($_SESSION["uid"])){
    $title = trim(htmlentities($_POST["title"],ENT_QUOTES,"UTF-8"));
    $content = trim($_POST["content"]);
        include ("admin/conn.php");
        date_default_timezone_set("prc");
        $uid = $_SESSION["uid"];
        $type = $_POST["type"];
        $time = date("Y-m-d H-i-s");
        $sql = "insert into article(title,content,type,actorId,time) values('$title','$content','$type','$uid','$time')";
        $result = mysql_query($sql);
        if($result){
            echo "<script>alert('发帖成功！');location.href='index.php';</script>";
        }else{
            echo "<script>alert('发帖失败，请检查网络');location.href='index.php';</script>";
        }
}else{
    echo "<script>alert('您未登录账户，请登录账户后重试');location.href='index.php';</script>";
}