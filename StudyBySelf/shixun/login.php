<?php
header("content-type:text/html;charset=utf8");
session_start();
    if(isset($_POST["login_sbt"])){
        include ("admin/conn.php");
        $user = $_POST["user"];
        $pwd = md5($_POST["pwd"]);
        $sql = "select * from touristUser where user = '$user' and pwd = '$pwd'";
        $result = mysql_query($sql);
        if(mysql_num_rows($result) >0){
            $arr = mysql_fetch_array($result);
            $_SESSION["uid"] = $arr["uid"];
            echo "<script>alert('登录成功！');location.href='index.php';</script>";
        }else{
            echo "您输入的用户名或密码错误";
        }
    }else{
        echo "<script>location.href='index.php';</script>";
    }