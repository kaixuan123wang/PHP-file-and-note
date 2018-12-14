<?php
	header("content-type:text/html;charset=utf8");
	mysql_connect("localhost","root","root") or die("无法连接到数据库");
	mysql_select_db("db_book") or die("未找到相关数据库");
	$sql = "select id,username,subject,content,itime from tb_guest order by id desc";
	$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		.all{
			width: 100%;
		}
		.all table{
			margin: 10px auto;
		}
		.all table td{
			text-align: center;
			min-width: 50px;
		}
	</style>
</head>
<body>
<div class="all">
	<table border="1" cellspacing="0">
		<th colspan="5">留言信息列表</th>
		<tr >
			<td>留言人</td>
			<td>留言主题</td>
			<td>留言内容</td>
			<td>留言时间</td>
			<td>删除</td>
		</tr>
		<?php 
			while($arr = mysql_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $arr[1]?></td>
			<td><?php echo $arr[2]?></td>
			<td><?php echo $arr[3]?></td>
			<td><?php echo $arr[4]?></td>
			<td><a href=<?php echo "del.php?id=".$arr[0]?>>删除</a></td>
		</tr>
		<?php } ?>
	</table>
</div>
	
</body>
</html>