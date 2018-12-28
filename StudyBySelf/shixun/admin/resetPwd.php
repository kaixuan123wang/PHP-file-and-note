<?php
session_start();
if(isset($_SESSION["key"])){
	if(isset($_GET["id"])){
		include("conn.php");
		$id = $_GET["id"];
		$sql = "select * from touristUser where uid = $id";
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
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<form action="resetPwd_finish.php" method="post" name="frm" onsubmit="return chkFrm();">
	<ul>
		<li>
			<label for="">用户名：</label>
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
			<input type="submit" value="提交" name="resetPwd_sbt">
			<input type="reset" value="重置">
		</li>
	</ul>
	</form>
	<script>
        if (window.top==self){
            location.href='./backStage.php';
        }
        function chkFrm(){
            if(frm.pwd.value == ""){
                alert("密码不能为空");
                return false;
            }
            if(frm.pwd.value != frm.repwd.value){
            	alert("密码与重复密码不一致");
                return false;
            }
        }
    </script>
</body>
</html>