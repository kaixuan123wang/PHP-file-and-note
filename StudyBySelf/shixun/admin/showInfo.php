<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.all>ul>li{
			display: flex;
			flex-flow: row nowrap;
			justify-content: space-between;
			height: 5vw;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_SESSION["key"])){
			include("conn.php");
			$id = $_SESSION["key"];
			$sql = "select * from adminUser where uid = $id";
			$result = mysql_query($sql);
			$arr = mysql_fetch_array($result);
		}else{

		}
		
	?>
	<div class="all">
		<ul>
			<li>
				<div class="left">ID编号</div>
				<div class="right"><?php echo $arr["uid"];?></div>
			</li>
			<li>
				<div class="left">账号</div>
				<div class="right"><?php echo $arr["user"];?></div>
			</li>
			<li>
				<div class="left">账号所有人</div>
				<div class="right"><?php echo $arr["nickName"];?></div>
			</li>
			<li>
				<div class="left">性别</div>
				<div class="right"><?php echo $arr["sex"];?></div>
			</li>
			<li>
				<div class="left">Email</div>
				<div class="right"><?php echo $arr["email"];?></div>
			</li>
			<li>
				<div class="left">QQ</div>
				<div class="right"><?php echo $arr["qq"];?></div>
			</li>
		</ul>
	</div>
</body>
</html>