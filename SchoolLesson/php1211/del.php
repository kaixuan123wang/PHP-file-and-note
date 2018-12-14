<?php
	header("content-type:text/html;charset=utf8");
	if(isset($_GET["id"])){
		mysql_connect("localhost","root","root");
		mysql_select_db("db_book");
		$id = $_GET["id"];
		$sql = "delete from tb_guest where id = '$id'";
		$result = mysql_query($sql);
		if($result){
			echo "<script>alert('删除成功');location.href='list.php';</script>";
		}else{
			echo "<script>alert('删除失败');location.href='list.php';</script>";
		}
	}else{
		echo "<script>location.href='list.php';</script>";
	}
?>