<?php
header("Content-type:text/html;charset=utf8");
if(count($_POST["select"])){
    include ("conn.php");
    $arr = $_POST["select"];
    foreach ($arr as $value){
        $sql = "delete from tb_demo02 where id='$value'";
        mysql_query($sql);
    }
    echo "<script>alert('删除成功！');location.href='browse.php';</script>";
}else{
    echo "<script>alert('您未选择任何数据');location.href='browse.php';</script>";
}