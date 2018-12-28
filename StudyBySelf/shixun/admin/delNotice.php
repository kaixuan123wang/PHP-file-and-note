<?php
session_start();
if(isset($_SESSION["key"]) and isset($_GET["id"])){
	include ("conn.php");
	$id = $_GET["id"];
	$sql = "delete from notice where id = $id";
	$result = mysql_query($sql);
	if($result){
		echo "<script>alert('删除成功');location.href='showNotice.php';</script>";
	}else{
		echo "<script>alert('删除失败');location.href='showNotice.php';</script>";
	}

}else{
	echo "<script>location.href='backStage.php';</script>";
}
?>