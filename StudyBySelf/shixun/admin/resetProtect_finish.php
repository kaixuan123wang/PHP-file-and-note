<?php
session_start();
if(isset($_SESSION["key"]) and isset($_POST["resetPro_sbt"])){
	include("conn.php");
	$id = $_POST["uid"];
	$protect = $_POST["protect"];
	$answer = $_POST["answer"];
	$sql = "update touristUser set protection = '$protect',answer = '$answer' where uid = $id";
	$result = mysql_query($sql);
	if($result){
		echo "<script>alert('修改密保成功');location.href='changeTourist.php';</script>";
	}else{
		echo "<script>alert('修改密保失败');location.href='changeTourist.php';</script>";
	}
}else{
	echo "<script>location.href='backStage.php';</script>";
}


?>