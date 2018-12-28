<?php
session_start();
if(isset($_SESSION["key"]) and isset($_POST["adminPwd_sbt"])){
	include("conn.php");
	$user = $_POST["user"];
	$pwd = md5($_POST["pwd"]);
	$sql = "update adminUser set pwd = '$pwd' where user = '$user'";
	$result = mysql_query($sql);
	if($result){
		echo "<script>alert('修改密码成功！');location.href='changeAdmin.php';</script>";
	}
}else{
	echo "<script>location.href='backStage.php';</script>";
}


?>