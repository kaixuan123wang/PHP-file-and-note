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
			<td>用户ID</td>
			<td>用户名</td>
			<td>用户昵称</td>
			<td>头像地址</td>
			<td>性别</td>
			<td>个性签名</td>
			<td>邮箱</td>
			<td>QQ号</td>
			<td>密保问题</td>
		</tr>
		<?php
		if(isset($_SESSION["key"])){
			include("conn.php");
			$sql = "select * from touristUser";
			$result = mysql_query($sql);
			while($arr = mysql_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $arr["uid"];?></td>
			<td><?php echo $arr["user"]?></td>
			<td><?php echo $arr["nickName"]?></td>
			<td><?php echo $arr["image"];?></td>
			<td><?php echo $arr["sex"];?></td>
			<td><?php echo $arr["explains"];?></td>
			<td><?php echo $arr["email"];?></td>
			<td><?php echo $arr["qq"];?></td>
			<td><?php echo $arr["protection"];?></td>
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