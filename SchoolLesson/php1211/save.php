<?php
	header("content-type:text/html;charset=utf8");
	if(isset($_POST["sbt"])){
		$db = mysql_connect("localhost","root","root") or die("数据库连接失败");
		$lk = mysql_select_db("db_book") or die("无法找到相关数据库");
		date_default_timezone_set("prc");
		$username = $_POST["userName"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$content = $_POST["content"];
		$time = date("Y-m-d H:i:s");
		$sql = "insert into tb_guest(username,email,subject,content,itime) values('$username','$email','$subject','$content','$time')";
		$result = mysql_query($sql);
		if($result){
			echo "<script>alert('提交成功');location.href='list.php';</script>";
		}else{
			echo "<script>alert('提交失败');location.href='add.php';</script>";
		}
	}else{
		echo "<script>location.href='add.php';</script>";
	}
	
?>