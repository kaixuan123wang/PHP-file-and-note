<?php
session_start();
if(isset($_SESSION["key"]) and isset($_GET["id"])){
	include("conn.php");
	$id = $_GET["id"];
	$sql = "delete from adminUser where uid = $id";
	$result = mysql_query($sql);
	if($result){
		echo "<script>alert('删除成功！');location.href='changeAdmin.php';</script>";
	}else{
		echo "<script>alert('删除失败！');location.href='changeAdmin.php';</script>";
	}
}else{
	echo "<script>location.href='login.php';</script>";
}

?>