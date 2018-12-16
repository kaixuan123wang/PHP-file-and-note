<?php
header("content-type:text/html;charset=utf8");
session_start();
if(isset($_POST["alter_sbt"])){
    if($_POST["code"] == $_SESSION["code"]){
        include ("admin/conn.php");
        $user = $_POST["user"];
        $sql = "select * from touristUser where user = '$user'";
        $result = mysql_query($sql);
        if(mysql_num_rows($result) != 0){
            $arr = mysql_fetch_array($result);
            $pwd = md5($_POST["pwd"]);
            $protect = $_POST["protect"];
            $answer = $_POST["answer"];
            if($protect == $arr["protection"] and $answer == $arr["answer"]){
                if($pwd != $arr["pwd"]){
                    $sql = "update touristUser set pwd = '$pwd' where user = '$user'";
                    $result = mysql_query($sql);
                    if($result){
                        echo "<script>alert('修改密码成功，请重新登录');location.href='index.php';</script>";
                    }else{
                        echo "<script>alert('未知原因，密码修改失败');location.href='alter.php';</script>";
                    }
                }else{
                    echo "<script>alert('新密码不能与旧密码相同');location.href='alter.php';</script>";
                }
            }else{
                echo "<script>alert('密保或密保答案错误');location.href='alter.php';</script>";
            }
        }else{
            echo "<script>alert('该账号未注册');location.href='alter.php';</script>";
        }
    }else{
        echo "<script>alert('验证码错误，请重新输入');location.href='alter.php';</script>";
    }
}else{
    echo "<script>location.href='index.php';</script>";
}