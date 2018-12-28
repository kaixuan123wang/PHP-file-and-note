<?php
session_start();
if(!isset($_SESSION["key"])){
	echo "<script>location.href='login.php';</script>";
}
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
			<td>账号</td>
			<td>修改密码</td>
			<td>删除账号</td>
		</tr>
		<?php 
			include("conn.php");
			$sql = "select * from adminUser";
			$result = mysql_query($sql);
			while($arr = mysql_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $arr["uid"]?></td>
			<td><?php echo $arr["user"]?></td>
			<td><a href=<?php echo "adminPwd.php?id=".$arr["uid"];?>>修改密码</a></td>
			<td>
				<a href=<?php echo "delAdmin.php?id=".$arr["uid"];?>>删除账号</a>
			</td>
		</tr>
	<?php }?>
	</table>
	<script>
        if (window.top==self){
            location.href='./backStage.php';
        }
    </script>
</body>
</html>