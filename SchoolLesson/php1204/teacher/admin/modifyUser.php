<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改用户信息</title>
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
<?php 
include("conn.php");
if(!isset($_GET["id"])){
	echo "<script>location.href='listUser.php';</script>";
}
else{
	$sid = $_GET["id"];
	$sql = "select * from tb_user where id =".$sid;
	$result = mysql_query($sql,$lk);
	$rs = mysql_fetch_array($result);
	$uid = $rs["username"];	
}
?>
	<div class="page">
		<form name="addFrm" action="updateUser.php?id=<?php echo $sid;?>" method="post" onsubmit="return chkFrm();">
		<h4>修改用户【<?php echo $uid;?>】</h4>
		<p><label for="uid">输入原密码：</label><input type="password" name="oldPwd" id="oldPwd"></p>
		<p><label for="pwd">输入新密码：</label><input type="password" name="newPwd" id="newPwd"></p>
		<p><label for="rpwd">确认新密码：</label><input type="password" name="rnewPwd" id="rnewPwd"></p>		
		<p><input type="submit" value="更新" name="btnUpdate"></p>	
		</form>	
	</div>
	<script>
		function chkFrm(){
			if(addFrm.oldPwd.value == ""){
				alert("原密码不能为空！");
				addFrm.oldPwd.focus();
				return false;
			}
			if(addFrm.newPwd.value == ""){
				alert("新密码不能为空！");
				addFrm.newPwd.focus();
				return false;
			}
			if(addFrm.newPwd.value != addFrm.rnewPwd.value){
				alert("两次输入新密码不一致!");
				addFrm.newPwd.value = "";
				addFrm.rnewPwd.value = "";
				addFrm.newPwd.focus();
				return false;
			}
		}
	</script>
</body>
</html>