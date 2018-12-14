<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>栏目信息管理</title>
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
	<table width="750" cellspacing="0">
		<tr>
			<td colspan="6">栏目信息管理界面</td>			
		</tr>
		<tr>
			<td width="10%">ID号</td>
			<td width="20%">栏目名称</td>
			<td width="20%">链接地址</td>
			<td width="20%">是否显示</td>
			<td width="15%">修改</td>
			<td width="15%">删除</td>
		</tr>
		<?php 			
			include("conn.php");
			$sql = "select * from tb_column";			
			$result = mysql_query($sql);
			while($rs = mysql_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $rs['id'] ?></td>
			<td><?php echo $rs['colName'] ?></td>
			<td><?php echo $rs['colUrl'] ?></td>
			<td><?php echo $rs['colShow'] ?></td>
			<td><a href="modifyColumn.php?id=<?php echo $rs['id'] ?>">修改</a></td>
			<td><a href="javascript:del(<?php echo $rs['id'] ?>)">删除</a></td>
		</tr>
		<?php } ?>		
	</table>
	<script>
		function del(did){
			if(confirm("您确定要删除吗？")){
				location.href="delColumn.php?id="+did;
				return false;
			}
		}
	</script>
</body>
</html>