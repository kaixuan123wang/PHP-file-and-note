<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		if(isset($_POST["btnUpdate"])){
			$oldPwd = md5($_POST["oldPwd"]);
			$newPwd = md5($_POST["newPwd"]);
			$sid = $_GET["id"];			
			include("conn.php");
			//获取原密码与输入的原密码进行比较
			$sql = "select * from tb_user where id=".$sid;
			$result = mysql_query($sql,$lk);
			$rs = mysql_fetch_array($result);
			$pwd = $rs["password"];
			if($oldPwd <> $pwd) {
				echo "<script>alert('输入的原密码不正确！');history.back();</script>";
			}
			//更新新密码
			else{
				$sql = "update tb_user set password='$newPwd' where id=".$sid;
				$result = mysql_query($sql,$lk);
				if($result){
					echo "<script>alert('密码修改成功！');location.href='listUser.php';</script>";
				}
			}
			mysql_close($lk);	
		}
		else{
			echo "<script>location.href='listUser.php';</script>";
		}
	?>
</body>
</html>