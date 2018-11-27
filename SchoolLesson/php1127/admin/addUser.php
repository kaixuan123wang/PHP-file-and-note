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
<body>
	<div class="page">
		<form action="saveUser.php" method="post" name="addFrm" onsubmit="return chkFrm()">
		<h4>添加管理员</h4>
		<p><label for="uid">输入账户：</label><input type="text" name="uid" id="uid"></p>
		<p><label for="pwd">输入密码：</label><input type="password" name="pwd" id="pwd"></p>
		<p><label for="rpwd">重复密码：</label><input type="password" name="rpwd" id='rpwd'></p>
		<p><input type="submit" value="保存" name="btnSave"></p>	
		</form>	
	</div>
	<script>
		function chkFrm(){
			if(addFrm.uid.value == ""){
				alert("账号不能为空！");
				addFrm.uid.focus();
				return false;
			}
			if(addFrm.pwd.value == ""){
				alert("密码不能为空！");
				addFrm.pwd.focus();
				return false;
			}
			if(addFrm.rpwd.value != addFrm.pwd.value){
				alert("密码与重复密码不一致");
				addFrm.rpwd.focus();
				return false;
			}
		}
	</script>
</body>
</html>