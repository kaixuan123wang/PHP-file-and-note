<?php
header("content-type:text/html;charset=utf8");
session_start();
if(isset($_SESSION["key"]) and isset($_POST["notice_sbt"])){
    include ("conn.php");
    date_default_timezone_set("prc");
    $title = trim(htmlentities($_POST["title"],ENT_QUOTES,"UTF-8"));
    $content = trim($_POST["content"]);
    $uid = $_SESSION["key"];
    $time = date("Y-m-d H-i-s");
    $sql = "insert into notice(title,content,actorId,time) values('$title','$content','$uid','$time')";
    $result = mysql_query($sql);
    if($result){
        echo "<script>alert('发布成功！');location.href='addNotice.php';</script>";
    }else{
        echo "<script>alert('发布失败！');location.href='addNotice.php';</script>";
    }
}else{
    echo "<script>location.href='backStage.php';</script>";
}