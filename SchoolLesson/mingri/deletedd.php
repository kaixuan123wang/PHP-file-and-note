<?php
if(isset($_POST["sbt"])){
    include ("conn.php");
    $id = $_POST["del"];
    foreach ($id as $value){
        $sql = "delete from tb_dingdan where id='$value'";
        mysql_query($sql);
    }
    echo "<script>alert('删除成功！');location.href='seedd.php';</script>";
}else{
    echo "<script>location.href='seedd.php';</script>";
}