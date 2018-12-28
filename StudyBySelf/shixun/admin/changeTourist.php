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
			<td>ID</td>
			<td>用户名</td>
			<td>修改密码</td>
			<td>修改密保</td>
			<td>删除用户</td>
		</tr>
		<?php 
			if(isset($_SESSION["key"])){
			include("conn.php");
			$sql = "select * from touristUser";
			$result = mysql_query($sql);
			if(mysql_num_rows($result) <= 0){
				die("没有任何用户数据");
			}else{
				while($arr = mysql_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $arr["uid"];?></td>
			<td><?php echo $arr["user"]?></td>
			<td>
				<a href=<?php echo "resetPwd.php?id=".$arr["uid"]?>>修改密码</a>
			</td>
			<td>
				<a href=<?php echo "resetProtect.php?id=".$arr["uid"]?>>修改密保</a>
			</td>
			<td>
				<a href=<?php echo "delTourist.php?id=".$arr["uid"]?>>删除用户</a>
			</td>
		</tr>
	<?php }}}else{
		echo "<script>alert('无效请求，请重新登陆后再试');location.href='./login.php';</script>";
	}
	?>
	</table>
	<script>
        if (window.top==self){
            location.href='./backStage.php';
        }
    </script>
</body>
</html>