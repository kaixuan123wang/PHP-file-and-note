<?php 
	include("conn.php");
	$sql = "slelct * from tb_user";
	$result = mysql_query($sql);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<table>
 		<tr>
 			<td>id</td>
 			<td>栏目名</td>
 			<td>栏目地址</td>
 			<td>是否显示</td>
 			<td>修改</td>
 			<td>删除</td>
 		</tr>
 		<?php 
 			for($arr = mysql_fetch_array($result)){
 		?>
 		<tr>
 			<td><?php echo $arr["0"]?></td>
 			<td><?php echo $arr["1"]?></td>
 			<td><?php echo $arr["2"]?></td>
 			<td><?php echo $arr["3"]?></td>
 			<td><a href="#">修改</a></td>
 			<td><a href="#">删除</a></td>
 		</tr>
 		<?php } ?>
 	</table>
 </body>
 </html>