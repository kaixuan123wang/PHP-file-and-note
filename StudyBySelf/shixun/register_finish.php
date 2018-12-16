<?php
header("content-type:text/html;charset=utf8");
session_start();
if(isset($_POST["register_sbt"])){
    if($_POST["code"] == $_SESSION["code"]){
        include ("admin/conn.php");
        $user = $_POST["user"];
        $sql = "select * from touristUser where user = '$user'";
        $result = mysql_query($sql);
        if(mysql_num_rows($result) == 0){
            $pwd = md5($_POST["pwd"]);
            $protect = $_POST["protect"];
            $answer = $_POST["answer"];
            $sql = "insert into touristUser(user,pwd,protection,answer) values('$user','$pwd','$protect','$answer')";
            $result = mysql_query($sql);
            if($result){
                echo "<script>alert('账号创建成功，请登录');location.href='index.php';</script>";
            }else{
                echo "<script>alert('未知原因，创建账号失败');location.href='register.php';</script>";
            }
        }else{
            echo "<script>alert('用户名已被使用');location.href='register.php';</script>";
        }
    }else{
        echo "<script>alert('验证码错误，请重新输入');location.href='register.php';</script>";
    }
}else{
    echo "<script>location.href='register.php';</script>";
}