<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加学生信息</title>
	<style>
		* {
			padding: 0;margin: 0;
		}
		.page {
			width: 500px;
			border: 1px solid #f30;
			margin: 10px;
		}
		.page h4 {
			height: 25px;
			background-color: #f30;
			font-weight: normal;
			padding-left: 10px;
			line-height: 25px;
		}
		.page p {
			text-align: center;
		}
	</style>
</head>
<?php
	if(!isset($_GET["id"])){
		echo "<script>location.href='listUser.php';</script>";
	}else{
		$id = $_GET["id"];
		$sql = "select * from tb_user where id = ".$id;
		$result = mysql_query($sql);
		$arr = mysql_fetch_array($result);
		$uname = $arr["username"];
	}
?>
<body>
	<div class="page">
		<form action="updateUser.php?<?php echo $id?>" method="post" name="addFrm" onsubmit="return chkFrm()">
		<h4>修改用户：<?php echo $uname;?></h4>
		<p><label for="uid">输入旧密码：</label><input type="text" name="oldpwd" id="uid"></p>
		<p><label for="pwd">输入新密码：</label><input type="password" name="newpwd" id="pwd"></p>
		<p><label for="rnewpwd">重复新密码：</label><input type="password" name="rpwd" id='rpwd'></p>
		<p><input type="submit" value="保存" name="btnUpdate"></p>	
		</form>
	</div>
	<script>
		function chkFrm(){
			if(addFrm.oldpwd.value == ""){
				alert("旧密码不能为空！");
				addFrm.uid.focus();
				return false;
			}
			if(addFrm.newpwd.value == ""){
				alert("新密码不能为空！");
				addFrm.pwd.focus();
				return false;
			}
			if(addFrm.rnewpwd.value != addFrm.newpwd.value){
				alert("新密码与重复新密码不一致");
				addFrm.rpwd.focus();
				return false;
			}
		}
	</script>
</body>
</html>