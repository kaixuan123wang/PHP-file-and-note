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
			<td>文章标题</td>
			<td>评论内容</td>
			<td>评论者</td>
			<td>发布时间</td>
			<td>查看</td>
			<td>删除</td>
		</tr>
		<?php
			include("conn.php");
			$sql = "select * from observe";
			$result = mysql_query($sql);
			while($arr = mysql_fetch_array($result)){
				$id = $arr["id"];
				$articleId = $arr["articleId"];
				$content = substr(trim(htmlentities($arr["content"],ENT_QUOTES,"UTF-8")), 0,48);
				$observerId = $arr["observerId"];
				$time = $arr["time"];
				$sql = "select * from touristUser where uid = $observerId";
				$result1 = mysql_query($sql);
				$uArr = mysql_fetch_array($result1);
				$obsUser = $uArr["user"];
				$sql = "select * from article where id = $articleId";
				$result2 = mysql_query($sql);
				$AArr = mysql_fetch_array($result2);
				$title = $AArr["title"];
		?>
		<tr>
			<td><?php echo $id;?></td>
			<td><?php echo $title;?></td>
			<td><?php echo $content;?></td>
			<td><?php echo $obsUser;?></td>
			<td><?php echo $time;?></td>
			<td>
				<a href=<?php echo "../articleSee.php?id=".$articleId;?> target="_block">查看</a>
			</td>
			<td>
				<a href=<?php echo "delObs.php?id=".$id;?>>删除</a>
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