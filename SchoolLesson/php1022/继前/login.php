<?php
	session_start();
	$randCode = rand(1000,9999);
	$_SESSION["code"] = $randCode;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登录窗口</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.page{
			width: 350px;
			height: 200px;
			border: 1px solid #000;
			text-align: center;
			margin: 0 auto;
		}
		h3{
			width: 350px;
			height: 50px;
			background: #f90;
			line-height: 50px;
		}
		p{
			margin-top: 10px;
		}
		#code{
			width: 70px;
		}

	</style>
</head>
<body>
	<div class="page">
		<h3>用户登录系统</h3>
		<form action="validate.php" method="post" name="loginFrm">
			<p><label for="uid">账号：<input type="text" name="uid"></label></p>
			<p><label for="pwd">密码：<input type="password" name="pwd"></label></p>
			<p><label for="code">验码：<input type="text" name="code" id="code"><img src="code.php" alt="验证码"></label></p>
			<p><label for="submit"><input type="submit" value=" 登录 " name="lgnBtn" onclick="return clkFrm()"></label></p>
		</form>
	</div>
	<script>
	function clkFrm(){
		if(loginFrm.uid.value == ""){
			alert("账号不能为空！");
			loginFrm.uid.focus();
			return false;
		}
		if(loginFrm.pwd.value == ""){
			alert("密码不能为空！");
			loginFrm.pwd.focus();
			return false;
		}
		if(loginFrm.code.value == ""){
			alert("验证码不能为空！");
			loginFrm.code.value = "";
			loginFrm.code.focus();
			return false;
		}
		if(loginFrm.code.value != <?php echo $_SESSION["code"]?>){
			alert("验证码错误");
			loginFrm.code.value = "";
			loginFrm.code.focus();
			return false;
		}
	}
	</script>
</body>
</html>