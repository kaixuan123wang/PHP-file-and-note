<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	if(isset($_POST["sbt"])){
		$uid = htmlspecialchars($_POST["uid"]);//防转义
		$pwd = htmlspecialchars($_POST["pwd"]);
		echo $uid."-->".$pwd;
	}else{
		echo "<script>alert('非法用户请先登录');location.href='1.php'</script>";
		}
	?>
</body>
</html>