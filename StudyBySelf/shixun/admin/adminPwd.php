<?php
session_start();
if(isset($_SESSION["key"])){
	if(isset($_GET["id"])){
		include("conn.php");
		$id = $_GET["id"];
		$sql = "select * from adminUser where uid = $id";
		$result = mysql_query($sql);
		$arr = mysql_fetch_array($result);
	}else{
		echo "<script>location.href='backStage.php';</script>";
	}
}else{
	echo "<script>location.href='backStage.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		li{
			list-style: none;
			text-align: center;
		}
		label{
			display: inline-block;
			width: 100px;
			text-align: right;
		}
	</style>
</head>
<body>
	<form action="adminPwd_finish.php" method="post" name="frm"  onsubmit="return chkFrm();">
	<ul>
		<li>
			<label for="">账户：</label>
			<input type="text" name="user" value=<?php echo $arr["user"]?> readonly>
		</li>
		<li>
			<label for="pwd">新密码：</label>
			<input type="password" name="pwd" id="pwd">
		</li>
		<li>
			<label for="repwd">重复新密码：</label>
			<input type="password" name="repwd" id="repwd">
		</li>
		<li>
			<input type="submit" value="提交" name="adminPwd_sbt">
			<input type="reset" value="重置">
		</li>
	</ul>
	</form>
	<script>
        if (window.top==self){
            location.href='./backStage.php';
        }
        function trim(str){ //删除左右两端的空格
　　     return str.replace(/(^\s*)|(\s*$)/g, "");
　　 	}
        function chkFrm(){
        	if(trim(frm.user.value) == ""){
        		alert("账号名不能为空");
        		return false;
        	}
        	if(frm.pwd.value == ""){
        		alert("密码不能为空");
        		return false;
        	}
        	if(frm.pwd.value != frm.repwd.value){
        		alert("新密码与重复密码不相同");
        		return false;
        	}
        }
    </script>
</body>
</html>