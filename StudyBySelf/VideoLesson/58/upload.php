<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2018/11/16
 * Time: 17:56
 */
header("Content-Type:text/html;charset=utf8");
require "FileUpload.php";
$up = new FileUpload(array('filepath'=>'./uploads/'));

if($up->uploadFile('spic')){
    echo $up->getNewFileName();
}else{
    echo $up->getErrorMsg();
}