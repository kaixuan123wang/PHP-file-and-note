<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户信息管理</title>
	<style>
		table {
			border-collapse:collapse;			
		}
		td {
			text-align: center;
			border: 1px solid #f90;
		}
	</style>
</head>
<body>
	<table width="600" cellspacing="0">
		<tr>
			<td colspan="4">用户信息管理界面</td>			
		</tr>
		<tr>
			<td width="25%">ID号</td>
			<td width="25%">用户名</td>
			<td width="25%">修改</td>
			<td width="25%">删除</td>
		</tr>
		<?php 			
			include("conn.php");
			$sql = "select * from tb_user";			
			$result = mysql_query($sql);
			while($rs = mysql_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $rs['id'] ?></td>
			<td><?php echo $rs['username'] ?></td>
			<td><a href="modifyUser.php?id=<?php echo $rs['id'] ?>">修改</a></td>
			<td><a href="javascript:del(<?php echo $rs['id'] ?>)">删除</a></td>
		</tr>
		<?php } ?>		
	</table>
	<script>
		function del(did){
			if(confirm("您确定要删除吗？")){
				location.href="delUser.php?id="+did;
				return false;
			}
		}
	</script>
</body>
</html>