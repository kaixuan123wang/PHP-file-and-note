<?php 
include("conn.php");
if(isset($_GET["btnSave"])){
	//栏目的基本信息获取到
	$colName = $_GET["colName"];
	$colUrl = $_GET["colUrl"];
	$colShow = $_GET["colShow"];
	$sql = "insert into tb_column(colName,colUrl,colShow) values('$colName','$colUrl','$colShow')";
	$result = mysql_query($sql,$lk);
	if($result){
		echo "<script>alert('添加栏目信息成功！');location.href='listColumn.php';</script>";
	}
	mysql_close($lk);
}
?>