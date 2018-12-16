<?php
header("content-type:text/html;charset=utf8");
session_start();
if(isset($_POST["updateImg_sbt"])){
    if($_FILES["file"]["error"] > 0){
        echo "错误：".$_FILES["file"]["error"]."<br>";
    }else{
        include ("admin/conn.php");
        $uid = $_SESSION["uid"];
        $arr = explode(".",$_FILES["file"]["name"]);
        $hz = $arr[count($arr)-1];
        $filepath="./images/";
        $randname=$uid.".".$hz;
        $types = " jpg|jpeg|png|gif|bmp";
        if(stripos($types,$hz)){
            if(is_uploaded_file($_FILES["file"]["tmp_name"])){
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath.$randname)){
                    echo "<script>alert('头像保存成功');location.href='updateImg.php';</script>";
                }else{
                    echo "<script>alert('头像保存失败，请检查网络');location.href='updateImg.php';</script>";
                }
            }else{
                echo "<script>alert('请检查图片文件是否正确');location.href='updateImg.php';</script>";
            }
        }else{
            echo "<script>alert('不支持该图片类型');location.href='updateImg.php';</script>";
        }

    }
}