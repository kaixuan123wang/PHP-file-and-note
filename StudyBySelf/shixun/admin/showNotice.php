<?php
session_start();
if(!isset($_SESSION["key"])){
	echo "<script>location.href='backStage.php';</script>";
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
			<td>标题</td>
			<td>内容</td>
			<td>发布人</td>
			<td>发布时间</td>
			<td>查看</td>
			<td>删除</td>
		</tr>
		<?php
			include("conn.php");
			$sql = "select * from notice";
			$result = mysql_query($sql);
			while($arr = mysql_fetch_array($result)){
				$id = $arr["id"];
				$title = $arr["title"];
				$content = substr(trim(htmlentities($arr["content"],ENT_QUOTES,"UTF-8")), 0,48);
				$actorId = $arr["actorId"];
				$time = $arr["time"];
				$sql = "select * from adminUser where uid = $id";
				$result1 = mysql_query($sql);
				$uArr = mysql_fetch_array($result1);
				$user = $uArr["user"];
		?>
		<tr>
			<td><?php echo $id;?></td>
			<td><?php echo $title;?></td>
			<td><?php echo $content;?></td>
			<td><?php echo $user;?></td>
			<td><?php echo $time;?></td>
			<td>
				<a href=<?php echo "../noticeSee.php?id=".$id;?> target="_block">查看</a>
			</td>
			<td>
				<a href=<?php echo "delNotice.php?id=".$id;?>>删除</a>
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