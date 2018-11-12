<?php
if(isset($_GET["id"])){
    include ("conn.php");
    $id = $_GET["id"];
    $sql = "delete from tb_demo02 where id=$id";
    $result = mysql_query($sql);
    if($result){
        echo "<script>alert('删除成功！');location.href='browse.php';</script>";
    }else{
        echo "<script>alert('删除失败！');location.href='browse.php';</script>";
    }
}else{
    echo "<script>location.href='browse.php';</script>";
}