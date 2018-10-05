<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_POST["submit"])){
			$nick = $_POST["nick"];
			//用@屏蔽$face由于未选择头像而无法取值的错误
			@$face = $_POST["face"];
			//判断昵称与头像是否为空
			if($nick == ""||$face == ""){
				echo "未成功注册";
			}else{
				echo "昵称：".$nick."<img src='face/$face.gif'>";
			}
		}
	?>
</body>
</html>