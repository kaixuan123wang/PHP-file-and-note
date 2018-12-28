<?php
header("content-type:text/html;charset=utf8");
session_start();
if(isset($_POST["add_sbt"])){
    if($_POST["code"] == $_SESSION["code"]){
        include ("conn.php");
        $user = trim(htmlentities($_POST["user"],ENT_QUOTES,"UTF-8"));
        $sql = "select * from adminUser where user = '$user'";
        $result = mysql_query($sql);
        if(mysql_num_rows($result) == 0){
            $pwd = md5($_POST["pwd"]);
            $sql = "insert into adminUser(user,pwd) values('$user','$pwd')";
            $result = mysql_query($sql);
            if($result){
                echo "<script>alert('账号创建成功');location.href='addAdmin.php';</script>";
            }else{
                echo "<script>alert('未知原因，创建账号失败');location.href='addAdmin.php';</script>";
            }
        }else{
            echo "<script>alert('账户名已被使用');location.href='addAdmin.php';</script>";
        }
    }else{
        echo "<script>alert('验证码错误，请重新输入');location.href='addAdmin.php';</script>";
    }
}else{
    echo "<script>location.href='backStage.php';</script>";
}