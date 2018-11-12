<?php
	header("Content-Type:text/html;charset=utf8");
	include("conn.php");
	if(isset($_POST["sbt"])){
		$name = $_POST["name"];
		$sex = $_POST["sex"];
		$sql = "insert into tb_into(name,sex) values('$name','$sex')";
		$add = mysql_query($sql);
		if($add){
			echo "<script>alert('添加成功！');location.href='list.php';</script>";
		}else{
			echo "插入失败请联系管理员";
		}
	}
?>