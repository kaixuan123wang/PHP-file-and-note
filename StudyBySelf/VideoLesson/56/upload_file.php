<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/16
 * Time: 12:43
 */
header("content-type:text/html;charset=utf8");
if($_FILES["file"]["error"] > 0){
    echo "错误：".$_FILES["file"]["error"]."<br>";
}else{
    echo "上传文件名：".$_FILES["file"]["name"]."<br>";
    echo "文件类型：".$_FILES["file"]["type"]."<br>";
    echo "文件大小：".($_FILES["file"]["size"]/1024)."<br>";
    echo "文件临时存储位置：".$_FILES["file"]["tmp_name"]."<br>";
    $arr = explode(".",$_FILES["file"]["name"]);
    $hz = $arr[count($arr)-1];
    $filepath="./uploads/";
    date_default_timezone_set("prc");
    $randname=date("Y").date("m").date("d").date("H").date("i").date("s").rand(100, 999).".".$hz;
    if(is_uploaded_file($_FILES["file"]["tmp_name"])){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath.$randname)){
            echo "上传成功<br>";
        }else{
            echo "上传失败<br>";
        }
    }else{
        echo "不是一个上传文件<br>";
    }
}