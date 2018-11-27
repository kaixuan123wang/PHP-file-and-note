<?php
	if(isset($_POST["btnUpdate"])){
		$newpwd = $_POST["newpwd"];
		$oldpwd = $_POST["oldpwd"];
		$id = $_GET["id"];
		$sql = "select password from tb_user where id = ".$id;
		$result = mysql_query($sql);
		if($pwd = mysql_fetch_array($result)){
			$pwd = $pwd[0];
		}
		if($pwd == $oldpwd){
			$sql = "update tb_user set password='$newpwd' where id='$id'";
			$result = mysql_query($sql);
			echo "<script>alert('修改密码成功！');location.href='listUser.php';</script>";
		}else{
			echo "<script>alert('旧密码不正确！');history.back();</script>";
		}
	}else{
		echo "<script>location.href='listUser.php';</script>";
	}

?>