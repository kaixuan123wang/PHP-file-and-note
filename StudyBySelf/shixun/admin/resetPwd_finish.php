<?php
session_start();
if(isset($_SESSION["key"]) and isset($_POST["resetPwd_sbt"])){
	include("conn.php");
	$user = $_POST["user"];
	$pwd = md5($_POST["pwd"]);
	$sql = "update touristUser set pwd = '$pwd' where user = '$user'";
	$result = mysql_query($sql);
	if($result){
		echo "<script>alert('修改密码成功！');location.href='changeTourist.php';</script>";
	}
}else{
	echo "<script>location.href='backStage.php';</script>";
}


?>