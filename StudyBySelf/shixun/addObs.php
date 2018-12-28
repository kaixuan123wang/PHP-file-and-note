<?php
	header("content-type:text/html;charset=utf8");
	if(isset($_POST["obs_sbt"])){
		if($_POST["obserId"] != "null"){
			include("admin/conn.php");
			date_default_timezone_set("prc");
			$obserId = $_POST["obserId"];
			$obsContent = trim(htmlentities($_POST["obsContent"],ENT_QUOTES,"UTF-8"));
			$articleId = $_POST["articleId"];
			$time = date("Y-m-d H:i:s");
			$sql = "insert into observe(articleId,observerId,content,time) values($articleId,$obserId,'$obsContent','$time')";
			$result = mysql_query($sql);
			if($result){
				echo "<script>alert('评论成功');location.href='articleSee.php?id=".$articleId."';</script>";
			}else{
				echo "<script>alert('评论失败');location.href='articleSee.php?id=".$articleId."';</script>";
			}
		}else{
			echo "<script>alert('您尚未登陆，请登录后再评论');location.href='articleSee.php?id=".$articleId."';</script>";
		}
	}else{
		echo "<script>location.href='articleSee.php?id=".$articleId."';</script>";
	}

?>