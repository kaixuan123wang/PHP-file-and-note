<?php
header("Content-type:text/html;charset=utf8");
if(isset($_POST["update"])){
    include("conn.php");
    $id = $_GET["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $time = $_POST["time"];
    $kind = $_POST["kind"];
    $sql = "update tb_demo02 set bookname='$name',price='$price',f_time='$time',type='$kind' where id='$id'";
    $result = mysql_query($sql);
    if($result){
        echo "<script>alert('修改成功！');location.href='browse.php';</script>";
    }else{
        echo "<script>alert('修改失败！');location.href='browse.php';</script>";
    }
}else{
    echo "<script>alert('请先修改后再提交');location.href='browse.php';</script>";
}