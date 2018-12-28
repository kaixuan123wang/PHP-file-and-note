<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		table{
			text-align: center;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<table border="1" cellspacing="0">
		<tr>
			<td>管理员ID</td>
			<td>管理员账户</td>
			<td>账号所有者</td>
			<td>性别</td>
			<td>邮箱</td>
			<td>QQ号</td>
		</tr>
		<?php
		if(isset($_SESSION["key"])){
			include("conn.php");
			$sql = "select * from adminUser";
			$result = mysql_query($sql);
			while($arr = mysql_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $arr["uid"];?></td>
			<td><?php echo $arr["user"]?></td>
			<td><?php echo $arr["nickName"]?></td>
			<td><?php echo $arr["sex"];?></td>
			<td><?php echo $arr["email"];?></td>
			<td><?php echo $arr["qq"];?></td>
		</tr>
	<?php }}else{
		echo "<script>alert('无效请求，请重新登陆后再试');location.href='./login.php';</script>";
	}?>
	</table>
	<script>
        if (window.top==self){
            location.href='./backStage.php';
        }
    </script>
</body>
</html>