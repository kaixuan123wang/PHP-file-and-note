<?php 
include("conn.php");
if(isset($_POST["btnSave"])){
	$colName = $_POST["colName"];
	$colUrl = $_POST["colUrl"];
	$colShow = $_POST["colShow"];
		$sql = "insert into tb_column(colname,colurl,colshow) values('$colName','$colUrl','$colShow')";
		$result = mysql_query($sql,$lk);
		if($result){
		echo "<script>alert('添加栏目信息成功！');location.href='listcol.php';</script>";
	mysql_close($lk);
}
?>