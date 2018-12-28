<?php
session_start();
if(isset($_SESSION["key"]) and isset($_GET["resetAdmin_sbt"])){
	include("conn.php");
	$id = $_SESSION["key"];
	$nickName = trim($_GET["nickName"]);
	$sex = $_GET["sex"];
	$email = $_GET["email"];
	$qq = $_GET["qq"];
	$sql = "update adminUser set nickName = '$nickName',sex = '$sex',email = '$email',qq = '$qq' where uid = $id";
	$result = mysql_query($sql);
	if($result){
		echo "<script>alert('修改信息成功');location.href='resetInfo.php';</script>";
	}else{
		echo "<script>alert('修改信息失败');location.href='resetInfo.php';</script>";
	}
}else{
	echo "<script>location.href='backStage.php';</script>";
}
?>