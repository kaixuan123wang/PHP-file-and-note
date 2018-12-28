<?php
header("content-type:text/html;charset=utf8");
session_start();
	if(isset($_POST["loginBack_sbt"])){
		include("conn.php");
		$user = $_POST["user"];
		$pwd = md5($_POST["pwd"]);
		$sql = "select * from adminUser where user='$user' and pwd='$pwd'";
		$result = mysql_query($sql);
		if(mysql_num_rows($result) > 0){
			$arr = mysql_fetch_array($result);
			$_SESSION["key"] = $arr["uid"];
			echo "<script>alert('登录成功！');location.href='backStage.php';</script>";
		}else{
			echo "<script>alert('用户名或密码错误，请重试');location.href='login.php';</script>";
		}
	}else{
		echo "<script>location.href='login.php';</script>";
	}


?>