<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数据管理系统</title>
	<style>
		table{
			margin: 0 auto;
			border-collapse: collapse;
			text-align: center;
		}
	</style>
</head>
<body>
	<table width="600" cellspacing="0" border="1">
	<tr>
		<td colspan="5">数据库管理系统</td>
	</tr>
		<tr>
			<td>ID</td>
			<td>姓名</td>
			<td>性别</td>
			<td>修改</td>
			<td>删除</td>
		</tr>
		<?php
			include("conn.php");
			$sql = "select * from tb_into";
			$result = mysql_query($sql);
			while($a = mysql_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $a[0]?></td>
			<td><?php echo $a[1]?></td>
			<td><?php echo $a[2]?></td>
			<td><a href="#">修改</a></td>
			<td><a href="#">删除</a></td>
		</tr>
		<?php
			}
		?>
	</table>
</body>
</html>