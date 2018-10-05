<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_POST["sbt"])){
			$nick = $_POST["nick"];
			$pwd = $_POST["pwd"];
			$sex = $_POST["sex"];
			$resume = $_POST["resume"];
			$hobby = implode("  ", $_POST["hobby"]);
		}else{
					echo "<script>alert('非法用户请先登录');location.href='3.php'</script>";
		}
	?>
	<div class="page">
		<h3>用户保存信息如下</h3>
		<div class="frm">
			<form action="5.php" method="post">
				<p>
					<label for="nick">昵称：<?php echo $nick;?></label>
				</p>
				<p>
					<label for="pwd">密码：<?php echo $pwd;?></label>
				</p>
				<p>
					<label for="sex">性别：<?php echo $sex?></label>
				</p>
				<p>
					<label for="hobby">爱好：<?php echo $hobby;?></label>
				</p>
				<p>
					<label for="resume">学历：<?php echo $resume;?></label>
				</p>
			</form>
		</div>
	</div>
</body>
</html>